<?php
session_start();

include("./includes/side-menu.php");

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('index.php','_self')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

        <main class="main-wrapper">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Chat Page</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Chat Page</li>
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
                    <div class="col-md-12 widget-holder widget-full-content border-all mb-3">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="chatbox row no-gutters" style="height: 90vh">
                                    <div class="chatbox-user-list col-sm-4 border-right bw-r-0-rtl border-left-rtl">
                                        <div class="chatbox-header">
                                            <div class="icon-box icon-box-side icon-box-circle icon-box-outline icon-box-lg align-items-center">
                                                <header><a href="#" class="bw-1"><i class="feather feather-user fs-20"></i></a>
                                                </header>
                                                <section>
                                                    <h6 class="icon-box-title mb-1">Friends</h6>
                                                    <p class="text-muted heading-font-family">376 Conversions</p>
                                                </section>
                                            </div>
                                            <!-- /.icon-box -->
                                        </div>
                                        <!-- /.chatbox-header -->
                                        <div class="chatbox-search px-3 mt-4">
                                            <form>
                                                <div class="form-group"><i class="feather feather-search pos-absolute pos-right vertical-center pr-4"></i> 
                                                    <input type="search" placeholder="Search for friends.." class="form-control form-control-rounded heading-font-family fs-12 pr-5 pl-3">
                                                </div>
                                                <!-- /.form-group -->
                                            </form>
                                        </div>
                                        <!-- /.chatbox-search -->
                                        <div class="chatbox-body scrollbar-enabled pr-0">
                                            <div class="user-list">
                                                <div class="user-list-single">
                                                    <div class="row">
                                                        <div class="media align-items-center col-8">
                                                            <figure class="thumb-xs2 mr-3 mr-0-rtl ml-3-rtl user--online">
                                                                <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="User 1">
                                                            </figure>
                                                            <div class="media-body overflow-hidden">
                                                                <p class="user-name mb-0 heading-font-family fw-400">Nick Lampard</p><small class="text-nowrap heading-font-family fw-400">Hi, I am going to Scotland something that we don't understand</small>
                                                            </div>
                                                            <!-- /.media-body -->
                                                            <a href="#" class="pos-absolute pos-0 zi-1"></a>
                                                        </div>
                                                        <!-- /.col-8 -->
                                                        <div class="col-4">
                                                            <div class="d-flex flex-column">
                                                                <div class="text-right text-left-rtl"><span class="badge bg-success-contrast color-success">3</span>
                                                                    <div class="dropdown d-inline-block">
                                                                        <button class="btn btn-link btn-link dropdown-toggle p-0 color-content-color d-inline-block" data-toggle="dropdown"><i class="feather feather-more-horizontal"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another Action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                        <!-- /.dropdown-menu -->
                                                                    </div>
                                                                    <!-- /.dropdown -->
                                                                </div><small class="heading-font-family fs-10 text-right text-left-rtl">5 min</small>
                                                            </div>
                                                            <!-- /.d-flex -->
                                                        </div>
                                                        <!-- /.col-4 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.user-list-single -->
                                                <div class="user-list-single">
                                                    <div class="row">
                                                        <div class="media align-items-center col-8">
                                                            <figure class="thumb-xs2 mr-3 mr-0-rtl ml-3-rtl user--online">
                                                                <img src="assets/demo/users/user2.jpg" class="rounded-circle" alt="User 2">
                                                            </figure>
                                                            <div class="media-body overflow-hidden">
                                                                <p class="user-name mb-0 heading-font-family fw-400">Ashley Wilson</p><small class="text-nowrap heading-font-family fw-400">Can you help me with this ..</small>
                                                            </div>
                                                            <!-- /.media-body -->
                                                            <a href="#" class="pos-absolute pos-0 zi-1"></a>
                                                        </div>
                                                        <!-- /.col-8 -->
                                                        <div class="col-4">
                                                            <div class="d-flex flex-column">
                                                                <div class="text-right text-left-rtl"><span class="badge bg-success-contrast color-success">2</span>
                                                                    <div class="dropdown d-inline-block">
                                                                        <button class="btn btn-link btn-link dropdown-toggle p-0 color-content-color d-inline-block" data-toggle="dropdown"><i class="feather feather-more-horizontal"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another Action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                        <!-- /.dropdown-menu -->
                                                                    </div>
                                                                    <!-- /.dropdown -->
                                                                </div><small class="heading-font-family fs-10 text-right text-left-rtl">23 min</small>
                                                            </div>
                                                            <!-- /.d-flex -->
                                                        </div>
                                                        <!-- /.col-4 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.user-list-single -->
                                                <div class="user-list-single">
                                                    <div class="row">
                                                        <div class="media align-items-center col-8">
                                                            <figure class="thumb-xs2 mr-3 mr-0-rtl ml-3-rtl user--offline">
                                                                <img src="assets/demo/users/user3.jpg" class="rounded-circle" alt="User 3">
                                                            </figure>
                                                            <div class="media-body overflow-hidden">
                                                                <p class="user-name mb-0 heading-font-family fw-400">Cameron Wilson</p><small class="text-nowrap heading-font-family fw-400">Hello, how are you?</small>
                                                            </div>
                                                            <!-- /.media-body -->
                                                            <a href="#" class="pos-absolute pos-0 zi-1"></a>
                                                        </div>
                                                        <!-- /.col-8 -->
                                                        <div class="col-4">
                                                            <div class="d-flex flex-column">
                                                                <div class="text-right text-left-rtl">
                                                                    <div class="dropdown d-inline-block">
                                                                        <button class="btn btn-link btn-link dropdown-toggle p-0 color-content-color d-inline-block" data-toggle="dropdown"><i class="feather feather-more-horizontal"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another Action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                        <!-- /.dropdown-menu -->
                                                                    </div>
                                                                    <!-- /.dropdown -->
                                                                </div><small class="heading-font-family fs-10 text-right text-left-rtl">16 Oct</small>
                                                            </div>
                                                            <!-- /.d-flex -->
                                                        </div>
                                                        <!-- /.col-4 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.user-list-single -->
                                                <div class="user-list-single">
                                                    <div class="row">
                                                        <div class="media align-items-center col-8">
                                                            <figure class="thumb-xs2 mr-3 mr-0-rtl ml-3-rtl user--busy">
                                                                <img src="assets/demo/users/user4.jpg" class="rounded-circle" alt="User 4">
                                                            </figure>
                                                            <div class="media-body overflow-hidden">
                                                                <p class="user-name mb-0 heading-font-family fw-400">Martha Smith</p><small class="text-nowrap heading-font-family fw-400">Any update on the design</small>
                                                            </div>
                                                            <!-- /.media-body -->
                                                            <a href="#" class="pos-absolute pos-0 zi-1"></a>
                                                        </div>
                                                        <!-- /.col-8 -->
                                                        <div class="col-4">
                                                            <div class="d-flex flex-column">
                                                                <div class="text-right text-left-rtl">
                                                                    <div class="dropdown d-inline-block">
                                                                        <button class="btn btn-link btn-link dropdown-toggle p-0 color-content-color d-inline-block" data-toggle="dropdown"><i class="feather feather-more-horizontal"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another Action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                        <!-- /.dropdown-menu -->
                                                                    </div>
                                                                    <!-- /.dropdown -->
                                                                </div><small class="heading-font-family fs-10 text-right text-left-rtl">16 Oct</small>
                                                            </div>
                                                            <!-- /.d-flex -->
                                                        </div>
                                                        <!-- /.col-4 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.user-list-single -->
                                                <div class="user-list-single">
                                                    <div class="row">
                                                        <div class="media align-items-center col-8">
                                                            <figure class="thumb-xs2 mr-3 mr-0-rtl ml-3-rtl user--online">
                                                                <img src="assets/demo/users/user2.jpg" class="rounded-circle" alt="User 2">
                                                            </figure>
                                                            <div class="media-body overflow-hidden">
                                                                <p class="user-name mb-0 heading-font-family fw-400">Gene Newman</p><small class="text-nowrap heading-font-family fw-400">Hi, I am going to Scotland</small>
                                                            </div>
                                                            <!-- /.media-body -->
                                                            <a href="#" class="pos-absolute pos-0 zi-1"></a>
                                                        </div>
                                                        <!-- /.col-8 -->
                                                        <div class="col-4">
                                                            <div class="d-flex flex-column">
                                                                <div class="text-right text-left-rtl">
                                                                    <div class="dropdown d-inline-block">
                                                                        <button class="btn btn-link btn-link dropdown-toggle p-0 color-content-color d-inline-block" data-toggle="dropdown"><i class="feather feather-more-horizontal"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another Action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                        <!-- /.dropdown-menu -->
                                                                    </div>
                                                                    <!-- /.dropdown -->
                                                                </div><small class="heading-font-family fs-10 text-right text-left-rtl">15 Oct</small>
                                                            </div>
                                                            <!-- /.d-flex -->
                                                        </div>
                                                        <!-- /.col-4 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.user-list-single -->
                                                <div class="user-list-single">
                                                    <div class="row">
                                                        <div class="media align-items-center col-8">
                                                            <figure class="thumb-xs2 mr-3 mr-0-rtl user--offline">
                                                                <img src="assets/demo/users/user5.jpg" class="rounded-circle" alt="User 5">
                                                            </figure>
                                                            <div class="media-body overflow-hidden">
                                                                <p class="user-name mb-0 heading-font-family fw-400">Shelly Sullivan</p><small class="text-nowrap heading-font-family fw-400">Can you help me with this</small>
                                                            </div>
                                                            <!-- /.media-body -->
                                                            <a href="#" class="pos-absolute pos-0 zi-1"></a>
                                                        </div>
                                                        <!-- /.col-8 -->
                                                        <div class="col-4">
                                                            <div class="d-flex flex-column">
                                                                <div class="text-right text-left-rtl">
                                                                    <div class="dropdown d-inline-block">
                                                                        <button class="btn btn-link btn-link dropdown-toggle p-0 color-content-color d-inline-block" data-toggle="dropdown"><i class="feather feather-more-horizontal"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another Action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                        <!-- /.dropdown-menu -->
                                                                    </div>
                                                                    <!-- /.dropdown -->
                                                                </div><small class="heading-font-family fs-10 text-right text-left-rtl">15 Oct</small>
                                                            </div>
                                                            <!-- /.d-flex -->
                                                        </div>
                                                        <!-- /.col-4 -->
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.user-list-single -->
                                            </div>
                                            <!-- /.user-list -->
                                        </div>
                                        <!-- /.chatbox-body -->
                                    </div>
                                    <!-- /.col-sm-4 -->
                                    <div class="chatbox-chat-area col-sm-8">
                                        <div class="chatbox-header d-flex align-items-center px-4 border-bottom">
                                            <div class="media align-items-center mr-tb-30 flex-1">
                                                <figure class="thumb-xs2 user--online mr-3 mr-0-rtl ml-3-rtl">
                                                    <a href="#">
                                                        <img class="rounded-circle" src="assets/demo/users/user7.jpg" alt="Something Something">
                                                    </a>
                                                </figure>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Jerome Sallee</h6>
                                                    <p class="text-muted heading-font-family mb-0">Online</p>
                                                </div>
                                                <!-- /.media-body -->
                                            </div>
                                            <!-- /.media --> <a href="#" class="btn btn-circle btn-success fs-20 mr-2 mr-0-rtl ml-2-rtl"><i class="feather feather-phone"></i></a>  <a href="#" class="btn btn-circle btn-outline-default fs-20 mr-2 mr-0-rtl ml-2-rtl"><i class="feather feather-video"></i></a>
                                            <div
                                            class="dropdown"><a href="#" class="btn btn-circle btn-outline-default fs-20 mr-2 mr-0-rtl ml-2-rtl dropdown-toggle" data-toggle="dropdown"><i class="feather feather-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">Action</a>  <a href="#" class="dropdown-item">Another Action</a>  <a href="#" class="dropdown-item">Something else here</a>
                                                </div>
                                                <!-- /.dropdown-menu -->
                                        </div>
                                        <!-- /.dropdown -->
                                    </div>
                                    <!-- /.chatbox-header -->
                                    <div class="chatbox-body scrollbar-enabled scroll-to-bottom" style="max-height: 100%">
                                        <div class="chatbox-messages">
                                            <div class="message reply media">
                                                <figure class="thumb-xs2">
                                                    <a href="#">
                                                        <img src="assets/demo/users/user7.jpg" class="rounded-circle" alt="User 7">
                                                    </a>
                                                </figure>
                                                <div class="media-body">
                                                    <p>Epic Cheeseburgers come in all kinds of styles</p>
                                                </div>
                                                <!-- /.media-body -->
                                            </div>
                                            <!-- /.message -->
                                            <div class="message media">
                                                <figure class="thumb-xs2">
                                                    <a href="#">
                                                        <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="User 1">
                                                    </a>
                                                </figure>
                                                <div class="media-body">
                                                    <p>Cheeseburgers make your knees weak</p>
                                                </div>
                                                <!-- /.media-body -->
                                            </div>
                                            <!-- /.message -->
                                            <div class="message reply media">
                                                <figure class="thumb-xs2">
                                                    <a href="#">
                                                        <img src="assets/demo/users/user7.jpg" class="rounded-circle" alt="User 7">
                                                    </a>
                                                </figure>
                                                <div class="media-body">
                                                    <p>Cheeseburgers will never let you down.</p>
                                                    <p>They'll also never run around or desert you.</p>
                                                </div>
                                                <!-- /.media-body -->
                                            </div>
                                            <!-- /.message -->
                                            <div class="message media">
                                                <figure class="thumb-xs2">
                                                    <a href="#">
                                                        <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="User 1">
                                                    </a>
                                                </figure>
                                                <div class="media-body">
                                                    <p>A great cheeseburger is a gastronomical event.</p>
                                                </div>
                                                <!-- /.media-body -->
                                            </div>
                                            <!-- /.message -->
                                            <div class="message reply media">
                                                <figure class="thumb-xs2">
                                                    <a href="#">
                                                        <img src="assets/demo/users/user7.jpg" class="rounded-circle" alt="User 7">
                                                    </a>
                                                </figure>
                                                <div class="media-body">
                                                    <p>There's a cheesy incarnation waiting for you no matter what your palate preferences are.</p>
                                                </div>
                                                <!-- /.media-body -->
                                            </div>
                                            <!-- /.message -->
                                            <div class="message media">
                                                <figure class="thumb-xs2">
                                                    <a href="#">
                                                        <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="User 1">
                                                    </a>
                                                </figure>
                                                <div class="media-body">
                                                    <p>If you're vegan, we're sorry for your loss.</p>
                                                </div>
                                                <!-- /.media-body -->
                                            </div>
                                            <!-- /.message -->
                                        </div>
                                        <!-- /.chatbox-messages -->
                                    </div>
                                    <!-- /.chatbox-body -->
                                    <form class="chatbox-form p-3 border-top d-flex align-items-center pos-relative" action="#" method="post">
                                        <button type="button" class="btn btn-circle btn-outline-default bw-1"><i class="feather feather-plus"></i>
                                        </button>
                                        <div class="form-group flex-1 mb-0 ml-3">
                                            <input type="text" class="form-control form-control-rounded pd-r-90">
                                        </div>
                                        <!-- /.form-group -->
                                        <button type="submit" class="btn btn-rounded btn-primary pos-absolute pos-right vertical-center border-hidden mr-3">Submit</button>
                                    </form>
                                    <!-- /.chatbox-form -->
                                </div>
                                <!-- /.col-sm-8 -->
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