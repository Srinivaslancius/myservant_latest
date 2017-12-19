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


</head>

<body>

	<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

	

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<!-- Header================================================== -->
	<header>
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
						<img src="<?php echo $base_url . 'uploads/services_content_pages_images/'.$getPartnersBanner['image'] ?>" alt="<?php echo $getPartnersBanner['title'];?>" class="img-responsive">
					</div>
				<?php } else { ?>
					<div class="row">
						<img src="img/slides/slide_1.jpg" class="img-responsive">
					</div>
				<?php }?>
    	</div>
		<div class="container margin_60">
		<div class="main_title">
				<h2>ABOUT US</h2>				
			</div>
			<div class="row">			
					<div class="feature">
					<h4>What is Myservant.com</h4>
					<p>Myservant.com (A Unit of CMR Enterprises Pvt Ltd) is one of the largest online food and grocery store in Vijayawada. With over 3500 products and we deal with over 250 brands in our catalogue. The Main Vision of Myservant.com is to convert complex to simpler form. Myservant offers best online food and grocery shopping experience in and around Vijayawada. My Servant offers the best price, the best quality with on time delivery.</p>
					<h4>Why Myservant is here?</h4>
					<p>Myservant is an online grocery store coupled with house maintenance services which serves all your home needs in just a click. Whether it might be a metro city or an urban it doesn’t matter, we are here to save your precious time and reduce the stress on shopping household items and give life changing experience in handling household products. Myservant is an online grocery store designed just for everyone from infant to old age. We provide services at your door step with respect to your comfortable time. Select a time slot for delivery/ service and your order will be delivered right to your doorstep, anywhere in Vijayawada. You can also pay online using your debit/credit cards, wallet payments and cash on delivery.</p>
					<h4>MyServant.com Services</h4>
					<p>We give you wide range of grocery products from branded to non-branded including Groceries, Staples, Food items, Fruits and Vegetables, cosmetics, Beauty products, baby products, personal care and many more.</p>
					<h4>Book a Service</h4>
					<p>We offer different services which offers great convenience. We offer services such as Home Appliances Repairs & services, Car & bike repair Services, Online 24 X 7 emergency electrical services, Laundry Services, Plumbing Services, Air Conditioning services. You get served by the best and authorized technicians.</p>
					<h4>Why should you shop at Myservant?</h4>
					<p>Myservant always give prior importance to “Time”. Every individual is so willing to spare their valuable time with family and friends in their free time but unfortunately a mandate grocery shopping will kill your time. Myservant is a part of CMR services Pvt Ltd which focuses on customers and consumers valuable and precious time who shop for online grocery store in order to save their. No need to list out grocery items, no scope of traffic jam’s, you can say no to carrying, can avoid standing in line. You can just get everything you need by just one click and we will be at your door steps with your order.</p>
					<p>This is Vijayawada’s best online grocery store. As we know you and we understand your needs. You can also order services from your house and let them do the work. We offer great security, as our services are provided by the best service man in Vijayawada. Our prices are reasonable and we offer reliable service.</p>
					<h4>Get your service with just few clicks</h4>
					<p>
					Get your service with just few clicks<br>
					Select all your groceries/service and add them to the cart.<br>
					Select the payment mode and give information in the fields.<br>
					Select your convenient time slots as per mentioned.<br>
					Finally, Your products will be delivered.</p>				
					<p><b>Note:</b> We currently operate in Vijayawada only</p>
					<p>Should you have any concerns or would you want to give us feedback, please do not hesitate to contact our customer service team by sending an email at customercare@myservant.com. CMR Services PVT LTD Office is located at Plot no. 40-15/2-19B, 3rd floor, Brindavan Colony Vijayawada, Andhra Pradesh, India-520010.</p>
					</div>      
			</div>
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

</body>

</html>