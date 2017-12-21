<?php
include "../admin_includes/config.php";
include "../admin_includes/common_functions.php";
include "../admin_includes/food_common_functions.php";

if (isset($_POST['item_id']) && isset($_POST['item_price']) && isset($_POST['item_weight']) && isset($_POST['rest_id']) ){

    $ProductId = $_POST['item_id'];
    $ProductPrice = $_POST['item_price'];
    $ProductWeighType = $_POST['item_weight'];
    $restId = $_POST['rest_id'];
    $removeItemCheckPro = $_POST['item_remove'];
    $ProductCategoryId = $_POST['item_cat_id'];

    if($_SESSION['CART_TEMP_RANDOM'] == "") {

        $_SESSION['CART_TEMP_RANDOM'] = rand(10, 10).sha1(crypt(time())).time();
    }
    if($_SESSION['user_login_session_id'] == "") {

        $user_id = 0;
    } else {
        $user_id = $_SESSION['user_login_session_id'];
    }

    $session_cart_id = $_SESSION['CART_TEMP_RANDOM'];
    
    $checkCartItems = "SELECT * FROM food_cart WHERE food_item_id = '$ProductId' AND item_price='$ProductPrice' AND item_weight_type_id='$ProductWeighType' AND session_cart_id = '$session_cart_id' AND restaurant_id ='$restId' ";
    $getCartCount = $conn->query($checkCartItems);

    $getCartQuantity = $getCartCount->fetch_assoc();
    $itemPrevQuan = $getCartQuantity['item_quantity'];
    $getTotalCount = $getCartCount->num_rows;
    if($getTotalCount > 0) {
        //echo $getTotalCount;
        if($removeItemCheckPro == 1) {
            $itemPrevQuantity = $itemPrevQuan-1;
        } else {
            $itemPrevQuantity = $itemPrevQuan+1;
        }
        
        $updateItems = "UPDATE food_cart SET item_quantity = '$itemPrevQuantity' WHERE food_item_id = '$ProductId' AND item_price='$ProductPrice' AND item_weight_type_id='$ProductWeighType' AND session_cart_id = '$session_cart_id'";
        $upCart = $conn->query($updateItems);
    } else {
        $itemPrevQuantity = 1;
        $created_at = date('Y-m-d H:i:s', time() + 24 * 60 * 60);
        $saveItems = "INSERT INTO `food_cart`(`session_cart_id`, `food_item_id`, `item_price`, `item_quantity`, `item_weight_type_id`, `restaurant_id`, `food_category_id`, `created_at`) VALUES ('$session_cart_id','$ProductId','$ProductPrice','$itemPrevQuantity', '$ProductWeighType', '$restId', '$ProductCategoryId', '$created_at')";
        $saveCart = $conn->query($saveItems);
        //echo $getTotalCount;
    }

    $getAddData = "SELECT * FROM food_cart WHERE session_cart_id = '$session_cart_id' AND item_quantity!='0' AND restaurant_id = '$restId' ";
    $getSelData = $conn->query($getAddData);

    $cartSubtotal = 0;
    $cartTotal = 0;
    while($cartItems = $getSelData->fetch_assoc() ) {
        $cartSubtotal += $cartItems['item_price'] * $cartItems['item_quantity'];
        $cartTotal = $cartSubtotal + 10;
    $getProductsName = getIndividualDetails('food_products','id',$cartItems['food_item_id']);    
    
    echo '<table class="table table_summary"><tbody >
            <tr>
                <td>
                  <a href="#0" class="remove_item"><i class="icon_plus_alt add_cart_item" data-key='.$cartItems['id'].'></i></a> <strong>'.$cartItems['item_quantity'].'x</strong> <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> '.$getProductsName['product_name'].'
                </td>
                <td>
                  <strong class="pull-right">Rs. '.$cartItems['item_price'] * $cartItems['item_quantity'].' </strong>
                </td>
            </tr>
        </tbody>
        </table>';
    }

    echo '<hr>
          <div class="row" id="options_2">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
              <label><input type="radio" value="2" checked name="option_2" class="icheck">Delivery</label>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
              <label><input type="radio" value="1" name="option_2" class="icheck">Take Away</label>
            </div>
          </div><!-- Edn options 2 -->
                    
          <hr>
          <table class="table table_summary">
          <tbody>
          <tr>
            <td>
               Subtotal <span class="pull-right">Rs. '.$cartSubtotal.'</span>
            </td>
          </tr>
          <tr>
            <td>
               Delivery fee <span class="pull-right">Rs. 10</span>
            </td>
          </tr>
          <tr>
            <td class="total">
               TOTAL <span class="pull-right">Rs. '.$cartTotal.'</span>
            </td>
          </tr>
          </tbody>
          </table>';
}
?>