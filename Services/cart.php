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
    	$user_session_id = $_SESSION['user_login_session_id'];
    	$getCartBySubCat = "SELECT * FROM services_cart WHERE user_id = '$user_session_id' GROUP BY service_sub_category_id";
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
		<?php if($cartSubCat->num_rows > 0) { ?>
		<form method="POST" action="update_new_cart.php">
		<div class="container margin_60">
			<div class="row">
                            <div class="col-md-9">
                           <?php                            
							$cartTotal = 0; $service_tax = 0; $cartSubTotal=0;
                           while ($getSubCats = $cartSubCat->fetch_assoc()) { ?>
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
                                            <input class="date-pick form-control" type="text" 
                                             id="sel_date_<?php echo $subCatName['id']; ?>" readonly onChange="selectDate(<?php echo $subCatName['id']; ?>)">
                                        </div>
                                        <div class="col-md-3">
                                            <input class="time-pick form-control" type="text"  id="sel_time_<?php echo $subCatName['id']; ?>" onChange="selectTime(<?php echo $subCatName['id']; ?>)">
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
									$user_session_id = $_SESSION['user_login_session_id'];
									$getCartItems = "SELECT * FROM services_cart WHERE user_id = '$user_session_id' AND service_sub_category_id = '$subCatId' ";
								} else {
									$getCartItems = "SELECT * FROM services_cart WHERE service_sub_category_id = '$subCatId' AND session_cart_id='$session_cart_id'  ";
								}
								
								$getServicenames = $conn->query($getCartItems); ?>

                            <?php 
								
                            	while ($getCartItems = $getServicenames->fetch_assoc()) { 
                            ?>
							<tr>
									<?php 
									$getSerName = getIndividualDetails('services_group_service_names','id',$getCartItems["service_id"]); 
									?>                                    
                                    <td><?php echo $getSerName['group_service_name']; ?></td>

			                        <?php if($getSerName['service_price_type_id'] == 1) {
			                             $cartSubTotal += $getCartItems['service_price']*$getCartItems['service_quantity'];
			                         ?>
			                        <td><?php echo $getSerName['service_price']; ?></td>
			                        <?php } elseif($getSerName['price_after_visit_type_id'] == 1) { ?>
			                            <td><?php echo $getSerName['price_after_visiting']; ?></td>
			                        <?php } else { ?>
			                            <td><?php echo $getSerName['service_min_price']; ?> - <?php echo $getSerName['service_max_price']; ?></td>
			                        <?php } ?>			

									<?php
			                        $service_selected_date1 = date('m/d/Y', strtotime($getCartItems['service_selected_date']));
			                        $service_visit_time1 = date('H:i:s A', strtotime($getCartItems['service_selected_time']));
			                        ?>

			                        <input type="hidden" name="cart_inc_id[]" value="<?php echo $getCartItems['id']; ?>">                       

                                    <td><input required class="date-pick form-control selDate_<?php echo $subCatId; ?>" type="text" name="service_visit_date[]" value="<?php echo $service_selected_date1; ?>" ></td>

                                    <td><input required class="time-pick form-control selTime_<?php echo $subCatId; ?>" type="text" name="service_visit_time[]" value="<?php echo $service_visit_time1; ?>" ></td>

                                    <td><a href="#0" class="remove_item"><i class="icon_plus_alt" onclick="add_cart_item(<?php echo $getCartItems['id']; ?>)" style="color:#fe6003" ></i></a> <span id="cart_inc_id_<?php echo $getCartItems['id']; ?>"> <?php echo $getCartItems['service_quantity'];?> </span><a href="#0" class="remove_item"><i class="icon_minus_alt" onclick="remove_cart_item(<?php echo $getCartItems['id']; ?>)"style="color:#fe6003"></i></a>

                                    <input type="hidden" value="<?php echo $getCartItems['service_quantity'];?>" id="cart_quantity_<?php echo $getCartItems['id'];?>" name="service_quantity[]">

                                    	<!--<input type="text" name="service_quantity[]" minlength="1" value="<?php echo $getCartItems['service_quantity'];?>" data-service-get-price="<?php echo $getCartItems['service_price'];?>" data-cart-id="<?php echo $getCartItems['id'];?>" data-price-type-id="<?php echo $getSerName['service_price_type_id'];?>" class="service_quantity valid_mobile_num form-control">--></td>

                                    <td class="changePrice_<?php echo $getCartItems['id']; ?>">Rs.<?php echo $getCartItems['service_price']*$getCartItems['service_quantity']; ?></td>

                                    <input type="hidden" id="individual_total_<?php echo $getCartItems['id']; ?>" class="txt">	

                                    <input type="hidden" value="<?php echo $getCartItems['service_price']; ?>" id="individual_intem_price_<?php echo $getCartItems['id']; ?>">

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
									<td class="text-right cart_sub_total">
										Rs. <?php echo $cartSubTotal; ?>	
														
									</td>
								</tr>
								<input type="hidden" id="cart_sub_total">
								<tr>
									<td>
										GST(<?php echo $getSiteSettingsData['service_tax']; ?>%)
									</td>
									<input type="hidden" id="service_tax_perc" value="<?php echo $getSiteSettingsData['service_tax']; ?>">
									<td class="text-right" id="gst_calc">
										<?php $service_tax += ($getSiteSettingsData['service_tax']/100)*$cartSubTotal; ?>
										Rs. <?php echo $service_tax; ?>
									</td>
									
								</tr>
								
								
								<tr class="total">
									<td>
										Total cost <br/>
										<span style="font-size: 11px;font-weight:normal;text-transform:capitalize">(*Min visiting charges applicable.)</span>
									</td>
									<td class="text-right grand_total1">
										Rs. <?php echo $cartSubTotal+$service_tax; ?>
									</td>
									<input type="hidden" id="grand_total">
								</tr>
							</tbody>
						</table>

						<?php if(!isset($_SESSION['user_login_session_id'])) { ?>
							<!-- <a class="btn_full" href="login.php?cart_id=<?php echo encryptPassword(1);?>">Proceed To Check out</a> -->
							<input type="submit" class="btn_full" name="submit" value="Proceed To Check out">
							<input type="hidden" name="login_cart_id" value="<?php echo encryptPassword(1);?>">
						<?php } else { ?>
							<input type="submit" class="btn_full" name="submit" value="Proceed To Check out">	

						<?php } ?>
						<a class="btn_full_outline" href="services.php"><i class="icon-right"></i> Continue shopping</a>
					</div>
					
				</aside>
				<!-- End aside -->

			</div>
			<!--End row -->
		</div>
		</form>
		<?php }  else { ?> <br />
			<p style="text-align:center; color:#f26226">No Services In Your Cart</p>
        	<center><a href="services.php" style="color:#f26226">Click here for SERVICES</a></center><br /><br />
		<?php } ?>
		<!--End container -->
	</main>
	<!-- End main -->

	<footer>
            <?php include_once 'footer.php';?>
        </footer>

	<div id="toTop"></div><!-- Back to top button -->
	

	<!-- Jquery -->
	<script data-cfasync="false" src="/cdn-cgi/scripts/af2821b0/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery.timepicker.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.timepicker.css" />

	<?php //$getCurMinTime = date("h:ia"); ?>
	<?php 	
	$cur_time=date("ha");
	$duration='+180 minutes';
	$min_time= date('ha', strtotime($duration, strtotime($cur_time)));
	?>
    <script>
    
	$('input.date-pick').datepicker({

		minDate: 0, maxDate: "+2M",		
		onSelect:function(selectedDate) {
	        alert(selectedDate);
	    }

	});

	$('input.time-pick').timepicker({		
		'minTime': '<?php echo $min_time; ?>',
	    'maxTime': '7:30pm',
	    'step': 30,
	    
	    //'showDuration': true
	});
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
        function selectDate(subCategoryId) {
        	var selDate = $('#sel_date_'+subCategoryId).val();        	
        	if(selDate!='') {
        		$('.selDate_'+subCategoryId).val(selDate);	        	
        	}        	
        	
        }
        function selectTime(subCategoryId) {
        	var selTime = $('#sel_time_'+subCategoryId).val();
        	if(selTime != '') {
	        	$('.selTime_'+subCategoryId).val(selTime);
        	}        	
        	
        }
        function add_cart_item(cartId) {
        	
        	if($('#individual_intem_price_'+cartId).val() == 'Price') {
        		var cartPrice1 = 0;
        	} else {
        		var cartPrice1 = $('#individual_intem_price_'+cartId).val();
        	}
        	var IncQuan = parseInt($('#cart_quantity_'+cartId).val())+1;        	
    		$('#cart_quantity_'+cartId).val(IncQuan);        	
        	$('#cart_inc_id_'+cartId).html(IncQuan);
        	$('.changePrice_'+cartId).text('Rs.'+IncQuan*cartPrice1);
        	$('#individual_total_'+cartId).val(IncQuan*cartPrice1);
        	calculateSum();	
        }
        function remove_cart_item(cartId) {
        	
        	if($('#individual_intem_price_'+cartId).val() == 'Price') {
        		var cartPrice1 = 0;
        	} else {
        		var cartPrice1 = $('#individual_intem_price_'+cartId).val();
        	}
        	var IncQuan = parseInt($('#cart_quantity_'+cartId).val())-1; 

        	if(IncQuan == 0) {        		
        		$.ajax({
			      type:'post',
			      url:'delete_cart_items.php',
			      data:{
			         cart_id : cartId,        
			      },
			      success:function(response) {
			        location.reload();
			      }
			    });

        	} else {

        		if(IncQuan!=0) {
	        		$('#cart_quantity_'+cartId).val(IncQuan);
	        		$('#cart_inc_id_'+cartId).html(IncQuan);
	        		$('.changePrice_'+cartId).text('Rs.'+IncQuan*cartPrice1);
	        		$('#individual_total_'+cartId).val(IncQuan*cartPrice1);
	        		calculateSum();
        		//return false;
        		}
        	}
        	
        		
        }
        function calculateSum() { 
        	var sum = 0;
			//iterate through each textboxes and add the values
			$(".txt").each(function() {
				//add only if the value is number
				if(!isNaN(this.value) && this.value.length!=0) {
					sum += parseInt(this.value);
				}
			});
			if(sum!= '') {
				//.toFixed() method will roundoff the final sum to 2 decimal places
				$(".cart_sub_total").html('Rs. '+sum);
				$('#cart_sub_total').val(sum);
				var calcGst = ($('#service_tax_perc').val()/100)*sum;
				$('#gst_calc').html('Rs. '+calcGst);
				//parseInt($('.gst_calc_val').val(calcGst));  
				$('#grand_total').val(sum+calcGst);
				$('.grand_total1').html(sum+calcGst);
				
				//alert(calcGst+sum);
			}
			
        }
        </script>

</body>

</html>