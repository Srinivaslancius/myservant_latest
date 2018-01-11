<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<div class="container-fluid">
					<div class="row">
						<div class="col-md-4">
							<ul class="flat-support">
								<li>
									<a href="faq.php" title="">Support</a>
								</li>
								<li>
									<a href="trackorder.php" title="">Track Your Order</a>
								</li>
								 <li><span class="icon-location" data-toggle="popover" data-placement="bottom" data-content="TOP SEARCHED: <br> Vijayawada, Hyderabad, Karimnagar, Chennai, Warangal, Pune, Bangalore" style="cursor:pointer">Vijayawada <i class="fa fa-angle-down" aria-hidden="true"></i></span></li>
								
								
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
							<!--<li class="locations1">
									<a href="#" title="">Hyderabad<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="unstyled" style="width:250px">
									<center><input type="text" class="form-control"  name="user_full_name"  placeholder="Enter your city"  required style="border-radius:5px;width:200px;height:35px;border:1px solid #ddd"></center>
									<hr>
									<div class="text" style="padding-left:10px;line-height:25px">
									<h4 style="margin-bottom:10px">Top Searched</h4>
									<p>Hyderabad, Kerala, Chennai, tamilnadu, Bagalore, Mysore, Karnataka</p>
									</div>
									</ul>
								</li>-->
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
				<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        html: true,
        template: '<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-body"><div class="form-group"><input type="text" class="form-control1" id="email" placeholder="ENTER YOUR CITY" required></div></div><div class="popover-content"></div><div class="popover-footer"><a href="index.php" class="btn btn-info btn-sm">Submit</a></div></div>'
    });
    
    // Custom jQuery to hide popover on click of the close button
    $(document).on("click", ".popover-footer .btn" , function(){
        $(this).parents(".popover").popover('hide');
    });
});
</script>