<?php

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM users WHERE id ='$id'";
    $result = mysqli_query($conn, $sql);
    $editUser = mysqli_fetch_assoc($result);

    if (!$result) {
        echo "Lỗi kết nối CSDL: " . mysqli_error($conn);
    }
} else {
    header("Location: /admin/?act=accounts&page=list");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['address'], $_POST['role'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $role = $_POST['role'];
        $thumbnail = UPLOAD_URL . time() . $_FILES['thumbnail']['name'];
        move_uploaded_file(
            $_FILES['thumbnail']['tmp_name'],
            UPLOAD_URL . time() . $_FILES['thumbnail']['name']
        );

        $stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, password = ?, address = ?, role = ?, thumbnail = ? WHERE id = ?");
        $stmt->bind_param("ssssssi", $name, $email, $password, $address, $role, $thumbnail, $id);
        if ($stmt->execute()) {
            echo '<div class="alert alert-success" role="alert">
            Sửa người dùng thành công!
            </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
            Sửa người dùng thất bại!
            </div>';
        }
    }
}
?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Chi tiết tài khoản</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Tên tài khoản</label>
                  <input type="text" id="inputName" class="form-control" value="Alex">
                </div>
                <div class="form-group">
                  <label for="inputMail">Email tài khoản</label>
                  <input type="text" id="inputMail" class="form-control" value="Alex@gmail.com">
                </div>
                <div class="form-group">
                  <label for="inputAddress">Địa chỉ</label>
                  <input type="text" id="inputAddress" class="form-control" value="Công viên phần mềm">
                </div>
                <div class="form-group">
                  <label for="inputType">Loại tài khoản</label>
                  <select id="inputType" class="form-control custom-select">
                    <option disabled>Mặc định</option>
                    <option>Nhân viên</option>
                    <option selected>Khách hàng</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputStatus">Trạng thái</label>
                  <select id="inputStatus" class="form-control custom-select">
                    <option disabled>Mặc định</option>
                    <option>Khóa</option>
                    <option selected>Hoạt động</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputClientCompany">Ảnh đại diện</label>
                  <input type="text" id="inputClientCompany" class="form-control" value="">
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>
        <div class="row">
          <div class="col-12">
            <a href="#" class="btn btn-secondary">Hủy</a>
            <input type="submit" value="Cập nhật" class="btn btn-success float-right">
          </div>
        </div>
    </div>
</section>