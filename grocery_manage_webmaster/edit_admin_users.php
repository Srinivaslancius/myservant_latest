<?php include_once 'admin_includes/main_header.php'; ?>
<?php
error_reporting(0);
$id = $_GET['cid'];
 if (!isset($_POST['submit']))  {
            echo "fail";
    } else  {

            $admin_name = $_POST['admin_name'];
            $admin_email = $_POST['admin_email'];
            $admin_password = encryptPassword($_POST['admin_password']);
            $lkp_admin_service_type_id = $_POST['lkp_admin_service_type_id'];
            $lkp_admin_user_type_id = $_POST['lkp_admin_user_type_id'];
            $lkp_status_id = $_POST['lkp_status_id'];

            $sql = "UPDATE `admin_users` SET admin_name='$admin_name', admin_email='$admin_email', admin_password='$admin_password',lkp_admin_service_type_id='$lkp_admin_service_type_id',lkp_admin_user_type_id='$lkp_admin_user_type_id', lkp_status_id = '$lkp_status_id' WHERE id = '$id' ";
            if($conn->query($sql) === TRUE){
               echo "<script type='text/javascript'>window.location='admin_users.php?msg=success'</script>";
            } else {
               echo "<script type='text/javascript'>window.location='admin_users.php?msg=fail'</script>";
            }
        }
?>
      <div class="site-content">
        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Admin Users</h3>
                </div>
                <?php $getAdminUsers = getAllDataWhere('admin_users','id',$id);
              $getAdminUsersData = $getAdminUsers->fetch_assoc(); ?>  
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Admin Name</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="admin_name" class="form-control" id="form-control-3" placeholder="Admin Name" required value="<?php echo $getAdminUsersData['admin_name'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Email</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="email" name="admin_email" class="form-control" placeholder="Enter Email" id="user_input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"  data-error="Please enter a valid email address." onkeyup="checkUserAvailTest()" required value="<?php echo $getAdminUsersData['admin_email'];?>">
                                    <span id="input_status" style="color: red;"></span>
                                    <div class="help-block with-errors"></div>
                                    <input type="hidden" id="table_name" value="admin_users">
                                    <input type="hidden" id="column_name" value="admin_email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Password</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="password" name="admin_password" class="form-control" id="form-control-3" placeholder="Password" minlength="8" data-error="Please Enter Minimum 8 characters." required value="<?php echo decryptPassword($getAdminUsersData['admin_password']);?>">
                                </div>
                            </div>
                            <?php $getAdminSetvices = "SELECT * from `lkp_admin_service_types` WHERE `lkp_status_id` = '0' And id =3 ";
                              $getAdminSetviceTypes = $conn->query($getAdminSetvices);
                            ?>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Choose Admin Service Types</label>
                                <div class="col-sm-6 col-md-4">
                                    <select name="lkp_admin_service_type_id" id="form-control-1" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }">
                                        <option value="">-- Select Admin Service Types --</option>
                                        <?php while($row = $getAdminSetviceTypes->fetch_assoc()) {  ?>
                                        <option <?php if($row['id'] == $getAdminUsersData['lkp_admin_service_type_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['admin_service_type']; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <?php $getAdminUserTypes = getAllDataWithStatus('lkp_admin_user_types','0');?>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Choose Admin Service Types</label>
                                <div class="col-sm-6 col-md-4">
                                    <select name="lkp_admin_user_type_id" id="form-control-1" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }">
                                        <option value="">-- Select Admin Service Types --</option>
                                        <?php while($row = $getAdminUserTypes->fetch_assoc()) {  ?>
                                        <option <?php if($row['id'] == $getAdminUsersData['lkp_admin_user_type_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['admin_type']; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <?php $getStatus = getAllData('lkp_status');?>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Choose your status</label>
                                
                                <div class="col-sm-6 col-md-4">
                                    <select id="form-control-3" name="lkp_status_id" class="custom-select" data-error="This field is required." required>
                                  <option value="">Select Status</option>
                                  <?php while($row = $getStatus->fetch_assoc()) {  ?>
                                  <option <?php if($row['id'] == $getAdminUsersData['lkp_status_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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
      </div>
<?php include_once 'admin_includes/footer.php'; ?>