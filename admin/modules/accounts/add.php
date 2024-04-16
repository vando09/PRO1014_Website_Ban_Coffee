<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $address = $_POST["address"];
  $role = $_POST["role"]; 

  $thumbnail = UPLOAD_URL . time() . $_FILES['thumbnail']['name'];
  move_uploaded_file(
    $_FILES['thumbnail']['tmp_name'],
    UPLOAD_URL . time() . $_FILES['thumbnail']['name']
  );

  $stmt = $conn->prepare("INSERT INTO users (name, email, password, address, thumbnail, role)
          VALUES (?,?,?,?,?,?)"); 
          $stmt->bind_param("sssssi",$name,$email,$password,$address,$thumbnail,$role);    
          if($stmt->execute()){
            echo '<div class="alert alert-success" role="alert">
            Thêm người dùng thành công!
         </div>';
             } else {
                 echo '<div class="alert alert-danger" role="alert">
                Thêm người dùng thất bại!
               </div>';
             }
          }
?>


<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">

        <div class="card-header">
          <h3 class="card-title">Thêm tài khoản</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <form id="quickForm" action="" method="POST" novalidate="novalidate" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="name">Tên tài khoản</label>
              <input type="text" id="name" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
              <label for="email">Email tài khoản</label>
              <input type="text" id="email" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
              <label for="password">Mật khẩu tài khoản</label>
              <input type="password" id="password" name="password" class="form-control" value="">
            </div>
            <div class="form-group">
              <label for="address">Địa chỉ</label>
              <input type="text" id="address" name="address" class="form-control" value="">
            </div>

            <div class="form-group">
              <label for="role">Loại tài khoản</label>
              <select id="role" name="role" class="form-control custom-select">
              <option value="1">Admin</option>
              <option value="2">Khách hàng</option>
            </select>
            </div>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail">
                <label class="custom-file-label" for="thumbnail">Chọn ảnh</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Tải lên</span>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary mb-3 ml-4">Thêm</button>
        </form>
      </div>
      <!-- /.card -->
    </div>

  </div>
</section>
