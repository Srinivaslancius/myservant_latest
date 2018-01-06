
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include_once 'meta.php';?>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
	<!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i" rel="stylesheet">

	<!-- CSS -->
	<link href="css/base.css" rel="stylesheet">

	<!-- CSS -->
	<!-- SPECIFIC CSS -->
	<link href="css/shop.css" rel="stylesheet">

	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="css/date_time_picker.css" rel="stylesheet">
	<!-- Range slider -->
	<link href="css/ion.rangeSlider.css" rel="stylesheet">
	<link href="css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

	<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

	
	<!-- End Preload -->

<header id="plain">
		<?php include_once './top_header.php';?>
		<!-- End top line-->

		<div class="container">
                    <?php include_once './menu.php';?>
		</div>
		<!-- container -->
                
        </header>
	<!-- Header================================================== -->
	
	<!-- End Header -->

	

	<main>
    <?php
    if($_SESSION['CART_TEMP_RANDOM'] == "") {
        $_SESSION['CART_TEMP_RANDOM'] = rand(10, 10).sha1(crypt(time())).time();
    }
    $session_cart_id = $_SESSION['CART_TEMP_RANDOM'];
    
    if(isset($_SESSION['user_login_session_id']) && $_SESSION['user_login_session_id']!='') {

    	$getCartBySubCat = "SELECT * FROM services_cart WHERE user_id = '$user_session_id' OR session_cart_id='$session_cart_id' ";
	    
    } else {
    	$getCartBySubCat = "SELECT * FROM services_cart WHERE session_cart_id='$session_cart_id' GROUP BY service_sub_category_id ";	    
    }
    $cartSubCat = $conn->query($getCartBySubCat);
	    
?>
            <div class="container-fluid page-title">
				
					<div class="row">
						<img src="img/slides/slide_1.jpg" class="img-responsive" style="width:100%; height:400px;">
					</div>
				
    	</div>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="index.php">Home</a>
					</li>
					<li><a href="#">Cart</a>
					</li>					
				</ul>
			</div>
		</div>
		<!-- End position -->

		<div class="container margin_60">
			<div class="row">
                            <div class="col-md-9">
                           <?php while ($getSubCats = $cartSubCat->fetch_assoc()) { ?>
				<div class="col-md-12 back_white mtop10 padd0">
                                    <div class="col-md-12 padd0">
                                    	<?php $subCatName = getIndividualDetails('services_sub_category','id',$getSubCats['service_sub_category_id']); ?>
                                        <div class="col-md-6"><h4><?php echo $subCatName['sub_category_name']; ?></h4></div>
                                        <div class="col-md-3"><h4>Select Date </h4></div>
                                        <div class="col-md-3"><h4>Select Time </h4></div>
                                    </div>
                                    <div class="col-md-12 padd0">
                                        <div class="col-md-6">
                                            <p>*Select Same date and time for all the same category orders</p>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="date-pick form-control" type="text" name="service_visit_date[]" data-cart-id="<?php echo $getSubCats['id'];?>"  value="<?php echo $service_selected_date1; ?>">
                                        </div>
                                        <div class="col-md-3">
                                            <input class="time-pick form-control cart_update_value" type="text" name="service_visit_time[]" data-cart-id="<?php echo $getSubCats['id'];?>"  value="<?php echo $service_visit_time1; ?>">
                                        </div>
                                    </div>
                                        
					<table class="table table-striped cart-list add_bottom_30">
						<thead>
							<tr>
								<th>
									Particulars
								</th>
								<th>
									Price
								</th>
								<th>
									Date
								</th>
								<th>
									Time
								</th>
								<th>
									Quantity
								</th>
                                <th>
									Total
								</th>
                                <th>
									Remove
								</th>
							</tr>
						</thead>
						<tbody>

							<?php 
								$subCatId = $getSubCats['service_sub_category_id'];

								if(isset($_SESSION['user_login_session_id']) && $_SESSION['user_login_session_id']!='') {
									$getCartItems = "SELECT * FROM services_cart WHERE service_sub_category_id = '$subCatId' AND user_id = '$user_session_id' OR (session_cart_id='$session_cart_id' ) ";
								} else {
									$getCartItems = "SELECT * FROM services_cart WHERE service_sub_category_id = '$subCatId' AND session_cart_id='$session_cart_id'  ";
								}
								
								  $getServicenames = $conn->query($getCartItems); ?>

                            <?php 
								$cartTotal = 0; $service_tax = 0;
                            	while ($getCartItems = $getServicenames->fetch_assoc()) { 
                            ?>
							<tr>
									<?php 
									$getSerName = getIndividualDetails('services_group_service_names','id',$getCartItems["service_id"]); 
									?>                                    
                                    <td><?php echo $getSerName['group_service_name']; ?></td>

			                        <?php if($getSerName['service_price_type_id'] == 1) {
			                             $cartTotal += $getSerName['service_price']*$getCartItems['service_quantity'];
			                         ?>
			                        <td><?php echo $getSerName['service_price']; ?></td>
			                        <?php } elseif($getSerName['price_after_visit_type_id'] == 1) { ?>
			                            <td><?php echo $getSerName['price_after_visiting']; ?></td>
			                        <?php } else { ?>
			                            <td><?php echo $getSerName['service_min_price']; ?> - <?php echo $getSerName['service_max_price']; ?></td>
			                        <?php } ?>

                                    <td><input class="date-pick form-control" type="text" name="service_visit_date[]" value="<?php echo $service_selected_date1; ?>"></td>
                                    <td><input class="time-pick form-control cart_update_value" type="text" name="service_visit_time[]" value="<?php echo $service_visit_time1; ?>"></td>

                                    <td><input type="text" name="service_quantity[]" minlength="1" value="<?php echo $getCartItems['service_quantity'];?>" class="service_quantity valid_mobile_num form-control"></td>

                                    <td>Rs. <?php echo $getCartItems['service_price']*$getCartItems['service_quantity']; ?></td>
									<td class="options">
										<a class="delete_cart_item" data-cart-id ="<?php echo $getCartItems['id']; ?>"><i class=" icon-trash"></i></a>
									</td>
							</tr>

                            <?php } ?>
						
						</tbody>
					</table>
					
					<div class="add_bottom_15"><small>* Prices for person.</small>
					</div>
				</div>
				<!-- End col-md-8 -->
                            <?php } ?>
                            </div>
                                <aside class="col-md-3">
					<div class="box_style_1">
						<h3 class="inner">- Your Order Total -</h3>
						<table class="table table_summary">
							<tbody>
								<tr>
									<td>
										Sub Total
									</td>
									<td class="text-right">
										Rs. <?php echo $cartTotal; ?>
									</td>
								</tr>
								<tr>
									<td>
										GST(<?php echo $getSiteSettingsData['service_tax']; ?>%)
									</td>
									<td class="text-right">
										<?php $service_tax += ($getSiteSettingsData['service_tax']/100)*$cartTotal; ?>
										<?php echo $service_tax; ?>
									</td>
								</tr>
								
								<tr class="total">
									<td>
										Total cost <br/>
										<span style="font-size: 11px;font-weight:normal;text-transform:capitalize">(*Min visiting charges applicable.)</span>
									</td>
									<td class="text-right">
										Rs. <?php echo $cartTotal+$service_tax; ?>
									</td>
								</tr>
							</tbody>
						</table>
						<a class="btn_full" href="#">Proceed To Check out</a>
						<a class="btn_full_outline" href="#"><i class="icon-right"></i> Continue shopping</a>
					</div>
					
				</aside>
				<!-- End aside -->

			</div>
			<!--End row -->
		</div>
		<!--End container -->
	</main>
	<!-- End main -->

	<footer>
            <?php include_once 'footer.php';?>
        </footer>

	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon_set_1_icon-78"></i>
			</button>
		</form>
	</div><!-- End Search Menu -->

	<!-- Jquery -->
	<script data-cfasync="false" src="/cdn-cgi/scripts/af2821b0/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery.timepicker.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.timepicker.css" />
        <script>
		$('input.date-pick').datepicker({minDate: 0, maxDate: "+2M"});
		$('input.time-pick').timepicker({
			'step': 30,
			showInpunts: false
		})
	</script>

	<script>
		if ($('.prod-tabs .tab-btn').length) {
			$('.prod-tabs .tab-btn').on('click', function (e) {
				e.preventDefault();
				var target = $($(this).attr('href'));
				$('.prod-tabs .tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				$('.prod-tabs .tab').fadeOut(0);
				$('.prod-tabs .tab').removeClass('active-tab');
				$(target).fadeIn(500);
				$(target).addClass('active-tab');
			});

		}
	</script>
	<script type="text/javascript">
        $(".delete_cart_item").click(function(){
            var element = $(this);
            var del_id = element.attr("data-cart-id");
            var info = 'cart_id=' + del_id;
            if(confirm('Are You Sure You Want to Delete ?', 'You Want to Delete Cart Item', function(input){var str = input === true ? 'Ok' : 'Cancel'; 
                if(str == 'Ok') {
                    $.ajax({
                       type: "POST",
                       url: "delete_cart_items.php",
                       data: info,
                       success: function(result){
                        if(result == 1) {
                            //alert('Cart Item Deleted Successfully');
                            //setTimeout(function() {
                                location.reload();
                            //}, 600);
                           
                        } else {
                            alert('Cart Item Not Deleted');
                            return false;
                        }
                     }
                    });
                }
            }))  
            return false;
        });
        </script>
        
        <script type="text/javascript">
        
        </script>

</body>

</html>