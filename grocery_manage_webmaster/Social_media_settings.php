<?php include_once 'admin_includes/main_header.php'; ?>

      <?php  
 if (!isset($_POST['submit']))  {
      //If fail
        echo "fail";
    } else {
    //If success
    $id=1;

    $fb_link = $_POST['fb_link'];
    $twitter_link = $_POST['twitter_link'];
    $gplus_link = $_POST['gplus_link'];
    $inst_link = $_POST['inst_link'];
    $linkden_link = $_POST['linkden_link'];
    $youtube_link = $_POST['youtube_link'];
    $android_app_link = $_POST['android_app_link'];
    $apple_app_link = $_POST['apple_app_link'];   

        $sql = "UPDATE `grocery_site_settings` SET android_app_link='$android_app_link',apple_app_link='$apple_app_link',fb_link='$fb_link', twitter_link='$twitter_link', gplus_link='$gplus_link',inst_link='$inst_link', linkden_link = '$linkden_link', youtube_link= '$youtube_link' WHERE id = '$id' ";
            if($conn->query($sql) === TRUE){
               echo "<script type='text/javascript'>window.location='Social_media_settings.php?msg=success'</script>";
            } else {
               echo "<script type='text/javascript'>window.location='Social_media_settings.php?msg=fail'</script>";
            }
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        
       
    
}
?>
        <div class="site-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Social Media Settings</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <?php $getSiteSettings = getAllDataWhere('grocery_site_settings','id','1'); 
                  $getSiteSettingsData = $getSiteSettings->fetch_assoc(); ?>
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Facebook</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="url" name="fb_link" class="form-control" id="form-control-3" placeholder="Enter Facebook Link" value="<?php echo $getSiteSettingsData['fb_link'];?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Twitter</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="url" name="twitter_link" class="form-control" id="form-control-3" placeholder="Enter Twitter Link" value="<?php echo $getSiteSettingsData['twitter_link'];?>" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Google Plus</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="url" name="gplus_link" class="form-control" id="form-control-3" placeholder="Enter Google Plus Link" value="<?php echo $getSiteSettingsData['gplus_link'];?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Instagram</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="url" name="inst_link" class="form-control" id="form-control-3" placeholder="Enter Instagram Link" value="<?php echo $getSiteSettingsData['inst_link'];?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Linkedln</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="url" name="linkden_link" class="form-control" id="form-control-3" placeholder="Enter Linkedln Link" value="<?php echo $getSiteSettingsData['linkden_link'];?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Youtube</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="url" name="youtube_link" class="form-control" id="form-control-3" placeholder="Enter Youtube Link" value="<?php echo $getSiteSettingsData['youtube_link'];?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Android App</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="url" name="android_app_link" class="form-control" id="form-control-3" placeholder="Enter Android App Link" value="<?php echo $getSiteSettingsData['android_app_link'];?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">IOS</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="url" class="form-control" name="apple_app_link" id="form-control-3" placeholder="Enter IOS App Link" value="<?php echo $getSiteSettingsData['apple_app_link'];?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Database Backup</label>
                                <div class="col-sm-6 col-md-4">
                                    <button type="button" class="btn btn-primary m-w-120">Backup Database</button>
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