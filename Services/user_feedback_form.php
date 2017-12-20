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
<?php  
error_reporting(0);
if (!isset($_POST['submit']))  {
  //If fail
  //echo "fail";
}else  {

  //If success
  //echo "<pre>";print_r($_POST);exit;
  $title = $_POST['title'];
  $description = $_POST['description'];
  $fileToUpload = uniqid().$_FILES["fileToUpload"]["name"];
  if($fileToUpload!='') {

    $target_dir = "../uploads/services_testimonials_images/";
    $target_file = $target_dir . basename($fileToUpload);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO services_testimonials (`title`, `description`, `image`, `lkp_status_id`) VALUES ('$title', '$description','$fileToUpload', 1)";
        if($conn->query($sql) === TRUE){
           echo "<script type='text/javascript'>window.location='user_feedback_form.php?succ=log-success'</script>";
        } else {
           header('Location: user_feedback_form.php?err=log-fail');
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

  }
}
?>
	<main>
		<!-- Slider -->
		 <div class="container-fluid page-title">
			<?php  
    if(!empty($getTestimonialsBanner['image'])) { ?>  
        <div class="row">
          <img src="<?php echo $base_url . 'uploads/services_content_pages_images/'.$getTestimonialsBanner['image'] ?>" class="img-responsive">
        </div>
      <?php } else { ?>
        <div class="row">
          <img src="img/slides/slide_1.jpg" class="img-responsive">
        </div>
      <?php }?>
    	</div>
		<div class="container margin_60">
<div class="main_title">
				<h2>FEEDBACK FORM</h2>
				
			</div>
      <?php if(isset($_GET['succ']) && $_GET['succ'] == 'log-success' ) {  ?>
                <div class="col-sm-3"></div>
                <div class="col-sm-6 alert alert-success" style="top:10px; display:block">
                  <strong>Success!</strong> Thank You for Your Feedback.
                </div>
                <div class="col-sm-3"></div>
            <?php }?>
        <?php if(isset($_GET['err']) && $_GET['err'] == 'log-fail' ) {  ?>
                <div class="col-sm-3"></div>
                <div class="col-sm-6 alert alert-danger" style="top:10px; display:block">
                  <strong>Failed!</strong> Data Updation Failed.
                </div>
                <div class="col-sm-3"></div>
        <?php }?>

			<div class="row"> 
<div class="col-sm-1">
</div>			
			 <div class="col-sm-10">
					<div class="feature">
					<div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form autocomplete="off" data-toggle="validator" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Title</label>
                    <input type="text" name="title" class="form-control" id="form-control-2" placeholder="title" data-error="Please enter title" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Logo</label>
                    <img id="output" height="100" width="100"/>
                    <label for="exampleFormControlFile1">                    
                        <input id="form-control-22" class="file-upload-input service_provider_business" type="file" accept="image/*" name="fileToUpload" id="fileToUpload" multiple="multiple" required>
                      </label>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Descriptiopn</label>
                    <textarea name="description" class="form-control" placeholder="Descriptiopn" data-error="Please enter Descriptiopn." required></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                
                  <button type="submit" name="submit" value="submit" class="btn btn-default btn-block">Submit</button>
                </form>
              </div>
            </div>
				</div>
                 
			</div>
			<div class="col-sm-1">
</div>
			<!-- End row -->
			</div>
			
		</div>
		
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