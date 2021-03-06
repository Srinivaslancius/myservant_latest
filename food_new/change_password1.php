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
    	 <h1>Change Password</h1>
         <p></p>
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<div id="position">
    <div class="container">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#0">Change Password</a></li>
        </ul>
        
    </div>
</div><!-- Position -->

<?php 
  if($_SESSION['user_login_session_id'] == '') {
      header ("Location: logout.php");
  }
  if(isset($_POST["submit"]) && $_POST["submit"]!="") {
      $uid = $_SESSION["user_login_session_id"];
      $getUserPwd = getIndividualDetails('users','id',$uid);

      if($_POST['currentPassword'] == decryptPassword($getUserPwd['user_password'])){
          $encNewPass = encryptPassword($_POST["confirmPassword"]);
          $sql1 = "UPDATE users SET user_password = '$encNewPass' WHERE  id = '$uid'";
          if($conn->query($sql1) === TRUE){             
              echo "<script type='text/javascript'>window.location='change_password1.php?succ=log-success'</script>";
          }               
      } else {               
         header('Location: change_password1.php?err=log-fail');
      }
  }
?>
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
        <?php if(isset($_GET['succ']) && $_GET['succ'] == 'log-success' ) {  ?>                
            <div class="alert alert-success" style="top:10px; display:block" id="set_valid_msg">
              <strong>Success!</strong> Your Password Changed Successfully.
            </div>               
       <?php }?>

        <?php if(isset($_GET['err']) && $_GET['err'] == 'log-fail' ) {  ?>            
          <div class="alert alert-danger" style="top:10px; display:block" id="set_valid_msg">
            <strong>Failed!</strong> Current Password Is Not Correct.
          </div>     
        <?php }?>
       	 
         <div class="panel-group">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="nomargin_top">Change Password</h3>
                    </div>
                      <div class="panel-body">
                 <form method="post">
                  <div class="col-md-12 col-sm-12">				 
				   <div class="col-md-6 col-sm-6">				  
    					<div class="form-group">
    						<label for="cur-password">Current password</label>
    						<input type="password" class="form-control" id="cur-password"  name="currentPassword" placeholder="*******" autocomplete="off">                                           
    					</div>					
    					 <div class="form-group">
    					 <label for="new-password">New password</label>
    						<input type="password" minlength="8" class="form-control" minlength="8" name="newPassword" id="user_password" placeholder="*********" autocomplete="off">                                           
    					</div>					
    					<div class="form-group">
    					<label for="new-repassword">Repeat password</label>
    						<input type="password" minlength="8" class="form-control" minlength="8" name="confirmPassword" id="confirm_password" placeholder="********" autocomplete="off" onChange="checkPasswordMatch();">
                <div id="divCheckPasswordMatch" style="color:red"></div>                              
    					</div>					
    					 <div class="form-group">
    						 <button type="submit" value="Submit" name="submit" class="button1">Update</button>					
    					</div>					
                  </div>
				   <div class="col-md-6 col-sm-6">
				   </div>
                               
                   </div>        
          </form>
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

<!-- SPECIFIC SCRIPTS -->
<script src="js/theia-sticky-sidebar.js"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>
<script type="text/javascript">
  function checkPasswordMatch() {
      var password = $("#user_password").val();
      var confirmPassword = $("#confirm_password").val();
      if (confirmPassword != password) {
          $("#divCheckPasswordMatch").html("Passwords do not match!");
          $("#user_password").val("");
          $("#confirm_password").val("");
      } else {
          $("#divCheckPasswordMatch").html("");
      }
  }
  $(document).ready(function () {
      setTimeout(function () {
        $('#set_valid_msg').hide();
      }, 2000);
    });
</script>

</body>

</html>