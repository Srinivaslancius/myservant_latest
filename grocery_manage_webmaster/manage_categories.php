<?php include_once 'admin_includes/main_header.php'; ?>

<?php  if (!isset($_POST['submit']))  {
          //If fail
          echo "fail";
        } else  {
            //If success
            $category_name = $_POST['category_name'];
            $lkp_status_id =$_POST['lkp_status_id'];
            $fileToUpload = $_FILES["fileToUpload"]["name"];
            $fileToUpload1 = $_FILES["fileToUpload1"]["name"];
            $fileToUpload2 = $_FILES["fileToUpload2"]["name"];
            $category_position = $_POST['category_position'];
            
            if($fileToUpload!='' && $fileToUpload1!='' && $fileToUpload2!='') {

                $target_dir = "../uploads/grocery_category_web_images/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                $target_dir1 = "../uploads/grocery_category_app_images/";
                $target_file1 = $target_dir1 . basename($_FILES["fileToUpload1"]["name"]);
                $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);

                $target_dir2 = "../uploads/grocery_category_icon_images/";
                $target_file2 = $target_dir2 . basename($_FILES["fileToUpload2"]["name"]);
                $imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1);
                    move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2);
                     $sql = "INSERT INTO grocery_category (`category_name`,`category_web_image`,`category_app_image`, `category_icon`, `category_position`,`lkp_status_id`) VALUES ('$category_name','$fileToUpload','$fileToUpload1','$fileToUpload2','$category_position','$lkp_status_id')"; 
                    if($conn->query($sql) === TRUE){
                       echo "<script type='text/javascript'>window.location='manage_categories.php?msg=success'</script>";
                    } else {
                       echo "<script type='text/javascript'>window.location='manage_categories.php?msg=fail'</script>";
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
                    <h3 class="m-y-0 font_sz_view">Add Category</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Category Name</label>
                                
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="category_name" class="form-control" id="form-control-3" placeholder="Enter Category Name" data-error="Please enter Category Name." required>
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
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">Icon</label>
                                
                                <div class="col-sm-6 col-md-4">
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input id="form-control-22" class="file-upload-input" type="file" name="fileToUpload2" id="fileToUploa2"  multiple="multiple" accept="image/*" required>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Priority</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="category_position" class="form-control" id="form-control-3" placeholder="Enter Priority" required>
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
                    <h3 class="m-t-0 m-b-5 font_sz_view">Categories</h3>
                    <?php $getCategoriesData = getAllDataWithActiveRecent('grocery_category'); $i=1; ?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dataTable" id="table-2">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Category Name</th>
                                    <th>Web Logo</th>
                                    <th>App Logo</th>
                                    <th>Icon</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $getCategoriesData->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $row['category_name'];?></td>
                                    <td><img src="<?php echo $base_url . 'uploads/grocery_category_web_images/'.$row['category_web_image'] ?>" width="100" height="100"></td>
                                    <td><img src="<?php echo $base_url . 'uploads/grocery_category_app_images/'.$row['category_app_image'] ?>" width="100" height="100"></td>
                                     <td><img src="<?php echo $base_url . 'uploads/grocery_category_icon_images/'.$row['category_icon'] ?>" width="100" height="100"></td>
                                      <td><?php echo $row['category_position'];?></td>
                                    <td><?php if ($row['lkp_status_id']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['lkp_status_id']." data-tbname='grocery_category'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['lkp_status_id']." data-incId=".$row['id']." data-tbname='grocery_category'>In Active</span>" ;} ?></td>
                                    <td><span><a href="delete_manage_webmaster.php?tid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-delete zmdi-hc-fw"></i></a></span> <span><a href="edit_manage_categories.php?cid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a></span></td>
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