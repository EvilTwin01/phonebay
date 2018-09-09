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
                    <h6 class="page-title-heading mr-0 mr-r-5">Inbox</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Inbox</li>
                    </ol>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                <div class="row no-gutters">
                    <div class="col-md-12 widget-holder widget-full-content">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="mail-inbox border-all row no-gutters" style="height: 90vh">
                                    <!-- Mail Sidebar -->
                                    <div class="col-md-4 d-none d-md-flex flex-column mail-sidebar h-100">
                                        <div class="mail-inbox-header">
                                            <div class="mail-inbox-tools flex-1 d-flex align-items-center"><span class="checkbox checkbox-primary bw-3 heading-font-family fs-14 fw-semibold headings-color mail-inbox-select-all"><label><input type="checkbox"> <span class="label-text">Select all</span>
                                                </label>
                                                </span>
                                                <div class="flex-1"></div>
                                                <div class="btn-group"><a href="javascript:void(0)" class="btn btn-sm btn-link mr-2 text-muted"><i class="list-icon fs-18 feather feather-refresh-cw"></i></a> 
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-link mr-2 text-muted"><i class="list-icon fs-18 feather feather-trash-2"></i>
                                                    </a>
                                                    <div class="dropdown"><a href="javascript:void(0)" data-toggle="dropdown" class="btn btn-sm fs-14 fw-semibold btn-link dropdown-toggle headings-color"><i class="feather feather-more-vertical text-muted fs-18 mr-2"></i> More</a>
                                                        <div
                                                        role="menu" class="dropdown-menu animated fadeIn"><a class="dropdown-item" href="javascript:void(0)">First Task</a>  <a class="dropdown-item" href="javascript:void(0)">Second Task</a>  <a class="dropdown-item" href="javascript:void(0)">Tird Task</a>
                                                            <div
                                                            class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void(0)">Grand Task</a>
                                                </div>
                                            </div>
                                            <!-- /.dropdown -->
                                        </div>
                                        <!-- /.btn-group -->
                                    </div>
                                    <!-- /.mail-inbox-tools -->
                                </div>
                                <!-- /.mail-inbox-header -->
                                <div class="mail-list flex-1 scrollbar-enabled pr-0">
                                    <div class="mail-list-item unread media">
                                        <a href="#" class="pos-absolute pos-0 zi-0"></a>
                                        <div class="checkbox checkbox-primary bw-3 mail-select-checkbox">
                                            <label>
                                                <input type="checkbox"> <span class="label-text"></span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                        <div class="media-body">
                                            <div class="d-flex">
                                                <div class="headings-font-family"><span class="mail-title headings-color d-block zi-3">Chilling in Hawai!</span>  <small class="text-muted fw-semibold">Jerome Sallee</small>
                                                </div>
                                                <div class="flex-1"></div>
                                                <div class="checkbox checkbox-star fs-18">
                                                    <label>
                                                        <input type="checkbox" checked="checked"> <span class="label-text"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- /.d-flex -->
                                            <div class="d-flex align-items-center mt-3"><a href="#" class="zi-2"><i class="feather feather-message-circle fs-16 align-middle mr-1"></i> <span class="text-muted fs-12">Quick Reply</span></a>
                                                <div class="flex-1"></div><span class="text-muted fs-12">Today, 12:30 am</span>
                                            </div>
                                            <!-- /.d-flex -->
                                        </div>
                                        <!-- /.media-body -->
                                    </div>
                                    <!-- /.mail-list-item -->
                                    <div class="mail-list-item unread media">
                                        <a href="#" class="pos-absolute pos-0 zi-0"></a>
                                        <div class="checkbox checkbox-primary bw-3 mail-select-checkbox">
                                            <label>
                                                <input type="checkbox"> <span class="label-text"></span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                        <div class="media-body">
                                            <div class="d-flex">
                                                <div class="headings-font-family"><span class="mail-title headings-color d-block zi-3">What you've learnt about ...</span>  <small class="text-muted fw-semibold">Jacob Hubertus</small>
                                                </div>
                                                <div class="flex-1"></div>
                                                <div class="checkbox checkbox-star fs-18">
                                                    <label>
                                                        <input type="checkbox"> <span class="label-text"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- /.d-flex -->
                                            <div class="d-flex align-items-center mt-3"><a href="#" class="zi-2"><i class="feather feather-message-circle fs-16 align-middle mr-1"></i> <span class="text-muted fs-12">Quick Reply</span></a>
                                                <div class="flex-1"></div><span class="text-muted fs-12">Today, 7:22 am</span>
                                            </div>
                                            <!-- /.d-flex -->
                                        </div>
                                        <!-- /.media-body -->
                                    </div>
                                    <!-- /.mail-list-item -->
                                    <div class="mail-list-item read media">
                                        <a href="#" class="pos-absolute pos-0 zi-0"></a>
                                        <div class="checkbox checkbox-primary bw-3 mail-select-checkbox">
                                            <label>
                                                <input type="checkbox"> <span class="label-text"></span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                        <div class="media-body">
                                            <div class="d-flex">
                                                <div class="headings-font-family"><span class="mail-title headings-color d-block zi-3">Street Photography Competition</span>  <small class="text-muted fw-semibold">Jerome Sallee</small>
                                                </div>
                                                <div class="flex-1"></div>
                                                <div class="checkbox checkbox-star fs-18">
                                                    <label>
                                                        <input type="checkbox" checked="checked"> <span class="label-text"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- /.d-flex -->
                                            <div class="d-flex align-items-center mt-3"><a href="#" class="zi-2"><i class="feather feather-message-circle fs-16 align-middle mr-1"></i> <span class="text-muted fs-12">Quick Reply</span></a>
                                                <div class="flex-1"></div><span class="text-muted fs-12">Oct 16</span>
                                            </div>
                                            <!-- /.d-flex -->
                                        </div>
                                        <!-- /.media-body -->
                                    </div>
                                    <!-- /.mail-list-item -->
                                    <div class="mail-list-item read media">
                                        <a href="#" class="pos-absolute pos-0 zi-0"></a>
                                        <div class="checkbox checkbox-primary bw-3 mail-select-checkbox">
                                            <label>
                                                <input type="checkbox"> <span class="label-text"></span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                        <div class="media-body">
                                            <div class="d-flex">
                                                <div class="headings-font-family"><span class="mail-title headings-color d-block zi-3">Playstation this weekend?</span>  <small class="text-muted fw-semibold">Gustav Butlex</small>
                                                </div>
                                                <div class="flex-1"></div>
                                                <div class="checkbox checkbox-star fs-18">
                                                    <label>
                                                        <input type="checkbox"> <span class="label-text"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- /.d-flex -->
                                            <div class="d-flex align-items-center mt-3"><a href="#" class="zi-2"><i class="feather feather-message-circle fs-16 align-middle mr-1"></i> <span class="text-muted fs-12">Quick Reply</span></a>
                                                <div class="flex-1"></div><span class="text-muted fs-12">Oct 16</span>
                                            </div>
                                            <!-- /.d-flex -->
                                        </div>
                                        <!-- /.media-body -->
                                    </div>
                                    <!-- /.mail-list-item -->
                                    <div class="mail-list-item read media">
                                        <a href="#" class="pos-absolute pos-0 zi-0"></a>
                                        <div class="checkbox checkbox-primary bw-3 mail-select-checkbox">
                                            <label>
                                                <input type="checkbox"> <span class="label-text"></span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                        <div class="media-body">
                                            <div class="d-flex">
                                                <div class="headings-font-family"><span class="mail-title headings-color d-block zi-3">[Dribbble] work enquiry ...</span>  <small class="text-muted fw-semibold">Gustav Butlex</small>
                                                </div>
                                                <div class="flex-1"></div>
                                                <div class="checkbox checkbox-star fs-18">
                                                    <label>
                                                        <input type="checkbox"> <span class="label-text"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- /.d-flex -->
                                            <div class="d-flex align-items-center mt-3"><a href="#" class="zi-2"><i class="feather feather-message-circle fs-16 align-middle mr-1"></i> <span class="text-muted fs-12">Quick Reply</span></a>
                                                <div class="flex-1"></div><span class="text-muted fs-12">Oct 16</span>
                                            </div>
                                            <!-- /.d-flex -->
                                        </div>
                                        <!-- /.media-body -->
                                    </div>
                                    <!-- /.mail-list-item -->
                                </div>
                                <!-- /.mail-inbox -->
                            </div>
                            <!-- /.mail-sidebar -->
                            <div class="col-md-8 col-12 h-100 d-flex flex-column">
                                <div class="mail-inbox-header">
                                    <ul class="mail-inbox-categories list-unstyled list-inline headings-font-family fw-semibold mb-0">
                                        <li class="list-inline-item active"><a href="#">Inbox <span class="badge bg-success-contrast px-3">246</span></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">Sent Mail</a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">Starred</a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">Drafts</a>
                                        </li>
                                        <li class="list-inline-item"><a href="#">Spam</a>
                                        </li>
                                    </ul>
                                    <div class="flex-1"></div>
                                    <div class="d-none d-sm-block text-right"><a href="app-inbox-compose.html" class="btn btn-primary btn-xl px-4 h6 my-0 fs-16 fw-500">Compose</a>
                                    </div>
                                </div>
                                <!-- /.mail-inbox-header -->
                                <div class="mail-single flex-1 scrollbar-enabled pr-4">
                                    <div class="mail-single-info d-flex align-items-start mx-4 mt-4">
                                        <div class="media">
                                            <figure class="thumb-xs2 mr-3 mr-0-rtl ml-3-rtl">
                                                <a href="#">
                                                    <img src="assets/demo/users/user7.jpg" class="rounded-circle" alt="Jerome Sallee">
                                                </a>
                                            </figure>
                                            <div class="media-body headings-font-family"><span class="fw-semibold headings-color d-block">Jerome Sallee</span>  <small><a href="#">&lt;jerome_sallee@website.com&gt;</a> to <a href="#">me</a></small>
                                            </div>
                                            <!-- /.media-body -->
                                        </div>
                                        <!-- /.media -->
                                        <div class="flex-1"></div><span class="text-muted headings-font-family fw-semibold fs-12 mr-4 mr-0-rtl ml-4-rtl">Today, 19:30</span>
                                        <div class="btn-group">
                                            <button class="btn fs-16 p-2 btn-outline-default text-muted bw-1"><i class="feather feather-trash-2"></i>
                                            </button>
                                            <div class="btn-group"><a href="#" class="btn fs-16 p-2 btn-outline-default bw-1 text-muted dropdown-toggle" data-toggle="dropdown"><i class="feather feather-chevron-down"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">Action</a>  <a href="#" class="dropdown-item">Some other action</a>  <span class="dropdown-divider"></span>  <a href="#" class="dropdown-item">Yet another action</a>
                                                </div>
                                                <!-- /.dropdown-menu -->
                                            </div>
                                            <!-- /.dropdown -->
                                        </div>
                                        <!-- /.btn-group -->
                                    </div>
                                    <!-- /.mail-single-info -->
                                    <div class="border-bottom mb-4 mx-4">
                                        <h2 class="my-4">What you've learnt about creating</h2>
                                    </div>
                                    <div class="mail-single-body border-bottom mx-4">
                                        <p>Hi Scott,</p>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                                            nec, pellentesque eu, pretium quis, sem.</p>
                                        <blockquote>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</blockquote>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer
                                            tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                        <p>Have a nice day.
                                            <br>Jerome Sallee</p>
                                    </div>
                                    <!-- /.mail-single-body -->
                                    <div class="mail-attachment border-bottom p-4 headings-font-family">
                                        <h6 class="mail-attachment-heading fs-12 fw-semibold"><i class="list-icon feather feather-check-square fs-16 text-muted mr-3 align-middle"></i> Attachments <span class="text-muted">(3 Files, 680 KB)</span></h6>
                                        <div class="list-unstyled file-list">
                                            <div class="file-list-item">
                                                <a href="#">
                                                    <img src="assets/demo/cards/1.jpg" alt="">
                                                </a><a href="#" class="fw-semibold mx-2">force.gif</a>  <span class="text-muted">(128KB)</span>
                                                <div class="flex-1"></div>
                                                <div class="list-unstyled list-inline"><a href="#" class="list-inline-item">Share</a>  <a href="#" class="list-inline-item">Download</a>
                                                </div>
                                            </div>
                                            <!-- /.file-item -->
                                            <div class="file-list-item">
                                                <a href="#">
                                                    <img src="assets/demo/cards/2.jpg" alt="">
                                                </a><a href="#" class="fw-semibold mx-2">profile.png</a>  <span class="text-muted">(286KB)</span>
                                                <div class="flex-1"></div>
                                                <div class="list-unstyled list-inline"><a href="#" class="list-inline-item">Share</a>  <a href="#" class="list-inline-item">Download</a>
                                                </div>
                                            </div>
                                            <!-- /.file-item -->
                                            <div class="file-list-item"><i class="feather feather-file fs-16 mr-0 align-middle"></i>  <a href="#" class="fw-semibold mx-2">statement.pdf</a>  <span class="text-muted">(266KB)</span>
                                                <div class="flex-1"></div>
                                                <div class="list-unstyled list-inline"><a href="#" class="list-inline-item">Share</a>  <a href="#" class="list-inline-item">Download</a>
                                                </div>
                                            </div>
                                            <!-- /.file-item -->
                                        </div>
                                        <!-- /.list-unstyled -->
                                    </div>
                                    <!-- /.mail-attachment -->
                                    <div class="mail-single-reply mx-3 my-5 clearfix">
                                        <div class="triangle-top"></div><span class="float-left">Click here to <a href="#">Reply</a> or <a href="#">Forward</a> </span><span class="float-right"><i class="list-icon feather feather feather-message-circle"></i></span>
                                    </div>
                                </div>
                                <!-- /.mail-single -->
                            </div>
                            <!-- /.col-lg-9 -->
                        </div>
                        <!-- /.mailbox -->
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
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>