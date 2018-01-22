<?php
include "admin_includes/config.php";
include "admin_includes/common_functions.php";
//echo "<pre>"; print_r($_POST); die;
if(isset($_POST['popStatus']) ) {

$popStatus = $_POST['popStatus'];

if($_SESSION['city_name'] == '') {
    $lkp_city_id = 1;
} else {
    $getCities1 = getIndividualDetails('grocery_lkp_cities','city_name',$_SESSION['city_name']);
    $lkp_city_id = $getCities1['id'];
}

if($popStatus == 'recent') {

    $getProducts = "SELECT * FROM grocery_products WHERE lkp_status_id = 0 AND id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = $lkp_city_id)  ORDER BY id DESC ";
} elseif($popStatus == 'low_high') {

    $getProducts = "SELECT grocery_product_bind_weight_prices.*,grocery_products.* FROM grocery_product_bind_weight_prices LEFT JOIN grocery_products ON grocery_products.id = grocery_product_bind_weight_prices.id WHERE grocery_product_bind_weight_prices.lkp_status_id = 0 AND grocery_products.lkp_status_id=0 AND lkp_city_id = '$lkp_city_id' GROUP BY grocery_product_bind_weight_prices.product_id ORDER BY grocery_product_bind_weight_prices.selling_price ASC";

} elseif($popStatus == 'high_low') {

    $getProducts = "SELECT grocery_product_bind_weight_prices.*,grocery_products.* FROM grocery_product_bind_weight_prices LEFT JOIN grocery_products ON grocery_products.id = grocery_product_bind_weight_prices.id WHERE grocery_product_bind_weight_prices.lkp_status_id = 0 AND grocery_products.lkp_status_id=0 AND lkp_city_id = '$lkp_city_id' GROUP BY grocery_product_bind_weight_prices.product_id ORDER BY grocery_product_bind_weight_prices.selling_price DESC";
} else {

    $getProducts = "SELECT * FROM grocery_products WHERE lkp_status_id = 0 AND id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = $lkp_city_id) ORDER BY id DESC ";
}

$getProducts1 = $conn->query($getProducts);
while($getProductsData1 = $getProducts1->fetch_assoc()) {
$getProductNames1 = getIndividualDetails('grocery_product_name_bind_languages','product_id',$getProductsData1['id']);
$getProductImages1 = getIndividualDetails('grocery_product_bind_images','product_id',$getProductsData1['id']);
 $getPrices = "SELECT * FROM grocery_product_bind_weight_prices WHERE product_id ='".$getProductsData1['id']."' AND lkp_status_id = 0 AND lkp_city_id ='$lkp_city_id' ";
$getProductPrices = $conn->query($getPrices);
$getPrices1 = "SELECT * FROM grocery_product_bind_weight_prices WHERE product_id ='".$getProductsData1['id']."' AND lkp_status_id = 0 AND lkp_city_id ='$lkp_city_id' ";
$getProductPrices1 = $conn->query($getPrices1);
$getPricesDetails1 = $getProductPrices1->fetch_assoc();
$img = $base_url . 'grocery_admin/uploads/product_images/'.$getProductImages1['image'];
echo'<input type="hidden" id="cat_id1_'.$getProductsData1['id'].'" value="'.$getProductsData1['grocery_category_id'].'">
    <input type="hidden" id="sub_cat_id1_'.$getProductsData1['id'].'" value="'.$getProductsData1['grocery_sub_category_id'].'">
    <input type="hidden" id="pro_name1_'.$getProductsData1['id'].'" value="'.$getProductNames1['product_name'].'">
    <input type="hidden" id="pro_price1_'.$getProductsData1['id'].'" value="'.$getPricesDetails1['selling_price'].'">
    <input type="hidden" id="pro_weight_type_id1_'.$getProductsData1['id'].'" value="'.$getPricesDetails1['id'].'">';
 echo '<div class="product-box style3">
        <div class="imagebox style1 v3">
            <div class="box-image">
                <a href="single_product.php?product_id='.$getProductsData1['id'].'" title="">
                    <img src="'.$img.'" alt="" style="width:264px; height:210px">
                </a>
            </div>
            <div class="box-content">
                <div class="product-name">
                    <a href="single_product.php?product_id='.$getProductsData1['id'].'" title="">'.$getProductNames1['product_name'].'</a>
                </div>
                <div class="status">
                    Availablity: In stock
                </div>
                <div class="info">
                    <p>
                        '.$getProductNames1['product_description'].'
                    </p>
                </div>
            </div>
            <div class="box-price">
                <div class="product_name">
                    <select class="s-w form-control" id="na1q_qty0" ">';
                        while($getPricesDetails = $getProductPrices->fetch_assoc()) {
                            echo'<option value="6180">'.$getPricesDetails['weight_type'].' - Rs.'.$getPricesDetails['selling_price'].' </option>';
                        }
                      echo'</select>
                    </div>
                <div class="btn-add-cart">
                    <a href="#" title="" onClick="show_cart1('.$getProductsData1['id'].')">
                        <img src="images/icons/add-cart.png" alt="">Add to Cart
                    </a>
                </div>
                <div class="compare-wishlist">
                    <a href="#" class="wishlist" title="">
                        <img src="images/icons/wishlist.png" alt="">Wishlist
                    </a>
                </div>
            </div><!-- /.box-price -->
        </div><!-- /.imagebox -->
    </div>';
    }
}
?>