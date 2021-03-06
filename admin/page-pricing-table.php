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
                    <h6 class="page-title-heading mr-0 mr-r-5">Pricing Table</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Pricing Table</li>
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
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg-transparent">
                            <div class="widget-body clearfix">
                                <div class="row m-0">
                                    <div class="col-12 col-md-4">
                                        <div class="pricing-box">
                                            <header class="text-center">
                                                <h5 class="sub-heading-font-family mb-4">Basic</h5><span class="h6 heading-basic bg-info-contrast color-info rounded-circle sub-heading-font-family align-middle">Free</span>
                                            </header>
                                            <hr>
                                            <div class="pricing-box-content px-5">
                                                <h6 class="text-center pt-2">Groundwork to stay organized</h6>
                                                <ul class="list-unstyled mt-4">
                                                    <li class="d-flex"><i class="material-icons list-icons text-success mr-2 mr-0-rtl ml-2-rtl">check</i>  <span>Payback and record offline payment</span>
                                                    </li>
                                                    <li class="d-flex"><i class="material-icons list-icons text-success mr-2 mr-0-rtl ml-2-rtl">check</i>  <span>Setup custom payment plans</span>
                                                    </li>
                                                    <li class="d-flex"><i class="material-icons list-icons text-success mr-2 mr-0-rtl ml-2-rtl">check</i>  <span>Weekly collection reports</span>
                                                    </li>
                                                    <li class="d-flex"><i class="material-icons list-icons text-success mr-2 mr-0-rtl ml-2-rtl">check</i>  <span>Export you data anytime</span>
                                                    </li>
                                                    <li class="d-flex"><i class="material-icons list-icons text-success mr-2 mr-0-rtl ml-2-rtl">check</i>  <span>Automatic Payment</span>
                                                    </li>
                                                </ul>
                                                <div class="text-center"><a href="#" class="btn btn-lg btn-outline-info py-3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.pricing-box -->
                                    </div>
                                    <!-- /.col-md-3 -->
                                    <div class="col-12 col-md-4">
                                        <div class="pricing-box featured-pricing-box">
                                            <header class="text-center">
                                                <h5 class="mb-4 sub-heading-font-family">Pay As You Go</h5><span class="h2 heading-featured sub-heading-font-family rounded-circle bg-success-contrast color-success">2%</span>  <span class="text-success block mt-4">&#43; 30&#8364; per transaction</span>
                                                <div class="triangle-top-right"></div>
                                            </header>
                                            <hr>
                                            <div class="pricing-box-content px-5">
                                                <h6 class="text-center pt-4">All the features of the free plan plus:</h6>
                                                <ul class="list-unstyled mt-4">
                                                    <li class="d-flex"><i class="material-icons list-icons text-success mr-2 mr-0-rtl ml-2-rtl">check</i>  <span>Collect online bank and card payments</span>
                                                    </li>
                                                    <li class="d-flex"><i class="material-icons list-icons text-success mr-2 mr-0-rtl ml-2-rtl">check</i>  <span>Let Parents pay online all upfront or enroll in autopay</span>
                                                    </li>
                                                    <li class="d-flex"><i class="material-icons list-icons text-success mr-2 mr-0-rtl ml-2-rtl">check</i>  <span>Send automatic payment reminders</span>
                                                    </li>
                                                    <li class="d-flex"><i class="material-icons list-icons text-success mr-2 mr-0-rtl ml-2-rtl">check</i>  <span>Send automatic signup reminders</span>
                                                    </li>
                                                </ul>
                                                <h6 class="my-4 text-center">All extensions included<br><small>Save more than 200&#8364;!</small></h6>
                                                <div class="text-center"><a href="#" class="btn btn-lg btn-success py-3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.pricing-box -->
                                    </div>
                                    <!-- /.col-md-3 -->
                                    <div class="col-12 col-md-4">
                                        <div class="pricing-box">
                                            <header class="text-center">
                                                <h5 class="sub-heading-font-family mb-4">Custom</h5><span class="h6 heading-custom rounded-circle sub-heading-font-family bg-light-contrast"><i class="material-icons text-muted">mail_outline</i></span>
                                            </header>
                                            <hr>
                                            <div class="pricing-box-content px-5">
                                                <h6 class="text-center pt-2">Groundwork to stay organized</h6>
                                                <ul class="list-unstyled mt-4">
                                                    <li class="d-flex"><i class="material-icons list-icons text-success mr-2 mr-0-rtl ml-2-rtl">check</i>  <span>Payback and record offline payment</span>
                                                    </li>
                                                    <li class="d-flex"><i class="material-icons list-icons text-success mr-2 mr-0-rtl ml-2-rtl">check</i>  <span>Setup custom payment plans</span>
                                                    </li>
                                                    <li class="d-flex"><i class="material-icons list-icons text-success mr-2 mr-0-rtl ml-2-rtl">check</i>  <span>Weekly collection reports</span>
                                                    </li>
                                                    <li class="d-flex"><i class="material-icons list-icons text-success mr-2 mr-0-rtl ml-2-rtl">check</i>  <span>Export you data anytime</span>
                                                    </li>
                                                    <li class="d-flex"><i class="material-icons list-icons text-success mr-2 mr-0-rtl ml-2-rtl">check</i>  <span>Automatic Payment</span>
                                                    </li>
                                                </ul>
                                                <div class="text-center"><a href="#" class="btn btn-lg btn-outline-default py-3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.pricing-box -->
                                    </div>
                                    <!-- /.col-md-3 -->
                                </div>
                                <!-- /.row -->
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