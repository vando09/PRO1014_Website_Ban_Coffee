<?

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
    <main>
        <div class="container-fluid" style="margin-left: 25px;">
            <div class="card mt-12" style="width: 1450px;">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4>Danh sách đơn hàng</h4>
                    <a href="/admin?act=order&page=list" class="btn btn-success">Xem chi tiết</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên đơn hàng</th>
                                <th scope="col">Tên khách hàng</th>
                                <th scope="col">Ngày đặt hàng</th>
                                <th scope="col" width='35%'>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM orders";
                            $result = mysqli_query($connect, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<th scope='row'>" . $row['id'] . "</th>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['created_at'] . "</td>";
                                echo "<td>";
                                echo "<button class='btn btn-primary edit-order' data-id='" . $row['id'] . "'>Sửa</button> ";
                                echo "<button class='btn btn-danger delete-order' data-id='" . $row['id'] . "'>Xóa</button>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?
$connect->close();
?>
