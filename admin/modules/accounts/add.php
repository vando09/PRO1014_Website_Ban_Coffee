 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Thêm tài khoản</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Quản lý tài khoản</a></li>
                <li class="breadcrumb-item active">Thêm tài khoản</li>
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
                  <input type="text" id="inputName" class="form-control" value="">
                </div>
                <div class="form-group">
                  <label for="inputMail">Email tài khoản</label>
                  <input type="text" id="inputMail" class="form-control" value="">
                </div>
                <div class="form-group">
                  <label for="inputPass">Mật khẩu tài khoản</label>
                  <input type="text" id="inputPass" class="form-control" value="">
                </div>
                <div class="form-group">
                  <label for="inputAddress">Địa chỉ</label>
                  <input type="text" id="inputAddress" class="form-control" value="">
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