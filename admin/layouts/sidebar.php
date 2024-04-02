<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/admin/" class="brand-link">
    <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">CoffeeShop</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
        </a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Tìm kiếm chức năng"
          aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="/admin/" class="nav-link ">
          <i class="fas fa-list"></i>
            <p>
              Quản lý loại hàng
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/admin/?act=categories&page=add" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm loại hàng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/?act=categories&page=list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách loại hàng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Loại hàng đã xóa</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="/admin/" class="nav-link ">
          <i class="fas fa-tag"></i> 
            <p>
              Quản lý sản phẩm
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/admin/?act=product&page=add" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm sản phẩm </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/?act=product&page=list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách sản phẩm</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sản phẩm đã xóa</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="../admin" class="nav-link ">
          <i class="fas fa-user"></i>
            <p>
              Quản lý người dùng
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm người dùng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="product.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách người dùng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Người dùng đã xóa</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="../admin" class="nav-link ">
          <i class="fas fa-shopping-bag"></i>
            <p>
              Quản lý đơn hàng
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm đơn hàng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="product.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách đơn hàng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Đơn hàng đã xóa</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>