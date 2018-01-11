<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <title>Cosmos</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/cosmos.min.css">
    <link rel="stylesheet" href="css/application.min.css">
  </head>
  <body class="layout layout-header-fixed layout-left-sidebar-fixed">
    <div class="site-overlay"></div>
    <div class="site-header">
        <?php include_once './main_header.php';?>
    </div>
    <div class="site-main">
      <div class="site-left-sidebar">
        <div class="sidebar-backdrop"></div>
        <div class="custom-scrollbar">
            <?php include_once './side_menu.php';?>
        </div>
      </div>
      <div class="site-right-sidebar">
        <?php include_once './right_slide_toggle.php';?>
      </div>

        <?php
        if (!isset($_POST['submit']))  {
          echo "fail";
        } else  { 

            //echo "<pre>"; print_r($_POST); die;
            $lkp_state_id = $_POST['lkp_state_id'];
            $lkp_district_id = $_POST['lkp_district_id'];
            $lkp_city_id = $_POST['lkp_city_id'];

            $admin_name = $_REQUEST['admin_name'];
            $admin_email = $_REQUEST['admin_email'];
            $admin_mobile = $_REQUEST['admin_mobile'];
            $admin_password = encryptPassword($_REQUEST['admin_password']);
            $lkp_status_id = $_REQUEST['lkp_status_id'];

            $sql = "INSERT INTO city_wise_admin_users (`lkp_state_id`,`lkp_district_id`,`lkp_city_id`,`admin_name`,`admin_email`,`admin_mobile`,`admin_password`, `lkp_status_id`) VALUES ('$lkp_state_id','$lkp_district_id','$lkp_city_id','$admin_name', '$admin_email', '$admin_mobile','$admin_password','$lkp_status_id')";
           
            
            $result = $conn->query($sql);
           
            if( $result == 1){
                echo "<script type='text/javascript'>window.location='city_wise_admin_users.php?msg=success'</script>";
            } else {
                echo "<script type='text/javascript'>window.location='city_wise_admin_users.php?msg=fail'</script>";
            }
        }
        ?>

        <div class="site-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">City Wise Admin Users</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="POST" autocomplete="off" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="l-sm-3 col-md-4 control-label" for="form-control-3">Select State</label>
                                <div class="col-sm-6 col-md-4">
                                    <select id="form-control-1" name="lkp_state_id" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" onChange="getDistricts(this.value);" required>
                                        <option value="">-- Select State --</option>
                                        <?php $getStates = getAllDataWithStatus('lkp_states','0');?>
                                        <?php while($row = $getStates->fetch_assoc()) {  ?>
                                            <option value="<?php echo $row['id']; ?>" ><?php echo $row['state_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-3">Select District</label>
                                <div class="col-sm-6 col-md-4">
                                    <select id="lkp_district_id" name="lkp_district_id" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" onChange="getCities(this.value);" required>
                                        <option value="">-- Select District --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-3">Select City</label>
                                <div class="col-sm-6 col-md-4">
                                    <select id="lkp_city_id" name="lkp_city_id" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" required>
                                        <option value="">-- Select City --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Name</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="admin_name" class="form-control" id="form-control-3" placeholder="Enter Admin Name"  required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Email</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="email"  name="admin_email" class="form-control" id="form-control-3" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" placeholder="Enter Admin Email"  required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Mobile</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="admin_mobile" class="form-control" id="form-control-3" placeholder="Enter Admin Mobile"  required="required" onkeypress="return isNumberKey(event)" maxlength="10" pattern="[0-9]{10}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Password</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="password" name="admin_password" class="form-control" id="form-control-3" placeholder="Enter Admin Password"  minlength="8" required="required">
                                </div>
                            </div>
                            <?php $getStatus = getAllData('lkp_status');?>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">Status</label>
                                <div class="col-sm-6 col-md-4">
                                    <select id="lkp_status_id" name="lkp_status_id" class="form-control" required>
                                        <option value="">-- Select Status --</option>
                                         <?php while($row = $getStatus->fetch_assoc()) {  ?>
                                              <option value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
                                          <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                                   <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

             <div class="panel panel-default panel-table m-b-0">
                <div class="panel-heading">
                    <h3 class="m-t-0 m-b-5 font_sz_view">View City Wise Admin Users</h3>
                    
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dataTable" id="table-2">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>State Name</th>
                                    <th>District Name</th>
                                    <th>City Name</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $getCityWiseAdminUsers = getAllDataWithActiveRecent('city_wise_admin_users'); $i=1; ?>
                                <?php while ($row = $getCityWiseAdminUsers->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php $getStates = getAllData('lkp_states'); while($getStatesData = $getStates->fetch_assoc()) { if($row['lkp_state_id'] == $getStatesData['id']) { echo $getStatesData['state_name']; } } ?></td>

                                    <td><?php $getDistricts = getAllData('lkp_districts'); while($getDistrictsData = $getDistricts->fetch_assoc()) { if($row['lkp_district_id'] == $getDistrictsData['id']) { echo $getDistrictsData['district_name']; } } ?></td>
                                    <td><?php $getCities = getAllData('lkp_cities'); while($getCitiesData = $getCities->fetch_assoc()) { if($row['lkp_city_id'] == $getCitiesData['id']) { echo $getCitiesData['city_name']; } } ?></td>
                                    <td><?php echo $row['admin_name']; ?></td>
                                    <td><?php echo $row['admin_email']; ?></td>
                                    <td><?php echo $row['admin_mobile']; ?></td>

                                    <td><?php if ($row['lkp_status_id']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['lkp_status_id']." data-tbname='admin_users'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['lkp_status_id']." data-incId=".$row['id']." data-tbname='admin_users'>In Active</span>" ;} ?></td>
                                    <td> <a href="edit_citywise_admin_users.php?cid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit"></i></a></td>
                                </tr>
                                <?php $i++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        

    <?php include_once 'footer.php'; ?>
    <script src="js/dashboard-3.min.js"></script>
    <script src="js/forms-plugins.min.js"></script>
    <script src="js/tables-datatables.min.js"></script>    
  </body>
</html>