
<?php include_once 'meta.php';?>
	<style>
	.button1 {
    background-color: #fe6003;
    border-color: #fe6003;
    color: white;
    padding: 2px 19px;
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
								<a href="terms&conditions.php" title="">Change Password</a>
								
							</li>
							
						</ul><!-- /.breacrumbs -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-breadcrumb -->

		<section class="flat-term-conditions">
			<div class="container">
				<div class="row">
    
    <div class="col-md-3 col-sm-3" id="sidebar">
    <aside>
           <div class="box_style_cat">
       		<?php include_once 'dashboard_strip.php';?>
            </div>
        </aside>   
     </div><!-- End col-md-3 -->
        
        <div class="col-sm-9">       	 
         
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
                                            
					</div>					
					 <div class="form-group">
            <div id="divCheckPasswordMatch" style="color:red"></div>
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
			</div><!-- /.container -->
		</section><!-- /.flat-term-conditions -->
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