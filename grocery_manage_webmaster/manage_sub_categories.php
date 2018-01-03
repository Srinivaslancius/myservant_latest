<?php include_once 'admin_includes/main_header.php'; ?>
<?php  if (!isset($_POST['submit']))  {
          //If fail
          echo "fail";
        } else  {
            //If success
            $grocery_category_id = $_POST['grocery_category_id'];
            $sub_category_name = $_POST['sub_category_name'];
            $brands_id = implode(',',$_POST["brands_id"]);
            $priority = $_POST['priority'];
            $lkp_status_id = $_POST['lkp_status_id'];
        
                $sql = "INSERT INTO grocery_sub_categories (`grocery_category_id`,`sub_category_name`,`brands_id`,`priority`,`lkp_status_id`) VALUES ('$grocery_category_id','$sub_category_name','$brands_id','$brands_id','$lkp_status_id')"; 
                    if($conn->query($sql) === TRUE){
                       echo "<script type='text/javascript'>window.location='manage_sub_categories.php?msg=success'</script>";
                    } else {
                       echo "<script type='text/javascript'>window.location='manage_sub_categories.php?msg=fail'</script>";
                    }
        }
        
?>
        <div class="site-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Add Sub Categories</h3>
                </div><?php $getGroceryCategories = getAllDataWithStatus('grocery_category','0');?>
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Select Category</label>
                                <div class="col-sm-6 col-md-4">
                                    <select name="grocery_category_id" id="form-control-1" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }">
                                        <option value="">-- Select Category --</option>
                                        <?php while($row = $getGroceryCategories->fetch_assoc()) {  ?>
                                          <option value="<?php echo $row['id']; ?>" ><?php echo $row['category_name']; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Sub Category Name</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="sub_category_name" class="form-control" id="form-control-3" placeholder="Enter Sub Category Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Priority</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="priority" class="form-control" id="form-control-3" placeholder="Enter Priority">
                                </div>
                            </div>
                            <?php $getGroceryBrands = getAllDataWithStatus('grocery_brand_logos','0');?>
                            <div class="form-group">
                                <label for="form-control-1" class="col-sm-3 col-md-4 control-label">Brands Applicable</label>
                                    <div class="col-sm-6 col-md-4">
                                        <select name="brands_id[]" id="form-control-2" class="form-control" data-plugin="select2" multiple="multiple">
                                            <option value="">-- Select Brands --</option>
                                        <?php while($row = $getGroceryBrands->fetch_assoc()) {  ?>
                                            <option value="<?php echo $row['id']; ?>" ><?php echo $row['title']; ?></option>
                                          <?php } ?>
                                        </select>
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
                    <h3 class="m-t-0 m-b-5 font_sz_view">View Sub Categories</h3>
                    <?php $getCategoriesData = getAllDataWithActiveRecent('grocery_sub_categories'); $i=1; ?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dataTable" id="table-2">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Category Name</th>
                                    <th>Sub Category Name</th>
                                    <th>Brands Applicable</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $getCategoriesData->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php $getGroceryCategories = getAllData('grocery_category'); while($getGroceryCategories1 = $getGroceryCategories->fetch_assoc()) { 
                                        if($row['grocery_category_id'] == $getGroceryCategories1['id']) { echo $getGroceryCategories1['category_name']; } } ?></td>
                                    <td><?php echo $row['sub_category_name'];?></td>
                                    <td><a href="#" data-toggle="modal" data-target="#animatedModal1">View Brands Applicable</a></td>
                                    <td><?php echo $row['priority'];?></td>
                                    <td><span class="label label-outline-success">Active</span></td>
                                    <td><span><a href="edit_manage_sub_categories.php?sid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a></span></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer">
          2017 © Cosmos
        </div>
        <div class="col-lg-2 col-sm-4 col-xs-6 m-y-5">
            <div id="animatedModal1" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content animated flipInX">
                        <div class="modal-header bg-info">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="zmdi zmdi-close"></i>
                                </span>
                            </button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <?php for($k=0; $k<24; $k++) {?>
                                    <div class="col-md-2 marg1"><span class="label label-default m-w-60 font_sz_view">Papa Johns</span></div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-info">Continue</button>
                            <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/dashboard-3.min.js"></script>
     <script src="js/forms-plugins.min.js"></script>
    <script src="js/tables-datatables.min.js"></script>
  </body>
</html>