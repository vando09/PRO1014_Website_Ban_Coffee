<?php
$isEdit = isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] === 'edit' ? true : false;
?>
<!-- Content Wrapper. Contains page content -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">
              <?= $isEdit ? "Sửa" : "Thêm" ?>
              danh mục
            </h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Tên danh mục</label>
              <input type="text" id="inputName" class="form-control" value="">
            </div>
            <div class="form-group">
              <label for="inputDescription">Mô tả danh mục</label>
              <textarea id="inputDescription" class="form-control" rows="4">

                  </textarea>
            </div>
            <div class="form-group">
              <label for="inputStatus">Trạng thái</label>
              <select id="inputStatus" class="form-control custom-select">
                <option disabled>Mặc định</option>
                <option>Ẩn</option>
                <option selected>Hiển thị</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputClientCompany">Biểu tượng</label>
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
        <input type="submit" value="Thêm mới" class="btn btn-success float-right">
      </div>
    </div>
  </div>
  </section>
  <!-- /.content -->
<!-- /.content-wrapper -->