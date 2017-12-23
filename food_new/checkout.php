
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include_once './meta_fav.php';?>
    
    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>

    <!-- BASE CSS -->
    <link href="css/base.css" rel="stylesheet">
    
    <!-- Radio and check inputs -->
    <link href="css/skins/square/grey.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

	<div id="preloader">
        <div class="sk-spinner sk-spinner-wave" id="status">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div><!-- End Preload -->

    <!-- Header ================================================== -->
    <header>
        <?php include_once './header.php';?>
    </header>
    <!-- End Header =============================================== -->
<?php
if($_SESSION['user_login_session_id'] == '') {
    header ("Location: logout.php");
} 
?>
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
    	
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#0">Home</a></li>
                <li><a href="#0">Category</a></li>
                <li>Page active</li>
            </ul>
            
        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
		<div class="row">
			<div class="col-md-3">
            
				<div class="box_style_2 hidden-xs info">
					<h4 class="nomargin_top">Delivery time <i class="icon_clock_alt pull-right"></i></h4>
					<p>
						Lorem ipsum dolor sit amet, in pri partem essent. Qui debitis meliore ex, tollit debitis conclusionemque te eos.
					</p>
					<hr>
					<h4>Secure payment <i class="icon_creditcard pull-right"></i></h4>
					<p>
						Lorem ipsum dolor sit amet, in pri partem essent. Qui debitis meliore ex, tollit debitis conclusionemque te eos.
					</p>
				</div><!-- End box_style_1 -->
                
				<div class="box_style_2 hidden-xs" id="help">
					<i class="icon_lifesaver"></i>
					<h4>Need <span>Help?</span></h4>
					<a href="tel://004542344599" class="phone">+45 423 445 99</a>
					<small>Monday to Friday 9.00am - 7.30pm</small>
				</div>
                
			</div><!-- End col-md-3 -->
            <form method="post" action="hdfc_form.php">
			<div class="col-md-6">
				<div class="box_style_2" id="order_process">
					<h2 class="inner">Your order details</h2>
					<div class="form-group">
						<label>First name *</label>
						<input type="text" class="form-control" id="firstname_order" name="firstname_order" placeholder="First name">
					</div>
					<div class="form-group">
						<label>Last name *</label>
						<input type="text" class="form-control" id="lastname_order" name="lastname_order" placeholder="Last name">
					</div>
					<div class="form-group">
						<label>Telephone/mobile *</label>
						<input type="text" id="tel_order" name="tel_order" class="form-control" placeholder="Telephone/mobile">
					</div>
					<div class="form-group">
						<label>Email *</label>
						<input type="email" id="email_booking_2" name="email_order" class="form-control" placeholder="Your email">
					</div>
					<div class="form-group">
						<label>Your full address *</label>
						<input type="text" id="address_order" name="address_order" class="form-control" placeholder=" Your full address">
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>City *</label>
								<input type="text" id="city_order" name="city_order" class="form-control" placeholder="Your city" required>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Postal code *</label>
								<input type="text" id="pcode_oder" name="pcode_oder" class="form-control" placeholder=" Your postal code" required>
							</div>
						</div>
					</div>
					
					<hr>
					<div class="row">
						<div class="col-md-12">
				
								<label>Notes for the restaurant</label>
								<textarea class="form-control" style="height:150px" placeholder="Ex. Allergies, cash change..." name="order_note" id="order_note"></textarea>
				
						</div>
					</div>
				</div><!-- End box_style_1 -->
			</div><!-- End col-md-6 -->

			<?php 
			if($_SESSION['CART_TEMP_RANDOM'] == "") {
		        $_SESSION['CART_TEMP_RANDOM'] = rand(10, 10).sha1(crypt(time())).time();
		    }
		    $session_cart_id = $_SESSION['CART_TEMP_RANDOM'];
		    $user_session_id = $_SESSION['user_login_session_id'];
			$cartItems1 = "SELECT * FROM food_cart WHERE user_id = '$user_session_id' OR session_cart_id='$session_cart_id' ";
    		$cartItems = $conn->query($cartItems1);
			?>
            

            <input type="hidden" name='key' type='text' value='71tFEF'>
			<input type="hidden" name='txnid' type='text' value='<?php echo uniqid( "srinivas_" );?>'>		
			<input type="hidden" name='amount' type='text' value='1'>
			<input type="hidden" name='firstname' type='text' value='srinivas'>
			<input type="hidden" name='email' type='text' value='srinivas@lanciussolutions.in'>
			<input type="hidden" name='phone' type='text' value='1234567890'>
			<input type="hidden" name='productinfo' type='text' value='Just another test site'>


			<input type="hidden" name='furl' type='text' value='online_order_success.php'>

			<input type="hidden" name='surl' type='text' value='online_order_failure.php'>
            
			<div class="col-md-3" id="sidebar">
            	<div class="theiaStickySidebar">
				<div id="cart_box">
					<h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
					<table class="table table_summary">
					<tbody>
					<?php $cartTotal = 0; $service_tax = 0;
                    	while ($getCartItems = $cartItems->fetch_assoc()) { ?>
                    <?php $getProductDetails= getIndividualDetails('food_products','id',$getCartItems['food_item_id']); ?>
					<tr>
						<td>
							 <strong> <?php echo $getCartItems['item_quantity']; ?> x </strong> <?php echo $getProductDetails['product_name']; ?>
						</td>
						<td>
							<strong class="pull-right">Rs. <?php echo $cartTotal += $getCartItems['item_price']*$getCartItems['item_quantity']; ?></strong>
						</td>
					</tr>

					<input type="hidden" name="food_category_id[]" value="<?php echo $getCartItems['food_category_id']; ?>">
					<input type="hidden" name="food_item_id[]" value="<?php echo $getCartItems['food_item_id']; ?>">
					<input type="hidden" name="item_weight_type_id[]" value="<?php echo $getCartItems['item_weight_type_id']; ?>">
					<input type="hidden" name="item_price[]" value="<?php echo $getCartItems['item_price']; ?>">
					<input type="hidden" name="item_quantity[]" value="<?php echo $getCartItems['item_quantity']; ?>">
					<input type="hidden" name="restaurant_id" value="<?php echo $getCartItems['restaurant_id']; ?>">

					<?php } ?>					
					</tbody>
					</table>
					<hr>
					<div class="row" id="options_2">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
							<label><input type="radio" value="2" checked name="dev_type" class="icheck">Delivery</label>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
							<label><input type="radio" value="1" name="dev_type" class="icheck">Take Away</label>
						</div>
					</div><!-- Edn options 2 -->
					<hr>
					<table class="table table_summary">
					<tbody>
					<tr>
						<td>
							 Subtotal <span class="pull-right">Rs.<?php echo $cartTotal; ?></span>
						</td>
					</tr>
					<tr>
						<td>
							 Delivery fee <span class="pull-right">Rs.<?php echo $getFoodSiteSettingsData['delivery_charges'] ; ?></span>
						</td>
					</tr>
					<?php $service_tax += ($getFoodSiteSettingsData['service_tax']/100)*$cartTotal; ?>
                    <tr>
						<td>
							 Service Tax <span class="pull-right">Rs.<?php echo $service_tax; ?>(<?php echo $getFoodSiteSettingsData['service_tax'] ; ?>%)</span>
						</td>
					</tr>
					<tr>
						<td class="total">
							 TOTAL <span class="pull-right">Rs. <?php echo $cartTotal+$service_tax+$getFoodSiteSettingsData['delivery_charges']; ?></span>
							 <?php $order_total = $cartTotal+$service_tax+$getFoodSiteSettingsData['delivery_charges']; ?> 
						</td>
					</tr>
					</tbody>
					</table>


					<input type="hidden" name="sub_total" value="<?php echo $cartTotal; ?>">
					<input type="hidden" name="order_total" value="<?php echo $order_total; ?>">
					<input type="hidden" name="service_tax" value="<?php echo $service_tax; ?>">
					<input type="hidden" name="user_id" value="<?php echo $user_session_id; ?>">

					<hr>
					<div class="row" id="options_2">
						<div class="col-lg-8 col-md-12 col-sm-12 col-xs-6">
							<label><input type="radio" value="2" checked name="pay_mn" class="icheck">Online Payment</label>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-6">
							<label><input type="radio" value="1" name="pay_mn" class="icheck">COD</label>
						</div>
					</div><!-- Edn options 2 -->
					<hr>

					<input type="submit" name="submit" value="Go to checkout" class="btn_full">					
                    <a class="btn_full_outline" href="index.php"><i class="icon-right"></i> Add other items</a>
				</div><!-- End cart_box -->
                </div><!-- End theiaStickySidebar -->
			</div><!-- End col-md-3 -->
            </form>
		</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->

<!-- Footer ================================================== -->
	<footer>
        <?php include_once 'footer.php';?>
    </footer>
<!-- End Footer =============================================== -->

<div class="layer"></div><!-- Mobile menu overlay mask -->

<!-- Login modal -->   
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="#" class="popup-form" id="myLogin">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
					<input type="text" class="form-control form-white" placeholder="Username">
					<input type="text" class="form-control form-white" placeholder="Password">
					<div class="text-left">
						<a href="#">Forgot Password?</a>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div><!-- End modal -->   
    
<!-- Register modal -->   
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="#" class="popup-form" id="myRegister">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
					<input type="text" class="form-control form-white" placeholder="Name">
					<input type="text" class="form-control form-white" placeholder="Last Name">
                    <input type="email" class="form-control form-white" placeholder="Email">
                    <input type="text" class="form-control form-white" placeholder="Password"  id="password1">
                    <input type="text" class="form-control form-white" placeholder="Confirm password"  id="password2">
                    <div id="pass-info" class="clearfix"></div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="accept_2" id="check_2" name="check_2" />
							<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Register</button>
				</form>
			</div>
		</div>
	</div><!-- End Register modal -->
    
     <!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_close"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon-search-6"></i>
			</button>
		</form>
	</div>
	<!-- End Search Menu -->
    
<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="js/theia-sticky-sidebar.js"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>

</body>
</html>