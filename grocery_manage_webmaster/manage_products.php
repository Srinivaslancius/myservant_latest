<?php include_once 'admin_includes/main_header.php'; ?>
<?php  if (!isset($_POST['submit']))  {
          //If fail
          echo "fail";
        } else  {
            //If success
            $product_name = $_POST['product_name'];
            $grocery_category_id = $_POST['grocery_category_id'];
            $grocery_sub_category_id = $_POST['grocery_sub_category_id'];
            $product_description = $_POST['product_description'];
            $brands_id = implode(',',$_POST["brands_id"]);
            $keywords = $_POST['keywords'];
            $fileToUpload = $_FILES["fileToUpload"]["name"];
            $lkp_status_id = $_POST['lkp_status_id'];

            if($fileToUpload!='' ) {

                $target_dir = "../uploads/grocery_product_images/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    
                     $sql = "INSERT INTO grocery_products (`product_name`,`product_image`,`grocery_category_id`,`grocery_sub_category_id`,`product_description`,`keywords`,`brands_id`,`lkp_status_id`) VALUES ('$product_name','$fileToUpload','$grocery_category_id','$grocery_sub_category_id','$product_description','$keywords','$brands_id','$lkp_status_id')"; 
                    if($conn->query($sql) === TRUE){
                       echo "<script type='text/javascript'>window.location='manage_products.php?msg=success'</script>";
                    } else {
                       echo "<script type='text/javascript'>window.location='manage_products.php?msg=fail'</script>";
                    }
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }   
        }
?>
        <div class="site-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Add Products</h3>

                </div>
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal"  method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Product Name</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="product_name" class="form-control" id="form-control-3" placeholder="Enter Product Name" required>
                                </div>
                            </div>
                            <?php $getGroceryCategories = getAllDataWithStatus('grocery_category','0');?>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Select Category</label>
                                <div class="col-sm-6 col-md-4">
                                    <select name="grocery_category_id" id="grocery_category_id" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" required onChange="getSubCategory(this.value);">
                                        <option value="">-- Select Category --</option>
                                        <?php while($row = $getGroceryCategories->fetch_assoc()) {  ?>
                                          <option value="<?php echo $row['id']; ?>" ><?php echo $row['category_name']; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Select Sub Category</label>
                                <div class="col-sm-6 col-md-4">
                                    <select name ="grocery_sub_category_id" id="grocery_sub_category_id" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" required>
                                        <option value="">Select Grocery Sub Category</option>
                                    </select>
                                </div>
                            </div>
                    
                            <div class="form-group">
                                <label class="col-sm-3  col-md-4 control-label" for="form-control-8">Product Description</label>
                                <div class="col-sm-6 col-md-4">
                                    <textarea name="product_description" id="product_description" class="form-control" rows="3" required></textarea>
                                </div>
                            </div>
                            <?php $getGroceryBrands = getAllDataWithStatus('grocery_brand_logos','0');?>
                            <div class="form-group">
                                <label for="form-control-1" class="col-sm-3 col-md-4 control-label">Brands Applicable</label>
                                    <div class="col-sm-6 col-md-4">
                                        <select name="brands_id[]" id="form-control-2" class="form-control" data-plugin="select2" multiple="multiple" required>
                                            <option value="">-- Select Brands --</option>
                                        <?php while($row = $getGroceryBrands->fetch_assoc()) {  ?>
                                            <option value="<?php echo $row['id']; ?>" ><?php echo $row['title']; ?></option>
                                          <?php } ?>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Keywords</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name= "keywords" class="form-control" id="keywords" placeholder="Enter Keywords" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">Product Image</label>
                                <div class="col-sm-6 col-md-4">
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input  class="file-upload-input" type="file" name="fileToUpload" id="fileToUpload" accept="image/*" multiple="multiple" required>
                                    </label>
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
                    <h3 class="m-t-0 m-b-5 font_sz_view">Products</h3>
                    <?php $getProductsData = getAllDataWithActiveRecent('grocery_products'); $i=1; ?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dataTable" id="table-2">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Product Name</th>
                                    <th>Category Name</th>
                                    <th>Product Description</th>
                                    <th>Keywords</th>
                                    <th>Product Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $getProductsData->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $i;?></td>

                                    <td><?php echo $row['product_name'];?></td>
                                    <td><?php $getGroceryCategories = getAllData('grocery_category'); while($getGroceryCategories1 = $getGroceryCategories->fetch_assoc()) { 
                                        if($row['grocery_category_id'] == $getGroceryCategories1['id']) { echo $getGroceryCategories1['category_name']; } } ?></td>
                                    <td><?php echo substr(strip_tags($row['product_description']), 0,150);?></td>
                                    <td><?php echo $row['keywords'];?></td>
                                    <td><img src="<?php echo $base_url . 'uploads/grocery_product_images/'.$row['product_image'] ?>" width="100" height="100"></td>
                                    <td><?php if ($row['lkp_status_id']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['lkp_status_id']." data-tbname='grocery_products'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['lkp_status_id']." data-incId=".$row['id']." data-tbname='grocery_products'>In Active</span>" ;} ?></td>
                                    <td><span><a href="edit_manage_products.php?cid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a></span></td>
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