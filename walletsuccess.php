<?php 
include "admin_includes/config.php";
//echo "<pre>"; print_r($_POST); die;
//Order id generating using sessions

if(isset($_SESSION['user_login_session_id']) && $_GET['lastTransId']!="") {
	
	//1-success, 2- Inprogress
	$key = $_GET['lastTransId'];
	$txnid = $_POST['txnid'];
	$sqlInwallet = "UPDATE user_wallet_transactions SET lkp_payment_status_id =1 , transaction_id='$txnid' WHERE id='$key' ";
	$conn->query($sqlInwallet);
	header("Location: wallet_thankyou.php");
}
?>
