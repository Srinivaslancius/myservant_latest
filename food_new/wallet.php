 <!DOCTYPE html>
<html style="overflow-x:hidden">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include_once './meta_fav.php';?>
    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>

    <!-- BASE CSS -->
    <link href="css/base.css" rel="stylesheet">

		<link href="css/admin.css" rel="stylesheet">
    
    <!-- SPECIFIC CSS -->
    <link href="layerslider/css/layerslider.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
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
    padding: 4px 10px;
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
.table>thead>tr>th,.table>thead>tr>td{
	width:20%;
}
</style>
</head>
<body>
<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

	<div id="preloader">
        <div class="sk-spinner sk-spinner-wave" id="status">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div><!-- End Preload -->

    <!-- Header ================================================== -->
    <header>
	  <?php include_once './header.php';?>
        </header>
    <!-- End Header =============================================== -->
<?php $getAllAboutData = getAllDataWhere('food_content_pages','id',6);
          $getAboutData = $getAllAboutData->fetch_assoc();
?>
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_home.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>Wallet</h1>
         <p></p>
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
    <div id="position">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#0">Wallet</a></li>
            </ul>
            
        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
	<div class="row">
    
    <div class="col-md-3 col-sm-3" id="sidebar">
    <div class="theiaStickySidebar">
        <div class="box_style_1" id="faq_box">
			<?php include_once 'dashboard_strip.php';?>
		</div><!-- End box_style_1 -->
        </div><!-- End theiaStickySidebar -->
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
				  <!--</div>
                      <div class="panel-body">-->
                    <div id="tabs" class="tabs">
			<nav>
				<ul>
					<li><a href="#section-1" class="icon-profile"><span>Somthing</span></a>
					</li>
					<li><a href="#section-2" class="icon-menut-items"><span>Somthing</span></a>
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
                    
				</section><!-- End section 1 -->

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
				</section><!-- End section 2 -->


			</div><!-- End content -->
		</div>
                      </div>
                  </div>
                  
                </div><!-- End panel-group -->
                
            
        </div><!-- End col-md-9 -->
    </div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->

<div class="high_light">
       <?php include_once 'view_restaurants.php'; ?>
      </div>
	  
	  <!-- Footer ================================================== -->
	<footer>
         <?php include_once 'footer.php'; ?>
		 </footer>
<!-- End Footer =============================================== -->

<div class="layer"></div><!-- Mobile menu overlay mask -->

<!-- Login modal -->   

	<!-- End Search Menu -->
    
<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>
<script src="js/tabs.js"></script>
	<script>
		new CBPFWTabs(document.getElementById('tabs'));
	</script>
<!-- SPECIFIC SCRIPTS -->
<script src="js/theia-sticky-sidebar.js"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>


</body>

</html>