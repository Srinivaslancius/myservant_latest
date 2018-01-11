
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-2">
							<div id="logo" class="logo">
								<a href="index.php" title="">
									<img src="images/logos/logo1.png" alt="">
								</a>
							</div><!-- /#logo -->
						</div><!-- /.col-md-3 -->
						<div class="col-md-7">
							<div class="top-search">
								<form action="#" method="get" class="form-search" accept-charset="utf-8">
									<div class="cat-wrap">
										<select name="category">
											<option hidden value="">All Category</option>
											<option hidden value="">Fruits&Vegiatbles </option>
											<option hidden value="">Bread&Dairy </option>
											<option hidden value="">Beverages</option>
										</select>
										<span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
										<div class="all-categories">
											<?php $getCategories1 = "SELECT * FROM grocery_category WHERE lkp_status_id = 0 AND id IN (SELECT grocery_category_id FROM grocery_sub_category WHERE lkp_status_id = 0 AND id IN (SELECT grocery_sub_category_id FROM grocery_products WHERE lkp_status_id = 0)) ";
											$getCategories = $conn->query($getCategories1);
											while($getCategoriesData = $getCategories->fetch_assoc()) { ?>
											<div class="cat-list-search">
												<div class="title">
													<?php echo $getCategoriesData['category_name']; ?>
												</div>
												<ul>
													<?php $getSubCategories = "SELECT * FROM grocery_sub_category WHERE lkp_status_id = 0 AND grocery_category_id ='".$getCategoriesData['id']."' AND id IN (SELECT grocery_sub_category_id FROM grocery_products WHERE lkp_status_id = 0)";
													$getSubCategories1 = $conn->query($getSubCategories);
													while($getSubCategoriesData = $getSubCategories1->fetch_assoc()) { ?>
													<li><?php echo $getSubCategoriesData['sub_category_name']; ?></li>
													<?php } ?>													
												</ul>
											</div><!-- /.cat-list-search -->
											<?php } ?>
										</div><!-- /.all-categories -->
									</div><!-- /.cat-wrap -->
									<div class="box-search">
										<input type="text" name="search" placeholder="Search what you looking for ?">
										<span class="btn-search">
											<button type="submit" class="waves-effect"><img src="images/icons/search.png" alt=""></button>
										</span>
										<div class="search-suggestions">
											<div class="box-suggestions">
												<div class="title">
													Search Suggestions
												</div>
												<ul>
													<li>
														<div class="image">
															<img src="images/product/other/s05.jpg" alt="">
														</div>
														<div class="info-product">
															<div class="name">
																<a href="#" title="">Instant Bru</a>
															</div>
															<div class="price">
																<span class="sale">
																	$50.00
																</span>
																<span class="regular">
																	$2,999.00
																</span>
															</div>
														</div>
													</li>
													<li>
														<div class="image">
															<img src="images/product/other/s06.jpg" alt="">
														</div>
														<div class="info-product">
															<div class="name">
																<a href="#" title="">Instant Bru</a>
															</div>
															<div class="price">
																<span class="sale">
																	$24.00
																</span>
															</div>
														</div>
													</li>
													<li>
														<div class="image">
															<img src="images/product/other/14.jpg" alt="">
														</div>
														<div class="info-product">
															<div class="name">
																<a href="#" title="">Instant Bru</a>
															</div>
															<div class="price">
																<span class="sale">
																	$90.00
																</span>
															</div>
														</div>
													</li>
													<li>
														<div class="image">
															<img src="images/product/other/02.jpg" alt="">
														</div>
														<div class="info-product">
															<div class="name">
																<a href="#" title="">Instant Bru</a>
															</div>
															<div class="price">
																<span class="sale">
																	$50.00
																</span>
															</div>
														</div>
													</li>
													<li>
														<div class="image">
															<img src="images/product/other/l01.jpg" alt="">
														</div>
														<div class="info-product">
															<div class="name">
																<a href="#" title="">Instant Bru</a>
															</div>
															<div class="price">
																<span class="sale">
																	$24.00
																</span>
																<span class="regular">
																	$2,999.00
																</span>
															</div>
														</div>
													</li>
													<li>
														<div class="image">
															<img src="images/product/other/s08.jpg" alt="">
														</div>
														<div class="info-product">
															<div class="name">
																<a href="#" title="">Instant Bru</a>
															</div>
															<div class="price">
																<span class="sale">
																	$90.00
																</span>
																<span class="regular">
																	$2,999.00
																</span>
															</div>
														</div>
													</li>
												</ul>
											</div><!-- /.box-suggestions -->
											<div class="box-cat">
												<div class="cat-list-search">
													<div class="title">
														Categories
													</div>
													<ul>
														<li>
															<a href="#" title="">Instant Bru</a>
														</li>
														<li>
															<a href="#" title="">Instant Bru</a>
														</li>
														<li>
															<a href="#" title="">Instant Bru</a>
														</li>
														<li>
															<a href="#" title="">Instant Bru</a>
														</li>
														<li>
															<a href="#" title="">Instant Bru</a>
														</li>
														<li>
															<a href="#" title="">Instant Bru</a>
														</li>
														<li>
															<a href="#" title="">Instant Bru</a>
														</li>
													</ul>
												</div><!-- /.cat-list-search -->
											</div><!-- /.box-cat -->
										</div><!-- /.search-suggestions -->
									</div><!-- /.box-search -->
								</form><!-- /.form-search -->
							</div><!-- /.top-search -->
						</div><!-- /.col-md-6 -->
						<div class="col-md-3">
							<div class="box-cart">
							
								<div class="inner-box">
									<a href="#" title="">
										<div class="icon-cart">
											<img src="images/icons/cart.png" alt="">
											<span>4</span>
										</div>
										<div class="price">
											₹0.00
										</div>
									</a>
									<div class="dropdown-box">
										<ul>
											<li>
												<div class="img-product">
													<img src="images/product/other/my.jpg" alt="">
												</div>
												<div class="info-product">
													<div class="name">
														Combo Offer
													</div>
													<div class="price">
														<span>1 x</span>
														<span>₹250.00</span>
													</div>
												</div>
												<div class="clearfix"></div>
												<span class="delete">x</span>
											</li>
											<li>
												<div class="img-product">
													<img src="images/product/other/my.jpg" alt="">
												</div>
												<div class="info-product">
													<div class="name">
														Combo Offer
													</div>
													<div class="price">
														<span>1 x</span>
														<span>₹250.00</span>
													</div>
												</div>
												<div class="clearfix"></div>
												<span class="delete">x</span>
											</li>
										</ul>
										<div class="total">
											<span>Subtotal:</span>
											<span class="price">₹1,999.00</span>
										</div>
										<div class="btn-cart">
											<a href="shop_cart.php" class="view-cart" title="">View Cart</a>
											<a href="shop_checkout.php" class="check-out" title="">Checkout</a>
										</div>
									</div>
								</div><!-- /.inner-box -->
							</div><!-- /.box-cart -->
						</div><!-- /.col-md-3 -->
					</div><!-- /.row -->
				</div><!-- /.container -->