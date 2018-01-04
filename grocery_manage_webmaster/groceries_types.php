<?php include_once 'admin_includes/main_header.php'; ?>
<?php  if (!isset($_POST['submit']))  {
          //If fail
          echo "fail";
        } else  {
            //If success
            $item_type = $_POST['item_type'];
            $lkp_status_id = $_POST['lkp_status_id'];
            
            $sql = "INSERT INTO grocery_item_types (`item_type`,`lkp_status_id`) VALUES ('$item_type','$lkp_status_id')"; 
                    if($conn->query($sql) === TRUE){
                       echo "<script type='text/javascript'>window.location='groceries_types.php?msg=success'</script>";
                    } else {
                       echo "<script type='text/javascript'>window.location='groceries_types.php?msg=fail'</script>";
                    }
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                
               
        }
?>
        <div class="site-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Add Grocery Item Types</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Item Type</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="item_type" class="form-control" id="user_input" placeholder="Item Type"  data-error="Please enter Item Type" required onkeyup="checkUserAvailTest()">
                                    <span id="input_status" style="color: red;"></span>
                                    <div class="help-block with-errors"></div>
                                    <input type="hidden" id="table_name" value="grocery_item_types">
                                    <input type="hidden" id="column_name" value="item_type">
                                </div>
                            </div>
                            
                            <?php $getStatus = getAllData('lkp_status');?>
                            <div class="form-group">
                                <label class="col-sm-3  col-md-4 control-label" for="form-control-8">Choose Your Status</label>
                                <div class="col-sm-6 col-md-4">
                                    <select id="form-control-3" name="lkp_status_id" class="custom-select" data-error="This field is required." required>
                                      <option value="">Select Status</option>
                                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                                          <option value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
                                      <?php } ?>
                                   </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel panel-default panel-table m-b-0">
                <div class="panel-heading">
                    <h3 class="m-t-0 m-b-5 font_sz_view">Grocery Item Types</h3>
                    <?php $getAllGroceriesData = getAllDataWithActiveRecent('grocery_item_types'); $i=1; ?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dataTable" id="table-2">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Item Type</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $getAllGroceriesData->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $row['item_type'];?></td>
                                    <td><?php if ($row['lkp_status_id']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['lkp_status_id']." data-tbname='grocery_item_types'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['lkp_status_id']." data-incId=".$row['id']." data-tbname='grocery_item_types'>In Active</span>" ;} ?></td>
                                    <td><span><a href="edit_grocery_types.php?cid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a></span></td>
                                </tr>
                                <?php $i++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer">
          2017 © Cosmos
        </div>
<?php include_once 'admin_includes/footer.php'; ?>
  </body>
</html>