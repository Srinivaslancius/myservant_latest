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

		<?php
		if($_SESSION['user_login_session_id'] == '') {
		    header ("Location: logout.php");
		} 
		?>
		<?php 
		$id = $_SESSION['user_login_session_id'];
		$getUserData = getAllDataWhere('users','id',$id);
		$getUser = $getUserData->fetch_assoc();?>

		<section class="flat-checkout">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="box-checkout">
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
												<input type="text" id="first-name" name="first_name" placeholder="First name" required value="<?php echo $getUser['user_full_name']; ?>">
											</p>
											<p class="field-one-half">
												<label for="last-name">Last Name *</label>
												<input type="text" id="last-name" name="last_name" placeholder="Last name" required>
											</p>
											<div class="clearfix"></div>
										</div>
										<div class="field-row">
											<p class="field-one-half">
												<label for="email-address">Email Address *</label>
												<input type="email" id="email-address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" class="form-control" value="<?php echo $getUser['user_email']; ?>" placeholder="Your email" required>
											</p>
											<p class="field-one-half">
												<label for="phone">Phone *</label>
												<input type="text" id="phone" name="mobile" maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" value="<?php echo $getUser['user_mobile']; ?>" class="form-control valid_mobile_num" placeholder="Telephone/mobile" required>
											</p>
											<div class="clearfix"></div>
										</div>
										<div class="field-row">
											<p class="field-one-half">
												<label>State *</label>
												<?php $getStates = getAllDataWithStatus('grocery_lkp_states','0'); ?>
												<select name="lkp_state_id" id="lkp_state_id" onChange="getDistricts(this.value);" required>
													<option value="">Select State</option>
													<?php while($getStatesData = $getStates->fetch_assoc()) { ?>
													<option value="<?php echo $getStatesData['id'];?>"><?php echo $getStatesData['state_name'];?></option>
													<?php } ?>
												</select>
											</p>
											<p class="field-one-half">
												<label>District *</label>
												<select name="lkp_district_id" id="lkp_district_id" placeholder="District" onChange="getCities(this.value);" required>
													<option value="">Select District</option>
												</select>
											</p>
											<div class="clearfix"></div>
										</div>
										<div class="field-row">
											<p class="field-one-half">
												<label>City *</label>
												<select name="lkp_city_id" id="lkp_city_id" placeholder="City" onChange="getPincodes(this.value);" required>
													<option value="">Select City</option>
												</select>
											</p>
											<p class="field-one-half">
												<label>Pincode *</label>
												<select name="lkp_pincode_id" id="lkp_pincode_id" onChange="getAreas(this.value);" placeholder="Zip / Postal Code" required>
													<option value="">Select Pincode</option>
												</select>
											</p>
											<div class="clearfix"></div>
										</div>
										<div class="field-row">
											<p class="field-one-half">
												<label>Location *</label>
												<select name="lkp_area_id" id="lkp_area_id" placeholder="Location" required>
											<option value="">Select Location</option>
												</select>
											</p>
											<div class="clearfix"></div>
										</div>
										<div class="field-row">
											<label for="address">Address *</label>
											<input type="text" id="address" name="address" placeholder="Street address">
											<!-- <input type="text" id="address-2" name="address" placeholder="Apartment, suite, unit etc. (optional)"> -->
										</div>
										<!-- <div class="checkbox">
											<input type="checkbox" id="create-account" name="create-account" checked>
											<label for="create-account">Create an account?</label>
										</div> -->
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
										<input type="hidden" name='category_id' type='text' value='<?php echo $getCartItems['category_id'];?>'>
										<input type="hidden" name='sub_cat_id' type='text' value='<?php echo $getCartItems['sub_category_id'];?>'>
										<input type="hidden" name='product_id' type='text' value='<?php echo $getCartItems['product_id'];?>'>
										<input type="hidden" name='product_weight' type='text' value='<?php echo $getCartItems['product_weight_type'];?>'>
										<input type="hidden" name='product_quantity' type='text' value='<?php echo $getCartItems['product_quantity'];?>'>
										<tr>
											<td><?php echo $getProductName['product_name']; ?></td>
											<input type="hidden" name="product_name" value="<?php echo $getProductName['product_name']; ?>">
											<input type="hidden" name="product_price" value="<?php echo $getCartItems['product_price']; ?>">
											<input type="hidden" name="sub_total" value="<?php echo $cartTotal; ?>">
											<input type="hidden" name="order_total" value="<?php echo $cartTotal; ?>">
											

											<td>Rs . <?php echo $getCartItems['product_price'] ?> * <?php echo $getCartItems['product_quantity']; ?></td>
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
									<input type="radio" id="cash-delivery" name="pay_mn" value="1" required>
									<label for="cash-delivery">COD</label>
								</div>
								<div class="radio-info">
									<input type="radio" id="online_payment" name="pay_mn" value="2" required>
									<label for="online_payment">Online payment</label>
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
		<script type="text/javascript">
		    function getDistricts(val) { 
		        $.ajax({
		        type: "POST",
		        url: "grocery_admin/get_districts.php",
		        data:'lkp_state_id='+val,
		        success: function(data){
		            $("#lkp_district_id").html(data);
		        }
		        });
		    }
		    function getCities(val) { 
		        $.ajax({
		        type: "POST",
		        url: "grocery_admin/get_cities.php",
		        data:'lkp_district_id='+val,
		        success: function(data){
		            $("#lkp_city_id").html(data);
		        }
		        });
		    }
		    function getPincodes(val) { 
		        $.ajax({
		        type: "POST",
		        url: "grocery_admin/get_pincodes.php",
		        data:'lkp_city_id='+val,
		        success: function(data){
		            $("#lkp_pincode_id").html(data);
		        }
		        });
		    }
		    function getAreas(val) { 
		        $.ajax({
		        type: "POST",
		        url: "grocery_admin/get_locations.php",
		        data:'lkp_pincode_id='+val,
		        success: function(data){
		            $("#lkp_area_id").html(data);
		        }
		        });
		    }
		    </script>

</body>	
</html>