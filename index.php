<?php include_once 'meta.php';?>
<style>
.owl-theme .owl-dots .owl-dot span {
    width: 13px;
    height: 13px;
    border-radius: 50%;
    border: 2px solid #ffffff;
    margin: 6px;
    display: block;
    position: relative;
    -webkit-backface-visibility: visible;
    -webkit-transition: opacity 200ms ease;
    -moz-transition: opacity 200ms ease;
    -ms-transition: opacity 200ms ease;
    -o-transition: opacity 200ms ease;
}
.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
    border-color: #ffffff;
}
.owl-theme .owl-dots .owl-dot.active span:after, .owl-theme .owl-dots .owl-dot:hover span:after {
    content: '';
    position: absolute;
    top: 2px;
    left: 2px;
  background-color: #ffffff;
    width: 5px;
    height: 5px;
    border-radius: 50%;
}
</style>
<body class="header_sticky">
	<div class="boxed style2">

		<div class="overlay"></div>

		<!-- Preloader -->
		<!-- <div class="preloader">
			<div class="clear-loading loading-effect-2">
				<span></span>
			</div>
		</div> --><!-- /.preloader -->

		<div class="popup-newsletter">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						
					</div>
					<div class="col-sm-8">
						<div class="popup">
							<span></span>
							<div class="popup-text">
								<h2>Join our newsletter and <br />get discount!</h2>
								<p class="subscribe">Subscribe to the newsletter to receive updates about new products.</p>
								<div class="form-popup">
									<form action="#" class="subscribe-form" method="get" accept-charset="utf-8">
										<div class="subscribe-content">
											<input type="text" name="email" class="subscribe-email" placeholder="Your E-Mail">
											<button type="submit"><img src="images/icons/right-2.png" alt=""></button>
										</div>
									</form><!-- /.subscribe-form -->
									<div class="checkbox">
										<input type="checkbox" id="popup-not-show" name="category">
										<label for="popup-not-show">Don't show this popup again</label>
									</div>
								</div><!-- /.form-popup -->
							</div><!-- /.popup-text -->
							<div class="popup-image">
								<img src="images/product/other/my.jpg" alt="">
							</div><!-- /.popup-text -->
						</div><!-- /.popup -->
					</div><!-- /.col-sm-8 -->
					<div class="col-sm-2">
						
					</div>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.popup-newsletter -->

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

		<section class="flat-row flat-slider">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="slider owl-carousel">
						<?php $getBanners = "SELECT * FROM grocery_banners WHERE lkp_status_id = 0";
						$getBannersData = $conn->query($getBanners); ?>
						<?php while($getBannersData1 = $getBannersData->fetch_assoc()) { ?>
							<div class="slider-item style2">
								<div class="item-image">
									<!--<div class="sale-off">
										60 % <span>sale</span>
									</div>-->
									<img src="<?php echo $base_url . 'grocery_admin/uploads/grocery_banner_web_image/'.$getBannersData1['web_image'] ?>" alt="">
								</div>
								<div class="clearfix"></div>
							</div><!-- /.slider -->
							<?php } ?>
						</div><!-- /.slider -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-slider -->
		
         <?php $getOfferModules = "SELECT * FROM grocery_offer_module WHERE lkp_status_id = 0 ORDER BY id DESC LIMIT 4";
						$getOfferModules1 = $conn->query($getOfferModules); ?>
                <section class="flat-row flat-banner-box">
				<div class="container-fluid">
					<div class="row">

						<div class="wrap-banner">
							<?php while($getOfferModulesData = $getOfferModules1->fetch_assoc()) { ?>
							<div class="banner-box style1">
								
								<div class="inner-box">
									<a href="<?php echo $getOfferModulesData['link'] ?>" title="" target="_blank">
										<img src="<?php echo $base_url . 'grocery_admin/uploads/grocery_offer_module_image/'.$getOfferModulesData['image'] ?>" alt="<?php echo $getOfferModulesData['name'] ?>" style="height:179px;width:555px">
									</a>
								</div><!-- /.inner-box -->
								
								
							</div><!-- /.box -->
							<?php } ?>
						</div><!-- /.col-md-4 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section><!-- /.flat-banner-box -->
<!-- /.flat-banner-box -->

          <section class="flat-imagebox">
			<div class="container">
			 <!--<div class="tab">
			  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen" style="border-radius:0px">New Arrivals</button>
			  <button class="tablinks" onclick="openCity(event, 'Paris')" style="border-radius:0px">Featured</button>
			  <button class="tablinks" onclick="openCity(event, 'Tokyo')" style="border-radius:0px">Top Selling</button>
			</div>-->
				<div class="product-tab">
							<ul class="tab-list">
							
								<li class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen" style="border-radius:0px">New Arrivals</li>
							
								<li class="tablinks" onclick="openCity(event, 'Paris')" style="border-radius:0px">Featured</li>
								<li class="tablinks" onclick="openCity(event, 'Tokyo')" style="border-radius:0px">Top Selling</li>
							</ul>
						</div>
				<div id="London" class="tabcontent">
					<div class="row">
					<?php for($i=0; $i<4; $i++) {?>
						<div class="col-lg-3 col-sm-6">
							<div class="product-box">
								<div class="imagebox">
									<span class="item-new">NEW</span>																		
											<a href="single_product.php" title="">
												<img src="images/product/other/1.png" alt="">
											</a>																													
									<div class="box-content">
										<div class="cat-name">
											<a href="single_product.php" title="">Brue Instant</a>
										</div>
									
										<div class="price">
											<span class="sale"> ₹200.00</span>
											<span class="regular"> ₹250.00</span>
										</div>
									</div>
									<div class="box-bottom">
										<div class="btn-add-cart">
											<a href="#" title="">
												<img src="images/icons/add-cart.png" alt="">Add to Cart
											</a>
										</div>
										
									</div>
								</div>
							</div>	
							<div class="product-box">
								<div class="imagebox">
									<span class="item-new">NEW</span>																		
											<a href="single_product.php" title="">
												<img src="images/product/other/1.png" alt="">
											</a>																													
									<div class="box-content">
										<div class="cat-name">
											<a href="single_product.php" title="">Brue Instant</a>
										</div>
									
										<div class="price">
											<span class="sale"> ₹200.00</span>
											<span class="regular"> ₹250.00</span>
										</div>
									</div>
									<div class="box-bottom">
										<div class="btn-add-cart">
											<a href="#" title="">
												<img src="images/icons/add-cart.png" alt="">Add to Cart
											</a>
										</div>
										
									</div>
								</div>
							</div>	
						</div>
						<?php } ?>
					</div>
</div>

<div id="Paris" class="tabcontent">
  	<div class="row">
					<?php for($i=0; $i<4; $i++) {?>
						<div class="col-lg-3 col-sm-6">
							<div class="product-box">
								<div class="imagebox">
									<span class="item-new">NEW</span>																		
											<a href="single_product.php" title="">
												<img src="images/product/other/03.jpg" alt="">
											</a>																													
									<div class="box-content">
										<div class="cat-name">
											<a href="single_product.php" title="">Brue Instant</a>
										</div>
									
										<div class="price">
											<span class="sale"> ₹200.00</span>
											<span class="regular"> ₹250.00</span>
										</div>
									</div>
									<div class="box-bottom">
										<div class="btn-add-cart">
											<a href="#" title="">
												<img src="images/icons/add-cart.png" alt="">Add to Cart
											</a>
										</div>
										
									</div>
								</div>
							</div>	
							<div class="product-box">
								<div class="imagebox">
									<span class="item-new">NEW</span>																		
											<a href="single_product.php" title="">
												<img src="images/product/other/03.jpg" alt="">
											</a>																													
									<div class="box-content">
										<div class="cat-name">
											<a href="single_product.php" title="">Brue Instant</a>
										</div>
									
										<div class="price">
											<span class="sale"> ₹200.00</span>
											<span class="regular"> ₹250.00</span>
										</div>
									</div>
									<div class="box-bottom">
										<div class="btn-add-cart">
											<a href="#" title="">
												<img src="images/icons/add-cart.png" alt="">Add to Cart
											</a>
										</div>
										
									</div>
								</div>
							</div>	
						</div>
						<?php } ?>
					</div>
				</div>

			<div id="Tokyo" class="tabcontent">
					<div class="row">
					<?php for($i=0; $i<4; $i++) {?>
						<div class="col-lg-3 col-sm-6">
							<div class="product-box">
								<div class="imagebox">
									<span class="item-new">NEW</span>																		
											<a href="single_product.php" title="">
												<img src="images/product/other/02.jpg" alt="">
											</a>																													
									<div class="box-content">
										<div class="cat-name">
											<a href="single_product.php" title="">Brue Instant</a>
										</div>
									
										<div class="price">
											<span class="sale"> ₹200.00</span>
											<span class="regular"> ₹250.00</span>
										</div>
									</div>
									<div class="box-bottom">
										<div class="btn-add-cart">
											<a href="#" title="">
												<img src="images/icons/add-cart.png" alt="">Add to Cart
											</a>
										</div>
										
									</div>
								</div>
							</div>	
							<div class="product-box">
								<div class="imagebox">
									<span class="item-new">NEW</span>																		
											<a href="single_product.php" title="">
												<img src="images/product/other/02.jpg" alt="">
											</a>																													
									<div class="box-content">
										<div class="cat-name">
											<a href="single_product.php" title="">Brue Instant</a>
										</div>
									
										<div class="price">
											<span class="sale"> ₹200.00</span>
											<span class="regular"> ₹250.00</span>
										</div>
									</div>
									<div class="box-bottom">
										<div class="btn-add-cart">
											<a href="#" title="">
												<img src="images/icons/add-cart.png" alt="">Add to Cart
											</a>
										</div>
										
									</div>
								</div>
							</div>	
						</div>
						<?php } ?>
					</div>
</div>

			</div>
			</section>
 	<section class="flat-imagebox style4">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="flat-row-title">
							<h3>Our Brands</h3>
						</div>
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel-3">
						<?php $getAllBrandLogos=  getAllDataWithStatus('grocery_brand_logos',0); 
						while($getBrandLogosData = $getAllBrandLogos->fetch_assoc()) { ?>
						
							<div class="imagebox style4">
								<div class="box-image">
									<a href="<?php echo $getBrandLogosData['link'] ?>" title="">
										<img src="<?php echo $base_url . 'grocery_admin/uploads/grocery_brand_logos/'.$getBrandLogosData['brand_logo'] ?>" alt="<?php echo $getBrandLogosData['link'] ?>">
									</a>
								</div><!-- /.box-image -->
								
							</div><!-- /.imagebox style4 -->
							<?php } ?>
							
						</div><!-- /.owl-carousel-3 -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-imagebox style4 -->
 		<div class="divider20"></div>

 		<?php 
		if($_SESSION['city_name'] == '') {
            $lkp_city_id = 1;
        } else {
            $getCities1 = getIndividualDetails('grocery_lkp_cities','city_name',$_SESSION['city_name']);
			$lkp_city_id = $getCities1['id'];
        }
		$getProducts = "SELECT * FROM grocery_products WHERE lkp_status_id = 0 AND deal_start_date != '0000-00-00' AND deal_end_date != '0000-00-00' AND deal_start_time != '00:00:00' AND deal_end_time != '00:00:00' AND id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = $lkp_city_id)";
		$productDetails = $conn->query($getProducts); 
		if($productDetails->num_rows > 0) {
		?>
		<section class="flat-imagebox">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="owl-carousel-2 style2">
								<?php while($productDetails1 = $productDetails->fetch_assoc()) { 
									$getProductNames = getIndividualDetails('grocery_product_name_bind_languages','product_id',$productDetails1['id']);
								$getPrices = "SELECT * FROM grocery_product_bind_weight_prices WHERE product_id ='".$productDetails1['id']."' AND lkp_status_id = 0 AND lkp_city_id ='$lkp_city_id' ";
							 	$allGetPrices = $conn->query($getPrices);
							 	$getPrc1 = $allGetPrices->fetch_assoc();
							 	$deal_start_date = $productDetails1['deal_start_date'];
							 	$deal_end_date = $productDetails1['deal_end_date'];
								?>
								<div class="box-counter style1">
									<div class="counter">
										<span class="special">Special Offer</span>
										<div class="counter-content">
											<p><?php echo $getProductNames['product_name']; ?></p>
											<div id="timer">
											  <div id="days"></div>
											  <div id="hours"></div>
											  <div id="minutes"></div>
											  <div id="seconds"></div>
											</div>
										</div><!-- /.counter-content -->
									</div><!-- /.counter -->
									<div class="product-item">
										<div class="imagebox style3 v1">
											<div class="box-image save">
												<a href="#" title="">
													<img src="images/product/other/l06.jpg" alt="">
												</a>
												<span>Save $20.00</span>
											</div><!-- /.box-image -->
											<div class="box-content">
												<div class="product-name">
													<a href="#" title=""><?php echo $getProductNames['product_name']; ?></a>
												</div>
												<ul class="product-info">
													<li><?php echo $productDetails1['product_description']; ?></li>
												</ul>
												<div class="price">
													<span class="sale"><?php echo 'Rs.' . $getPrc1['selling_price'] . '.00'; ?></span>
													<span class="regular"><?php echo 'Rs.' . $getPrc1['mrp_price']; ?></span>
												</div>
											</div><!-- /.box-content -->
											<div class="box-bottom">
												<div class="btn-add-cart">
													<a href="#" title="" onClick="show_cart()">
														<img src="images/icons/add-cart.png" alt="">Add to Cart
													</a>
												</div>
												<div class="compare-wishlist">
													<a href="#" class="compare" title="">
														<img src="images/icons/compare.png" alt="">Compare
													</a>
													<a href="#" class="wishlist" title="">
														<img src="images/icons/wishlist.png" alt="">Wishlist
													</a>
												</div>
											</div><!-- /.box-bottom -->
										</div><!-- /.imagbox style3 -->
									</div><!-- /.product-item -->
									<div class="clearfix"></div>
								</div><!-- /.box-counter -->
								<?php } ?>
							</div><!-- /.owl-carousel-2 -->
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section><!-- /.flat-imagebox -->  
			<?php } ?>     
		


<?php $getFreeShippingData = getIndividualDetails('grocery_content_pages','id',4);

$getOnlineOrderData = getIndividualDetails('grocery_content_pages','id',5);

$getPaymentsData = getIndividualDetails('grocery_content_pages','id',6);

$getReturnPolicydataData = getIndividualDetails('grocery_content_pages','id',7);
?>
		<section class="flat-iconbox">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="iconbox">
							<div class="box-header">
								<div class="image">
									<img src="<?php echo $base_url . 'grocery_admin/uploads/grocery_content_banners/'.$getFreeShippingData['image'] ?>" alt="">
								</div>
								<div class="box-title">
									<h3><?php echo $getFreeShippingData['title']; ?></h3>
								</div>
							</div><!-- /.box-header -->
							<div class="box-content">
								<p><?php echo $getFreeShippingData['description']; ?></p>
							</div><!-- /.box-content -->
						</div><!-- /.iconbox -->
					</div><!-- /.col-md-3 col-sm-6 -->
					<div class="col-md-3 col-sm-6">
						<div class="iconbox">
							<div class="box-header">
								<div class="image">
									<img src="<?php echo $base_url . 'grocery_admin/uploads/grocery_content_banners/'.$getOnlineOrderData['image'] ?>" alt="">
								</div>
								<div class="box-title">
									<h3><?php echo $getOnlineOrderData['title']; ?></h3>
								</div>
							</div><!-- /.box-header -->
							<div class="box-content">
								<p><?php echo $getOnlineOrderData['description']; ?></p>
							</div><!-- /.box-content -->
						</div><!-- /.iconbox -->
					</div><!-- /.col-md-3 col-sm-6 -->
					<div class="col-md-3 col-sm-6">
						<div class="iconbox">
							<div class="box-header">
								<div class="image">
									<img src="<?php echo $base_url . 'grocery_admin/uploads/grocery_content_banners/'.$getPaymentsData['image'] ?>" alt="">
								</div>
								<div class="box-title">
									<h3><?php echo $getPaymentsData['title']; ?></h3>
								</div>
							</div><!-- /.box-header -->
							<div class="box-content">
								<p><?php echo $getPaymentsData['description']; ?></p>
							</div><!-- /.box-content -->
						</div><!-- /.iconbox -->
					</div><!-- /.col-md-3 col-sm-6 -->
					<div class="col-md-3 col-sm-6">
						<div class="iconbox">
							<div class="box-header">
								<div class="image">
									<img src="<?php echo $base_url . 'grocery_admin/uploads/grocery_content_banners/'.$getReturnPolicydataData['image'] ?>" alt="">
								</div>
								<div class="box-title">
									<h3><?php echo $getReturnPolicydataData['title']; ?></h3>
								</div>
							</div><!-- /.box-header -->
							<div class="box-content">
								<p><?php echo $getReturnPolicydataData['description']; ?></p>
							</div><!-- /.box-content -->
						</div><!-- /.iconbox -->
					</div><!-- /.col-md-3 col-sm-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-iconbox -->

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
		<!-- <script type="text/javascript" src="javascript/jquery.circlechart.js"></script> -->
		<script type="text/javascript" src="javascript/easing.js"></script>
		<script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="javascript/owl.carousel.js"></script>
		<script type="text/javascript" src="javascript/smoothscroll.js"></script>
		<!-- <script type="text/javascript" src="javascript/jquery-ui.js"></script> -->
		<script type="text/javascript" src="javascript/jquery.mCustomScrollbar.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&region=GB"></script>
	   	<script type="text/javascript" src="javascript/gmap3.min.js"></script>
	   	<script type="text/javascript" src="javascript/waves.min.js"></script> 


		<script type="text/javascript" src="javascript/main.js"></script>

		<script type="text/javascript">
	function makeTimer() {

		var endTime = new Date("21 January 2018 10:56:00");			
		endTime = (Date.parse(endTime) / 1000);

		var now = new Date();
		now = (Date.parse(now) / 1000);

		var timeLeft = endTime - now;

		var days = Math.floor(timeLeft / 86400); 
		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

		if (hours < "10") { hours = "0" + hours; }
		if (minutes < "10") { minutes = "0" + minutes; }
		if (seconds < "10") { seconds = "0" + seconds; }

		$("#days").html(days + "<span>Days</span>");
		$("#hours").html(hours + "<span>Hours</span>");
		$("#minutes").html(minutes + "<span>Minutes</span>");
		$("#seconds").html(seconds + "<span>Seconds</span>");		

	}
setInterval(function() { makeTimer(); }, 1000);
</script>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<style type="text/css">


#days {
  font-size: 100px;
  color: #db4844;
}
#hours {
  font-size: 100px;
  color: #f07c22;
}
#minutes {
  font-size: 100px;
  color: #f6da74;
}
#seconds {
  font-size: 50px;
  color: #abcd58;
}
</style>

</body>	
</html>