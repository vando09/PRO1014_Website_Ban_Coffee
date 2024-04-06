<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $select = "SELECT * FROM categories WHERE id = $id";
  $result = $conn->query($select);
  $item = $result->fetch_assoc();
}
if (isset($_POST['update'])) {
  $nameCat = isset($_POST['name'])? $_POST['name'] : '';
  $imageFiles = isset($_FILES['image'])? $_FILES['image'] : '';

  $err_name =!empty($nameCat)? '' : "tên danh mục không được bỏ trống";
  $err_image =!empty($imageFiles['name'][0])? '' : "vui lòng chọn hình ảnh sản phẩm";

  if (empty($err_name) && empty($err_image)) {
    $nameCat = $conn->real_escape_string($nameCat);

    $target_file = UPLOAD_URL. '/'. basename($imageFiles["name"][0]);

    if (move_uploaded_file($imageFiles["tmp_name"][0], $target_file)) {
      $sql = "UPDATE categories SET name = '$nameCat', thumbnail = '$target_file' WHERE id = $id";
      if ($conn->query($sql) === TRUE) {
        echo "Thêm thành công";
      } else {
        echo "Lỗi: ". $sql. "<br>". $conn->error;
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
    <?php if (!empty($err_name)) :?>
      <span class="text-danger"><?php echo $err_name;?></span>
    <?php endif;?>
  </div>
  <div class="form-group">
    <label for="image">Hình ảnh:</label>
    <input type="file" class="form-control-file" id="image" name="image[]" multiple required>
    <?php if (!empty($err_image)) :?>
      <span class="text-danger"><?php echo $err_image;?></span>
    <?php endif;?>
  </div>
  <button type="submit" name="update" class="btn btn-primary">Sửa</button>
</form>