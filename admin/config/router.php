<?php

$act = $_GET['act'] ?? '';

echo $act;
if (!empty ($act)) {

    switch ($act) {
        case "sanpham":
            $page = $_GET['page'] ?? '';
            $id = $_GET['id'] ?? '';
            if(!empty ($page) && $page == 'add'){
                echo "load add";
            }else if(!empty ($page) && $page == 'edit'){
                echo "load edit";
                if(sizeof($_POST) === 0){
                    //load giao dien
                }else{
                    // sua du lieu 
                }
            }else if(!empty ($page) && $page == 'delete'){
                echo "load delete";
            }else {
                echo "load list product";
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