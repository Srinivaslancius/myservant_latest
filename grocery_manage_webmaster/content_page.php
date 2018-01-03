<?php include_once 'admin_includes/main_header.php'; ?>
      <?php  if (!isset($_POST['submit']))  {
          //If fail
          echo "fail";
        } else  {
            //If success
      $title = $_POST['title'];
      $meta_title = $_POST['meta_title'];
      $meta_keywords = $_POST['meta_keywords'];
      $meta_desc = $_POST['meta_desc'];
      $lkp_status_id = $_POST['lkp_status_id'];
      $created_at = date("Y-m-d h:i:s");
      $fileToUpload = $_FILES["fileToUpload"]["name"];
            
            if($fileToUpload!='') {

                $target_dir = "../uploads/grocery_content_pages_images/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      $sql = "INSERT INTO grocery_content_pages (`title`, `image`, `meta_title`, `meta_keywords`, `meta_desc`,`lkp_status_id`,`created_at`) VALUES ('$title','$fileToUpload', '$meta_title','$meta_keywords','$meta_desc','$lkp_status_id','$created_at')";
                    if($conn->query($sql) === TRUE){
                       echo "<script type='text/javascript'>window.location='content_page.php?msg=success'</script>";
                    } else {
                       echo "<script type='text/javascript'>window.location='content_page.php?msg=fail'</script>";
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
                    <h3 class="m-y-0 font_sz_view">Add Content Page</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Title</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="title" class="form-control" id="form-control-3" placeholder="Enter Title" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Meta Title</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="meta_title" class="form-control" id="form-control-3" placeholder="Enter Meta Title" data-error="Please enter Title" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Meta Keywords</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="meta_keywords" class="form-control" id="form-control-3" placeholder="Enter Meta Keywords" data-error="Please enter Meta Keywords" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3  col-md-4 control-label" for="form-control-8">Meta Description</label>
                                <div class="col-sm-6 col-md-4">
                                    <textarea id="form-control-8" name="meta_desc"  class="form-control" rows="3" placeholder="Meta Description" data-error="This field is required." required></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">Banner Image</label>
                                <div class="col-sm-6 col-md-4">
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input id="form-control-22" class="file-upload-input" type="file" multiple="multiple" name="fileToUpload" id="fileToUpload"  onchange="loadFile(event)" required>
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
                    <h3 class="m-t-0 m-b-5 font_sz_view">Content Page</h3>
                    <?php $getContentPagesData = getAllDataWithActiveRecent('grocery_content_pages'); $i=1; ?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dataTable" id="table-2">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Title</th>
                                    <th>Meta Title</th>
                                    <th>Meta Keywords</th>
                                    <th>Meta Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $getContentPagesData->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $row['title'];?></td>
                                    <td><?php echo $row['meta_title'];?></td>
                                    <td><?php echo $row['meta_keywords'];?></td>
                                    <td><?php echo substr(strip_tags($row['meta_desc']), 0,150);?></td>
                                    <td><img src="<?php echo $base_url . 'uploads/grocery_content_pages_images/'.$row['image'] ?>" width="100" height="100"></td>
                                    <td><?php if ($row['lkp_status_id']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['lkp_status_id']." data-tbname='grocery_content_pages'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['lkp_status_id']." data-incId=".$row['id']." data-tbname='grocery_content_pages'>In Active</span>" ;} ?></td>
                                    <td><span><a href="edit_manage_content_pages.php?cid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a></span></td>
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

    <?php include_once 'admin_includes/footer.php'; ?>  </body>
</html>