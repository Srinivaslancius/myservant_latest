<?php 
include "admin_includes/config.php";
include "admin_includes/common_functions.php";
//echo "<pre>"; print_r($_POST); die;
//Cart id generating using sessions
if($_SESSION['CART_TEMP_RANDOM'] == "") {

	$_SESSION['CART_TEMP_RANDOM'] = rand(10, 10).sha1(crypt(time())).time();
}
// if($_SESSION['user_login_session_id'] == "") {

// 		$user_id = 0;
// } else {
//         $user_id = $_SESSION['user_login_session_id'];
// }
$user_id = 0;

$session_cart_id = $_SESSION['CART_TEMP_RANDOM'];
$category_id = $_POST['category_id'];
$sub_category_id = $_POST['sub_category_id'];
$product_id = $_POST['product_id'];
$product_price = 100;
$product_name = $_POST['product_name'];
$product_weight_type = 1;
$created_at = date('Y-m-d H:i:s', time() + 24 * 60 * 60);
$city_id = 1;
$product_quantity = 1;
$device_id = 1;

$checkCartItems = "SELECT * FROM grocery_cart WHERE product_id = '$product_id' AND session_cart_id = '$session_cart_id'";
$getCartCount = $conn->query($checkCartItems);
$getTotalCount = $getCartCount->num_rows;
if($getTotalCount > 0) {
	echo $getTotalCount;
} else {
	$saveItems = "INSERT INTO `grocery_cart`(`user_id`, `session_cart_id`, `category_id`, `sub_category_id`, `product_id`, `product_name`, `product_price`, `product_weight_type`,`product_quantity`, `lkp_city_id`, `created_at`,`device_id`) VALUES ('$user_id','$session_cart_id','$category_id','$sub_category_id','$product_id','$product_name','$product_price','$product_weight_type','$product_quantity','$city_id','$created_at','$device_id')";
	$saveCart = $conn->query($saveItems);
	echo $getTotalCount;
} 

?>