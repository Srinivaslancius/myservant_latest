<?php
include "admin_includes/config.php";
include "admin_includes/common_functions.php";
//echo "<pre>"; print_r($_POST); die;
if($_SESSION['city_name'] == '') {
    $lkp_city_id = 1;
} else {
    $getCities1 = getIndividualDetails('grocery_lkp_cities','city_name',$_SESSION['city_name']);
    $lkp_city_id = $getCities1['id'];
}

if(isset($_POST['brands_filt']) ) {

    $getProducts = "SELECT grocery_product_bind_brands.brand_id,grocery_product_bind_brands.product_id, grocery_products.id,grocery_products.grocery_category_id,grocery_products.grocery_sub_category_id,grocery_products.product_description,grocery_products.lkp_status_id FROM grocery_product_bind_brands LEFT JOIN grocery_products ON grocery_products.id=grocery_product_bind_brands.product_id AND grocery_product_bind_brands.brand_id IN (".implode(',', $_POST['brands_filt']).") WHERE grocery_products.lkp_status_id = '0' AND grocery_products.id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = 1) ORDER BY id DESC";

} else {
    $getProducts = "SELECT * FROM grocery_products WHERE lkp_status_id = 0 AND id IN (SELECT product_id FROM grocery_product_bind_weight_prices WHERE lkp_status_id = 0 AND lkp_city_id = $lkp_city_id)  ORDER BY id DESC LIMIT 0,10";
}

$getProducts1 = $conn->query($getProducts);
   
while($getProductsData = $getProducts1->fetch_assoc()) {
$getProductNames = getIndividualDetails('grocery_product_name_bind_languages','product_id',$getProductsData['id']);
$getProductImages = getIndividualDetails('grocery_product_bind_images','product_id',$getProductsData['id']);
$img = $base_url . 'grocery_admin/uploads/product_images/'.$getProductImages['image'];
 $getPrices = "SELECT * FROM grocery_product_bind_weight_prices WHERE product_id ='".$getProductsData['id']."' AND lkp_status_id = 0 AND lkp_city_id ='$lkp_city_id' ";
$getProductPrices = $conn->query($getPrices);
$getPrices1 = "SELECT * FROM grocery_product_bind_weight_prices WHERE product_id ='".$getProductsData['id']."' AND lkp_status_id = 0 AND lkp_city_id ='$lkp_city_id' ";
$getProductPrices1 = $conn->query($getPrices1);
$getPricesDetails1 = $getProductPrices1->fetch_assoc();
echo'<input type="hidden" id="cat_id_'.$getProductsData['id'].'" value="'.$getProductsData['grocery_category_id'].'">
    <input type="hidden" id="sub_cat_id_'.$getProductsData['id'].'" value="'.$getProductsData['grocery_sub_category_id'].'">
    <input type="hidden" id="pro_name_'.$getProductsData['id'].'" value="'.$getProductNames['product_name'].'">
    <input type="hidden" id="pro_price_'.$getProductsData['id'].'" value="'.$getPricesDetails1['selling_price'].'">
    <input type="hidden" id="pro_weight_type_id_'.$getProductsData['id'].'" value="'.$getPricesDetails1['id'].'">';
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
                    <select class="s-w form-control" id="na1q_qty0">';
                    while($getPricesDetails = $getProductPrices->fetch_assoc()) {
                        echo'<option value="6180">'.$getPricesDetails['weight_type'].' - Rs.'.$getPricesDetails['selling_price'].' </option>';
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