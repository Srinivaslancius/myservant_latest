<?php include_once 'admin_includes/main_header.php'; ?>
<?php  
$id = $_GET['cid'];
if (!isset($_POST['submit'])) {
      //If fail
        echo "fail";
    } else {
    //If success
            $title = $_POST['title'];
            $link = $_POST['link'];
            $fileToUpload = $_FILES["fileToUpload"]["name"];
            $lkp_status_id = $_POST['lkp_status_id'];

  
      if($_FILES["fileToUpload"]["name"]!='') {

              $fileToUpload = $_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/grocery_advertisements_images/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('image','grocery_advertisements','id',$id,$target_dir);

                //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $sql = "UPDATE grocery_advertisements SET title = '$title', link = '$link',image = '$fileToUpload' ,lkp_status_id ='$lkp_status_id' WHERE id='$id'";
                    if($conn->query($sql) === TRUE){
                echo "<script type='text/javascript'>window.location='advertisements.php?msg=success'</script>";
                } else {
                echo "<script type='text/javascript'>window.location='advertisements.php?msg=fail'</script>";
                } 
                }
                
      }
      else {

          $sql = "UPDATE grocery_advertisements SET title = '$title', link = '$link',lkp_status_id ='$lkp_status_id' WHERE id = '$id' ";
          if($conn->query($sql) === TRUE){
             echo "<script type='text/javascript'>window.location='advertisements.php?msg=success'</script>";
          } else {
             echo "<script type='text/javascript'>window.location='advertisements.php?msg=fail'</script>";
          }

      }
        
    }   
?>
      <div class="site-content">
        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Advertisements</h3>
                </div>
                <?php $getAllAdvertisements = getAllDataWhere('grocery_advertisements','id',$id);
              $getAdvertisements = $getAllAdvertisements->fetch_assoc(); ?>  
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Link</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="url" name="link" class="form-control" id="form-control-3" placeholder="Enter Link" required value="<?php echo $getAdvertisements['link'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Title</label>
                                
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="title" class="form-control" id="form-control-3" placeholder="Enter Title" data-error="Please enter Title." required value="<?php echo $getAdvertisements['title'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">Image</label>
                                
                                <div class="col-sm-6 col-md-4">
                                  <img src="<?php echo $base_url . 'uploads/grocery_advertisements_images/'.$getAdvertisements['image'] ?>"  id="output" height="100" width="100"/>
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
                                  <option <?php if($row['id'] == $getAdvertisements['lkp_status_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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