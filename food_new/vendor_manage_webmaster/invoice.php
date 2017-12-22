<!DOCTYPE html>

<?php 
error_reporting(0);
include_once('../../admin_includes/config.php');
include_once('../../admin_includes/common_functions.php');

$id = $_GET['order_id'];

$getOrders = "SELECT * FROM food_orders WHERE order_id='$id'";
$getOrdersData = $conn->query($getOrders);
$getOrdersData1 = $getOrdersData->fetch_assoc();

$getPaymentMethod = getAllDataWhere('lkp_payment_types','id',$getOrdersData1['payment_method']); 
$getPaymentMethodData = $getPaymentMethod->fetch_assoc();

$getSiteSettingsData = getIndividualDetails('food_site_settings','id',1);

//below condition for check service type prices fixed or variant for payment gateway display
$getPriceType = "SELECT * FROM food_orders WHERE service_price_type_id=2 AND order_id='$id' ";
$getCount = $conn->query($getPriceType);

if($getCount->num_rows == 0) {
$service_tax = $getOrdersData1['sub_total']*$getSiteSettingsData['service_tax']/100;
} else {
	$service_tax = 0;
}

if($getOrdersData1['discount_money'] != 0) {
$discount_money = $getOrdersData1['discount_money'].'(<span style="color:green">Coupon Applied Successfully.</span>)';
} else {
	$discount_money = 0;
}
 ?>
<html lang="en">
<head>
  <title>Invoice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:20px;width:1000px;">         
  <table class="table" style="border:1px solid gray">
    <thead>
      <tr style="background-color:#f2f2f2">
        <th colspan="2"></th>
        <th colspan="2" style="padding-bottom:40px;padding-left:120px"><center><img src="<?php echo $base_url . 'uploads/logo/'.$getSiteSettingsData['logo'] ?>" class="logo-responsive" width="210px" height="100px;"></center></th>
		<th></th>
		<th colspan="2"><h3 style="color:#f26226">Invoice</h3>
		<p>Oreder Id:<?php echo $getOrdersData1['order_id']; ?></p>
		<p>Created Date:<?php echo $getOrdersData1['created_at']; ?></p>
		</th>	
      </tr>
    </thead>
    <tbody>
      <tr>     
        <td colspan="2"></td>
        <td colspan="2" style="padding-left:150px"><center><h4 style="color:#f26226">Hello This Is Your Invoice</h4></center></td>
		<td colspan="3"></td>
      </tr>
      <tr  style="border-top:0px">
	  
       <td colspan="3"><p style="color:#f26226">Billing Address</p>
		<p><?php echo $getOrdersData1['first_name']; ?></p>
		<p><?php echo $getOrdersData1['address']; ?></p>
		
		
		</td>
		
        <td colspan="2"><p style="color:#f26226">Billing Address</p>
		<p>Swapna</p>
		<p>8-3/228/105B</p>
		<p>patrikanagar, Madhapur</p>
		<p>HYDERABAD, TELANGANA-500045</p>
		<p>T:012346789</p>
		
		</td>
		
         <td colspan="2"><p style="color:#f26226">Shipping Address</p>
		 <p>Swapna</p>
		<p>8-3/228/105B</p>
		<p>patrikanagar, Madhapur</p>
		<p>HYDERABAD, TELANGANA-500045</p>
		<p>T:012346789</p></td>
		
      </tr>
      <?php $getOrders1 = "SELECT * FROM food_orders WHERE order_id='$id'";
			$getOrdersData3 = $conn->query($getOrders1); 
			 
			 ?>
      <tr style="color:#f26226">
        <td colspan="2">NAME</td>
        <td>PRICE</td>
        <td>QUANTITY</td>
		<td>SELECTED DATE</td>
		<td>SELECTED TIME</td>
		<td></td>
      </tr>
	   <tr>
	   	<?php while($getOrdersData2 = $getOrdersData3->fetch_assoc()) { ?>
        <td colspan="2">HTC Touch Diamond</td>
        <td>Item</td>
        <td>2</td>
		<td><?php echo $getOrdersData2['food_selected_date'] ?></td>
		<td><?php echo $getOrdersData2['food_selected_time'] ?></td>
		<?php  } ?>
		<td></td>
      </tr>
	   <tr style="background-color:#f2f2f2">
        <td colspan="5"></td>
		<td>
		<p>Subtotal:</p>
		<p>Tax:</p>
		<p>Shipping & Handling:</p>
		<p style="color:#f26226">Grand Total:</p>
		</td>
		<td style="color:#f26226"><p><?php echo $getOrdersData1['sub_total']?></p>
		<p><?php echo $service_tax.'('.$getSiteSettingsData['service_tax'].'%)' ?></p>
		<p>₹30.00</p>
		<p><?php echo $getOrdersData1['order_total']?></p></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
