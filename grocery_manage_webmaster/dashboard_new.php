
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
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" alt="" height="25">  
            <span>cosmos</span>
          </a>
          <button class="navbar-toggler left-sidebar-toggle pull-left visible-xs" type="button">
            <span class="hamburger"></span>
          </button>
          <button class="navbar-toggler right-sidebar-toggle pull-right visible-xs-block" type="button">
            <i class="zmdi zmdi-long-arrow-left"></i>
            <div class="dot bg-danger"></div>
          </button>
          <button class="navbar-toggler pull-right visible-xs-block" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="more"></span>
          </button>
        </div>
        <div class="navbar-collapsible">
          <div id="navbar" class="navbar-collapse collapse">
            <button class="navbar-toggler left-sidebar-collapse pull-left hidden-xs" type="button">
              <span class="hamburger"></span>
            </button>
            <button class="navbar-toggler right-sidebar-toggle pull-right hidden-xs" type="button">
              <i class="zmdi zmdi-long-arrow-left"></i>
              <div class="dot bg-danger"></div>
            </button>
            <ul class="nav navbar-nav">
              <li class="visible-xs-block">
                <div class="nav-avatar">
                  <img class="img-circle" src="img/avatars/1.jpg" alt="" width="48" height="48">
                </div>
                <h4 class="navbar-text text-center">Welcome, Jon Snow!</h4>
              </li>
            </ul>
            <form class="navbar-form navbar-left">
              <div class="navbar-search-group">
                <input type="text" class="form-control" placeholder="Search">
                <button type="submit" class="btn btn-default">
                  <i class="zmdi zmdi-search"></i>
                </button>
              </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-table dropdown visible-xs-block">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-cell nav-icon">
                    <i class="zmdi zmdi-account-o"></i>
                  </span>
                  <span class="hidden-md-up m-l-15">Account</span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Settings</a></li>
                  <li><a href="#">Help</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
              <li class="nav-table dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-cell nav-icon">
                    <i class="zmdi zmdi-apps"></i>
                  </span>
                  <span class="hidden-md-up m-l-15">Applications</span>
                </a>
                <div class="dropdown-menu dropdown-apps custom-dropdown">
                  <div class="a-area">
                    <div class="row gutter-xs">
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="img/brands/dropbox.png" alt="">
                            </div>
                            <div class="ai-title">Dropbox</div>
                          </a>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="img/brands/github.png" alt="">
                            </div>
                            <div class="ai-title">Github</div>
                          </a>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="img/brands/wordpress.png" alt="">
                            </div>
                            <div class="ai-title">Wordpress</div>
                          </a>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="img/brands/gmail.png" alt="">
                            </div>
                            <div class="ai-title">Gmail</div>
                          </a>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="img/brands/drive.png" alt="">
                            </div>
                            <div class="ai-title">Drive</div>
                          </a>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="img/brands/dribbble.png" alt="">
                            </div>
                            <div class="ai-title">Dribbble</div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown-footer">
                    <a href="#">View all apps</a>
                  </div>
                </div>
              </li>
              <li class="nav-table dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-cell nav-icon">
                    <i class="zmdi zmdi-notifications-none"></i>
                  </span>
                  <span class="hidden-md-up m-l-15">Notifications</span>
                  <span class="label label-success">3</span>
                </a>
                <div class="dropdown-menu custom-dropdown dropdown-notifications dropdown-menu-right">
                  <div class="dropdown-header">
                    <span>Notifications</span>
                    <a href="#" class="text-primary">Mark all as read</a>
                  </div>
                  <div class="n-items">
                    <div class="custom-scrollbar">
                      <div class="n-item">
                        <div class="ni-img">
                          <img class="img-circle" src="img/avatars/1.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="ni-text"><a href="#">John Doe</a> is now following <a href="#">Kate Morris</a>.</div>
                        <div class="ni-time">10 min</div>
                      </div>
                      <div class="n-item">
                        <div class="ni-img">
                          <img class="img-circle" src="img/avatars/2.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="ni-text"><a href="#">Alexander Olsen</a> liked post <a href="#">Getting Started with SASS</a>.</div>
                        <div class="ni-time">40 min</div>
                      </div>
                      <div class="n-item">
                        <div class="ni-img">
                          <img class="img-circle" src="img/avatars/3.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="ni-text"><a href="#">Linda Davis</a> commented post <a href="#">How to use Bower</a>.</div>
                        <div class="ni-time">3 hours</div>
                      </div>
                      <div class="n-item">
                        <div class="ni-img">
                          <img class="img-circle" src="img/avatars/4.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="ni-text"><a href="#">John Doe</a> is now following <a href="#">Kate Morris</a>.</div>
                        <div class="ni-time">10 min</div>
                      </div>
                      <div class="n-item">
                        <div class="ni-img">
                          <img class="img-circle" src="img/avatars/5.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="ni-text"><a href="#">Alexander Olsen</a> liked post <a href="#">Getting Started with SASS</a>.</div>
                        <div class="ni-time">40 min</div>
                      </div>
                      <div class="n-item">
                        <div class="ni-img">
                          <img class="img-circle" src="img/avatars/6.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="ni-text"><a href="#">Linda Davis</a> commented post <a href="#">How to use Bower</a>.</div>
                        <div class="ni-time">3 hours</div>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown-footer">
                    <a href="#">View all notifications</a>
                  </div>
                </div>
              </li>
              <li class="nav-table dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-cell nav-icon">
                    <i class="zmdi zmdi-email-open"></i>
                  </span>
                  <span class="hidden-md-up m-l-15">Messages</span>
                  <span class="label label-warning">7</span>
                </a>
                <div class="dropdown-menu custom-dropdown dropdown-messages dropdown-menu-right">
                  <div class="dropdown-header">
                    <span>Recent messages</span>
                    <a href="#" class="text-primary">New Message</a>
                  </div>
                  <div class="m-items">
                    <div class="custom-scrollbar">
                      <div class="m-item">
                        <a href="#">
                          <div class="mi-icon bg-warning">
                            <i class="zmdi zmdi-upload"></i>
                          </div>
                          <div class="mi-time">10 min</div>
                          <div class="mi-title">Upload status</div>
                          <div class="mi-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </a>
                      </div>
                      <div class="m-item">
                        <a href="#">
                          <div class="mi-icon bg-success">
                            <i class="zmdi zmdi-money"></i>
                          </div>
                          <div class="mi-time">40 min</div>
                          <div class="mi-title">Income</div>
                          <div class="mi-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </a>
                      </div>
                      <div class="m-item">
                        <a href="#">
                          <div class="mi-icon bg-primary">
                            <i class="zmdi zmdi-alert-triangle"></i>
                          </div>
                          <div class="mi-time">3 hours</div>
                          <div class="mi-title">New task</div>
                          <div class="mi-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </a>
                      </div>
                      <div class="m-item">
                        <a href="#">
                          <div class="mi-icon bg-warning">
                            <i class="zmdi zmdi-upload"></i>
                          </div>
                          <div class="mi-time">10 min</div>
                          <div class="mi-title">Upload status</div>
                          <div class="mi-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </a>
                      </div>
                      <div class="m-item">
                        <a href="#">
                          <div class="mi-icon bg-success">
                            <i class="zmdi zmdi-money"></i>
                          </div>
                          <div class="mi-time">40 min</div>
                          <div class="mi-title">Income</div>
                          <div class="mi-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </a>
                      </div>
                      <div class="m-item">
                        <a href="#">
                          <div class="mi-icon bg-primary">
                            <i class="zmdi zmdi-alert-triangle"></i>
                          </div>
                          <div class="mi-time">3 hours</div>
                          <div class="mi-title">New task</div>
                          <div class="mi-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown-footer">
                    <a href="#">View all messages</a>
                  </div>
                </div>
              </li>
              <li class="nav-table dropdown hidden-sm-down">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-cell p-r-10">
                    <img class="img-circle" src="img/avatars/1.jpg" alt="" width="32" height="32">
                  </span>
                  <span class="nav-cell">Jon Snow
                    <span class="caret"></span>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#">
                      <i class="zmdi zmdi-account-o m-r-10"></i> Profile</a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="zmdi zmdi-settings m-r-10"></i> Settings</a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="zmdi zmdi-help-outline m-r-10"></i> Help</a>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="#">
                      <i class="zmdi zmdi-power m-r-10"></i> Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="site-main">
      <div class="site-left-sidebar">
        <div class="sidebar-backdrop"></div>
        <div class="custom-scrollbar">
          <ul class="sidebar-menu">
            <li class="menu-title">Main</li>
            <li class="with-sub active">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-home"></i>
                </span>
                <span class="menu-text">Dashboards</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Dashboards</li>
                <li><a href="index.html">Dashboard 1</a></li>
                <li class="active"><a href="dashboard-2.html">Dashboard 2</a></li>
                <li><a href="dashboard-3.html">Dashboard 3</a></li>
              </ul>
            </li>
            <li>
              <a href="page-layouts.html">
                <span class="menu-icon">
                  <i class="zmdi zmdi-view-web"></i>
                </span>
                <span class="menu-text">Page layouts</span>
              </a>
            </li>
            <li class="menu-title">Components</li>
            <li>
              <a href="widgets.html">
                <span class="badge badge-success">27</span>
                <span class="menu-icon">
                  <i class="zmdi zmdi-widgets"></i>
                </span>
                <span class="menu-text">Widgets</span>
              </a>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-case"></i>
                </span>
                <span class="menu-text">UI Elements</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">UI Elements</li>
                <li><a href="ui-alerts.html">Alerts</a></li>
                <li><a href="ui-buttons.html">Buttons</a></li>
                <li><a href="ui-flags.html">Flags</a></li>
                <li><a href="ui-grid-system.html">Grid system</a></li>
                <li><a href="ui-icons.html">Icons</a></li>
                <li><a href="ui-modals.html">Modals</a></li>
                <li><a href="ui-notifications.html">Notifications</a></li>
                <li><a href="ui-panels.html">Panels</a></li>
                <li><a href="ui-progress-bars.html">Progress bars</a></li>
                <li><a href="ui-tabs-accordions.html">Tabs & accordions</a></li>
                <li><a href="ui-typography.html">Typography</a></li>
                <li><a href="ui-other.html">Other</a></li>
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-dot-circle-alt"></i>
                </span>
                <span class="menu-text">Forms</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Forms</li>
                <li><a href="forms-form-controls.html">Form controls</a></li>
                <li><a href="forms-form-layouts.html">Form layouts</a></li>
                <li><a href="forms-form-masks.html">Form masks</a></li>
                <li><a href="forms-form-validation.html">Form validation</a></li>
                <li><a href="forms-form-wizard.html">Form wizard</a></li>
                <li><a href="forms-material-form.html">Material form</a></li>
                <li><a href="forms-plugins.html">Plugins</a></li>
                <li><a href="forms-uploader.html">Uploader</a></li>
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-border-all"></i>
                </span>
                <span class="menu-text">Tables</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Tables</li>
                <li><a href="tables-basic.html">Basic tables</a></li>
                <li><a href="tables-responsive.html">Responsive tables</a></li>
                <li><a href="tables-datatables.html">DataTables</a></li>
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-chart-donut"></i>
                </span>
                <span class="menu-text">Charts</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Charts</li>
                <li><a href="charts-chartist.html">Chartist</a></li>
                <li><a href="charts-chartjs.html">Chart.js</a></li>
                <li><a href="charts-flot.html">Flot</a></li>
                <li><a href="charts-morris.html">Morris</a></li>
                <li><a href="charts-peity.html">Peity</a></li>
              </ul>
            </li>
            <li class="menu-title">Pages</li>
            <li>
              <a href="messenger.html">
                <span class="badge badge-warning">new</span>
                <span class="menu-icon">
                  <i class="zmdi zmdi-comment-outline"></i>
                </span>
                <span class="menu-text">Messenger</span>
              </a>
            </li>
            <li>
              <a href="mailbox.html">
                <span class="menu-icon">
                  <i class="zmdi zmdi-email-open"></i>
                </span>
                <span class="menu-text">Mailbox</span>
              </a>
            </li>
            <li>
              <a href="contacts.html">
                <span class="menu-icon">
                  <i class="zmdi zmdi-accounts-alt"></i>
                </span>
                <span class="menu-text">Contacts</span>
              </a>
            </li>
            <li>
              <a href="profile.html">
                <span class="menu-icon">
                  <i class="zmdi zmdi-account"></i>
                </span>
                <span class="menu-text">Profile</span>
              </a>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-shopping-cart"></i>
                </span>
                <span class="menu-text">E-commerce</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">E-commerce</li>
                <li><a href="e-commerce-store.html">Store</a></li>
                <li><a href="e-commerce-product.html">Product</a></li>
                <li><a href="e-commerce-cart.html">Cart</a></li>
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-pin"></i>
                </span>
                <span class="menu-text">Maps</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Maps</li>
                <li><a href="maps-vector.html">Vector</a></li>
                <li><a href="maps-google.html">Google</a></li>
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-layers"></i>
                </span>
                <span class="menu-text">Other pages</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Other pages</li>
                <li><a href="pages-blank.html">Blank page</a></li>
                <li><a href="pages-signup.html">Sign up</a></li>
                <li><a href="pages-login.html">Login</a></li>
                <li><a href="pages-reset-password.html">Reset password</a></li>
                <li><a href="pages-403.html">403</a></li>
                <li><a href="pages-404.html">404</a></li>
                <li><a href="pages-500.html">500</a></li>
                <li><a href="pages-calendar.html">Calendar</a></li>
                <li><a href="pages-invoice.html">Invoice</a></li>
              </ul>
            </li>
            <li class="menu-title">Tags</li>
            <li>
              <a href="documentation.html">
                <span class="menu-icon">
                  <i class="zmdi zmdi-circle text-success"></i>
                </span>
                <span class="menu-text">Documentation</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="menu-icon">
                  <i class="zmdi zmdi-circle text-warning"></i>
                </span>
                <span class="menu-text">Questions</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="menu-icon">
                  <i class="zmdi zmdi-circle text-danger"></i>
                </span>
                <span class="menu-text">Website</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="site-right-sidebar">
        <div class="custom-scrollbar">
          <ul class="nav nav-tabs" role="tablist">
            <li class="active">
              <a href="#tab-chat" data-toggle="tab" role="tab">Chat</a>
            </li>
            <li class="nav-item">
              <a href="#tab-todo" data-toggle="tab" role="tab">Todo</a>
            </li>
            <li class="nav-item">
              <a href="#tab-settings" data-toggle="tab" role="tab">Settings</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-chat" role="tabpanel">
              <div class="sidebar-chat animated fadeIn">
                <ul class="media-list">
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/2.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-success"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Jonathan Mel</h5>
                        <p class="text-muted m-b-0">How are you?</p>
                      </div>
                      <div class="media-right">
                        <span class="badge bg-danger">2</span>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/3.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-warning"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Landon Graham</h5>
                        <p class="text-muted m-b-0">Meeting at 16:00 in the conference room.</p>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/4.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-success"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Ron Carran</h5>
                        <p class="text-muted m-b-0">No problem. Thank's for reminder!</p>
                      </div>
                      <div class="media-right">
                        <span class="badge bg-danger">5</span>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/5.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-success"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Airi Satou</h5>
                        <p class="text-muted m-b-0">No problem. The only thing i need is time.</p>
                      </div>
                      <div class="media-right">
                        <span class="badge bg-danger">2</span>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/6.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-warning"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Angelica Ramos</h5>
                        <p class="text-muted m-b-0">Yep. We talked about it this morning.</p>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/7.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-success"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Ashton Cox</h5>
                        <p class="text-muted m-b-0">Can't wait for the public launch!</p>
                      </div>
                      <div class="media-right">
                        <span class="badge bg-danger">5</span>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/8.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-success"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Bradley Greer</h5>
                        <p class="text-muted m-b-0">Ok. Just let me know.</p>
                      </div>
                      <div class="media-right">
                        <span class="badge bg-danger">2</span>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/9.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-warning"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Brenden Wagner</h5>
                        <p class="text-muted m-b-0">Fantastic...</p>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/10.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-success"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Wolfe Stevie</h5>
                        <p class="text-muted m-b-0">I know. Fingers crossed!</p>
                      </div>
                      <div class="media-right">
                        <span class="badge bg-danger">5</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="sidebar-chat-window animated fadeIn">
                <div class="clearfix m-b-30">
                  <div class="pull-left">
                    <a class="text-primary" href="#">
                      <i class="zmdi zmdi-chevron-left m-r-5"></i>Chat list</a>
                  </div>
                  <div class="pull-right">
                    <strong>Jonathan Mel</strong>
                  </div>
                </div>
                <div class="scw-item">
                  <span>No problem. The only thing i need is time.</span>
                </div>
                <div class="scw-item self">
                  <span>Fantastic...</span>
                </div>
                <div class="scw-item">
                  <span>I know. Fingers crossed!</span>
                </div>
                <div class="scw-item self">
                  <span>Meeting at 16:00 in the conference room.</span>
                </div>
                <div class="scw-item">
                  <span>Can't wait for the public launch!</span>
                </div>
                <div class="scw-form">
                  <form>
                    <input class="form-control" type="text" placeholder="Message...">
                    <button class="btn btn-default" type="button">
                      <i class="zmdi zmdi-chevron-right"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-todo" role="tabpanel">
              <div class="sidebar-todo animated fadeIn">
                <div class="t-group">
                  <h5>Important</h5>
                  <div class="t-item">
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="mode" checked="checked">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label">Meet graphic designer</span>
                    </label>
                  </div>
                  <div class="t-item">
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="mode">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label">Interview</span>
                    </label>
                  </div>
                  <div class="t-item">
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="mode">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label">Press release</span>
                    </label>
                  </div>
                  <div class="t-item">
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="mode" checked="checked">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label">Call Bob</span>
                    </label>
                  </div>
                </div>
                <div class="t-group">
                  <h5>Secondary</h5>
                  <div class="t-item">
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="mode">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label">Design mock-up</span>
                    </label>
                  </div>
                  <div class="t-item">
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="mode">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label">Lunch with Marie</span>
                    </label>
                  </div>
                  <div class="t-item">
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="mode" checked="checked">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label">Copywriting</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-settings" role="tabpanel">
              <div class="sidebar-settings animated fadeIn">
                <div class="s-group">
                  <h5>Main</h5>
                  <div class="s-item">
                    <div class="text-truncate">Allow commenting</div>
                    <div class="si-checkbox">
                      <label class="switch switch-primary">
                        <input type="checkbox" name="switches" class="s-input" checked="checked">
                        <span class="s-content">
                          <span class="s-track"></span>
                          <span class="s-handle"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="s-item">
                    <div class="text-truncate">Allow editing</div>
                    <div class="si-checkbox">
                      <label class="switch switch-primary">
                        <input type="checkbox" name="switches" class="s-input">
                        <span class="s-content">
                          <span class="s-track"></span>
                          <span class="s-handle"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="s-item">
                    <div class="text-truncate">Allow copying</div>
                    <div class="si-checkbox">
                      <label class="switch switch-primary">
                        <input type="checkbox" name="switches" class="s-input">
                        <span class="s-content">
                          <span class="s-track"></span>
                          <span class="s-handle"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="s-group">
                  <h5>Notificati?ns</h5>
                  <div class="s-item">
                    <div class="text-truncate">Comments</div>
                    <div class="si-checkbox">
                      <label class="switch switch-primary">
                        <input type="checkbox" name="switches" class="s-input">
                        <span class="s-content">
                          <span class="s-track"></span>
                          <span class="s-handle"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="s-item">
                    <div class="text-truncate">Tasks</div>
                    <div class="si-checkbox">
                      <label class="switch switch-primary">
                        <input type="checkbox" name="switches" class="s-input" checked="checked">
                        <span class="s-content">
                          <span class="s-track"></span>
                          <span class="s-handle"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="s-group">
                  <h5>Security</h5>
                  <div class="s-item">
                    <div class="text-truncate">API Access</div>
                    <div class="si-checkbox">
                      <label class="switch switch-primary">
                        <input type="checkbox" name="switches" class="s-input" checked="checked">
                        <span class="s-content">
                          <span class="s-track"></span>
                          <span class="s-handle"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="s-item">
                    <div class="text-truncate">Unlimited workspace</div>
                    <div class="si-checkbox">
                      <label class="switch switch-primary">
                        <input type="checkbox" name="switches" class="s-input">
                        <span class="s-content">
                          <span class="s-track"></span>
                          <span class="s-handle"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="site-content">
        <div class="row">
          <div class="col-md-4 col-sm-5">
            <div class="widget widget-tile-2 bg-primary m-b-30">
              <div class="wt-content p-a-20 p-b-50">
                <div class="wt-title">Users
                  <span class="t-caret text-success">
                    <i class="zmdi zmdi-caret-up"></i>
                  </span>
                </div>
                <div class="wt-number">175</div>
                <div class="wt-text">&nbsp;</div>
              </div>
              <div class="wt-icon">
                <i class="zmdi zmdi-accounts"></i>
              </div>
              
            </div>
            
          </div>
            <div class="col-md-4 col-sm-5">
            <div class="widget widget-tile-2 bg-primary m-b-30">
              <div class="wt-content p-a-20 p-b-50">
                <div class="wt-title">Vendors
                  <span class="t-caret text-success">
                    <i class="zmdi zmdi-caret-up"></i>
                  </span>
                </div>
                <div class="wt-number">175</div>
                <div class="wt-text">&nbsp;</div>
              </div>
              <div class="wt-icon">
                <i class="zmdi zmdi-accounts"></i>
              </div>
              
            </div>
            
          </div>
            <div class="col-md-4 col-sm-5">
            <div class="widget widget-tile-2 bg-primary m-b-30">
              <div class="wt-content p-a-20 p-b-50">
                <div class="wt-title">Delivery Boys
                  <span class="t-caret text-success">
                    <i class="zmdi zmdi-caret-up"></i>
                  </span>
                </div>
                <div class="wt-number">175</div>
                <div class="wt-text">&nbsp;</div>
              </div>
              <div class="wt-icon">
                <i class="zmdi zmdi-accounts"></i>
              </div>
              
            </div>
            
          </div>
            
        <div class="col-md-4 col-sm-5">
            
            <div class="widget widget-tile-2 bg-warning m-b-30">
              <div class="wt-content p-a-20 p-b-50">
                <div class="wt-title">Orders</div>
                <div class="wt-number">47,855</div>
                <div class="wt-text">&nbsp;</div>
              </div>
              <div class="wt-icon">
                <i class="zmdi zmdi-shopping-basket"></i>
              </div>
              
            </div>
            
          </div>
            
            <div class="col-md-4 col-sm-5">
            
            <div class="widget widget-tile-2 bg-warning m-b-30">
              <div class="wt-content p-a-20 p-b-50">
                <div class="wt-title">Today Orders</div>
                <div class="wt-number">47,855</div>
                <div class="wt-text">&nbsp;</div>
              </div>
              <div class="wt-icon">
                <i class="zmdi zmdi-shopping-basket"></i>
              </div>
              
            </div>
            
          </div>
            
            <div class="col-md-4 col-sm-5">
            
            
            <div class="widget widget-tile-2 bg-danger m-b-30">
              <div class="wt-content p-a-20 p-b-50">
                <div class="wt-title">Total Recipes</div>
                <div class="wt-number">750000</div>
                <div class="wt-text">&nbsp;</div>

              </div>
              <div class="wt-icon">
                <i class="zmdi zmdi-email-open"></i>
              </div>
              
            </div>
          </div>
          
        </div>
          <div class="row">
              <?php for($i=0; $i<3; $i++) { ?>
        <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-tools">
                  <a href="#" class="tools-icon">
                    <i class="zmdi zmdi-refresh"></i>
                  </a>
                  <a href="#" class="tools-icon">
                    <i class="zmdi zmdi-close"></i>
                  </a>
                </div>
                <h3 class="panel-title">Top sales</h3>
                <div class="panel-subtitle">Lorem ipsum dolor sit amet</div>
              </div>
              <div class="panel-body">
                <div id="donut" style="height: 215px"></div>
              </div>
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <i class="zmdi zmdi-circle text-primary"></i>
                    </td>
                    <td>Android</td>
                    <td>34</td>
                    <td class="text-center">
                      <i class="zmdi zmdi-arrow-left-bottom"></i>
                    </td>
                    <td class="text-right">
                      <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <i class="zmdi zmdi-circle text-warning"></i>
                    </td>
                    <td>iOS</td>
                    <td>67</td>
                    <td class="text-center">
                      <i class="zmdi zmdi-arrow-right-top"></i>
                    </td>
                    <td class="text-right">
                      <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <i class="zmdi zmdi-circle text-danger"></i>
                    </td>
                    <td>Windows</td>
                    <td>45</td>
                    <td class="text-center">
                      <i class="zmdi zmdi-arrow-left-bottom"></i>
                    </td>
                    <td class="text-right">
                      <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
              <?php } ?>
          </div>
          <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="panel-tools">
                  <a href="#" class="tools-icon">
                    <i class="zmdi zmdi-refresh"></i>
                  </a>
                  <a href="#" class="tools-icon">
                    <i class="zmdi zmdi-close"></i>
                  </a>
                </div>
                <h3 class="panel-title">Orders</h3>
                <div class="panel-subtitle">30 Jun 2017 - 17 Jul 2017</div>
              </div>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th style="width: 32px"></th>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Country</th>
                      <th>Sales</th>
                      <th style="width: 15%">Progress</th>
                      <th>Status</th>
                      <th style="width: 32px">Access</th>
                      <th style="width: 5%"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img class="img-circle" src="img/avatars/1.jpg" alt="" width="32" height="32">
                      </td>
                      <td>Jonathan Mel</td>
                      <td>
                        April 6, 2017
                        <br>
                        <small class="text-muted">8:30</small>
                      </td>
                      <td>
                        <span class="flag-icon flag-icon-us"></span>
                      </td>
                      <td>98</td>
                      <td>
                        <small class="text-muted">5/10</small>
                        <div class="progress progress-xs m-b-0">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (success)</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="label label-outline-success">Active</span>
                      </td>
                      <td>
                        <label class="switch switch-primary m-t-10">
                          <input type="checkbox" name="newsletter" class="s-input">
                          <span class="s-content">
                            <span class="s-track"></span>
                            <span class="s-handle"></span>
                          </span>
                        </label>
                      </td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class="img-circle" src="img/avatars/2.jpg" alt="" width="32" height="32">
                      </td>
                      <td>Landon Graham</td>
                      <td>
                        March 31, 2017
                        <br>
                        <small class="text-muted">2:25</small>
                      </td>
                      <td>
                        <span class="flag-icon flag-icon-gb"></span>
                      </td>
                      <td>105</td>
                      <td>
                        <small class="text-muted">8/10</small>
                        <div class="progress progress-xs m-b-0">
                          <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">80% Complete (success)</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="label label-outline-info">In process</span>
                      </td>
                      <td>
                        <label class="switch switch-primary m-t-10">
                          <input type="checkbox" name="newsletter" class="s-input" checked="checked">
                          <span class="s-content">
                            <span class="s-track"></span>
                            <span class="s-handle"></span>
                          </span>
                        </label>
                      </td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class="img-circle" src="img/avatars/3.jpg" alt="" width="32" height="32">
                      </td>
                      <td>Ron Carran</td>
                      <td>
                        February 14, 2017
                        <br>
                        <small class="text-muted">5:40</small>
                      </td>
                      <td>
                        <span class="flag-icon flag-icon-us"></span>
                      </td>
                      <td>87</td>
                      <td>
                        <small class="text-muted">4/10</small>
                        <div class="progress progress-xs m-b-0">
                          <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="label label-outline-success">Active</span>
                      </td>
                      <td>
                        <label class="switch switch-primary m-t-10">
                          <input type="checkbox" name="newsletter" class="s-input">
                          <span class="s-content">
                            <span class="s-track"></span>
                            <span class="s-handle"></span>
                          </span>
                        </label>
                      </td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class="img-circle" src="img/avatars/4.jpg" alt="" width="32" height="32">
                      </td>
                      <td>Lucius Skyle</td>
                      <td>
                        January 12, 2017
                        <br>
                        <small class="text-muted">4:50</small>
                      </td>
                      <td>
                        <span class="flag-icon flag-icon-fr"></span>
                      </td>
                      <td>145</td>
                      <td>
                        <small class="text-muted">7/10</small>
                        <div class="progress progress-xs m-b-0">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                            <span class="sr-only">70% Complete (success)</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="label label-outline-warning">Expired</span>
                      </td>
                      <td>
                        <label class="switch switch-primary m-t-10">
                          <input type="checkbox" name="newsletter" class="s-input" checked="checked">
                          <span class="s-content">
                            <span class="s-track"></span>
                            <span class="s-handle"></span>
                          </span>
                        </label>
                      </td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
              
          </div>
      </div>
      <div class="site-footer">
        2017 � Cosmos
      </div>
    </div>
    <script src="js/vendor.min.js"></script>
    
    <script type="text/javascript">
    "use strict";!function(a){new Chart(a("#infoblock-chart-1"),{type:"line",data:{labels:["January","February","March","April","May","June","July"],datasets:[{label:"Dataset",data:[45,40,30,20,25,35,50],fill:!0,backgroundColor:"#e53935",borderColor:"#e53935",borderWidth:2,borderCapStyle:"butt",borderDash:[],borderDashOffset:0,borderJoinStyle:"miter",pointBorderColor:"#e53935",pointBackgroundColor:"#fff",pointBorderWidth:2,pointHoverRadius:4,pointHoverBackgroundColor:"#e53935",pointHoverBorderColor:"#fff",pointHoverBorderWidth:2,pointRadius:[0,4,4,4,4,4,0],pointHitRadius:10,spanGaps:!1}]},options:{scales:{xAxes:[{display:!1}],yAxes:[{display:!1,ticks:{min:0,max:60}}]},legend:{display:!1}}}),new Chart(a("#infoblock-chart-2"),{type:"line",data:{labels:["January","February","March","April","May","June","July"],datasets:[{label:"Dataset",data:[30,22,18,25,40,55,60],fill:!0,backgroundColor:"#7d57c1",borderColor:"#7d57c1",borderWidth:2,borderCapStyle:"butt",borderDash:[],borderDashOffset:0,borderJoinStyle:"miter",pointBorderColor:"#7d57c1",pointBackgroundColor:"#fff",pointBorderWidth:2,pointHoverRadius:4,pointHoverBackgroundColor:"#7d57c1",pointHoverBorderColor:"#fff",pointHoverBorderWidth:2,pointRadius:[0,4,4,4,4,4,0],pointHitRadius:10,spanGaps:!1}]},options:{scales:{xAxes:[{display:!1}],yAxes:[{display:!1,ticks:{min:0,max:60}}]},legend:{display:!1}}}),a('[data-chart="peity"]').each(function(){var b=a(this).attr("data-type");a(this).peity(b)}),Morris.Donut({element:"donut",data:[{label:"Android",value:34},{label:"iOS",value:67},{label:"Windows",value:45}],resize:!0,colors:["#1d87e4","#faa800","#e53935"]}),a("#vector-map").vectorMap({map:"world_en",backgroundColor:null,borderColor:null,borderOpacity:.5,borderWidth:1,color:"#1d87e4",enableZoom:!0,hoverColor:"#1d87e4",hoverOpacity:.7,normalizeFunction:"linear",selectedColor:"#faa800",selectedRegions:["au","ca","de","br","in"],showTooltip:!0});for(var b=[],c=0;c<=6;c+=1)b.push([c,parseInt(20*Math.random())]);for(var d=[],e=0;e<=6;e+=1)d.push([e,parseInt(20*Math.random())]);var f=[{label:"Data One",data:b,bars:{order:1}},{label:"Data Two",data:d,bars:{order:2}}];a.plot(a("#chart-bar"),f,{bars:{show:!0,barWidth:.2,fill:1},series:{stack:0},grid:{color:"#aaa",hoverable:!0,borderWidth:0,labelMargin:5,backgroundColor:"#fff"},legend:{show:!1},colors:["#faa800","#34a853"],tooltip:!0,tooltipOpts:{content:"%s : %y.0",shifts:{x:-30,y:-50}}}),a(function(){function b(){for(d.length>0&&(d=d.slice(1));d.length<e;){var a=d.length>0?d[d.length-1]:50,b=a+10*Math.random()-5;b<5?b=5:b>95&&(b=95),d.push(b)}for(var c=[],f=0;f<d.length;++f)c.push([f,d[f]]);return c}function c(){g.setData([b()]),g.draw(),setTimeout(c,f)}var d=[],e=300,f=60,g=a.plot("#realtime",[b()],{series:{shadowSize:0},yaxis:{min:0,max:100},xaxis:{min:0,max:300},colors:["#7d57c1"],grid:{color:"#aaa",hoverable:!0,borderWidth:0,backgroundColor:"#fff"},tooltip:!0,tooltipOpts:{content:"Y: %y",defaultTheme:!1}});c()})}(jQuery);

    </script>
  </body>
</html>