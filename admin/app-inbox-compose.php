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
                    <h6 class="page-title-heading mr-0 mr-r-5">Inbox Compose</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Inbox Compose</li>
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
                    <div class="col-md-12 widget-holder widget-full-content mb-5">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="mail-inbox border-all row no-gutters" style="height: 90vh; min-height: 500px">
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
                            <div class="col-md-8 col-12 d-flex flex-column">
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
                                    <div class="d-none d-sm-block text-right"><a href="#" class="btn btn-primary btn-xl px-4 h6 my-0 fs-16 fw-500">Compose</a>
                                    </div>
                                </div>
                                <!-- /.mail-inbox-header -->
                                <div class="mail-compose d-flex flex-column flex-1">
                                    <form class="d-flex flex-column flex-1">
                                        <div class="mail-compose-header px-3 py-3 d-flex align-items-center">
                                            <div class="icon-box icon-box-side icon-box-circle icon-box-circle-bg my-0 align-items-center">
                                                <header class="mx-2"><a href="#" class="bg-primary"><i class="feather feather-mail"></i></a>
                                                </header>
                                            </div>
                                            <!-- /.icon-box -->
                                            <div class="form-group flex-1 mr-3 mb-0">
                                                <input type="text" class="form-control subject-field" placeholder="Subject">
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.mail-compose-header -->
                                        <div class="form-group d-flex flex-column flex-1 mb-0">
                                            <textarea class="mb-0" data-toggle="wysiwyg"></textarea>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="mail-compose-footer py-3 px-3 d-flex align-items-md-center flex-column flex-md-row">
                                            <div class="form-group mr-3 mb-0 mr-0-rtl ml-3-rtl">
                                                <input type="email" class="form-control send-to-field" placeholder="Send To:">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group mr-3 mb-0 mr-0-rtl ml-3-rtl">
                                                <select class="selectpicker form-control" data-width="200px" data-live-search="true" title="CC: Nothing Selected" multiple="multiple">
                                                    <option>John Doe</option>
                                                    <option>Scott Adams</option>
                                                    <option>Steve Smith</option>
                                                    <option>Emily Lee</option>
                                                    <option>Christopher Palmer</option>
                                                </select>
                                            </div>
                                            <!-- /.form-group -->
                                            <button class="btn btn-default align-self-start align-self-md-stretch"><i class="feather feather-paperclip"></i>
                                            </button>
                                            <div class="modal">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body"></div>
                                                        <!-- /.modal-body -->
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                            <div class="flex-1"></div>
                                            <div>
                                                <button type="reset" class="btn btn-secondary">Clear</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        <!-- /.mail-compose-footer -->
                                    </form>
                                </div>
                                <!-- /.mail-compose -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.6.4/tinymce.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.6.4/themes/inlite/theme.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.6.4/jquery.tinymce.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>