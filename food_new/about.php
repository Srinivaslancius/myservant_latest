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
    	 <h1>About Us</h1>
         <p>One Stop Shop for all your food needs.</p>
         <p></p>
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
    <div class="main_title margin_mobile">
            <h2 class="nomargin_top">About Us</h2>
        </div>	
			<div class="feature_2">
				<h3>What is Myservant.com</h3>
				<p> Myservant.com (A Unit of CMR Enterprises Pvt Ltd) is one of the largest online food and grocery store in Vijayawada. With over 3500 products and we deal with over 250 brands in our catalogue. The Main Vision of Myservant.com is to convert complex to simpler form. Myservant offers best online food and grocery shopping experience in and around Vijayawada. My Servant offers the best price, the best quality with on time delivery.</p>
				<h3>Why Myservant is here?</h3>
				<p>Myservant is an online grocery store coupled with house maintenance services which serves all your home needs in just a click. Whether it might be a metro city or an urban it doesn’t matter, we are here to save your precious time and reduce the stress on shopping household items and give life changing experience in handling household products. Myservant is an online grocery store designed just for everyone from infant to old age. We provide services at your door step with respect to your comfortable time. Select a time slot for delivery/ service and your order will be delivered right to your doorstep, anywhere in Vijayawada. You can also pay online using your debit/credit cards, wallet payments and cash on delivery.</p>
				<h3>MyServant.com Services</h3>
				<p>We give you wide range of grocery products from branded to non-branded including Groceries, Staples, Food items, Fruits and Vegetables, cosmetics, Beauty products, baby products, personal care and many more.</p>
				<h3>Book a Service</h3>
				<p>We offer different services which offers great convenience. We offer services such as Home Appliances Repairs & services, Car & bike repair Services, Online 24 X 7 emergency electrical services, Laundry Services, Plumbing Services, Air Conditioning services. You get served by the best and authorized technicians.</p>
				<h3>Why should you shop at Myservant?</h3>
				<p>Myservant always give prior importance to “Time”. Every individual is so willing to spare their valuable time with family and friends in their free time but unfortunately a mandate grocery shopping will kill your time. Myservant is a part of CMR services Pvt Ltd which focuses on customers and consumers valuable and precious time who shop for online grocery store in order to save their. No need to list out grocery items, no scope of traffic jam’s, you can say no to carrying, can avoid standing in line. You can just get everything you need by just one click and we will be at your door steps with your order.</p>
				<p>This is Vijayawada’s best online grocery store. As we know you and we understand your needs. You can also order services from your house and let them do the work. We offer great security, as our services are provided by the best service man in Vijayawada. Our prices are reasonable and we offer reliable service.</p>
				<h3>Get your service with just few clicks</h3>
				<ul>
				<li>Browse or search from our wide range of products.</li>
				<li>Select all your groceries/service and add them to the cart.</li>
				<li>Select the payment mode and give information in the fields.</li>
				<li>Select your convenient time slots as per mentioned.</li>
				<li>Finally, Your products will be delivered.</li>
				</ul>
				<p><b>Note:</b> We currently operate in Vijayawada only</p>
				<p>Should you have any concerns or would you want to give us feedback, please do not hesitate to contact our customer service team by sending an email at customercare@myservant.com. CMR Services PVT LTD Office is located at Plot no. 40-15/2-19B, 3rd floor, Brindavan Colony Vijayawada, Andhra Pradesh, India-520010.</p>
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