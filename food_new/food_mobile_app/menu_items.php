<?php 
error_reporting(1);
include "../../admin_includes/config.php";
include "../../admin_includes/common_functions.php";
include "../../admin_includes/food_common_functions.php";
//Set Array for list
$lists = array();
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){

	if(isset($_REQUEST['restaurantId']) && !empty($_REQUEST['restaurantId']) && !empty($_REQUEST['categoryId'])) {

		$getItemsByCat = getFoodItemsByCategory('food_products','restaurant_id',$getRestKey,'category_id',$getCatName['id']);
		if ($getItemsByCat->num_rows > 0) {
				$response["lists"] = array();
				while($row = $getItemsByCat->fetch_assoc()) {

					$productId = $getItemsByCategory['id'];
					$getCatName = getIndividualDetails('food_category','id',$row['category_id']);
					//Chedck the condioton for emptty or not		
					$lists = array();
					$lists["productId"]    = $row['id'];
			    	$lists["productName"]   = $row["product_name"];	
			    	$lists["productDesc"] = strip_tags($row["specifications"]); 		    	
			    	$lists["productImage"] = $base_url."uploads/food_product_images/".$row["product_image"];
			    	$lists["categoryName"] = $getCatName["category_name"];
			    	array_push($response["lists"], $lists);		
				}
				
				$response["success"] = 0;
				$response["message"] = "Success";				
		} else {
		    $response["success"] = 1;
		    $response["message"] = "No Records found";	   
		}
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