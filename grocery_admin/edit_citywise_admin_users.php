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
      <?php $cid = $_GET['cid']; ?>
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

            $sql = "UPDATE `city_wise_admin_users` SET lkp_state_id = '$lkp_state_id',lkp_district_id = '$lkp_district_id',lkp_city_id = '$lkp_city_id', admin_name = '$admin_name', admin_email = '$admin_email', admin_mobile = '$admin_mobile', lkp_status_id = '$lkp_status_id' WHERE id = '$cid' ";
            
            
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
                    <h3 class="m-y-0 font_sz_view">Admin Users</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <?php $getGrcTest = getIndividualDetails('city_wise_admin_users','id',$cid); ?>
                        <form class="form-horizontal" method="POST" autocomplete="off" enctype="multipart/form-data">
                            <div class="form-group">
                                <?php $getStates = getAllDataWithStatus('lkp_states','0');?>
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-3">Select State</label>
                                <div class="col-sm-6 col-md-4">
                                    <select id="form-control-1" name="lkp_state_id" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" required onChange="getDistricts(this.value);">
                                      <option value="">--Select State--</option>
                                      <?php while($row = $getStates->fetch_assoc()) {  ?>
                                          <option <?php if($row['id'] == $getGrcTest['lkp_state_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['state_name']; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php $getDistrictsData = getAllDataWithStatus('lkp_districts','0');?>
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-3">Select District</label>
                                <div class="col-sm-6 col-md-4">
                                    <select name="lkp_district_id" id="lkp_district_id" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" required onChange="getCities(this.value);">
                                      <option value="">--Select District--</option>
                                      <?php while($row = $getDistrictsData->fetch_assoc()) {  ?>
                                          <option <?php if($row['id'] == $getGrcTest['lkp_district_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['district_name']; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php $getCities = getAllDataWithStatus('lkp_cities','0');?>
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-3">Select City</label>
                                <div class="col-sm-6 col-md-4">
                                    <select name="lkp_city_id" id="lkp_city_id" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" required>
                                      <option value="">--Select City--</option>
                                      <?php while($row = $getCities->fetch_assoc()) {  ?>
                                          <option <?php if($row['id'] == $getGrcTest['lkp_city_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['city_name']; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Name</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="admin_name" class="form-control" id="form-control-3" placeholder="Enter Name"  required="required" value="<?php echo $getGrcTest['admin_name'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Email</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="email"  name="admin_email" class="form-control" id="form-control-3" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" placeholder="Enter Email"  required="required" value="<?php echo $getGrcTest['admin_email'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Mobile</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="admin_mobile" class="form-control" id="form-control-3" placeholder="Enter Mobile"  required="required" onkeypress="return isNumberKey(event)" maxlength="10" pattern="[0-9]{10}" value="<?php echo $getGrcTest['admin_mobile'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Password</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="password" name="admin_password" class="form-control" id="form-control-3" placeholder="Enter Password" minlength="8" required="required" value="<?php echo decryptPassword($getGrcTest['admin_password']);?>">
                                </div>
                            </div>
                             
                            <?php $getStatus = getAllData('lkp_status');?>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">Status</label>
                                <div class="col-sm-6 col-md-4">
                                    <select id="lkp_status_id" name="lkp_status_id" class="form-control" required>
                                        <option value="">-- Select Status --</option>
                                         <?php while($row = $getStatus->fetch_assoc()) {  ?>
                                              <option <?php if($row['id'] == $getGrcTest['lkp_status_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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
            
            
        </div>
        <?php include_once 'footer.php'; ?>
  </body>
</html>