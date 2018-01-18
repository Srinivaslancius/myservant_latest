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
		<?php if($cartItems->num_rows > 0) { ?>
		<section class="flat-shop-cart">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="flat-row-title style1">
							<h3>Shopping Cart</h3>
						</div>
						<div class="table-cart cart">
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
								<?php $cartTotal = 0;
								while ($getCartItems = $cartItems->fetch_assoc()) { 
								$getProductImage = getIndividualDetails('grocery_product_bind_images','product_id',$getCartItems['product_id']);
								$cartTotal = $getCartItems['product_price']*$getCartItems['product_quantity'];

								$getProductName = getIndividualDetails('grocery_product_name_bind_languages','product_id',$getCartItems['product_id']);
								?>
									<tr>
										<td>
											<div class="img-product">
												<img src="<?php echo $base_url . 'grocery_admin/uploads/product_images/'.$getProductImage['image']; ?>" alt="<?php echo $getCartItems['product_name']; ?>">
											</div>
											<div class="name-product">
												<?php echo $getProductName['product_name']; ?>
											</div>
											<div class="price">
												 Rs . <?php echo $getCartItems['product_price']; ?>
											</div>
											<div class="clearfix"></div>
										</td>
										<td>
											<div class="quanlity">
                                				<span class="btn-down" onclick="remove_cart_item1(<?php echo $getCartItems['id']; ?>)"></span>
                                				<input type="text" readonly name="number" id="number" value="<?php echo $getCartItems['product_quantity']; ?>" min="0" placeholder="Quantity">
                                				<span class="btn-up" onclick="add_cart_item1(<?php echo $getCartItems['id']; ?>)"></span>
                                    		</div>
										</td>
										<td>
											<div class="total">
												 Rs . <?php echo $cartTotal; ?>
											</div>
										</td>
										<td>
											<a href="#" title="" onclick="deleteCartItem(<?php echo $getCartItems['id']; ?>);">
												<img src="images/icons/delete.png" alt="">
											</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
							<div class="box-cart style2">
								<?php if(!isset($_SESSION['user_login_session_id'])) { ?>
							  	<div class="btn-add-cart pull-right">
									<a href="login.php?cart_id=<?php echo encryptPassword(1);?>" style="cursor:pointer">Proceed To Checkout</a>
								</div>
	            				<?php } else { ?>
					              <div class="btn-add-cart pull-right">
									<a href="shop_checkout.php" style="cursor:pointer">Proceed To Checkout</a>
								 </div>
					            <?php } ?>					
							</div>
							<!-- <div class="form-coupon">
								<form action="#" method="get" accept-charset="utf-8">
									<div class="coupon-input">
										<input type="text" name="coupon code" placeholder="Coupon Code">
										<button type="submit">Apply Coupon</button>
									</div>
								</form>
							</div>--><!-- /.form-coupon -->
						</div><!-- /.table-cart -->
					</div><!-- /.col-lg-8 -->
					
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-shop-cart -->
		<?php } else { ?>
		<center><img src="images/cart.png"></center>
			<p style="text-align:center;font-size:20px;margin-top:10px">Your shopping cart is currently empty</p>			
			<p style="text-align:center;margin:15px">please click on the 'Continue Shopping' button below for items</p>
    		<center><a href="index.php"><button type="submit" class="contact" style="background-color:#FE6003">Continue Shopping</button></a></center>
		<?php } ?>

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
<script type="text/javascript">

function add_cart_item1(cartId) {
  
 $.ajax({
  type:'post',
  url:'cart_page_inc.php',
  data:{
     cart_id:cartId,       
  },
  success:function(data) {
    //alert(data);
    $('.cart').html(data);
  }
 });

}

function remove_cart_item1(cartId) {

 $.ajax({
  type:'post',
  url:'cart_page_dec.php',
  data:{
     cart_id:cartId,       
  },
  success:function(data) { 
    //alert(data);
    $('.cart').html(data);
    $('#cart_cnt').html($('#get_cart_cnt').val());
  }

 });

}

function deleteCartItem(cartId) {
  //Display Add On's
  var x = confirm("Are you sure you want to delete?");
    if(x) {
        $.ajax({
          type:'post',
          url:'delete_cart_tem.php',
          data:{
             cartId : cartId,                                
          },
          success:function(response) {            
             if(response == 1) {
                alert("Item Deleted!");
                location.reload();
             } else {
               alert("Item Delete Failed!");
               return false;
             }
            }
        });
      }
}

</script>
		

</body>	
</html>