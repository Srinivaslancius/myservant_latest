<?php include_once 'meta.php';?>
<body class="header_sticky">
	<div class="boxed style2">

		<div class="overlay"></div>

		<!-- Preloader -->
		<div class="preloader">
			<div class="clear-loading loading-effect-2">
				<span></span>
			</div>
		</div><!-- /.preloader -->

		<section id="header" class="header">
			<div class="header-top">
			<?php include_once 'top_header.php';?>
			</div><!-- /.header-top -->
			<div class="header-middle">
			<?php include_once 'middle_header.php';?>
			</div><!-- /.header-middle -->
			<div class="header-bottom">
			<?php include_once 'bottom_header.php';?>
			</div><!-- /.header-bottom -->
		</section><!-- /#header -->

		<section class="flat-breadcrumb">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumbs">
							<li class="trail-item">
								<a href="#" title="">Home</a>
								<span><img src="images/icons/arrow-right.png" alt=""></span>
							</li>
							<li class="trail-item">
								<a href="#" title="">Products</a>
								
							</li>
						</ul><!-- /.breacrumbs -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><br>
		<section class="flat-row flat-imagebox">
			<div class="container">				
				<div class="row">
				<?php for($i=0; $i<6; $i++) {?>
					<div class="col-md-6 col-lg-4">
						<div class="imagebox style1 v1" style="border:2px solid #FE6003; margin-bottom:5px">
							<div class="box-image">
								<a href="#" title="">
									<img src="images/product/other/fruit.jpg" alt="">
								</a>
							</div><!-- /.box-image -->
							<div class="box-content">
								<div class="cat-name">
									<a href="#" title="" style="color:#FE6003">Fruits & Vegitables</a>
								</div>
								<ul class="cat-list">
									<li><a href="sprouts.php" title="">Sprouts</a></li>
									<li><a href="sprouts.php" title="">Fresh Fruits</a></li>
									<li><a href="sprouts.php" title="">Fresh Herbs & Seasonings</a></li>
									<li><a href="sprouts.php" title="">Fresh Vegetables</a></li>
									
								</ul>
								<!--<div class="btn-more">
									<a href="#" title="">See all</a>
								</div>-->
							</div><!-- /.box-content -->
						</div><!-- /.imagebox style1 -->
					</div><!-- /.col-md-6 col-lg-4 -->
				<?php } ?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><br><br>
		<footer>
			<?php include_once 'footer.php';?>
		</footer><!-- /footer -->

		<section class="footer-bottom">
			<?php include_once 'footer_bottom.php';?>
		</section><!-- /.footer-bottom -->

	</div><!-- /.boxed -->

		<!-- Javascript -->
		<script type="text/javascript" src="javascript/jquery.min.js"></script>
		<script type="text/javascript" src="javascript/tether.min.js"></script>
		<script type="text/javascript" src="javascript/bootstrap.min.js"></script>
		<script type="text/javascript" src="javascript/waypoints.min.js"></script>
		<script type="text/javascript" src="javascript/jquery.circlechart.js"></script>
		<script type="text/javascript" src="javascript/easing.js"></script>
		<script type="text/javascript" src="javascript/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="javascript/imagesloaded.pkgd.min.js"></script>
		<script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="javascript/owl.carousel.js"></script>
		<script type="text/javascript" src="javascript/smoothscroll.js"></script>
		<script type="text/javascript" src="javascript/jquery-ui.js"></script>
		<script type="text/javascript" src="javascript/jquery.mCustomScrollbar.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&region=GB"></script>
	   	<script type="text/javascript" src="javascript/gmap3.min.js"></script>
	   	<script type="text/javascript" src="javascript/waves.min.js"></script>
		<script type="text/javascript" src="javascript/jquery.countdown.js"></script>

		<script type="text/javascript" src="javascript/main.js"></script>	

</body>	
</html>