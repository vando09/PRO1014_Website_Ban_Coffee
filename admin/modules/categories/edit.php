<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sửa danh mục</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Quản lý danh mục</a></li>
            <li class="breadcrumb-item active">Sửa danh mục</li>
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
            <h3 class="card-title">Chi tiết danh mục</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Tên danh mục</label>
              <input type="text" id="inputName" class="form-control" value="Cafe truyền thống">
            </div>
            <div class="form-group">
              <label for="inputDescription">Mô tả danh mục</label>
              <textarea id="inputDescription" class="form-control" rows="4">Cà phê truyền thống là thức uống được pha chế từ những hạt cà phê chất lượng cao, thường được pha theo các phương pháp truyền thống như phin, pha máy hoặc pha tay. Mỗi tách cà phê mang đến hương vị đặc trưng, thơm ngon và đậm đà, tạo nên sự hấp dẫn và cuốn hút đặc biệt trong nền văn hóa cà phê của mỗi quốc gia.</textarea>
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
              <input type="text" id="inputClientCompany" class="form-control" value="fa-solid fa-mug-saucer">
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