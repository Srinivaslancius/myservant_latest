<?php include_once 'meta.php';?>

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
                <section class="flat-row flat-banner-box">
				<div class="container-fluid">
					<div class="row">
						<div class="wrap-banner">
							<div class="banner-box style1">
								<div class="inner-box">
									<a href="#" title="">
										<img src="images/banner_boxes/home-06.jpg" alt="banner">
									</a>
								</div><!-- /.inner-box -->
								<div class="inner-box">
									<a href="#" title="">
										<img src="images/banner_boxes/home-09.jpg" alt="">
									</a>
								</div><!-- /.inner-box -->
								<div class="clearfix"></div>
							</div><!-- /.box -->
							<div class="banner-box style1">
								<div class="inner-box">
									<a href="#" title="">
										<img src="images/banner_boxes/home-07.jpg" alt="banner">
									</a>
								</div>
								<div class="inner-box">
									<a href="#" title="">
										<img src="images/banner_boxes/home-10.jpg" alt="">
									</a>
								</div>
							</div><!-- /.banner-box -->
							<div class="banner-box style1 v1">
								<div class="inner-box">
									<a href="#" title="">
										<img src="images/banner_boxes/home-08.jpg" alt="">
									</a>
								</div><!-- /.inner-box -->
							</div><!-- /.banner-box -->
						</div><!-- /.col-md-4 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section><!-- /.flat-banner-box -->
<!-- /.flat-banner-box -->
 	
 		<div class="divider20"></div>
 		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
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
		<script type="text/javascript" src="javascript/jquery.countdown.js"></script>

		<script type="text/javascript" src="javascript/main.js"></script>
 		<?php 
		if($_SESSION['city_name'] == '') {
            $lkp_city_id = 1;
        } else {
            $getCities1 = getIndividualDetails('grocery_lkp_cities','city_name',$_SESSION['city_name']);
			$lkp_city_id = $getCities1['id'];
        }
		$getProducts = "SELECT * FROM grocery_products_new WHERE lkp_status_id = 0 AND (NOW() BETWEEN deal_start AND deal_end) AND deal_start != '0000-00-00 00:00:00' AND deal_end != '0000-00-00 00:00:00' AND id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = $lkp_city_id)";
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
							 	$count_down_date = date('m/d/Y H:i:s', strtotime($productDetails1['deal_end']));


							 	$getProductImages = getIndividualDetails('grocery_product_bind_images','product_id',$productDetails1['id']);
								?>
								

								
								
								<div class="box-counter style1">
									<div class="counter">
										<span class="special">Special Offer</span>
										<div class="counter-content">
											<p><?php echo $getProductNames['product_name']; ?></p>
											<input type="hidden" id="date_<?php echo $productDetails1['id']; ?>" value="<?php echo $count_down_date; ?>">
											<script type="text/javascript">
								($ => {

  $.fn.timezz = function (options) {
    var date = $('#date_<?php echo $productDetails1['id']; ?>').val();
    alert(date);
    const defaultOptions = {
      'date' : date,
      'days' : 'd',
      'hours' : 'h',
      'minutes' : 'm',
      'seconds' : 's',
      'tagNumber' : 'span',
      'tagLetter' : 'i',
      'stop' : false
    };

    const settings = $.extend(defaultOptions, options);

    return this.each(function () {

      const ths = $(this);

      // create tags
      const { tagNumber, tagLetter } = settings;

      // time specified in the settings
      const countDate = new Date(settings.date).getTime();

      // time
      const ONE_SECOND = 1000; // ms
      const ONE_MINUTE = ONE_SECOND * 60;
      const ONE_HOUR = ONE_MINUTE * 60;
      const ONE_DAY = ONE_HOUR * 24;

      // fixing zero before output
      const fixNumber = number => number >= 10 ? number : `0${number}`;

      // template for calculate
      const calculate = math => fixNumber(Math.floor(Math.abs(math)));

      function timer() {

        // current time
        const now = new Date().getTime();
        // distance
        const distance = countDate - now;

        // hard mathematics
        let days = calculate(distance / ONE_DAY);
        let hours = calculate(distance % ONE_DAY / ONE_HOUR);
        let minutes = calculate(distance % ONE_HOUR / ONE_MINUTE);
        let seconds = calculate(distance % ONE_MINUTE / ONE_SECOND);

        // template for output
        const output = (unit, unitConfig) => `<${tagNumber}>${unit}<${tagLetter}>${unitConfig}</${tagLetter}></${tagNumber}> `;
                                             
        // output
        ths.html(
          output(days, settings.days) +
          output(hours, settings.hours) +
          output(minutes, settings.minutes) +
          output(seconds, settings.seconds)
        )
      }

      // output before calculate
      timer()

      // calculate and output with constant updating
      if (settings.stop == false) setInterval(timer, ONE_SECOND)
    })
  }
})(jQuery);
</script>
<script>
		  $('#timer_<?php echo $productDetails1['id']; ?>').timezz({
		    'days' : ' days,',
		    'hours' : ' hours,',
		    'minutes' : ' minutes,',
		    'seconds' : ' seconds'
		  });
		</script>
											<div id="timer_<?php echo $productDetails1['id']; ?>">
											</div>
										</div><!-- /.counter-content -->
									</div><!-- /.counter -->
									<div class="product-item">
										<div class="imagebox style3 v1">
											<div class="box-image save">
												<a href="#" title="">
													<img src="<?php echo $base_url . 'grocery_admin/uploads/product_images/'.$getProductImages['image'] ?>" alt="" style="width:321px; height:352px">
												</a>												
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
		
		


</body>	
</html>