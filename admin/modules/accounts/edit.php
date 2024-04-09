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
                                        <input type="text" value="<?php echo isset($editUser['name']) ? $editUser['name'] : ''; ?>" name="name"
                                            class="form-control" id="name" placeholder="Nhập tên người dùng">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" value="<?php echo isset($editUser['email']) ? $editUser['email'] : ''; ?>" name="email"
                                            class="form-control" id="email" placeholder="Nhập địa chỉ email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mật khẩu</label>
                                        <input type="password" value="<?php echo isset($editUser['password']) ? $editUser['password'] : ''; ?>"
                                            name="password" class="form-control" id="password"
                                            placeholder="Nhập mật khẩu">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Địa chỉ</label>
                                        <input type="text" value="<?php echo isset($editUser['address']) ? $editUser['address'] : ''; ?>" name="address"
                                            class="form-control" id="address" placeholder="Nhập địa chỉ">
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Loại tài khoản</label>
                                        <select class="form-control" name="role" id="role">
                                            <option value="admin" <?php if (isset($editUser['role']) && $editUser['role'] == 'admin')
                                                echo 'selected'; ?>>
                                                Admin
                                            </option>
                                            <option value="user" <?php if (isset($editUser['role']) && $editUser['role'] == 'user')
                                                echo 'selected'; ?>>
                                                Khách hàng
                                            </option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="thumbnail" class="custom-file-input"
                                                id="thumbnail">
                                            <label class="custom-file-label" for="thumbnail">Choose
                                                file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>