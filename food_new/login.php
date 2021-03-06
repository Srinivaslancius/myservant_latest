<?php ob_start(); ?>
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html style="overflow-x:hidden">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include_once './meta_fav.php';?>
    <?php 
		error_reporting(0);

		$cart_id = decryptPassword($_GET['cart_id']);
		if(isset($_POST['login']))  { 
		    //Login here
		    $user_email = $_POST['login_email'];
		    $user_password = encryptPassword($_POST['login_password']);
		    $getLoginData = userLogin($user_email,$user_password);
		    //Set variable for session
		    if($getLoggedInDetails = $getLoginData->fetch_assoc()) {
		    	$last_login_visit = date("Y-m-d h:i:s");
		    	$login_count = $getLoggedInDetails['login_count']+1;
		    	$sql = "UPDATE `users` SET login_count='$login_count', last_login_visit='$last_login_visit' WHERE user_email = '$user_email' OR user_mobile = '$user_email' ";
		    	$row = $conn->query($sql);
		        $_SESSION['user_login_session_id'] =  $getLoggedInDetails['id'];
		        $_SESSION['user_login_session_name'] = $getLoggedInDetails['user_full_name'];
		        $_SESSION['user_login_session_email'] = $getLoggedInDetails['user_email'];
		        $_SESSION['timestamp'] = time();
		        $updateCart = "UPDATE `food_cart` SET user_id='".$_SESSION['user_login_session_id']."' WHERE session_cart_id = '".$_SESSION['CART_TEMP_RANDOM']."'";
				$updateCart1 = $conn->query($updateCart);
		        if($cart_id == 1) {
		        	header('Location: checkout.php');
		        } elseif($_GET['err']!='') { header('Location: index.php'); exit; } else { header('Location: index.php'); exit; }
		    } else {
		    	header('Location: login.php?err=log-fail');
		    }
		}
	?>
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
    <style type="text/css">
    .btn-info{
    padding-left:60px;
    padding-right:60px;
	}
	.btn-primary{
    padding-left:50px;
    padding-right:50px;
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
    	<h1>Register</h1>
         <!-- <p>One Stop Shop for all your food needs.</p>-->
         <p></p>
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Register</li>               
            </ul>
           
        </div>
    </div><!-- Position -->
    <br />
 		<?php if(isset($_GET['err']) && $_GET['err'] == 'log-success' ) {  ?>
			<div class="col-sm-4"></div>
       	  	<div class="col-sm-4 alert alert-success" style="display:block">
		      <strong>Success!</strong> Your Registration Successfully Completed.
		    </div>
		<?php }?>

	    <?php if(isset($_GET['err']) && $_GET['err'] == 'log-fail' ) {  ?>
	    <div class="col-sm-4"></div>
	    <div class="col-sm-4 alert alert-danger" style="display:block">
	      <strong>Failed!</strong> Your Login Failed.
	    </div>
	    <?php }?>
<!-- Content ================================================== -->
<div class="container margin_30_35">
        </div>
	<div class="row">
		
	<div class="col-md-1 col-sm-1">
	</div>
	<div class="col-md-5 col-sm-5 wow fadeIn" data-wow-delay="0.1s">
			<div class="feature">
				<form method="POST" class="popup-form" autocomplete="off">
				<center> <h2 class="nomargin_top" style="color:#f26226">Login</h2></center>
					<hr class="more_margin">
					<div class="row">
					<div class="col-sm-6 col-xs-6">
					  <button type="button" class="btn btn-primary"><span class=" icon-facebook-1"></span>Facebook</button>
					</div>
					<div class="col-sm-6 col-xs-6">
					<button type="button" class="btn btn-info"><span class="icon-twitter-2"></span>Twitter</button>
					</div>
					</div><br>
					<p style="text-align:center">(OR)</p>
					<label for="text">Email/Mobile:</label>				
					<input type="text" class=" form-control " name="login_email" placeholder="Email or Mobile" required>
					<label for="pwd">Password:</label>
					<input type="password" class=" form-control" name="login_password" placeholder="Password" required>
					<div class="text-left">
						<a href="forgot_password.php">Forgot Password?</a>
					</div>
					<button type="submit" name="login" class="btn btn-submit">SIGN IN</button>				
				</form>
			</div>
		</div>
		<div class="col-md-5 col-sm-5 wow fadeIn" data-wow-delay="0.1s">
			<div class="feature">
				<form class="popup-form" autocomplete="off" method="post" action="mobile_otp.php">
				<center> <h2 class="nomargin_top" style="color:#f26226">Register</h2></center>
					<hr class="more_margin">
					<input type="hidden" value="<?php echo $_GET['cart_id']?>" name="checkout_key">
					<div class="form-group">
	                	<label for="user_name">Name:</label>
						<input type="text" name="user_name" class=" form-control"  placeholder="Name" required>
					</div>
					<div class="form-group">
						<label for="user_mobile">Mobile:</label>
						<input type="tel" name="user_mobile" id="user_mobile" class=" form-control valid_mobile_num"  placeholder="Mobile Number" maxlength="10" pattern="[0-9]{10}" onkeyup="checkMobile();" required>
	                    <span id="input_status1" style="color: red;"></span>
	                </div>
                    <div class="form-group">
	                    <label for="user_email">Email:</label>
	                    <input type="email" name="user_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="user_email" class=" form-control" placeholder="Email" onkeyup="checkEmail();" required>
	                    <span id="input_status" style="color: red;"></span>
                    </div>
                    <div class="form-group">
	                    <label for="user_password">Password:</label>
	                    <input type="password" name="user_password" autocomplete="off" class=" form-control" minlength="8" id="user_password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
	                    <label for="confirm_password">Confirm Password:</label>
	                    <input type="password" name="confirm_password" class=" form-control" minlength="8" id="confirm_password" placeholder="Confirm password" onChange="checkPasswordMatch();" required>
	                    <div id="divCheckPasswordMatch" style="color:red"></div>
	                    <div id="pass-info" class="clearfix"></div>
                    </div>					
					<button type="submit" name="register" class="btn btn-submit" style="margin-top:0px">Register</button>
				</form>
			</div>
		</div>
		<div class="col-md-1 col-sm-1">
	</div>
	</div><!-- End row -->
	
	
</div><!-- End container -->


<!-- End Content =============================================== -->

<!-- Footer ================================================== -->
	<footer>
         <?php include_once 'footer.php'; ?>
		 </footer>
<!-- End Footer =============================================== -->

<div class="layer"></div><!-- Mobile menu overlay mask -->
    
<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>


<!-- This Script For validations -->
<script type="text/javascript" src="js/check_number_validations.js"></script>

<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>


<script type="text/javascript">
			
    	function checkPasswordMatch() {
		    var password = $("#user_password").val();
		    var confirmPassword = $("#confirm_password").val();
		    if (confirmPassword != password) {
		        $("#divCheckPasswordMatch").html("Passwords do not match!");
		        $("#confirm_password").val("");
		    } else {
		        $("#divCheckPasswordMatch").html("");
		    }
		}
	    function checkMobile() {
	        var user_mobile = document.getElementById("user_mobile").value;
	        if (user_mobile){
	          $.ajax({
	          type: "POST",
	          url: "user_avail_check.php",
	          data: {
	            user_mobile:user_mobile,
	          },
	          success: function (result) {
	            if (result > 0){
	            	$("#input_status1").html("<span style='color:red;'>Mobile Already Exist</span>");
	        		$('#user_mobile').val('');
	            } else {
	              $('#input_status1').html("");
	            }       
	            }
	           });          
	        }
	    }
	    function checkEmail() {
	        var user_email = document.getElementById("user_email").value;
	        if (user_email){
	          $.ajax({
	          type: "POST",
	          url: "user_avail_check.php",
	          data: {
	            user_email:user_email,
	          },
	          success: function (result) {
	            if (result > 0){
	            	$("#input_status").html("<span style='color:red;'>Email Already Exist</span>");
	        		$('#user_email').val('');
	            } else {
	              $('#input_status').html("");
	            }     
	            }
	           });          
	        }
	    }
    </script>

    
<?php include "search_js_script.php"; ?>

</body>
</html>