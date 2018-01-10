<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <title>Cosmos</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/cosmos.min.css">
    <link rel="stylesheet" href="css/application.min.css">
  </head>
  <body class="layout layout-header-fixed layout-left-sidebar-fixed">
    <div class="site-overlay"></div>
    <div class="site-header">
        <?php include_once './main_header.php';?>
    </div>
    <div class="site-main">
      <div class="site-left-sidebar">
        <div class="sidebar-backdrop"></div>
        <div class="custom-scrollbar">
            <?php include_once './side_menu.php';?>
        </div>
      </div>
      <div class="site-right-sidebar">
        <?php include_once './right_slide_toggle.php';?>
      </div>
      <?php $sub_category_id = $_GET['sub_category_id']; ?>
      <?php
        if (!isset($_POST['submit']))  {
          echo "fail";
        } else  { 
            //echo "<pre>"; print_r($_POST); die;
            $sub_category_name = $_POST['sub_category_name'];
            $priority = $_POST['priority'];
            $grocery_category_id = $_POST['grocery_category_id'];
            $brands = implode(',',$_POST['brands']);
            $sql = "UPDATE `grocery_sub_category` SET sub_category_name = '$sub_category_name',priority = '$priority',grocery_category_id = '$grocery_category_id',brands = '$brands' WHERE id = '$sub_category_id' ";     
            $result = $conn->query($sql);
            if( $result == 1){
                echo "<script type='text/javascript'>window.location='manage_sub_categories.php?msg=success'</script>";
            } else {
                echo "<script type='text/javascript'>window.location='manage_sub_categories.php?msg=fail'</script>";
            }
        }
        ?>
        <div class="site-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Edit Districts</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <?php $getSubCategories = getIndividualDetails('grocery_sub_category','id',$sub_category_id); ?>
                        <form class="form-horizontal" method="POST" autocomplete="off" enctype="multipart/form-data">
                            <div class="form-group">
                                <?php $getCategories = getAllDataWithStatus('grocery_category','0');?>
                                <label class="col-sm-3 control-label" for="form-control-9">Select Category</label>
                                <div class="col-sm-6 col-md-4">
                                    <select id="form-control-1" name="grocery_category_id" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" required required>
                                      <option value="">--Select State--</option>
                                      <?php while($row = $getCategories->fetch_assoc()) {  ?>
                                          <option <?php if($row['id'] == $getSubCategories['grocery_category_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-9">Sub Category Name</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" class="form-control" id="form-control-3" placeholder="Enter Sub Category Name" name="sub_category_name" required value="<?php echo $getSubCategories['sub_category_name']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-9">Priority</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" class="form-control" id="form-control-3" placeholder="Enter Priority" name="priority" required value="<?php echo $getSubCategories['priority']; ?>">
                                </div>
                            </div>
                            <?php 
                            $getBrandId = explode(',',$getSubCategories['brands']);
                            $getBrands = getAllDataWithStatus('grocery_brands','0');?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-9">Brands Applicable</label>
                                <div class="col-sm-6 col-md-4">
                                    <select id="form-control-1" name="brands[]" class="form-control" multiple="multiple" data-plugin="select2" data-options="{ theme: bootstrap }" required required>
                                        <?php while($row = $getBrands->fetch_assoc()) {  ?>
                                          <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == in_array($row['id'], $getBrandId)) { echo "selected=selected"; }?> ><?php echo $row['brand_name']; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                                    <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><?php include_once 'footer.php'; ?>
    <script src="js/dashboard-3.min.js"></script>
    <script src="js/forms-plugins.min.js"></script>
    <script src="js/tables-datatables.min.js"></script>
  </body>
</html>