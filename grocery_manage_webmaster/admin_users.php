<?php include_once 'admin_includes/main_header.php'; ?>
<?php  if (!isset($_POST['submit']))  {
          //If fail
          echo "fail";
        } else  {
            //If success
      $admin_name = $_POST['admin_name'];
      $admin_email = $_POST['admin_email'];
      $admin_password = encryptPassword($_POST['admin_password']);
      $created_at = date("Y-m-d h:i:s");
      $lkp_admin_service_type_id = $_POST['lkp_admin_service_type_id'];
      $lkp_admin_user_type_id = $_POST['lkp_admin_user_type_id'];
      $status = $_POST['lkp_status_id'];

            $sql = "INSERT INTO admin_users (`admin_name`, `admin_email`, `admin_password`, `created_at`, `lkp_admin_service_type_id`, `lkp_admin_user_type_id`, `lkp_status_id`) VALUES ('$admin_name', '$admin_email', '$admin_password','$created_at','$lkp_admin_service_type_id','$lkp_admin_user_type_id','$status')"; 
                    if($conn->query($sql) === TRUE){
                       echo "<script type='text/javascript'>window.location='admin_users.php?msg=success'</script>";
                    } else {
                       echo "<script type='text/javascript'>window.location='admin_users.php?msg=fail'</script>";
                    }
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                
               
        }
?>
        <div class="site-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Add Admin Users</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Admin Name</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="admin_name" class="form-control" id="form-control-3" placeholder="Admin Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Email</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="email" name="admin_email" class="form-control" placeholder="Enter Email" id="user_input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"  data-error="Please enter a valid email address." onkeyup="checkUserAvailTest()" required>
                                    <span id="input_status" style="color: red;"></span>
                                    <div class="help-block with-errors"></div>
                                    <input type="hidden" id="table_name" value="admin_users">
                                    <input type="hidden" id="column_name" value="admin_email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Password</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="password" name="admin_password" class="form-control" id="form-control-3" placeholder="Password" minlength="8" data-error="Please Enter Minimum 8 characters." required>
                                </div>
                            </div>
                            <?php $getAdminSetvices= "SELECT * from `lkp_admin_service_types` WHERE `lkp_status_id` = '0' And id =3";
                        $getAdminSetviceTypes = $conn->query($getAdminSetvices);
                        ?>
                        <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Choose Admin Service Types</label>
                                <div class="col-sm-6 col-md-4">
                                    <select name="lkp_admin_service_type_id" id="form-control-1" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" required>
                                        <option value="">-- Choose Admin Service Types --</option>
                                        <?php while($row = $getAdminSetviceTypes->fetch_assoc()) {  ?>
                                          <option value="<?php echo $row['id']; ?>" ><?php echo $row['admin_service_type']; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                          </div>
                          <?php $getAdminUserTypes = getAllDataWithStatus('lkp_admin_user_types','0');?>
                          <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Choose Admin User Types</label>
                                <div class="col-sm-6 col-md-4">
                                    <select name="lkp_admin_user_type_id" id="form-control-1" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" required>
                                        <option value="">-- Choose Admin Service Types --</option>
                                        <?php while($row = $getAdminUserTypes->fetch_assoc()) {  ?>
                                          <option value="<?php echo $row['id']; ?>" ><?php echo $row['admin_type']; ?></option>
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
                    <h3 class="m-t-0 m-b-5 font_sz_view">View Admin Users</h3>
                    <?php $i=1; $getAdminUsers = "SELECT * FROM admin_users WHERE lkp_admin_service_type_id = 3 ORDER BY lkp_status_id, id DESC";
                      $getAdminUsersData = $conn->query($getAdminUsers);
                    ?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dataTable" id="table-2">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Admin Name</th>
                                    <th>Admin Email</th>
                                    <th>Created Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $getAdminUsersData->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $row['admin_name'];?></td>
                                    <td><?php echo $row['admin_email'];?></td>
                                    <td><?php echo $row['created_at'];?></td>
                                    <td><?php if ($row['lkp_status_id']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['lkp_status_id']." data-tbname='admin_users'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['lkp_status_id']." data-incId=".$row['id']." data-tbname='admin_users'>In Active</span>" ;} ?></td>
                                    <td><span> &nbsp;<a href="#"><i class="zmdi zmdi-eye zmdi-hc-fw" data-toggle="modal" data-target="#<?php echo $row['id']; ?>" class=""></i></a></span>  

                                      <span><a href="edit_admin_users.php?cid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a></span></td>

                                      <div class="col-lg-2 col-sm-4 col-xs-6 m-y-5">
                                    <div id="<?php echo $row['id']; ?>" class="modal fade" tabindex="-1" role="dialog">
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
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-4">Name:</div>
                                                    <div class="col-sm-6"><?php echo $row['admin_name'];?></div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-4">Email:</div>
                                                    <div class="col-sm-6"><?php echo $row['admin_email'];?></div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-4">Date:</div>
                                                    <div class="col-sm-6"><?php echo $row['created_at'];?></div>
                                                  </div>
                                                    <div class="row">
                                                  <div class="col-sm-2"></div>
                                                  <div class="col-sm-4">Admin Service Type:</div>
                                                  <div class="col-sm-6"><?php if($row['lkp_admin_service_type_id'] == 1 ){ echo "Services";} elseif($row['lkp_admin_service_type_id'] == 2 ){ echo "Food";} else{ echo "Grocery";}?></div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-sm-2"></div>
                                                  <div class="col-sm-4">Admin User Type:</div>
                                                  <div class="col-sm-6"><?php if($row['lkp_admin_user_type_id'] == 1 ){ echo "Super Admin";} elseif($row['lkp_admin_user_type_id'] == 2 ){ echo "Sub Admin";} else{ echo "Employee";}?></div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-sm-2"></div>
                                                  <div class="col-sm-4">Status:</div>
                                                  <div class="col-sm-6"><?php if($row['lkp_status_id'] == 0 ){ echo "Active";} else{ echo "InActive";}?></div>
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
        
    <?php include_once 'admin_includes/footer.php'; ?>
  </body>
</html>