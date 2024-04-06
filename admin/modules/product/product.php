<?php
require_once "config/database.php";
class Product
{
    public function addProduct()
    {
        $db = new Database();
        $conn = $db->getDatabase();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $sale = $_POST['sale'];
            $thumbnail = $_POST['thumbnail'];
            $description = $_POST['description'];
            $category_id = $_POST['category_id'];


            move_uploaded_file(
                $_FILES['thumbnail']['tmp_name'],
                UPLOAD_URL.time().$_FILES['thumbnail']['name']);
           

            $stmt = $conn->prepare("INSERT INTO products (name, price, sale, thumbnail, description, category_id) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssi", $name, $price, $sale, $thumbnail, $description, $category_id);
            if ($stmt->execute()) {
                echo '<div class="alert alert-success" role="alert">
           Thêm sản phẩm thành công!
        </div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">
               Thêm sản phẩm thất bại!
              </div>';
            }
        }
    }
    public function editProduct()
    {
        $db = new Database();
        $conn = $db->getDatabase();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lay id cua san pham can sua
            $id = $_GET["edit"];
            $sql = "SELECT * FROM products WHERE id ='$id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo json_encode($row);
        }
    }
    // public function listProduct()
    // {

    // }
}
