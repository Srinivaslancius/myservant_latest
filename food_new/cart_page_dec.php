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
    
    $itemPrevQuantity = $itemPrevQuan-1;
    
    $updateItems = "UPDATE food_cart SET item_quantity = '$itemPrevQuantity' WHERE id = '$cartId' ";
    $upCart = $conn->query($updateItems);    

    $getAddData = "SELECT * FROM food_cart WHERE id = '$cartId' AND item_quantity!='0'  ";
    $getSelData = $conn->query($getAddData);
    $cartItems = $getSelData->fetch_assoc();
    
    echo $cartItems['item_quantity'] . "," .$cartItems['item_price'];
    //echo $cartItems['item_price']*$cartItems['item_quantity'];
} 
?>