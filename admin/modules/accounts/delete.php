<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['act']) && $_GET['act'] === 'accounts' && isset($_GET['page']) && $_GET['page'] === 'delete') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM users WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<div class="alert alert-success" role="alert">
                    Xóa người dùng thành công!
                </div>';
            header("location: /admin/?act=accounts&page=list");
        } else {
            echo '<div class="alert alert-danger" role="alert">
                    Xóa người dùng thất bại!
                </div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Lỗi: Không tìm thấy ID người dùng cần xóa!
            </div>';
    }
}

?>