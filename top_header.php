
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4">
							<ul class="flat-support">
								<li>
									<a href="faq.php" title="">Support</a>
								</li>
								<li>
									<a href="#" title="">Store Locator</a>
								</li>
								<li>
									<a href="trackorder.php" title="">Track Your Order</a>
								</li>
							</ul><!-- /.flat-support -->
						</div><!-- /.col-md-4 -->
						<div class="col-md-4">
							<ul class="flat-infomation">
								<li class="phone">
									Call Us: <a href="#" title="">+918897725019</a>
								</li>
							</ul><!-- /.flat-infomation -->
						</div><!-- /.col-md-4 -->
						<div class="col-md-4">
							<ul class="flat-unstyled">
								<li class="account">
									<a href="#" title="">My Account<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="unstyled">
										<li>
											<a href="login.php" title="">Login</a>
										</li>
										
										<li>
											<a href="shop_cart.php" title="">My Cart</a>
										</li>
										<li>
											<a href="myaccount.php" title="">My Account</a>
										</li>
										<li>
											<a href="shop_checkout.php" title="">Checkout</a>
										</li>
									</ul><!-- /.unstyled -->
								</li>
								<li>
									<?php $language_name = "SELECT * FROM grocery_languages WHERE lkp_status_id = 0";
									$language_name1 = $conn->query($language_name);
									$language = $language_name1->fetch_assoc() ?>
									<a href="#" title=""><?php echo $language['language_name']; ?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="unstyled">
										<?php $getLanguages1 = "SELECT * FROM grocery_languages WHERE lkp_status_id = 0";
										$getLanguages = $conn->query($getLanguages1); ?>
										<?php while($getLanguagesData = $getLanguages->fetch_assoc()) { ?>
										<li>
											<a href="#" title=""><?php echo $getLanguagesData['language_name']; ?></a>
										</li>
										<?php } ?>
									</ul><!-- /.unstyled -->
								</li>
							</ul><!-- /.flat-unstyled -->
						</div><!-- /.col-md-4 -->
					</div><!-- /.row -->
				</div><!-- /.container -->