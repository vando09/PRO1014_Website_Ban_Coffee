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
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Sửa người dùng
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" action="" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Tên người dùng</label>
                                        <input type="text"
                                            value="<?php echo isset($editUser['name']) ? $editUser['name'] : ''; ?>"
                                            name="name" class="form-control" id="name"
                                            placeholder="Nhập tên người dùng">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email"
                                            value="<?php echo isset($editUser['email']) ? $editUser['email'] : ''; ?>"
                                            name="email" class="form-control" id="email"
                                            placeholder="Nhập địa chỉ email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mật khẩu</label>
                                        <input type="password"
                                            value="<?php echo isset($editUser['password']) ? $editUser['password'] : ''; ?>"
                                            name="password" class="form-control" id="password"
                                            placeholder="Nhập mật khẩu">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Địa chỉ</label>
                                        <input type="text"
                                            value="<?php echo isset($editUser['address']) ? $editUser['address'] : ''; ?>"
                                            name="address" class="form-control" id="address" placeholder="Nhập địa chỉ">
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Loại tài khoản</label>
                                        <select class="form-control" name="role" id="role">
                                            <option value="1" <?php if (isset($editUser['role']) && $editUser['role'] == '1')
                                                echo 'selected'; ?>>
                                                Admin
                                            </option>
                                            <option value="0" <?php if (isset($editUser['role']) && $editUser['role'] == '0')
                                                echo 'selected'; ?>>
                                                Khách hàng
                                            </option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="thumbnail" class="custom-file-input"
                                                id="thumbnail"   value="<?php echo isset($editUser['thumbnail']) ? $editUser['thumbnail'] : ''; ?>">
                                            <label class="custom-file-label" for="thumbnail">Choose file</label>
                                        </div>
                                        
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        
                                    </div>
                                    <img src="<?php echo $editUser['thumbnail']; ?>" alt="Old Thumbnail" width="100" class = "mt-3">

                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Quản lý tài khoản</a></li>
                <li class="breadcrumb-item active">Sửa tài khoản</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
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
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->