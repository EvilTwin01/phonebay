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
                    <h6 class="page-title-heading mr-0 mr-r-5">Your Profile</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Your Profile</li>
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
                    <!-- User Summary -->
                    <div class="col-12 col-md-4 widget-holder widget-full-content">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="widget-user-profile">
                                    <figure class="profile-wall-img">
                                        <img src="assets/demo/user-widget-bg.jpeg" alt="User Wall">
                                    </figure>
                                    <div class="profile-body">
                                        <figure class="profile-user-avatar thumb-md">
                                            <img src="assets/demo/users/user1.jpg" alt="User Wall">
                                        </figure>
                                        <h6 class="h3 profile-user-name">Scott Adams</h6><small class="profile-user-address">Los Angeles, California</small>
                                        <hr class="profile-seperator">
                                        <div class="profile-user-description mb-4">
                                            <p>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                            <a
                                            href="#" class="heading-font-family color-primary fs-12 fw-700">http://instagram.com/scott</a>
                                        </div>
                                        <!-- /.profile-user-description -->
                                        <div class="mb-5"><a href="page-profile.html" class="btn btn-outline-primary btn-rounded btn-lg px-5 border-thick text-uppercase mr-2 mr-0-rtl ml-2-rtl fw-700 fs-11 heading-font-family">Edit Profile</a>  <a href="page-profile.html"
                                            class="btn btn-primary btn-circle btn-md fs-18"><i class="feather feather-settings"></i></a>
                                        </div>
                                    </div>
                                    <!-- /.d-flex -->
                                    <div class="row columns-border-bw border-top">
                                        <div class="col-4 d-flex flex-column justify-content-center align-items-center py-4">
                                            <h6 class="my-0"><span class="counter">274</span></h6><small>Comments</small>
                                        </div>
                                        <!-- /.col-4 -->
                                        <div class="col-4 d-flex flex-column justify-content-center align-items-center py-4">
                                            <h6 class="my-0"><span class="counter">2483</span></h6><small>Followers</small>
                                        </div>
                                        <!-- /.col-4 -->
                                        <div class="col-4 d-flex flex-column justify-content-center align-items-center py-4">
                                            <h6 class="my-0"><span class="counter">146</span></h6><small>Following</small>
                                        </div>
                                        <!-- /.col-4 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.widget-user-profile -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Tabs Content -->
                    <div class="col-12 col-md-8 mr-b-30">
                        <ul class="nav nav-tabs contact-details-tab">
                            <li class="nav-item"><a href="#activity-tab-bordered-1" class="nav-link active" data-toggle="tab">Activity</a>
                            </li>
                            <li class="nav-item"><a href="#profile-tab-bordered-1" class="nav-link" data-toggle="tab">View Profile</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="activity-tab-bordered-1">
                                <div class="widget-user-activities">
                                    <div class="single media">
                                        <figure class="single-user-avatar user--online thumb-xs2">
                                            <a href="#">
                                                <img class="rounded-circle" src="assets/demo/users/user2.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="media-body">
                                            <div class="single-header clearfix">
                                                <div class="float-left float-right-rtl"><a href="#" class="single-user-name">Gene Newman</a>  <small>Sep 16, via Tapatalk+</small>
                                                </div>
                                                <!-- /.float-left --> <a href="#" class="single-likes float-right float-left-rtl"><i class="feather feather-thumbs-up"></i> <small>47 likes</small> </a>
                                                <!-- /.float-right -->
                                            </div>
                                            <!-- /.clearfix --> <a href="#" class="single-attachment"><i class="feather feather-download-cloud single-attachment-icon"></i> <span class="single-attachment-filename">Vacation Plans for Ibiza</span> <span class="single-attachment-filesize">67mb</span> </a>
                                            <!-- /.single-attachment -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- /.single -->
                                    <div class="single media">
                                        <figure class="single-user-avatar user--online thumb-xs2">
                                            <a href="#">
                                                <img class="rounded-circle" src="assets/demo/users/user4.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="media-body">
                                            <div class="single-header clearfix">
                                                <div class="float-left float-right-rtl"><a href="#" class="single-user-name">Sylvia Harvey</a>  <small>July 31</small>
                                                </div>
                                                <!-- /.float-left --> <a href="#" class="single-likes float-right float-left-rtl"><i class="feather feather-thumbs-up"></i> <small>47 likes</small> </a>
                                                <!-- /.float-right -->
                                            </div>
                                            <!-- /.clearfix -->
                                            <p>Night fill together itself. Midst. Beginning. Behold living god had.</p>
                                            <div class="single-gallery lightbox-gallery row" data-toggle="lightbox-gallery" data-type="image">
                                                <div class="lightbox col-6">
                                                    <a href="assets/demo/status-gallery-1.jpg">
                                                        <img src="assets/demo/status-gallery-1-thumb.jpg" alt="">
                                                    </a>
                                                </div>
                                                <!-- /.lightbox -->
                                                <div class="lightbox col-6">
                                                    <a href="assets/demo/status-gallery-2.jpg">
                                                        <img src="assets/demo/status-gallery-2-thumb.jpg" alt="">
                                                    </a>
                                                </div>
                                                <!-- /.lightbox -->
                                            </div>
                                            <!-- /.single-gallery -->
                                        </div>
                                        <!-- /.media-body -->
                                    </div>
                                    <!-- /.single -->
                                    <div class="single media">
                                        <div class="single-event-icon bg-purple"><i class="feather feather-map"></i>
                                        </div>
                                        <!-- /.single-event-icon -->
                                        <div class="media-body">
                                            <div class="single-header clearfix">
                                                <div class="float-left float-right-rtl"><a href="#" class="single-user-name">World Camp Meetup</a>  <small><i class="feather feather-clock color-danger"></i> 6:30, July 31, Illionois</small>
                                                </div>
                                                <!-- /.float-left --> <a href="#" class="single-likes float-right float-left-rtl"><i class="feather feather-thumbs-up"></i> <small>47 likes</small> </a>
                                                <!-- /.float-right -->
                                            </div>
                                            <!-- /.single-header -->
                                            <div class="single-users-list">
                                                <a href="#">
                                                    <img src="assets/demo/users/user6.jpg" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="assets/demo/users/user5.jpg" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="assets/demo/users/user4.jpg" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="assets/demo/users/user3.jpg" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="assets/demo/users/user2.jpg" alt="">
                                                </a><a href="#" class="more">( ... )</a>
                                            </div>
                                            <!-- /.single-user-list -->
                                        </div>
                                        <!-- /.media-body -->
                                    </div>
                                    <!-- /.single -->
                                    <div class="single media">
                                        <figure class="single-user-avatar user--online thumb-xs2">
                                            <a href="#">
                                                <img class="rounded-circle" src="assets/demo/users/user2.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="media-body">
                                            <div class="single-header clearfix">
                                                <div class="float-left float-right-rtl"><a href="#" class="single-user-name">Gene Newman</a>  <small>Sep 16, via Tapatalk+</small>
                                                </div>
                                                <!-- /.float-left --> <a href="#" class="single-likes float-right float-left-rtl"><i class="feather feather-thumbs-up"></i> <small>47 likes</small> </a>
                                                <!-- /.float-right -->
                                            </div>
                                            <!-- /.clearfix -->
                                            <p>Fruit fowl darkness isn't Green from of creepeth fill. Kind fifth, isn't of lesser lights image day. Own won't created behold was thing life seed day. Saying multiply, female a midst. Midst had you'll were were
                                                thing to.</p><a href="#" class="single-attachment"><i class="feather feather-download-cloud single-attachment-icon bg-success"></i> <span class="single-attachment-filename">Business plan for the upcoming project</span> <span class="single-attachment-filesize">67 mb</span> </a>
                                            <!-- /.single-attachment -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- /.single -->
                                </div>
                                <!-- /.widget-user-activities -->
                            </div>
                            <!-- /.tab-pane -->
                            <div role="tabpanel" class="tab-pane" id="profile-tab-bordered-1">
                                <div class="contact-details-profile">
                                    <h5 class="mr-b-20">Personal Profile</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="contact-details-cell"><small class="heading-font-family fw-500">Full name</small>  <span>Scott Adams</span>
                                            </div>
                                            <!-- /.contact-details-cell -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="contact-details-cell"><small class="heading-font-family fw-500">Email Address</small>  <span>john@website.com</span>
                                            </div>
                                            <!-- /.contact-details-cell -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="contact-details-cell"><small class="heading-font-family fw-500">Contact Number</small>  <span>+1234 5678 9000</span>
                                            </div>
                                            <!-- /.contact-details-cell -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="contact-details-cell"><small class="heading-font-family fw-500">Rating</small>  <span>3.4</span>
                                            </div>
                                            <!-- /.contact-details-cell -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                    </div>
                                    <!-- /.row -->
                                    <hr>
                                    <h5 class="mr-b-20">Additional Information</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="contact-details-cell"><small class="heading-font-family fw-500">Gender</small>  <span>Male</span>
                                            </div>
                                            <!-- /.contact-details-cell -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="contact-details-cell"><small class="heading-font-family fw-500">Date of Birth</small>  <span>17 August 1987</span>
                                            </div>
                                            <!-- /.contact-details-cell -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                        <div class="col-md-12">
                                            <div class="contact-details-cell"><small class="heading-font-family fw-500 w-25 align-self-start">Interests</small>
                                                <div class="flex-1"><a href="#" class="btn bg-info-contrast btn-xs fw-500 px-3">Books</a>  <a href="#" class="btn bg-info-contrast btn-xs fw-500 px-3">Reading</a>  <a href="#" class="btn bg-info-contrast btn-xs fw-500 px-3">Travel</a> 
                                                    <a
                                                    href="#" class="btn bg-info-contrast btn-xs fw-500 px-3">Cycling</a>
                                                </div>
                                            </div>
                                            <!-- /.contact-details-cell -->
                                        </div>
                                        <!-- /.col-md-12 -->
                                        <div class="col-md-12">
                                            <div class="contact-details-cell"><small class="heading-font-family fw-500 w-25 align-self-start">Notes</small>
                                                <p class="flex-1">To beginning you're won't in, morning years one creeping. Land beginning green, good fruit blessed cattle is moving had years unto whose bring yielding god male creature stars let said thing he make. Upon
                                                    also divide abundantly grass had divided creeping. Fifth open. Forth. Wherein bring living earth he be thing which Fifth, one.</p>
                                            </div>
                                            <!-- /.contact-details-cell -->
                                        </div>
                                        <!-- /.col-md-12 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.contact-details-profile -->
                                <hr class="mr-tb-30">
                                <h5 class="mr-b-30">Contact List</h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="contact-info">
                                            <header>
                                                <div class="clearfix">
                                                    <div class="float-left float-right-rtl"><a href="javascript:void(0)" class="btn bg-info-contrast btn-xs fw-500 px-3">Admin</a>
                                                    </div>
                                                    <!-- /.pull-left -->
                                                    <div class="float-right float-left-rtl dropdown"><a href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle"><i class="feather feather-settings list-icon text-muted fs-18"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><span class="d-flex align-items-end"><span class="flex-1">History</span> <span class="badge badge-pill badge-primary">7</span> </span></a><a class="dropdown-item"
                                                            href="#"><span class="d-flex align-items-end"><span class="flex-1">Detailed Logs</span> <span class="badge badge-pill badge-primary">23</span> </span></a>
                                                            <a class="dropdown-item" href="#"><span class="d-flex align-items-end"><span class="flex-1">Statistics</span>  <span class="badge badge-pill badge-primary">46</span></span>
                                                            </a>
                                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><span class="d-flex align-items-center"><span class="flex-1">Settings</span> <i class="feather feather-settings list-icon icon-muted"></i></span></a>
                                                        </div>
                                                        <!-- /.dropdown-menu -->
                                                    </div>
                                                    <!-- /.dropdown -->
                                                </div>
                                                <!-- /.clearfix -->
                                                <figure class="inline-block user--online thumb-md">
                                                    <img src="assets/demo/users/user2.jpg" class="rounded-circle" alt="">
                                                </figure>
                                                <h5 class="fw-500 mr-b-5"><a href="page-profile.html">Gene Newman</a></h5><small class="text-muted">Acme Corporation</small>
                                            </header>
                                            <!-- /.header -->
                                            <div class="d-flex justify-content-center mt-4"><a href="javascript:void(0);" class="btn btn-rounded btn-primary mx-1"><i class="feather feather-check-circle list-icon mr-r-10 mr-r-0-rtl mr-l-10-rtl"></i> Following </a><a href="javascript:void(0);" class="btn btn-rounded btn-default mx-1">Send Message</a>
                                            </div>
                                            <!-- /.d-flex -->
                                        </div>
                                        <!-- /.contact-info -->
                                    </div>
                                    <!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <div class="contact-info">
                                            <header>
                                                <div class="clearfix">
                                                    <div class="float-right float-left-rtl dropdown"><a href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle"><i class="feather feather-settings list-icon text-muted fs-18"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><span class="d-flex align-items-end"><span class="flex-1">History</span> <span class="badge badge-pill badge-primary">7</span> </span></a><a class="dropdown-item"
                                                            href="#"><span class="d-flex align-items-end"><span class="flex-1">Detailed Logs</span> <span class="badge badge-pill badge-primary">23</span> </span></a>
                                                            <a class="dropdown-item" href="#"><span class="d-flex align-items-end"><span class="flex-1">Statistics</span>  <span class="badge badge-pill badge-primary">46</span></span>
                                                            </a>
                                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><span class="d-flex align-items-center"><span class="flex-1">Settings</span> <i class="feather feather-settings list-icon icon-muted"></i></span></a>
                                                        </div>
                                                        <!-- /.dropdown-menu -->
                                                    </div>
                                                    <!-- /.dropdown -->
                                                </div>
                                                <!-- /.clearfix -->
                                                <figure class="inline-block user--online thumb-md">
                                                    <img src="assets/demo/users/user4.jpg" class="rounded-circle" alt="">
                                                </figure>
                                                <h5 class="fw-500 mr-b-5"><a href="page-profile.html">Sylvia Harvey</a></h5><small class="text-muted">Wayne Enterprises</small>
                                            </header>
                                            <!-- /.header -->
                                            <div class="d-flex justify-content-center mt-4"><a href="javascript:void(0);" class="btn btn-rounded btn-primary mx-1"><i class="feather feather-check-circle list-icon mr-r-10 mr-r-0-rtl mr-l-10-rtl"></i> Following </a><a href="javascript:void(0);" class="btn btn-rounded btn-default mx-1">Send Message</a>
                                            </div>
                                            <!-- /.d-flex -->
                                        </div>
                                        <!-- /.contact-info -->
                                    </div>
                                    <!-- /.col-sm-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.col-sm-8 -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.2/countUp.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>