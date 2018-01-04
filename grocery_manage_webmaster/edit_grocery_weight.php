<?php include_once 'admin_includes/main_header.php'; ?>
<?php  
$id = $_GET['cid'];
if (!isset($_POST['submit'])) {
      //If fail
        echo "fail";
    } else {
    //If success
            $weight_type = $_POST['weight_type'];
            $lkp_status_id = $_POST['lkp_status_id'];
             
                    $sql = "UPDATE grocery_weights SET weight_type = '$weight_type', lkp_status_id ='$lkp_status_id' WHERE id='$id'";
                    if($conn->query($sql) === TRUE){
                echo "<script type='text/javascript'>window.location='grocery_weight.php?msg=success'</script>";
                } else {
                echo "<script type='text/javascript'>window.location='grocery_weight.php?msg=fail'</script>";
                } 
                
                
      
        
    }   
?>
      <div class="site-content">
        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Weights</h3>
                </div>
                <?php $getAllGroceryWeights = getAllDataWhere('grocery_weights','id',$id);
              $getGroceryWeights = $getAllGroceryWeights->fetch_assoc(); ?>  
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Weight Type</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="weight_type" class="form-control" id="form-control-3" placeholder="Weight Type"  data-error="Please enter Weight Type" required onkeyup="checkUserAvailTest()" value="<?php echo $getGroceryWeights['weight_type'];?>">
                                </div>
                            </div>
                      
                    
                            <?php $getStatus = getAllData('lkp_status');?>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Choose your status</label>
                                
                                <div class="col-sm-6 col-md-4">
                                    <select id="form-control-3" name="lkp_status_id" class="custom-select" data-error="This field is required." required>
                                  <option value="">Select Status</option>
                                  <?php while($row = $getStatus->fetch_assoc()) {  ?>
                                  <option <?php if($row['id'] == $getGroceryWeights['lkp_status_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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