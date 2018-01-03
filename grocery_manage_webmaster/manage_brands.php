<?php include_once 'admin_includes/main_header.php'; ?>
<?php  if (!isset($_POST['submit']))  {
          //If fail
          echo "fail";
        } else  {
            //If success
            $title = $_POST['title'];
            $fileToUpload = $_FILES["fileToUpload"]["name"];
            $fileToUpload1 = $_FILES["fileToUpload1"]["name"];
            $fileToUpload2 = $_FILES["fileToUpload2"]["name"];
            $lkp_status_id = $_POST['lkp_status_id'];

            if($fileToUpload!='' && $fileToUpload1!='') {

                $target_dir = "../uploads/grocery_brands_web_logos/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                $target_dir1 = "../uploads/grocery_brands_app_logos/";
                $target_file1 = $target_dir1 . basename($_FILES["fileToUpload1"]["name"]);
                $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);


                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1);
                    
                     $sql = "INSERT INTO grocery_brand_logos (`title`,`web_brand_logo`,`app_brand_logo`, `lkp_status_id`) VALUES ('$title','$fileToUpload','$fileToUpload1','$lkp_status_id')"; 
                    if($conn->query($sql) === TRUE){
                       echo "<script type='text/javascript'>window.location='manage_brands.php?msg=success'</script>";
                    } else {
                       echo "<script type='text/javascript'>window.location='manage_brands.php?msg=fail'</script>";
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
                    <h3 class="m-y-0 font_sz_view">Add Brands</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Brand Name</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="title" class="form-control" id="form-control-3" placeholder="Enter Brand Name">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">Web Logo</label>
                                
                                <div class="col-sm-6 col-md-4">
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input id="form-control-22" name="fileToUpload" id="fileToUpload"  accept="image/*"  class="file-upload-input" type="file" multiple="multiple">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">App Logo</label>
                                <div class="col-sm-6 col-md-4">
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input id="form-control-22" class="file-upload-input" type="file" name="fileToUpload1" id="fileToUploa1"  multiple="multiple" accept="image/*">
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
                                    <button type="submit" name= "submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel panel-default panel-table m-b-0">
                <div class="panel-heading">
                    <h3 class="m-t-0 m-b-5 font_sz_view">View Brands</h3>
                    <?php $getBrandsData = getAllDataWithActiveRecent('grocery_brand_logos'); $i=1; ?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dataTable" id="table-2">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Brand Name</th>
                                    <th>Web Logo</th>
                                    <th>App Logo</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $getBrandsData->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $row['title'];?></td>
                                    <td><img src="<?php echo $base_url . 'uploads/grocery_brands_web_logos/'.$row['web_brand_logo'] ?>" width="100" height="100"></td>
                                    <td><img src="<?php echo $base_url . 'uploads/grocery_brands_app_logos/'.$row['app_brand_logo'] ?>" width="100" height="100"></td>
                                    <td><?php if ($row['lkp_status_id']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['lkp_status_id']." data-tbname='grocery_brand_logos'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['lkp_status_id']." data-incId=".$row['id']." data-tbname='grocery_brand_logos'>In Active</span>" ;} ?></td>
                                    <td><span><a href="edit_manage_brands.php?cid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a></span></td>
                                </tr>
                                <?php $i++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <div class="site-footer">
          2017 © Cosmos
        </div>

    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/dashboard-3.min.js"></script>
    <script src="js/tables-datatables.min.js"></script>
  </body>
</html>