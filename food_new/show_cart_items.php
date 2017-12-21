<?php
include "../admin_includes/config.php";
include "../admin_includes/common_functions.php";

if($_SESSION['CART_TEMP_RANDOM'] == "") {

    $_SESSION['CART_TEMP_RANDOM'] = rand(10, 10).sha1(crypt(time())).time();
}
if($_SESSION['user_login_session_id'] == "") {

    $user_id = 0;
} else {
    $user_id = $_SESSION['user_login_session_id'];
}

$session_cart_id = $_SESSION['CART_TEMP_RANDOM'];
$restId = $_POST['rest_id'];
$_SESSION['session_restaurant_id'] = $restId;
$getAddData = "SELECT * FROM food_cart WHERE session_cart_id = '$session_cart_id' AND item_quantity!='0' AND    restaurant_id = '$restId' ";
$getSelData = $conn->query($getAddData);

if($getSelData->num_rows > 0) {

  $cartSubtotal = 0;
  $cartTotal = 0;
  while($cartItems = $getSelData->fetch_assoc() ) {
  $cartSubtotal += $cartItems['item_price'] * $cartItems['item_quantity'];
  $cartTotal = $cartSubtotal + 10;
  $getProductsName = getIndividualDetails('food_products','id',$cartItems['food_item_id']);  
  echo '<table class="table table_summary cart_total_items"><tbody >
          <tr>
              <td>
                <a href="#0" class="remove_item"><i class="icon_plus_alt inc_cart_quan" data-key='.$cartItems['id'].'></i></a> <strong>'.$cartItems['item_quantity'].'x</strong> <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> '.$getProductsName['product_name'].'
              </td>
              <td>
                <strong class="pull-right">Rs. '.$cartItems['item_price'] * $cartItems['item_quantity'].' </strong>
              </td>
          </tr>
      </tbody>
      </table>';
  }

  echo '<hr>
            <input type="hidden" id="cart_count_items" value="'.$getSelData->num_rows.'">
            <div class="row" id="options_2">
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                <label><input type="radio" value="" checked name="option_2" class="icheck">Delivery</label>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                <label><input type="radio" value="" name="option_2" class="icheck">Take Away</label>
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
} else {
  echo "<p style='text-align:center'>Cart Empty !</p>";
}


?>