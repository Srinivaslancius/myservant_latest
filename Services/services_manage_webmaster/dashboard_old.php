<?php include_once 'admin_includes/main_header.php'; ?>
      <div class="site-content">
        <div class="row">
          <?php $getUsers = "SELECT * FROM users WHERE lkp_admin_service_type_id = 1 ORDER BY lkp_status_id, id DESC";
          $getUsersData = $conn->query($getUsers);
          $getUsersCount = $getUsersData->num_rows;?>
          <a href="users.php">
          <div class="col-md-4 col-sm-5">
            <div class="widget widget-tile-2 bg-primary m-b-30">
              <div class="wt-content p-a-20 p-b-50">
                <div class="wt-title">Users
                  <span class="t-caret text-success">
                    <i class="zmdi zmdi-caret-up"></i>
                  </span>
                </div>
                <div class="wt-number"><?php echo $getUsersCount?></div>
              </div>
              <div class="wt-icon">
                <i class="zmdi zmdi-accounts"></i>
              </div>
            </div>
          </div>
          </a>
          <?php $getAdminUsers = "SELECT * FROM admin_users WHERE lkp_admin_service_type_id = 1 ORDER BY lkp_status_id,id DESC";
          $getAdminUsersData = $conn->query($getAdminUsers);
          $getAdminusersCount = $getAdminUsersData->num_rows;?>
          <a href="admin_users.php">
          <div class="col-md-4 col-sm-5">
            <div class="widget widget-tile-2 bg-warning m-b-30">
              <div class="wt-content p-a-20 p-b-50">
                <div class="wt-title">Admin Users</div>
                <div class="wt-number"><?php echo $getAdminusersCount?></div>
              </div>
              <div class="wt-icon">
                <i class="zmdi zmdi-accounts"></i>
              </div>
            </div>
          </div>
          </a>
          <?php $getTodayOrders = "SELECT * FROM services_orders WHERE DATE(`delivery_date`) = CURDATE() AND lkp_order_status_id = 2 AND lkp_payment_status_id = 1 ORDER BY lkp_order_status_id DESC"; 
          $getTodayOrders1 = $conn->query($getTodayOrders); $getRowsCount = $getTodayOrders1->num_rows; ?>
          <a href="services_today_orders.php">
          <div class="col-md-4 col-sm-5">
            <div class="widget widget-tile-2 bg-warning m-b-30">
              <div class="wt-content p-a-20 p-b-50">
                <div class="wt-title">Today Orders</div>
                <div class="wt-number"><?php echo $getRowsCount; ?></div>
              </div>
              <div class="wt-icon">
                <i class="zmdi zmdi-shopping-cart-plus"></i>
              </div>
            </div>
          </div>
          </a>
          
        </div>

        <!-- <div class="col-md-6 m-b-30">
          <h4 class="m-t-0 m-b-30">Pie chart</h4>
          <div id="pie" style="height: 300px"></div>
        </div> -->


      </div>
     <?php include_once 'admin_includes/footer.php'; ?>
     <!-- Script for pie chart -->
     // <script src="js/charts-flot.min.js"></script>
     // <script type="text/javascript">
     //        $(document).ready(function() {
                
     //            var pie = function () {
     //                var data = [{
     //                    label: "Admin Users",
     //                    data: <?php echo getRowsCount('admin_users')?>,
     //                    color: "#1d87e4",
     //                }, {
     //                    label: "Orders",
     //                    data: <?php echo getRowsCount('orders')?>,
     //                    color: "#34a853",
     //                }, {
     //                    label: "Products",
     //                    data: <?php echo getRowsCount('products')?>,
     //                    color: "#7d57c1",
     //                }];
     //                var options = {
     //                    series: {
     //                        pie: {
     //                            show: true
     //                        }
     //                    },
     //                    legend: {
     //                        labelFormatter: function(label, series){
     //                            return '<span class="pie-chart-legend">'+label+'</span>';
     //                        }
     //                    },
     //                    grid: {
     //                        hoverable: true
     //                    },
     //                    tooltip: true,
     //                    tooltipOpts: {
     //                        content: "%p.0%, %s",
     //                        shifts: {
     //                            x: 20,
     //                            y: 0
     //                        },
     //                        defaultTheme: false
     //                    }
     //                };
     //                $.plot($("#pie"), data, options);
     //            };

     //            pie();
               
     //        });
     //    </script>