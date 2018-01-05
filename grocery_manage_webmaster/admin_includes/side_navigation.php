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
            <li class="<?php if($page_name == 'site_settings.php') { echo "active"; } ?>">
              <a href="site_settings.php" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-settings zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Site Settings</span>
              </a>
            </li>
            <li class="<?php if($page_name == 'Social_media_settings.php') { echo "active"; } ?>">
              <a href="Social_media_settings.php" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-settings zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Social Network Links</span>
              </a>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-accounts zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Users</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Users</li>
                <li class="<?php if($page_name == 'admin_users.php' || $page_name == 'add_admin_users.php' || $page_name == 'edit_admin_users.php') { echo "active"; } ?>"><a href="admin_users.php">Admin Users</a></li> 
                <li class="<?php if($page_name == 'users.php' || $page_name == 'add_users.php' || $page_name == 'edit_users.php') { echo "active"; } ?>"><a href="users.php">Customers</a></li>
                <!-- <li class="<?php if($page_name == 'vendors.php' || $page_name == 'add_vendors.php' || $page_name == 'edit_vendors.php') { echo "active"; } ?>"><a href="vendors.php">Vendors</a></li>
                <li class="<?php if($page_name == 'food_delivery_boys.php' || $page_name == 'add_food_delivery_boys.php' || $page_name == 'edit_food_deliveryboys.php') { echo "active"; } ?>"><a href="food_delivery_boys.php">Delivery Boys</a></li> -->
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-collection-item  zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">CMS</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">CMS</li>
                <li  class="<?php if($page_name == 'content_page.php'  || $page_name == 'edit_manage_content_pages.php' ) { echo "active"; } ?>"><a href="content_page.php">Content Pages</a>
                </li>
                <li  class="<?php if($page_name == 'banners.php' || $page_name == 'edit_manage_banners.php' ) { echo "active"; } ?>"><a href="banners.php">Banners</a>
                </li>
                <li  class="<?php if($page_name == 'testimonials.php'  || $page_name == 'edit_manage_testimonials.php' ) { echo "active"; } ?>"><a href="testimonials.php">Testimonials</a>
                </li>
                <li  class="<?php if($page_name == 'advertisements.php'  || $page_name == 'edit_grocery_advertisements.php' ) { echo "active"; } ?>"><a href="advertisements.php">Advertisements</a>
                </li>
                <li  class="<?php if($page_name == 'manage_brands.php'  || $page_name == 'edit_manage_brands.php' ) { echo "active"; } ?>"><a href="manage_brands.php">View Brands</a>
                </li>
                <li  class="<?php if($page_name == 'grocery_faqs.php'  || $page_name == 'edit_grocery_faqs.php' ) { echo "active"; } ?>"><a href="grocery_faqs.php">FAQ'S</a>
                </li>
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Catelog</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Catelog</li>
               
                <li  class="<?php if($page_name == 'manage_categories.php' || $page_name == 'add_manage_categories.php' || $page_name == 'edit_manage_categories.php' ) { echo "active"; } ?>"><a href="manage_categories.php">Categories</a>
                </li>
                <li  class="<?php if($page_name == 'manage_sub_categories.php'  || $page_name == 'edit_manage_sub_categories.php' ) { echo "active"; } ?>"><a href="manage_sub_categories.php">Sub Categories</a>
                </li>
                 <li  class="<?php if($page_name == 'grocery_weight.php' || $page_name == 'add_food_product_weights.php' || $page_name == 'edit_grocery_weight.php') { echo "active"; } ?>"><a href="grocery_weight.php">Weights</a>
                </li>
                <li  class="<?php if($page_name == 'groceries_types.php'  || $page_name == 'edit_groceries_types.php') { echo "active"; } ?>">
                  <a href="groceries_types.php">Groceries Item Types</a>
                </li>
   
                <li  class="<?php if($page_name == 'manage_products.php'  || $page_name == 'edit_manage_products.php') { echo "active"; } ?>">
              <a href="manage_products.php" >Products</a>
            </li>
            <li  class="<?php if($page_name == 'product_details.php') { echo "active"; } ?>">
              <a href="product_details.php" >Product Details</a>
            </li>
            <li  class="<?php if($page_name == 'payment_settings.php' || $page_name == 'edit_payment_settings.php') { echo "active"; } ?>">
              <a href="payment_settings.php" >Payments Settings</a>
            </li>
              </ul>
            </li>
            <!-- <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-pin zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Mangae Master Data</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Mangae Master Data</li>
                 <li  class="<?php if($page_name == 'lkp_states.php' || $page_name == 'add_lkp_states.php' || $page_name == 'edit_lkp_states.php' ) { echo "active"; } ?>">
                  <a href="lkp_states.php" >States</a>
                </li>
                <li  class="<?php if($page_name == 'lkp_districts.php' || $page_name == 'add_lkp_districts.php' || $page_name == 'edit_lkp_districts.php' ) { echo "active"; } ?>">
                  <a href="lkp_districts.php" >Districts</a>
                </li>
                <li  class="<?php if($page_name == 'lkp_cities.php' || $page_name == 'add_lkp_cities.php' || $page_name == 'edit_lkp_cities.php' ) { echo "active"; } ?>">
                <a href="lkp_cities.php">Cities</a>
                </li>
                
              </ul>
            </li> -->
            
            <!-- <li  class="<?php if($page_name == 'faqs.php' || $page_name == 'add_faqs.php' || $page_name == 'edit_faqs.php') { echo "active"; } ?>">
              <a href="faqs.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-pin-help zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">FAQ'S</span>
              </a>
            </li> -->
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Orders</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Orders</li>
                <li  class="<?php if($page_name == 'view_orders.php' ) { echo "active"; } ?>"><a href="view_orders.php">Orders</a>
                </li>
                <li  class="<?php if($page_name == 'food_failed_orders.php' || $page_name == 'edit_food_failed_orders.php' ) { echo "active"; } ?>"><a href="food_failed_orders.php">Failed Orders</a>
                </li>
                <li  class="<?php if($page_name == 'food_cancelled_orders.php' ) { echo "active"; } ?>"><a href="food_cancelled_orders.php">Cancelled Orders</a>
                </li>
                <li  class="<?php if($page_name == 'food_today_orders.php' ) { echo "active"; } ?>"><a href="food_today_orders.php">Today Orders</a>
                </li> 
              </ul>
            </li>
            
            <!-- <li  class="<?php if($page_name == 'food_sub_category.php' || $page_name == 'add_food_sub_category.php' || $page_name == 'edit_food_sub_category.php' ) { echo "active"; } ?>">
              <a href="food_sub_category.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-local-offer zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Sub Categories</span>
              </a>
            </li> --> 
            <!-- <li  class="<?php if($page_name == 'food_restaurants.php' || $page_name == 'add_food_restaurants.php' || $page_name == 'edit_food_restaurants.php' ) { echo "active"; } ?>">
              <a href="food_restaurants.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-local-offer zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Restaurants</span>
              </a>
            </li> -->
           
                       
            

            <!-- <li  class="<?php if($page_name == 'services_brand_logos.php' || $page_name == 'add_services_brand_logos.php' || $page_name == 'edit_services_brand_logos.php' ) { echo "active"; } ?>">
              <a href="services_brand_logos.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-image zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Brand Logos</span>
              </a>
            </li> -->
            <!-- <li  class="<?php if($page_name == 'food_testimonials.php' || $page_name == 'add_food_testimonials.php' || $page_name == 'edit_food_testimonials.php') { echo "active"; } ?>">
              <a href="food_testimonials.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-comments  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Testimonials</span>
              </a>
            </li> -->
           <!-- <li  class="<?php if($page_name == 'customer_enquireis.php' ) { echo "active"; } ?>">
              <a href="customer_enquireis.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-image zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Customer Enquireis</span>
              </a>
            </li> -->
          </ul>
        </div>
      </div>