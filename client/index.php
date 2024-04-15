<?php
ob_start();
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
error_reporting(E_ALL);
include "client/particals/header.php";
require_once "models/database.php";
require_once "../admin/variable.php";
$db = new Database();
$conn = $db->getDatabase();
// echo sizeof($_POST);
if(sizeof($_POST) > 0){
    //có thêm dữ liệu, 
    //người dùng người ta mới đẩy lên nè
}
?>
<?php include "client/particals/banner.php" ?>
<?php include "client/particals/layout_product.php"; ?>
<?php include "client/particals/footer.php"; ?>