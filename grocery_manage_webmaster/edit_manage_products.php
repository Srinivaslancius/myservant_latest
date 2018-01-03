<?php include_once 'admin_includes/main_header.php'; ?>
<?php  
$id = $_GET['cid'];
if (!isset($_POST['submit'])) {
      //If fail
        echo "fail";
    } else {
    //If success
            $product_name = $_POST['product_name'];
            $grocery_category_id = $_POST['grocery_category_id'];
            $grocery_sub_category_id = $_POST['grocery_sub_category_id'];
            $product_description = $_POST['product_description'];
            $brands_id = implode(',',$_POST["brands_id"]);
            $keywords = $_POST['keywords'];
            $fileToUpload = $_FILES["fileToUpload"]["name"];
            $lkp_status_id = $_POST['lkp_status_id'];

  
      if($_FILES["fileToUpload"]["name"]!='') {

              $fileToUpload = $_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/grocery_product_images/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('product_image','grocery_products','id',$id,$target_dir);

                //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $sql = "UPDATE grocery_products SET product_name = '$product_name',grocery_category_id='$grocery_category_id',grocery_sub_category_id='$grocery_sub_category_id',product_description='$product_description',brands_id='$brands_id',keywords='$keywords',  product_image = '$fileToUpload', lkp_status_id ='$lkp_status_id' WHERE id='$id'";
                    if($conn->query($sql) === TRUE){
                echo "<script type='text/javascript'>window.location='manage_products.php?msg=success'</script>";
                } else {
                echo "<script type='text/javascript'>window.location='manage_products.php?msg=fail'</script>";
                } 
                }
                
      }
      else {

          $sql = "UPDATE grocery_products SET product_name = '$product_name',grocery_category_id='$grocery_category_id',grocery_sub_category_id='$grocery_sub_category_id',product_description='$product_description',brands_id='$brands_id',keywords='$keywords', lkp_status_id ='$lkp_status_id' WHERE id = '$id' ";
          if($conn->query($sql) === TRUE){
             echo "<script type='text/javascript'>window.location='manage_products.php?msg=success'</script>";
          } else {
             echo "<script type='text/javascript'>window.location='manage_products.php?msg=fail'</script>";
          }

      }
        
    }   
?>
      <div class="site-content">
        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Products</h3>
                </div>
                <?php $getAllProducts = getAllDataWhere('grocery_products','id',$id);
              $getProducts = $getAllProducts->fetch_assoc(); ?>  
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Product Name</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="product_name" class="form-control" id="form-control-3" placeholder="Product Name" data-error="Please enter Product Name." required value="<?php echo $getProducts['product_name'];?>">
                                </div>
                            </div>
                            <?php $getGroceryCategories = getAllDataWithStatus('grocery_category','0');?>
                          <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Select Category</label>
                                <div class="col-sm-6 col-md-4">
                                    <select name="grocery_category_id" id="form-control-1" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" required onChange="getSubCategory(this.value);">
                                        <option value="">-- Select Category --</option>
                                        <?php while($row = $getGroceryCategories->fetch_assoc()) {  ?>
                                        <option <?php if($row['id'] == $getProducts['grocery_category_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <?php $getGrocerySubCategories = getAllDataWithStatus('grocery_sub_categories','0');?>
                          <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Select Sub Category</label>
                                <div class="col-sm-6 col-md-4">
                                    <select name="grocery_sub_category_id" id="grocery_sub_category_id" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }">
                                        <option value="">Select Sub Category</option>
                                        <?php while($row = $getGrocerySubCategories->fetch_assoc()) {  ?>
                                        <option <?php if($row['id'] == $getProducts['grocery_sub_category_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['sub_category_name']; ?></option>
                                    <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3  col-md-4 control-label" for="form-control-8">Product Description</label>
                                <div class="col-sm-6 col-md-4">
                                    <textarea name="product_description" id="product_description" class="form-control" rows="3" required><?php echo $getProducts['product_description'];?></textarea>
                                </div>
                            </div>
                            <?php
                                $getAllBrandsId = explode(',',$getProducts['brands_id']);
                                $getGroceryBrands = getAllDataWithStatus('grocery_brand_logos','0');
                            ?>
                            <div class="form-group">
                                <label for="form-control-1" class="col-sm-3 col-md-4 control-label">Brands Applicable</label>
                                    <div class="col-sm-6 col-md-4">
                                        <select name="brands_id[]" id="form-control-2" class="form-control" data-plugin="select2" multiple="multiple">
                                            <option value="">-- Select Brands --</option>
                                        <?php while($row = $getGroceryBrands->fetch_assoc()) {  ?>
                                            <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == in_array($row['id'], $getAllBrandsId)) { echo "selected=selected"; }?> ><?php echo $row['title']; ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Keywords</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="keywords" class="form-control" id="form-control-3" placeholder="Keywords" data-error="Please enter Keywords." required value="<?php echo $getProducts['keywords'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">Product Image</label>
                                <div class="col-sm-6 col-md-4">
                                  <img src="<?php echo $base_url . 'uploads/grocery_product_images/'.$getProducts['product_image'] ?>"  id="output" height="100" width="100"/>
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input id="form-control-22" name="fileToUpload" id="fileToUpload"  accept="image/*"  class="file-upload-input" type="file" multiple="multiple" onchange="loadFile(event)">
                                    </label>
                                </div>
                            </div>
                            
                            <?php $getStatus = getAllData('lkp_status');?>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Choose your status</label>
                                
                                <div class="col-sm-6 col-md-4">
                                    <select id="form-control-3" name="lkp_status_id" class="custom-select" data-error="This field is required." required>
                                  <option value="">Select Status</option>
                                  <?php while($row = $getStatus->fetch_assoc()) {  ?>
                                  <option <?php if($row['id'] == $getProducts['lkp_status_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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
  
<script type="text/javascript">
    
    function getSubCategory(val) {
        $.ajax({
        type: "POST",
        url: "get_subcategories.php",
        data:'grocery_category_id='+val,
        success: function(data){
            $("#grocery_sub_category_id").html(data);
        }
        });
    }
    
    </script>
    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/dashboard-3.min.js"></script>
    <script src="js/tables-datatables.min.js"></script>