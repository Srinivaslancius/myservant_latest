
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 col-2">
							<div id="mega-menu">
								<div class="btn-mega"><span></span>ALL CATEGORIES</div>
								<?php 
								if($_SESSION['city_name'] == '') {
                                    $lkp_city_id = 1;
                                } else {
                                    $getCities1 = getIndividualDetails('grocery_lkp_cities','city_name',$_SESSION['city_name']);
            						$lkp_city_id = $getCities1['id'];
                                }
								$getCategories1 = "SELECT * FROM grocery_category WHERE lkp_status_id = 0 AND id IN (SELECT grocery_category_id FROM grocery_sub_category WHERE lkp_status_id = 0 AND id IN (SELECT grocery_sub_category_id FROM grocery_products WHERE lkp_status_id = 0 AND id in (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = $lkp_city_id))) ORDER BY id DESC";
								$getCategories = $conn->query($getCategories1);
								if($getCategories->num_rows > 0) { ?>
								<ul class="menu">
									<?php while($getCategoriesData = $getCategories->fetch_assoc()) { ?>
									<li>
										<a href="results.php?cat_id=<?php echo $getCategoriesData['id']; ?>" title="" class="dropdown">
											<span class="menu-img">
												<img src="<?php echo $base_url . 'grocery_admin/uploads/grocery_category_web_image/'.$getCategoriesData['category_web_image'] ?>" alt="">
											</span>
											<span class="menu-title">
												<?php echo $getCategoriesData['category_name']; ?>
											</span>
										</a>
										<div class="drop-menu">
											<?php $getSubCategories = "SELECT * FROM grocery_sub_category WHERE lkp_status_id = 0 AND grocery_category_id ='".$getCategoriesData['id']."' AND id IN (SELECT grocery_sub_category_id FROM grocery_products WHERE lkp_status_id = 0 AND id in (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = $lkp_city_id)) ORDER BY id DESC LIMIT 0,6";
											$getSubCategories1 = $conn->query($getSubCategories);
											while($getSubCategoriesData = $getSubCategories1->fetch_assoc()) { 
												?>
											<div class="one-third">
												<div class="cat-title">
													<a href="results.php?sub_cat_id=<?php echo $getSubCategoriesData['id']; ?>"><?php echo $getSubCategoriesData['sub_category_name']; ?></a>
												</div>
												<ul>
													<?php
													$getProducts = "SELECT * FROM grocery_products WHERE lkp_status_id = 0 AND grocery_sub_category_id = '".$getSubCategoriesData['id']."' AND id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = $lkp_city_id)  ORDER BY id DESC LIMIT 0,3";
													$getProducts1 = $conn->query($getProducts);
													while($getProductsData = $getProducts1->fetch_assoc()) { 
													$getProductNames = getIndividualDetails('grocery_product_name_bind_languages','product_id',$getProductsData['id']);
													?>
													<li>
														<a href="single_product.php?product_id=<?php echo $getProductsData['id']; ?>" title=""><?php echo substr($getProductNames['product_name'], 0,35); ?></a>
													</li>
													<?php } ?>
													
												</ul>
												<div class="show">
													<a href="results.php?sub_cat_id=<?php echo $getSubCategoriesData['id']; ?>" title="">Shop All</a>
												</div>
											</div>
											<?php } ?>
										</div>
									</li>
									<?php } ?>
								</ul>
								<?php } else { ?>
								<ul class="menu">
									<li>No Items Found</li>
								</ul>
								<?php } ?>
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
			