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

  <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css")?>" />
  <link rel="stylesheet" href="<?= base_url("assets/css/icons.min.css")?>" />
  <link rel="stylesheet" href="<?= base_url("assets/libs/pnotify/pnotify.custom.css")?>" />
  <link rel="stylesheet" href="<?= base_url("assets/libs/select2/select2.min.css")?>" />

  <link rel="stylesheet" href="<?= base_url("assets/css/app.min.css")?>" />
  <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>" />
</head>
<body class="center-menu">

  <!-- Navigation Bar-->
  <header id="topnav">
    <?php if($this->session->tempdata('notify')): ?>
        <span id="notify"><?= $this->session->tempdata('notify'); ?></span>
    <?php endif; ?>

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

                  <li class="dropdown notification-list">
                      <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                          <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                          <span class="pro-user-name ml-1">
                              <?= $this->ion_auth->user()->row()->first_name; ?>
                                <i class="mdi mdi-chevron-down"></i> 
                          </span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="remixicon-account-circle-line"></i>
                              <span>Perfil</span>
                          </a>

                          <div class="dropdown-divider"></div>

                          <!-- item-->
                          <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item notify-item">
                              <i class="remixicon-logout-box-line"></i>
                              <span>Logout</span>
                          </a>

                      </div>
                  </li>            

              </ul>

              <!-- LOGO -->
              <div class="logo-box">
                  <a href="index.html" class="logo text-center">
                      <span class="logo-lg">
                          <img src="assets/images/logo-light.png" alt="" height="20">
                      </span>
                      <span class="logo-sm">
                          <img src="assets/images/logo-sm.png" alt="" height="24">
                      </span>
                  </a>
              </div>

              <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

                  <li class="dropdown dropdown-mega d-none d-lg-block">
                      <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                          Admin
                          <i class="mdi mdi-chevron-down"></i> 
                      </a>
                      <div class="dropdown-menu dropdown-megamenu">
                          <div class="row">
                              <div class="col-sm-8">
                      
                                  <div class="row">
                                      <div class="col-md-4">
                                          <h5 class="text-dark mt-0">Controle de acesso</h5>
                                          <ul class="list-unstyled megamenu-list">
                                              <li>
                                                  <a href="javascript:void(0);">Utilizadores</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Permissōes</a>
                                              </li>
                                          </ul>
                                      </div>

                                      <div class="col-md-4">
                                          <h5 class="text-dark mt-0">Configuraçōes</h5>
                                          <ul class="list-unstyled megamenu-list">
                                              <li>
                                                  <a href="javascript:void(0);">Paises</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Provincia</a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0);">Municipios</a>
                                              </li>
                                          </ul>
                                      </div>

                                      <div class="col-md-4">
                                          <h5 class="text-dark mt-0"> Title </h5>
                                          <ul class="list-unstyled megamenu-list">
                                              <li>
                                                  <a href="javascript:void(0);">item menu</a>
                                              </li>
                                          </ul>
                                      </div>
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
                                <i class="remixicon-dashboard-line"></i>Dashboard <div class="arrow-down"></div>
                            </a>
                      </li>

                      <li class="has-submenu">
                          <a href="#">
                              <i class="remixicon-stack-line"></i> Galeria <div class="arrow-down"></div>
                          </a>
                          <ul class="submenu">
                              <li>
                                  <a href="apps-kanbanboard.html"> Arquivos </a>
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