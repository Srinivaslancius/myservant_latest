<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en" style="overflow-x:hidden">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php include_once 'meta.php';?>	

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
	<!-- Popup CSS -->
	<link rel="stylesheet" href="css/main.css">
	<!-- For brands slider -->
	<script src="../cdn-cgi/scripts/78d64697/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
<style>
	marquee span { 
   margin-right: 0%; 
	-moz-margin-right: 0%; 
    }
    marquee p { 
    white-space:nowrap;
    margin-right: 1000px; 
    } 
	.close1 {   
    font-size: 15px !important;
    font-weight: 700 !important;
    line-height: 2.35 !important;
    color: #fff !important;
    text-align: center !important;
    background-color: #fe6003 !important;
   padding: 7.2px 20px 7.5px 20px !important;
    margin-top: 20px !important;
    font-size:15px !important;
}
.submit {   
    font-size: 15px !important;
    font-weight: 700 !important;
    line-height: 1 !important;
    color: #fff !important;
    text-align: center !important;
    background-color: #fe6003 !important;
    padding: 10px 15px 10px 15px !important;
    border: none !important;
     font-size:15px !important;
}
.selectdiv {
  position: relative;
  margin: 10px 33%;
  padding-right: 100px !important;
}

.selectdiv:after {
    /*content: '\f078';
    font: normal normal normal 17px/1 FontAwesome;*/
    color: #fe6003;
    right: 11px;
    top: 6px;
    height: 34px;
    padding: 10px 0px 0px 8px;
    border-left: 1px solid #fe6003;
    position: absolute;
    pointer-events: none;
}

/* IE11 hide native button (thanks Matt!) */
select::-ms-expand {
display: none;
}

.selectdiv select {
 
  -moz-appearance: none;
 
  /* Add some styling */ 
  display: block;
  max-width: 320px;
  height: 32px;
  /*float: right;
  margin: 5px 0px;*/
  padding: 0px 3px 0px 10px;
  font-size: 15px;
  line-height: 1.75;
  color: #333;
  background-color: #ffffff;
  background-image: none;
  border: 1px solid #fe6003;
  -ms-word-break: normal;
  word-break: normal;
}

</style>
</head>

<body>

	<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->
<?php 
if($_GET['key']) {
	unset($_SESSION['lkp_city_id']);
	unset($_SESSION['lkp_pincode_id']);
} elseif($_GET['key1']) {
	$_SESSION['lkp_city_id'] = 1;
	$_SESSION['lkp_pincode_id'] = 2;
}
if(isset($_POST['submit'])) {
	$_SESSION['lkp_city_id'] = $_POST['lkp_city_id'];
	$_SESSION['lkp_pincode_id'] = $_POST['lkp_pincode_id'];
}
?>

<?php if($_SESSION['lkp_city_id'] == '' && $_SESSION['lkp_pincode_id'] == '') { ?>
<form method="post">	
<div id="boxes">
  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window"><h3><b>My Servant Services</b></h3>
    <div id="lorem" style="padding-top:20px">
	<div class="selectdiv">
		<?php $getStates1 = "SELECT * from lkp_cities WHERE id IN (SELECT lkp_city_id FROM availability_of_locations WHERE lkp_status_id = 0) AND lkp_status_id = '0'";
		$getStates = $conn->query($getStates1);?>
  <label>
      <select name="lkp_city_id" id="lkp_city_id" onChange="getPincodes(this.value);" required>
          <option selected value=""> Select City</option>
          <?php while($row = $getStates->fetch_assoc()) {  ?>
              <option value="<?php echo $row['id']; ?>" ><?php echo $row['city_name']; ?></option>
          <?php } ?>
      	</select>
  	</label>
  	</div>
  	<div class="selectdiv">
   		<label>
      		<select name="lkp_pincode_id" id="lkp_pincode_id" required>
          		<option selected value=""> Select Pincode</option>
      		</select>
  		</label>
	</div>
    </div>
    <div id="popupfoot" style="padding-bottom:20px">
	<div class="row">
	<div class="col-sm-3 col-xs-1">
	</div>
	<div class="col-sm-3 col-xs-5">
	<button type="submit" name="submit" value="submit" class="submit">Submit</button>
	</div>
	<div class="col-sm-3 col-xs-3">
	<a href="index.php?key1=<?php echo 1; ?>" value="skip" class="close1 agree">Skip</a>
	</div>
	<div class="col-sm-3 col-xs-3">
	</div>
	</div>
	</div>
  </div>
  <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 1.0;" id="mask"></div>
</div>
</form>
<?php } ?>

	

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
            <section id="hero">
			        <?php include_once './search_bar.php';?>
			    </section>
        </header>
	<!-- End Header -->

	<main>
		<!-- Slider -->
		<?php $getAllServiceNewsFeedData = getAllDataWithStatus('services_newsfeed','0');
	
		?>
		<div id="full-slider-wrapper">
                    <?php include_once './slider.php';?>
		</div>
		<!-- End layerslider -->
			
            <div class="container-fluid marg10 search_back">
            	
                <div class="row">
                	
					<marquee scrollamount="10" style="color:white;font-size:15px">
					<?php while($getServiceNewsFeed = $getAllServiceNewsFeedData->fetch_assoc()) {  ?><span><a href="<?php echo $getServiceNewsFeed['news_feed_url']; ?>" target= "_blank" style="color:white;"><?php echo $getServiceNewsFeed['news_feed_url'];?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  } ?>
					</marquee> 
					 
                </div>
               
                </div>

		<div class="container margin_60">

			<div class="main_title">
				<h2>Our <span>Services</span> Categories</h2>
				
			</div>
			<?php 
			if($_SESSION['lkp_city_id'] != '') {
				$getAvailableLocationsData = "SELECT * FROM availability_of_locations WHERE lkp_status_id = 0 AND lkp_city_id = '".$_SESSION['lkp_city_id']."' AND FIND_IN_SET('".$_SESSION['lkp_pincode_id']."', pincodes) ORDER BY id DESC";
				$getAvailableLocations = $conn->query($getAvailableLocationsData); $getAvailableLocations1 =$getAvailableLocations->fetch_assoc();
				$service_id = $getAvailableLocations1['service_id'];
			} else {
				$getAvailableLocations = getIndividualDetails('availability_of_locations','lkp_city_id',1);
				$service_id = $getAvailableLocations['service_id'];
			}

			$getCategories = "SELECT * from services_category WHERE id IN ($service_id) AND id IN (SELECT services_category_id FROM services_sub_category WHERE lkp_status_id = 0) AND lkp_status_id = '0' ORDER BY category_position DESC LIMIT 0,12";
				$getCategoriesData = $conn->query($getCategories);
			?>
			<div class="row">
                 <?php  while($getAllCategoriesData = $getCategoriesData->fetch_assoc()) { ?> 
				<div class="col-md-2 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
					<a href="sub_categories.php?key=<?php echo encryptPassword($getAllCategoriesData['id']); ?>">
					<div class="tour_container" style="height:180px">
						<div class="ribbon_3 popular"><!-- <span>Popular</span> --></div>
						<div class="img_container padd15">
                           <img src="<?php echo $base_url . 'uploads/services_category_images/'.$getAllCategoriesData['category_image'] ?>" class="img-responsive" alt="<?php echo $getAllCategoriesData['category_name']; ?>" style="width:64px; height:64px;">
						</div>
						<div class="tour_title">
							<h3><?php echo $getAllCategoriesData['category_name']; ?></h3>
						</div>
					</div>
					</a>
					<!-- End box tour -->
				</div>
                  <?php } ?>  
			</div>
			<!-- End row -->
			<p class="text-center add_bottom_30">
				<a href="services.php" class="btn_1 medium"><i class="icon-eye-7"></i>View all our Services</a>
			</p>

			

			

      <div class="main_title">
        <h2>Our <span>Associate</span> Partners</h2>
        
      </div>

      <div class="row">
        <?php $getServiceProvider =  getServicesProviderDataLimit('1','6'); ?>
                <?php  while($getAllgetServiceProvider = $getServiceProvider->fetch_assoc()) { ?>
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
          <div class="feature">
          <div class="row">
          <div class="col-sm-2">
            <center><img src="<?php echo $base_url . 'uploads/service_provider_business_logo/'.$getAllgetServiceProvider['logo'] ?>" class="img-responsive" alt="<?php echo $getAllgetServiceProvider['company_name']; ?>" style="width:65px; height:65px;margin-top:40px;margin-bottom:40px"></center>
            </div>
            <div class="col-sm-10">
            <h3><?php echo $getAllgetServiceProvider['company_name']; ?></h3>
            <p>
              <?php echo substr(strip_tags($getAllgetServiceProvider['description']), 0,150);?>
            </p>
          </div>
          </div>
          
          </div>
        </div>
                <?php } ?>
      </div>
			<!-- End row -->
			<!-- End row -->
			<p class="text-center nopadding">
				<a href="partners.php" class="btn_1 medium"><i class="icon-eye-7"></i>View all</a>
			</p>
		</div>
		<!-- End container -->

		<?php include_once 'our_associate_partners.php';?>

		<!-- Brnds Start here -->
		<div class="container margin_0b">
			<div class="main_title">
				<h2>Our <span>Brands</span></h2>				
			</div>
			  <?php include_once 'brands.php';?>
		</div><br><br>
		<!-- End Brnds here -->

	</main>
	<!-- End main -->

	<footer>
            <?php include_once 'footer.php';?>
    </footer><!-- End footer -->

	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- Search Menu -->
	
	<!-- Common scripts -->
	
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
	<script>
(function(){
  // setup your carousels as you normally would using JS
  // or via data attributes according to the documentation
  // https://getbootstrap.com/javascript/#carousel
  $('#carousel123').carousel({ interval: 2000 });
  $('#carouselABC').carousel({ interval: 3600 });
}());

(function(){
  $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<6;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());
</script>

<!-- Script for popup -->
<script src="js/main.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  // script to get pincodes
  function getPincodes(val) { 
        $.ajax({
        type: "POST",
        url: "get_pincodes.php",
        data:'lkp_city_id='+val,
        success: function(data){
            $("#lkp_pincode_id").html(data);
        }
        });
    }
</script>
</body>

</html>