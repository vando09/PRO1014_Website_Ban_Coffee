<?php

require_once "config/database.php";
require_once "product.php";

$isEdit = isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] === 'edit' ? true : false;

$addProduct = new Product();
$addProduct->addProduct();

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
                            <?= $isEdit ? "Sửa" : "Thêm" ?>
                            sản phẩm
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" action="" method="POST" novalidate="novalidate">
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
                                        <div class="card-header">
                                            <h3 class="card-title">Horizontal Form</h3>
                                        </div>
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
</section>