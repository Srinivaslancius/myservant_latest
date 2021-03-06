<?php
include "admin_includes/config.php";
include "admin_includes/common_functions.php";
//echo "<pre>"; print_r($_POST['price']); 

// note the differences in the array keys for price filetr checking here 
if(isset($_POST['price'])) { 
    $array_values = array_values($_POST['price']);
} else {
    $array_values = array_values($_POST['product_price']);
}
$indFirstval = array_shift($array_values); 
$indLastval = array_pop($array_values); 
$piece1 = explode(" - ", $indFirstval);
$piece2 = explode(" - ", $indLastval);
$getMinPriceVal = $piece1[0];
$getMaxPriceVal = $piece2[1];

if($getMaxPriceVal=='') {
    $sendMinPrice = $piece1[0];
    $sendMaxPrice = $piece1[1];
} else {
    $sendMinPrice = $piece1[0];
    $sendMaxPrice = $piece2[1];
}
// echo $sendMinPrice .'-'. $sendMaxPrice;
// die;

if($_SESSION['city_name'] == '') {
    $lkp_city_id = 1;
} else {
    $getCities1 = getIndividualDetails('grocery_lkp_cities','city_name',$_SESSION['city_name']);
    $lkp_city_id = $getCities1['id'];
}

if(isset($_POST['price'])) {
    $where_condition = "WHERE lkp_status_id = 0 AND id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = '$lkp_city_id' AND (selling_price BETWEEN '$sendMinPrice' AND '$sendMaxPrice'))  ORDER BY id DESC";
} elseif(isset($_POST['product_price']) && isset($_POST['category_id'])) {
    $where_condition = "WHERE grocery_category_id = '".$_POST['category_id']."' AND lkp_status_id = 0 AND id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = '$lkp_city_id' AND (selling_price BETWEEN '$sendMinPrice' AND '$sendMaxPrice'))  ORDER BY id DESC";
} elseif(isset($_POST['product_price']) && isset($_POST['sub_category_id'])) {
    $where_condition = "WHERE grocery_sub_category_id = '".$_POST['sub_category_id']."' AND lkp_status_id = 0 AND id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = '$lkp_city_id' AND (selling_price BETWEEN '$sendMinPrice' AND '$sendMaxPrice'))  ORDER BY id DESC";
} elseif($_POST['product_price'] == ''  && isset($_POST['category_id'])) {
    $where_condition = "WHERE grocery_category_id = '".$_POST['category_id']."' AND lkp_status_id = 0 AND id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = '$lkp_city_id')  ORDER BY id DESC";
} elseif($_POST['product_price'] == '' && isset($_POST['sub_category_id'])) {
    $where_condition = "WHERE grocery_sub_category_id = '".$_POST['sub_category_id']."' AND lkp_status_id = 0 AND id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = '$lkp_city_id')  ORDER BY id DESC";
} else {
    $where_condition = "WHERE lkp_status_id = 0 AND id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = $lkp_city_id)  ORDER BY id DESC LIMIT 0,10";
}
$getProducts = "SELECT * FROM grocery_products $where_condition";
$getProducts1 = $conn->query($getProducts);
   
while($getProductsData = $getProducts1->fetch_assoc()) {
$getProductNames = getIndividualDetails('grocery_product_name_bind_languages','product_id',$getProductsData['id']);
$getProductImages = getIndividualDetails('grocery_product_bind_images','product_id',$getProductsData['id']);
$img = $base_url . 'grocery_admin/uploads/product_images/'.$getProductImages['image'];
 $getPrices = "SELECT * FROM grocery_product_bind_weight_prices WHERE product_id ='".$getProductsData['id']."' AND lkp_status_id = 0 AND lkp_city_id ='$lkp_city_id' ORDER BY selling_price  ";
$getProductPrices = $conn->query($getPrices);
echo'<input type="hidden" id="cat_id_'.$getProductsData['id'].'" value="'.$getProductsData['grocery_category_id'].'">
    <input type="hidden" id="sub_cat_id_'.$getProductsData['id'].'" value="'.$getProductsData['grocery_sub_category_id'].'">
    <input type="hidden" id="pro_name_'.$getProductsData['id'].'" value="'.$getProductNames['product_name'].'">';
 echo '<div class="col-lg-4 col-md-4 col-sm-6" >
        <div class="product-box">
            <div class="imagebox">
                    <a href="single_product.php?product_id='.$getProductsData['id'].'" title="">
                        <img src="'.$img.'" alt="" style="width:264px; height:210px">
                    </a>
                    
                <div class="box-content">
                    <div class="product-name">
                        <a href="single_product.php?product_id='.$getProductsData['id'].'" title="">'.$getProductNames['product_name'].'</a>
                    </div>
                    <div class="product_name">
                    <select class="s-w form-control" id="get_pr_price_'.$getProductsData['id'].'">;';
                        while($getPricesDetails = $getProductPrices->fetch_assoc()) {
                            echo'<option value="'.$getPricesDetails['id'].','.$getPricesDetails['selling_price'].'">'.$getPricesDetails['weight_type'].' - Rs.'.$getPricesDetails['selling_price'].' </option>';
                        }
                    echo'</select>
                    </div>
                </div>
                <div class="box-bottom">
                    <div class="btn-add-cart">
                        <a href="#" title="" onClick="show_cart('.$getProductsData['id'].');">
                            <img src="images/icons/add-cart.png" alt="">Add to Cart
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </div>';
    }

?>
