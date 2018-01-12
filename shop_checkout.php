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
							
							</form><!-- /.checkout -->
						</div><!-- /.box-checkout -->
					</div><!-- /.col-md-7 -->
					<?php
					    if($_SESSION['CART_TEMP_RANDOM'] == "") {
					        $_SESSION['CART_TEMP_RANDOM'] = rand(10, 10).sha1(crypt(time())).time();
					    }
					    $session_cart_id = $_SESSION['CART_TEMP_RANDOM'];
					    if(isset($_SESSION['user_login_session_id']) && $_SESSION['user_login_session_id']!='') {
					        $user_session_id = $_SESSION['user_login_session_id'];
					        $cartItems1 = "SELECT * FROM grocery_cart WHERE (user_id = '$user_session_id' OR session_cart_id='$session_cart_id') AND product_quantity!='0'";
					        $cartItems = $conn->query($cartItems1);
					    } else {
					      $cartItems1 = "SELECT * FROM grocery_cart WHERE  product_quantity!='0' AND session_cart_id='$session_cart_id' ";
					      $cartItems = $conn->query($cartItems1);
					    } 
					?>
					<div class="col-md-5">
						<div class="cart-totals style2">						
							<h3>Your Order</h3>
							<form action="order_save.php" method="post" accept-charset="utf-8">
								<table class="product">
									<thead>
										<tr>
											<th>Product</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<?php $cartTotal = 0;
											while ($getCartItems = $cartItems->fetch_assoc()) { 
											$getProductImage = getIndividualDetails('grocery_product_bind_images','product_id',$getCartItems['product_id']);
											$cartTotal += $getCartItems['product_price']*$getCartItems['product_quantity'];

											$getProductName = getIndividualDetails('grocery_product_name_bind_languages','product_id',$getCartItems['product_id']);
										?>
										<tr>
											<td><?php echo $getProductName['product_name']; ?></td>
											<input type="hidden" name="product_name" value="<?php echo $getProductName['product_name']; ?>">
											<input type="hidden" name="product_price" value="<?php echo $getCartItems['product_price']; ?>">
											<input type="hidden" name="order_price" value="<?php echo $cartTotal; ?>">
											

											<td>Rs . <?php echo $getCartItems['product_price']; ?></td>
										</tr>	
										<?php } ?>									
									</tbody>
								</table><!-- /.product -->
								
								<table>
									<tbody>										
										
										<tr>
											<td>Total</td>
											<td class="price-total">Rs . <?php echo $cartTotal; ?></td>
										</tr>
									</tbody>
								</table>
								<div class="btn-radio style2">
									
								<div class="radio-info">
									<input type="radio" id="cash-delivery" name="radio-cash-2">
									<label for="cash-delivery">Cash on Delivery</label>
								</div>
									
								</div><!-- /.btn-radio style2 -->
								<div class="checkbox">
									<input type="checkbox" id="checked-order" name="checked-order" checked>
									<label for="checked-order">I’ve read and accept the terms & conditions *</label>
								</div><!-- /.checkbox -->
								<div class="btn-order">									
									<input type="submit" name="submit" value="Place Order">
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