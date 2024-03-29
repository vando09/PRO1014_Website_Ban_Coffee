<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require "config/database.php";

$product_list = [];

if (isset($_POST['id']) && trim($_POST['id']) !== '') {
    $id = $_POST['id'];
    $sql_product = "SELECT * FROM products WHERE id = ? ";
    $stmt = $conn->prepare($sql_product);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $product_list = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        echo "No data";
    }
}
?>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Danh sách sản phẩm</h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed"
                aria-describedby="example1_info">
                <thead>
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">stt
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Browser: activate to sort column ascending">Tên sản phẩm</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Platform(s): activate to sort column ascending" style="display: none;">Hình ảnh
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Engine version: activate to sort column ascending" style="display: none;">Giá
                            gốc</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="CSS grade: activate to sort column ascending" style="display: none;">Giá khuyến
                            mãi</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Ngày tạo: activate to sort column ascending">Ngày tạo</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Mô tả: activate to sort column ascending">Mô tả </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Danh mục: activate to sort column ascending">Danh mục</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Hành động: activate to sort column ascending">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($product_list as $product): ?>
                        <tr>
                            <td>1</td>
                            <td>
                                <?php $product["name"] ?>
                            </td>
                            <td class="product-thumbnail">
                                <?php $product["thumbnail"] ?>
                                <img src="assets/dist/img/pro_1.jpg" alt="Image" class="img-fluid img-thumbnail h-25 w-25 ">
                            </td>
                            <td>
                                <?php $product["price"] ?>
                            </td>
                            <td>
                                <?php $product["sale"] ?>
                            </td>
                            <td>
                                <?php $product["created_at"] ?>
                            </td>
                            <td>
                                <?php $product["description"] ?>
                            </td>
                            <td>
                                <?php $product["category_id"] ?>
                            </td>
                            <td>

                                <a href="admin?act=product&page=edit" class="btn btn-warning"> <i
                                        class="fas fa-pencil-alt"></i></a href="admin?act=product&page=edit">
                                <a href="admin?act=product&page=edit" class="btn btn-danger"> <i class="fa fa-trash"></i></a
                                    href="admin?act=product&page=edit">
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sản phẩm B</td>
                            <td class="product-thumbnail ">
                                <img src="assets/dist/img/pro_1.jpg" alt="Image" class="img-fluid img-thumbnail h-25 w-25">
                            </td>
                            <td>150,000</td>
                            <td>120,000</td>
                            <td>2024-03-26</td>
                            <td>Mô tả danh mục B</td>
                            <td>

                                <a href="admin?act=product&page=edit" class="btn btn-warning"> <i class="fas fa-pencil-alt">
                                    </i></a href="admin?act=product&page=edit">
                                <a href="admin?act=product&page=edit" class="btn btn-danger"> <i class="fa fa-trash"></i></a
                                    href="admin?act=product&page=edit">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>