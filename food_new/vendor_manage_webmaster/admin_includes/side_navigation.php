<?php
    $currentFile = $_SERVER["PHP_SELF"];
    $parts = Explode('/', $currentFile);
    $page_name = $parts[count($parts) - 1];
?>
<div class="site-left-sidebar">
        <div class="sidebar-backdrop"></div>
        <div class="custom-scrollbar">
          <ul class="sidebar-menu">
            <li class="menu-title">Menu</li>
             <li  class="<?php if($page_name == 'dashboard.php') { echo "active"; } ?>">
              <a href="dashboard.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Dashboard</span>
              </a>
            </li>    
            <li class="<?php if($page_name == 'food_products.php' ) { echo "active"; } ?>">
              <a href="food_products.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-item  zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Products</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'food_vendor_orders.php') { echo "active"; } ?>">
              <a href="food_vendor_orders.php" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-collection-image  zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Orders</span>
              </a>
            </li>      
           <!-- <li class="<?php if($page_name == 'food_orders.php' ) { echo "active"; } ?>">
              <a href="food_orders.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Orders</span>
              </a>
            </li> -->
          </ul>
        </div>
      </div>