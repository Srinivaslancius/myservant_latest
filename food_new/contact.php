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
             <h1>Contact US</h1>
             <p>We would love to hear from you!</p>
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
               
            </ul>
            <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
	<div class="row" id="contacts">
    	<div class="col-md-6 col-sm-6">
        	<div class="box_style_2">
            	<h2 class="inner">Customer service</h2>
                <p class="add_bottom_30">Adipisci conclusionemque ea duo, quo id fuisset prodesset, vis ea agam quas. <strong>Lorem iisque periculis</strong> id vis, no eum utinam interesset. Quis voluptaria id per, an nibh atqui vix. Mei falli simul nusquam te.</p>
                <p><a href="tel://+91987654321" class="phone"><i class="icon-phone-circled"></i>9876543210</a></p>
                <p><a href=""><i class="icon-mail-3"></i>orderfood@gmail.com</a></p>
            </div>
    	</div>
        <div class="col-md-6 col-sm-6">
        	<div class="box_style_2">
            	<h2 class="inner">Restaurant Support</h2>
                <p class="add_bottom_30">Quo ex rebum petentium, cum alia illud molestiae in, pro ea paulo gubergren. Ne case constituto pro, ex vis delenit complectitur, per ad <strong>everti timeam</strong> conclusionemque. Quis voluptaria id per, an nibh atqui vix.</p>
                <p><a href="tel://+91987654321" class="phone"><i class="icon-phone-circled"></i>9876543210</a></p>
                <p><a href=""><i class="icon-mail-3"></i>orderfood@gmail.com</a></p>
            </div>
    	</div>
    </div><!-- End row -->
	
                <div class="box_style_2">
				<form>
					<p><input type="text" class="form-control " placeholder="Name"></p>
					
                    <p><input type="email" class="form-control " placeholder="Email"></p>
                     <p><input type="text" class="form-control " placeholder="Mobile Number"></p>
      <p><select class="form-control" id="sel1">
        <option>How can we help you?*</option>
        <option>I need help with my Myservant online order.</option>
        <option>I need help with my Myservant online order.</option>
        <option>I need help with my Myservant online order.</option>
      </select></p>
	   <p> <textarea class="form-control" rows="5" id="comment"placeholder="Message*"></textarea></p>
                    <div id="pass-info" class="clearfix"></div>					
					<button type="submit" class="btn btn-submit" style="background-color:#f26226;color:white">Send Message</button>
				</form>
				</div>
</div><!-- End container -->
<div class="high_light">
       <?php include_once 'view_restaurants.php'; ?>
      </div>

<!-- Footer ================================================== -->
	<footer>
         <?php include_once 'footer.php'; ?>
    </footer>
<!-- End Footer =============================================== -->

<div class="layer"></div><!-- Mobile menu overlay mask -->

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
<script src="../cdn-cgi/scripts/84a23a00/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

</body>
</html>