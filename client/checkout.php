<?php include "../client/particals/header.php"; ?>

<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Checkout</h1>
				</div>
			</div>
			<div class="col-lg-7">

			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mb-5 mb-md-0">
				<h2 class="h3 mb-3 text-black">Thông tin</h2>
				<div class="p-3 p-lg-5 border bg-white">
					<form action="process_payment.php" method="POST">
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="c_fname" class="text-black">Tên<span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="c_fname" name="c_fname" required>
								</div>
								<div class="col-md-6">
									<label for="c_lname" class="text-black">Họ <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="c_lname" name="c_lname" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="c_companyname" class="text-black">Tên đầy đủ </label>
							<input type="text" class="form-control" id="c_companyname" name="c_companyname">
						</div>

						<div class="form-group">
							<label for="c_address" class="text-black">Địa chỉ<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address" required>
						</div>

						<div class="form-group mt-3">
							<input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
						</div>

						<div class="form-group">
							<label for="c_state_country" class="text-black">Địa chỉ <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_state_country" name="c_state_country" required>
						</div>

						<div class="form-group row mb-5">
							<div class="col-md-6">
								<label for="c_email_address" class="text-black">Email <span class="text-danger">*</span></label>
								<input type="email" class="form-control" id="c_email_address" name="c_email_address" required>
							</div>
							<div class="col-md-6">
								<label for="c_phone" class="text-black">Số điện thoại<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number" required>
							</div>
						</div>

						<div class="form-group">
							<label for="c_order_notes" class="text-black">Ghi chú</label>
							<textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Viết vào đây"></textarea>
						</div>

						<div class="form-group mt-3">
							<button type="submit" class="btn btn-black btn-lg py-3 btn-block">Thanh toán</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row mb-5">
					<div class="col-md-12">
						<h2 class="h3 mb-3 text-black">Sản phẩm đã mua</h2>
						<div class="p```php
						<div class="p-3 p-lg-5 border bg-white">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">Sản phẩm</th>
										<th scope="col">Số lượng</th>
										<th scope="col">Giá</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Sản phẩm 1</td>
										<td><input type="number" name="product1_quantity" min="1" value="1" class="form-control"></td>
										<td>100.000 VND</td>
									</tr>
									<tr>
										<td>Sản phẩm 2</td>
										<td><input type="number" name="product2_quantity" min="1" value="1" class="form-control"></td>
										<td>200.000 VND</td>
									</tr>
									<!-- Add more rows for additional products -->
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
				<!-- Rest of the code -->
			</div>
		</div>
	</div>
</div>