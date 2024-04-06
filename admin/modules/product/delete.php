<?php
require_once "config/database.php";

// $isEdit = isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] === 'edit' ? true : false;
$db = new Database();
$conn = $db->getDatabase();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['act']) && $_GET['act'] === 'product' && isset($_GET['page']) && $_GET['page'] === 'delete') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM products WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<div class="alert alert-success" role="alert">
                    Xóa sản phẩm thành công!
                </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
                    Xóa sản phẩm thất bại!
                </div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Lỗi: Không tìm thấy ID sản phẩm cần xóa!
            </div>';
    }
}

?>