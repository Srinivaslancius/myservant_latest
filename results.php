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
		<?php 
		if($product_id = $_GET['cat_id']) {
			$getProducts = getIndividualDetails('grocery_category','id',$product_id);
			$getName = $getProducts['category_name'];
			$getProducts = "SELECT * from grocery_products WHERE grocery_category_id = $product_id AND lkp_status_id = 0 AND id IN (SELECT product_id FROM product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = 1)";
			$getProducts1 = $conn->query($getProducts);
			$getProductsTotalDetails = "SELECT * from grocery_products WHERE grocery_category_id = $product_id AND lkp_status_id = 0 AND id IN (SELECT product_id FROM product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = 1)";
			$getProductsTotalDetails1 = $conn->query($getProductsTotalDetails);
		} elseif($product_id = $_GET['sub_cat_id']) {
			$getProducts = getIndividualDetails('grocery_sub_category','id',$product_id);
			$getName = $getProducts['sub_category_name'];
			$getProducts = "SELECT * from grocery_products WHERE grocery_sub_category_id = $product_id AND lkp_status_id = 0 AND id IN (SELECT product_id FROM product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = 1)";
			$getProducts1 = $conn->query($getProducts);
			$getProductsTotalDetails = "SELECT * from grocery_products WHERE grocery_sub_category_id = $product_id AND lkp_status_id = 0 AND id IN (SELECT product_id FROM product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = 1)";
			$getProductsTotalDetails1 = $conn->query($getProductsTotalDetails);
		}
		?>
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
								<a href="#" title=""><?php echo $getName; ?></a>
							</li>
						</ul><!-- /.breacrumbs -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-breadcrumb -->

		<main id="shop">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4"><br>
						<?php include_once 'filters.php'; ?>
						<!-- /.sidebar -->
					</div><!-- /.col-lg-3 col-md-4 -->
					<div class="col-lg-9 col-md-8">
						<div class="main-shop">
							
							<div class="wrap-imagebox">
								<div class="flat-row-title">
									<h3><?php echo $getName; ?></h3>
									<span>
										Showing 1–15 of 20 results
									</span>
									<div class="clearfix"></div>
								</div>
								<div class="sort-product">
									<ul class="icons">
										<li>
											<img src="images/icons/list-1.png" alt="">
										</li>
										<li>
											<img src="images/icons/list-2.png" alt="">
										</li>
									</ul>
									<div class="sort">
										<div class="popularity">
											<select name="popularity">
												<option value="">Sort by popularity</option>
												<option value="">Recent</option>
												<option value="">Price low to high</option>
												<option value="">Sort by popularity</option>
											</select>
										</div>
										<div class="showed">
											<select name="showed">
												<option value="">Show 20</option>
												<option value="">Show 15</option>
												<option value="">Show 10</option>
												<option value="">Show 15</option>
											</select>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="tab-product">
									<div class="row sort-box">
									<?php 
									while($getProductDetails = $getProducts1->fetch_assoc()) { 
										$getProductImages = getIndividualDetails('product_bind_images','product_id',$getProductDetails['id']);
										$getProductNames = getIndividualDetails('product_name_bind_languages','product_id',$getProductDetails['id']);
									?>	
										<div class="col-lg-4 col-sm-6">
											<div class="product-box">
												<div class="imagebox">
														<a href="single_product.php" title="">
															<img src="<?php echo $base_url . 'grocery_admin/uploads/product_images/'.$getProductImages['image'] ?>" alt="" style="width:264px; height:210px">
														</a>
													<div class="box-content">
														<!--<div class="cat-name">
															<a href="#" title="">Monthly Saving Pack 4</a>
														</div>-->
														<div class="product-name">
															<a href="single_product.php" title=""><?php echo $getProductNames['product_name']; ?></a>
														</div>
														<div class="product_name">
														<?php 
														 $getProductPrices = getAllDataWhereWithActive('product_bind_weight_prices','product_id',$getProductDetails['id']);
														?> 
														<select class="s-w form-control" id="na1q_qty0" onchange="get_price(this.value,'na10');">
															<?php while($getPrices = $getProductPrices->fetch_assoc()) { ?>
                                                            <option value="6180"><?php echo $getPrices['weight_type']; ?> - Rs.<?php echo $getPrices['selling_price']; ?> </option>
                                                            <?php } ?>
                                                          </select>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox -->
											</div>
										</div><!-- /.col-lg-4 col-sm-6 -->
										<?php } ?>
									</div>
									<div class="sort-box">
									<?php 
									while($getProductsTotalDetails2 = $getProductsTotalDetails1->fetch_assoc()) { 
										$getProductImages1 = getIndividualDetails('product_bind_images','product_id',$getProductsTotalDetails2['id']);
										$getProductNames1 = getIndividualDetails('product_name_bind_languages','product_id',$getProductsTotalDetails2['id']);
									?>
										<div class="product-box style3">
											<div class="imagebox style1 v3">
												<div class="box-image">
													<a href="single_product.php" title="">
														<img src="<?php echo $base_url . 'grocery_admin/uploads/product_images/'.$getProductImages1['image'] ?>" alt="" style="width:264px; height:210px">
													</a>
												</div><!-- /.box-image -->
												<div class="box-content">
													<div class="product-name">
														<a href="single_product.php" title=""><?php echo $getProductNames1['product_name']; ?></a>
													</div>
													<!-- <div class="status">
														Availablity: In stock
													</div> -->
													<div class="info">
														<p style="text-align:justify">
															<?php echo $getProductNames1['product_description']; ?>
														</p>
													</div>
												</div><!-- /.box-content -->
												<div class="box-price">
													<div class="product_name">
														<?php 
														 $getProductPrices1 = getAllDataWhereWithActive('product_bind_weight_prices','product_id',$getProductsTotalDetails2['id']);
														?> 
														<select class="s-w form-control" id="na1q_qty0" onchange="get_price(this.value,'na10');">
                                                            <?php while($getPrices1 = $getProductPrices1->fetch_assoc()) { ?>
                                                            <option value="6180"><?php echo $getPrices1['weight_type']; ?> - Rs.<?php echo $getPrices1['selling_price']; ?> </option>
                                                            <?php } ?>
                                                          </select>
														</div>
													<div class="btn-add-cart">
														<a href="#" title="">
															<img src="images/icons/add-cart.png" alt="">Add to Cart
														</a>
													</div>
													
												</div><!-- /.box-price -->
											</div><!-- /.imagebox -->
										</div><!-- /.product-box -->
										<?php } ?>
										<div style="height: 9px;"></div>
									</div>
								</div>
							</div><!-- /.wrap-imagebox -->
							
						</div><!-- /.main-shop -->
					</div><!-- /.col-lg-9 col-md-8 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</main><!-- /#shop -->
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