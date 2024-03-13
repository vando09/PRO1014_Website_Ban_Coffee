</main>
<footer id="footer" class="bg-dark text-white py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<ul class="menu-footer">
					<li><a href=""></a>Về chúng tôi</li>
					<li><a href=""></a>Về chúng tôi</li>
					<li><a href=""></a>Về chúng tôi</li>
					<li><a href=""></a>Về chúng tôi</li>
					<li><a href=""></a>Về chúng tôi</li>
				</ul>
			</div>

			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<ul class="menu-footer">
					<li><a href=""></a>Chính sách</li>
					<li><a href=""></a>Chính sách</li>
					<li><a href=""></a>Chính sách</li>
					<li><a href=""></a>Chính sách</li>
					<li><a href=""></a>Chính sách</li>
				</ul>
				<!-- #endregion -->
			</div>
			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<ul class="menu-footer">
					<li><a href=""></a>Bảo mật</li>
					<li><a href=""></a>Bảo mật</li>
					<li><a href=""></a>Bảo mật</li>
					<li><a href=""></a>Bảo mật</li>
					<li><a href=""></a>Bảo mật</li>
				</ul>

			</div>
			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<ul class="menu-footer">
					<li><a href=""></a>Liên hệ</li>
					<li><a href=""></a>Liên hệ</li>
					<li><a href=""></a>Liên hệ</li>
					<li><a href=""></a>Liên hệ</li>
					<li><a href=""></a>Liên hệ</li>
				</ul>

			</div>
		</div>
	</div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
	crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<script>
	jQuery(document).ready.function($){
		$('.related-product').slick({
			dots: true,
			infinite: false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 4,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});

	};

</script>
</body>

</html>