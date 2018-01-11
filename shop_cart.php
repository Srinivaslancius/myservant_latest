<?php include_once 'meta.php';?>
<body class="header_sticky">
	<div class="boxed">

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
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumbs">
							<li class="trail-item">
								<a href="#" title="">Home</a>
								<span><img src="images/icons/arrow-right.png" alt=""></span>
							</li>
							<li class="trail-item">
								<a href="#" title="">Shop Cart</a>
								
							</li>
							
						</ul><!-- /.breacrumbs -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-breadcrumb -->

		<section class="flat-shop-cart">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="flat-row-title style1">
							<h3>Shopping Cart</h3>
						</div>
						<div class="table-cart">
							<table>
								<thead>
									<tr>
										<th>Product</th>
										<th>Quantity</th>
										<th>Total</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
								<?php for($i=0; $i<2; $i++) {?>
									<tr>
										<td>
											<div class="img-product">
												<img src="images/product/other/1.png" alt="">
											</div>
											<div class="name-product">
												Instant Bru 
											</div>
											<div class="price">
												 ₹1,250.00
											</div>
											<div class="clearfix"></div>
										</td>
										<td>
											<div class="quanlity">
											<form action="" method="post">
											<input type="number" id="number" min="0" value="1" placeholder="Quanlity"/>
											</form>
											</div>
										</td>
										<td>
											<div class="total">
												 ₹6,250.00
											</div>
										</td>
										<td>
											<a href="#" title="">
												<img src="images/icons/delete.png" alt="">
											</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
							<div class="form-coupon">
								<form action="#" method="get" accept-charset="utf-8">
									<div class="coupon-input">
										<input type="text" name="coupon code" placeholder="Coupon Code">
										<button type="submit">Apply Coupon</button>
									</div>
								</form>
							</div><!-- /.form-coupon -->
						</div><!-- /.table-cart -->
					</div><!-- /.col-lg-8 -->
					<div class="col-lg-4">
						<div class="cart-totals">
							<h3>Cart Totals</h3>
							<form action="#" method="get" accept-charset="utf-8">
								<table>
									<tbody>
										<tr>
											<td>Subtotal</td>
											<td class="subtotal"> ₹2,589.00</td>
										</tr>
										<tr>
											<td>Shipping</td>
											<td class="btn-radio">
												<div class="radio-info">
													<input type="radio" id="flat-rate" checked name="radio-flat-rate">
													<label for="flat-rate">Flat Rate: <span> ₹3.00</span></label>
												</div>
												<div class="radio-info">
													<input type="radio" id="free-shipping" name="radio-flat-rate">
													<label for="free-shipping">Free Shipping</label>
												</div>
												<div class="btn-shipping">
													<a href="#" title="">Calculate Shipping</a>
												</div>
											</td><!-- /.btn-radio -->
										</tr>
										<tr>
											<td>Total</td>
											<td class="price-total"> ₹1,591.00</td>
										</tr>
									</tbody>
								</table>
								<div class="btn-cart-totals">
									<a href="#" class="update" title="">Update Cart</a>
									<a href="#" class="checkout" title="">Proceed to Checkout</a>
								</div><!-- /.btn-cart-totals -->
							</form><!-- /form -->
						</div><!-- /.cart-totals -->
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-shop-cart -->

		<section class="flat-row flat-iconbox style3">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="iconbox style1">
							<div class="box-header">
								<div class="image">
									<img src="images/icons/car.png" alt="">
								</div>
								<div class="box-title">
									<h3>Free Shipping</h3>
								</div>
								<div class="clearfix"></div>
							</div><!-- /.box-header -->
						</div><!-- /.iconbox -->
					</div><!-- /.col-lg-3 col-md-6 -->
					<div class="col-lg-3 col-md-6">
						<div class="iconbox style1">
							<div class="box-header">
								<div class="image">
									<img src="images/icons/order.png" alt="">
								</div>
								<div class="box-title">
									<h3>Order Online Service</h3>
								</div>
								<div class="clearfix"></div>
							</div><!-- /.box-header -->
						</div><!-- /.iconbox -->
					</div><!-- /.col-lg-3 col-md-6 -->
					<div class="col-lg-3 col-md-6">
						<div class="iconbox style1">
							<div class="box-header">
								<div class="image">
									<img src="images/icons/payment.png" alt="">
								</div>
								<div class="box-title">
									<h3>Payment</h3>
								</div>
								<div class="clearfix"></div>
							</div><!-- /.box-header -->
						</div><!-- /.iconbox -->
					</div><!-- /.col-lg-3 col-md-6 -->
					<div class="col-lg-3 col-md-6">
						<div class="iconbox style1">
							<div class="box-header">
								<div class="image">
									<img src="images/icons/return.png" alt="">
								</div>
								<div class="box-title">
									<h3>Return 30 Days</h3>
								</div>
								<div class="clearfix"></div>
							</div><!-- /.box-header -->
						</div><!-- /.iconbox -->
					</div><!-- /.col-lg-3 col-md-6 -->
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
		<script type="text/javascript" src="javascript/jquery.circlechart.js"></script>
		<script type="text/javascript" src="javascript/easing.js"></script>
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
		
		<script>
		// Select your input element.
var number = document.getElementById('number');

// Listen for input event on numInput.
number.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58) 
      || e.keyCode == 8)) {
        return false;
    }
}
		</script>
		

</body>	
</html>