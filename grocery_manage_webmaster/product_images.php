<?php include_once 'admin_includes/main_header.php'; ?>

<?php 

$id = $_GET['upload_images'];

if (!isset($_POST['submit']))  {
            echo "";
} else  {
       
        $product_images = $_FILES['product_images']['name'];
        foreach($product_images as $key=>$value){

        $product_images1 = $_FILES['product_images']['name'][$key];
        $file_tmp = $_FILES["product_images"]["tmp_name"][$key];
        $file_destination = '../uploads/grocery_product_images/' . $product_images1;
        move_uploaded_file($file_tmp, $file_destination);        
        $sql = "INSERT INTO grocery_product_images (`product_id`,`product_image`) VALUES ('$id','$product_images1')"; 
        $result = $conn->query($sql);
        }

        if( $result == 1){
        echo "<script type='text/javascript'>window.location='product_details.php?msg=success'</script>";
    } else {
        echo "<script type='text/javascript'>window.location='product_details.php?msg=fail'</script>";
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
                            
                            <div class="form-group" id="formdiv">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-22">Product Image</label>
                                <div class="col-sm-6 col-md-2" id="filediv">
                                    <label class="btn btn-default file-upload-btn">Choose file...
                                        <input  name="product_images[]" accept="image/*" type="file" id="file" class="file-upload-input"  multiple="multiple">
                                    </label>
                                </div>
                                <br/>
                                <div class="col-sm-6 col-md-2">
                                    <span><button type="button"  id="add_more" class="btn btn-success"> <i class="zmdi zmdi-plus-circle zmdi-hc-fw"></i></button></span>
                                    <!-- <span><button type="button" class="btn btn-warning"> <i class="zmdi zmdi-minus-circle zmdi-hc-fw"></i></button></span> -->
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

    
    <?php include_once 'admin_includes/footer.php'; ?> 
    <script src="js/multi_image_upload.js"></script>
  </body>
</html>