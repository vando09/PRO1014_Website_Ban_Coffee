
<?php
define('UPLOAD_URL', 'images/');
include "../client/particals/header.php";

require_once "models/database.php";
$db = new Database();
$conn = $db->getDatabase();

if (isset($_GET['keyword'])) {
	$keyword = $_GET['keyword'];
	$search_query = "SELECT * FROM products WHERE name LIKE '%$keyword%'";
	$result = mysqli_query($conn, $search_query);
	if (mysqli_num_rows($result) > 0) {
		echo "<div class='row'>";
		while ($row = mysqli_fetch_assoc($result)) {
			$thumbnail = UPLOAD_URL . $row['thumbnail']; 
			echo "<div class='col-12 col-md-6 col-lg-4 mb-4'>";
			echo "<div class='card'>";
			echo "<img src='/admin/" . $row['thumbnail'] . "' alt='" . $row['name'] . "' class='card-img-top' />";
			echo "<div class='card-body'>";
			echo "<h5 class='card-title'>" . $row['name'] . "</h5>";
			echo "<p class='card-text'> " . $row['price'] .' '. 'VND'.  "</p>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
		}
		echo "</div>";
    
	} else {
		echo "Không tìm thấy sản phẩm";
	}
}
require_once "models/database.php";
$db = new Database();
$conn = $db->getDatabase();
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
	$productList = [];

	while ($product = mysqli_fetch_assoc($result)) {
		$productList[] = $product;
	}
}
?>
<div class="container">
  <div class="row d-flex justify-content-end">
  <!-- <div class="col-xl-3 mt-xl-5">
  <div class="col-lg-12">
    <button class="btn btn-outline-secondary mb-3 w-100 d-lg-none" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true"
      aria-label="Toggle navigation">
      <span>Hiển thị bộ lọc</span>
    </button>
    <div class="card d-lg-block mb-5 collapse show" id="navbarSupportedContent" style="">
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
              aria-controls="panelsStayOpen-collapseTwo" style="color: unset; background: unset">
              Danh mục
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
            aria-labelledby="headingTwo">
            <form action="tim-kiem-san-pham-phia-client-bang-category-" method="post"
              class="accordion-body text-end" id="filter-form">
              <div class="text-start">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="checkbox-all" checked="">
                  <label class="form-check-label" for="checkbox-all">
                    Tất cả
                  </label>
                  <span class="badge bg-secondary float-end">
                    4 </span>
                </div>
                <hr class="my-1">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="11" id="id11"
                    name="category_id[]" checked="">
                  <label class="form-check-label" for="id11">
                    Chưa phân loại </label>
                  <span class="badge bg-secondary float-end">
                    4 </span>
                </div>
                <p class="field-message mb-0"></p>
              </div>
              <button class="btn btn-sm py-2 px-3 filter-submit-btn" type="submit">Lọc</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
    <div class="col-xl-12">
      <div class="untree_co-section product-section before-footer-section">
        <div class="container">
          <div class="row">
            <?php
            $stt = 1;
            foreach ($productList as $product):
              ?>
              <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0 mt-4">
                <a class="product-item" href="detail_product.php?id=<?php echo $product["id"]; ?>">
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
      </div>
    </div>
  </div>
</div>
<?php include "../client/particals/footer.php"; ?>