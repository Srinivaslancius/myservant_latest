<?php 
include "admin_includes/config.php";
include "admin_includes/common_functions.php";

$user_id =1;
$order_id = "MYSERVANT-GR-01";
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$order_total = $_POST['order_total'];

$orders = "INSERT INTO grocery_orders (`user_id`,`order_id`, `product_name`, `product_price`, `order_total`) VALUES ('$user_id', '$order_id','$product_name','$product_price', '$product_price')";
$servicesOrders = $conn->query($orders);

?>