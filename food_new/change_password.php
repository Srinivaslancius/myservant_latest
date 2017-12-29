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

.button1 {
    background-color: #fe6003;
    border-color: #fe6003;
    color: white;
    padding: 5px 9px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
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
    	 <h1>Change Password</h1>
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>About Us</li>
            </ul>
            <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
			<div class="feature_2">
	<div class="row">
        
        <aside class="col-lg-3 col-md-4 col-sm-4">
           <div class="box_style_cat">
       		<div class="box_style_cat">
       		<?php include_once 'my_dashboard_strip.php';?>
            </div>
            </div>
        </aside>
		
        <div class="col-lg-9 col-md-8 col-sm-8">        
       			 <div class="row">
				  <div class="col-md-1">
				  </div>
				  <div class="col-md-11">
                  <div class="col-md-6">				  
					<div class="form-group">
						 <label for="cur-password">Current password</label>
						<input type="password" class="form-control" id="cur-password" placeholder="*******" autocomplete="off">                                           
					</div>					
					 <div class="form-group">
					 <label for="new-password">New password</label>
						<input type="password" minlength="8" class="form-control" id="user_password" placeholder="*********" autocomplete="off">                                           
					</div>					
					<div class="form-group">
					<label for="new-repassword">Repeat password</label>
						 <input type="password" minlength="8" class="form-control" id="confirm_password" placeholder="********" autocomplete="off">
                                            
					</div>					
					 <div class="form-group">
						 <button class="button1">Submit</button>
					
					</div>					
                  </div>
				   <div class="col-md-6">
				   </div>
				   </div>
                  </div><!-- Edn row -->                 
                                                   
        </div><!-- End col-lg-9-->
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