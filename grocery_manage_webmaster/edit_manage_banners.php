<?php include_once 'admin_includes/main_header.php'; ?>
<?php  
$id = $_GET['cid'];
if (!isset($_POST['submit'])) {
      //If fail
        echo "fail";
    } else {
    //If success
            $link = $_POST['link'];
            $title = $_POST['title'];
            $fileToUpload = $_FILES["fileToUpload"]["name"];
            $fileToUpload1 = $_FILES["fileToUpload1"]["name"];
            $grocery_category_id = $_POST['grocery_category_id'];
            $grocery_sub_category_id = $_POST['grocery_sub_category_id'];
            $lkp_status_id = $_POST['lkp_status_id'];
            
            if($_FILES["fileToUpload"]["name"]!='' && $_FILES["fileToUpload1"]["name"]!='') {
                      
              $fileToUpload = $_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/grocery_banners_web_images/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('banners_web_imge','grocery_banners','id',$id,$target_dir);

              $fileToUpload1 = $_FILES["fileToUpload1"]["name"];
              $target_dir1 = "../uploads/grocery_banners_app_images/";
              $target_file1 = $target_dir1 . basename($_FILES["fileToUpload1"]["name"]);
              $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
              $getImgUnlink1 = getImageUnlink('banners_app_image','grocery_banners','id',$id,$target_dir1);

              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1);
                    $sql = "UPDATE grocery_banners SET link = '$link', title = '$title', banners_web_imge = '$fileToUpload',banners_app_image = '$fileToUpload1', grocery_category_id='$grocery_category_id',grocery_sub_category_id='$grocery_sub_category_id',lkp_status_id = '$lkp_status_id' WHERE id='$id'";
                    if($conn->query($sql) === TRUE){
                echo "<script type='text/javascript'>window.location='banners.php?msg=success'</script>";
                } else {
                echo "<script type='text/javascript'>window.location='banners.php?msg=fail'</script>";
                } 

                    
                } 
                
      } 
      elseif($_FILES["fileToUpload"]["name"]!=''){
              $fileToUpload = $_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/grocery_banners_web_images/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('banners_web_imge','grocery_banners','id',$id,$target_dir);


              move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
              
                    $sql = "UPDATE grocery_banners SET link = '$link', title = '$title', banners_web_imge = '$fileToUpload', grocery_category_id='$grocery_category_id',grocery_sub_category_id='$grocery_sub_category_id',lkp_status_id = '$lkp_status_id' WHERE id='$id'";
                    if($conn->query($sql) === TRUE){
                echo "<script type='text/javascript'>window.location='banners.php?msg=success'</script>";
                } else {
                echo "<script type='text/javascript'>window.location='banners.php?msg=fail'</script>";
                } 
              
      }
      elseif ( $_FILES["fileToUpload1"]["name"]!='') {

              $fileToUpload1 = $_FILES["fileToUpload1"]["name"];
              $target_dir1 = "../uploads/grocery_banners_app_images/";
              $target_file1 = $target_dir1 . basename($_FILES["fileToUpload1"]["name"]);
              $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
              $getImgUnlink1 = getImageUnlink('banners_app_image','grocery_banners','id',$id,$target_dir1);

              move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1);
                
                    $sql = "UPDATE grocery_banners SET link = '$link', title = '$title', banners_app_image = '$fileToUpload1', grocery_category_id='$grocery_category_id',grocery_sub_category_id='$grocery_sub_category_id',lkp_status_id = '$lkp_status_id' WHERE id='$id'";
                    if($conn->query($sql) === TRUE){
                    echo "<script type='text/javascript'>window.location='banners.php?msg=success'</script>";
                    } else {
                    echo "<script type='text/javascript'>window.location='banners.php?msg=fail'</script>";
                    } 
              
      }
      else {

          $sql = "UPDATE grocery_banners SET link = '$link', title = '$title', grocery_category_id='$grocery_category_id',grocery_sub_category_id='$grocery_sub_category_id',lkp_status_id = '$lkp_status_id' WHERE id = '$id' ";
          if($conn->query($sql) === TRUE){
             echo "<script type='text/javascript'>window.location='banners.php?msg=success'</script>";
          } else {
             echo "<script type='text/javascript'>window.location='banners.php?msg=fail'</script>";
          }

      }
        
    }   
?>
      <div class="site-content">
        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Banners</h3>
                </div>
                <?php $getAllBannersLogos = getAllDataWhere('grocery_banners','id',$id);
              $getBanners = $getAllBannersLogos->fetch_assoc(); ?>  
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Link</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="url" name="link" class="form-control" id="form-control-3" placeholder="Enter Link" required value="<?php echo $getBanners['link'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Title</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="title" class="form-control" id="form-control-3" placeholder="Enter Title" required value="<?php echo $getBanners['title'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">Web Logo</label>
                                
                                <div class="col-sm-6 col-md-4">
                                  <img src="<?php echo $base_url . 'uploads/grocery_banners_web_images/'.$getBanners['banners_web_imge'] ?>"  id="output" height="100" width="100"/>
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input id="form-control-22" name="fileToUpload" id="fileToUpload"  accept="image/*"  class="file-upload-input" type="file" multiple="multiple" onchange="loadFile(event)">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">App Logo</label>
                                
                                <div class="col-sm-6 col-md-4">
                                  <img src="<?php echo $base_url . 'uploads/grocery_banners_app_images/'.$getBanners['banners_app_image'] ?>"  id="output1" height="100" width="100"/>
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input id="form-control-22" class="file-upload-input" type="file" name="fileToUpload1" id="fileToUploa1"  multiple="multiple" accept="image/*" onchange="loadFile1(event)">
                                    </label>
                                </div>
                            </div>
                            <?php $getGroceryCategories = getAllDataWithStatus('grocery_category','0');?>
                          <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Select Category</label>
                                <div class="col-sm-6 col-md-4">
                                    <select name="grocery_category_id" id="form-control-1" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" required onChange="getSubCategory(this.value);">
                                        <option value="">-- Select Category --</option>
                                        <?php while($row = $getGroceryCategories->fetch_assoc()) {  ?>
                                        <option <?php if($row['id'] == $getBanners['grocery_category_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?></option>
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
                                        <option <?php if($row['id'] == $getBanners['grocery_sub_category_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['sub_category_name']; ?></option>
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
                                  <option <?php if($row['id'] == $getBanners['lkp_status_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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