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

		
    
    <!-- SPECIFIC CSS -->
    <link href="layerslider/css/layerslider.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<style>
ul#cat_nav li a {
    position: relative;
    color: #555;
    display: block;
    padding: 10px 10px;
}
ul#cat_nav li a:hover {
   background-color:#fe6003;
   color:white;
}
ul#cat_nav li a#active {
   background-color:#fe6003;
   color:white;
}
.table>thead>tr>th {
    vertical-align: bottom;
    border-bottom:0px;
	color:#fe6003;
	
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 4px;
    line-height: 1.42857143;
    vertical-align: top;
 
}
h5{
	color:#fe6003;
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

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_home.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>Order Details</h1>
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Order Details</li>
            </ul>
            
        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
			<div class="feature_2">
	<div class="row">
        
        <aside class="col-lg-3 col-md-4 col-sm-4">
           <div class="box_style_cat">
       		<?php include_once 'my_dashboard_strip.php';?>
            </div>
        </aside>       
        <div class="col-lg-9 col-md-8 col-sm-8">
			<div class="row">
			<div class="col-sm-1">
			</div>
		<div class="col-sm-11 col-xs-12">
		<div class="table-responsive">		
			<table class="table" style="border:1px solid #ddd;width:100%">
		<thead>
		  <tr>
			<th></th>
			<th></th>
			<th colspan="2"><h3>ORDER DETAILS</h3></th>
			<th></th>
			<th></th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td colspan="2" style="padding-left:20px">
			<h3>Order Information</h3>
			<p>Restaurant Name: Green</p>
			<p>Payment Method: Cash On Delivery</p>
			<p>Order Type: Delivery</p>
			<p>Order Status: Pending</p>
			<p>Payment Status: InProgress</p></td>
			<td colspan="2"></td>
			<td colspan="2">
			<h3>Shipping Address</h3>
			<p>Harikanth</p>
			<p>hari@gmail.com</p>
			<p>9765764765</p>
			<p>Hyderabad</p>
			<p>878687</p></td>
		  </tr>
		  <tr>
			<td><h5>PRODUCT NAME</h5></td>
			<td><h5>CATEGORY NAME</h5></td>
			<td><h5>ITEM WEIGHT</h5></td>
			<td><h5>QUANTITY</h5></td>
			<td><h5>PRICE</h5></td>
			<td><h5>TOTAL</h5></td>
		  </tr>
		   <tr>
			<td><p>Kadai Chicken</p></td>
			<td><p>STARTERS	</p></td>
			<td><p>Medium</p></td>
			<td><p>1</p></td>
			<td><p>500</p></td>
			<td><p>500</p></td>
		  </tr>
		  <tr>
			<td><p>Kadai Chicken</p></td>
			<td><p>STARTERS	</p></td>
			<td><p>Medium</p></td>
			<td><p>1</p></td>
			<td><p>500</p></td>
			<td><p>500</p></td>
		  </tr>
		  <tr>
			<td><p>Kadai Chicken</p></td>
			<td><p>STARTERS	</p></td>
			<td><p>Medium</p></td>
			<td><p>1</p></td>
			<td><p>500</p></td>
			<td><p>500</p></td>
		  </tr>
		   <tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><p>Subtotal:</p>
			<p>Tax:</p>
			<p>Delivery Charges:</p>
			<p>Ingredients Price:</p>
			<p style="color:#fe6003;">Grand Total:</p></td>
			<td><p style="color:#fe6003;">Rs. 2700</p>
			<p style="color:#fe6003;">Rs. 270(10%)</p>
			<p style="color:#fe6003;">Rs. 40</p>
			<p style="color:#fe6003;">Rs. 0</p>
			<p style="color:#fe6003;">Rs. 3010</p></td>
		  </tr>
		</tbody>
	  </table>
	  </div>
</div>	  
        </div><!-- End col-lg-9-->
        </div>
			</div>
</div>
</div>
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

    
     <!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_close"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon-search-6"></i>
			</button>
		</form>
	</div>
	<!-- End Search Menu -->
    
<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

</body>
</html>