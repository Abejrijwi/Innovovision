<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Innovovision: Admin Panel</title>
    <!-- PACE-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/PACE/themes/blue/pace-theme-flash.css">
    <script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/PACE/pace.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/themify-icons/themify-icons.css">
    <!-- Malihu Scrollbar-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css">
    <!-- Animo.js-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/animo.js/animate-animo.min.css">
    <!-- Bootstrap Progressbar-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
    <!-- Toastr-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/toastr/toastr.min.css">
    
    <!-- DataTables-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-buttons-bs/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-colreorder-bs/css/colReorder.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-keytable-bs/css/keyTable.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-select-bs/css/select.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-responsive-bs/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-fixedcolumns-bs/css/fixedColumns.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/"); ?>build/css/second-layout.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://--> 
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-sidebar-color="sidebar-light" class="sidebar-light">
        <!-- Header start-->
        <header>

            <a href="<?= site_url('welcome') ?>" class="brand pull-left">
                <h2>UMEGA</h2></a><a href="javascript:;" role="button" class="hamburger-menu pull-left visible-xs"><span></span></a>

            <ul class="notification-bar list-inline pull-right">
                <li class="visible-xs"><a href="javascript:;" role="button" class="header-icon search-bar-toggle"><i class="ti-search"></i></a></li>
                <li class="visible-lg"><a href="javascript:;" role="button" class="header-icon fullscreen-toggle"><i class="ti-fullscreen"></i></a></li>
                <li class="dropdown"><a id="dropdownMenu1" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle bubble header-icon"><i class="ti-world"></i><span class="badge bg-danger"></span></a>
                    <div aria-labelledby="dropdownMenu1" class="dropdown-menu dropdown-menu-right dm-medium fs-12 animated fadeInDown">
                        <h5 class="dropdown-header">You have 6 notifications</h5>
                        <ul data-mcs-theme="minimal-dark" class="media-list mCustomScrollbar">
                            <li class="media"><a href="javascript:;">
                                    <div class="media-left avatar"><img src="../build/images/users/17.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">William Carlson</h6>
                                        <p class="text-muted mb-0">Commented on your post</p>
                                    </div>
                                    <div class="media-right text-nowrap">
                                        <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">5 mins</time>
                                    </div></a></li>
                            <li class="media"><a href="javascript:;">
                                    <div class="media-left avatar"><img src="../build/images/users/19.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Barbara Ortega</h6>
                                        <p class="text-muted mb-0">Sent you a new email</p>
                                    </div>
                                    <div class="media-right text-nowrap">
                                        <time datetime="2015-12-10T20:42:40+07:00" class="fs-11">8 mins</time>
                                    </div></a></li>
                            <li class="media"><a href="javascript:;">
                                    <div class="media-left avatar"><img src="../build/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Mark Barnett</h6>
                                        <p class="text-muted mb-0">Sent you a new message</p>
                                    </div>
                                    <div class="media-right text-nowrap">
                                        <time datetime="2015-12-10T20:50:48+07:00" class="fs-11">9 mins</time>
                                    </div></a></li>
                            <li class="media"><a href="javascript:;">
                                    <div class="media-left avatar"><img src="../build/images/users/11.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Alexander Gilbert</h6>
                                        <p class="text-muted mb-0">Sent you a new email</p>
                                    </div>
                                    <div class="media-right text-nowrap">
                                        <time datetime="2015-12-10T20:42:40+07:00" class="fs-11">15 mins</time>
                                    </div></a></li>
                            <li class="media"><a href="javascript:;">
                                    <div class="media-left avatar"><img src="../build/images/users/12.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Amanda Collins</h6>
                                        <p class="text-muted mb-0">You have 8 unread messages</p>
                                    </div>
                                    <div class="media-right text-nowrap">
                                        <time datetime="2015-12-10T20:35:35+07:00" class="fs-11">22 mins</time>
                                    </div></a></li>
                            <li class="media"><a href="javascript:;">
                                    <div class="media-left avatar"><img src="../build/images/users/13.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Christian Lane</h6>
                                        <p class="text-muted mb-0">Commented on your post</p>
                                    </div>
                                    <div class="media-right text-nowrap">
                                        <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">30 mins</time>
                                    </div></a></li>
                        </ul>
                        <div class="dropdown-footer text-center p-10"><a href="javascript:;" class="fw-500 text-muted">See all notifications</a></div>
                    </div>
                </li>
                <!--<li><a href="javascript:;" role="button" class="right-sidebar-toggle bubble header-icon"><i class="ti-layout-sidebar-right"></i><span class="dot bg-danger"></span></a></li>-->
                <li><a href="<?php echo site_url('login/signOut'); ?>" role="button" class="header-icon"><i class="ti-power-off"></i></a></li>
            </ul>
        </header>
        <!-- Header end-->
        <div class="main-container">
            <!-- Main Sidebar start-->
            <aside data-mcs-theme="minimal-dark" class="main-sidebar mCustomScrollbar">
                <div class="user">
                    <div id="esp-user-profile" data-percent="65" style="height: 104px; width: 104px; line-height: 80px; padding: 12px;" class="easy-pie-chart"><img src="<?php echo base_url("public/admin/assets/images/users/profile.jfif"); ?>" alt="" class="avatar img-circle"><span class="status bg-success"></span></div>
                    <h4 class="fs-14 text-muted mt-15 mb-5 fw-300"><?php echo $this->session->userdata('logged_in')['name']; ?></h4>
                    <p class="fs-13 mb-0 text-muted">Designer</p>
                </div>
                <ul class="list-unstyled navigation mb-0">
                    <li class="sidebar-header pt-0">Main</li>
                    
                    <li><a href="<?php echo site_url("welcome"); ?>" class="active bubble"><i class="ti-home"></i> Dashboard<span class="badge bg-danger"></span></a></li>
                    <li class="panel">
                        <a role="button" data-toggle="collapse" data-parent=".navigation" href="#users" aria-expanded="false" aria-controls="collapse2" class="collapsed">
                            <i class="ti-user"></i> Manage Users
                        </a>
                        <ul id="users" class="list-unstyled collapse">
                            <li><a href="<?php echo site_url('welcome/manage_users'); ?>">Manage Users</a></li>
                            <li><a href="<?php echo site_url('welcome/user'); ?>">Add User</a></li>
                        </ul>
                    </li>
                    <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="collapsed"><i class="ti-user"></i> My Account</a>
                        <ul id="collapse2" class="list-unstyled collapse">
                            <li><a href="<?php echo site_url('account'); ?>">Change Password</a></li>
                            <li><a href="<?php echo site_url('account/profile'); ?>">Profile</a></li>
                        </ul>
                    </li>
                    <li class="panel">
                        <a role="button" data-toggle="collapse" data-parent=".navigation" href="#services" aria-expanded="false" aria-controls="collapse2" class="collapsed">
                            <i class="ti-user"></i> Manage Services
                        </a>
                        <ul id="services" class="list-unstyled collapse">
                            <li><a href="<?php echo site_url('welcome/manage_services'); ?>">Manage Services</a></li>
                            <li><a href="<?php echo site_url('welcome/services'); ?>">Add Services</a></li>
                        </ul>
                    </li>
                    <!--<li><a href="<?php echo site_url("welcome/services"); ?>" class="bubble"><i class="ti-home"></i> Services<span class="badge bg-danger"></span></a></li>-->
                    <li><a href="<?php echo site_url("welcome/manage_contacts"); ?>" class="bubble"><i class="ti-mobile"></i> Manage Contacts<span class="badge bg-danger"></span></a></li>
                    <li><a href="<?php echo site_url("welcome/settings"); ?>" class="bubble"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
                    <li><a href="<?php echo base_url(); ?>" class="bubble" target="_blank"><i class="ti-world"></i> Website<span class="badge bg-danger"></span></a></li>
<!--                    <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse3" aria-expanded="false" aria-controls="collapse3" class="collapsed"><i class="ti-paint-bucket"></i> Color system</a>
    <ul id="collapse3" class="list-unstyled collapse">
        <li><a href="green-system.html">Green</a></li>
        <li><a href="blue-system.html">Blue</a></li>
        <li><a href="purple-system.html">Purple</a></li>
        <li><a href="red-system.html">Red</a></li>
        <li><a href="yellow-system.html">Yellow</a></li>
    </ul>
</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse4" aria-expanded="false" aria-controls="collapse4" class="collapsed"><i class="ti-brush-alt"></i> Skins</a>
    <ul id="collapse4" class="list-unstyled collapse">
        <li><a href="green-dashboard.html">Green</a></li>
        <li><a href="blue-dashboard.html">Blue</a></li>
        <li><a href="purple-dashboard.html">Purple</a></li>
        <li><a href="red-dashboard.html">Red</a></li>
        <li><a href="yellow-dashboard.html">Yellow</a></li>
    </ul>
</li>
<li class="sidebar-header">Components</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse5" aria-expanded="false" aria-controls="collapse5" class="collapsed"><i class="ti-receipt"></i> Basic</a>
    <ul id="collapse5" class="list-unstyled collapse">
        <li><a href="buttons.html">Buttons</a></li>
        <li><a href="carousels.html">Carousels</a></li>
        <li><a href="containers.html">Containers</a></li>
        <li><a href="dialogs.html">Dialogs</a></li>
        <li><a href="basic-inputs.html">Inputs</a></li>
        <li><a href="navigations.html">Navigations</a></li>
        <li><a href="progress-bars.html">Progress bars</a></li>
        <li><a href="typography.html">Typography</a></li>
    </ul>
</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse6" aria-expanded="false" aria-controls="collapse6" class="collapsed"><i class="ti-ruler-pencil"></i> Editors</a>
    <ul id="collapse6" class="list-unstyled collapse">
        <li><a href="summernote.html">Summernote</a></li>
        <li><a href="bootstrap-markdown.html">Bootstrap markdown</a></li>
        <li><a href="code-prettify.html">Code prettify</a></li>
        <li><a href="ckeditor.html">CKEditor</a></li>
    </ul>
</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse7" aria-expanded="false" aria-controls="collapse7" class="collapsed"><i class="ti-location-arrow"></i> Pickers</a>
    <ul id="collapse7" class="list-unstyled collapse">
        <li><a href="color-picker.html">Color picker</a></li>
        <li><a href="datetime-picker.html">Datetime picker</a></li>
        <li><a href="clock-picker.html">Clock picker</a></li>
        <li><a href="date-range-picker.html">Date range picker</a></li>
        <li><a href="multi-select.html">Multi select</a></li>
    </ul>
</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse8" aria-expanded="false" aria-controls="collapse8" class="collapsed"><i class="ti-layers-alt"></i> Forms</a>
    <ul id="collapse8" class="list-unstyled collapse">
        <li><a href="form-layouts.html">Layouts</a></li>
        <li><a href="jquery-validation.html">Validation</a></li>
        <li><a href="jquery-steps.html">Wizard</a></li>
        <li><a href="other-plugins.html">Other plugins</a></li>
    </ul>
</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse9" aria-expanded="false" aria-controls="collapse9" class="collapsed"><i class="ti-face-smile"></i> Icons</a>
    <ul id="collapse9" class="list-unstyled collapse">
        <li><a href="glyphicons.html">Glyphicons</a></li>
        <li><a href="font-awesome.html">Font awesome</a></li>
        <li><a href="material-design.html">Material design</a></li>
        <li><a href="themify.html">Themify</a></li>
    </ul>
</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse10" aria-expanded="false" aria-controls="collapse10" class="collapsed"><i class="ti-layout-grid2"></i> Tables</a>
    <ul id="collapse10" class="list-unstyled collapse">
        <li><a href="basic-tables.html">Basic tables</a></li>
        <li><a href="data-tables.html">Data tables</a></li>
        <li><a href="pricing-tables.html">Pricing tables</a></li>
    </ul>
</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse11" aria-expanded="false" aria-controls="collapse11" class="collapsed"><i class="ti-control-forward"></i> Animations</a>
    <ul id="collapse11" class="list-unstyled collapse">
        <li><a href="basic-animations.html">Basic</a></li>
        <li><a href="loading-animations.html">Loading</a></li>
    </ul>
</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse12" aria-expanded="false" aria-controls="collapse12" class="collapsed"><i class="ti-upload"></i> File uploads</a>
    <ul id="collapse12" class="list-unstyled collapse">
        <li><a href="dropzone-js.html">Dropzone</a></li>
        <li><a href="bootstrap-file-input.html">Bootstrap file input</a></li>
    </ul>
</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse13" aria-expanded="false" aria-controls="collapse13" class="collapsed"><i class="ti-info-alt"></i> Indicators</a>
    <ul id="collapse13" class="list-unstyled collapse">
        <li><a href="toastr.html">Toastr</a></li>
        <li><a href="sweet-alert.html">Sweet alert</a></li>
    </ul>
</li>
<li class="sidebar-header">Data visualization</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse14" aria-expanded="false" aria-controls="collapse14" class="collapsed"><i class="ti-bar-chart"></i> Charts</a>
    <ul id="collapse14" class="list-unstyled collapse">
        <li><a href="flot-charts.html">Flot charts</a></li>
        <li><a href="morris-charts.html">Morris charts</a></li>
        <li><a href="chart-js.html">Chart.js</a></li>
        <li><a href="other-charts.html">Other charts</a></li>
    </ul>
</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse15" aria-expanded="false" aria-controls="collapse15" class="collapsed"><i class="ti-location-pin"></i> Maps</a>
    <ul id="collapse15" class="list-unstyled collapse">
        <li><a href="vector-maps.html">Vector maps</a></li>
        <li><a href="google-maps.html">Google maps</a></li>
    </ul>
</li>
<li class="sidebar-header">Page kits</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse16" aria-expanded="false" aria-controls="collapse16" class="collapsed"><i class="ti-alert"></i> Error pages</a>
    <ul id="collapse16" class="list-unstyled collapse">
        <li><a href="400.html">400</a></li>
        <li><a href="401.html">401</a></li>
        <li><a href="403.html">403</a></li>
        <li><a href="404.html">404</a></li>
        <li><a href="500.html">500</a></li>
        <li><a href="503.html">503</a></li>
    </ul>
</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse17" aria-expanded="false" aria-controls="collapse17" class="collapsed"><i class="ti-user"></i> User pages</a>
    <ul id="collapse17" class="list-unstyled collapse">
        <li><a href="login.html">Login</a></li>
        <li><a href="register.html">Registration</a></li>
        <li><a href="forgot.html">Forgot password</a></li>
        <li><a href="lock-screen.html">Lock screen</a></li>
        <li><a href="profile.html">Profile</a></li>
    </ul>
</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse18" aria-expanded="false" aria-controls="collapse18" class="collapsed"><i class="ti-panel"></i> Apps</a>
    <ul id="collapse18" class="list-unstyled collapse">
        <li><a href="mailbox.html">Mailbox</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="image-cropper.html">Image cropper</a></li>
    </ul>
</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse19" aria-expanded="false" aria-controls="collapse19" class="collapsed"><i class="ti-blackboard"></i> Extra pages</a>
    <ul id="collapse19" class="list-unstyled collapse">
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="search-results.html">Search results</a></li>
        <li><a href="blank-template.html">Blank template</a></li>
    </ul>
</li>
<li class="sidebar-header">Help</li>
<li><a href="documentation.html"><i class="ti-help-alt"></i> Documentation</a></li>
<li class="sidebar-header">Menu Levels</li>
<li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse20" aria-expanded="false" aria-controls="collapse20" class="collapsed"><i class="ti-folder"></i> Menu levels</a>
    <ul id="collapse20" class="list-unstyled collapse">
        <li><a href="#">Menu level 2.1</a></li>
        <li class="panel"><a role="button" data-toggle="collapse" data-parent="#collapse20" href="#collapse22" aria-expanded="false" aria-controls="collapse22" class="collapsed">Menu level 2.2</a>
            <ul id="collapse22" class="list-unstyled collapse">
                <li><a href="#">Menu level 3.1</a></li>
                <li class="panel"><a role="button" data-toggle="collapse" data-parent="#collapse22" href="#collapse32" aria-expanded="false" aria-controls="collapse32" class="collapsed">Menu level 3.2</a>
                    <ul id="collapse32" class="list-unstyled collapse">
                        <li><a href="#">Menu level 4.1</a></li>
                        <li class="panel"><a role="button" data-toggle="collapse" data-parent="#collapse32" href="#collapse42" aria-expanded="false" aria-controls="collapse42" class="collapsed">Menu level 4.2</a>
                            <ul id="collapse42" class="list-unstyled collapse">
                                <li><a href="#">Menu level 5.1</a></li>
                                <li><a href="#">Menu level 5.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</li>-->
                </ul>


            </aside>
