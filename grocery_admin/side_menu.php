<?php
    $currentFile = $_SERVER["PHP_SELF"];
    $parts = Explode('/', $currentFile);
    $page_name = $parts[count($parts) - 1];
?>
<ul class="sidebar-menu">
            <li class="menu-title">Dashboard</li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-view-list zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Master Data</span>
              </a>
              <ul class="sidebar-submenu">
                <li class="menu-subtitle">Dashboards</li>
                <li class="<?php if($page_name == 'add_state.php') { echo "active"; } ?>"><a href="add_state.php">Manage States</a></li> 
                <li class="<?php if($page_name == 'add_districts.php') { echo "active"; } ?>"><a href="add_districts.php">Manage Districts</a></li> 

                <li class="<?php if($page_name == 'add_cities.php') { echo "active"; } ?>"><a href="add_cities.php">Manage Cities</a></li>
                <li class="<?php if($page_name == 'manage_pincodes.php') { echo "active"; } ?>"><a href="manage_pincodes.php">Manage Pin Codes</a></li>
  
                <li class="<?php if($page_name == 'manage_areas.php') { echo "active"; } ?>"><a href="manage_areas.php">Manage Areas</a></li>

                <li class="<?php if($page_name == 'manage_sub_areas.php') { echo "active"; } ?>"><a href="manage_sub_areas.php">Manage Sub Areas</a></li>
                
                <li class="<?php if($page_name == 'manage_languages.php') { echo "active"; } ?>"><a href="manage_languages.php">Manage Languages</a></li>
                <li class="<?php if($page_name == 'manage_brands.php') { echo "active"; } ?>"><a href="manage_brands.php">Manage Brands</a></li>
                <li class="<?php if($page_name == 'manage_categories.php') { echo "active"; } ?>"><a href="manage_categories.php">Manage Categories</a></li>
                <li class="<?php if($page_name == 'manage_sub_categories.php') { echo "active"; } ?>"><a href="manage_sub_categories.php">Manage Sub Categories</a></li>
                <li class="<?php if($page_name == '') { echo "active"; } ?>"><a href="">Manage Time Slots</a></li>
                <!-- <li><a href="">Manage Time Slots</a></li> -->
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-settings zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Settings</span>
              </a>
              <ul class="sidebar-submenu">
                <li class="menu-subtitle">Settings</li>
                <li class="<?php if($page_name == 'basic_settings.php') { echo "active"; } ?>"><a href="basic_settings.php">Site Level Settings</a></li>
                <li class="<?php if($page_name == 'payment_settings.php') { echo "active"; } ?>"><a href="payment_settings.php">Payment Settings</a></li>
                <li class="<?php if($page_name == 'Social_media_settings.php') { echo "active"; } ?>"><a href="Social_media_settings.php">Social Media Settings</a></li>
                <li class="<?php if($page_name == 'reward_settings.php') { echo "active"; } ?>"><a href="reward_settings.php">Reward Settings</a></li>
              </ul>
            </li>

            <li class="<?php if($page_name == 'social_networks_links.php') { echo "active"; } ?>">
              <a href="social_networks_links.php" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-settings zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Social Network Links</span>
              </a>
            </li>

            <li class="<?php if($page_name == 'content_page.php' || $page_name == 'edit_content_pages.php') { echo "active"; } ?>"><a href="content_page.php">
                <span class="menu-icon">
                  <i class="zmdi zmdi-info zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Content Pages</span>
              </a>
            </li>

    
            <li ><a href="#">
                <span class="menu-icon">
                  <i class="zmdi zmdi-blogger zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Blog</span>
              </a>
            </li>
            <li class="<?php if($page_name == 'brand_logos.php' || $page_name == 'edit_brand_logos.php') { echo "active"; } ?>"><a href="brand_logos.php">
                <span class="menu-icon">
                  <i class="zmdi zmdi-gradient zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Brand Logos</span>
              </a>
            </li>
            <li class="<?php if($page_name == 'grocery_banners.php') { echo "active"; } ?>"><a href="grocery_banners.php">
                <span class="menu-icon">
                  <i class="zmdi zmdi-info zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Banners</span>
              </a>
            </li>
  
            <li class="<?php if($page_name == 'grocery_tags.php') { echo "active"; } ?>"><a href="grocery_tags.php">
                <span class="menu-icon">
                  <i class="zmdi zmdi-link zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Tags</span>
              </a>
            </li>
            <li class="<?php if($page_name == 'testimonials.php' || $page_name == 'edit_testimonials.php') { echo "active"; } ?>"><a href="testimonials.php">
                <span class="menu-icon">
                  <i class="zmdi zmdi-accounts-add zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Testimonials</span>
              </a>
            </li>
            <li class="<?php if($page_name == 'faq.php' || $page_name == 'edit_faq.php') { echo "active"; } ?>"><a href="faq.php">
                <span class="menu-icon">
                  <i class="zmdi zmdi-pin-help zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">FAQ'S</span>
              </a>
            </li>
            <li class="<?php if($page_name == 'manage_products.php') { echo "active"; } ?>"><a href="manage_products.php">
                <span class="menu-icon">
                  <i class="zmdi zmdi-labels zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Products</span>
              </a>
            </li>
            <li><a href="">
                <span class="menu-icon">
                  <i class="zmdi zmdi-local-mall zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Orders</span>
              </a>
            </li>
           
            <li><a href="#">
                <span class="menu-icon">
                  <i class="zmdi zmdi-dot-circle-alt"></i>
                </span>
                <span class="menu-text">Coupons</span>
              </a>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Manage Users</span>
              </a>
              <ul class="sidebar-submenu">
                <li class="menu-subtitle">Manage Users</li>
                <li><a href="#">Customers</a></li>
                <li><a href="#">Employees</a></li>
                <li><a href="#">Delivery Boys</a></li>
                <li><a href="#">Admin Users</a></li>
                <li><a href="#">City Wise Admins</a></li>
                
              </ul>
            </li>
            
            <li><a href="#">
                <span class="menu-icon">
                  <i class="zmdi zmdi-balance-wallet zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Wallet</span>
              </a>
            </li>
            <li><a href="#">
                <span class="menu-icon">
                  <i class="zmdi zmdi-accounts-outline zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Refer A Friend</span>
              </a>
            </li>
            <li><a href="#">
                <span class="menu-icon">
                  <i class="zmdi zmdi-notifications zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Reward Points</span>
              </a>
            </li>
             <li class="<?php if($page_name == 'package_creation.php') { echo "active"; } ?>"><a href="package_creation.php">
                <span class="menu-icon">
                  <i class="zmdi zmdi-case zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Packages</span>
              </a>
            </li>

            <li><a href="#">
                <span class="menu-icon">
                  <i class="zmdi zmdi-dot-circle-alt"></i>
                </span>
                <span class="menu-text">Logs</span>
              </a>
            </li>
          </ul>