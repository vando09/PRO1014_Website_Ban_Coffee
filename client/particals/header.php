<?php
session_start();
include "models/database.php";
$db = new Database();
$conn = $db->getDatabase();

if (isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
	$_SESSION['user_name'] = $user['name'];
}
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link href="../client/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="../client/assets/css/tiny-slider.css" rel="stylesheet">
	<link href="../client/assets/css/style.css" rel="stylesheet">
	<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
</head>

<body>
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

		<div class="container">
			<a class="navbar-brand" href="../index.html">Furni<span>.</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li class="nav-item active">
						<a class="nav-link" href="../index.php">Trang chủ</a>
					</li>
					<li><a class="nav-link" href="/client/single_product.php">Sản phẩm</a></li>
					<li><a class="nav-link" href="/client/abouts.php">Về chúng tôi</a></li>
					<!-- <li><a class="nav-link" href="/client/blog.php">Bài viết</a></li> -->
					<li><a class="nav-link" href="/client/contact.php">Liên hệ </a></li>
					<form class="d-flex" action="/client/single_product.php" method="GET" role="search">
						<input type="text" name="keyword" class="form-control me-2" placeholder="Tìm kiếm...">
						<button type="submit" class="btn btn-outline-success">Tìm </button>
					</form>
					
				</ul>

				<ul class="custom-navbar-cta navbar-nav mb-3 mb-md-0 ms-5">
					<li>
						<a class="nav-link" href="/client/sign_in.php"  onclick="logout()">
							<?php
							if (isset($_SESSION['user_name'])) {
								echo $_SESSION['user_name'];
							} else {
								echo '<img src="../client/assets/images/user.svg">';
							}
							?>
						</a>
					</li>
				
					
					<li><a class="nav-link" href="/client/cart.php"><img src="../client/assets/images/cart.svg"></a>

					</li>
					
				</ul>
			</div>
		</div>

	</nav>

