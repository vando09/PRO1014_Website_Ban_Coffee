<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $sale = $_POST['sale'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];

    $thumbnail = UPLOAD_URL . time() . $_FILES['thumbnail']['name'];
    move_uploaded_file(
        $_FILES['thumbnail']['tmp_name'],
        UPLOAD_URL . time() . $_FILES['thumbnail']['name']
    );

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
                            <!-- <?= $isEdit ? "Sửa" : "Thêm" ?> -->
                           Thêm sản phẩm
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" action="" method="POST" novalidate="novalidate"
                        enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="form-group">
                                        <label for="name">Tên sản phẩm </label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Nhập tên sản phẩm">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Mô tả sản phẩm</label>
                                        <textarea id="summernote" name="description" placeholder="Nhập mô tả sản phẩm"
                                            style="display: none;"></textarea>
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
                                                            <input type="number" name="price" min="0"
                                                                class="form-control" id="price"
                                                                placeholder="Nhập giá gốc">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group row">
                                                        <label for="sale" class="col-sm-4 col-form-label">Giá khuyến
                                                            mãi</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" min="0" name="sale"
                                                                class="form-control" id="sale"
                                                                placeholder="Nhập giá khuyến mãi">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="thumbnail" class="custom-file-input"
                                                            id="thumbnail">
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
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label>Danh mục sản phẩm</label>
                                        <select class="form-control select2" style="width: 100%;" name="category_id">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </div>
                        </div>
                    </form>
</section>
