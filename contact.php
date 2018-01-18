<?php include_once 'meta.php';?>

<body class="header_sticky">
	<div class="boxed">

		<div class="overlay"></div>

		<!-- Preloader -->
		<div class="preloader">
			<div class="clear-loading loading-effect-2">
				<span></span>
			</div>
		</div><!-- /.preloader -->

		<section id="header" class="header">
			<div class="header-top">
			<?php include_once 'top_header.php';?>
			</div><!-- /.header-top -->
			<div class="header-middle">
			<?php include_once 'middle_header.php';?>
			</div><!-- /.header-middle -->
			<div class="header-bottom">
			<?php include_once 'bottom_header.php';?>
			</div><!-- /.header-bottom -->
		</section><!-- /#header -->
		<section class="flat-breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumbs">
							<li class="trail-item">
								<a href="index.php" title="">Home</a>
								<span><img src="images/icons/arrow-right.png" alt=""></span>
							</li>
							<li class="trail-item">
								<a href="contact.php" title="">Contact</a>
								
							</li>
							
						</ul><!-- /.breacrumbs -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-breadcrumb -->

		<section class="flat-map">
            <div class="container">
            	<div class="row">
            		<div class="col-md-12">
            			<div id="flat-map" class="pdmap">
				           	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.580289180194!2d80.64353381474554!3d16.496776588618033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35fabb6eff70cd%3A0xbc7d945d41d79aa6!2sCMR+ENTERPRISES+PVT.LTD!5e0!3m2!1sen!2sin!4v1511846045669" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				            <div class="gm-map">                
				                <div class="map"></div>                        
				            </div>
            			</div><!-- /#flat-map -->
            		</div><!-- /.col-md-12 -->
            	</div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /#flat-map -->

        <section class="flat-iconbox style4">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-6 col-lg-3">
        				<div class="iconbox style2">
        					<div class="box-header">
        						<div class="image">
        							<img src="images/icons/address.png" alt="">
        						</div>
        						<div class="title">
        							<h3>Address</h3>
        						</div>
        					</div><!-- /.box-header -->
        					<div class="box-content">
        						<p>
        							#40-15/2-19, Brundavan Colony, Vijayawda,Andhra Pradesh, India - 520010.
        						</p>
        					</div><!-- /.box-content -->
        				</div><!-- /.iconbox style2 -->
        			</div><!-- /.col-md-6 col-lg-3 -->
        			<div class="col-md-6 col-lg-3">
        				<div class="iconbox style2">
        					<div class="box-header">
        						<div class="image">
        							<img src="images/icons/phone.png" alt="">
        						</div>
        						<div class="title">
        							<h3>Phone</h3>
        						</div>
        					</div><!-- /.box-header -->
        					<div class="box-content">
        						<p>
        							+918897725019
        						</p>
        						
        					</div><!-- /.box-content -->
        				</div><!-- /.iconbox style2 -->
        			</div><!-- /.col-md-6 col-lg-3 -->
        			<div class="col-md-6 col-lg-3">
        				<div class="iconbox style2">
        					<div class="box-header">
        						<div class="image">
        							<img src="images/icons/mail-2.png" alt="">
        						</div>
        						<div class="title">
        							<h3>Email</h3>
        						</div>
        					</div><!-- /.box-header -->
        					<div class="box-content">
        						<p>
        							orders@myservant.com
        						</p>
        					</div><!-- /.box-content -->
        				</div><!-- /.iconbox style2 -->
        			</div><!-- /.col-md-6 col-lg-3 -->
        			<div class="col-md-6 col-lg-3">
        				<div class="iconbox style2">
        					<div class="box-header">
        						<div class="image">
        							<img src="images/icons/share.png" alt="">
        						</div>
        						<div class="title">
        							<h3>Follow Us</h3>
        						</div>
        					</div><!-- /.box-header -->
        					<div class="box-content">
        						<ul class="social-list style2">
									<li>
										<a href="#" title="">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-pinterest" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-dribbble" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-google" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
        					</div><!-- /.box-content -->
        				</div><!-- /.iconbox style2 -->
        			</div><!-- /.col-md-6 col-lg-3 -->
        		</div><!-- /.row -->
        	</div><!-- /.container -->
        </section><!-- /.flat-iconbox style4 -->
<?php

if(!empty($_POST['name_contact']) && !empty($_POST['last_name_contact']) && !empty($_POST['email_contact']) && !empty($_POST['phone_contact']))  {

$getSiteSettings1 = getAllDataWhere('grocery_site_settings','id','1'); 
$getSiteSettingsData1 = $getSiteSettings1->fetch_assoc();
    $name_contact = $_POST['name_contact'];
    $last_name_contact = $_POST['last_name_contact'];
    $email_contact = $_POST['email_contact'];
    $phone_contact = $_POST['phone_contact'];
    $message_contact = $_POST['message_contact'];

$dataem = $getSiteSettingsData1["contact_email"];
//$to = "srinivas@lanciussolutions.com";
$to = $dataem;
$subject = "Myservent - Contact Us ";
$message = '';      
$message .= '<body>
    <div class="container" style=" width:50%;border: 5px solid #fe6003;margin:0 auto">
    <header style="padding:0.8em;color: white;background-color: #fe6003;clear: left;text-align: center;">
     <center><img src='.$base_url . "uploads/logo/".$getSiteSettingsData1["logo"].' class="logo-responsive"></center>
    </header>
    <article style=" border-left: 1px solid gray;overflow: hidden;text-align:justify; word-spacing:0.1px;line-height:25px;padding:15px">
        <h1 style="color:#fe6003">User Feedback Information.</h1>
        <h4>First Name: </h4><p>'.$name_contact.'</p>
        <h4>Last Name: </h4><p>'.$last_name_contact.'</p>
        <h4>Email: </h4><p>'.$email_contact.'</p>
        <h4>Mobile: </h4><p>'.$phone_contact.'</p>
        
        <h4>Message: </h4><p>'.$message_contact.'</p>
    </article>
    <footer style="padding: 1em;color: white;background-color: #fe6003;clear: left;text-align: center;">'.$getFoodSiteSettingsData['footer_text'].'</footer>
    </div>

    </body>';

//$sendMail = sendEmail($to,$subject,$message,$email_contact);
$name = "My Servant";
$from = $email_contact;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  
$headers .= 'From: '.$name.'<'.$from.'>'. "\r\n";
if(mail($to, $subject, $message, $headers)) {
    echo  "<script>alert('Thank You For Your feedback');window.location.href('contact.php');</script>";
}

}
?>
        <section class="flat-contact">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-2">
        			</div>
        			<div class="col-lg-8 col-md-12">
        				<div class="form-contact center">
        					<div class="form-contact-header">
        						<h3>Leave us a Message</h3>
        					<!--	<p>
        							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
        						</p>-->
        					</div><!-- /.form-contact-header -->
        					<div class="form-contact-content">
        						<form method="post" action="" id="form-contact" accept-charset="utf-8">
									<div class="form-box one-half name-contact">
										<label for="name-contact">First name*</label>
										<input type="text" id="name-contact" name= "name_contact" placeholder="First name" required>
									</div>
									<div class="form-box one-half password-contact">
										<label for="password-contact">Last name*</label>
										<input type="text" id="password-contact" name="last_name_contact" placeholder="Last name" required>
									</div>
									<div class="form-box one-half name-contact">
										<label for="name-contact">Email*</label>
										<input type="text" id="email_contact" name="email_contact" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" required>
									</div>
									<div class="form-box one-half name-contact">
										<label for="name-contact">Mobile*</label>
										<input type="text" maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" name="phone_contact" placeholder="Mobile Number" required>
									</div>
									<div class="form-box">
										<label for="comment-contact">Comment</label>
										<textarea name="message_contact" rows="4" id="comment"></textarea>
									</div>
									<div class="form-box">
										<button type="submit" class="contact">Send</button>
									</div>
								</form>
        					</div><!-- /.form-contact-content -->
        				</div><!-- /.form-contact center -->
        			</div><!-- /.col-lg-8 col-md-12 -->
        			<div class="col-lg-2">
        			</div>
        		</div><!-- /.row -->
        	</div><!-- /.container -->
        </section><!-- /.flat-contact -->
		<footer>
			<?php include_once 'footer.php';?>
		</footer><!-- /footer -->

		<section class="footer-bottom">
			<?php include_once 'footer_bottom.php';?>
		</section><!-- /.footer-bottom -->


	</div><!-- /.boxed -->

		<!-- Javascript -->
		<script type="text/javascript" src="javascript/jquery.min.js"></script>
		<script type="text/javascript" src="javascript/tether.min.js"></script>
		<script type="text/javascript" src="javascript/bootstrap.min.js"></script>
		<script type="text/javascript" src="javascript/waypoints.min.js"></script>
		<script type="text/javascript" src="javascript/jquery.circlechart.js"></script>
		<script type="text/javascript" src="javascript/easing.js"></script>
		<script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="javascript/owl.carousel.js"></script>
		<script type="text/javascript" src="javascript/smoothscroll.js"></script>
		<script type="text/javascript" src="javascript/jquery-ui.js"></script>
		<script type="text/javascript" src="javascript/jquery.mCustomScrollbar.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&region=GB"></script>
	   	<script type="text/javascript" src="javascript/gmap3.min.js"></script>
	   	<script type="text/javascript" src="javascript/waves.min.js"></script>
		<script type="text/javascript" src="javascript/jquery.countdown.js"></script>

		<script type="text/javascript" src="javascript/main.js"></script>

</body>	
</html>