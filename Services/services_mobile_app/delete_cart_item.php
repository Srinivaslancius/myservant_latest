<?php 
error_reporting(1);
include "../../admin_includes/config.php";
include "../../admin_includes/common_functions.php";
//Set Array for list
$response = array();

if (isset($_REQUEST['userId']) && !empty($_REQUEST['cartId']) ) {
	
	$user_id = $_REQUEST['userId'];
	$cart_id = $_REQUEST['cartId'];	
	
	$deleteCart = "DELETE FROM services_cart WHERE user_id='$user_id' AND id='$cart_id' ";
	if($conn->query($deleteCart) === TRUE) {

	    $getCartServicesData = getAllDataWhere('services_cart','user_id',$user_id); 
	    $response["cartCount"] = $getCartServicesData->num_rows;
	    $response["success"] = 0;
	    $response["message"] = "Success";
	} else {

	    $response["success"] = 1;
	    $response["message"] = "Error";
	}    
          
} else {
    $response["success"] = 2;
    $response["message"] = "Required field(s) is missing";
}

echo json_encode($response);

?>