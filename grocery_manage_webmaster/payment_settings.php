<?php include_once 'admin_includes/main_header.php'; ?>
<?php  if (!isset($_POST['submit']))  {
          //If fail
          echo "fail";
        } else  {
            //If success
            
                $delivery = $_POST['delivery'];
                $delivery_charges = $_POST['delivery_charges'];
                $tax_percentage = $_POST['tax_percentage'];
                $coupons = $_POST['coupons'];
                $cash_on_delivery = $_POST['cash_on_delivery'];
                $pay_u_payments = $_POST['pay_u_payments'];
                $hdfc_payments = $_POST['hdfc_payments'];
                $paytm_payments = $_POST['paytm_payments'];
                $order_cancellation_time = $_POST['order_cancellation_time'];

                $sql = "INSERT INTO grocery_payments_settings (`delivery`,`delivery_charges`,`tax_percentage`,`coupons`,`cash_on_delivery`,`pay_u_payments`,`hdfc_payments`,`paytm_payments`,`order_cancellation_time`) VALUES ('$delivery','$delivery_charges','$tax_percentage','$coupons','$cash_on_delivery','$pay_u_payments','$hdfc_payments','$paytm_payments','$order_cancellation_time')"; 
                    if($conn->query($sql) === TRUE){
                       echo "<script type='text/javascript'>window.location='payment_settings.php?msg=success'</script>";
                    } else {
                       echo "<script type='text/javascript'>window.location='payment_settings.php?msg=fail'</script>";
                    }
        }
        
?>
        <div class="site-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Payment Settings</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Delivery</label>
                                <div class="col-sm-6 col-md-4 btn-group" data-toggle="buttons">
                                     <label class="btn btn-outline-primary active">
                                        <input type="radio" name="delivery" id="buttonRadios1" autocomplete="off" checked="checked" value="1"> Yes
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="delivery" id="buttonRadios2" autocomplete="off" value="2"> No &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Delivery Charges</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="delivery_charges" class="form-control" id="form-control-3" placeholder="Enter Delivery Charges" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Tax Percentage</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="tax_percentage" class="form-control" id="form-control-3" placeholder="Enter Tax Percentage" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Coupons</label>
                                <div class="btn-group col-sm-6 col-md-4" data-toggle="buttons">
                                     <label class="btn btn-outline-primary active">
                                        <input type="radio" name="coupons" id="buttonRadios1" autocomplete="off" checked="checked" value="1"> Yes
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="coupons" id="buttonRadios2" autocomplete="off" value="2"> No &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Cash On Delivery</label>
                                <div class="col-sm-6 col-md-4 btn-group" data-toggle="buttons">
                                     <label class="btn btn-outline-primary active">
                                        <input type="radio" name="cash_on_delivery" id="buttonRadios1" autocomplete="off" checked="checked" value="1"> Yes
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="cash_on_delivery" id="buttonRadios2" autocomplete="off" value="2"> No &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Pay U Payment</label>
                                <div class="col-sm-6 col-md-4 btn-group" data-toggle="buttons">
                                     <label class="btn btn-outline-primary active">
                                        <input type="radio" name="pay_u_payments" id="buttonRadios1" autocomplete="off" checked="checked" value="1"> Yes
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="pay_u_payments" id="buttonRadios2" autocomplete="off" value="2"> No &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">HDFC Payment</label>
                                <div class="col-sm-6 col-md-4 btn-group" data-toggle="buttons">
                                     <label class="btn btn-outline-primary active">
                                        <input type="radio" name="hdfc_payments" id="buttonRadios1" autocomplete="off" checked="checked" value="1"> Yes
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="hdfc_payments" id="buttonRadios2" autocomplete="off" value="2"> No &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Paytm Payment</label>
                                <div class="col-sm-6 col-md-4 btn-group" data-toggle="buttons">
                                     <label class="btn btn-outline-primary active">
                                        <input type="radio" name="paytm_payments" id="buttonRadios1" autocomplete="off" checked="checked" value="1"> Yes
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="paytm_payments" id="buttonRadios2" autocomplete="off" value="2"> No &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Order Cancellation Time</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="order_cancellation_time" class="form-control" id="form-control-3" placeholder="Enter Tax Percentage" required>
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