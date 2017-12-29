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
                    <h3 class="m-y-0 font_sz_view">Add Sub Areas</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                            <form>
                                <div class="form-group">
                                    <label for="form-control-1">Select City</label>
                                    <select id="form-control-1" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }">
                                        <option value="">-- Select City --</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="form-control-1">Select Pin Code</label>
                                    <select id="form-control-1" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }">
                                        <option value="">-- Select Pin COde --</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="form-control-1">Select Area</label>
                                    <select id="form-control-1" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }">
                                        <option value="">-- Select Area --</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-5 padd0">
                                    <label for="form-control-1">Sub Area Name</label>
                                    <input type="text" class="form-control" id="form-control-1" placeholder="Enter Sub Area Name">
                                 </div>
                                <div class="form-group col-md-4">
                                    <label for="form-control-1">Delivery</label>
                                    <div class="btn-group" data-toggle="buttons">
                                         <label class="btn btn-outline-primary active">
                                            <input type="radio" name="buttonRadios" id="buttonRadios1" autocomplete="off" checked="checked"> Yes
                                        </label>
                                        <label class="btn btn-outline-primary">
                                            <input type="radio" name="buttonRadios" id="buttonRadios2" autocomplete="off"> No &nbsp;
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-3 padd0">
                                    <label for="form-control-1">&nbsp;</label>
                                    <div>
                                        <span><button type="button" class="btn btn-success"> <i class="zmdi zmdi-plus-circle zmdi-hc-fw"></i></button></span>
                                        <span><button type="button" class="btn btn-warning"> <i class="zmdi zmdi-minus-circle zmdi-hc-fw"></i></button></span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary col-md-offset-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default panel-table m-b-0">
                <div class="panel-heading">
                    <h3 class="m-t-0 m-b-5 font_sz_view">View Sub Areas</h3>
                    
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dataTable" id="table-2">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Sub Area Id</th>
                                    <th>Sub Area Name</th>
                                    <th>Area Name</th>
                                    <th>Pin code</th>
                                    <th>City Name</th>
                                    <th>Delivery</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($k=0; $k<10; $k++) {?>
                                <tr>
                                    <td>1</td>
                                    <td>Subrea1234</td>
                                    <td>Ring Road2</td>
                                    <td>Ring Road</td>
                                    <td>580084</td>
                                    <td>Mogalraj Puram</td>
                                     <td>Yes</td>
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

    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/dashboard-3.min.js"></script>
     <script src="js/forms-plugins.min.js"></script>
    <script src="js/tables-datatables.min.js"></script>
  </body>
</html>