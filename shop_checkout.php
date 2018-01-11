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
								<a href="index.php" title="">Home</a>
								<span><img src="images/icons/arrow-right.png" alt=""></span>
							</li>
							<li class="trail-item">
								<a href="#" title="">Shop_checkout</a>
								
							</li>
							
						</ul><!-- /.breacrumbs -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-breadcrumb -->

		<section class="flat-checkout">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="box-checkout">
							<h3 class="title">Checkout</h3>
							<div class="checkout-login">
								Returning customer? <a href="login.php" title="">Click here to login</a>
							</div>
							<form action="#" method="get" class="checkout" accept-charset="utf-8">
								<div class="billing-fields">
									<div class="fields-title">
										<h3>Billing details</h3>
										<span></span>
										<div class="clearfix"></div>
									</div><!-- /.fields-title -->
									<div class="fields-content">
										<div class="field-row">
											<p class="field-one-half">
												<label for="first-name">First Name *</label>
												<input type="text" id="first-name" name="first-name" placeholder="Ali">
											</p>
											<p class="field-one-half">
												<label for="last-name">Last Name *</label>
												<input type="text" id="last-name" name="last-name" placeholder="Tufan">
											</p>
											<div class="clearfix"></div>
										</div>
										<div class="field-row">
											<label for="company-name">Company Name</label>
											<input type="text" id="company-name" name="company-name">
										</div>
										<div class="field-row">
											<p class="field-one-half">
												<label for="email-address">Email Address *</label>
												<input type="email" id="email-address" name="email-address">
											</p>
											<p class="field-one-half">
												<label for="phone">Phone *</label>
												<input type="text" id="phone" name="phone">
											</p>
											<div class="clearfix"></div>
										</div>
										<div class="field-row">
											<label>Country *</label>
											<select name="country">
												<option value="">Australia</option>
												<option value="">USA State</option>
												<option value="">Spanish</option>
												<option value="">Viet Nam</option>
											</select>
										</div>
										<div class="field-row">
											<label for="address">Address *</label>
											<input type="text" id="address" name="address" placeholder="Street address">
											<input type="text" id="address-2" name="address" placeholder="Apartment, suite, unit etc. (optional)">
										</div>
										<div class="field-row">
											<label for="town-city">Town / City *</label>
											<input type="text" id="town-city" name="town-city">
										</div>
										<div class="field-row">
											<p class="field-one-half">
												<label for="state-country">State / County *</label>
												<input type="text" id="state-country" name="state-country">
											</p>
											<p class="field-one-half">
												<label for="post-code">Postcode / ZIP *</label>
												<input type="text" id="post-code" name="post-code">
											</p>
											<div class="clearfix"></div>
										</div>
										<div class="checkbox">
											<input type="checkbox" id="create-account" name="create-account" checked>
											<label for="create-account">Create an account?</label>
										</div>
									</div><!-- /.fields-content -->
								</div><!-- /.billing-fields -->
								<div class="shipping-address-fields">
									<div class="fields-title">
										<h3>Shipping Address</h3>
										<span></span>
										<div class="clearfix"></div>
									</div><!-- /.fields-title -->
									<div class="fields-content">
										<div class="checkbox">
											<input type="checkbox" id="create-account-2" name="create-account-2" checked>
											<label for="create-account-2">Ship to a different address ?</label>
										</div>
										<div class="field-row">
											<p class="field-one-half">
												<label for="first-name-2">First Name *</label>
												<input type="text" id="first-name-2" name="first-name-2" placeholder="Ali">
											</p>
											<p class="field-one-half">
												<label for="last-name-2">Last Name *</label>
												<input type="text" id="last-name-2" name="last-name-2" placeholder="Tufan">
											</p>
											<div class="clearfix"></div>
										</div>
										<div class="field-row">
											<label for="company-name-2">Company Name</label>
											<input type="text" id="company-name-2" name="company-name-2">
										</div>
										<div class="field-row">
											<label>Country *</label>
											<select name="country-2">
												<option value="">Australia</option>
												<option value="">USA State</option>
												<option value="">Spanish</option>
												<option value="">Viet Nam</option>
											</select>
										</div>
										<div class="field-row">
											<label for="address-3">Address *</label>
											<input type="text" id="address-3" name="address-3" placeholder="Street address">
											<input type="text" id="address-4" name="address2" placeholder="Apartment, suite, unit etc. (optional)">
										</div>
										<div class="field-row">
											<label for="town-city-2">Town / City *</label>
											<input type="text" id="town-city-2" name="town-city-2">
										</div>
										<div class="field-row">
											<p class="field-one-half">
												<label for="state-country-2">State / County *</label>
												<input type="text" id="state-country-2" name="state-country-2">
											</p>
											<p class="field-one-half">
												<label for="post-code-2">Postcode / ZIP *</label>
												<input type="text" id="post-code-2" name="post-code-2">
											</p>
											<div class="clearfix"></div>
										</div>
										<div class="field-row">
											<label for="notes">Order Notes</label>
											<textarea id="notes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
										</div>
									</div><!-- /.fields-content -->
								</div><!-- /.shipping-address-fields -->
							</form><!-- /.checkout -->
						</div><!-- /.box-checkout -->
					</div><!-- /.col-md-7 -->
					<div class="col-md-5">
						<div class="cart-totals style2">
							<h3>Your Order</h3>
							<form action="#" method="get" accept-charset="utf-8">
								<table class="product">
									<thead>
										<tr>
											<th>Product</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Instant Bru</td>
											<td>₹99.00</td>
										</tr>
										<tr>
											<td>Instant Bru</td>
											<td>₹100.00</td>
										</tr>
									</tbody>
								</table><!-- /.product -->
								<table>
									<tbody>
										<tr>
											<td>Total</td>
											<td class="subtotal">₹199.00</td>
										</tr>
										<tr>
											<td>Shipping</td>
											<td class="btn-radio">
												<div class="radio-info">
													<input type="radio" checked id="flat-rate" name="radio-flat-rate">
													<label for="flat-rate">Flat Rate: <span>₹3.00</span></label>
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
											<td class="price-total">₹199.00</td>
										</tr>
									</tbody>
								</table>
								<div class="btn-radio style2">
									<div class="radio-info">
										<input type="radio" id="flat-payment" checked name="radio-cash-2">
										<label for="flat-payment">Check Payments</label>
										<p>Please send a check to Store Name, Store Street, Store <br />Town, Store State / County, Store Postcode.</p>
									</div>
									<div class="radio-info">
										<input type="radio" id="bank-transfer" name="radio-cash-2">
										<label for="bank-transfer">Direct Bank Transfer</label>
									</div>
									<div class="radio-info">
										<input type="radio" id="cash-delivery" name="radio-cash-2">
										<label for="cash-delivery">Cash on Delivery</label>
									</div>
									<div class="radio-info">
										<input type="radio" id="paypal" name="radio-cash-2">
										<label for="paypal">Paypal</label>
									</div>
								</div><!-- /.btn-radio style2 -->
								<div class="checkbox">
									<input type="checkbox" id="checked-order" name="checked-order" checked>
									<label for="checked-order">I’ve read and accept the terms & conditions *</label>
								</div><!-- /.checkbox -->
								<div class="btn-order">
									<a href="#" class="order" title="">Place Order</a>
								</div><!-- /.btn-order -->
							</form>
						</div><!-- /.cart-totals style2 -->
					</div><!-- /.col-md-5 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-checkout -->

		<section class="flat-row flat-iconbox style5">
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

</body>	
</html>