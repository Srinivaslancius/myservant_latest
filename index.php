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
									<div class="sale-off">
										60 % <span>sale</span>
									</div>
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

	

		<section class="flat-imagebox">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="product-tab style3">
							<ul class="tab-list">
								<?php $getTags = "SELECT * FROM grocery_tags WHERE lkp_status_id = 0";
								$getTags = $conn->query($getTags); ?>
								<?php while($getTags1 = $getTags->fetch_assoc()) { ?>
								<li class="<?php if($getTags1['id'] == 1) { echo 'active'; } ?>"><?php echo $getTags1['tag_name'];?></li>
								<?php } ?>
							</ul>
						</div><!-- /.product-tab -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
				<div class="box-product">
					<div class="row">
					<?php for($i=0; $i<6; $i++) {?>
						<div class="col-xl-2 col-md-4 col-sm-6">
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
									<!--	<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>-->
										<div class="price">
											<span class="sale"> ₹200.00</span>
											<span class="regular"> ₹250.00</span>
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
									<!--	<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>-->
										<div class="price">
											<span class="sale"> ₹200.00</span>
											<span class="regular"> ₹250.00</span>
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
						</div><!-- /.col-lg-3 col-sm-6 -->
						<?php } ?>
					</div><!-- /.row -->
					<div class="row">
					<?php for($i=0; $i<4; $i++) {?>
					<div class="col-lg-3 col-sm-6">
							<div class="product-box">
								<div class="imagebox">
									<span class="item-new">NEW</span>
									 
											<a href="single_product.php" title="">
												<img src="images/product/other/1.png" alt="">
											</a>
										
										
									</ul><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="single_product.php" title="">Brue Instant</a>
										</div>
									<!--	<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>-->
										<div class="price">
											<span class="sale"> ₹200.00</span>
											<span class="regular"> ₹250.00</span>
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
									<!--	<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>-->
										<div class="price">
											<span class="sale"> ₹200.00</span>
											<span class="regular"> ₹250.00</span>
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
						</div><!-- /.col-lg-3 col-sm-6 -->
                          <?php } ?>
					</div><!-- /.row -->
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
									<!--	<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>-->
										<div class="price">
											<span class="sale"> ₹200.00</span>
											<span class="regular"> ₹250.00</span>
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
									<!--	<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>-->
										<div class="price">
											<span class="sale"> ₹200.00</span>
											<span class="regular"> ₹250.00</span>
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
						</div><!-- /.col-lg-3 col-sm-6 -->
						  <?php } ?>
					</div><!-- /.row -->
				</div><!-- /.box-product -->
			</div><!-- /.container -->
		</section><!-- /.flat-imagebox -->

		<section class="flat-imagebox style6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="product-wrap style1">
							<div class="product-tab style1 v2">
								<ul class="tab-list">
									<li class="active">Fruits&Vegitables </li>
									<li>Bread&Dairy </li>
									<li>Bevarages</li>
									<li>Personal Care</li>
									<li>Household</li>
									<li>Eggs, Meat&Fish </li>
								</ul><!-- /.tab-list -->
							</div><!-- /.product-tab style1 -->
							<div class="tab-item">
								<div class="row">	
										<div class="box-6">
											<div class="product-box line style1">
												<div class="imagebox style2">
													<div class="box-image">
														<a href="#" title="">
															<img src="images/product/other/l02.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Laptops</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Beats Snarkitecture<br />Headphones</a>
														</div>
														<div class="price">
															<span class="sale">$1,250.00</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox style2 -->
											</div><!-- /.product-box line style1 -->
											<div class="product-box line style1">
												<div class="imagebox style2">
													<div class="box-image">
														<a href="#" title="">
															<img src="images/product/other/l04.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Cameras</a>
														</div>
														<div class="product-name">
															<a href="#" title="">HTC One M8</a>
														</div>
														<div class="price">
															<span class="sale">$2,009.00</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox style2 -->
											</div><!-- /.product-box line style1 -->
										</div><!-- /.box-6 -->
										<div class="box-6">	
											<div class="product-box line style1">
												<div class="imagebox style2">
													<div class="box-image">
														<a href="#" title="">
															<img src="images/product/other/l07.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Laptops</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Beats Snarkitecture<br />Headphones</a>
														</div>
														<div class="price">
															<span class="sale">$1,250.00</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox style2 -->
											</div><!-- /.product-box line style1 -->
											<div class="product-box line style1">
												<div class="imagebox style2">
													<div class="box-image">
														<a href="#" title="">
															<img src="images/product/other/03.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Cameras</a>
														</div>
														<div class="product-name">
															<a href="#" title="">HTC One M8</a>
														</div>
														<div class="price">
															<span class="sale">$2,009.00</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox style2 -->
											</div><!-- /.product-box line style1 -->
										</div><!-- /.box-6 -->
										<div class="box-6 big">	
											<div class="product-box">
												<div class="imagebox style2">
													<div class="box-image">
														<a href="#" title="">
															<img src="images/product/other/l08.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Headphones</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Beats Solo<br />HD</a>
														</div>
														<div class="price">
															<span class="sale">$1,999.00</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														
													</div><!-- /.box-bottom -->
													<div class="clearfix"></div>
												</div><!-- /.imagebox style2 -->
											</div><!-- /.product-box -->
										</div><!-- /.box-6 big -->
										<div class="box-6">	
											<div class="product-box line style1">
												<div class="imagebox style2">
													<div class="box-image">
														<a href="#" title="">
															<img src="images/product/other/20.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Laptops</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Beats Snarkitecture<br />Headphones</a>
														</div>
														<div class="price">
															<span class="sale">$1,250.00</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox style2 -->
											</div><!-- /.product-box line style1 -->
											<div class="product-box line style1">
												<div class="imagebox style2">
													<div class="box-image">
														<a href="#" title="">
															<img src="images/product/other/l05.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Computers</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Apple macbook pro Z0SC4824<br />Retina</a>
														</div>
														<div class="price">
															<span class="sale">$5,759.68</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox style2 -->
											</div><!-- /.product-box line style1 -->
										</div><!-- /.box-6 -->
										<div class="box-6">	
											<div class="product-box line style1">
												<div class="imagebox style2">
													<div class="box-image">
														<a href="#" title="">
															<img src="images/product/other/l07.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Laptops</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Beats Snarkitecture<br />Headphones</a>
														</div>
														<div class="price">
															<span class="sale">$1,250.00</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
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
												</div><!-- /.imagebox style2 -->
											</div><!-- /.product-box line style1 -->
											<div class="product-box line style1">
												<div class="imagebox style2">
													<div class="box-image">
														<a href="#" title="">
															<img src="images/product/other/14.jpg" alt="">
														</a>
													</div><!-- /.box-image -->
													<div class="box-content">
														<div class="cat-name">
															<a href="#" title="">Computers</a>
														</div>
														<div class="product-name">
															<a href="#" title="">Apple macbook pro Z0SC4824<br />Retina</a>
														</div>
														<div class="price">
															<span class="sale">$5,759.68</span>
															<span class="regular">$2,999.00</span>
														</div>
													</div><!-- /.box-content -->
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="">
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
												</div><!-- /.imagebox style2 -->
											</div><!-- /.product-box line style1 -->
										</div><!-- /.box-6 -->
									</div><!-- /.row -->

								
							
							</div><!-- /.tab-item -->
						</div><!-- /.product-wrap -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-imagebox style2 -->
<div class="divider20"></div>

		<section class="flat-imagebox">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="owl-carousel-2 style2">
								<div class="box-counter style1">
									<div class="counter">
										<span class="special">Special Offer</span>
										<div class="counter-content">
											<p>There are many variations of passages of Lorem Ipsum available, but the majorited have suffered alteration.</p>
											<div class="count-down style2">
												<div class="square">
													<div class="numb">
														14
													</div>
													<div class="text">
														DAYS
													</div>
												</div>
												<div class="square">
													<div class="numb">
														09
													</div>
													<div class="text">
														HOURS
													</div>
												</div>
												<div class="square">
													<div class="numb">
														48
													</div>
													<div class="text">
														MINS
													</div>
												</div>
												<div class="square">
													<div class="numb">
														23
													</div>
													<div class="text">
														SECS
													</div>
												</div>
											</div><!-- /.count-down style2 -->
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
													<a href="#" title="">27-inch iMac with Retina 5K display</a>
												</div>
												<ul class="product-info">
													<li>3.3GHz quad-core Intel Core i5 processor</li>
													<li>Turbo Boost up to 3.9GHz</li>
													<li>8GB (two 4GB) memory, configurable up to 32GB</li>
													<li>2TB Fusion Drive1</li>
													<li>AMD Radeon R9 M395 with 2GB video memory</li>
													<li>Retina 5K 5120-by-2880 P3 display</li>
												</ul>
												<div class="price">
													<span class="sale">$2,299.00</span>
													<span class="regular">$2,999.00</span>
												</div>
											</div><!-- /.box-content -->
											<div class="box-bottom">
												<div class="btn-add-cart">
													<a href="#" title="">
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
								<div class="box-counter style1">
									<div class="counter">
										<span class="special">Special Offer</span>
										<div class="counter-content">
											<p>There are many variations of passages of Lorem Ipsum available, but the majorited have suffered alteration.</p>
											<div class="count-down style2">
												<div class="square">
													<div class="numb">
														14
													</div>
													<div class="text">
														DAYS
													</div>
												</div>
												<div class="square">
													<div class="numb">
														09
													</div>
													<div class="text">
														HOURS
													</div>
												</div>
												<div class="square">
													<div class="numb">
														48
													</div>
													<div class="text">
														MINS
													</div>
												</div>
												<div class="square">
													<div class="numb">
														23
													</div>
													<div class="text">
														SECS
													</div>
												</div>
											</div><!-- /.count-down -->
										</div><!-- /.counter-content -->
									</div><!-- /.counter -->
									<div class="product-item">
										<div class="imagebox style3 v1">
											<div class="box-image save">
												<a href="#" title="">
													<img src="images/product/other/l06.jpg" alt="">
												</a>
												<span>Save $105.00</span>
											</div><!-- /.box-image -->
											<div class="box-content">
												<div class="product-name">
													<a href="#" title="">27-inch iMac with Retina 5K display</a>
												</div>
												<ul class="product-info">
													<li>3.3GHz quad-core Intel Core i5 processor</li>
													<li>Turbo Boost up to 3.9GHz</li>
													<li>8GB (two 4GB) memory, configurable up to 32GB</li>
													<li>2TB Fusion Drive1</li>
													<li>AMD Radeon R9 M395 with 2GB video memory</li>
													<li>Retina 5K 5120-by-2880 P3 display</li>
												</ul>
												<div class="price">
													<span class="sale">$5,599.00</span>
													<span class="regular">$2,999.00</span>
												</div>
											</div><!-- /.box-content -->
											<div class="box-bottom">
												<div class="btn-add-cart">
													<a href="#" title="">
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
							</div><!-- /.owl-carousel-2 -->
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section><!-- /.flat-imagebox -->

                <section class="flat-imagebox style6">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="flat-row-title">
								<h3>Best Sellers</h3>
							</div>
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
					<div class="row">
						<div class="owl-carousel-19">
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s01.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s04.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s02.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Cameras</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s05.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Cameras</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Playstation Game<br />Console</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s03.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Headphones</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPhone 7<br />32 GB</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s06.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Headphones</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/10.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Cameras</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s05.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s03.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s06.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s01.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s04.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s02.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s05.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s03.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s06.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s02.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s05.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s03.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s06.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s01.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s04.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s02.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s05.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s03.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s06.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s02.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s05.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s03.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s06.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s01.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s04.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s02.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								<div class="divider60"></div>
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s05.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s03.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s06.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s01.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s04.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s02.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Cameras</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s05.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Cameras</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Playstation Game<br />Console</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s03.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Headphones</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPhone 7<br />32 GB</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s06.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Headphones</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
							<div class="owl-carousel-item">
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/15.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Cameras</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
								
								<div class="product-box style1 v1">
									<div class="imagebox style1">
										<div class="box-image">
											<a href="#" title="">
												<img src="images/product/other/s05.jpg" alt="">
											</a>
										</div><!-- /.box-image -->
										<div class="box-content">
											<div class="cat-name">
												<a href="#" title="">Laptops</a>
											</div>
											<div class="product-name">
												<a href="#" title="">Apple iPad Mini<br />G2356</a>
											</div>
											<div class="price">
												<span class="regular">$2,999.00</span>
												<span class="sale">$1,250.00</span>
											</div>
										</div><!-- /.box-content -->
										<div class="box-bottom">
											<div class="compare-wishlist">
												<a href="#" class="compare" title="">
													<img src="images/icons/compare.png" alt="">Compare
												</a>
												<a href="#" class="wishlist" title="">
													<img src="images/icons/wishlist.png" alt="">Wishlist
												</a>
											</div>
											<div class="btn-add-cart">
												<a href="#" title="">
													<img src="images/icons/add-cart.png" alt="">Add to Cart
												</a>
											</div>
										</div><!-- /.box-bottom -->
									</div><!-- /.imagebox style1 -->
								</div><!-- /.product-box style1 v1 -->
							</div><!-- /.owl-carousel-item -->
						</div><!-- /.col-md-12 owl-carousel-10 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section><!-- /.flat-imagebox style1 -->
		<section class="flat-imagebox style7">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="flat-row-title">
								<h3>Recent Products</h3>
							</div>
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
					<div class="row">
						<div class="wrap-most-view">
							<div class="owl-carousel-6">
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/09.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$50.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/10.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$600.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/11.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
										</div>
										<div class="price">
											<span class="sale">$1,023.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/12.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$1,489.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/13.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
										</div>
										<div class="price">
											<span class="sale">$1,749.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/11.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
										</div>
										<div class="price">
											<span class="sale">$1,023.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/12.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$1,489.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/11.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
										</div>
										<div class="price">
											<span class="sale">$1,023.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/12.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$1,489.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/13.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
										</div>
										<div class="price">
											<span class="sale">$1,749.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/09.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$50.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/10.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$600.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/11.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
										</div>
										<div class="price">
											<span class="sale">$1,023.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/12.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$1,489.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/13.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
										</div>
										<div class="price">
											<span class="sale">$1,749.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/09.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$50.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/10.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$600.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/11.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
										</div>
										<div class="price">
											<span class="sale">$1,023.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/12.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$1,489.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/13.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
										</div>
										<div class="price">
											<span class="sale">$1,749.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/09.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$50.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/10.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$600.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/11.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
										</div>
										<div class="price">
											<span class="sale">$1,023.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/12.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$1,489.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/13.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
										</div>
										<div class="price">
											<span class="sale">$1,749.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/09.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$50.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/10.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$600.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/11.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
										</div>
										<div class="price">
											<span class="sale">$1,023.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/12.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$1,489.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/13.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
										</div>
										<div class="price">
											<span class="sale">$1,749.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/09.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$50.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/10.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$600.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/11.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
										</div>
										<div class="price">
											<span class="sale">$1,023.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/12.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$1,489.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/09.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$50.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/10.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$600.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/11.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
										</div>
										<div class="price">
											<span class="sale">$1,023.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
								<div class="imagebox style4">
									<div class="box-image">
										<a href="#" title="">
											<img src="images/product/other/12.jpg" alt="">
										</a>
									</div><!-- /.box-image -->
									<div class="box-content">
										<div class="cat-name">
											<a href="#" title="">Laptops</a>
										</div>
										<div class="product-name">
											<a href="#" title="">Apple iPad Mini<br />G2356</a>
										</div>
										<div class="price">
											<span class="sale">$1,489.00</span>
											<span class="regular">$2,999.00</span>
										</div>
									</div><!-- /.box-content -->
								</div><!-- /.imagebox style4 -->
							</div><!-- /.owl-carousel-3 -->
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section><!-- /.flat-imagebox style4 -->



		<section class="flat-iconbox">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="iconbox">
							<div class="box-header">
								<div class="image">
									<img src="images/icons/car.png" alt="">
								</div>
								<div class="box-title">
									<h3>Free Shipping</h3>
								</div>
							</div><!-- /.box-header -->
							<div class="box-content">
								<p>Free Shipping On Order Over ₹500</p>
							</div><!-- /.box-content -->
						</div><!-- /.iconbox -->
					</div><!-- /.col-md-3 col-sm-6 -->
					<div class="col-md-3 col-sm-6">
						<div class="iconbox">
							<div class="box-header">
								<div class="image">
									<img src="images/icons/order.png" alt="">
								</div>
								<div class="box-title">
									<h3>Order Online Service</h3>
								</div>
							</div><!-- /.box-header -->
							<div class="box-content">
								<p>Free return products in 30 days</p>
							</div><!-- /.box-content -->
						</div><!-- /.iconbox -->
					</div><!-- /.col-md-3 col-sm-6 -->
					<div class="col-md-3 col-sm-6">
						<div class="iconbox">
							<div class="box-header">
								<div class="image">
									<img src="images/icons/payment.png" alt="">
								</div>
								<div class="box-title">
									<h3>Payment</h3>
								</div>
							</div><!-- /.box-header -->
							<div class="box-content">
								<p>Secure System</p>
							</div><!-- /.box-content -->
						</div><!-- /.iconbox -->
					</div><!-- /.col-md-3 col-sm-6 -->
					<div class="col-md-3 col-sm-6">
						<div class="iconbox">
							<div class="box-header">
								<div class="image">
									<img src="images/icons/return.png" alt="">
								</div>
								<div class="box-title">
									<h3>Return 30 Days</h3>
								</div>
							</div><!-- /.box-header -->
							<div class="box-content">
								<p>Free return products in 30 days</p>
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
		<script type="text/javascript" src="javascript/jquery.countdown.js"></script>

		<script type="text/javascript" src="javascript/main.js"></script>

</body>	
</html>