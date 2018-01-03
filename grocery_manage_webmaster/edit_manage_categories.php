<?php include_once 'admin_includes/main_header.php'; ?>
<?php  
$id = $_GET['cid'];
if (!isset($_POST['submit'])) {
      //If fail
        echo "fail";
    } else {
    //If success
    $category_name = $_POST['category_name'];
    $fileToUpload = $_FILES["fileToUpload"]["name"];
    $fileToUpload1 = $_FILES["fileToUpload1"]["name"];
    $fileToUpload2 = $_FILES["fileToUpload2"]["name"];
    $category_position = $_POST['category_position'];

            if($_FILES["fileToUpload"]["name"]!='' && $_FILES["fileToUpload1"]["name"]!='' && $_FILES["fileToUpload2"]["name"]!='') {

              $fileToUpload = $_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/grocery_category_web_images/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('category_web_image','grocery_category','id',$id,$target_dir);

              $fileToUpload1 = $_FILES["fileToUpload1"]["name"];
              $target_dir1 = "../uploads/grocery_category_app_images/";
              $target_file1 = $target_dir1 . basename($_FILES["fileToUpload1"]["name"]);
              $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
              $getImgUnlink1 = getImageUnlink('category_app_image','grocery_category','id',$id,$target_dir1);

              $fileToUpload2 = $_FILES["fileToUpload2"]["name"];
              $target_dir2 = "../uploads/grocery_category_icon_images/";
              $target_file2 = $target_dir2 . basename($_FILES["fileToUpload2"]["name"]);
              $imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
              $getImgUnlink2 = getImageUnlink('category_icon','grocery_category','id',$id,$target_dir2);


                //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1);
                move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2);
                    $sql = "UPDATE grocery_category SET category_name = '$category_name',category_web_image = '$fileToUpload',category_app_image = '$fileToUpload1', category_icon = '$fileToUpload2', category_position = '$category_position' WHERE id='$id'";
                     if($conn->query($sql) === TRUE){
                echo "<script type='text/javascript'>window.location='manage_categories.php?msg=success'</script>";
                } else {
                echo "<script type='text/javascript'>window.location='manage_categories.php?msg=fail'</script>";
                } 
                }  
               
      }
      
      elseif($_FILES["fileToUpload"]["name"]!='') {

              $fileToUpload = $_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/grocery_category_web_images/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('category_web_image','grocery_category','id',$id,$target_dir);

              move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                
              $sql = "UPDATE grocery_category SET category_name = '$category_name',category_web_image = '$fileToUpload', category_position = '$category_position' WHERE id='$id'";
                     if($conn->query($sql) === TRUE){
                echo "<script type='text/javascript'>window.location='manage_categories.php?msg=success'</script>";
                } else {
                echo "<script type='text/javascript'>window.location='manage_categories.php?msg=fail'</script>";
                } 
                  
               
      }       

      elseif($_FILES["fileToUpload1"]["name"]!='') {

              $fileToUpload1 = $_FILES["fileToUpload1"]["name"];
              $target_dir1 = "../uploads/grocery_category_app_images/";
              $target_file1 = $target_dir1 . basename($_FILES["fileToUpload1"]["name"]);
              $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
              $getImgUnlink1 = getImageUnlink('category_app_image','grocery_category','id',$id,$target_dir1);
              
              move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1);
                    $sql = "UPDATE grocery_category SET category_name = '$category_name', category_app_image = '$fileToUpload1', category_position = '$category_position' WHERE id='$id'";
                     if($conn->query($sql) === TRUE){
                echo "<script type='text/javascript'>window.location='manage_categories.php?msg=success'</script>";
                } else {
                echo "<script type='text/javascript'>window.location='manage_categories.php?msg=fail'</script>";
                } 
                 
               
      }

      elseif($_FILES["fileToUpload2"]["name"]!='') {

              $fileToUpload2 = $_FILES["fileToUpload2"]["name"];
              $target_dir2 = "../uploads/grocery_category_icon_images/";
              $target_file2 = $target_dir2 . basename($_FILES["fileToUpload2"]["name"]);
              $imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
              $getImgUnlink2 = getImageUnlink('category_icon','grocery_category','id',$id,$target_dir2);

                move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2);
                    $sql = "UPDATE grocery_category SET category_name = '$category_name', category_icon = '$fileToUpload2', category_position = '$category_position' WHERE id='$id'";
                     if($conn->query($sql) === TRUE){
                echo "<script type='text/javascript'>window.location='manage_categories.php?msg=success'</script>";
                } else {
                echo "<script type='text/javascript'>window.location='manage_categories.php?msg=fail'</script>";
                } 
                  
               
      }
          else {

          $sql = "UPDATE grocery_category SET category_name = '$category_name', category_position = '$category_position' WHERE id = '$id' ";
          if($conn->query($sql) === TRUE){
             echo "<script type='text/javascript'>window.location='manage_categories.php?msg=success'</script>";
          } else {
             echo "<script type='text/javascript'>window.location='manage_categories.php?msg=fail'</script>";
          }

      }
        
    }   
?>
      <div class="site-content">
        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Categories</h3>
                </div>
                <?php $getCategories = getAllDataWhere('grocery_category','id',$id);
              $getCategoriesData = $getCategories->fetch_assoc(); ?>  
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Category Name</label>
                                
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="category_name" class="form-control" id="form-control-3" placeholder="Enter Title" data-error="Please enter Category Name." required value="<?php echo $getCategoriesData['category_name'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">Web Image</label>
                                
                                <div class="col-sm-6 col-md-4">
                                  <img src="<?php echo $base_url . 'uploads/grocery_category_web_images/'.$getCategoriesData['category_web_image'] ?>"  id="output" height="100" width="100"/>
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input id="form-control-22" name="fileToUpload" id="fileToUpload"  accept="image/*"  class="file-upload-input" type="file" multiple="multiple" onchange="loadFile(event)">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">App Image</label>
                                
                                <div class="col-sm-6 col-md-4">
                                  <img src="<?php echo $base_url . 'uploads/grocery_category_app_images/'.$getCategoriesData['category_app_image'] ?>"  id="output1" height="100" width="100"/>
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input id="form-control-22" class="file-upload-input" type="file" name="fileToUpload1" id="fileToUploa1"  multiple="multiple" accept="image/*" onchange="loadFile1(event)">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">Icon</label>
                                
                                <div class="col-sm-6 col-md-4">
                                  <img src="<?php echo $base_url . 'uploads/grocery_category_icon_images/'.$getCategoriesData['category_icon'] ?>"  id="output2" height="100" width="100"/>
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input id="form-control-22" class="file-upload-input" type="file" name="fileToUpload2" id="fileToUploa2"  multiple="multiple" accept="image/*" onchange="loadFile2(event)">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Priority</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="category_position" class="form-control" id="form-control-3" placeholder="Enter Priority" required value="<?php echo $getCategoriesData['category_position'];?>">
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