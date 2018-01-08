<?php 
error_reporting(1);
include "../../admin_includes/config.php";
include "../../admin_includes/common_functions.php";
//Set Array for list
$response = array();

if (isset($_REQUEST['userId'])  ) {
	
	$user_id = $_REQUEST['userId'];
	$response["lists"] = array();
	$getCartFoodData = getAllDataWhere('food_cart','user_id',$user_id); 
	if ($getCartFoodData->num_rows > 0) {

		while($row = $getCartFoodData->fetch_assoc()) {
		$lists = array();
		$lists["cartId"] = $row["id"];	
		$lists["productId"]    = $row["food_item_id"];
		$lists["itemQuantity"] = $row["item_quantity"];	
		$lists["itemPrice"] = $row["item_price"];	
		$lists["categoryId"] = $row["food_category_id"];
		$lists["restaurantId"] = $row["restaurant_id"];
		$proName= getIndividualDetails('food_products','id',$row['food_item_id']);
		$lists["productName"] = $proName['product_name'];		

		$getPriceDetails = getAllDataWhere('food_product_weight_prices','product_id',$row["food_item_id"]);
    	$getPriceDet = array();
    	while($getPriceDet = $getPriceDetails->fetch_assoc()) {
    		$lists["price"] .=  round($getPriceDet['admin_price'] .",");
    		$lists["priceTypeId"] .=  $getPriceDet['id'] .",";
	    	$getWeights = getIndividualDetails('food_product_weights','id',$getPriceDet['weight_type_id']);
	    	$lists["weightTypeId"] .=  $getWeights['id'] .",";
    		$lists["weightType"] .=  $getWeights['weight_type'] .",";		    		
    	}

		array_push($response["lists"], $lists);
	}
	$response["success"] = 0;
	$response["message"] = "Success";
	} else {

		$response["success"] = 1;
	    $response["message"] = "No items in your cart!";	   
	}	
          
} else {
    $response["success"] = 2;
    $response["message"] = "Required field(s) is missing";
}

echo json_encode($response);

?>