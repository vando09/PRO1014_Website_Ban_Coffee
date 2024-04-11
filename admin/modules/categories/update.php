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
        echo "Sửa danh mục thành công";
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

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sửa danh mục sản phẩm</h3>
                    </div>
                    <form id="quickForm" action="" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="form-group"> <label for="name">Tên sản phẩm</label> <input type="text" name="name" class="form-control" id="name" placeholder="Nhập tên sản phẩm"> </div>
                                    <div class="card card-info">
                                        <div class="card-body">
                                            <div class="form-group"> <label for="image">Hình ảnh</label>
                                                <div class="input-group">
                                                    <div class="custom-file"> <input type="file" name="image[]" class="custom-file-input" id="image" multiple> <label class="custom-file-label" for="image">Choose file</label> </div>
                                                    <div class="input-group-append"> <span class="input-group-text">Upload</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-xl-3"> <button type="submit" name="update" class="btn btn-primary">Sửa</button> </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>