<?php include_once 'admin_includes/main_header.php'; ?>
<?php  if (!isset($_POST['submit']))  {
          //If fail
          echo "fail";
        } else  {
            //If success
            $link = $_POST['link'];
            $title = $_POST['title'];
            $fileToUpload = $_FILES["fileToUpload"]["name"];
            $fileToUpload1 = $_FILES["fileToUpload1"]["name"];
            $grocery_category_id = $_POST['grocery_category_id'];
            $grocery_sub_category_id = $_POST['grocery_sub_category_id'];
            $created_at = date("Y-m-d h:i:s");   
            $lkp_status_id = $_POST['lkp_status_id'];

            if($fileToUpload!='' && $fileToUpload1!='') {

                $target_dir = "../uploads/grocery_banners_web_images/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                $target_dir1 = "../uploads/grocery_banners_app_images/";
                $target_file1 = $target_dir1 . basename($_FILES["fileToUpload1"]["name"]);
                $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);


                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1);
                    
                     $sql = "INSERT INTO grocery_banners (`link`,`title`,`banners_web_imge`,`banners_app_image`,`grocery_category_id`,`grocery_sub_category_id`, `created_at`,`lkp_status_id`) VALUES ('$link','$title','$fileToUpload','$fileToUpload1','$grocery_category_id','$grocery_sub_category_id','$created_at','$lkp_status_id')"; 
                    if($conn->query($sql) === TRUE){
                       echo "<script type='text/javascript'>window.location='banners.php?msg=success'</script>";
                    } else {
                       echo "<script type='text/javascript'>window.location='banners.php?msg=fail'</script>";
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
                    <h3 class="m-y-0 font_sz_view">Add Banners</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <!-- <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Select City</label>
                                <div class="col-sm-6 col-md-4">
                                    <select id="form-control-1" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }">
                                        <option value="">-- Select Category --</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    </select>
                                </div>
                            </div> -->
                            
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Link</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="url" name="link" class="form-control" id="form-control-3" placeholder="Enter Link" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Title</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="title" class="form-control" id="form-control-3" placeholder="Enter Title" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">Web Image</label>
                                
                                <div class="col-sm-6 col-md-4">
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input id="form-control-22" name="fileToUpload" id="fileToUpload"  accept="image/*"  class="file-upload-input" type="file" multiple="multiple" required>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">App Image</label>
                                <div class="col-sm-6 col-md-4">
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input id="form-control-22" class="file-upload-input" type="file" name="fileToUpload1" id="fileToUploa1"  multiple="multiple" accept="image/*" required>
                                    </label>
                                </div>
                            </div>
                            <?php $getGroceryCategories = getAllDataWithStatus('grocery_category','0');?>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Category</label>
                                <div class="col-sm-6 col-md-4">
                                    <select id="grocery_category_id" name="grocery_category_id" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" required onChange="getSubCategory(this.value);">
                                        <option value="">-- Select Category --</option>
                                        <?php while($row = $getGroceryCategories->fetch_assoc()) {  ?>
                                          <option value="<?php echo $row['id']; ?>" ><?php echo $row['category_name']; ?></option>
                                      <?php } ?>
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Sub Category</label>
                                <div class="col-sm-6 col-md-4">
                                    <select name ="grocery_sub_category_id" id="grocery_sub_category_id" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }">
                                        <option value="">-- Select Sub Category --</option>
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
                    <h3 class="m-t-0 m-b-5 font_sz_view">View Banners</h3>
                     <?php $getProductsData = getAllDataWithActiveRecent('grocery_banners'); $i=1; ?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dataTable" id="table-2">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Link</th>
                                    <th>Title</th>
                                    <th>Web Image</th>
                                    <th>App Image</th>
                                    <th>Category</th>
                                    <th>Sub category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $getProductsData->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $row['link'];?></td>
                                    <td><?php echo $row['title'];?></td>
                                    <td><img src="<?php echo $base_url . 'uploads/grocery_banners_web_images/'.$row['banners_web_imge'] ?>" width="100" height="100"></td>
                                    <td><img src="<?php echo $base_url . 'uploads/grocery_banners_app_images/'.$row['banners_app_image'] ?>" width="100" height="100"></td>
                                    <td><?php $getGroceryCategories = getAllData('grocery_category'); while($getGroceryCategories1 = $getGroceryCategories->fetch_assoc()) { 
                                        if($row['grocery_category_id'] == $getGroceryCategories1['id']) { echo $getGroceryCategories1['category_name']; } } ?></td>
                                        <td><?php $getGrocerySubCategories = getAllData('grocery_sub_categories'); while($getServicesSubCategories1 = $getGrocerySubCategories->fetch_assoc()) { if($row['grocery_sub_category_id'] == $getServicesSubCategories1['id']) { echo $getServicesSubCategories1['sub_category_name']; } } ?></td>
                                     <td><?php if ($row['lkp_status_id']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['lkp_status_id']." data-tbname='grocery_banners'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['lkp_status_id']." data-incId=".$row['id']." data-tbname='grocery_banners'>In Active</span>" ;} ?></td>
                                    
                                    <td><span><a href="edit_manage_banners.php?cid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a></span></td>
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
    <?php include_once 'admin_includes/footer.php'; ?> 
  </body>
</html>