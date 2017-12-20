<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include_once './meta_fav.php';?>
    
    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>

    <!-- BASE CSS -->
    <link href="css/base.css" rel="stylesheet">
    
    <!-- Radio and check inputs -->
    <link href="css/skins/square/grey.css" rel="stylesheet">
    <link href="css/ion.rangeSlider.css" rel="stylesheet">
    <link href="css/ion.rangeSlider.skinFlat.css" rel="stylesheet" >

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

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

<?php
    if(isset($_POST['searchKey'])) {
        $searchParms = $_POST['searchKey'];
        //$getSearchResults = getSearchResults('food_vendors',$searchParms);
        $getRes = "SELECT * FROM food_vendors WHERE `lkp_status_id`= '0' AND  (restaurant_address LIKE '%$searchParms%' OR  pincode LIKE '%$searchParms%') AND id IN (SELECT restaurant_id FROM food_products WHERE lkp_status_id = 0) ORDER BY id DESC";
        $getSearchResults = $conn->query($getRes);
        $getResultsCount = $getSearchResults->num_rows;
    } else {
        $getSearchResults = getAllRestaruntsWithProducts('0','','');
    }
?>

<!-- SubHeader =============================================== -->
<div class="container-fluid" style="padding:0px">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  <!--  <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/slide/slide_1.jpg" alt="image" style="width:100%;">
        <div class="carousel-caption">
        <h2 style="color:white">24 results in your zone</h2>
        <p>LA is always so much fun!</p>
      </div>
      </div>

      <div class="item">
        <img src="img/slide/slide_2.jpg" alt="image" style="width:100%;">
        <div class="carousel-caption">
       <h2 style="color:white">24 results in your zone</h2>
        <p>LA is always so much fun!</p>
      </div>
      </div>
    
      <div class="item">
        <img src="img/slide/slide_3.jpg" alt="image" style="width:100%;">
        <div class="carousel-caption">
       <h2 style="color:white">24 results in your zone</h2>
        <p>LA is always so much fun!</p>
      </div>
      </div>
    </div>

    <!-- Left and right controls -->
  <!--  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>-->
  </div>
</div>

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#0">Home</a></li>
                <li><a href="#0">Category</a></li>
                <li>Page active</li>
            </ul>
             
        </div>
    </div><!-- Position -->
    
    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div><!-- End Map -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="row">
            <div class="col-md-3">
                <?php include_once './filters.php';?>
            </div>
        
        
        <div class="col-md-9">
        
                    <div id="tools">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6 pull-right">
                        <div class="styled-select">
                            <select name="sort_rating" id="sort_rating">
                                <option value="" selected>Sort by</option>
                                <option value="lower">Relevance</option>
                                <option value="higher">Delivery Time</option>
                                <option value="higher">Delivery Time</option>
                                <option value="higher">Restaurant Rating</option>
                                <option value="higher">Budget</option>
                            </select>
                        </div>
                    </div>
                                        
                                    
                </div>
            </div><!--End tools -->                        
                        <?php while($getResults = $getSearchResults->fetch_assoc()) { 
                             $show_more = $getResults['id'];?>
                        <div class="col-md-6">
                            <div class="strip_list wow fadeIn" data-wow-delay="0.1s">
                                    <div class="row">
                                            <div class="col-md-8 col-sm-9">
                                                    <div class="desc">
                                                            <div class="thumb_strip">
                                                                <a href="view_rest_menu.php?key=<?php echo encryptPassword($getResults['id']);?>"><img src="<?php echo $base_url . 'uploads/food_vendor_logo/'.$getResults['logo'] ?>" alt=""></a>
                                                            </div>
                                                            
                                                            <h4><?php echo $getResults['restaurant_name']; ?></h4>
                                                            <div class="type">
                                                                <?php echo $getResults['description']; ?>
                                                            </div>
                                                            
                                                            
                                                            <div class="rating">
                                                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
                                                            </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-4 col-sm-3">
                                                    <div class="go_to">
                                                            <div>
                                                                <a href="view_rest_menu.php?key=<?php echo encryptPassword($getResults['id']);?>" class="btn_1">View Menu</a>
                                                            </div>
                                                    </div>
                                            </div>
                                    </div><!-- End row-->
                            </div><!-- End strip_list-->
                        </div>
                        <?php } ?>
                        
        </div><!-- End col-md-9-->
        
    </div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->

<!-- Footer ================================================== -->
    <footer>
            <?php include_once 'footer.php';?>
        </footer>
<!-- End Footer =============================================== -->

<div class="layer"></div><!-- Mobile menu overlay mask -->
    
<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script  src="js/cat_nav_mobile.js"></script>
<script>$('#cat_nav').mobileMenu();</script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAs_JyKE9YfYLSQujbyFToZwZy-wc09w7s"></script>
<script src="js/map.js"></script>
<script src="js/infobox.js"></script>
<script src="js/ion.rangeSlider.js"></script>
<script>
    $(function () {
         'use strict';
        $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 0,
            max: 15,
            from: 0,
            to:5,
            type: 'double',
            step: 1,
            prefix: "Km ",
            grid: true
        });
    });
</script>
</body>
</html>
