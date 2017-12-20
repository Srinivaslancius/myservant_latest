<?php
error_reporting(0);
include_once('../../admin_includes/config.php');
include_once('../../admin_includes/common_functions.php');

$id = $_GET['order_id'];

$getOrders = "SELECT * FROM services_orders WHERE order_id='$id'";
$getOrdersData = $conn->query($getOrders);
$getOrdersData1 = $getOrdersData->fetch_assoc();

$getPaymentMethod = getAllDataWhere('lkp_payment_types','id',$getOrdersData1['payment_method']); 
$getPaymentMethodData = $getPaymentMethod->fetch_assoc();

$getSiteSettingsData = getIndividualDetails('services_site_settings','id',1);

//below condition for check service type prices fixed or variant for payment gateway display
$getPriceType = "SELECT * FROM services_orders WHERE service_price_type_id=2 AND order_id='$id' ";
$getCount = $conn->query($getPriceType);

if($getCount->num_rows == 0) {
$service_tax = $getOrdersData1['sub_total']*$getSiteSettingsData['service_tax']/100;
} else {
	$service_tax = 0;
}

$content .='<!DOCTYPE html>
<html lang="en">
<head>
  <title>ORDER INFORMATION</title>
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
        <th colspan="2"><h4 style="color:#f26226">ORDER INFORMATION</h4></th>		
		<th colspan="2"></th>	
      </tr>
    </thead>
    <tbody>
    <tr>
      <td><p>Name:</p>
	<p>Mobile:</p>
	<p>Email:</p>
	<p>Address:</p>
	<p>Postal Code:</p></td>
	  <td><p>'.$getOrdersData1['first_name'].'</p>
	  <p>'.$getOrdersData1['mobile'].'</p>
	   <p>'.$getOrdersData1['email'].'</p>
	    <p>'.$getOrdersData1['address'].'</p>
		 <p>'.$getOrdersData1['postal_code'].'</p>
		 </td>
		 <td colspan="2"></td>	
	  <td><p>Order ID:</p>
	  <p>Order Sub Id:</p>
	 <p>Created at:</p>
	  <p>Payment Method:</p>
	  </td>
	  <td><p>'.$getOrdersData1['order_id'].'</p>
	  <p>'.wordwrap($getOrdersData1['order_sub_id'],20,"<br>\n",TRUE).'</p>
	  <p>'.$getOrdersData1['created_at'].'</p>
	  <p>'.$getPaymentMethodData['status'].'</p>
	  </td>
      </tr>
      <tr style="color:#f26226">
        <td>Service Name</td>
        <td>Price</td>
        <td>Quantity</td>
		<td>Selected Date</td>
		<td>Selected Time</td>
		<td></td>
      </tr>';
      $getOrders1 = "SELECT * FROM services_orders WHERE order_id='$id'";
	$getOrdersData3 = $conn->query($getOrders1);

      while($getOrdersData2 = $getOrdersData3->fetch_assoc()) {
      	$getServiceNames = getAllDataWhere('services_group_service_names','id',$getOrdersData2['service_id']); 
		$getServiceNamesData = $getServiceNames->fetch_assoc();
$content .='<tr>
        <td>'.$getServiceNamesData['group_service_name'].'</td>
        <td>'.wordwrap($getOrdersData2['service_price'],15,"<br>\n",TRUE).'</td>
        <td>'.wordwrap($getOrdersData2['service_quantity'],15,"<br>\n",TRUE).'</td>
		<td>'.$getOrdersData2['service_selected_date'].'</td>
		<td>'.$getOrdersData2['service_selected_time'].'</td>
		<td></td>
      </tr>';
  }
  $content .= '
	   <tr style="background-color:#f2f2f2">
        <td colspan="4"></td>
		<td>
		<p>Subtotal:</p>
		<p>Tax:</p>
		<p style="color:#f26226">Grand Total:</p>
		</td>
		<td style="color:#f26226"><p>'.$getOrdersData1['sub_total'].'</p>
		<p>Rs.'.$service_tax.'('.$getSiteSettingsData['service_tax'].'%)</p>
		<p>'.$getOrdersData1['order_total'].'</p></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
';

//echo $content; die;

require_once('html2pdf/html2pdf.class.php');


$html2pdf = new HTML2PDF('P', array(450,250), 'en', true, 'UTF-8', array(30, 30, 40, 40));
$html2pdf->pdf->SetDisplayMode('fullpage');
$html2pdf->WriteHTML($content);
$html2pdf->Output($getOrdersData1['order_id'].'.pdf');
?>