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
								<a href="#" title="">New Arraivals</a>								
							</li>
							
						</ul><!-- /.breacrumbs -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-breadcrumb -->

		<?php
			$lkp_city_id = 1;
    		$getFilters = "SELECT * FROM grocery_category WHERE lkp_status_id = 0 AND id IN (SELECT grocery_category_id FROM grocery_sub_category WHERE lkp_status_id = 0 AND id IN (SELECT grocery_sub_category_id FROM grocery_products WHERE lkp_status_id = 0 AND id in (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = $lkp_city_id))) ORDER BY id DESC";
    		$getGroFilters = $conn->query($getFilters);
    	?>

		<main id="shop">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-md-4">
						<div class="sidebar ">
							<div class="widget widget-categories">
								<div class="widget-title">
									<h3>Categories<span></span></h3>
								</div>
								<ul class="cat-list style1 widget-content">
									<?php while($filtCat =  $getGroFilters->fetch_assoc() ) { ?>
									<li>
										<span><?php echo $filtCat['category_name']; ?></span>
										<?php $subCat = "SELECT * FROM grocery_sub_category WHERE lkp_status_id = 0 AND grocery_category_id ='".$filtCat['id']."' AND id IN (SELECT grocery_sub_category_id FROM grocery_products WHERE lkp_status_id = 0 AND id in (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = $lkp_city_id)) ORDER BY id DESC "; $getSubs = $conn->query($subCat); ?>
										<ul class="cat-child">
											<?php while($getSubCatName = $getSubs->fetch_assoc() ) { ?>
												<li>
													<a href="javascript:void(0)" title="<?php echo $getSubCatName['sub_category_name']; ?>" onClick="loadFilterProducts(<?php echo $getSubCatName['id']; ?>)"><?php echo $getSubCatName['sub_category_name']; ?></a>
												</li>
											<?php } ?>
										</ul>
									</li>
									<?php } ?>									
								</ul><!-- /.cat-list -->
							</div><!-- /.widget-categories -->
							

							<?php								
				    		$getBrnds = "SELECT * FROM grocery_brands WHERE lkp_status_id = 0 AND id IN (SELECT brand_id FROM grocery_product_bind_brands WHERE product_id IN (SELECT id FROM grocery_products WHERE lkp_status_id = 0 AND id in (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = $lkp_city_id))) ORDER BY id DESC";
				    		$getAllBrands = $conn->query($getBrnds);
					    	?>

							<div class="widget widget-brands">
								<div class="widget-title">
									<h3>Brands<span></span></h3>
								</div>
								<form id="check_filter_form">
									<div class="widget-content">									
										<ul class="box-checkbox scroll">
											<?php while($getAllBrandsNames = $getAllBrands->fetch_assoc() ) { ?>
											<li class="check-box">
												<input type="checkbox" id="checkbox1" name="brands_filt[]" class="brand_filters" value="<?php echo $getAllBrandsNames['id']; ?>">
												<label for="checkbox1"><?php echo $getAllBrandsNames['brand_name']; ?></label>
											</li>	
											<?php } ?>									
										</ul>
									</div>
								</form>
							</div><!-- /.widget widget-brands -->
							
							
							
						</div><!-- /.sidebar -->
					</div><!-- /.col-lg-3 col-md-4 -->
<!-- /.col-lg-3 col-md-4 -->
					<div class="col-lg-9 col-md-8">
						<div class="main-shop">
							<div class="slider owl-carousel-16">
								<?php $getBanners = "SELECT * FROM grocery_banners WHERE lkp_status_id = 0";
								$getBannersData = $conn->query($getBanners); ?>
								<?php while($getBannersData1 = $getBannersData->fetch_assoc()) { ?>
								<div class="slider-item style9">
									<div class="item-image">
										<img src="<?php echo $base_url . 'grocery_admin/uploads/grocery_banner_web_image/'.$getBannersData1['web_image'] ?>" alt="">
									</div>
									<div class="clearfix"></div>
								</div><!-- /.slider-item style9 -->
								<?php } ?>
								
							</div><!-- /.slider -->
							<div class="wrap-imagebox">
								<div class="flat-row-title">
									<h3>Offer products</h3>
									
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
												<option value="">Sort by popularity</option>
												<option value="">Sort by popularity</option>
												<option value="">Sort by popularity</option>
											</select>
										</div>										
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="tab-product">
									<div class="row sort-box" id="all_rows">
									<?php 
									if($_SESSION['city_name'] == '') {
	                                    $lkp_city_id = 1;
	                                } else {
	                                    $getCities1 = getIndividualDetails('grocery_lkp_cities','city_name',$_SESSION['city_name']);
	            						$lkp_city_id = $getCities1['id'];
	                                }
									$getProducts = "SELECT * FROM grocery_products WHERE lkp_status_id = 0 AND id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = $lkp_city_id)  ORDER BY id DESC LIMIT 0,10";
										$getProducts1 = $conn->query($getProducts);
									while($getProductsData = $getProducts1->fetch_assoc()) {
									$getProductNames = getIndividualDetails('grocery_product_name_bind_languages','product_id',$getProductsData['id']);
									$getProductImages = getIndividualDetails('grocery_product_bind_images','product_id',$getProductsData['id']);
									?>
									<input type="hidden" id="row_no" value="10">
										<div class="col-lg-4 col-md-4 col-sm-6" >
											<div class="product-box">
												<div class="imagebox">
												
														<a href="single_product.php?product_id=<?php echo $getProductsData['id'];?>" title="">
															<img src="<?php echo $base_url . 'grocery_admin/uploads/product_images/'.$getProductImages['image'] ?>" alt="" style="width:264px; height:210px">
														</a>
														
													<div class="box-content">
														<!--<div class="cat-name">
															<a href="#" title="">Monthly Saving Pack 4</a>
														</div>-->
														<div class="product-name">
															<a href="single_product.php?product_id=<?php echo $getProductsData['id'];?>" title=""><?php echo $getProductNames['product_name']; ?></a>
														</div>
														<div class="product_name">
														<?php 
														$getPrices = "SELECT * FROM grocery_product_bind_weight_prices WHERE product_id ='".$getProductsData['id']."' AND lkp_status_id = 0 AND lkp_city_id ='$lkp_city_id' ";
							 							$getProductPrices = $conn->query($getPrices);
														?>
														<select class="s-w form-control" id="na1q_qty0" onchange="get_price(this.value,'na10');">
                                                            <?php while($getPricesDetails = $getProductPrices->fetch_assoc()) { ?>
                                                            <option value="6180"><?php echo $getPricesDetails['weight_type']; ?> - Rs.<?php echo $getPricesDetails['selling_price']; ?> </option>
                                                            <?php } ?>
                                                          </select>
														</div>
															<!--<select class="form-control" id="sel1" style="height:40px; font-size:13px; width:100px">
															<option>combo pack-Rs.2999.00</option>
														  </select>-->
													<!--	<div class="price">
															<span class="sale">$2,009.00</span>
															
														</div>-->
													</div><!-- /.box-content -->

													<?php $getPrices1 = "SELECT * FROM grocery_product_bind_weight_prices WHERE product_id ='".$getProductsData['id']."' AND lkp_status_id = 0 AND lkp_city_id ='$lkp_city_id' ";
							 							$getProductPrices1 = $conn->query($getPrices1);
							 							$getPricesDetails1 = $getProductPrices1->fetch_assoc();
							 						?>

													<input type="hidden" id="cat_id_<?php echo $getProductsData['id']; ?>" value="<?php echo $getProductsData['grocery_category_id']; ?>">
													<input type="hidden" id="sub_cat_id_<?php echo $getProductsData['id']; ?>" value="<?php echo $getProductsData['grocery_sub_category_id']; ?>">
													<input type="hidden" id="pro_name_<?php echo $getProductsData['id']; ?>" value="<?php echo $getProductNames['product_name']; ?>">
													<input type="hidden" id="pro_price_<?php echo $getProductsData['id']; ?>" value="<?php echo $getPricesDetails1['selling_price']; ?>">
													<input type="hidden" id="pro_weight_type_id_<?php echo $getProductsData['id']; ?>" value="<?php echo $getPricesDetails1['id']; ?>">
													<div class="box-bottom">
														<div class="btn-add-cart">
															<a href="#" title="" onClick="show_cart(<?php echo $getProductsData['id']; ?>)">
																<img src="images/icons/add-cart.png" alt="">Add to Cart
															</a>
														</div>
														
													</div><!-- /.box-bottom -->
												</div><!-- /.imagebox -->
											</div>
										</div><!-- /.col-lg-4 col-sm-6 -->
										<?php } ?>
									</div>
									<div class="sort-box" id="all_rows_grid">
									<?php 
									$getProducts1 = "SELECT * FROM grocery_products WHERE lkp_status_id = 0 AND id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = $lkp_city_id)  ORDER BY id DESC LIMIT 0,10";
										$getProducts11 = $conn->query($getProducts1);
									while($getProductsData1 = $getProducts11->fetch_assoc()) {
									$getProductNames1 = getIndividualDetails('grocery_product_name_bind_languages','product_id',$getProductsData1['id']);
									$getProductImages1 = getIndividualDetails('grocery_product_bind_images','product_id',$getProductsData1['id']); ?>
										<div class="product-box style3">
											<div class="imagebox style1 v3">
												<div class="box-image">
													<a href="single_product.php?product_id=<?php echo $getProductsData1['id'];?>" title="">
														<img src="<?php echo $base_url . 'grocery_admin/uploads/product_images/'.$getProductImages1['image'] ?>" alt="" style="width:264px; height:210px">
													</a>
												</div><!-- /.box-image -->
												<div class="box-content">
													<div class="product-name">
														<a href="single_product.php?product_id=<?php echo $getProductsData1['id'];?>" title=""><?php echo $getProductNames1['product_name']; ?></a>
													</div>
													<div class="status">
														Availablity: In stock
													</div>
													<div class="info">
														<p>
															<?php echo $getProductNames1['product_description']; ?>
														</p>
													</div>
												</div><!-- /.box-content -->
												<?php $productPrice = "SELECT * FROM grocery_product_bind_weight_prices WHERE product_id ='".$getProductsData1['id']."' AND lkp_status_id = 0 AND lkp_city_id ='$lkp_city_id' ";
						 							$productPrice1 = $conn->query($productPrice);
						 							$productPrice2 = $productPrice1->fetch_assoc();
						 						?>
												<input type="hidden" id="cat_id1_<?php echo $getProductsData1['id']; ?>" value="<?php echo $getProductsData1['grocery_category_id']; ?>">
												<input type="hidden" id="sub_cat_id1_<?php echo $getProductsData1['id']; ?>" value="<?php echo $getProductsData1['grocery_sub_category_id']; ?>">
												<input type="hidden" id="pro_name1_<?php echo $getProductsData1['id']; ?>" value="<?php echo $getProductNames1['product_name']; ?>">
												<input type="hidden" id="pro_price1_<?php echo $getProductsData1['id']; ?>" value="<?php echo $productPrice2['selling_price']; ?>">
												<input type="hidden" id="pro_weight_type_id1_<?php echo $getProductsData1['id']; ?>" value="<?php echo $productPrice2['id']; ?>">

												<div class="box-price">
													<div class="product_name">
														<?php 
														$getPrices2 = "SELECT * FROM grocery_product_bind_weight_prices WHERE product_id ='".$getProductsData1['id']."' AND lkp_status_id = 0 AND lkp_city_id ='$lkp_city_id' ";
							 							$getProductPrices2 = $conn->query($getPrices2);
														?>
														<select class="s-w form-control" id="na1q_qty0" onchange="get_price1(this.value,'na10');">
                                                            <?php while($getPricesDetails2 = $getProductPrices2->fetch_assoc()) { ?>
                                                            <option value="6180"><?php echo $getPricesDetails2['weight_type']; ?> - Rs.<?php echo $getPricesDetails2['selling_price']; ?> </option>
                                                            <?php } ?>
                                                          </select>
														</div>
													<div class="btn-add-cart">
														<a href="#" title="" onClick="show_cart1(<?php echo $getProductsData1['id']; ?>)">
															<img src="images/icons/add-cart.png" alt="">Add to Cart
														</a>
													</div>
													<div class="compare-wishlist">
														<a href="#" class="wishlist" title="">
															<img src="images/icons/wishlist.png" alt="">Wishlist
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
		<script type="text/javascript">

			function show_cart(ProductId) {
				var catId = $('#cat_id_'+ProductId).val();
				var subCatId = $('#sub_cat_id_'+ProductId).val();
				var productName = $('#pro_name_'+ProductId).val();
				var productPrice = $('#pro_price_'+ProductId).val();
				var productWeightType = $('#pro_weight_type_id_'+ProductId).val();
				var product_quantity = 1;

	   			$.ajax({
			      type:'post',
			      url:'save_cart.php',
			      data:{		        
			        productId:ProductId,catId:catId,subCatId:subCatId,product_name:productName,productPrice:productPrice,productWeightType:productWeightType,product_quantity:product_quantity,
			      },
			      success:function(response) {
			      	window.location.href = "shop_cart.php";
			      }
			    });
			}

			function show_cart1(productId) {
				var catId = $('#cat_id1_'+productId).val();
				var subCatId = $('#sub_cat_id1_'+productId).val();
				var productName = $('#pro_name1_'+productId).val();
				var productPrice = $('#pro_price1_'+productId).val();
				var productWeightType = $('#pro_weight_type_id1_'+productId).val();
				var product_quantity = 1;
	   			$.ajax({
			      type:'post',
			      url:'save_cart.php',
			      data:{		        
			        productId:productId,catId:catId,subCatId:subCatId,product_name:productName,productPrice:productPrice,productWeightType:productWeightType,product_quantity:product_quantity,
			      },
			      success:function(response) {
			      	window.location.href = "shop_cart.php";
			      }
			    });
			}
		</script>
		<script type="text/javascript">
		    $(window).scroll(function ()
		    {
			  if($(document).height() <= $(window).scrollTop() + $(window).height())
			  {
				loadmore();
			  }
		    });

		    function loadmore()
		    {
		      var val = document.getElementById("row_no").value;
		      $.ajax({
		      type: 'post',
		      url: 'total_products.php',
		      data: {
		       getresult:val
		      },
		      success: function (response) {
			  var content = document.getElementById("all_rows");
		      content.innerHTML = content.innerHTML+response;

		      // We increase the value by 10 because we limit the results by 10
		      document.getElementById("row_no").value = Number(val)+10;
		      }
		      });
		    }
		    $(window).scroll(function ()
		    {
			  if($(document).height() <= $(window).scrollTop() + $(window).height())
			  {
				loadmore1();
			  }
		    });

		    function loadmore1()
		    {
		      var val = document.getElementById("row_no").value;
		      $.ajax({
		      type: 'post',
		      url: 'total_products_grid.php',
		      data: {
		       getresult:val
		      },
		      success: function (response) {
			  var content = document.getElementById("all_rows_grid");
		      content.innerHTML = content.innerHTML+response;

		      // We increase the value by 10 because we limit the results by 10
		      document.getElementById("row_no").value = Number(val)+10;
		      }
		      });
		    }
		</script>
		<script type="text/javascript">
			function get_price(product_id) {
				alert();
				$.ajax({
				  type:'post',
				  url:'get_price.php',
				  data:{
				     product_id:product_id,       
				  },
				  success:function(data) {
				    //alert(data);
				    $('#pro_price_').val($('#pro_price').val());
				    $('#pro_weight_type_id_').val($('#pro_weight_type_id').val());
				  }
				});
			}
		</script>

	<script type="text/javascript">
	function loadFilterProducts(subCatId) {
	
		$.ajax({
	      type: 'post',
	      url: 'load_filter_products.php',
	      data: {
	       subCatId:subCatId,
	      },
	      success: function (response) {
	      //alert(response);
	      $('#all_rows').html(response);		  
	      }
		});

		$.ajax({
	      type: 'post',
	      url: 'load_filter_products_grid.php',
	      data: {
	       subCatId:subCatId,
	      },
	      success: function (response) {
	      //alert(response);
	      $('#all_rows_grid').html(response);		  
	      }
		});
	}
	
	$(document).on('change','.brand_filters',function(){

	   $.ajax({
	      type: 'post',
	      url: 'load_brands_products.php',
	      data: $("#check_filter_form").serialize(),
	      success: function (response) {
	      //alert(response);
	      $('#all_rows').html(response);		  
	      }
		});

		$.ajax({
	      type: 'post',
	      url: 'load_brands_products_grid.php',
	      data: $("#check_filter_form").serialize(),
	      success: function (response) {
	      //alert(response);
	      $('#all_rows_grid').html(response);		  
	      }
		});	   

	});
	</script>

</body>	
</html>