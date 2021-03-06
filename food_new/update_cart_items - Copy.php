<?php
include "../admin_includes/config.php";
include "../admin_includes/common_functions.php";
include "../admin_includes/food_common_functions.php";

if (isset($_POST['cart_id']) ){

    $cartId = $_POST['cart_id'];
    
    if($_SESSION['CART_TEMP_RANDOM'] == "") {

        $_SESSION['CART_TEMP_RANDOM'] = rand(10, 10).sha1(crypt(time())).time();
    }
    if($_SESSION['user_login_session_id'] == "") {

        $user_id = 0;
    } else {
        $user_id = $_SESSION['user_login_session_id'];
    }

    $session_cart_id = $_SESSION['CART_TEMP_RANDOM'];
    
    $checkCartItems = "SELECT * FROM food_cart WHERE id = '$cartId' "; 
    $getCartCount = $conn->query($checkCartItems);

    $getCartQuantity = $getCartCount->fetch_assoc();
    $itemPrevQuan = $getCartQuantity['item_quantity'];
    $getTotalCount = $getCartCount->num_rows;
    
    $itemPrevQuantity = $itemPrevQuan+1;
    
    $updateItems = "UPDATE food_cart SET item_quantity = '$itemPrevQuantity' WHERE id = '$cartId' ";
    $upCart = $conn->query($updateItems);
    

    $getAddData = "SELECT * FROM food_cart WHERE session_cart_id = '$session_cart_id' AND item_quantity!='0'  ";
    $getSelData = $conn->query($getAddData);

    $cartSubtotal = 0;
    $cartTotal = 0;

    $getDeliveryCharge = getIndividualDetails('food_vendors','id',$_SESSION['session_restaurant_id']);
    $DeliveryCharges = $getDeliveryCharge['delivery_charges'];
    if($DeliveryCharges!=0) {
      $deliveryCharges = $getDeliveryCharge['delivery_charges'];
    } else {
      $deliveryCharges = 0;
    }

    while($cartItems = $getSelData->fetch_assoc() ) {
        $cartSubtotal += $cartItems['item_price'] * $cartItems['item_quantity'];
        $cartTotal = $cartSubtotal+$deliveryCharges;
    $getProductsName = getIndividualDetails('food_products','id',$cartItems['food_item_id']);    
    $productId = $cartItems['food_item_id'];
    echo '<table class="table table_summary"><tbody >
            <tr>
                <td>
                  <a href="#0" class="remove_item"><i class="icon_plus_alt" onClick="add_cart_item1('.$cartItems['id'] .')"></i></a> <strong>'.$cartItems['item_quantity'].' </strong> <a href="#0" class="remove_item"><i class="icon_minus_alt" onClick="remove_cart_item1('.$cartItems['id'] .')"></i></a> '.$getProductsName['product_name'].'
                </td>
                <td>
                  <strong class="pull-right">Rs. '.$cartItems['item_price']*$cartItems['item_quantity'].' </strong>
                </td>
            </tr>
        </tbody>
        </table>';
    }

    echo '<hr><input type="hidden" value='.$cartTotal.' id="total_cart_val">    
    <input type="hidden" value='.$getSelData->num_rows.' id="total_cart_count"> 
               
          <table class="table table_summary">
          <tbody>
          <tr class="sub_total">
            <td>
               Subtotal <span class="pull-right">Rs. '.$cartSubtotal.'</span>
            </td>
          </tr>
          <tr class="dev_charge">
            <td>
               Delivery Charges <span class="pull-right">Rs. '.$deliveryCharges.'</span>
            </td>
          </tr>
         <input type="hidden" value='.$cartTotal.' id="cart_total">
          <tr>
            <td class="total">            
               TOTAL <span class="pull-right">Rs. '.$cartTotal.'</span>
            </td>
          </tr>
          </tbody>
          </table>';
} else {
  echo "<p style='text-align:center'>Cart Empty !</p>";
}
?>