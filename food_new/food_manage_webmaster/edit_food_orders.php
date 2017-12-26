<?php include_once 'admin_includes/main_header.php'; ?>
<?php  
$order_id = $_GET['order_id'];
if (!isset($_POST['submit'])) {
  //If fail
    echo "fail";
} else {
    //If success 
  $lkp_payment_status_id = $_POST['lkp_payment_status_id'];
  $lkp_order_status_id = $_POST['lkp_order_status_id'];
  $delivery_date = date("Y-m-d h:i:s");
  
  if($lkp_payment_status_id == 1 AND $lkp_order_status_id == 2) {
    $sql = "UPDATE `food_orders` SET delivery_date ='$delivery_date' WHERE order_id = '$order_id' ";
    $res = $conn->query($sql);
  }

  $sql = "UPDATE `food_orders` SET lkp_payment_status_id = '$lkp_payment_status_id',lkp_order_status_id = '$lkp_order_status_id' WHERE order_id = '$order_id' ";
  $res = $conn->query($sql);
  // if($conn->query($sql) === TRUE){
  //    echo "<script type='text/javascript'>window.location='food_orders.php?order_id=$order_id&msg=success'</script>";
  // } else {
  //    echo "<script type='text/javascript'>window.location='food_orders.php?order_id=$order_id&msg=fail'</script>";
  // }
  header("Location:food_order_invoice.php?id=".$order_id."");
}   
?>
 <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <center><h3 class="m-y-0">Order Details</h3></center>
          </div>
          <div class="panel-body">
            <div class="row">
              <?php $getFoodOrders = "SELECT * FROM food_orders WHERE order_id = '$order_id'"; $getFoodOrders1 = $conn->query($getFoodOrders);
              $getFoodOrdersData = $getFoodOrders1->fetch_assoc(); 
              ?>

              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="POST" autocomplete="off" enctype="multipart/form-data">

                  <?php 
                  $getPaymentStatusData = "SELECT * FROM lkp_payment_status WHERE id != 3";
                  $getPaymentStatus = $conn->query($getPaymentStatusData);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your Payment status</label>
                    <select id="form-control-3" name="lkp_payment_status_id" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Payment status</option>
                      <?php while($row = $getPaymentStatus->fetch_assoc()) {  ?>
                      <option <?php if($row['id'] == $getFoodOrdersData['lkp_payment_status_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['payment_status']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  
                  <?php 
                  $getStatusData = "SELECT * FROM lkp_order_status WHERE id != 3";
                  $getStatus = $conn->query($getStatusData);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your Order status</label>
                    <select id="form-control-3" name="lkp_order_status_id" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Order status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getFoodOrdersData['lkp_order_status_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['order_status']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
<?php include_once 'admin_includes/footer.php'; ?>