<?php

include "../admin_includes/config.php";
require_once dirname( __FILE__ ) . '/payu.php';

if(isset($_POST["submit"]) && $_POST["submit"]!="") {

	//echo "<pre>"; print_r($_POST); die;
	$first_name = $_POST["firstname_order"];
	$last_name = $_POST["lastname_order"];	
	$mobile = $_POST["tel_order"];
	$email = $_POST["email_order"];	
	$address = $_POST["address_order"];
	$city = $_POST["city_order"];
	$postal_code=$_POST["pcode_oder"];	
	$order_note = $_POST["order_note"];

	$sub_total = $_POST["sub_total"];
	$order_total = $_POST["order_total"];
	//$coupon_code = $_POST["coupon_code"];
	//$coupon_code_type = $_POST["coupon_code_type"];
	//$discount_money = $_POST["discount_money"];
	$payment_group = $_POST["pay_mn"];
	$order_date = date("Y-m-d h:i:s");
	$string1 = str_shuffle('abcdefghijklmnopqrstuvwxyz');
	$random1 = substr($string1,0,3);
	$string2 = str_shuffle('1234567890');
	$random2 = substr($string2,0,3);
	$contstr = "MYSER-FOOD";
	$order_id = $contstr.$random1.$random2;
	$service_tax = $_POST["service_tax"];
	$itemCount = count($_POST["food_item_id"]);
	//Saving user id and coupon id
	$user_id = $_SESSION['user_login_session_id'];
	$payment_status = 2; //In progress
	$country = 99;
	$restaurant_id = $_POST["restaurant_id"];
	
	$_SESSION['order_last_session_id'] = $order_id;

	for($i=0;$i<$itemCount;$i++) {
		//Generate sub randon id
		$string1 = str_shuffle('abcdefghijklmnopqrstuvwxyz');
		$random1 = substr($string1,0,3);
		$string2 = str_shuffle('1234567890');
		$random2 = substr($string2,0,3);
		$date = date("ymdhis");
		$contstr = "MYSER-FOOD";
		$sub_order_id = $contstr.$random1.$random2.$date;
		$orders = "INSERT INTO food_orders (`user_id`,`first_name`, `last_name`, `email`, `mobile`, `address`, `country`, `postal_code`, `city`, `order_note`, `category_id`, `product_id`, `item_weight_type_id`, `item_price`, `item_quantity`,`restaurant_id`, `sub_total`, `order_total`,  `payment_method`,`lkp_payment_status_id`,`service_tax`, `order_id`,`order_sub_id`, `created_at`) VALUES ('$user_id','$first_name','$last_name', '$email','$mobile','$address','$country','$postal_code','$city','$order_note','" . $_POST["food_category_id"][$i] . "','" . $_POST["food_item_id"][$i] . "','" . $_POST["item_weight_type_id"][$i] . "','" . $_POST["item_price"][$i] . "','" . $_POST["item_quantity"][$i] . "',$restaurant_id,'$sub_total','$order_total','$payment_group','$payment_status','$service_tax', '$order_id','$sub_order_id','$order_date')";
		$servicesOrders = $conn->query($orders);
	}
}

function payment_success() {
	/* Payment success logic goes here. */
	//echo "Congratulations !! The Payment is successful.";		
	header("Location: online_order_success.php");
}

function payment_failure() {
	/* Payment failure logic goes here. */
	//echo "We are sorry. The Payment has failed";
	header("Location: online_order_failure.php");
}



/* Payments made easy. */


pay_page( array ('key' => '71tFEF', 'txnid' => $_POST['txnid'], 'amount' => $_POST['amount'],
			'firstname' => $_POST['firstname'], 'email' => $_POST['email'], 'phone' => $_POST['phone'],
			'productinfo' => $_POST['productinfo'], 'surl' => $_POST['surl'], 'furl' => $_POST['furl']), 
			'B0Gnqt1g' );

/* Merchant Page. ( All the html code ) */


/* And we are done. */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
document.hdfc_pay_form.submit();
$(function() {
$(".preload").fadeOut(2000, function() {
    $(".content").fadeIn(1000);        
	});
});
	
</script>
<div class="preload"><img src="http://i.imgur.com/KUJoe.gif">
</div>
<style type="text/css">
.content {display:none;}
.preload { width:100px;
    height: 100px;
    position: fixed;
    top: 50%;
    left: 50%;}

</style>