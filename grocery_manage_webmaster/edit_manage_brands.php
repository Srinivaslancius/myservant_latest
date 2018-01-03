<?php include_once 'admin_includes/main_header.php'; ?>
<?php  
$id = $_GET['cid'];
if (!isset($_POST['submit'])) {
      //If fail
        echo "fail";
    } else {
    //If success
            $title = $_POST['title'];
            $lkp_status_id = $_POST['lkp_status_id'];
            
            if($_FILES["fileToUpload"]["name"]!='' && $_FILES["fileToUpload1"]["name"]!='') {
                      
              $fileToUpload = $_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/grocery_brands_web_logos/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('web_brand_logo','grocery_brand_logos','id',$id,$target_dir);

              $fileToUpload1 = $_FILES["fileToUpload1"]["name"];
              $target_dir1 = "../uploads/grocery_brands_app_logos/";
              $target_file1 = $target_dir1 . basename($_FILES["fileToUpload1"]["name"]);
              $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
              $getImgUnlink1 = getImageUnlink('app_brand_logo','grocery_brand_logos','id',$id,$target_dir1);

              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1);
                    $sql = "UPDATE grocery_brand_logos SET title = '$title', web_brand_logo = '$fileToUpload',app_brand_logo = '$fileToUpload1', lkp_status_id = '$lkp_status_id' WHERE id='$id'";
                    if($conn->query($sql) === TRUE){
                echo "<script type='text/javascript'>window.location='manage_brands.php?msg=success'</script>";
                } else {
                echo "<script type='text/javascript'>window.location='manage_brands.php?msg=fail'</script>";
                } 

                    
                } 
                
      } 
      elseif($_FILES["fileToUpload"]["name"]!=''){
         $fileToUpload = $_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/grocery_brands_web_logos/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('web_brand_logo','grocery_brand_logos','id',$id,$target_dir);


              move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
              
                    $sql = "UPDATE grocery_brand_logos SET title = '$title', web_brand_logo = '$fileToUpload', lkp_status_id = '$lkp_status_id' WHERE id='$id'";
                    if($conn->query($sql) === TRUE){
                echo "<script type='text/javascript'>window.location='manage_brands.php?msg=success'</script>";
                } else {
                echo "<script type='text/javascript'>window.location='manage_brands.php?msg=fail'</script>";
                } 
              
      }
      elseif ( $_FILES["fileToUpload1"]["name"]!='') {

              $fileToUpload1 = $_FILES["fileToUpload1"]["name"];
              $target_dir1 = "../uploads/grocery_brands_app_logos/";
              $target_file1 = $target_dir1 . basename($_FILES["fileToUpload1"]["name"]);
              $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
              $getImgUnlink1 = getImageUnlink('app_brand_logo','grocery_brand_logos','id',$id,$target_dir1);

              move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1);
                
                    $sql = "UPDATE grocery_brand_logos SET title = '$title', app_brand_logo = '$fileToUpload1', lkp_status_id = '$lkp_status_id' WHERE id='$id'";
                    if($conn->query($sql) === TRUE){
                    echo "<script type='text/javascript'>window.location='manage_brands.php?msg=success'</script>";
                    } else {
                    echo "<script type='text/javascript'>window.location='manage_brands.php?msg=fail'</script>";
                    } 
              
      }
      else {

          $sql = "UPDATE grocery_brand_logos SET title = '$title', lkp_status_id = '$lkp_status_id' WHERE id = '$id' ";
          if($conn->query($sql) === TRUE){
             echo "<script type='text/javascript'>window.location='manage_brands.php?msg=success'</script>";
          } else {
             echo "<script type='text/javascript'>window.location='manage_brands.php?msg=fail'</script>";
          }

      }
        
    }   
?>
      <div class="site-content">
        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Brands</h3>
                </div>
                <?php $getAllBrandLogos = getAllDataWhere('grocery_brand_logos','id',$id);
              $getBrandLogos = $getAllBrandLogos->fetch_assoc(); ?>  
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Brand Name</label>
                                
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="title" class="form-control" id="form-control-3" placeholder="Enter Brand Name" data-error="Please enter Brand Name." required value="<?php echo $getBrandLogos['title'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">Web Logo</label>
                                
                                <div class="col-sm-6 col-md-4">
                                  <img src="<?php echo $base_url . 'uploads/grocery_brands_web_logos/'.$getBrandLogos['web_brand_logo'] ?>"  id="output" height="100" width="100"/>
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input id="form-control-22" name="fileToUpload" id="fileToUpload"  accept="image/*"  class="file-upload-input" type="file" multiple="multiple" onchange="loadFile(event)">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">App Logo</label>
                                
                                <div class="col-sm-6 col-md-4">
                                  <img src="<?php echo $base_url . 'uploads/grocery_brands_app_logos/'.$getBrandLogos['app_brand_logo'] ?>"  id="output1" height="100" width="100"/>
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input id="form-control-22" class="file-upload-input" type="file" name="fileToUpload1" id="fileToUploa1"  multiple="multiple" accept="image/*" onchange="loadFile1(event)">
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
                                  <option <?php if($row['id'] == $getBrandLogos['lkp_status_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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