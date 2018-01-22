<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php include_once 'meta.php';?>
	<?php $getContentPageData = getAllDataWhere('services_content_pages','id',9);
		  $getPartnersBanner = $getContentPageData->fetch_assoc();
	?>
	<?php $getAllAboutDataData = getAllDataWhere('services_content_pages','id',1);
		  $getAboutDataData = $getAllAboutDataData->fetch_assoc();
	?>
	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
	<!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/base.css" rel="stylesheet">
        <link href="site_launch/css/style.css" rel="stylesheet">

	<!-- REVOLUTION SLIDER CSS -->
	<link href="layerslider/css/layerslider.css" rel="stylesheet">
	<link href="css/dash_board.css" rel="stylesheet">
	<link href="css/admin.css" rel="stylesheet">
	<link href="css/jquery.switch.css" rel="stylesheet">
<style>
.table>thead>tr>th {
    vertical-align: bottom;
    border-bottom:0px;
	color:#fe6003;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
   border-top: 0px solid #ddd;
}
.button1 {
    background-color: #fe6003;
    border-color: #fe6003;
    color: white;
    padding: 10px 1px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 13px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {
	background-color:#fe6003;
 padding: 5px 12px;
} 

</style>

</head>

<body>

	<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

	

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<!-- Header================================================== -->
	 <header id="plain">
		<?php include_once './top_header.php';?>
		<!-- End top line-->

		<div class="container">
                    <?php include_once './menu.php';?>
		</div>
		<!-- container -->
                
        </header>
	<!-- End Header -->

	<main>
		<!-- Slider -->
		 <div class="container-fluid page-title">
			<?php  
				  if(!empty($getPartnersBanner['image'])) { ?> 	
					<div class="row">
						<img src="<?php echo $base_url . 'uploads/services_content_pages_images/'.$getPartnersBanner['image'] ?>" alt="<?php echo $getPartnersBanner['title'];?>" class="img-responsive" style="width:100%; height:400px;">
					</div>
				<?php } else { ?>
					<div class="row">
						<img src="img/slides/slide_1.jpg" class="img-responsive" style="width:100%; height:400px;">
					</div>
				<?php }?>
    	</div>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="index.php">Home</a>
					</li>
					<li>Wallet</li>
				</ul>
			</div>
		</div>
		<div class="container margin_60">
<div class="row">
    
    <div class="col-md-3 col-sm-3" id="sidebar">
    <aside>
           <div class="box_style_cat">
       		<?php include_once 'dashboard_strip.php';?>
            </div>
        </aside>   
     </div><!-- End col-md-3 -->
        
        <div class="col-md-9 col-sm-9">
        
         <div class="panel-group">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="nomargin_top">My Wallet</h3>
                    </div>
                      <div class="panel-body">
                     <div class="table-responsive">				 
        			<table class="table" style="border:1px solid #ddd;width:100%">
            		<thead>
            		  <tr>
            			<th></th>
            			<th></th>
            			<th></th>
            			<th></th>
						<th></th>
            		  </tr>
            		</thead>           		
            		<tbody>
            		  <tr>
            			<td><img src="img/dashboard/wallet.png"></td>
            			<td><b>Rs :5/-</b><br>Your Wallet Balance</td>
            			<td colspan="2"><input type="text" name="amnt" class="form-control" placeholder="Enter amount to be added in your wallet" required></td>						
						<td><button class="button1" type="submit" name="submit" value="submit">Add Money to Wallet</button></td>
            		  </tr>            		  
            		</tbody>
            	
					
        	     </table>
				  </div>
				  </div>
				   <div class="panel-body">
				   <div id="tabs" class="tabs">
				<nav>
					<ul>
						<li><a href="#section-1" class="icon-booking"><span>Somthing</span></a>
						</li>
						<li><a href="#section-2" class="icon-wishlist"><span>Somthing</span></a>
						</li>
						
					</ul>
				</nav>
				<div class="content">

					<section id="section-1">
						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">	
									<table class="table" style="width:100%;border-bottom:0px">
										<thead>
										  <tr>
											<th>MERCHANT NAME</th>
											<th>WITHDRAWAL</th>
											<th>DEPOSIT</th>
											<th>STATUS</th>
											<th>COMMENT</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td><b>Cashback Received</b><br>paytm for Order #CASH-676607643 Paytm Cash Txn ID 17376641204 2018-01-09 09:39:13 PM</td>
											<td></td>
											<td>Rs : 5/-</td>
											<td>SUCCESS</td>
											<td>Order #4419408824 of Reacharge of Airtel Mobile 730214...(Promocode:GETS)</td>
										  </tr>
										 
										</tbody>
					
									</table>
				 
										
								</div><!-- /.col-md-6 -->
									
							</div><!-- /.row -->
						</div>

					</section>
					
					<section id="section-2">
							<div class="row">
									<div class="col-md-12">
										 <div class="table-responsive">	
											<table class="table" style="width:100%;border-bottom:0px">
            		<thead>
            		  <tr>
            			<th>MERCHANT NAME</th>
            			<th>WITHDRAWAL</th>
            			<th>DEPOSIT</th>
            			<th>STATUS</th>
						<th>COMMENT</th>
            		  </tr>
            		</thead>
            		<tbody>
            		  <tr>
            			<td><b>Cashback Received</b><br>paytm for Order #CASH-676607643 Paytm Cash Txn ID 17376641204 2018-01-09 09:39:13 PM</td>
            			<td></td>
            			<td>Rs : 5/-</td>
						<td>SUCCESS</td>
						<td>Order #4419408824 of Reacharge of Airtel Mobile 730214...(Promocode:GETS)</td>
            		  </tr>
					  
            		</tbody>
					
        	     </table>
				 
										
									</div><!-- /.col-md-6 -->
									
								</div><!-- /.row -->
								</div>
					</section>
					

					</div>
					
				</div>
		
        	  </div>
                      </div>
                  </div>
                
            
        </div><!-- End col-md-9 -->
    </div><!-- End row -->
			<!-- End row -->						
		</div>
		<?php include_once 'our_associate_partners.php';?>
		<!-- End section -->

	</main>
	<!-- End main -->

	<footer>
            <?php include_once 'footer.php';?>
    </footer><!-- End footer -->

	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- Search Menu -->
	
	<!-- Common scripts -->
	<script src="../cdn-cgi/scripts/78d64697/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>

	<!-- Specific scripts -->
	<script src="layerslider/js/greensock.js"></script>
	<script src="layerslider/js/layerslider.transitions.js"></script>
	<script src="layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
	<script src="js/theia-sticky-sidebar.js"></script>
<script src="js/tabs.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			'use strict';
			$('#layerslider').layerSlider({
				autoStart: true,
				responsive: true,
				responsiveUnder: 1280,
				layersContainer: 1170,
				skinsPath: 'layerslider/skins/'
					// Please make sure that you didn't forget to add a comma to the line endings
					// except the last line!
			});
		});
	</script>
	<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>


	<script>
		new CBPFWTabs(document.getElementById('tabs'));
	</script>
	<script>
		$('.wishlist_close_admin').on('click', function (c) {
			$(this).parent().parent().parent().fadeOut('slow', function (c) {});
		});
	</script>
</body>

</html>