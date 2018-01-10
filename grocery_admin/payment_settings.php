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
        <div class="site-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Payment Settings</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Delivery</label>
                                <div class="col-sm-6 col-md-4 btn-group" data-toggle="buttons">
                                     <label class="btn btn-outline-primary active">
                                        <input type="radio" name="buttonRadios" id="buttonRadios1" autocomplete="off" checked="checked"> Yes
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="buttonRadios" id="buttonRadios2" autocomplete="off"> No &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Delivery Charges</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" class="form-control" id="form-control-3" placeholder="Enter Delivery Charges">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Tax Percentage</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" class="form-control" id="form-control-3" placeholder="Enter Tax Percentage">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Coupons</label>
                                <div class="btn-group col-sm-6 col-md-4" data-toggle="buttons">
                                     <label class="btn btn-outline-primary active">
                                        <input type="radio" name="buttonRadios" id="buttonRadios1" autocomplete="off" checked="checked"> Yes
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="buttonRadios" id="buttonRadios2" autocomplete="off"> No &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Cash On Delivery</label>
                                <div class="col-sm-6 col-md-4 btn-group" data-toggle="buttons">
                                     <label class="btn btn-outline-primary active">
                                        <input type="radio" name="buttonRadios" id="buttonRadios1" autocomplete="off" checked="checked"> Yes
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="buttonRadios" id="buttonRadios2" autocomplete="off"> No &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Pay U Payment</label>
                                <div class="col-sm-6 col-md-4 btn-group" data-toggle="buttons">
                                     <label class="btn btn-outline-primary active">
                                        <input type="radio" name="buttonRadios" id="buttonRadios1" autocomplete="off" checked="checked"> Yes
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="buttonRadios" id="buttonRadios2" autocomplete="off"> No &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">HDFC Payment</label>
                                <div class="col-sm-6 col-md-4 btn-group" data-toggle="buttons">
                                     <label class="btn btn-outline-primary active">
                                        <input type="radio" name="buttonRadios" id="buttonRadios1" autocomplete="off" checked="checked"> Yes
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="buttonRadios" id="buttonRadios2" autocomplete="off"> No &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Paytm Payment</label>
                                <div class="col-sm-6 col-md-4 btn-group" data-toggle="buttons">
                                     <label class="btn btn-outline-primary active">
                                        <input type="radio" name="buttonRadios" id="buttonRadios1" autocomplete="off" checked="checked"> Yes
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="buttonRadios" id="buttonRadios2" autocomplete="off"> No &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Order Cancellation Time</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" class="form-control" id="form-control-3" placeholder="Enter Tax Percentage">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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