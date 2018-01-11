
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 col-2">
							<div id="mega-menu">
								<div class="btn-mega"><span></span>ALL CATEGORIES</div>
								<?php $getCategories1 = "SELECT * FROM grocery_category WHERE lkp_status_id = 0 AND id IN (SELECT grocery_category_id FROM grocery_sub_category WHERE lkp_status_id = 0 AND id IN (SELECT grocery_sub_category_id FROM grocery_products WHERE lkp_status_id = 0))";
								$getCategories = $conn->query($getCategories1); ?>
								<ul class="menu">
									<?php while($getCategoriesData = $getCategories->fetch_assoc()) { ?>
									<li>
										<a href="#" title="" class="dropdown">
											<span class="menu-img">
												<img src="<?php echo $base_url . 'grocery_admin/uploads/grocery_category_web_image/'.$getCategoriesData['category_web_image'] ?>" alt="">
											</span>
											<span class="menu-title">
												<?php echo $getCategoriesData['category_name']; ?>
											</span>
										</a>
										<div class="drop-menu">
											<div class="one-third">
												<?php $getSubCategories = "SELECT * FROM grocery_sub_category WHERE lkp_status_id = 0 AND grocery_category_id ='".$getCategoriesData['id']."' AND id IN (SELECT grocery_sub_category_id FROM grocery_products WHERE lkp_status_id = 0)";
													$getSubCategories1 = $conn->query($getSubCategories); ?>
												<ul>
													<?php while($getSubCategoriesData = $getSubCategories1->fetch_assoc()) { ?>
													<li>
														<a href="sprouts.php" title=""><?php echo $getSubCategoriesData['sub_category_name']; ?></a>
													</li>
													<?php } ?>
												</ul>
											</div>
											<!-- <div class="one-third">
												<ul class="banner">
													<li>
														<div class="banner-text">
															<div class="banner-title">
																Strawberries
															</div>
															<div class="more-link">
																<a href="#" title="">Shop Now <img src="images/icons/right-2.png" alt=""></a>
															</div>
														</div>
														<div class="banner-img">
															<img src="images/product/other/sta.jpg" alt="" style="width:58px;height:62px">
														</div>
														<div class="clearfix"></div>
													</li>
													<li>
														<div class="banner-text">
															<div class="banner-title">
																Strawberries
															</div>
															<div class="more-link">
																<a href="#" title="">Shop Now <img src="images/icons/right-2.png" alt=""></a>
															</div>
														</div>
														<div class="banner-img">
															<img src="images/product/other/sta.jpg" alt="" style="width:58px;height:62px">
														</div>
														<div class="clearfix"></div>
													</li>
													<li>
														<div class="banner-text">
															<div class="banner-title">
																Strawberries
															</div>
															<div class="more-link">
																<a href="#" title="">Shop Now <img src="images/icons/right-2.png" alt=""></a>
															</div>
														</div>
														<div class="banner-img">
															<img src="images/product/other/sta.jpg" alt="" style="width:58px;height:62px">
														</div>
														<div class="clearfix"></div>
													</li>
												</ul>	
											</div> -->
										</div>
									</li>
									<?php } ?>
								</ul>
							</div>
						</div><!-- /.col-md-3 -->
						<div class="col-md-9 col-10">
							<div class="nav-wrap">
								<div id="mainnav" class="mainnav">
									<ul class="menu">
										<li class="column-1">
											<a href="index.php" title="">Home</a>
										
										</li><!-- /.column-1 -->
										<li class="column-1">
											<a href="about.php" title="">About</a>
											
										</li><!-- /.has-mega-menu -->
										<li class="column-1">
											<a href="products.php" title="">Products</a>
											
										</li><!-- /.has-mega-menu -->
										<li class="column-1">
											<a href="newarraivals.php" title="">New Arrivals</a>
											
										</li>
										<li class="column-1">
											<a href="offerzone.php" title="">Offer Zone</a>
											
										</li>
										<li class="column-1">
											<a href="faq.php" title="">faq's</a>
											
										</li><!-- /.column-1 -->
										<li class="column-1">
											<a href="contact.php" title="">Contact</a>
											
										</li><!-- /.column-1 -->
									</ul><!-- /.menu -->
								</div><!-- /.mainnav -->
							</div><!-- /.nav-wrap -->
							<div class="today-deal">
								<a href="#" title="">TODAY DEALS</a>
							</div><!-- /.today-deal -->
							<div class="btn-menu">
	                            <span></span>
	                        </div><!-- //mobile menu button -->
						</div><!-- /.col-md-9 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			