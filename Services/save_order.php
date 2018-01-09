<?php 
error_reporting(1);
include "../../admin_includes/config.php";
include "../../admin_includes/common_functions.php";

if($_SERVER['REQUEST_METHOD']=='POST'){

	if (isset($_REQUEST['user_id']) && !empty($_REQUEST['user_id']) && !empty($_REQUEST['first_name']) && !empty($_REQUEST['last_name']) && !empty($_REQUEST['email']) && !empty($_REQUEST['mobile']) && !empty($_REQUEST['state']) && !empty($_REQUEST['district']) && !empty($_REQUEST['city']) && !empty($_REQUEST['postal_code']) && !empty($_REQUEST['location']) && !empty($_REQUEST['address']) ) {

		$first_name = $_REQUEST["first_name"];
		$last_name = $_REQUEST["last_name"];
		$email = $_REQUEST["email"];
		$mobile = $_REQUEST["mobile"];
		$state = $_REQUEST["state"];
		$district = $_REQUEST["district"];
		$city = $_REQUEST["city"];
		$postal_code=$_REQUEST["postal_code"];
		$location = $_REQUEST["location"];
		$address = $_REQUEST["address"];
		$order_note = $_REQUEST["order_note"];
		$sub_total = $_REQUEST["sub_total"];
		$order_total = $_REQUEST["order_total"];		
		$payment_group = $_REQUEST["payment_group"];
		$order_date = date("Y-m-d h:i:s");
		$string1 = str_shuffle('abcdefghijklmnopqrstuvwxyz');
		$random1 = substr($string1,0,3);
		$string2 = str_shuffle('1234567890');
		$random2 = substr($string2,0,3);
		$contstr = "MYSER-SERVICES";
		$order_id = $contstr.$random1.$random2;
		$service_tax = $_POST["service_tax"];
		$servicesCount = count($_POST["service_id"]);
		//Saving user id and coupon id
		$user_id = $_SESSION['user_login_session_id'];
		$payment_status = 2; //In progress
		
		for($i=0;$i<$servicesCount;$i++) {
			//Generate sub randon id
			$string1 = str_shuffle('abcdefghijklmnopqrstuvwxyz');
			$random1 = substr($string1,0,3);
			$string2 = str_shuffle('1234567890');
			$random2 = substr($string2,0,3);
			$date = date("ymdhis");
			$contstr = "MYSER-SERVICES";
			$sub_order_id = $contstr.$random1.$random2.$date;
			$orders = "INSERT INTO services_orders (`user_id`,`first_name`, `last_name`, `email`, `mobile`, `state`, `district`, `city`, `postal_code`, `location`, `address`, `order_note`, `category_id`, `sub_category_id`,  `group_id`, `service_id`, `service_price_type_id`,`service_price`,`order_price`,`service_quantity`, `service_selected_date`, `service_selected_time`, `sub_total`, `order_total`, `coupon_code`, `coupon_code_type`, `discount_money`, `payment_method`,`lkp_payment_status_id`,`service_tax`, `order_id`,`order_sub_id`, `created_at`) VALUES ('$user_id','$first_name','$last_name','$email','$mobile','$state','$district','$city','$postal_code','$location','$address','$order_note','" . $_REQUEST["category_id"][$i] . "','" . $_REQUEST["sub_cat_id"][$i] . "','" . $_REQUEST["group_id"][$i] . "','" . $_REQUEST["service_id"][$i] . "','" . $_REQUEST["service_price_type_id"][$i] . "','" . $_REQUEST["service_price"][$i] . "','" . $_REQUEST["service_price"][$i] . "','" . $_REQUEST["service_quantity"][$i] . "','" . $_REQUEST["service_selected_date"][$i] . "','" . $_REQUEST["service_selected_time"][$i] . "','$sub_total','$order_total',UPPER('$coupon_code'),'$coupon_code_type','$discount_money','$payment_group','$payment_status','$service_tax', '$order_id','$sub_order_id','$order_date')";
			$servicesOrders = $conn->query($orders);
		}
		$response["success"] = 0;
    	$response["message"] = "Success";
	} else {

		$response["success"] = 2;
    	$response["message"] = "Required field(s) is missing";		
	}
} else {
	$response["success"] = 3;
	$response["message"] = "Invalid request";
}

echo json_encode($response);

?>