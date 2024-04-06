<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once "config/database.php";
require_once "variable.php";

$db = new Database();
$conn = $db->getDatabase();
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM products WHERE id ='$id'";
    $result = mysqli_query($conn, $sql);
    $editProduct = mysqli_fetch_assoc($result);

    if (!$result) {
        echo "Lỗi kết nối CSDL: " . mysqli_error($conn);
    }

} else {
    header("Location: list.php");
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy id của sản phẩm cần sửa
    if (isset($_POST['name'], $_POST['price'], $_POST['sale'], $_POST['description'], $_POST['category_id'], $_FILES['thumbnail'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $sale = $_POST['sale'];
        $description = $_POST['description'];
        $category_id = $_POST['category_id'];

        $thumbnail = UPLOAD_URL . time() . '_' . $_FILES['thumbnail']['name'];
        move_uploaded_file(
            $_FILES['thumbnail']['tmp_name'],
            UPLOAD_URL . time() . $_FILES['thumbnail']['name']
        );
        $stmt = $conn->prepare("UPDATE products SET name = ?, price = ?, sale = ?, description = ?, category_id = ?, thumbnail = ? WHERE id = ?");
        $stmt->bind_param("ssssisi", $name, $price, $sale, $description, $category_id, $thumbnail, $id);
        if ($stmt->execute()) {
            echo '<div class="alert alert-success" role="alert">
            Sửa sản phẩm thành công!
            </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
            Sửa sản phẩm thất bại!
            </div>';
        }
    }
}

?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Sửa sản phẩm
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" action="" method="POST" novalidate="novalidate" enctype="multipart/form-data">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="form-group">
                                        <label for="name">Tên sản phẩm </label>
                                        <input type="text" value="<?php echo $editProduct['name']; ?>" name="name"
                                            class="form-control" id="name" placeholder="Nhập tên sản phẩm">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Mô tả sản phẩm</label>
                                        <textarea id="summernote" name="description"
                                            placeholder="Nhập mô tả sản phẩm"><?php echo $editProduct['description']; ?></textarea>
                                    </div>

                                    <div class="card card-info">

                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group row">
                                                        <label for="price" class="col-sm-4 col-form-label">Giá
                                                            gốc</label>
                                                        <div class="col-sm-8">
                                                            <input type="number"
                                                                value="<?php echo $editProduct['price']; ?>"
                                                                name="price" min="0" class="form-control" id="price"
                                                                placeholder="Nhập giá gốc">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group row">
                                                        <label for="sale" class="col-sm-4 col-form-label">Giá khuyến
                                                            mãi</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" min="0"
                                                                value="<?php echo $editProduct['sale']; ?>" name="sale"
                                                                class="form-control" id="sale"
                                                                placeholder="Nhập giá khuyến mãi">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file"
                                                            value="<?php echo $editProduct['thumbnail']; ?>"
                                                            name="thumbnail" class="custom-file-input" id="thumbnail">
                                                        <label class="custom-file-label" for="thumbnail">Choose
                                                            file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="form-group">
                                        <label>Danh mục sản phẩm</label>
                                        <select class="form-control select2" style="width: 100%;" name="category_id">
                                            <?php
                                            $sql = "SELECT id, name FROM categories";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                echo '<option value="">Chọn danh mục</option>';
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
                                                }
                                            } else {
                                                echo '<option value="">Không có danh mục nào</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </div>
                        </div>
                    </form>
</section>