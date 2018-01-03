<?php include_once 'admin_includes/main_header.php'; ?>
<?php  
$id = $_GET['sid'];
if (!isset($_POST['submit'])) {
      //If fail
        echo "fail";
    } else {
    //If success
            $grocery_category_id = $_POST['grocery_category_id'];
            $sub_category_name = $_POST['sub_category_name'];
            $brands_id = implode(',',$_POST["brands_id"]);
            $priority = $_POST['priority'];
            $lkp_status_id = $_POST['lkp_status_id'];
              
                    $sql = "UPDATE grocery_sub_categories SET grocery_category_id = '$grocery_category_id',sub_category_name = '$sub_category_name', brands_id = '$brands_id', priority ='$priority', lkp_status_id = '$lkp_status_id' WHERE id='$id'";
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
                    <h3 class="m-y-0 font_sz_view">Sub Categories</h3>
                </div>

                <?php $getAllSubCategories = getAllDataWhere('grocery_sub_categories','id',$id);
              $getSubCategories = $getAllSubCategories->fetch_assoc(); ?>  

                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                          <?php $getGroceryCategories = getAllDataWithStatus('grocery_category','0');?>
                          <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Select Category</label>
                                <div class="col-sm-6 col-md-4">
                                    <select name="grocery_category_id" id="form-control-1" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" required>
                                        <option value="">-- Select Category --</option>
                                        <?php while($row = $getGroceryCategories->fetch_assoc()) {  ?>
                                        <option <?php if($row['id'] == $getSubCategories['grocery_category_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Sub Category Name</label>
                                
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="sub_category_name" class="form-control" id="form-control-3" placeholder="Enter Sub Category Name" data-error="Please enter Sub Category Name." required value="<?php echo $getSubCategories['sub_category_name'];?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Priority</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="priority" class="form-control" id="form-control-3" placeholder="Enter Priority" required value="<?php echo $getSubCategories['priority'];?>">
                                </div>
                            </div>
                            <?php
                                $getAllBrandsId = explode(',',$getSubCategories['brands_id']);
                                $getGroceryBrands = getAllDataWithStatus('grocery_brand_logos','0');
                            ?>
                            <div class="form-group">
                                <label for="form-control-1" class="col-sm-3 col-md-4 control-label">Brands Applicable</label>
                                    <div class="col-sm-6 col-md-4">
                                        <select name="brands_id[]" id="form-control-2" class="form-control" data-plugin="select2" multiple="multiple" required>
                                            <option value="">-- Select Brands --</option>
                                        <?php while($row = $getGroceryBrands->fetch_assoc()) {  ?>
                                            <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == in_array($row['id'], $getAllBrandsId)) { echo "selected=selected"; }?> ><?php echo $row['title']; ?></option>
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
                                  <option <?php if($row['id'] == $getSubCategories['lkp_status_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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