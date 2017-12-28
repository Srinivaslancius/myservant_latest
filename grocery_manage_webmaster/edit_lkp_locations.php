<?php include_once 'admin_includes/main_header.php'; ?>
<?php  
error_reporting(0);
$cityid = $_GET['cityid'];
if (!isset($_POST['submit']))  {
  //If fail
  echo "fail";
}else  {
  //If success
  //echo "<pre>";print_r($_POST);exit;
  $lkp_state_id = $_POST['lkp_state_id'];
  $lkp_district_id = $_POST['lkp_district_id'];
  $lkp_city_id = $_POST['lkp_city_id'];
  $location_name = $_POST['location_name'];
  $location_pincode = $_POST['location_pincode'];
  $lkp_status_id = $_POST['lkp_status_id'];
  
    $sql = "UPDATE food_lkp_locations SET lkp_state_id = '$lkp_state_id',lkp_district_id ='$lkp_district_id',lkp_city_id ='$lkp_city_id',location_name = '$location_name',location_pincode ='$location_pincode',lkp_status_id ='$lkp_status_id' WHERE lkp_city_id = $cityid"; 
    if($conn->query($sql) === TRUE){
       echo "<script type='text/javascript'>window.location='lkp_locations.php?msg=success'</script>";
    } else {
       echo "<script type='text/javascript'>window.location='lkp_locations.php?msg=fail'</script>";
    }
  
}
?>
      <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Locations</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <?php $sql = "SELECT * FROM food_lkp_locations WHERE lkp_city_id = $cityid";
               $getLocations = $conn->query($sql);
              $getLocationsData = $getLocations->fetch_assoc(); ?>
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="POST" enctype="multipart/form-data">
                  <?php $getStates = getAllDataWithStatus('lkp_states','0');?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your State</label>
                    <select name="lkp_state_id" class="custom-select" data-error="This field is required." required onChange="getDistricts(this.value);">
                      <option value="">Select State</option>
                      <?php while($row = $getStates->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getLocationsData['lkp_state_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['state_name']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>

                  <?php $getDistrcits = getAllDataWithStatus('lkp_districts','0');?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your District</label>
                    <select id="lkp_district_id" name="lkp_district_id" class="custom-select" data-error="This field is required." required onChange="getCities(this.value);">
                      <option value="">Select District</option>
                      <?php while($row = $getDistrcits->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getLocationsData['lkp_district_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['district_name']; ?></option>
                      <?php } ?>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>

                  <?php $getCities = getAllDataWithStatus('lkp_cities','0');?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your City</label>
                    <select id="lkp_city_id" name="lkp_city_id" class="custom-select" data-error="This field is required." required>
                      <option value="">Select City</option>
                      <?php while($row = $getCities->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getLocationsData['lkp_city_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['city_name']; ?></option>
                      <?php } ?>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>

                  
                  
                    <?php $sql = "SELECT * FROM food_lkp_locations WHERE lkp_city_id = $cityid";
                         $getLocations1 = $conn->query($sql);
                         $getLocationsData1 = $getLocations1->fetch_assoc();
                    ?>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="form-control-2" class="control-label">Location Name</label>
                          <input type="text" name="location_name" class="form-control" id="form-control-2" placeholder="Location Name" data-error="Please enter Location Name" required value="<?php echo $getLocationsData1['location_name'];?>">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="form-control-2" class="control-label">Location Pincode</label>
                          <input type="text" name="location_pincode" class="form-control" id="form-control-2" placeholder="Location Pincode" data-error="Please enter Location Pincode" required value="<?php echo $getLocationsData1['location_pincode'];?>" onkeypress="return isNumberKey(event)" maxlength="6" >
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                    </div>
                  
                  <?php $getStatus = getAllData('lkp_status');?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="lkp_status_id" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getLocationsData['lkp_status_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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