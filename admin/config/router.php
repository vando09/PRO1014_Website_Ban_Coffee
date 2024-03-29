<?php

$act = $_GET['act'] ?? '';

echo $act;
if (!empty ($act)) {

<<<<<<< HEAD
    switch ($act) {
        case "product":
            $page = $_GET['page'] ?? '';
            $id = $_GET['id'] ?? '';
            if (!empty ($page) && $page == 'add') {
                require "modules/product/add.php";
            } else if (!empty ($page) && $page == 'edit') {
                require "modules/product/add.php";
                if (sizeof($_POST) === 0) {
                    //load giao dien
                } else {
                    // sua du lieu 
                }
            } else if (!empty ($page) && $page == 'delete') {
                echo "load delete";
            } else {
                require "modules/product/list.php";
=======
                    if (!empty($page) && $page == 'add') {
                        require "modules/product/add.php";
                    } else if (!empty($page) && $page == 'edit') {
                        if (sizeof($_POST) === 0) {
                            // Hiển thị giao diện chỉnh sửa
                            require "modules/product/add.php";
                        } else {
                            // Sửa dữ liệu
                            // Xử lý dữ liệu được gửi đi qua $_POST
                        }
                    } else if (!empty($page) && $page == 'delete') {
                        // Xóa dữ liệu
                        echo "Delete action";
                    } else {
                        require "modules/product/list.php";
                    }
                    break;

                case "categories":
                    $page = $_GET['page'] ?? '';
                    $id = $_GET['id'] ?? '';

                    if (!empty($page) && $page == 'add') {
                        require "modules/categories/add.php";
                    } else if (!empty($page) && $page == 'edit') {
                        if (sizeof($_POST) === 0) {
                            // Hiển thị giao diện chỉnh sửa
                            require "modules/categories/edit.php";
                        } else {
                            // Sửa dữ liệu
                            // Xử lý dữ liệu được gửi đi qua $_POST
                        }
                    } else if (!empty($page) && $page == 'delete') {
                        // Xóa dữ liệu
                        echo "Delete action";
                    } else {
                        require "modules/categories/list.php";
                    }
                    break;

                case "blog":
                    echo "Load blog";
                    break;


                case "accounts":
                    $page = $_GET['page'] ?? '';
                    $id = $_GET['id'] ?? '';

                    if (!empty($page) && $page == 'add') {
                        require "modules/accounts/add.php";
                    } else if (!empty($page) && $page == 'edit') {
                        if (sizeof($_POST) === 0) {
                            // Hiển thị giao diện chỉnh sửa
                            require "modules/accounts/edit.php";
                        } else {
                            // Sửa dữ liệu
                            // Xử lý dữ liệu được gửi đi qua $_POST
                        }
                    } else if (!empty($page) && $page == 'delete') {
                        // Xóa dữ liệu
                        echo "Delete action";
                    } else {
                        require "modules/accounts/list.php";
                    }
                    break;


                case "order":
                    $page = $_GET['page'] ?? '';
                    $id = $_GET['id'] ?? '';

                    if (!empty($page) && $page == 'add') {
                        require "modules/order/add.php";
                    } else if (!empty($page) && $page == 'edit') {
                        if (sizeof($_POST) === 0) {
                            // Hiển thị giao diện chỉnh sửa
                            require "modules/order/update.php";
                        } else {
                            // Sửa dữ liệu
                            // Xử lý dữ liệu được gửi đi qua $_POST
                        }
                    } else if (!empty($page) && $page == 'delete') {
                        // Xóa dữ liệu
                        echo "Delete action";
                    } else {
                        require "modules/order/list.php";
                    }
                    break;
                    case "statistic":
                        
                        break;

                default:
                    echo "404";
                    break;
>>>>>>> fc75441 (admin/config/router.php - thêm case order)
            }
            break;

        case "baiviet":
            echo "load  blog";

            break;
        case "nguoidung":
            echo "load  user";

            break;

        case "donhang":
            echo "load order";

            break;
        default:
            echo "404";
            break;
    }
} else {

}

echo $act;

// require "modules/product/index.php";