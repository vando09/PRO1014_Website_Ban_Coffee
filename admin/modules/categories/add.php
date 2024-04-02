
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$server = "localhost";
$username = "root";
$password = "mysql";
$database = "du_an_1";

$connect = new mysqli($server, $username, $password, $database);

if ($connect->connect_error) {
    echo "kết nối thất bại";
    exit();
}

if (session_status() == 0) {
    session_start();
}

if (isset($_POST['addProduct'])) {
    $nameCat = $_POST['name'];
    $imageFiles = $_FILES['image'];

    if (empty($nameCat)) {
        $err_name = "tên danh mục không được bỏ trống";
    } else if (!preg_match("/^[a-zA-Z ]*$/",$nameCat)) {
        $err_name = "Tên danh mục chỉ chấp nhận chữ và khoảng trắng.";
    }

    if (empty($imageFiles['name'][0])) {
        $err_image = "vui lòng chọn hình ảnh sản phẩm";
    }

    if (empty($err_name) && empty($err_image)) {
        $nameCat = $connect->real_escape_string($nameCat);

        $target_dir = "";
        $target_file = $target_dir . basename($imageFiles["name"][0]);

        if (move_uploaded_file($imageFiles["tmp_name"][0], $target_file)) {
            $sql = "INSERT INTO categories (name, thumbnail, status) VALUES ('{$nameCat}', '{$target_file}', 1)";

            if ($connect->query($sql) === TRUE) {
                echo "Thêm thành công";
            } else {
                echo "Lỗi: " . $sql . "<br>" . $connect->error;
            }
        } else {
            echo "Lỗi file hình ảnh";
        }
        if (empty($err_image) && empty($err_insert)) {
          header('LOCATION:/admin?act=categories&page=delete&id= ');
      }
    }
}

$connect->close();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
     <h3>Thêm danh mục</h3>
    </header>
    <main>
      <p id="message" style="color: red;"></p>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" name="myForm" id="my_form">
    <div class="form-group">
        <label for="">Tên danh mục:</label>
        <input type="text" class="form-control"  name="name" autocomplete="off" required>
        <?php if (isset($err_name)): ?>
            <span class="text-danger"><?php echo $err_name; ?></span>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="image">Hình ảnh:</label>
        <input type="file" class="form-control-file" id="image" name="image[]" multiple required>
        <?php if (isset($err_image)): ?>
            <span class="text-danger"><?php echo $err_image; ?></span>
        <?php endif; ?>
    </div>
    <button type="submit" name="addProduct"class="btn btn-primary">Thêm</button>
</form>
</main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <script>
      let myForm = document.forms.myForm;
      let message =document.getElementById('message');

      myForm.onsubmit =function (){
        if(myForm.name.valua ==""){
          message.innerHTML = "Vui lòng nhập tên danh mục"
          return false;
        } else {
          message.innerHTML = "";
          return true;
        }
      }
    </script>
  </body>
</html>


