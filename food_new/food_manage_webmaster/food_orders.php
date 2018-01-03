<?php include_once 'admin_includes/main_header.php';


    $serviceOrders = "SELECT * FROM food_orders GROUP BY order_id ORDER BY id DESC"; 
    $getServiceOrderData = $conn->query($serviceOrders);
    $i=1;
?>
     <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">Orders</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Order ID</th>
                    <th>User Name</th>
                    <th>Mobile Number</th>
                    <th>Email Id</th>
                    <th>Order Date</th>
                    <th>Order Status</th>
                    <th>Assign To</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getServiceOrderData->fetch_assoc()) { ?>              
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['order_id'];?></td>
                    <td><?php echo $row['first_name'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['created_at'];?></td>
                    <td><?php $adminServiceTypes = getIndividualDetails('lkp_food_order_status','id',$row['lkp_order_status_id']); echo $adminServiceTypes['order_status']; ?></td>
                    <?php if($row['assign_delivery_id'] == '0' || $row['assign_delivery_id'] == '') { ?>
                     <td><a href="assign_to.php?order_id=<?php echo $row['order_id']; ?>">Assign To</a></td>
                     <?php } else { 
                      $getDeliveryBoysNames = getAllDataWhere('food_delivery_boys','id',$row['assign_delivery_id']); $getDeliveryBoysNamesData = $getDeliveryBoysNames->fetch_assoc();
                      ?>
                     <td><a href="assign_to.php?order_id=<?php echo $row['order_id']; ?>"><?php if($getDeliveryBoysNamesData['id'] == $row['assign_delivery_id']) { echo $getDeliveryBoysNamesData['name']; } ?>(Assigned)</a></td>
                    <?php } ?>
                    <td><a href="invoice.php?order_id=<?php echo $row['order_id']; ?>" target="_blank"><i class="zmdi zmdi-eye zmdi-hc-fw"  class=""></i></a>&nbsp;<?php if($row['lkp_order_status_id'] == 5 && $row['lkp_payment_status_id'] == 1) { ?><a href="../../uploads/food_order_invoice/<?php echo $row['order_id']; ?>.pdf" target="_blank"><i class="zmdi zmdi-local-printshop"></i></a><?php } else { ?> <a href="edit_food_orders.php?order_id=<?php echo $row['order_id']; ?>"><i class="zmdi zmdi-edit"></i></a><?php } ?><!-- <a target="_blank" href="invoice.php?order_id=<?php echo $row['order_id']; ?>"><i class="zmdi zmdi-local-printshop"  class=""></i></a> --></td>
                  </tr>
                  <?php  $i++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   <?php include_once 'admin_includes/footer.php'; ?>
   <script src="js/tables-datatables.min.js"></script>