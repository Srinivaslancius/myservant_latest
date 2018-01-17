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

		<?php $getProductImages = getAllDataWhere('grocery_product_bind_images','product_id',$product_id);
		$getCategoryName = getIndividualDetails('grocery_category','id',$productDetails['grocery_category_id']); ?>
		<input type="hidden" id="pro_id" value="<?php echo $product_id; ?>">
		<input type="hidden" id="cat_id" value="<?php echo $productDetails['grocery_category_id']; ?>">
		<input type="hidden" id="sub_cat_id" value="<?php echo $productDetails['grocery_sub_category_id']; ?>">
		<input type="hidden" id="pro_name" value="<?php echo $getProductName['product_name']; ?>">
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
								<h4 class="name"><?php echo $getProductName['product_name']; ?></h4>
								<div class="category">
									<?php echo $getCategoryName['category_name']; ?>
								</div>
								<div class="reviewed">
									<div class="review">
										<div class="queue">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
										</div>
										<div class="text">
											<span>3 Reviews</span>
											<span class="add-review">Add Your Review</span>
										</div>
									</div><!-- /.review -->
									<div class="status-product">
										Availablity <span>In stock</span>
									</div>
								</div><!-- /.reviewed -->
							</div><!-- /.header-detail -->
							<?php 
							 	$getPrices = "SELECT * FROM grocery_product_bind_weight_prices WHERE product_id ='$product_id' AND lkp_status_id = 0 AND lkp_city_id ='1' ";
							 	$allGetPrices = $conn->query($getPrices);
							 	$getPrc1 = $allGetPrices->fetch_assoc();
							 ?>
							<div class="content-detail">
								<div class="price">
									<div class="sale">
										<input type="hidden" id="pro_price" value="<?php echo $getPrc1['selling_price']; ?>">
										<input type="hidden" id="pro_weight_type_id" value="<?php echo $getPrc1['id']; ?>">
										<?php echo 'Rs.' . $getPrc1['selling_price'] . '.00'; ?><span style="text-decoration:line-through;font-size:16px;color:#838383;">(<?php echo 'Rs.' . $getPrc1['mrp_price']; ?>)</span>
									</div>
								</div>
								<div class="info-text">
									<?php echo $productDetails['product_description']; ?>
								</div>
							</div><!-- /.content-detail -->
							<div class="footer-detail">
								<div class="quanlity-box">
									<div class="colors">
										<?php 
									 	$getPrices = "SELECT * FROM grocery_product_bind_weight_prices WHERE product_id ='$product_id' AND lkp_status_id = 0 AND lkp_city_id ='1' ";
									 	$allGetPrices = $conn->query($getPrices);
									 	?>
										<select onchange="get_price(this.value,'na10');">
										<?php while($getPrc = $allGetPrices->fetch_assoc() ) { ?>
	                                      <option value="<?php echo $getPrc['id']; ?>"><?php echo $getPrc['weight_type'] .' - '. 'Rs : ' . $getPrc['selling_price']; ?></option>
	                                    <?php } ?>								  
	                                    </select>
									</div>
									<div class="quanlity">
										<span class="btn-down"></span>
										<input type="number" name="number" value="" min="1" max="100" placeholder="Quanlity">
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
								<div class="social-single">
									<span>SHARE</span>
									<ul class="social-list style2">
										<li>
											<a href="#" title="">
												<i class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="fa fa-instagram" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="fa fa-pinterest" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="fa fa-dribbble" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="fa fa-google" aria-hidden="true"></i>
											</a>
										</li>
									</ul><!-- /.social-list -->
								</div><!-- /.social-single -->
							</div><!-- /.footer-detail -->
						</div><!-- /.product-detail -->

					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-product-detail -->

		<section class="flat-product-content">
			<ul class="product-detail-bar">
				<li class="active">Description</li>
				
				<li>Reviews</li>
			</ul><!-- /.product-detail-bar -->
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="description-text">
							<div class="box-text">
								<h4>Nuqqam Et Massa</h4>
								<p>Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</p>
							</div>
							<div class="box-text wireless">
								<h4>Wireless</h4>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece <br />of classical Latin literature from 45 BC, making it over 2000 years old.</p>
							</div>
							<div class="box-text design">
								<h4>Fresh Design</h4>
								<p>It is a long established fact that a reader will be distracted by the readable content of <br />a page when looking at its layout. The point of using Lorem Ipsum is that it has a <br />more-or-less normal distribution of letters, as opposed to using</p>
							</div>
							<div class="box-text sound">
								<h4>Fabolous Sound</h4>
								<p>There are many variations of passages of Lorem Ipsum available, but the <br />majority have suffered alteration in some form, by injected humour, or <br />randomised words which don't look even slightly believable.</p>
							</div>
						</div><!-- /.description-text -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="description-image">
							<div class="box-image">
								<img src="images/product/single/01.png" alt="">
							</div>
							<div class="box-text">
								<h4>Nuqqam Et Massa</h4>
								<p>Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</p>
							</div>
						</div><!-- /.description-image -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-12">
						<div class="different-color">
							<div class="title">
								Different Colors
							</div>
							<p>
								Sed sodales sed orci<br />molestie
							</p>
						</div><!-- /.different-color -->
					</div><!-- /.col-md-12 -->
					<div class="col-md-6">
						<div class="box-left">
							<div class="img-line">
								<img src="images/product/single/line-1.png" alt="">
							</div>
							<div class="img-product">
								<img src="images/product/single/06.png" alt="">
							</div>
						</div><!-- /.box-left -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="box-right">
							<div class="img-line">
								<img src="images/product/single/line-2.png" alt="">
								<img src="images/product/single/04.png" alt="">
							</div>
							<div class="img-product">
								
							</div>
							<div class="box-text">
								<h4>Nuqqam Et Massa</h4>
								<p>Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</p>
							</div>
						</div><!-- /.box-right -->
					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
				
				<div class="row">
					<div class="col-md-6">
						<div class="rating">
							<div class="title">
								Based on 3 reviews
							</div>
							<div class="score">
								<div class="average-score">
									<p class="numb">4.3</p>
									<p class="text">Average score</p>
								</div>
								<div class="queue">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div><!-- /.score -->
							<ul class="queue-box">
								<li class="five-star">
									<span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</span>
									<span class="numb-star">3</span>
								</li><!-- /.five-star -->
								<li class="four-star">
									<span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</span>
									<span class="numb-star">4</span>
								</li><!-- /.four-star -->
								<li class="three-star">
									<span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</span>
									<span class="numb-star">3</span>
								</li><!-- /.three-star -->
								<li class="two-star">
									<span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</span>
									<span class="numb-star">2</span>
								</li><!-- /.two-star -->
								<li class="one-star">
									<span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</span>
									<span class="numb-star">0</span>
								</li><!-- /.one-star -->
							</ul><!-- /.queue-box -->
						</div><!-- /.rating -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="form-review">
							<div class="title">
								Add a review 
							</div>
							<div class="your-rating queue">
								<span>Your Rating</span>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<form action="#" method="get" accept-charset="utf-8">
								<div class="review-form-name">
									<input type="text" name="name-author" value="" placeholder="Name">
								</div>
								<div class="review-form-email">
									<input type="text" name="email-author" value="" placeholder="Email">
								</div>
								<div class="review-form-comment">
									<textarea name="review-text" placeholder="Your Name"></textarea>
								</div>
								<div class="btn-submit">
									<button type="submit">Add Review</button>
								</div>
							</form>
						</div><!-- /.form-review -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-12">
						<ul class="review-list">
							<li>
								<div class="review-metadata">
									<div class="name">
										Ali Tufan : <span>April 3, 2016</span>
									</div>
									<div class="queue">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
								</div><!-- /.review-metadata -->
								<div class="review-content">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
									</p> 
								</div><!-- /.review-content -->
							</li>
							<li>
								<div class="review-metadata">
									<div class="name">
										Peter Tufan : <span>April 3, 2016</span>
									</div>
									<div class="queue">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
								</div><!-- /.review-metadata -->
								<div class="review-content">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
									</p> 
								</div><!-- /.review-content -->
							</li>
							<li>
								<div class="review-metadata">
									<div class="name">
										Jon Tufan : <span>April 3, 2016</span>
									</div>
									<div class="queue">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
								</div><!-- /.review-metadata -->
								<div class="review-content">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
									</p> 
								</div><!-- /.review-content -->
							</li>
						</ul><!-- /.review-list -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-product-content -->
		
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
		<script type="text/javascript">
			function get_price(product_id) {
				$.ajax({
				  type:'post',
				  url:'get_price.php',
				  data:{
				     product_id:product_id,       
				  },
				  success:function(data) {
				    //alert(data);
				    $('.price').html(data);
				  }
				});
			}
		</script>

	</body>	
</html>