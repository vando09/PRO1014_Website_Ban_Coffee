<?php
$isEdit = isset ($_GET['page']) && !empty ($_GET['page']) && $_GET['page'] === 'edit' ? true : false;
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
                    <form id="quickForm" novalidate="novalidate">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="form-group">
                                        <label for="product_name">Tên sản phẩm </label>
                                        <input type="product_name" name="product_name" class="form-control"
                                            id="product_name" placeholder="Nhập tên sản phẩm" fdprocessedid="izyqd7">
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Mô tả sản phẩm</label>
                                        <textarea id="summernote" placeholder="Nhập mô tả sản phẩm"
                                            style="display: none;">
              </textarea>
                                    </div>

                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Horizontal Form</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form class="form-horizontal">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="form-group row">
                                                            <label for="price" class="col-sm-4 col-form-label">Giá
                                                                gốc</label>
                                                            <div class="col-sm-8">
                                                                <input type="number" min="0" class="form-control"
                                                                    id="price" placeholder="Nhập giá gốc"
                                                                    fdprocessedid="nar7c">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group row">
                                                            <label for="sale" class="col-sm-4 col-form-label">Giá khuyến
                                                                mãi</label>
                                                            <div class="col-sm-8">
                                                                <input type="number" min="0" class="form-control"
                                                                    id="sale" placeholder="Nhập giá khuyến mãi"
                                                                    fdprocessedid="r33cywo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card-footer -->
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Disabled Result</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option disabled="disabled">California (disabled)</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                 
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" fdprocessedid="8yo73">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>