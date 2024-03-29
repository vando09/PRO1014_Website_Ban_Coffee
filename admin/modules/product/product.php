<?php

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
}

?>