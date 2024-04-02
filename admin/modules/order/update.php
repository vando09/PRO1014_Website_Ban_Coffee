<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa đơn hàng</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Chỉnh sửa đơn hàng</h2>


        <form method="post" enctype="multipart/form-data" id="editOrderForm">
            <div class="form-group">
                <label for="user_id">Người tạo đơn</label>
                <input type="text" class="form-control" readonly value="" readonly>
            </div>

            <input type="hidden" class="form-control" id="user_id" name="user_id" value="">

            <div class="form-group">
                <label for="customer_name">Tên khách hàng</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" value="">
            </div>

            <div class="form-group">
                <label for="order_date">Ngày mua hàng</label>
                <input type="datetime-local" class="form-control" id="order_date" name="order_date" value="" required>
            </div>

            <div class="form-group">
                <label for="products">Sản phẩm</label>
                <select multiple class="form-control" id="products" name="products[]">
                </select>
            </div>

            <div id="selectedProducts">
                <h4>Danh sách sản phẩm đã chọn:</h4>
                <ul id="selectedProductList" style="display: flex; flex-direction: column; gap: 10px; list-style: none;">
                </ul>


            </div>

            <input type="hidden" id="selectedProductsInput" name="selectedProducts" value=''>

            <button type="button" class="btn btn-primary" id="addToCart">Thêm vào giỏ hàng</button>

            <a href="" type="button" class="btn btn-danger">Hủy</a>

            <button class="btn btn-primary" name="editOrder" onclick="submitForm()">Chỉnh sửa</button>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</body>

</html>