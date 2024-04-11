<?php
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
	$productList = [];

	while ($product = mysqli_fetch_assoc($result)) {
		$productList[] = $product;
	}
}
?>
<div class="untree_co-section product-section before-footer-section">
	<div class="container">
		<div class="row">
			<?php
			$stt = 1;
			foreach ($productList as $product):
				if ($stt > 4) {
					break;
				}
				?>
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<a class="product-item" href="./client/detail_product.php?id=<?php echo $product["id"]; ?>">
						<img src="../../admin/<?php echo $product["thumbnail"]; ?>" alt="Product Thumbnail"
							class="img-fluid product-thumbnail">
						<h3 class="product-title"><?php echo $product["name"]; ?></h3>
						<strong class="product-price"><?php echo number_format($product["price"]); ?> VND</strong>
						<span class="icon-cross">
							<img src="/client/assets/images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<?php
				$stt++;
			endforeach;
			?>
		</div>
	</div>
	<div class="we-help-section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7 mb-5 mb-lg-0">
					<div class="imgs-grid">
						<div class="grid grid-1">
							<img src="http://localhost/CoffeeShop/public/assets/images/we-help-img-1.jpg"
								alt="gói cà phê">
						</div>
						<div class="grid grid-2">
							<img src="http://localhost/CoffeeShop/public/assets/images/we-help-img-2.jpg"
								alt="Máy qua cà phê">
						</div>
						<div class="grid grid-3">
							<img src="http://localhost/CoffeeShop/public/assets/images/we-help-img-3.jpg"
								alt="Không gian oha cà phê">
						</div>
					</div>
				</div>
				<div class="col-lg-5 ps-lg-5">
					<h2 class="section-title mb-4">
						Chúng Tôi Giúp Bạn Khám Phá Thế Giới Cà Phê
					</h2>
					<p>
						Tại đây, chúng tôi không chỉ bán cà phê mà còn mang đến cho bạn một trải nghiệm về hương vị thú
						vị và không gian đẹp. Chúng tôi tự hào đồng hành cùng bạn trong hành trình khám phá thế giới cà
						phê đa dạng và thú vị.
					</p>

					<ul class="list-unstyled custom-list my-4">
						<li>Chúng tôi cung cấp cà phê chất lượng và đa dạng</li>
						<li>Chúng tôi hỗ trợ bạn trong việc lựa chọn sản phẩm phù hợp</li>
						<li>Chúng tôi luôn sẵn sàng để tư vấn và giải đáp mọi thắc mắc</li>
						<li>Chúng tôi cam kết mang đến trải nghiệm tuyệt vời nhất cho bạn</li>
					</ul>
					<p><a href="cua-hang-trang-1" class="btn">Khám phá ngay</a></p>
				</div>
			</div>
		</div>
	</div>
</div>