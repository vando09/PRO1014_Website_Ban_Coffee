 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Sửa tài khoản</h1>
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