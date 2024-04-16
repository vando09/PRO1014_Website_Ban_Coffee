<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include "../client/particals/header.php";
require_once "models/database.php";
$db = new Database();
$conn = $db->getDatabase();
define('UPLOAD_URL', '../admin/images/');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['address']) || empty($_POST['role']) || empty($_FILES['thumbnail']['name'])) {
      echo '<div class="alert alert-danger" role="alert">
      Vui lòng điền đầy đủ thông tin người dùng!
      </div>';
    } else {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $address = $_POST["address"];
      $role = $_POST["role"];
  
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="alert alert-danger" role="alert">
            Email không hợp lệ!
        </div>';
      } elseif (strlen($password) < 6) {
        echo '<div class="alert alert-danger" role="alert">
            Mật khẩu phải có ít nhất 6 ký tự!
        </div>';
      } else {
        $thumbnail = UPLOAD_URL . time() . $_FILES['thumbnail']['name'];
        move_uploaded_file(
          $_FILES['thumbnail']['tmp_name'],
          UPLOAD_URL . time() . $_FILES['thumbnail']['name']
        );
  
        $stmt = $conn->prepare("INSERT INTO users (name, email, password, address, role, thumbnail)
            VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssis", $name, $email, $password, $address, $role, $thumbnail);
  
        if ($stmt->execute()) {
          header("Location: sign_in.php?success=1");
          exit;
        } else {
          echo '<div class="alert alert-danger" role="alert">
                Đăng ký thất bại!
            </div>';
        }
      }
    }
  }
?>
<div class="content mt-5 mb-5">
    <div class="container rounded">
        <div class="bg-white">
            <div class="row align-items-center">
                <div class="col-md-12 border-right">
                    <div class="alert alert-success border-0 p-0 text-center">
                    </div>
                    
                    <form id="quickForm" action="" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                        <div class="card-body">
                        <div class="d-flex justify-content-between align-items-centermb-3">
                            <h4 class="text-right">Đăng kí</h4>
                        </div>
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
                                <div class="input-group mt-3">
                                    <input type="file" name="thumbnail" class="form-control" id="thumbnail">
                                    <label class="input-group-text" for="thumbnail">Chọn ảnh</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 text-center">
                            <button class="btn btn-primary profile-button" style="background-color: #333" name="login">
                                Đăng ký
                            </button>
                        </div>
                    </form>

                </div>

            </div>
            <div class="card-footer">
                <div class="text-danger">

                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../client/particals/footer.php"; ?>