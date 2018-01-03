<?php include_once 'admin_includes/main_header.php'; ?>
<?php  
$id = $_GET['cid'];
if (!isset($_POST['submit'])) {
      //If fail
        echo "fail";
    } else {
    //If success
      $title = $_POST['title'];
      $meta_title = $_POST['meta_title'];
      $meta_keywords = $_POST['meta_keywords'];
      $meta_desc = $_POST['meta_desc'];
      $lkp_status_id = $_POST['lkp_status_id'];
      $fileToUpload = $_FILES["fileToUpload"]["name"];

  
      if($_FILES["fileToUpload"]["name"]!='') {

              $fileToUpload = $_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/grocery_content_pages_images/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('image','grocery_content_pages','id',$id,$target_dir);

                //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $sql = "UPDATE grocery_content_pages SET title = '$title', meta_title='$meta_title',meta_keywords='$meta_keywords',meta_desc='$meta_desc',image = '$fileToUpload' ,lkp_status_id ='$lkp_status_id' WHERE id='$id'";
                    if($conn->query($sql) === TRUE){
                echo "<script type='text/javascript'>window.location='content_page.php?msg=success'</script>";
                } else {
                echo "<script type='text/javascript'>window.location='content_page.php?msg=fail'</script>";
                } 
                }
                
      }
      else {

          $sql = "UPDATE grocery_content_pages SET title = '$title', meta_title='$meta_title',meta_keywords='$meta_keywords',meta_desc='$meta_desc',lkp_status_id ='$lkp_status_id' WHERE id = '$id' ";
          if($conn->query($sql) === TRUE){
             echo "<script type='text/javascript'>window.location='content_page.php?msg=success'</script>";
          } else {
             echo "<script type='text/javascript'>window.location='content_page.php?msg=fail'</script>";
          }

      }
        
    }   
?>
      <div class="site-content">
        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Content Page</h3>
                </div>
                <?php $getAllContentPages = getAllDataWhere('grocery_content_pages','id',$id);
              $getContentPages = $getAllContentPages->fetch_assoc(); ?>  
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Title</label>
                                
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="title" class="form-control" id="form-control-3" placeholder="Enter Title" data-error="Please enter Title." required value="<?php echo $getContentPages['title'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Meta Title</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="meta_title" class="form-control" id="form-control-3" placeholder="Enter Meta Title" data-error="Please enter Title" required value="<?php echo $getContentPages['meta_title'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Meta Keywords</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="meta_keywords" class="form-control" id="form-control-3" placeholder="Enter Meta Keywords" data-error="Please enter Meta Keywords" required value="<?php echo $getContentPages['meta_keywords'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3  col-md-4 control-label" for="form-control-8">Meta Description</label>
                                <div class="col-sm-6 col-md-4">
                                    <textarea id="form-control-8" name="meta_desc"  class="form-control" rows="3" placeholder="Meta Description" data-error="This field is required." required><?php echo $getContentPages['meta_desc'];?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">Image</label>
                                
                                <div class="col-sm-6 col-md-4">
                                  <img src="<?php echo $base_url . 'uploads/grocery_content_pages_images/'.$getContentPages['image'] ?>"  id="output" height="100" width="100"/>
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
                                  <option <?php if($row['id'] == $getContentPages['lkp_status_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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