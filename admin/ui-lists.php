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
                    <h6 class="page-title-heading mr-0 mr-r-5">List Groups</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">List Groups</li>
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
                                <h5 class="box-title">Sortable List <small>(drag to sort)</small></h5>
                                <ol class="list-group sortable">
                                    <li class="list-group-item bg-primary text-inverse d-flex">
                                        <div class="mr-auto mr-0-rtl ml-auto-rtl"><i class="material-icons list-icon">swap_vert</i> Browser compatibility</div>
                                        <div><a href="javascript:void(0);"><i class="material-icons list-icon">add</i></a>  <a href="javascript:void(0);"><i class="material-icons list-icon">edit</i></a>  <a href="javascript:void(0);"><i class="material-icons list-icon">close</i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item bg-info text-inverse d-flex">
                                        <div class="mr-auto mr-0-rtl ml-auto-rtl"><i class="material-icons list-icon">swap_vert</i> Looking for more examples templates</div>
                                        <div><a href="javascript:void(0);"><i class="material-icons list-icon">add</i></a>  <a href="javascript:void(0);"><i class="material-icons list-icon">edit</i></a>  <a href="javascript:void(0);"><i class="material-icons list-icon">close</i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="mr-auto mr-0-rtl ml-auto-rtl"><i class="material-icons list-icon">swap_vert</i> The fastest way to get started</div>
                                        <div><a href="javascript:void(0);"><i class="material-icons list-icon">add</i></a>  <a href="javascript:void(0);"><i class="material-icons list-icon">edit</i></a>  <a href="javascript:void(0);"><i class="material-icons list-icon">close</i></a>
                                        </div>
                                    </li>
                                </ol>
                                <!-- /.list-group -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg-transparent">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Nested Sortable List <small>(drag to sort)</small></h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="dd">
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="13">
                                                    <div class="dd-handle">Item 13</div>
                                                </li>
                                                <li class="dd-item" data-id="14">
                                                    <div class="dd-handle">Item 14</div>
                                                </li>
                                                <li class="dd-item" data-id="15">
                                                    <div class="dd-handle">Item 15</div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item" data-id="16">
                                                            <div class="dd-handle">Item 16</div>
                                                        </li>
                                                        <li class="dd-item" data-id="17">
                                                            <div class="dd-handle">Item 17</div>
                                                        </li>
                                                        <li class="dd-item" data-id="18">
                                                            <div class="dd-handle">Item 18</div>
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </div>
                                        <!-- /.div -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="dd">
                                            <ol class="dd-list">
                                                <li class="dd-item dd3-item" data-id="13">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content">Item 13</div>
                                                </li>
                                                <li class="dd-item dd3-item" data-id="14">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content">Item 14</div>
                                                </li>
                                                <li class="dd-item dd3-item" data-id="15">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content">Item 15</div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item dd3-item" data-id="16">
                                                            <div class="dd-handle dd3-handle"></div>
                                                            <div class="dd3-content">Item 16</div>
                                                        </li>
                                                        <li class="dd-item dd3-item" data-id="17">
                                                            <div class="dd-handle dd3-handle"></div>
                                                            <div class="dd3-content">Item 17</div>
                                                        </li>
                                                        <li class="dd-item dd3-item" data-id="18">
                                                            <div class="dd-handle dd3-handle"></div>
                                                            <div class="dd3-content">Item 18</div>
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </div>
                                        <!-- /.dd -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg-transparent">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Basic List</h5>
                                <div class="list-group"><a href="#" class="list-group-item list-group-item-action d-flex justify-content-end"><span class="mr-auto mr-0-rtl ml-auto-rtl"><i class="feather feather-mail icon icon-muted mr-2"></i>Inbox</span> <span class="badge badge-pill bg-danger-contrast fs-12 mr-1 my-auto">201</span> <i class="feather feather-chevron-right icon icon-muted my-auto"></i> </a>
                                    <a
                                    href="#" class="list-group-item list-group-item-action d-flex justify-content-end"><span class="mr-auto mr-0-rtl ml-auto-rtl"><i class="feather feather-eye icon icon-muted mr-2"></i>Profile visits</span>  <span class="badge badge-pill bg-info-contrast fs-12 mr-1 my-auto">5021</span>  <i class="feather feather-chevron-right icon icon-muted my-auto"></i> 
                                        </a><a href="#" class="list-group-item list-group-item-action d-flex justify-content-end"><span class="mr-auto mr-0-rtl ml-auto-rtl"><i class="feather feather-phone icon icon-muted mr-2"></i>Call</span> <span class="badge badge-pill bg-success-contrast fs-12 mr-1 my-auto">14</span> <i class="feather feather-chevron-right icon icon-muted my-auto"></i> </a>
                                        <a
                                        href="#" class="list-group-item list-group-item-action d-flex justify-content-end"><span class="mr-auto mr-0-rtl ml-auto-rtl"><i class="feather feather-mail icon icon-muted mr-2"></i>Messages</span>  <span class="badge badge-pill bg-primary fs-12 mr-1 my-auto">20</span>  <i class="feather feather-chevron-right icon icon-muted my-auto"></i> 
                                            </a><a href="#" class="list-group-item list-group-item-action d-flex justify-content-end"><span class="mr-auto mr-0-rtl ml-auto-rtl"><i class="feather feather-bookmark icon icon-muted mr-2"></i>Bookmarks</span> <span class="badge badge-pill bg-warning-contrast fs-12 mr-1 my-auto">14</span> <i class="feather feather-chevron-right icon icon-muted my-auto"></i> </a>
                                            <a
                                            href="#" class="list-group-item list-group-item-action d-flex justify-content-end"><span class="mr-auto mr-0-rtl ml-auto-rtl"><i class="feather feather-alert-circle icon icon-muted mr-2"></i>Notifications</span>  <span class="badge badge-pill bg-info-contrast fs-12 mr-1 my-auto">30</span> 
                                                <i
                                                class="feather feather-chevron-right icon icon-muted my-auto"></i>
                                                    </a><a href="#" class="list-group-item list-group-item-action d-flex justify-content-end"><span class="mr-auto mr-0-rtl ml-auto-rtl"><i class="feather feather-watch icon icon-muted mr-2"></i>Watch</span> <span class="badge badge-pill bg-danger-contrast fs-12 mr-1 my-auto">10</span> <i class="feather feather-chevron-right icon icon-muted my-auto"></i></a>
                                </div>
                                <!-- /.list-group -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg-transparent">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Media Boxes</h5>
                                <section class="card">
                                    <header class="card-header">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-md" placeholder="Search">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-default dropdown-toggle fs-12" data-toggle="dropdown">Action <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a class="dropdown-item" href="#">Action</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Another action</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </header>
                                    <!-- /.card-header -->
                                    <ul class="list-unstyled widget-user-list card-body">
                                        <li class="media">
                                            <div class="d-flex mr-3 mr-0-rtl ml-3-rtl">
                                                <a href="#" class="user--online thumb-xs">
                                                    <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body"><a href="#" class="btn btn-outline-default float-left-rtl">Follow</a>
                                                <h5 class="media-heading"><a href="#">Nick Lampard</a> <small>@kingnick24</small></h5>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="d-flex mr-3 mr-0-rtl ml-3-rtl">
                                                <a href="#" class="user--busy thumb-xs">
                                                    <img src="assets/demo/users/user2.jpg" class="rounded-circle" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body"><a href="#" class="btn btn-success float-left-rtl">Following</a>
                                                <h5 class="media-heading"><a href="#">Ashley Wilson</a> <small>@AshWilson123</small></h5>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="d-flex mr-3 mr-0-rtl ml-3-rtl">
                                                <a href="#" class="user--online thumb-xs">
                                                    <img src="assets/demo/users/user3.jpg" class="rounded-circle" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body"><a href="#" class="btn btn-outline-default float-left-rtl">Follow</a>
                                                <h5 class="media-heading"><a href="#">Shannon Wang Lee</a> <small>@Shalee_42</small></h5>
                                            </div>
                                        </li>
                                    </ul>
                                </section>
                                <!-- /.card -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="node_modules/nestable2/jquery.nestable.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>