<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getWeightsData = getAllDataWithActiveRecent('food_product_weights'); $i=1; ?>
     
      <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_food_product_weights.php" style="float:right">Add Weight</a>
            <h3 class="m-t-0 m-b-5">Weights</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">         
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Weight Type</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getWeightsData->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['weight_type'];?></td>
                    <td><?php if ($row['lkp_status_id']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['lkp_status_id']." data-tbname='food_product_weights'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['lkp_status_id']." data-incId=".$row['id']." data-tbname='food_product_weights'>In Active</span>" ;} ?></td>
                    <td> <a href="edit_food_product_weights.php?wid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit"></i></a>&nbsp; </td>                    
                  </tr>
                  <?php  $i++; }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>      
      </div>
      
   <?php include_once 'admin_includes/footer.php'; ?>
   <script src="js/tables-datatables.min.js"></script>