<?php

$server = "localhost";
$username = "root";
$password = "mysql";
$database = "du_an_1";


$connect = new mysqli($server, $username, $password, $database);

if ($connect->connect_error) {
  echo "ket noi loi";
  exit();
}

if (session_status() == 0) {
  session_start();
}


?>


<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main> <!-- Content Wrapper. Contains page content -->
    <div class="content">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Danh mục</h1>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-primary">
          <i class="fa-solid fa-plus me-3"></i>Thêm Danh Mục
        </button>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
          <h6 class="mb-12">Bảng loại</h6>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên</th>
                <th scope="col">Hình</th>
                <th scope="col" class="d-flex justify-content-end">
                  <!-- <a href="index.php?act=category&page=add"><button type="button" class="btn btn-primary m-2">Thêm</button></a> -->

                </th>

              </tr>
            </thead>
            <tbody>
              <?php
              $select = "SELECT * FROM categories";
              $result = $connect->query($select);
              while ($item = $result->fetch_assoc()) :
              ?>
                <tr>
                  <th scope="col"><?= $item['id'] ?></th>
                  <th scope="col"><?= $item['name'] ?></th>
                  <th scope="col"><img src="<?= $item['thumbnail'] ?>" width="100" height="150"></th>
                  <th scope="col">
                    
                    <a href="/admin/?act=categories&page=update<?= $item['id'] ?>" type="submit" name="update" class="btn btn-primary m-2">Cập nhật</a>


                    <form action="/admin/?act=categories&page=delete&id=<?= $item['id'] ?>" method="POST">
                      <input type="submit" name="delete" class="btn btn-primary m-2" value="Xóa" />
                    </form>

                  </th>
                </tr>

              <?php
              endwhile;
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>

<?php
$connect->close();
?>