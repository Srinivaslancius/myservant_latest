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
<?php $getAllHelpCenterData = getAllDataWhere('food_content_pages','id',15);
          $getHelpCenterData = $getAllHelpCenterData->fetch_assoc();
?>
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short"  data-parallax="scroll" data-image-src="img/sub_header_home.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
        <div id="sub_content">
         <h1><?php echo $getHelpCenterData['title']; ?></h1>
         <p><?php echo $getHelpCenterData['meta_title']; ?></p>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><?php echo $getHelpCenterData['title']; ?></li>
                
            </ul>
        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="main_title margin_mobile">
            <h2 class="nomargin_top"><?php echo $getHelpCenterData['title']; ?></h2>
        </div>  
            <div class="feature_2">
    <div class="row">         
        <div class="col-md-12 col-xs-12">        
         <div class="panel-group" id="payment">
            <?php $getHelpCentersData = getAllDataWhere('food_faqs','lkp_status_id',0); 
                        while($getHelpCenters = $getHelpCentersData->fetch_assoc()) { ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $getHelpCenters['id'];?>"><?php echo $getHelpCenters['question'];?><i class="indicator pull-right  <?php if($getHelpCenters['id']==1) { echo "icon-minus"; } else { echo "icon-plus";  } ?>"></i></a>
                              </h4>
                            </div>
                            <div id="collapse<?php echo $getHelpCenters['id'];?>" class="panel-collapse collapse  <?php if($getHelpCenters['id']==1) { echo "in"; } ?>">
                                <div class="panel-body"><?php echo $getHelpCenters['answer'];?></div>
                            </div>
                        </div><br>
                        <?php } ?>

                </div><!-- End panel-group -->
             
        </div>
        
    </div>
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
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="js/theia-sticky-sidebar.js"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>
<script>
$('#faq_box a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            var target = this.hash;
            var $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 120
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });
</script>

</body>
</html>