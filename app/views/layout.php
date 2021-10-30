<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $class?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/bootstrap.min.css")?>" />
  <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/icons.min.css")?>" />
  <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/app.min.css")?>" />
  <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/style.css")?>" />
</head>
<body class="center-menu">

  <!-- Navigation Bar-->
  <header id="topnav">

      <!-- Topbar Start -->
      <div class="navbar-custom">
          <div class="container-fluid">
              <ul class="list-unstyled topnav-menu float-right mb-0">

                  <li class="dropdown notification-list">
                      <!-- Mobile menu toggle-->
                      <a class="navbar-toggle nav-link">
                          <div class="lines">
                              <span></span>
                              <span></span>
                              <span></span>
                          </div>
                      </a>
                      <!-- End mobile menu toggle-->
                  </li>

                  <li class="d-none d-sm-block">
                      <form class="app-search">
                          <div class="app-search-box">
                              <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Search...">
                                  <div class="input-group-append">
                                      <button class="btn" type="submit">
                                          <i class="fe-search"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </li>

                  <li class="dropdown d-none d-lg-block">
                      <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                          <img src="assets/images/flags/us.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English <i class="mdi mdi-chevron-down"></i> </span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <img src="assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                          </a>

                      </div>
                  </li>
      
                  <li class="dropdown notification-list">
                      <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                          <i class="fe-bell noti-icon"></i>
                          <span class="badge badge-danger rounded-circle noti-icon-badge">4</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                          <!-- item-->
                          <div class="dropdown-item noti-title">
                              <h5 class="m-0">
                                  <span class="float-right">
                                      <a href="#" class="text-dark">
                                          <small>Clear All</small>
                                      </a>
                                  </span>Notification
                              </h5>
                          </div>

                          <div class="slimscroll noti-scroll">

                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                  <div class="notify-icon bg-soft-primary text-primary">
                                      <i class="mdi mdi-comment-account-outline"></i>
                                  </div>
                                  <p class="notify-details">Doug Dukes commented on Admin Dashboard
                                      <small class="text-muted">1 min ago</small>
                                  </p>
                              </a>

                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                                  <div class="notify-icon">
                                      <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                  <p class="notify-details">Mario Drummond</p>
                                  <p class="text-muted mb-0 user-msg">
                                      <small>Hi, How are you? What about our next meeting</small>
                                  </p>
                              </a>

                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                                  <div class="notify-icon">
                                      <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                  <p class="notify-details">Karen Robinson</p>
                                  <p class="text-muted mb-0 user-msg">
                                      <small>Wow ! this admin looks good and awesome design</small>
                                  </p>
                              </a>

                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                                  <div class="notify-icon bg-soft-warning text-warning">
                                      <i class="mdi mdi-account-plus"></i>
                                  </div>
                                  <p class="notify-details">New user registered.
                                      <small class="text-muted">5 hours ago</small>
                                  </p>
                              </a>

                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                                  <div class="notify-icon bg-info">
                                      <i class="mdi mdi-comment-account-outline"></i>
                                  </div>
                                  <p class="notify-details">Caleb Flakelar commented on Admin
                                      <small class="text-muted">4 days ago</small>
                                  </p>
                              </a>

                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                                  <div class="notify-icon bg-secondary">
                                      <i class="mdi mdi-heart"></i>
                                  </div>
                                  <p class="notify-details">Carlos Crouch liked
                                      <b>Admin</b>
                                      <small class="text-muted">13 days ago</small>
                                  </p>
                              </a>
                          </div>

                          <!-- All-->
                          <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                              View all
                              <i class="fi-arrow-right"></i>
                          </a>

                      </div>
                  </li>

                  <li class="dropdown notification-list">
                      <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                          <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                          <span class="pro-user-name ml-1">
                              Nik Patel <i class="mdi mdi-chevron-down"></i> 
                          </span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                          <!-- item-->
                          <div class="dropdown-header noti-title">
                              <h6 class="text-overflow m-0">Welcome !</h6>
                          </div>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="remixicon-account-circle-line"></i>
                              <span>My Account</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="remixicon-settings-3-line"></i>
                              <span>Settings</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="remixicon-wallet-line"></i>
                              <span>My Wallet <span class="badge badge-success float-right">3</span> </span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="remixicon-lock-line"></i>
                              <span>Lock Screen</span>
                          </a>

                          <div class="dropdown-divider"></div>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="remixicon-logout-box-line"></i>
                              <span>Logout</span>
                          </a>

                      </div>
                  </li>            

                  <li class="dropdown notification-list">
                      <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                          <i class="fe-settings noti-icon"></i>
                      </a>
                  </li>

              </ul>

              <!-- LOGO -->
              <div class="logo-box">
                  <a href="index.html" class="logo text-center">
                      <span class="logo-lg">
                          <img src="assets/images/logo-light.png" alt="" height="20">
                          <!-- <span class="logo-lg-text-light">Xeria</span> -->
                      </span>
                      <span class="logo-sm">
                          <!-- <span class="logo-sm-text-dark">X</span> -->
                          <img src="assets/images/logo-sm.png" alt="" height="24">
                      </span>
                  </a>
              </div>

              <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
      
                  <li class="dropdown d-none d-lg-block">
                      <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                          Create New
                          <i class="mdi mdi-chevron-down"></i> 
                      </a>
                      <div class="dropdown-menu">
                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item">
                              <i class="fe-briefcase mr-1"></i>
                              <span>New Projects</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item">
                              <i class="fe-user mr-1"></i>
                              <span>Create Users</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item">
                              <i class="fe-bar-chart-line- mr-1"></i>
                              <span>Revenue Report</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item">
                              <i class="fe-settings mr-1"></i>
                              <span>Settings</span>
                          </a>

                          <div class="dropdown-divider"></div>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item">
                              <i class="fe-headphones mr-1"></i>
                              <span>Help & Support</span>
                          </a>

                      </div>
                  </li>

                  <li class="dropdown dropdown-mega d-none d-lg-block">
                      <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                          Mega Menu
                          <i class="mdi mdi-chevron-down"></i> 
                      </a>
                      <div class="dropdown-menu dropdown-megamenu">
                          <div class="row">
                              <div class="col-sm-8">
                      
                                  <div class="row">
                                      <div class="col-md-4">
                                          <h5 class="text-dark mt-0">UI Components</h5>
                                          <ul class="list-unstyled megamenu-list">
                                              <li>
                                                  <a href="javascript:void(0);">Widgets</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Nestable List</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Range Sliders</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Masonry Items</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Sweet Alerts</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Treeview Page</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Tour Page</a>
                                              </li>
                                          </ul>
                                      </div>

                                      <div class="col-md-4">
                                          <h5 class="text-dark mt-0">Applications</h5>
                                          <ul class="list-unstyled megamenu-list">
                                              <li>
                                                  <a href="javascript:void(0);">eCommerce Pages</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">CRM Pages</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Email</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Calendar</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Team Contacts</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Task Board</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Email Templates</a>
                                              </li>
                                          </ul>
                                      </div>

                                      <div class="col-md-4">
                                          <h5 class="text-dark mt-0">Extra Pages</h5>
                                          <ul class="list-unstyled megamenu-list">
                                              <li>
                                                  <a href="javascript:void(0);">Left Sidebar with User</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Menu Collapsed</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Small Left Sidebar</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">New Header Style</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Search Result</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Gallery Pages</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Maintenance & Coming Soon</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                  <div class="text-center mt-3">
                                      <h3 class="text-dark">Special Discount Sale!</h3>
                                      <h4>Save up to 70% off.</h4>
                                      <button class="btn btn-primary mt-3">Download Now <i class="ml-1 mdi mdi-arrow-right"></i></button>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </li>
              </ul>
              <div class="clearfix"></div>
          </div>
      </div>
      <!-- end Topbar -->

      <div class="topbar-menu">
          <div class="container-fluid">
              <div id="navigation">
                  <!-- Navigation Menu-->
                  <ul class="navigation-menu">

                      <li class="has-submenu">
                          <a href="#">
                              <i class="remixicon-dashboard-line"></i>Dashboards <div class="arrow-down"></div></a>
                          <ul class="submenu">
                              <li>
                                  <a href="index.html">Dashboard 1</a>
                              </li>
                              <li>
                                  <a href="dashboard-2.html">Dashboard 2</a>
                              </li>
                          </ul>
                      </li>

                      <li class="has-submenu">
                          <a href="#">
                              <i class="remixicon-stack-line"></i>Apps <div class="arrow-down"></div>
                          </a>
                          <ul class="submenu">
                              <li>
                                  <a href="apps-kanbanboard.html">Kanban Board</a>
                              </li>
                              <li>
                                  <a href="apps-companies.html">Companies</a>
                              </li>
                              <li>
                                  <a href="apps-calendar.html">Calendar</a>
                              </li>
                              <li>
                                  <a href="apps-filemanager.html">File Manager</a>
                              </li>
                              <li>
                                  <a href="apps-tickets.html">Tickets</a>
                              </li>
                              <li>
                                  <a href="apps-team.html">Team Members</a>
                              </li>
                              <li class="has-submenu">
                                  <a href="#">Email <div class="arrow-down"></div></a>
                                  <ul class="submenu">
                                      <li>
                                          <a href="email-inbox.html">Inbox</a>
                                      </li>
                                      <li>
                                          <a href="email-read.html">Read Email</a>
                                      </li>
                                      <li>
                                          <a href="email-compose.html">Compose Email</a>
                                      </li>
                                      <li>
                                          <a href="email-templates.html">Email Templates</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>

                      <li class="has-submenu">
                          <a href="#"> <i class="remixicon-layout-line"></i>Layouts <div class="arrow-down"></div></a>
                          <ul class="submenu">
                              <li>
                                  <a href="layouts-menubar-dark.html">Menubar Dark</a>
                              </li>
                              <li>
                                  <a href="layouts-topbar-light.html">Topbar Light</a>
                              </li>
                              <li>
                                  <a href="layouts-center-menu.html">Center Menu</a>
                              </li>
                              <li>
                                  <a href="layouts-preloader.html">Preloader</a>
                              </li>
                              <li>
                                  <a href="layouts-normal-header.html">Unsticky Header</a>
                              </li>
                              <li>
                                  <a href="layouts-boxed.html">Boxed</a>
                              </li>
                          </ul>
                      </li>

                      <li class="has-submenu">
                          <a href="#"> <i class="remixicon-briefcase-5-line"></i>UI Elements <div class="arrow-down"></div></a>
                          <ul class="submenu megamenu">
                              <li>
                                  <ul>
                                      <li>
                                          <a href="ui-buttons.html">Buttons</a>
                                      </li>
                                      <li>
                                          <a href="ui-cards.html">Cards</a>
                                      </li>
                                      <li>
                                          <a href="ui-portlets.html">Portlets</a>
                                      </li>
                                      <li>
                                          <a href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                      </li>
                                      <li>
                                          <a href="ui-modals.html">Modals</a>
                                      </li>
                                      <li>
                                          <a href="ui-progress.html">Progress</a>
                                      </li>
                                  </ul>
                              </li>
                              <li>
                                  <ul>
                                      <li>
                                          <a href="ui-notifications.html">Notifications</a>
                                      </li>
                                      <li>
                                          <a href="ui-ribbons.html">Ribbons</a>
                                      </li>
                                      <li>
                                          <a href="ui-spinners.html">Spinners</a>
                                      </li>
                                      <li>
                                          <a href="ui-general.html">General UI</a>
                                      </li>
                                      <li>
                                          <a href="ui-typography.html">Typography</a>
                                      </li>
                                      <li>
                                          <a href="ui-grid.html">Grid</a>
                                      </li>
                                  </ul>
                              </li>
                  
                          </ul>
                      </li>

                      <li class="has-submenu">
                          <a href="#">
                              <i class="remixicon-honour-line"></i>Components <div class="arrow-down"></div>
                          </a>
                          <ul class="submenu">
                              <li class="has-submenu">
                                  <a href="#"><i class="fe-anchor mr-1"></i> Admin UI <div class="arrow-down"></div></a>
                                  <ul class="submenu">
                                      <li>
                                          <a href="admin-sweet-alert.html">Sweet Alert</a>
                                      </li>
                                      <li>
                                          <a href="admin-nestable.html">Nestable List</a>
                                      </li>
                                      <li>
                                          <a href="admin-treeview.html">Treeview</a>
                                      </li>
                                      <li>
                                          <a href="admin-range-slider.html">Range Slider</a>
                                      </li>
                                      <li>
                                          <a href="admin-carousel.html">Carousel</a>
                                      </li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="widgets.html"><i class="fe-aperture mr-1"></i> Widgets </a>
                              </li>
                              <li class="has-submenu">
                                  <a href="#"><i class="fe-bookmark mr-1"></i> Forms <div class="arrow-down"></div></a>
                                  <ul class="submenu">
                                      <li>
                                          <a href="forms-elements.html">General Elements</a>
                                      </li>
                                      <li>
                                          <a href="forms-advanced.html">Advanced</a>
                                      </li>
                                      <li>
                                          <a href="forms-validation.html">Validation</a>
                                      </li>
                                      <li>
                                          <a href="forms-pickers.html">Pickers</a>
                                      </li>
                                      <li>
                                          <a href="forms-wizard.html">Wizard</a>
                                      </li>
                                      <li>
                                          <a href="forms-summernote.html">Summernote</a>
                                      </li>
                                      <li>
                                          <a href="forms-quilljs.html">Quilljs Editor</a>
                                      </li>
                                      <li>
                                          <a href="forms-file-uploads.html">File Uploads</a>
                                      </li>
                                      <li>
                                          <a href="forms-x-editable.html">X Editable</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="has-submenu">
                                  <a href="#"><i class="fe-grid mr-1"></i> Tables <div class="arrow-down"></div></a>
                                  <ul class="submenu">
                                      <li>
                                          <a href="tables-basic.html">Basic Tables</a>
                                      </li>
                                      <li>
                                          <a href="tables-datatables.html">Data Tables</a>
                                      </li>
                                      <li>
                                          <a href="tables-editable.html">Editable Tables</a>
                                      </li>
                                      <li>
                                          <a href="tables-tablesaw.html">Tablesaw Tables</a>
                                      </li>
                                      <li>
                                          <a href="tables-responsive.html">Responsive Tables</a>
                                      </li>
                                      <li>
                                          <a href="tables-footables.html">FooTables</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="has-submenu">
                                  <a href="#"><i class="fe-bar-chart-2 mr-1"></i> Charts <div class="arrow-down"></div></a>
                                  <ul class="submenu">
                                      <li>
                                          <a href="charts-flot.html">Flot Charts</a>
                                      </li>
                                      <li>
                                          <a href="charts-apex.html">Apex Charts</a>
                                      </li>
                                      <li>
                                          <a href="charts-morris.html">Morris Charts</a>
                                      </li>
                                      <li>
                                          <a href="charts-chartjs.html">Chartjs Charts</a>
                                      </li>
                                      <li>
                                          <a href="charts-c3.html">C3 Charts</a>
                                      </li>
                                      <li>
                                          <a href="charts-peity.html">Peity Charts</a>
                                      </li>
                                      <li>
                                          <a href="charts-chartist.html">Chartist Charts</a>
                                      </li>
                                      <li>
                                          <a href="charts-sparklines.html">Sparklines Charts</a>
                                      </li>
                                      <li>
                                          <a href="charts-knob.html">Jquery Knob Charts</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="has-submenu">
                                  <a href="#"><i class="fe-cpu mr-1"></i> Icons <div class="arrow-down"></div></a>
                                  <ul class="submenu">
                                      <li>
                                          <a href="icons-remix.html">Remix Icons</a>
                                      </li>
                                      <li>
                                          <a href="icons-feather.html">Feather Icons</a>
                                      </li>
                                      <li>
                                          <a href="icons-mdi.html">Material Design Icons</a>
                                      </li>
                                      <li>
                                          <a href="icons-font-awesome.html">Font Awesome</a>
                                      </li>
                                      <li>
                                          <a href="icons-themify.html">Themify</a>
                                      </li>
                                      <li>
                                          <a href="icons-weather.html">Weather</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="has-submenu">
                                  <a href="#"><i class="fe-map mr-1"></i> Maps <div class="arrow-down"></div></a>
                                  <ul class="submenu">
                                      <li>
                                          <a href="maps-google.html">Google Maps</a>
                                      </li>
                                      <li>
                                          <a href="maps-vector.html">Vector Maps</a>
                                      </li>
                                      <li>
                                          <a href="maps-mapael.html">Mapael Maps</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>

                      <li class="has-submenu">
                          <a href="#"> <i class="remixicon-file-copy-2-line"></i>Pages <div class="arrow-down"></div></a>
                          <ul class="submenu megamenu">
                              <li>
                                  <ul>
                                      <li>
                                          <a href="pages-starter.html">Starter</a>
                                      </li>
                                      <li>
                                          <a href="pages-login.html">Log In</a>
                                      </li>
                                      <li>
                                          <a href="pages-register.html">Register</a>
                                      </li>
                                      <li>
                                          <a href="pages-recoverpw.html">Recover Password</a>
                                      </li>
                                      <li>
                                          <a href="pages-lock-screen.html">Lock Screen</a>
                                      </li>
                                  </ul>
                              </li>
                              <li>
                                  <ul>
                                      <li>
                                          <a href="pages-logout.html">Logout</a>
                                      </li>
                                      <li>
                                          <a href="pages-confirm-mail.html">Confirm Mail</a>
                                      </li>
                                      <li>
                                          <a href="pages-404.html">Error 404</a>
                                      </li>
                                      <li>
                                          <a href="pages-404-alt.html">Error 404-alt</a>
                                      </li>
                                      <li>
                                          <a href="pages-500.html">Error 500</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>

                      <li class="has-submenu">
                          <a href="#"> <i class="remixicon-pages-line"></i>Extra Pages <div class="arrow-down"></div></a>
                          <ul class="submenu megamenu">
                              <li>
                                  <ul>
                                      <li>
                                          <a href="extras-profile.html">Profile</a>
                                      </li>
                                      <li>
                                          <a href="extras-timeline.html">Timeline</a>
                                      </li>
                                      <li>
                                          <a href="extras-invoice.html">Invoice</a>
                                      </li>
                                      <li>
                                          <a href="extras-faqs.html">FAQs</a>
                                      </li>
                                      <li>
                                          <a href="extras-tour.html">Tour Page</a>
                                      </li>
                                  </ul>
                              </li>
                              <li>
                                  <ul>
                                      <li>
                                          <a href="extras-pricing.html">Pricing</a>
                                      </li>
                                      <li>
                                          <a href="extras-maintenance.html">Maintenance</a>
                                      </li>
                                      <li>
                                          <a href="extras-coming-soon.html">Coming Soon</a>
                                      </li>
                                      <li>
                                          <a href="extras-gallery.html">Gallery</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>

                  </ul>
                  <!-- End navigation menu -->

                  <div class="clearfix"></div>
              </div>
              <!-- end #navigation -->
          </div>
          <!-- end container -->
      </div>
      <!-- end navbar-custom -->

  </header>
  <!-- End Navigation Bar-->

  <!-- ============================================================== -->
  <!-- Start Page Content here -->
  <!-- ============================================================== -->

  <div class="wrapper">
      <div class="container-fluid">

      <?php $this->load->view("$class/$method"); ?>
          
      </div> <!-- end container -->
  </div>
  <!-- end wrapper -->

  <!-- ============================================================== -->
  <!-- End Page content -->
  <!-- ============================================================== -->

  <!-- Footer Start -->
  <footer class="footer">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-6">
                  2016 - 2019 &copy; Minton theme by <a href="#">Coderthemes</a> 
              </div>
              <div class="col-md-6">
                  <div class="text-md-right footer-links d-none d-sm-block">
                      <a href="javascript:void(0);">About Us</a>
                      <a href="javascript:void(0);">Help</a>
                      <a href="javascript:void(0);">Contact Us</a>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- end Footer -->

  <!-- Right Sidebar -->
  <div class="right-bar">
      <div class="rightbar-title">
          <a href="javascript:void(0);" class="right-bar-toggle float-right">
              <i class="fe-x noti-icon"></i>
          </a>
          <h4 class="m-0 text-white">Settings</h4>
      </div>
      <div class="slimscroll-menu">
          <!-- User box -->
          <div class="user-box">
              <div class="user-img">
                  <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                  <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
              </div>
      
              <h5><a href="javascript: void(0);">Nik G. Patel</a> </h5>
              <p class="text-muted mb-0"><small>Admin Head</small></p>
          </div>

          <ul class="nav nav-pills bg-light nav-justified">
              <li class="nav-item">
                  <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                      General
                  </a>
              </li>
              <li class="nav-item">
                  <a href="#messages1" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                      Chat
                  </a>
              </li>
          </ul>
          <div class="tab-content pl-3 pr-3">
              <div class="tab-pane" id="home1">
                  <div class="row mb-2">
                      <div class="col">
                          <h5 class="m-0 font-15">Notifications</h5>
                          <p class="text-muted"><small>Do you need them?</small></p>
                      </div> <!-- end col-->
                      <div class="col-auto">
                          <div class="custom-control custom-switch mb-2">
                              <input type="checkbox" class="custom-control-input" id="tabswitch1">
                              <label class="custom-control-label" for="tabswitch1"></label>
                          </div>
                      </div> <!-- end col -->
                  </div>
                  <!-- end row-->

                  <div class="row mb-2">
                      <div class="col">
                          <h5 class="m-0 font-15">API Access</h5>
                          <p class="text-muted"><small>Enable/Disable access</small></p>
                      </div> <!-- end col-->
                      <div class="col-auto">
                          <div class="custom-control custom-switch mb-2">
                              <input type="checkbox" class="custom-control-input" checked id="tabswitch2">
                              <label class="custom-control-label" for="tabswitch2"></label>
                          </div>
                      </div> <!-- end col -->
                  </div>
                  <!-- end row-->

                  <div class="row mb-2">
                      <div class="col">
                          <h5 class="m-0 font-15">Auto Updates</h5>
                          <p class="text-muted"><small>Keep up to date</small></p>
                      </div> <!-- end col-->
                      <div class="col-auto">
                          <div class="custom-control custom-switch mb-2">
                              <input type="checkbox" class="custom-control-input" id="tabswitch3">
                              <label class="custom-control-label" for="tabswitch3"></label>
                          </div>
                      </div> <!-- end col -->
                  </div>
                  <!-- end row-->

                  <div class="row mb-2">
                      <div class="col">
                          <h5 class="m-0 font-15">Online Status</h5>
                          <p class="text-muted"><small>Show your status to all</small></p>
                      </div> <!-- end col-->
                      <div class="col-auto">
                          <div class="custom-control custom-switch mb-2">
                              <input type="checkbox" class="custom-control-input" checked id="tabswitch4">
                              <label class="custom-control-label" for="tabswitch4"></label>
                          </div>
                      </div> <!-- end col -->
                  </div>
                  <!-- end row-->

                  <div class="alert alert-success alert-dismissible fade mt-3 show" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </button>
                      <h5 class="text-success">Unlimited Access</h5>
                      Upgrade to plan to get access to unlimited reports
                      <br/>
                      <a href="javascript: void(0);" class="btn btn-outline-success mt-3 btn-sm">Upgrade<i class="ml-1 mdi mdi-arrow-right"></i></a>
                  </div>
          
              </div>
              <div class="tab-pane show active" id="messages1">
                  <div>
                      <div class="inbox-widget">
                          <h5 class="mt-0">Recent</h5>
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""> <i class="online user-status"></i></div>
                              <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                              <p class="inbox-item-text">I've finished it! See you so...</p>
                          </div>
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""> <i class="away user-status"></i></div>
                              <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                              <p class="inbox-item-text">This theme is awesome!</p>
                          </div>
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""> <i class="online user-status"></i></div>
                              <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                              <p class="inbox-item-text">Nice to meet you</p>
                          </div>
  
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""> <i class="busy user-status"></i></div>
                              <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                              <p class="inbox-item-text">Hey! there I'm available...</p>
                          </div>
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="rounded-circle" alt=""> <i class="user-status"></i></div>
                              <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                              <p class="inbox-item-text">This theme is awesome!</p>
                          </div>

                          <hr/>
                          <h5>Favorite <span class="float-right badge badge-pill badge-danger">18</span></h5>
                          <hr/>
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/users/avatar-7.jpg" class="rounded-circle" alt=""> <i class="busy user-status"></i></div>
                              <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kennith</a></p>
                              <p class="inbox-item-text">I've finished it! See you so...</p>
                          </div>
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""> <i class="busy user-status"></i></div>
                              <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                              <p class="inbox-item-text">This theme is awesome!</p>
                          </div>
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/users/avatar-10.jpg" class="rounded-circle" alt=""> <i class="online user-status"></i></div>
                              <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kimberling</a></p>
                              <p class="inbox-item-text">Nice to meet you</p>
                          </div>
  
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""> <i class="user-status"></i></div>
                              <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                              <p class="inbox-item-text">Hey! there I'm available...</p>
                          </div>
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/users/avatar-9.jpg" class="rounded-circle" alt=""> <i class="away user-status"></i></div>
                              <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Leonareade</a></p>
                              <p class="inbox-item-text">This theme is awesome!</p>
                          </div>

                          <div class="text-center mt-2">
                              <a href="javascript:void(0);" class="text-muted"><i class="mdi mdi-spin mdi-loading mr-1"></i> Load more </a>
                          </div>

                      </div> <!-- end inbox-widget -->
                  </div> <!-- end .p-3-->
              </div>
          </div>

      </div> <!-- end slimscroll-menu-->
  </div>
  <!-- /Right-bar -->

<div class="rightbar-overlay"></div>
<script src="<?= base_url("assets/js/vendor.min.js")?>"></script>
<script src="<?= base_url("assets/libs/jquery-knob/jquery.knob.min.js")?>"></script>
<script src="<?= base_url("assets/libs/peity/jquery.peity.min.js")?>"></script>
<script src="<?= base_url("assets/libs/jquery-sparkline/jquery.sparkline.min.js")?>"></script>
<script src="<?= base_url("assets/libs/pnotify/pnotify.custom.js")?>"></script>


<script src="<?= base_url("assets/js/pages/dashboard-1.init.js")?>"></script>
<script src="<?= base_url("assets/js/app.min.js")?>"></script>
<script src="<?= base_url("assets/js/script.js")?>"></script>

</body>
</html>