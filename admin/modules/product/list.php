<?php
$sql = "SELECT p.*, c.name AS category_name FROM products p
INNER JOIN categories c ON p.category_id = c.id";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    $productList = [];

    while ($product = mysqli_fetch_assoc($result)) {
        $productList[] = $product;
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
                            aria-label="Danh mục: activate to sort column ascending">Danh mục</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Hành động: activate to sort column ascending">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stt = 1;
                    foreach ($productList as $product):
                        ?>
                        <tr>
                            <td>
                                <?php echo $stt; ?>
                            </td>
                            <td>
                                <?php echo $product["name"]; ?>
                            </td>
                            <td class="product-thumbnail">
                                <img src="./<?php echo $product["thumbnail"]; ?>" alt="Product Thumbnail" class="h-50 w-50">
                            </td>
                            <td>
                                <?php echo number_format($product["price"]); ?> VND
                            </td>
                            <td>
                                <?php echo number_format($product["sale"]); ?> VND
                            </td>
                            <td>
                                <?php echo $product["created_at"]; ?>
                            </td>
                            <td>
                                <?php
                                $categoryId = $product["category_id"];
                                $sql = "SELECT name FROM categories WHERE id = $categoryId";
                                $result = $conn->query($sql);
                                if ($result && $result->num_rows > 0) {
                                    $category = $result->fetch_assoc();
                                    echo $category["name"];
                                }
                                ?>
                            </td>
                            <td>
                                <form action="/admin/?act=product&page=delete&id=<?php echo $product['id']; ?>"
                                    method="POST" class="delete-form" id="deleteForm">
                                    <button type="submit" name="delete" class="btn btn-danger m-2"><i
                                            class='fas fa-trash-alt'></i></button>
                                </form>

                                <a type="submit" name="edit"
                                    href="/admin/?act=product&page=edit&id=<?php echo $product['id']; ?>"
                                    class="btn btn-warning m-2"><i class='fas fa-pencil-alt'></i></a>



                            </td>
                        </tr>
                        <?php
                        $stt++;
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->