<?php require "layouts/header.php" ?>
<!-- Main Sidebar Container -->
<?php require "layouts/sidebar.php" ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Trang chủ</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <div class="container-fluid">
     

    <?php require "config/router.php";
    $product = new Product();
    $product ->actionProduct($product);
    ?>
    </div>
  </section>
  <!-- /.content -->
  <?php 
  
  
  require "layouts/footer.php" ;
  require "config/database.php";  