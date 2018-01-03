<?php include_once 'admin_includes/main_header.php'; ?>
      <div class="site-content">
        
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5 font_sz_view">View Products</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
                
              <table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Sub Category</th>
                    <th>Brands</th>
                    <th>Update Price</th>
                    <th>Upload Images</th>
                    <th>Quantity</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#">GRDR12345</a></td>
                        <td>Toor Dal</td>
                        <td>Dals</td>
                        <td>Dals</td>
                        <td>Dals</td>
                        <td><a href="update_price.php">Update Price</a></td>
                        <td><a href="product_images.php">Upload Images</a></td>
                        <td>200</td>
                        <td>12</td>
                        <td><span class="label label-outline-success">Active</span> </td>
                        <td><span><a href="#"><i class="zmdi zmdi-delete zmdi-hc-fw"></i></a></span> <span><a href="#"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a></span></td>
                    </tr>
                  
                </tbody>
                
              </table>
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