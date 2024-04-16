<?php
if (isset($_POST['addProduct'])) {
    $nameCat = $_POST['name'];
    $imageFiles = $_FILES['image'];

    $err_name = "";
    $err_image = "";

    if (empty($nameCat)) {
        $err_name = "tên danh mục không được bỏ trống";
    } else {
        $err_name = "";
    }

    if (empty($imageFiles['name'][0])) {
        $err_image = "vui lòng chọn hình ảnh danh mục";
    } else {
        $err_image = "";
    }

    if (empty($err_name) && empty($err_image)) {
        $nameCat = $conn->real_escape_string($nameCat);

        $target_file = UPLOAD_URL . '/' . basename($imageFiles["name"][0]);

        if (move_uploaded_file($imageFiles["tmp_name"][0], $target_file)) {
            $sql = "INSERT INTO categories (name, thumbnail, status) VALUES ('{$nameCat}', '{$target_file}', 1)";

            if ($conn->query($sql) === TRUE) {
                echo "Thêm thành công";
            } else {
                echo "Lỗi: " . $sql . "<br>" . $conn->error;
            }

        } else {
            echo "Lỗi file hình ảnh";
        }
    }
} else {
    $nameCat = "";
}

$conn->close();
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm danh mục sản phẩm</h3>
                    </div>
                    <form id="quickForm" action="" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="form-group">
                                        <label for="name">Tên Danh mục</label>
                                        <input type="text" name="name" class="form-control <?php echo (!empty($err_name)) ? 'is-invalid' : ''; ?>" id="name" placeholder="Nhập tên sản phẩm" value="<?php echo $nameCat; ?>">
                                        <div class="invalid-feedback">
                                            <?php echo $err_name; ?>
                                        </div>
                                    </div>
                                    <div class="card card-info">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="image">Hình ảnh</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                   <input type="file" name="image[]" class="custom-file-input" id="image" multiple> <label class="custom-file-label" for="image">Choose file</label> </div>
                                                        <label class="custom-file-label" for="image">Chọn ảnh</label>
                                                    
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Tải len</span>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <button type="submit" name="addProduct" class="btn btn-primary">Thêm</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>