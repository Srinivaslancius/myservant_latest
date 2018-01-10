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
      <?php $pid = $_GET['pid']; ?>
      <?php
        if (!isset($_POST['submit']))  {
          echo "fail";
        } else  { 
            //echo "<pre>"; print_r($_POST); die;
            $lkp_city_id = $_POST['lkp_city_id'];
            $weight_type = $_POST['weight_type'];
            $mrp_price = $_POST['mrp_price'];
            $selling_price = $_REQUEST['selling_price'];
            foreach($selling_price as $key=>$value){
                if(!empty($value)) {
                    move_uploaded_file($file_tmp, $file_destination);    
                    $sql = "INSERT INTO product_bind_weight_prices ( `product_id`,`lkp_city_id`, `weight_type`, `mrp_price`, `selling_price`) VALUES ('$pid','$lkp_city_id', '$weight_type', '$mrp_price', '$selling_price')";
                    $result = $conn->query($sql);
                }
            }
           
            if( $result == 1){
                echo "<script type='text/javascript'>window.location='manage_products.php?msg=success'</script>";
            } else {
                echo "<script type='text/javascript'>window.location='manage_products.php?msg=fail'</script>";
            }
        }
        ?>
        <div class="site-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Update Price</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" autocomplete="off">

                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Select City</label>
                                <div class="col-sm-6 col-md-4">
                                    <select id="form-control-1" name="lkp_city_id" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" required>
                                        <option value="">-- Select City --</option>
                                        <?php $getCities = getAllDataWithStatus('lkp_cities','0');?>
                                        <?php while($row = $getCities->fetch_assoc()) {  ?>
                                            <option value="<?php echo $row['id']; ?>" ><?php echo $row['city_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="clear_fix"></div>

                            <div class="input_fields_container" >
                                <div style="border:1px solid;">
                                    <!-- <div class="form-group">
                                        <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Offer</label>
                                        <div class="btn-group col-sm-6 col-md-4" >
                                             <label class="btn btn-outline-primary">
                                                <input type="radio" name="buttonRadios[]" required onclick="check_offer(1)" value='1' > Yes
                                            </label>
                                            <label class="btn btn-outline-primary">
                                                <input type="radio" name="buttonRadios[]" required onclick="check_offer(0)" value='0' > No &nbsp;
                                            </label>
                                        </div>
                                    </div> -->

                                    <!-- <div class="form-group offer_price" style="display:none">
                                        <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Percentage</label>
                                        <div class="col-sm-6 col-md-4">
                                            <input type="text" class="form-control" name="offer_percentage[]" id="form-control-3" placeholder="Offer Percentage (%)" required>
                                        </div>
                                    </div> -->

                                    <div class="form-group">
                                        <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Weight (Ex: 100 Gms etc..)</label>
                                        <div class="col-sm-6 col-md-4">
                                            <input type="text" class="form-control" name="weight_type[]" id="form-control-3" placeholder="Weights (Ex: 100 Gms etc..)" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="form-control-3" class="col-sm-3 col-md-4 control-label">MRP</label>
                                        <div class="col-sm-6 col-md-4">
                                            <input type="text" class="form-control valid_mobile_num" name="mrp_price[]" id="form-control-3" placeholder="Enter MRP" onkeyup="getPrice(this.value);" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Selling Price</label>
                                        <div class="col-sm-6 col-md-4">
                                            <input type="text" class="form-control valid_mobile_num" name="selling_price[]" id="form-control-3" placeholder="Enter Selling Price" required>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <span><button type="button" class="btn btn-success add_more_button"> <i class="zmdi zmdi-plus-circle zmdi-hc-fw"></i></button></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br />
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="panel panel-default panel-table m-b-0">
                <div class="panel-heading">
                    <h3 class="m-t-0 m-b-5 font_sz_view">View States</h3>
                    
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dataTable" id="table-2">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>City</th>
                                    <th>Quantity</th>
                                    <th>Offer</th>
                                    <th>Weight</th>
                                    <th>MRP</th>
                                    <th>Selling Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($k=0; $k<10; $k++) {?>
                                <tr>
                                    <td>1</td>
                                    <td>Hyderabad</td>
                                    <td>1000</td>
                                    <td>5%</td>
                                    <td>500 GMS</td>
                                    <td>1800</td>
                                    <td>1000</td>
                                    <td><span class="label label-outline-success">Active</span></td>
                                    <td><span><a href="#"><i class="zmdi zmdi-delete zmdi-hc-fw"></i></a></span> <span><a href="#"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a></span></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer">
          2017 © Cosmos
        </div>

    <?php include_once 'footer.php'; ?>
    <script src="js/dashboard-3.min.js"></script>
    <script src="js/tables-datatables.min.js"></script>

    <script>
        $(document).ready(function() {
        var max_fields_limit      = 10; //set limit for maximum input fields
        var x = 1; //initialize counter for text box
        $('.add_more_button').click(function(e){ //click event on add more fields button having class add_more_button                   
            e.preventDefault();
            if(x < max_fields_limit){ //check conditions
                x++; //counter increment
                $('.input_fields_container').append('<div><div class="row "><div class="form-group"><label for="form-control-3" class="col-sm-3 col-md-4 control-label">Weight (Ex: 100 Gms etc..)</label><div class="col-sm-6 col-md-4"><input type="text" class="form-control" id="form-control-3" placeholder="Weight Types" name="weight_type[]" required></div></div><div class="form-group"><label for="form-control-3" class="col-sm-3 col-md-4 control-label">MRP</label><div class="col-sm-6 col-md-4"><input type="text" class="form-control valid_mobile_num" id="form-control-3" placeholder="Enter MRP" name="mrp_price[]" required></div></div><div class="form-group"><label for="form-control-3" class="col-sm-3 col-md-4 control-label">Selling Price</label><div class="col-sm-6 col-md-4"><input type="text" class="form-control valid_mobile_num" id="form-control-3" placeholder="Enter Selling Price" name="selling_price[]" required></div></div><a href="#" style="" class="remove_field btn btn-warning"><i class="zmdi zmdi-minus-circle zmdi-hc-fw"></i></a></div></div>'); //add input field
            }
        });  
        $('.input_fields_container').on("click",".remove_field", function(e){ //user click on remove text links
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
    </script>

    <script type="text/javascript">
    function check_offer(getIncValue) {

        if(getIncValue == 1 ){            
            $('.offer_price').css("display", "block");
        } else {
            $('.offer_price').css("display", "none");           
        }      
    }
    </script>
    <script type="text/javascript">
    function getPrice(Price) {
        $('#selling_price').val(Price);    
    }
    </script>

  </body>
</html>