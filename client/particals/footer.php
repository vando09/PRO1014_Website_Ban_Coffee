<footer class="footer-section">
	<div class="container relative">

		<div class="sofa-img">
			<img src="/client/assets/images/img_footer-removebg-preview.png" alt="Image" class="img-fluid">
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="subscription-form">
					<h3 class="d-flex align-items-center"><span class="me-1"><img
								src="/client/assets/images/envelope-outline.svg" alt="Image"
								class="img-fluid"></span><span>Đăng kí nhận bản tin</span></h3>

					<form action="#" class="row g-3">
						<div class="col-auto">
							<input type="text" class="form-control" placeholder="Nhập tên của bạn">
						</div>
						<div class="col-auto">
							<input type="email" class="form-control" placeholder="Nhập email của bạn">
						</div>
						<div class="col-auto">
							<button class="btn btn-primary">
								<span class="fa fa-paper-plane"></span>
							</button>
						</div>
					</form>

				</div>
			</div>
		</div>

		<div class="row g-5 mb-5">
			<div class="col-lg-4">
				<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
				<p class="mb-4">Đậm đà hương vị cà phê</p>

				<ul class="list-unstyled custom-social">
					<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
					<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
					<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
					<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
				</ul>
			</div>

			<div class="col-lg-8">
				<div class="row links-wrap">
					<div class="col-6 col-sm-6 col-md-3">
						<ul class="list-unstyled">
							<li><a href="#">Về chúng tôi</a></li>
							<li><a href="#">Dịch vụ</a></li>
							<li><a href="#">Tin tức</a></li>
							<li><a href="#">Liên hệ</a></li>
						</ul>
					</div>

					<div class="col-6 col-sm-6 col-md-3">
						<ul class="list-unstyled">
							<li><a href="#">Hỗ trợ</a></li>
							<li><a href="#">Cơ cấu</a></li>
							<li><a href="#">Trò chuyện trực tiếp</a></li>
						</ul>
					</div>

					<div class="col-6 col-sm-6 col-md-3">
						<ul class="list-unstyled">
							<li><a href="#">Công việc</a></li>
							<li><a href="#">Đội ngũ của chúng tôi</a></li>
							<li><a href="#">Lãnh đạo</a></li>
							<li><a href="#">Chính sánh bảo mật</a></li>
						</ul>
					</div>

					<div class="col-6 col-sm-6 col-md-3">
						<ul class="list-unstyled">
							<li><a href="#">Chính sách đổi trả</a></li>
							<li><a href="#">Giao hàng miễn phí</a></li>
							<li><a href="#">Phục vụ 24/7</a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>

		<div class="border-top copyright">
			<div class="row pt-4">
				<div class="col-lg-6">
					<p class="mb-2 text-center text-lg-start">Bản quyền &copy;
						<script>document.write(new Date().getFullYear());</script>. Đã đăng ký Bản quyền. &mdash; Thiết
						kế với tình yêu bởi <a href="#">Trần Chí Nguyên</a>. Phân phối bởi <a
							href="#">CoffeeShop</a>.
						<!-- Thông tin về giấy phép: https://untree.co/license/ -->
					</p>
				</div>


			</div>
		</div>

	</div>
</footer>
<!-- End Footer Section -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
	crossorigin="anonymous"></script>
<script src="../client/assets/js/bootstrap.bundle.min.js"></script>
<script src="../client/assets/js/tiny-slider.js"></script>
<script src="../client/assets/js/custom.js"></script>
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>