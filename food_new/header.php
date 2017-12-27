<?php
if($_SESSION['CART_TEMP_RANDOM'] == "") {
    $_SESSION['CART_TEMP_RANDOM'] = rand(10, 10).sha1(crypt(time())).time();
}
$session_cart_id = $_SESSION['CART_TEMP_RANDOM'];
if(isset($_SESSION['user_login_session_id']) && $_SESSION['user_login_session_id']!='') {
    $user_session_id = $_SESSION['user_login_session_id'];
    $cartItems1 = "SELECT * FROM food_cart WHERE (user_id = '$user_session_id' OR session_cart_id='$session_cart_id') AND item_quantity!='0' ";
    $cartItems = $conn->query($cartItems1);
} else {                                       
    $cartItems = getAllDataWhere('food_cart','session_cart_id',$session_cart_id);
} 
?>

<div class="container-fluid">
    <div class="row myservant_topheader">
            <div class="col-md-12">
              <div class="col-md-1">
			</div>			  
                <div class="col-md-8 col-xs-12">
                    <p><span style="margin-right:10px"><i class="icon-location"></i>Vijayawada </span>
					<span> <select style="background-color:transparent;color:white">
					<option style="color:black">English</option>
					<option style="color:black">Hindi</option>
					<option style="color:black">Telugu</option>
					</select> </span></p>
                </div>
                <div class="col-md-3 col-xs-12">
                    <p>
					<span class="icon-phone"> 9876543210</span>
                        <?php if($_SESSION['user_login_session_id'] =='') { ?>
                            <a href="login.php"><span class="icon-lock"></span> Login</a>
                            <a href="login.php"><span class="icon-user"> Register</span> </a>

                        <?php } else { ?>
                          <span class="icon-user"></span><a href="my_dashboard.php"><?php echo $_SESSION['user_login_session_name']; ?></a>
                        | <span class="icon-logout"></span><a href="logout.php">Logout</a>
						
                        <?php } ?>
						
                    </p>
                </div>

                
            </div> 
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                   
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <div class="row myseranr_header">
            <div class="col--md-3 col-sm-3 col-xs-12">
                <?php  
                if(!empty($getFoodSiteSettingsData['logo'])) { ?>
                <a href="index.php" id="logo">
                <img src="<?php echo $base_url . 'uploads/logo/'.$getFoodSiteSettingsData['logo'] ?>" alt="<?php echo $getFoodSiteSettingsData['admin_title']; ?>" data-retina="true" class="hidden-xs myservanrlogo">
                <?php } else { ?>
                <center><img src="img/logo-mobile.png"  alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm"></center>
                <?php }?>
                </a>
            </div>
            <div class="col-md-6 col-xs-9">
                <form method="post" action="list.php" autocomplete="off">
                    <div id="custom-search-input">
                        <div class="input-group">
                            <input type="text" class=" search-query" placeholder="Your Address or postal code" required name="searchKey" id="search-box">
                            <div id="suggesstion-box"></div>
                            <span class="input-group-btn">
                            <input type="submit" class="btn_search" value="submit" name="searchFood">
                            </span>
                        </div>
                    </div>
                </form>
            </div>

             <div class="col-md-2 col-xs-2">
             </div>
            <div class="col-md-1 col-xs-1">
                <a href="cart.php"><button type="button" class="btn btn-danger" style="background-color:transparent;border-color:white"><span class=" icon-cart" style="font-size:18px"></span> <span class="badge" style="font-size:10px">(<?php echo $cartItems->num_rows; ?>)</span></button></a>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->