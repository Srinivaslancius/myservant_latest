
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
        
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5 font_sz_view">View Orders</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
                
              <table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Order Id</th>
                    <th>Customer</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Date</th>
                    <th>Delivery Date</th>
                    <th>Time Slot</th>
                    <th>Payment Option</th>
                    <th>Payment Status</th>
                    <th>Order Status</th>
                    <th>Delivery Boy</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#" data-toggle="modal" data-target="#successModal2">GRDR12345</a></td>
                        <td>Mallikarjun</td>
                        <td>Mallikarjun.he@myservant.com</td>
                        <td>999 999 9999</td>
                        <td>25 - 12 - 2017</td>
                        <td>03 - 01 - 2018</td>
                        <td>10 AM - 12 PM</td>
                        <td>COD</td>
                        <td><a href="#">Order Status</a> </td>
                        <td><a href="#">Payment Status</a> </td>
                        <td><a href="#">Delivery Boy Details</a> </td>
                        <td><span><a href="#"><i class="zmdi zmdi-delete zmdi-hc-fw"></i></a></span> <span><a href="#"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a></span></td>
                    </tr>
                  
                </tbody>
                
              </table>
            </div>
          </div>
        </div>
        <div id="successModal2" class="modal fade" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header bg-success">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">
                            <i class="zmdi zmdi-close"></i>
                          </span>
                        </button>
                          <h4 class="modal-title">Order Details (Order Id: GRDR1234)<span><a href="#"><i class="zmdi zmdi-print zmdi-hc-fw" style="color: #fff;"></i></a></span></h4>
                      </div>
                      <div class="modal-body">
                          
                        <div class="col-md-12 fr1">
                           <div class="col-md-6">
                               <h3 class="m-t-0 m-b-5 font_sz_view">User Details</h3>
                               <p>Name : P.Phanendra Kumar</p>
                               <p>Email : phanendrakumar@lanciussolutions.com</p>
                               <p>Mobile Number: 9959742195</p>
                               <p>Order Date: 25 - 12 - 2017</p>
                           </div>
                           <div class="col-md-6">
                               <h3 class="m-t-0 m-b-5 font_sz_view">Delivery Details</h3>
                               <p>Delivery Date: 02 - 01 - 2018</p>
                               <p>Time Slot: 10AM - 12AM</p>
                               <p>Mode of Payment : Online</p>
                               <p>Payment Status : Completed</p>
                               <p>Order Status : Delivered</p>
                               
                           </div>
                            <div class="col-md-12">
                                <p><strong>Address:</strong></p>
                               <p>H.NO: 21 - 69, Girinagar, Opp: IDPL Colony, Near: Balanagar, Hyderabad: 500037</p>
                            </div>
                        </div>
                        <div class="col-md-12 fr1 mt5">
                            <h3 class="m-t-0 m-b-5 font_sz_view">Delivery Boy Details</h3>
                            <p class="col-md-6">Name: P.Phanendra Kumar</p>
                            <p class="col-md-6 pull-right text-right">Mobile Number: 9959742195</p>
                        </div>
                          <div class="col-md-12 fr1 mt5">
                              <h3 class="m-t-0 m-b-5 font_sz_view">Ordered Items</h3>
                          </div>
                          <div class="col-md-12 fr1 padd0">
                              <?php for($i=0; $i<5; $i++) {?>
                              <div class="col-md-12 mt5 brdrbtm padd0">
                                  <div class="col-md-2 mb5">
                                      <img src="" width="100px" height="100px">
                                  </div>
                                  <div class="col-md-6">
                                      <p><b>Item Name: </b> Toor Dal</p>
                                      <p><b>Quantity: </b> 12</p>
                                      <p><b>Price Per Kg: </b> Rs. 100</p>
                                  </div>
                                  <div class="col-md-4">
                                      <p>Sub Total: Rs. 1200</p>
                                  </div>
                              </div>
                              <?php } ?>
                              
                          </div>
                      </div>
                      <div class="modal-footer">
                          <div class="col-md-12">
                              <div class="col-md-6"></div>
                              <div class="col-md-6">
                                  <p><b>Item Total: </b> Rs. 6000.00</p>
                                  <p><b>GST: </b> Rs. 900.00</p>
                                  <p><b>Delivery Charges: </b> Rs. 100.00</p>
                                   <h3 class="m-t-0 m-b-5 font_sz_view">Total Amount: Rs. 7000.00</h3>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </div>
      <div class="site-footer">
        2017 © Cosmos
      </div>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
     <script src="js/dashboard-3.min.js"></script>
    <script src="js/tables-datatables.min.js"></script>
  </body>
</html>