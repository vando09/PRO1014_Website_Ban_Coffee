<?php include "../client/particals/header.php";
require_once "models/database.php";
$db = new Database();
$conn = $db->getDatabase();
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM products WHERE id = ?";
	$stmt = mysqli_prepare($conn, $sql);
	mysqli_stmt_bind_param($stmt, "i", $id);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);

	if ($result && mysqli_num_rows($result) > 0) {
		$product = mysqli_fetch_assoc($result);
	} else {
		echo "Không tìm thấy sản phẩm.";
	}
} else {
	echo "ID sản phẩm không được cung cấp.";
}
?>
<section class="section-product py-5 ">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8">
				<div class="box-img">
					<img src="/admin/<?php echo $product['thumbnail']; ?>" alt="" class="w-75 h-75">
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="title-product">
					<h2><?php echo $product['name']; ?>
					</h2>

					<span><?php echo $product['description']; ?></span>
					<h3 class="text-warning"> Giá bán: <?php echo number_format($product['price']); ?> VND</h3>
				</div>
				<button type="button" class="btn btn-primary">
					<i class="fas fa-shopping-cart"></i> Mua ngay
				</button>
				<button type="button" class="btn btn-primary">
					<i class="fas fa-plus"></i> Thêm vào giỏ hàng
				</button>
			</div>

		</div>
<!-- 
		<ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="detail_product" data-bs-toggle="tab"
					data-bs-target="#detail_product-pane" type="button" role="tab" aria-controls="detail_product-pane"
					aria-selected="true">Mô tả</button>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="detail_product-pane" role="tabpanel"
				aria-labelledby="detail_product" tabindex="0">Quy cách: chai thuỷ tinh dung tích 100ml
				Thành Phần: cà phê hạt mộc Success 1 (60% Arabica và 40% Robusta), nước, sữa đặc.
				Hương vị: mùi thơm dịu, vị béo của sữa hòa quyện với cà phê mang đến sự cân bằng, khơi nguồn năng lượng
				cho sự sáng tạo, thích hợp với khách hàng có gu cà phê sữa đá truyền thống.</div>
		</div> -->

	</div>

	</div>
</section>
<?php include "../client/particals/footer.php"; ?>