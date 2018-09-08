<?php
session_start();

if(!isset($_SESSION['fulfill_email'])){

echo "<script>window.open('index.php','_self')</script>";

}

else {

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/pace.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Add Products</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script data-pace-options='{ "ajax": false, "selectors": [ "img" ]}' src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
</head>

<body class="sidebar-dark sidebar-expand navbar-brand-dark header-light">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        <nav class="navbar">
            <!-- Logo Area -->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">
                    <img class="logo-expand" alt="" src="assets/img/logo-dark.png">
                    <img class="logo-collapse" alt="" src="assets/img/logo-collapse.png">
                    <!-- <p>BonVue</p> -->
                </a>
            </div>
            <!-- /.navbar-header -->
            <!-- Left Menu & Sidebar Toggle -->
            <ul class="nav navbar-nav">
                <li class="sidebar-toggle dropdown"><a href="javascript:void(0)" class="ripple"><i class="feather feather-menu list-icon fs-20"></i></a>
                </li>
            </ul>
            <!-- /.navbar-left -->
            <!-- Search Form -->
            <form class="navbar-search d-none d-sm-block" role="search"><i class="feather feather-search list-icon"></i> 
                <input type="search" class="search-query" placeholder="Search anything..."> <a href="javascript:void(0);" class="remove-focus"><i class="feather feather-x"></i></a>
            </form>
            <!-- /.navbar-search -->
            <div class="spacer"></div>
            <!-- Right Menu -->
            <ul class="nav navbar-nav d-none d-lg-flex ml-2 ml-0-rtl">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="feather feather-bell list-icon"></i> <span class="button-pulse bg-danger"></span></a>
                    <div class="dropdown-menu dropdown-left dropdown-card animated flipInY">
                        <div class="card">
                            <header class="card-header d-flex justify-content-between mb-0"><a href="javascript:void(0);"><i class="feather feather-bell color-primary" aria-hidden="true"></i></a>  <span class="heading-font-family flex-1 text-center fw-400">Notifications</span>  <a href="javascript:void(0);"><i class="feather feather-settings color-content"></i></a>
                            </header>
                            <ul class="card-body list-unstyled dropdown-list-group">
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="heading-font-family media-heading">Invitation accepted</span> <span class="media-content">Your have been Invited ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex thumb-xs user--online"><img src="assets/demo/users/user3.jpg" class="rounded-circle" alt=""> </span><span class="media-body"><span class="heading-font-family media-heading">Steve Smith</span> <span class="media-content">I slowly updated projects</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">event_available</i> </span><span class="media-body"><span class="-heading-font-family media-heading">To Do</span> <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span></span></a>
                                </li>
                            </ul>
                            <!-- /.dropdown-list-group -->
                            <footer class="card-footer text-center"><a href="javascript:void(0);" class="headings-font-family text-uppercase fs-13">See all activity</a>
                            </footer>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li><a href="javascript:void(0);" class="right-sidebar-toggle"><i class="feather feather-settings list-icon"></i></a>
                </li>
            </ul>
            <!-- /.navbar-right -->
            <!-- User Image with Dropdown -->
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle dropdown-toggle-user ripple" data-toggle="dropdown"><span class="avatar thumb-xs2"><img src="assets/demo/users/user1.jpg" class="rounded-circle" alt=""> <i class="feather feather-chevron-down list-icon"></i></span></a>
                    <div
                    class="dropdown-menu dropdown-left dropdown-card dropdown-card-profile animated flipInY">
                        <div class="card">
                            <header class="card-header d-flex mb-0"><a href="javascript:void(0);" class="col-md-4 text-center"><i class="feather feather-user-plus align-middle"></i> </a><a href="javascript:void(0);" class="col-md-4 text-center"><i class="feather feather-settings align-middle"></i> </a>
                                <a
                                href="javascript:void(0);" class="col-md-4 text-center"><i class="feather feather-power align-middle"></i>
                                    </a>
                            </header>
                            <ul class="list-unstyled card-body">
                                <li><a href="#"><span><span class="align-middle">Manage Accounts</span></span></a>
                                </li>
                                <li><a href="#"><span><span class="align-middle">Change Password</span></span></a>
                                </li>
                                <li><a href="#"><span><span class="align-middle">Check Inbox</span></span></a>
                                </li>
                                <li><a href="#"><span><span class="align-middle">Sign Out</span></span></a>
                                </li>
                            </ul>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
    </div>
    <!-- /.dropdown-card-profile -->
    </li>
    <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-nav -->
    </nav>
    <!-- /.navbar -->
    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
            <!-- User Details -->
            <div class="side-user d-none">
                <div class="col-sm-12 text-center p-0 clearfix">
                    <div class="d-inline-block pos-relative mr-b-10">
                        <figure class="thumb-sm mr-b-0 user--online">
                            <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                        </figure><a href="page-profile.html" class="text-muted side-user-link"><i class="feather feather-settings list-icon"></i></a>
                    </div>
                    <!-- /.d-inline-block -->
                    <div class="lh-14 mr-t-5"><a href="page-profile.html" class="hide-menu mt-3 mb-0 side-user-heading fw-500">Scott Adams</a>
                        <br><small class="hide-menu">Developer</small>
                    </div>
                </div>
                <!-- /.col-sm-12 -->
            </div>
            <!-- /.side-user -->
            <!-- Call to Action -->
            <div class="side-content mr-t-30 mr-lr-15"><a class="btn btn-block btn-success ripple fw-600" href="#"><i class="fa fa-plus-square-o mr-1 mr-0-rtl ml-1-rtl"></i> New Project</a>
            </div>
            <!-- Sidebar Menu -->
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    <li class="current-page menu-item-has-children"><a href="index.html"><i class="list-icon feather feather-command"></i> <span class="hide-menu">Dashboard</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../fulfillment_team/index.html">fulfillment_team</a>
                            </li>
                            <li><a href="../collapsed-light/index.html">Collapsed Light</a>
                            </li>
                            <li><a href="../dark/index.html">Dark</a>
                            </li>
                            <li><a href="../horizontal-nav-icons/index.html">Horizontal Nav</a>
                            </li>
                            <li><a href="../rtl/index.html">RTL Demo</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children active"><a href="javascript:void(0);"><i class="list-icon feather feather-briefcase"></i> <span class="hide-menu">Apps <span class="badge bg-primary">6</span></span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../fulfillment_team/app-calender.html">Calender</a>
                            </li>
                            <li><a href="../fulfillment_team/app-chat.html">Chat</a>
                            </li>
                            <li><a href="../fulfillment_team/app-inbox.html">Inbox</a>
                            </li>
                            <li><a href="../fulfillment_team/app-contacts.html">Contacts</a>
                            </li>
                            <li><a href="../fulfillment_team/app-products.html">Products</a>
                            </li>
                            <li><a href="../fulfillment_team/app-blog.html">Blog</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-user"></i> <span class="hide-menu">Profile Pages</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../fulfillment_team/page-profile.html">Profile</a>
                            </li>
                            <li><a href="../fulfillment_team/page-login.html">Login Page</a>
                            </li>
                            <li><a href="../fulfillment_team/page-login2.html">Login Page 2</a>
                            </li>
                            <li><a href="../fulfillment_team/page-register.html">Sign Up</a>
                            </li>
                            <li><a href="../fulfillment_team/page-register2.html">Sign Up 2</a>
                            </li>
                            <li><a href="../fulfillment_team/page-register-3-step.html">3 Step Sign Up</a>
                            </li>
                            <li><a href="../fulfillment_team/page-forgot-pwd.html">Forgot Password</a>
                            </li>
                            <li><a href="../fulfillment_team/page-email-confirm.html">Confirm Email</a>
                            </li>
                            <li><a href="../fulfillment_team/page-lock-screen.html">Lock Screen</a>
                            </li>
                            <li><a href="../fulfillment_team/page-timeline.html">Timeline</a>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Error Pages</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="../fulfillment_team/page-error-403.html">Error 403</a>
                                    </li>
                                    <li><a href="../fulfillment_team/page-error-404.html">Error 404</a>
                                    </li>
                                    <li><a href="../fulfillment_team/page-error-500.html">Error 500</a>
                                    </li>
                                    <li><a href="../fulfillment_team/page-error-503.html">Error 503</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-folder"></i> <span class="hide-menu">Sample Pages</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="page-blank.html">Blank Page</a>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Email Templates</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="../fulfillment_team/email-templates/basic.html">Basic</a>
                                    </li>
                                    <li><a href="../fulfillment_team/email-templates/billing.html">Billing</a>
                                    </li>
                                    <li><a href="../fulfillment_team/email-templates/friend-request.html">Friend Request</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Maps</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="../fulfillment_team/maps-google.html">Google Maps</a>
                                    </li>
                                    <li><a href="../fulfillment_team/maps-vector.html">Vector Maps</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="../fulfillment_team/page-lightbox.html">Lightbox Popup</a>
                            </li>
                            <li><a href="../fulfillment_team/page-sitemap.html">Sitemap</a>
                            </li>
                            <li><a href="../fulfillment_team/page-search-results.html">Search Results</a>
                            </li>
                            <li><a href="../fulfillment_team/page-custom-scroll.html">Custom Scroll</a>
                            </li>
                            <li><a href="../fulfillment_team/page-utility-classes.html">Utility Classes</a>
                            </li>
                            <li><a href="../fulfillment_team/page-animations.html">Animations</a>
                            </li>
                            <li><a href="../fulfillment_team/page-faq.html">FAQ</a>
                            </li>
                            <li><a href="../fulfillment_team/page-pricing-table.html">Pricing</a>
                            </li>
                            <li><a href="../fulfillment_team/page-invoice.html">Invoice</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-feather"></i> <span class="hide-menu">UI Elements <span class="badge bg-info">7</span></span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../fulfillment_team/ui-typography.html">Typography</a>
                            </li>
                            <li><a href="../fulfillment_team/ui-buttons.html">Buttons</a>
                            </li>
                            <li><a href="../fulfillment_team/ui-cards.html">Cards</a>
                            </li>
                            <li><a href="../fulfillment_team/ui-tabs.html">Tabs</a>
                            </li>
                            <li><a href="../fulfillment_team/ui-accordions.html">Accordions</a>
                            </li>
                            <li><a href="../fulfillment_team/ui-modals.html">Modals</a>
                            </li>
                            <li><a href="../fulfillment_team/ui-icon-boxes.html">Icon Boxes</a>
                            </li>
                            <li><a href="../fulfillment_team/ui-lists.html">Lists &amp; Media Object</a>
                            </li>
                            <li><a href="../fulfillment_team/ui-grid.html">Grid</a>
                            </li>
                            <li><a href="../fulfillment_team/ui-progress.html">Progress Bars</a>
                            </li>
                            <li><a href="../fulfillment_team/ui-notifications.html">Notifications &amp; Alerts</a>
                            </li>
                            <li><a href="../fulfillment_team/ui-pagination.html">Pagination</a>
                            </li>
                            <li><a href="../fulfillment_team/ui-media.html">Media</a>
                            </li>
                            <li><a href="../fulfillment_team/ui-carousel.html">Carousel</a>
                            </li>
                            <li><a href="../fulfillment_team/ui-bootstrap.html">Bootstrap Elements</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-layout"></i> <span class="hide-menu">Forms</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../fulfillment_team/form-elements.html">Elements</a>
                            </li>
                            <li><a href="../fulfillment_team/form-material.html">Material Design</a>
                            </li>
                            <li><a href="../fulfillment_team/form-validation.html">Form Validation</a>
                            </li>
                            <li><a href="../fulfillment_team/form-dropzone.html">File Upload</a>
                            </li>
                            <li><a href="../fulfillment_team/form-pickers.html">Picker</a>
                            </li>
                            <li><a href="../fulfillment_team/form-select.html">Select and Multiselect</a>
                            </li>
                            <li><a href="../fulfillment_team/form-tags-categories.html">Tags and Categories</a>
                            </li>
                            <li><a href="../fulfillment_team/form-addons.html">Addons</a>
                            </li>
                            <li><a href="../fulfillment_team/form-editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-clipboard"></i> <span class="hide-menu">Tables</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../fulfillment_team/tables-basic.html">Basic Tables</a>
                            </li>
                            <li><a href="../fulfillment_team/tables-data-table.html">Data Table</a>
                            </li>
                            <li><a href="../fulfillment_team/tables-bootstrap.html">Bootstrap Tables</a>
                            </li>
                            <li><a href="../fulfillment_team/tables-responsive.html">Responsive Tables</a>
                            </li>
                            <li><a href="../fulfillment_team/tables-editable.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-pie-chart"></i> <span class="hide-menu">Charts</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../fulfillment_team/charts-flot.html">Flot Charts</a>
                            </li>
                            <li><a href="../fulfillment_team/charts-morris.html">Morris Charts</a>
                            </li>
                            <li><a href="../fulfillment_team/charts-js.html">Chart-js</a>
                            </li>
                            <li><a href="../fulfillment_team/charts-sparkline.html">Sparkline Charts</a>
                            </li>
                            <li><a href="../fulfillment_team/charts-knob.html">Knob Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-heart"></i> <span class="hide-menu">Icons</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../fulfillment_team/icons-material-design.html">Material Design</a>
                            </li>
                            <li><a href="../fulfillment_team/icons-font-awesome.html">Font Awesome</a>
                            </li>
                            <li><a href="../fulfillment_team/icons-mono-social.html">Social Icons</a>
                            </li>
                            <li><a href="../fulfillment_team/icons-weather.html">Weather Icons</a>
                            </li>
                            <li><a href="../fulfillment_team/icons-linea.html">Linea Icons</a>
                            </li>
                            <li><a href="../fulfillment_team/icons-feather.html">Feather Icons</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>
        <!-- /.site-sidebar -->
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Add Products</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">title,description,price,etc</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Form Elements</li>
                    </ol>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                <div class="row">  
                    <!-- /.widget-holder -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Vertical Form</h5>
                                <p class="text-muted">All bootstrap element classies</p>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="l30">Product Title</label>
                                                <input class="form-control" id="l30" placeholder="Email Address" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="l30">Product URL</label>
                                                <input class="form-control" id="l30" placeholder="Email Address" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label class="form-control-label">Product Category</label>
                                            <select class="m-b-10 form-control" data-placeholder="Choose" data-toggle="select2">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="l31">Password</label>
                                                <div class="input-group">
                                                    <input class="form-control" id="l31" placeholder="Password" type="password"> <span class="input-group-addon"><i class="material-icons list-icon">lock</i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="l32">Left Icon</label>
                                                <div class="form-input-icon"><i class="material-icons list-icon">face</i> 
                                                    <input class="form-control" id="l32" placeholder="Left icon" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="l33">Right Icon</label>
                                                <div class="form-input-icon form-input-icon-right"><i class="material-icons list-icon">file_download</i> 
                                                    <input class="form-control" id="l33" placeholder="Right icon" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="l34">Input with Icon</label>
                                                <div class="input-group"><span class="input-group-addon"><i class="material-icons list-icon">search</i> </span>
                                                    <input class="input-error form-control" id="l34" type="text" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="l36">Disabled</label>
                                                <input class="form-control" disabled="" id="l36" placeholder="Disabled" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="l37">Readonly</label>
                                                <input class="form-control" id="l37" placeholder="Readonly" readonly="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="l38">Textarea</label>
                                        <textarea class="form-control" id="l38" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="l39">File input</label>
                                        <br>
                                        <input id="l39" type="file">
                                        <br><small class="text-muted">Technical information for user</small>
                                    </div>
                                    <div class="form-actions btn-list">
                                        <button class="btn btn-primary" type="button">Submit</button>
                                        <button class="btn btn-outline-fulfillment_team" type="button">Cancel</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Rounded Inputs</h5>
                                <p class="text-muted">Use class <code>.form-control-rounded</code>
                                </p>
                                <div class="row mr-b-50">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label" for="l81">Rounded Input</label>
                                            <input class="form-control form-control-rounded" id="l81" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label" for="l82">Disabled Rounded Input</label>
                                        <input class="form-control form-control-rounded" disabled="" id="l82" placeholder="Password" type="password">
                                    </div>
                                </div>
                                <h5 class="box-title mr-b-0">Input States</h5>
                                <p class="text-muted">Use class <code>.is-valid</code>  <code>.is-invalid</code>  <code>.invalid-feedback</code>
                                </p>
                                <div class="row mr-b-50">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer01">First name</label>
                                        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer02">Last name</label>
                                        <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer03">City</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationServer04">State</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                                        <div class="invalid-feedback">Please provide a valid state.</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationServer05">Zip</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                </div>
                                <h5 class="box-title mr-b-0">Inline Form</h5>
                                <form class="form-inline">
                                    <div class="form-group mr-2">
                                        <label class="sr-only" for="exampleInputAmount">Amount</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">$</div>
                                            <input class="form-control" id="exampleInputAmount" placeholder="Amount" type="text">
                                            <div class="input-group-addon">.00</div>
                                        </div>
                                    </div><a class="btn btn-primary" href="javascript: void(0);">Transfer cash</a>
                                </form>
                                <h5 class="box-title mr-t-50">Column Sizing</h5>
                                <form class="mr-b-30">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input class="form-control" placeholder=".col-md-2" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input class="form-control" placeholder=".col-md-3" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input class="form-control" placeholder=".col-md-4" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input class="form-control" placeholder=".col-md-2" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Vertical Forms With Left Icons</h5>
                                <p class="text-muted">Basic Form with left icons</p>
                                <form action="javascript:void(0)">
                                    <div class="form-group mr-t-30">
                                        <label for="sample1UserName">User Name</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="material-icons">person</i>
                                            </div>
                                            <input type="text" class="form-control" id="sample1UserName" placeholder="User Name">
                                        </div>
                                        <!-- /.input-group -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="sample1Password">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="material-icons">lock</i>
                                            </div>
                                            <input type="password" class="form-control" id="sample1Password" placeholder="Password">
                                        </div>
                                        <!-- /.input-group -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group mb-3">
                                        <div class="checkbox checkbox-primary">
                                            <label>
                                                <input type="checkbox" id="sample1Checkbox"> <span class="label-text">Remember me</span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-actions">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12 btn-list">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-fulfillment_team">Cancel</button>
                                                </div>
                                                <!-- /.col-sm-12 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.form-group -->
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Vertical Forms With Right Icons</h5>
                                <p class="text-muted">Basic Forms with right icons</p>
                                <form action="javascript:void(0)" class="mr-t-30">
                                    <div class="form-group">
                                        <label for="sample2UserName">User Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="sample2UserName" placeholder="User Name">
                                            <div class="input-group-addon"><i class="material-icons">person</i>
                                            </div>
                                        </div>
                                        <!-- /.input-group -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="sample2Password">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="sample2Password" placeholder="Password">
                                            <div class="input-group-addon"><i class="material-icons">lock</i>
                                            </div>
                                        </div>
                                        <!-- /.input-group -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group mb-3">
                                        <div class="checkbox checkbox-primary">
                                            <label>
                                                <input type="checkbox" id="sample2checkbox"> <span class="label-text">Remember me</span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-actions">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12 btn-list">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-fulfillment_team">Cancel</button>
                                                </div>
                                                <!-- /.col-sm-12 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.form-actions -->
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Horizontal form with left icons</h5>
                                <p class="text-muted">Use Bootstrap's predefined classes horizontal form</p>
                                <form class="mr-t-30" action="javascript:void(0)">
                                    <div class="form-group row">
                                        <label for="sample3UserName" class="text-sm-right col-sm-3 col-form-label">User Name</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="material-icons">person</i>
                                                </div>
                                                <input type="text" class="form-control" id="sample3UserName" placeholder="User Name">
                                            </div>
                                            <!-- /.input-group -->
                                        </div>
                                        <!-- /.col-sm-9 -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group row">
                                        <label for="sample3Password" class="text-sm-right col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="material-icons">lock</i>
                                                </div>
                                                <input type="password" class="form-control" id="sample3Password" placeholder="Password">
                                            </div>
                                            <!-- /.input-group -->
                                        </div>
                                        <!-- /.col-sm-9 -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group mb-3 mr-4">
                                        <div class="col-sm-9 ml-auto">
                                            <div class="checkbox checkbox-primary">
                                                <label>
                                                    <input type="checkbox" id="sample3checkbox"> <span class="label-text">Remember me</span>
                                                </label>
                                            </div>
                                            <!-- /.checkbox -->
                                        </div>
                                        <!-- /.col-sm-9 -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-actions">
                                        <div class="form-group row">
                                            <div class="col-sm-9 ml-auto btn-list">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="button" class="btn btn-fulfillment_team">Cancel</button>
                                            </div>
                                            <!-- /.col-sm-12 -->
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.form-actions -->
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Horizontal Form with right icons</h5>
                                <p class="text-muted">Use Bootstrap's predefined classes horizontal form</p>
                                <form class="mr-t-30" action="javascript:void(0)">
                                    <div class="form-group row">
                                        <label for="sample4UserName" class="text-sm-right col-sm-3 col-form-label">User Name</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="sample4UserName" placeholder="User Name">
                                                <div class="input-group-addon"><i class="material-icons">person</i>
                                                </div>
                                            </div>
                                            <!-- /.input-group -->
                                        </div>
                                        <!-- /.col-sm-9 -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group row">
                                        <label for="sample4Password" class="text-sm-right col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="sample4Password" placeholder="Password">
                                                <div class="input-group-addon"><i class="material-icons">lock</i>
                                                </div>
                                            </div>
                                            <!-- /.input-group -->
                                        </div>
                                        <!-- /.col-sm-9 -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group mb-3 mr-4">
                                        <div class="col-sm-9 ml-auto">
                                            <div class="checkbox checkbox-primary">
                                                <label>
                                                    <input type="checkbox" id="sample4checkbox"> <span class="label-text">Remember me</span>
                                                </label>
                                            </div>
                                            <!-- /.checkbox -->
                                        </div>
                                        <!-- /.col-sm-9 -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-actions">
                                        <div class="form-group row">
                                            <div class="col-sm-9 ml-auto btn-list">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="button" class="btn btn-fulfillment_team">Cancel</button>
                                            </div>
                                            <!-- /.col-sm-12 -->
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.form-actions -->
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.widget-list -->
        </main>
        <!-- /.main-wrapper -->
        <!-- RIGHT SIDEBAR -->
        <aside class="right-sidebar scrollbar-enabled suppress-x">
            <div class="sidebar-chat" data-plugin="chat-sidebar">
                <div class="sidebar-chat-info">
                    <h6 class="fs-16">Chat List</h6>
                    <form class="mr-t-10">
                        <div class="form-group">
                            <input type="search" class="form-control form-control-rounded fs-13 heading-font-family pd-r-30" placeholder="Search for friends ..."> <i class="feather feather-search post-absolute pos-right vertical-center mr-3 text-muted"></i>
                        </div>
                    </form>
                </div>
                <div class="chat-list">
                    <div class="list-group row">
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Julein Renvoye">
                            <figure class="thumb-xs user--online mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user2.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Gene Newman</span>  <span class="username">@gene_newman</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Eddie Lebanovkiy">
                            <figure class="thumb-xs user--online mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user3.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Billy Black</span>  <span class="username">@billyblack</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Cameron Moll">
                            <figure class="thumb-xs user--online mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user5.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Herbert Diaz</span>  <span class="username">@herbert</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Bill S Kenny">
                            <figure class="user--busy thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user4.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Sylvia Harvey</span>  <span class="username">@sylvia</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Trent Walton">
                            <figure class="user--busy thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user6.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Marsha Hoffman</span>  <span class="username">@m_hoffman</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Julien Renvoye">
                            <figure class="user--offline thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user7.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Mason Grant</span>  <span class="username">@masongrant</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Eddie Lebaovskiy">
                            <figure class="user--offline thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user8.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Shelly Sullivan</span>  <span class="username">@shelly</span></span>
                        </a>
                    </div>
                    <!-- /.list-group -->
                </div>
                <!-- /.chat-list -->
            </div>
            <!-- /.sidebar-chat -->
        </aside>
        <!-- CHAT PANEL -->
        <div class="chat-panel" hidden>
            <div class="card">
                <div class="card-header d-flex justify-content-between"><a href="javascript:void(0);"><i class="feather feather-message-square text-success"></i></a>  <span class="user-name heading-font-family fw-400">John Doe</span> 
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="widget-chat-activity flex-1">
                        <div class="messages scrollbar-enabled suppress-x">
                            <div class="message media reply">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="assets/demo/users/user3.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Epic Cheeseburgers come in all kind of styles.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Cheeseburgers make your knees weak.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media reply">
                                <figure class="thumb-xs2 user--offline">
                                    <a href="#">
                                        <img src="assets/demo/users/user5.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Cheeseburgers will never let you down.</p>
                                    <p>They'll also never run around or desert you.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>A great cheeseburger is a gastronomical event.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media reply">
                                <figure class="thumb-xs2 user--busy">
                                    <a href="#">
                                        <img src="assets/demo/users/user6.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>There's a cheesy incarnation waiting for you no matter what you palete preferences are.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>If you are a vegan, we are sorry for you loss.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                        </div>
                        <!-- /.messages -->
                    </div>
                    <!-- /.widget-chat-acitvity -->
                </div>
                <!-- /.card-body -->
                <form action="javascript:void(0)" class="card-footer" method="post">
                    <div class="d-flex justify-content-end"><i class="feather feather-plus-circle list-icon my-1 mr-3"></i>
                        <textarea class="border-0 flex-1" rows="1" style="resize: none" placeholder="Type your message here"></textarea>
                        <button class="btn btn-sm btn-circle bg-transparent" type="submit"><i class="feather feather-arrow-right list-icon fs-26 text-success"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.chat-panel -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    <footer class="footer"><span class="heading-font-family">Copyright @ 2017. All rights reserved WiseOwl Admin by Unifato</span>
    </footer>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>

<?php } ?>