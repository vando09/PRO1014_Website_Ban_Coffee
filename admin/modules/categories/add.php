<?php

if (isset($_POST['addProduct'])) {
    $nameCat = $_POST['name'];
    $imageFiles = $_FILES['image'];

    if (empty($nameCat)) {
        $err_name = "tên danh mục không được bỏ trống";
    } else {
        $err_name = "";
    }

    if (empty($imageFiles['name'][0])) {
        $err_image = "vui lòng chọn hình ảnh sản phẩm";
    } else {
        $err_image = "";
    }

    if (empty($err_name) && empty($err_image)) {
        $nameCat = $conn->real_escape_string($nameCat);

        $target_file = UPLOAD_URL. '/' . basename($imageFiles["name"][0]);

        if (move_uploaded_file($imageFiles["tmp_name"][0], $target_file)) {
            $sql = "INSERT INTO categories (name, thumbnail, status) VALUES ('{$nameCat}', '{$target_file}', 1)";

            if ($conn->query($sql) === TRUE) {
                echo "Thêm thành công";
            } else {
                echo "Lỗi: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Lỗi file hình ảnh";
        }
    }
}

$conn->close();
?>

<form method="post" action="" enctype="multipart/form-data" id="myForm">
  <div class="form-group">
    <label for="name">Tên danh mục:</label>
    <input type="text" class="form-control" id="name" name="name" required>
    <?php if (isset($err_name)) : ?>
      <span class="text-danger"><?php echo $err_name; ?></span>
    <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="image">Hình ảnh:</label>
    <input type="file" class="form-control-file" id="image" name="image[]" multiple required>
    <?php if (isset($err_image)) : ?>
      <span class="text-danger"><?php echo $err_image; ?></span>
    <?php endif; ?>
  </div>
  <button type="submit" name="addProduct" class="btn btn-primary">Thêm</button>
</form>

