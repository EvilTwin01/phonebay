<?php
session_start();

include("./includes/side-menu.php");

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('index.php','_self')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Buttons</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Buttons</li>
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
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Default Buttons</h5>
                                <p class="text-muted">Use classes <code>btn btn-default</code>to quickly create a General button.</p>
                                <div class="row mr-b-50">
                                    <div class="col-lg-3 col-sm-6 col-12 mr-b-20">
                                        <button class="btn btn-block btn-default ripple">Default</button>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12 mr-b-20">
                                        <button class="btn btn-block btn-primary ripple">Primary</button>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12 mr-b-20">
                                        <button class="btn btn-block btn-rounded btn-warning ripple">Warning</button>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12 mr-b-20">
                                        <button class="btn btn-block btn-rounded btn-info ripple" disabled="disabled">Disabled</button>
                                    </div>
                                </div>
                                <h5 class="box-title mr-b-0">Outline Buttons</h5>
                                <p class="text-muted">Use classes <code>btn btn-ouline-default btn-rounded</code>to quickly create a Rounded button.</p>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-12 mr-b-20">
                                        <button class="btn btn-block btn-outline-default ripple">Default</button>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12 mr-b-20">
                                        <button class="btn btn-block btn-outline-primary ripple">Primary</button>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12 mr-b-20">
                                        <button class="btn btn-block btn-rounded btn-outline-warning ripple">Warning</button>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12 mr-b-20">
                                        <button class="btn btn-block btn-rounded btn-outline-info ripple" disabled="disabled">Disabled</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Button Sizes</h5>
                                <p class="text-muted">Use any of the following classes: <code>btn-lg btn-sm btn-xs</code>
                                </p>
                                <div class="btn-list mr-b-50">
                                    <button class="btn btn-lg btn-outline-default ripple">Large Button</button>
                                    <button class="btn btn-outline-default ripple">Default</button>
                                    <button class="btn btn-sm btn-outline-default ripple">Small</button>
                                    <button class="btn btn-xs btn-outline-default ripple">Mini Button</button>
                                </div>
                                <h5 class="box-title mr-b-0">Block Button</h5>
                                <p class="text-muted">Use class <code>btn-block</code> to make a buttton take all of the block space.</p>
                                <div class="mr-b-20">
                                    <button class="btn btn-block btn-lg btn-outline-default ripple">Block Button</button>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Buttons with Icons</h5>
                                <p class="text-muted">Just add icon in i tag and text in span</p>
                                <div class="btn-list mr-b-20">
                                    <button class="btn btn-outline-default ripple"><i class="material-icons list-icon">favorite</i>  <span>Default</span>
                                    </button>
                                    <button class="btn btn-primary btn-rounded ripple"><i class="material-icons list-icon">star</i>  <span>Primary</span>
                                    </button>
                                    <button class="btn btn-success btn-rounded ripple"><i class="material-icons list-icon">check</i>  <span>Success</span>
                                    </button>
                                    <button class="btn btn-info ripple"><i class="material-icons list-icon">mail_outline</i>  <span>Info</span>
                                    </button>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Button Dropdowns & Dropups</h5>
                                <p class="text-muted">Just add icon in i tag and text in span</p>
                                <div class="btn-list mr-b-20">
                                    <div class="btn-group m-r-10">
                                        <div class="dropdown">
                                            <button aria-expanded="false" data-toggle="dropdown" class="btn btn-pink dropdown-toggle ripple" type="button">Dropdown <span class="caret"></span>
                                            </button>
                                            <div role="menu" class="dropdown-menu"><a class="dropdown-item" href="#"><strong>Action</strong></a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><strong>Separated link</strong></a>
                                            </div>
                                            <!-- /.dropdown-menu -->
                                        </div>
                                        <!-- /.dropdown -->
                                    </div>
                                    <!-- /.btn-group -->
                                    <div class="btn-group m-r-10">
                                        <div class="dropdown">
                                            <button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary dropdown-toggle ripple" type="button">Dropup FadeUp <span class="caret"></span>
                                            </button>
                                            <div role="menu" class="dropdown-menu animated slideInRight"><a class="dropdown-item" href="#"><strong>Action</strong></a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><strong>Separated link</strong></a>
                                            </div>
                                            <!-- /.dropdown-menu -->
                                        </div>
                                        <!-- /.dropdown -->
                                    </div>
                                    <!-- /.btn-group -->
                                    <div class="btn-group m-r-10">
                                        <button aria-expanded="false" data-toggle="dropdown" class="btn btn-outline-red dropdown-toggle ripple" type="button"><i class="material-icons list-icon">favorite</i>  <span class="caret"></span>
                                        </button>
                                        <div role="menu" class="dropdown-menu"><a class="dropdown-item" href="#"><strong>Action</strong></a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><strong>Separated link</strong></a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropup m-r-10">
                                        <button aria-expanded="false" data-toggle="dropdown" class="btn btn-danger dropdown-toggle ripple" type="button"><i class="material-icons list-icon">favorite</i>  <span class="caret"></span>
                                        </button>
                                        <div role="menu" class="dropdown-menu"><a class="dropdown-item" href="#"><strong>Action</strong></a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><strong>Separated link</strong></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-4 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Social Icons Default</h5>
                                <p class="text-muted"><code>btn btn-facebook</code>
                                </p>
                                <div class="mr-b-40 btn-list">
                                    <button type="button" class="btn btn-sm btn-facebook ripple"><i class="social-icons list-icon">facebook</i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-twitter ripple"><i class="social-icons list-icon">twitter</i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-googleplus ripple"><i class="social-icons list-icon">googleplus</i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-linkedin ripple"><i class="social-icons list-icon">linkedin</i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-instagram ripple"><i class="social-icons list-icon">instagram</i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-pinterest ripple"><i class="social-icons list-icon">pinterest</i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-dribbble ripple"><i class="social-icons list-icon">dribble</i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-youtube ripple"><i class="social-icons list-icon">youtube</i>
                                    </button>
                                </div>
                                <h5 class="box-title mr-b-0">Social Icons Circle</h5>
                                <p class="text-muted"><code>btn btn-circle btn-sm btn-facebook</code>
                                </p>
                                <div class="mr-b-40 btn-list">
                                    <button type="button" class="btn btn-circle btn-sm btn-facebook ripple"><i class="social-icons list-icon">facebook</i>
                                    </button>
                                    <button type="button" class="btn btn-circle btn-sm btn-twitter ripple"><i class="social-icons list-icon">twitter</i>
                                    </button>
                                    <button type="button" class="btn btn-circle btn-sm btn-googleplus ripple"><i class="social-icons list-icon">googleplus</i>
                                    </button>
                                    <button type="button" class="btn btn-circle btn-sm btn-linkedin ripple"><i class="social-icons list-icon">linkedin</i>
                                    </button>
                                    <button type="button" class="btn btn-circle btn-sm btn-instagram ripple"><i class="social-icons list-icon">instagram</i>
                                    </button>
                                    <button type="button" class="btn btn-circle btn-sm btn-pinterest ripple"><i class="social-icons list-icon">pinterest</i>
                                    </button>
                                    <button type="button" class="btn btn-circle btn-sm btn-dribbble ripple"><i class="social-icons list-icon">dribble</i>
                                    </button>
                                    <button type="button" class="btn btn-circle btn-sm btn-youtube ripple"><i class="social-icons list-icon">youtube</i>
                                    </button>
                                </div>
                                <h5 class="box-title mr-b-0">Large Circle Buttons</h5>
                                <p class="text-muted"><code>btn btn-facebook</code>
                                </p>
                                <div class="mr-b-20 btn-list">
                                    <button type="button" class="btn btn-sm btn-facebook ripple"><i class="social-icons list-icon">facebook</i> Facebook</button>
                                    <button type="button" class="btn btn-sm btn-twitter ripple"><i class="social-icons list-icon">twitter</i> Twitter</button>
                                    <button type="button" class="btn btn-sm btn-googleplus ripple"><i class="social-icons list-icon">googleplus</i> Google</button>
                                    <button type="button" class="btn btn-sm btn-linkedin ripple"><i class="social-icons list-icon">linkedin</i> LinkedIn</button>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-4 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Circle Buttons</h5>
                                <p class="text-muted"><code>btn btn-default btn-circle btn-sm</code>
                                </p>
                                <div class="btn-list">
                                    <button type="button" class="btn btn-default btn-circle btn-sm ripple"><i class="material-icons list-icon">check</i>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-circle ripple"><i class="material-icons list-icon">check</i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle btn-lg ripple"><i class="material-icons list-icon">check</i>
                                    </button>
                                </div>
                                <!-- /.btn-list -->
                                <div class="btn-list">
                                    <button type="button" class="btn btn-pink btn-circle btn-lg ripple"><i class="material-icons list-icon">room</i>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-circle ripple"><i class="material-icons list-icon">home</i>
                                    </button>
                                    <button type="button" class="btn btn-success btn-circle btn-sm ripple"><i class="material-icons list-icon">send</i>
                                    </button>
                                </div>
                                <!-- /.btn-list -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-4 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Group Buttons</h5>
                                <div class="btn-group mr-b-20">
                                    <button type="button" class="btn btn-outline-default ripple">Left</button>
                                    <button type="button" class="btn btn-outline-default ripple">Middle</button>
                                    <button type="button" class="btn btn-outline-default ripple">Right</button>
                                </div>
                                <br>
                                <div class="btn-group btn-group-vertical mr-b-20">
                                    <button class="btn btn-outline-default ripple">Left</button>
                                    <button class="btn btn-outline-default ripple">Middle</button>
                                    <button class="btn btn-outline-default ripple">Right</button>
                                </div>
                                <br>
                                <div class="btn-group btn-group-justified mr-b-20"><a href="#" class="btn btn-outline-default ripple" role="button">Left</a>  <a href="#" class="btn btn-outline-default ripple" role="button">Middle</a>  <a href="#" class="btn btn-outline-default ripple" role="button">Right</a>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-default ripple">1</button>
                                    <button type="button" class="btn btn-info ripple">2</button>
                                    <button type="button" class="btn btn-outline-default ripple">3</button>
                                    <button type="button" class="btn btn-outline-default ripple">4</button>
                                </div>
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
        <!-- /.main-wrappper -->
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
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>