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
                    <h6 class="page-title-heading mr-0 mr-r-5">Contacts</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Contacts</li>
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
                    <div class="col-md-12 widget-holder widget-full-content border-all px-0">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="row no-gutters">
                                    <!-- Mail Sidebar -->
                                    <div class="col-md-3 mail-sidebar">
                                        <div class="mail-inbox-header">
                                            <form action="#" method="get">
                                                <div class="form-group mb-0">
                                                    <input type="search" class="form-control form-control-rounded pr-5 fs-13 heading-font-family" placeholder="Search for friends..."> <i class="feather feather-search pos-absolute pos-right vertical-center mr-3"></i>
                                                </div>
                                                <!-- /.form-group -->
                                            </form>
                                        </div>
                                        <!-- /.mail-inbox-header -->
                                        <div class="px-3">
                                            <h5 class="pl-3 mt-4 mb-4">View by Groups</h5>
                                            <form action="javascript:void(0)" method="get">
                                                <ul class="list-unstyled px-3">
                                                    <li>
                                                        <div class="d-block checkbox checkbox-full-bg checkbox-lg checkbox-rounded checkbox-default bw-0">
                                                            <label class="d-block">
                                                                <input type="checkbox" class="check_all"> <span class="label-text heading-font-family headings-color pd-l-50 pd-l-0-rtl pd-r-50-rtl">All</span>
                                                            </label>
                                                        </div>
                                                        <!-- /.checkbox -->
                                                    </li>
                                                    <li>
                                                        <div class="d-block checkbox checkbox-full-bg checkbox-lg checkbox-rounded checkbox-persian-blue bw-0">
                                                            <label class="d-block">
                                                                <input type="checkbox" checked="checked"> <span class="label-text heading-font-family headings-color pd-l-50 pd-l-0-rtl pd-r-50-rtl">Marketing</span>
                                                            </label>
                                                        </div>
                                                        <!-- /.checkbox -->
                                                    </li>
                                                    <li>
                                                        <div class="d-block checkbox checkbox-full-bg checkbox-lg checkbox-rounded checkbox-cerize-red bw-0">
                                                            <label class="d-block">
                                                                <input type="checkbox" checked="checked"> <span class="label-text heading-font-family headings-color pd-l-50 pd-l-0-rtl pd-r-50-rtl">Testing</span>
                                                            </label>
                                                        </div>
                                                        <!-- /.checkbox -->
                                                    </li>
                                                    <li>
                                                        <div class="d-block checkbox checkbox-full-bg checkbox-lg checkbox-rounded checkbox-mustard bw-0">
                                                            <label class="d-block">
                                                                <input type="checkbox" checked="checked"> <span class="label-text heading-font-family headings-color pd-l-50 pd-l-0-rtl pd-r-50-rtl">Development</span>
                                                            </label>
                                                        </div>
                                                        <!-- /.checkbox -->
                                                    </li>
                                                    <li>
                                                        <div class="d-block checkbox checkbox-full-bg checkbox-lg checkbox-rounded checkbox-persian-blue bw-0">
                                                            <label class="d-block">
                                                                <input type="checkbox" checked="checked"> <span class="label-text heading-font-family headings-color pd-l-50 pd-l-0-rtl pd-r-50-rtl">Research</span>
                                                            </label>
                                                        </div>
                                                        <!-- /.checkbox -->
                                                    </li>
                                                    <li>
                                                        <div class="d-block checkbox checkbox-full-bg checkbox-lg checkbox-rounded checkbox-cerize-red bw-0">
                                                            <label class="d-block">
                                                                <input type="checkbox" checked="checked"> <span class="label-text heading-font-family headings-color pd-l-50 pd-l-0-rtl pd-r-50-rtl">Accounts</span>
                                                            </label>
                                                        </div>
                                                        <!-- /.checkbox -->
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <!-- /.inbox-labels -->
                                    </div>
                                    <!-- /.mail-sidebar -->
                                    <!-- Mails List -->
                                    <div class="col-lg-9 col-md-9 mail-inbox">
                                        <div class="mail-inbox-header">
                                            <div class="mail-inbox-tools d-flex align-items-center"><span class="checkbox checkbox-primary bw-3 heading-font-family fs-14 fw-semibold headings-color mail-inbox-select-all mr-r-20"><label><input type="checkbox"> <span class="label-text">Select all</span>
                                                </label>
                                                </span>
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
                                    <div class="flex-1"></div>
                                    <div class="d-none d-sm-block text-right"><a href="#" class="btn btn-primary btn-xl px-4 h6 my-0 fs-16 fw-500">Add Contact</a>
                                    </div>
                                </div>
                                <!-- /.mail-inbox-header -->
                                <div class="px-4">
                                    <table class="mail-list contact-list table-responsive">
                                        <tbody>
                                            <tr>
                                                <td class="contact-list-user d-none d-md-block">
                                                    <label class="mail-select-checkbox">
                                                        <input type="checkbox">
                                                        <figure class="thumb-xs2">
                                                            <img class="rounded-circle" src="assets/demo/users/user4.jpg" alt="">
                                                        </figure>
                                                    </label>
                                                </td>
                                                <td class="contact-list-name"><a href="app-inbox-single.html" class="d-block fw-semibold">Jerome Sallee</a>  <small>Account Manager, <a href="#">Acme Company</a></small>
                                                </td>
                                                <td class="contact-list-message"><span class="contact-list-phone d-block">(615) 728-1241</span>  <small>jerome.sallee@acme.com</small>
                                                </td>
                                                <td class="contact-list-badge"><span class="badge bg-warning-contrast color-warning px-3">Testing</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="contact-list-user d-none d-md-block">
                                                    <label class="mail-select-checkbox">
                                                        <input type="checkbox" checked="checked">
                                                        <figure class="thumb-xs2">
                                                            <img class="rounded-circle" src="assets/demo/users/user2.jpg" alt="">
                                                        </figure>
                                                    </label>
                                                </td>
                                                <td class="contact-list-name"><a href="app-contact-details.html" class="d-block fw-semibold">Billy Black</a>  <small>VP Operations, <a href="javascript:void(0)">Acme Company</a></small>
                                                </td>
                                                <td class="contact-list-message"><span class="contact-list-phone d-block">(581) 850-7505</span>  <small>jacob.hubertus@acme.com</small>
                                                </td>
                                                <td class="contact-list-badge"><span class="badge bg-info-contrast color-info px-3">Marketing</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="contact-list-user d-none d-md-block">
                                                    <label class="mail-select-checkbox">
                                                        <input type="checkbox">
                                                        <figure class="thumb-xs2">
                                                            <img class="rounded-circle" src="assets/img/default-avatar.jpg" alt="">
                                                        </figure>
                                                    </label>
                                                </td>
                                                <td class="contact-list-name"><a href="app-inbox-single.html" class="d-block fw-semibold">Jeromy Pervorse</a>  <small>CTO, <a href="#">Acme Company</a></small>
                                                </td>
                                                <td class="contact-list-message"><span class="contact-list-phone d-block">(855) 802-3669</span>  <small>jeromy.pervorse@acme.com</small>
                                                </td>
                                                <td class="contact-list-badge"><span class="badge bg-success-contrast color-success px-3">Research</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="contact-list-user d-none d-md-block">
                                                    <label class="mail-select-checkbox">
                                                        <input type="checkbox" checked="checked">
                                                        <figure class="thumb-xs2">
                                                            <img class="rounded-circle" src="assets/demo/users/user7.jpg" alt="">
                                                        </figure>
                                                    </label>
                                                </td>
                                                <td class="contact-list-name"><a href="app-inbox-single.html" class="d-block fw-semibold">Gustav Butlex</a>  <small>Account Manager, <a href="#">Acme Company</a></small>
                                                </td>
                                                <td class="contact-list-message"><span class="contact-list-phone d-block">(615) 728-1241</span>  <small>gustav.butlex@acme.com</small>
                                                </td>
                                                <td class="contact-list-badge"><span class="badge bg-danger-contrast color-danger px-3">Development</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="contact-list-user d-none d-md-block">
                                                    <label class="mail-select-checkbox">
                                                        <input type="checkbox" checked="checked">
                                                        <figure class="thumb-xs2">
                                                            <img class="rounded-circle" src="assets/demo/users/user6.jpg" alt="">
                                                        </figure>
                                                    </label>
                                                </td>
                                                <td class="contact-list-name"><a href="app-inbox-single.html" class="d-block fw-semibold">Sarah Paramentor</a>  <small>Account Manager, <a href="#">Acme Company</a></small>
                                                </td>
                                                <td class="contact-list-message"><span class="contact-list-phone d-block">(672) 134-849</span>  <small>sarah.paramantor@acme.com</small>
                                                </td>
                                                <td class="contact-list-badge"><span class="badge bg-info-contrast color-info px-3">Testing</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="contact-list-user d-none d-md-block">
                                                    <label class="mail-select-checkbox">
                                                        <input type="checkbox">
                                                        <figure class="thumb-xs2">
                                                            <img class="rounded-circle" src="assets/demo/users/user4.jpg" alt="">
                                                        </figure>
                                                    </label>
                                                </td>
                                                <td class="contact-list-name"><a href="app-inbox-single.html" class="d-block fw-semibold">Jerome Sallee</a>  <small>Account Manager, <a href="#">Acme Company</a></small>
                                                </td>
                                                <td class="contact-list-message"><span class="contact-list-phone d-block">(615) 728-1241</span>  <small>jerome.sallee@acme.com</small>
                                                </td>
                                                <td class="contact-list-badge"><span class="badge bg-warning-contrast color-warning px-3">Testing</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="contact-list-user d-none d-md-block">
                                                    <label class="mail-select-checkbox">
                                                        <input type="checkbox" checked="checked">
                                                        <figure class="thumb-xs2">
                                                            <img class="rounded-circle" src="assets/demo/users/user2.jpg" alt="">
                                                        </figure>
                                                    </label>
                                                </td>
                                                <td class="contact-list-name"><a href="app-contact-details.html" class="d-block fw-semibold">Jacob Hubertus</a>  <small>VP Operations, <a href="javascript:void(0)">Acme Company</a></small>
                                                </td>
                                                <td class="contact-list-message"><span class="contact-list-phone d-block">(581) 850-7505</span>  <small>jacob.hubertus@acme.com</small>
                                                </td>
                                                <td class="contact-list-badge"><span class="badge bg-info-contrast color-info px-3">Marketing</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="contact-list-user d-none d-md-block">
                                                    <label class="mail-select-checkbox">
                                                        <input type="checkbox">
                                                        <figure class="thumb-xs2">
                                                            <img class="rounded-circle" src="assets/img/default-avatar.jpg" alt="">
                                                        </figure>
                                                    </label>
                                                </td>
                                                <td class="contact-list-name"><a href="app-inbox-single.html" class="d-block fw-semibold">Jeromy Pervorse</a>  <small>CTO, <a href="#">Acme Company</a></small>
                                                </td>
                                                <td class="contact-list-message"><span class="contact-list-phone d-block">(855) 802-3669</span>  <small>jeromy.pervorse@acme.com</small>
                                                </td>
                                                <td class="contact-list-badge"><span class="badge bg-danger-contrast color-danger px-3">Development</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="contact-list-user d-none d-md-block">
                                                    <label class="mail-select-checkbox">
                                                        <input type="checkbox">
                                                        <figure class="thumb-xs2">
                                                            <img class="rounded-circle" src="assets/demo/users/user7.jpg" alt="">
                                                        </figure>
                                                    </label>
                                                </td>
                                                <td class="contact-list-name"><a href="app-inbox-single.html" class="d-block fw-semibold">Gustav Butlex</a>  <small>Account Manager, <a href="#">Acme Company</a></small>
                                                </td>
                                                <td class="contact-list-message"><span class="contact-list-phone d-block">(615) 728-1241</span>  <small>gustav.butlex@acme.com</small>
                                                </td>
                                                <td class="contact-list-badge"><span class="badge bg-danger-contrast color-danger px-3">Development</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="contact-list-user d-none d-md-block">
                                                    <label class="mail-select-checkbox">
                                                        <input type="checkbox">
                                                        <figure class="thumb-xs2">
                                                            <img class="rounded-circle" src="assets/demo/users/user6.jpg" alt="">
                                                        </figure>
                                                    </label>
                                                </td>
                                                <td class="contact-list-name"><a href="app-inbox-single.html" class="d-block fw-semibold">Sarah Paramentor</a>  <small>Account Manager, <a href="#">Acme Company</a></small>
                                                </td>
                                                <td class="contact-list-message"><span class="contact-list-phone d-block">(672) 134-849</span>  <small>sarah.paramantor@acme.com</small>
                                                </td>
                                                <td class="contact-list-badge"><span class="badge bg-info-contrast color-info px-3">Marketing</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.contact-list -->
                                </div>
                                <!-- /.px-4 -->
                                <!-- Mails Navigation -->
                                <div class="row px-4 mt-5 mb-5">
                                    <div class="col-7 text-muted mt-1"><span class="headings-font-family">Showing 1 - 20 of 289 results</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="btn-group float-right"><a href="#" class="btn fs-18 bw-1 radius-0 btn-outline-default ripple px-2"><i class="list-icon material-icons">keyboard_arrow_left</i> </a>
                                            <a href="#" class="btn fs-18 bw-1 radius-0 btn-outline-default ripple px-2"><i class="list-icon material-icons">keyboard_arrow_right</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.mail-inbox -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-footable/3.1.4/footable.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>