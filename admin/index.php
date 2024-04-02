<?php
ob_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once "config/database.php";
require_once "variable.php";
require "layouts/header.php";
$db = new Database();
$conn = $db->getDatabase();

?>
<!-- Main Sidebar Container -->
<?php require "layouts/sidebar.php" ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
     

    <?php require "config/router.php"?>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  <?php require "layouts/footer.php" ?>