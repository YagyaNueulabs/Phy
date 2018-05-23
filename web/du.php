

<!DOCTYPE html>
<html lang="zxx">

<?php include("system_config.php"); ?>	
<?php include("common/head.php"); ?>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<div id="home">
		<!-- header -->
		<!-- navbar -->
		<?php include("common/navbar.php"); ?> 
		<!-- //navbar ends here -->
		<!-- banner -->
		<div class="banner-bg-inner">
			<!-- banner-text -->
			<div class="banner-text-inner">
				<div class="container">
					<h2 class="title-inner">
						world of reading
					</h2>

				</div>
			</div>
			<!-- //banner-text -->
		</div>
		<!-- //banner -->
		<!-- breadcrumbs -->
		<div class="crumbs text-center">
			<div class="container">
				<div class="row">
					<ul class="btn-group btn-breadcrumb bc-list">
						<li class="btn btn1">
							<a href="index">
								<i class="glyphicon glyphicon-home"></i>
							</a>
						</li>
						<li class="btn btn2">
							<a href="#">Course</a>
						</li>
						<li class="btn btn3">
							<a href="#">CSIR-NET</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--//breadcrumbs ends here-->
		<!-- Single -->
		<div class="innerf-pages section">
			<div class="container">
				<div class="col-md-4 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider1">
							<ul class="slides">
								<li data-thumb="<?php echo SITEPATH; ?>/web/images/s1.jpg">
									<div class="thumb-image">
										<img src="<?php echo SITEPATH; ?>/web/images/lib8.jpg" data-imagezoom="true" alt=" " class="img-responsive"> </div>
								</li>
								<!--<li data-thumb="<?php echo SITEPATH; ?>/web/images/s2.jpg">
									<div class="thumb-image">
										<img src="<?php echo SITEPATH; ?>/web/images/s2.jpg" data-imagezoom="true" alt=" " class="img-responsive"> </div>
								</li>
								<li data-thumb="<?php echo SITEPATH; ?>/web/images/s3.png">
									<div class="thumb-image">
										<img src="<?php echo SITEPATH; ?>/web/images/s3.png" data-imagezoom="true" alt=" " class="img-responsive"> </div>
								</li>-->
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>

				</div>
				<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3>CSIR-NET
						
					</h3>
					<p>by
						<a href="#">PHY Academy</a>
					</p>
					<div class="caption">

						<ul class="rating-single">
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
						</ul>
						<div class="clearfix"> </div>
						<h6>
							$100.00</h6>
					</div>
					<div class="desc_single">
						<h5>Description</h5>
						<p>Pellentesque quis orci sapien. Phasellus at libero in nunc egestas tincidunt. In dictum arcu purus, ultricies tincidunt
							urna vehicula at. Aenean iaculis urna nec libero scelerisque, ac ullamcorper neque porta.</p>
					</div>
					<div class="occasional">
						<h5>Specifications</h5>
						<ul class="single_specific">
							<li>
								<span>language :</span> english</li>
							<li>
								<span>format :</span> Hardcover</li>
							<li>
								<span>publisher :</span> Lorempipsum</li>
							<li>
								<span>edition :</span> february 2018</li>
							<li>
								<span>pages :</span> 765</li>
						</ul>

					</div>
					
					<div class="clearfix"></div>
					
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- /new_arrivals -->
		
		<!--// Single -->
		<!-- footer -->
		 <?php include("common/footer.php"); ?>
		<!-- //footer -->
		<?php include("common/copyright.php"); ?>
	</div>
	<!-- //home -->
	<!-- Common js -->
	<script src="<?php echo SITEPATH; ?>/web/js/jquery-2.2.3.min.js"></script>
	<!--// Common js -->
	<!-- cart-js -->
	<script src="<?php echo SITEPATH; ?>/web/js/minicart.js"></script>
	<script>
		chr.render();

		chr.cart.on('chr_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- zoom -->
	<script src="<?php echo SITEPATH; ?>/web/js/imagezoom.js"></script>
	<!-- zoom-->
	<!-- single -->
	<!-- FlexSlider -->
	<script src="<?php echo SITEPATH; ?>/web/js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider1').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->

	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<!--search jQuery-->
	<script src="<?php echo SITEPATH; ?>/web/js/main.js"></script>
	<!--search jQuery-->

	<!-- Scrolling Nav JavaScript -->
	<script src="<?php echo SITEPATH; ?>/web/js/scrolling-nav.js"></script>
	<!-- //fixed-scroll-nav-js -->
	<!--//scripts-->
	<script src="<?php echo SITEPATH; ?>/web/js/bootstrap.js"></script>
	<!-- start-smoth-scrolling -->
	<script src="<?php echo SITEPATH; ?>/web/js/move-top.js"></script>
	<script src="<?php echo SITEPATH; ?>/web/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- smoothscroll -->
	<script src="<?php echo SITEPATH; ?>/web/js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

</body>

</html>