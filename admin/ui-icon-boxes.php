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
                    <h6 class="page-title-heading mr-0 mr-r-5">Icon Box</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Icon Box</li>
                    </ol>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list row">
                <div class="col-md-12 widget-holder">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <h5 class="box-title">Icon Box Center</h5>
                            <div class="row m-0">
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-centered text-center">
                                        <header><a href="#"><i class="feather feather-eye text-primary"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title fw-300">Most suitable tutor</h6>
                                            <p class="text-muted">They are big, bold and beautiful. Billboards have been around for quite a while. In almost all places nowdays you can find</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-centered text-center">
                                        <header><a href="#"><i class="feather feather-feather"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title fw-300">Simple, fast, flexible</h6>
                                            <p class="text-muted">They are big, bold and beautiful. Billboards have been around for quite a while. In almost all places nowdays you can find</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-centered text-center">
                                        <header><a href="#"><i class="feather feather-flag"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title fw-300">Assured of quality</h6>
                                            <p class="text-muted">They are big, bold and beautiful. Billboards have been around for quite a while. In almost all places nowdays you can find</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-centered text-center icon-box-circle-bg">
                                        <header><a href="#" class="bg-primary"><i class="feather feather-navigation"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title fw-300">Most suitable tutor</h6>
                                            <p class="text-muted">They are big, bold and beautiful. Billboards have been around for quite a while. In almost all places nowdays you can find</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-centered text-center icon-box-circle-bg">
                                        <header><a href="#"><i class="feather feather-radio"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title fw-300">Simple, fast, flexible</h6>
                                            <p class="text-muted">They are big, bold and beautiful. Billboards have been around for quite a while. In almost all places nowdays you can find</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-centered text-center icon-box-circle-bg">
                                        <header><a href="#"><i class="feather feather-target bg-grey"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title fw-300">Assured of quality</h6>
                                            <p class="text-muted">They are big, bold and beautiful. Billboards have been around for quite a while. In almost all places nowdays you can find</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-centered text-center icon-box-circle icon-box-outline">
                                        <header><a href="#" class="bw-3 border-color-primary text-primary"><i class="feather feather-tag"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title fw-300">Most suitable tutor</h6>
                                            <p class="text-muted">They are big, bold and beautiful. Billboards have been around for quite a while. In almost all places nowdays you can find</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-centered text-center icon-box-circle icon-box-outline">
                                        <header><a href="#" class="bw-3"><i class="feather feather-thumbs-up"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title fw-300">Simple, fast, flexible</h6>
                                            <p class="text-muted">They are big, bold and beautiful. Billboards have been around for quite a while. In almost all places nowdays you can find</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-centered text-center icon-box-circle icon-box-outline">
                                        <header><a href="#" class="bw-3 border-color-grey text-grey"><i class="feather feather-sun"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title fw-300">Assured of quality</h6>
                                            <p class="text-muted">They are big, bold and beautiful. Billboards have been around for quite a while. In almost all places nowdays you can find</p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="col-md-12 widget-holder">
                    <div class="widget-bg-transparent">
                        <div class="widget-body clearfix">
                            <div class="row m-0">
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-centered text-center">
                                        <header>
                                            <a href="#">
                                                <img src="assets/img/flat-icons/settings.png" alt="">
                                            </a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title fw-300">Most suitable tutor</h6>
                                            <p class="text-muted">Classified advertising is a form advertising that is particularly common in newspapers and other priodicals.</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-centered text-center">
                                        <header>
                                            <a href="#">
                                                <img src="assets/img/flat-icons/compose.png" alt="">
                                            </a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title fw-300">Simple, fast, flexible</h6>
                                            <p class="text-muted">Classified advertising is a form advertising that is particularly common in newspapers and other priodicals.</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-centered text-center">
                                        <header>
                                            <a href="#">
                                                <img src="assets/img/flat-icons/stopwatch-3.png" alt="">
                                            </a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title fw-300">Assured of quality</h6>
                                            <p class="text-muted">Classified advertising is a form advertising that is particularly common in newspapers and other priodicals.</p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="col-md-12 widget-holder">
                    <div class="widget-bg-transparent">
                        <div class="widget-body clearfix">
                            <div class="row m-0">
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-side">
                                        <header>
                                            <a href="#">
                                                <img src="assets/img/flat-icons/settings.png" alt="">
                                            </a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title">Responsive Design</h6>
                                            <p class="text-muted mb-0">Responsive design allows your website to fit on any screen and still be readable and usable.</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-side">
                                        <header>
                                            <a href="#">
                                                <img src="assets/img/flat-icons/compose.png" alt="">
                                            </a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title">Easy to Customize</h6>
                                            <p class="text-muted mb-0">Responsive design allows your website to fit on any screen and still be readable and usable.</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-side">
                                        <header>
                                            <a href="#">
                                                <img src="assets/img/flat-icons/stopwatch-3.png" alt="">
                                            </a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title">Clean Code</h6>
                                            <p class="text-muted mb-0">Responsive design allows your website to fit on any screen and still be readable and usable.</p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="col-md-12 widget-holder">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <h5 class="box-title">Icon Box Left</h5>
                            <div class="row m-0">
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-side icon-box-circle icon-box-outline">
                                        <header><a href="#" class="bw-3 border-color-primary text-primary"><i class="feather feather-check-circle"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title">Responsive Design</h6>
                                            <p class="text-muted">Responsive design allows your website to fit on any screen and still be readable and usable.</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-side icon-box-circle icon-box-outline">
                                        <header><a href="#" class="bw-3"><i class="feather feather-cloud"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title">Easy to Customize</h6>
                                            <p class="text-muted">Responsive design allows your website to fit on any screen and still be readable and usable.</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-side icon-box-circle icon-box-outline">
                                        <header><a href="#" class="bw-3 border-color-grey text-grey"><i class="feather feather-command"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title">Clean Code</h6>
                                            <p class="text-muted">Responsive design allows your website to fit on any screen and still be readable and usable.</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-side">
                                        <header class="align-self-center"><a href="#" class="text-primary"><i class="feather feather-anchor"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title fw-300">Responsive Design</h6>
                                            <p class="text-muted mb-0">Responsive design allows your website to fit on any screen and still be readable and usable.</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-side">
                                        <header class="align-self-center"><a href="#"><i class="feather feather-aperture"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title fw-300">Easy to Customize</h6>
                                            <p class="text-muted mb-0">Responsive design allows your website to fit on any screen and still be readable and usable.</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-side">
                                        <header class="align-self-center"><a href="#" class="text-grey"><i class="feather feather-award"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title fw-300">Clean Code</h6>
                                            <p class="text-muted mb-0">Responsive design allows your website to fit on any screen and still be readable and usable.</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-side icon-box-circle-bg">
                                        <header class="align-self-end"><a href="#" class="bg-primary"><i class="feather feather-activity"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title">Responsive Design</h6>
                                            <p class="text-muted mb-0">Responsive design allows your website to fit on any screen and still be readable and usable.</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-side icon-box-circle-bg">
                                        <header class="align-self-end"><a href="#"><i class="feather feather-at-sign"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title">Easy to Customize</h6>
                                            <p class="text-muted mb-0">Responsive design allows your website to fit on any screen and still be readable and usable.</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-side icon-box-circle-bg">
                                        <header class="align-self-end"><a href="#" class="bg-grey"><i class="feather feather-bell"></i></a>
                                        </header>
                                        <section>
                                            <h6 class="icon-box-title">Clean Code</h6>
                                            <p class="text-muted mb-0">Responsive design allows your website to fit on any screen and still be readable and usable.</p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="col-md-12 widget-holder">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <h5 class="box-title">Icon Box Left</h5>
                            <div class="row m-0">
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-side">
                                        <header class="align-items-center order-1"><a href="#" class="text-primary"><i class="feather feather-anchor"></i></a>
                                        </header>
                                        <section class="text-right">
                                            <h6 class="icon-box-title fw-300">Responsive Design</h6>
                                            <p class="text-muted mb-0">Responsive design allows your website to fit on any screen and still be readable and usable.</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-side">
                                        <header class="align-items-center order-1"><a href="#"><i class="feather feather-aperture"></i></a>
                                        </header>
                                        <section class="text-right">
                                            <h6 class="icon-box-title fw-300">Easy to Customize</h6>
                                            <p class="text-muted mb-0">Responsive design allows your website to fit on any screen and still be readable and usable.</p>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon-box icon-box-side">
                                        <header class="align-items-center order-1"><a href="#" class="text-grey"><i class="feather feather-award"></i></a>
                                        </header>
                                        <section class="text-right">
                                            <h6 class="icon-box-title fw-300">Clean Code</h6>
                                            <p class="text-muted mb-0">Responsive design allows your website to fit on any screen and still be readable and usable.</p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
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