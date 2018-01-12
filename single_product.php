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

		<?php 
		$product_id = $_GET['product_id']; 
		$getProducts = "SELECT * from grocery_products WHERE id = $product_id AND lkp_status_id = 0 AND id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = 1)";
		$getProducts1 = $conn->query($getProducts);
		$productDetails = $getProducts1->fetch_assoc();
		$getProductName = getIndividualDetails('grocery_product_name_bind_languages','product_id',$product_id);
		?>
		<section class="flat-breadcrumb">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumbs">
							<li class="trail-item">
								<a href="index.php" title="">Home</a>
								<span><img src="images/icons/arrow-right.png" alt=""></span>
							</li>
							<li class="trail-item">
								<a href="#" title=""><?php echo $getProductName['product_name']; ?></a>
								
							</li>
							
						</ul><!-- /.breacrumbs -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-breadcrumb -->

		<?php $getProductImages = getAllDataWhere('grocery_product_bind_images','product_id',$product_id); ?>
		<section class="flat-product-detail">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="flexslider">
							<ul class="slides">
								<?php while($productImage = $getProductImages->fetch_assoc()) { ?>
							    <li data-thumb="<?php echo $base_url . 'grocery_admin/uploads/product_images/'.$productImage['image'] ?>">
							      <img src="<?php echo $base_url . 'grocery_admin/uploads/product_images/'.$productImage['image'] ?>" alt="image slider" />
							      <span>NEW</span>
							    </li>
							    <?php } ?>
							   
							</ul><!-- /.slides -->
						</div><!-- /.flexslider -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="product-detail">
							<div class="header-detail">
								<h4 class="name"><?php echo $getProductName['product_name']; ?></h4><br>
								 <div class="product_name" style="width:300px">
								 <?php 
								 	$getPrices = "SELECT * FROM grocery_product_bind_weight_prices WHERE product_id ='$product_id' AND lkp_status_id = 0 AND lkp_city_id ='1' ";
								 	$allGetPrices = $conn->query($getPrices);
								 ?>
									<select class="s-w form-control" id="na1q_qty0" onchange="get_price(this.value,'na10');">
									<?php while($getPrc = $allGetPrices->fetch_assoc() ) { ?>
                                      <option value="<?php echo $getPrc['id']; ?>"><?php echo $getPrc['weight_type'] .' - '. 'Rs : ' . $getPrc['selling_price']; ?></option>
                                    <?php } ?>								  
                                    </select>
								</div>
								<div class="reviewed">
									
									<!-- <div class="status-product">
										Availablity <span>In stock</span>
									</div> -->
								</div><!-- /.reviewed -->
							</div><!-- /.header-detail -->

							<input type="hidden" id="pro_id" value="<?php echo $product_id; ?>">
							<input type="hidden" id="cat_id" value="<?php echo $productDetails['grocery_category_id']; ?>">
							<input type="hidden" id="sub_cat_id" value="<?php echo $productDetails['grocery_sub_category_id']; ?>">
							<input type="hidden" id="pro_name" value="<?php echo $getProductName['product_name']; ?>">
							
							<?php 
							 	$getPrices1 = "SELECT * FROM grocery_product_bind_weight_prices WHERE product_id ='$product_id' AND lkp_status_id = 0 AND lkp_city_id ='1' ";
							 	$allGetPrices1 = $conn->query($getPrices1);
							?>
							<div class="content-detail">
								<div class="price">		
								<?php while($getPrc1 = $allGetPrices1->fetch_assoc() ) { ?>							
									<div class="sale">
										<?php echo 'Rs : ' . $getPrc1['selling_price']; ?>
										<input type="hidden" id="pro_price" value="<?php echo $getPrc1['selling_price']; ?>">
										<input type="hidden" id="pro_weight_type_id" value="<?php echo $getPrc1['id']; ?>">
										<?php if($getPrc1['offer_type'] == 1) { ?>
											<span style="text-decoration:line-through;font-size:16px;color:#838383;">(<?php echo 'Rs : ' . $getPrc1['mrp_price']; ?>)</span>
										<?php } ?>
									</div>
								<?php } ?>
								</div>
								<div class="info-text">
									<?php echo $productDetails['product_description']; ?>
								</div>								
							</div><!-- /.content-detail -->
							<div class="footer-detail">
								<!-- <div class="quanlity-box">
									
									<div class="quanlity">
										<span class="btn-down"></span>
										<input type="text" name="number" value="" min="1" max="100" placeholder="Quantity">
										<span class="btn-up"></span>
									</div>
								</div><!-- /.quanlity-box --> 
								<div class="box-cart style2">
									<div class="btn-add-cart">
										<a style="cursor:pointer" onClick="show_cart()"><img src="images/icons/add-cart.png" alt="">Add to Cart</a>
									</div>
									<div class="compare-wishlist">
										
										<a href="compare.html" class="wishlist" title=""><img src="images/icons/wishlist.png" alt="">Wishlist</a>
									</div>
								</div><!-- /.box-cart -->
								
							</div><!-- /.footer-detail -->
						</div><!-- /.product-detail -->
					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-product-detail -->
		
		<section class="flat-imagebox style4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="flat-row-title">
							<h3>Related Products</h3>
						</div>
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel-3">
						<?php for($i=0; $i<12; $i++) {?>
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="images/product/other/1.png" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Bru</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Instant Coffee</a>
									</div>
									<div class="price">
										<span class="sale"> ₹50.00</span>
										<span class="regular">₹ 2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<?php } ?>
						</div><!-- /.owl-carousel-3 -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-imagebox style4 -->

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

		function show_cart() {

			var productId = $('#pro_id').val();
			var catId = $('#cat_id').val();
			var subCatId = $('#sub_cat_id').val();
			var productName = $('#pro_name').val();
			var productPrice = $('#pro_price').val();
			var productWeightType = $('#pro_weight_type_id').val();

   			$.ajax({
		      type:'post',
		      url:'save_cart.php',
		      data:{		        
		        productId:productId,catId:catId,subCatId:subCatId,productName:productName,productPrice:productPrice,productWeightType:productWeightType,
		      },
		      success:function(response) {
		      	window.location.href = "shop_cart.php";
		      }
		    }); 

		}
	</script>

	</body>	
</html>