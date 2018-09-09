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
                    <h6 class="page-title-heading mr-0 mr-r-5">Form Addons</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Form Addons</li>
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
                    <div class="widget-holder col-md-12">
                        <div class="widget-bg">
                            <div class="widget-body">
                                <div class="row pd-b-20">
                                    <div class="col-md-4 mb-3">
                                        <h5 class="box-title mr-b-0">Switchery</h5>
                                        <p class="text-muted">Add the following line <code>class="js-switch" data-color="#13dafe"</code>
                                        </p>
                                        <input type="checkbox" checked="checked" class="js-switch" data-color="#d9534f">
                                        <input type="checkbox" checked="checked" class="js-switch" data-color="#e91e63">
                                        <input type="checkbox" checked="checked" class="js-switch" data-color="#9c27b0">
                                        <input type="checkbox" checked="checked" class="js-switch" data-color="#673ab7">
                                        <input type="checkbox" checked="checked" class="js-switch" data-color="#795548">
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="col-md-4 mb-3">
                                        <h5 class="box-title mr-b-0">Sizes</h5>
                                        <p class="text-muted">You can add <code>data-size="small",data-size="large"</code>
                                        </p>
                                        <input type="checkbox" checked="checked" class="js-switch" data-color="#e6614f" data-size="small">
                                        <input type="checkbox" checked="checked" class="js-switch" data-color="#38d57a">
                                        <input type="checkbox" checked="checked" class="js-switch" data-color="#ffcc02 " data-size="large">
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="col-md-4 mb-3">
                                        <h5 class="box-title mr-b-0">Secondary Color</h5>
                                        <p class="text-muted">You can apply <code>data-color="@color" data-secondary-color="@color"</code>
                                        </p>
                                        <input type="checkbox" class="js-switch" data-color="#99d683" data-secondary-color="#f96262">
                                        <input type="checkbox" class="js-switch" data-color="#13dafe" data-secondary-color="#6164c1">
                                    </div>
                                    <!-- /.col-md-4 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder col-md-12">
                        <div class="widget-bg">
                            <div class="widget-body">
                                <h5 class="box-title mr-b-0">Bootstrap Touchspin</h5>
                                <p class="text-muted">Use the <code>data-toggle="touchspin"</code> to create a spinner.</p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="verticalTouchspin">Vertical Touchspin</label>
                                            <input type="text" id="verticalTouchspin" value="34" data-toggle="touchspin" data-plugin-options='{"verticalbuttons": true }'>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="verticalTouchspin2">Side Touchspin with Postfix and Prefix</label>
                                            <input type="text" id="verticalTouchspin2" value="0" data-toggle="touchspin" data-plugin-options='{ "prefix": "pre", "postfix": "post" }'>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="verticalTouchspin3">Side Touchspin with button group</label>
                                            <div class="input-group">
                                                <input type="text" id="verticalTouchspin3" value="55" data-toggle="touchspin">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-default">Action</button>
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span>  <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <!-- /.input-group-btn -->
                                            </div>
                                            <!-- /.input-group -->
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder col-md-12">
                        <div class="widget-bg">
                            <div class="widget-body">
                                <div class="row">
                                    <div class="col-sm-3 mb-3">
                                        <h5 class="box-title mr-b-0">Checkbox Square</h5>
                                        <p class="text-muted">With Custom Background</p>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" checked="checked"> <span class="label-text">Default</span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                        <div class="checkbox checkbox-primary">
                                            <label>
                                                <input type="checkbox" checked="checked"> <span class="label-text">Primary</span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                        <div class="checkbox checkbox-pink">
                                            <label>
                                                <input type="checkbox" checked="checked"> <span class="label-text">Pink</span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                        <div class="checkbox checkbox-gray">
                                            <label>
                                                <input type="checkbox" checked="checked"> <span class="label-text">Grey</span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                        <div class="checkbox checkbox-slate">
                                            <label>
                                                <input type="checkbox" checked="checked" disabled="disabled"> <span class="label-text">Can't check this</span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                    </div>
                                    <!-- /.col-sm-3 -->
                                    <div class="col-sm-3 mb-3">
                                        <h5 class="box-title mr-b-0">Checkbox Circle</h5>
                                        <p class="text-muted">Add simple <code>checkbox-circle</code> class</p>
                                        <div class="checkbox checkbox-circle">
                                            <label>
                                                <input type="checkbox" checked="checked"> <span class="label-text">Default</span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                        <div class="checkbox checkbox-circle checkbox-primary">
                                            <label>
                                                <input type="checkbox" checked="checked"> <span class="label-text">Color Scheme</span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                        <div class="checkbox checkbox-circle checkbox-warning">
                                            <label>
                                                <input type="checkbox" checked="checked"> <span class="label-text">Warning</span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                        <div class="checkbox checkbox-circle checkbox-info">
                                            <label>
                                                <input type="checkbox" checked="checked"> <span class="label-text">Info</span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                        <div class="checkbox checkbox-circle checkbox-danger">
                                            <label>
                                                <input type="checkbox" checked="checked" disabled="disabled"> <span class="label-text">Can't touch this</span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                    </div>
                                    <!-- /.col-md-3 -->
                                    <div class="col-md-3">
                                        <h5 class="box-title mr-b-0">Checkbox Radius</h5>
                                        <p class="text-muted">Checkbox with radius</p>
                                        <div class="form-group">
                                            <div class="checkbox checkbox-rounded checkbox-default">
                                                <label>
                                                    <input type="checkbox" checked="checked"> <span class="label-text">Default</span>
                                                </label>
                                            </div>
                                            <!-- /.checkbox -->
                                            <div class="checkbox checkbox-rounded checkbox-primary">
                                                <label>
                                                    <input type="checkbox" checked="checked"> <span class="label-text">Primary</span>
                                                </label>
                                            </div>
                                            <!-- /.checkbox -->
                                            <div class="checkbox checkbox-rounded checkbox-warning">
                                                <label>
                                                    <input type="checkbox" checked="checked"> <span class="label-text">Warning</span>
                                                </label>
                                            </div>
                                            <!-- /.checkbox -->
                                            <div class="checkbox checkbox-rounded checkbox-info">
                                                <label>
                                                    <input type="checkbox" checked="checked"> <span class="label-text">Info</span>
                                                </label>
                                            </div>
                                            <!-- /.checkbox -->
                                            <div class="checkbox checkbox-rounded checkbox-danger">
                                                <label>
                                                    <input type="checkbox" checked="checked" disabled="disabled"> <span class="label-text">Can't touch this</span>
                                                </label>
                                            </div>
                                            <!-- /.checkbox -->
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col-md-3 -->
                                    <div class="col-sm-3 mb-3">
                                        <h5 class="box-title mr-b-0">Radio Box</h5>
                                        <p class="text-muted">Custom Radio box</p>
                                        <div class="form-group">
                                            <div class="radiobox">
                                                <label>
                                                    <input type="radio" name="radio1Option[]" value="1" checked="checked"> <span class="label-text">Default and Primary</span>
                                                </label>
                                            </div>
                                            <!-- /.radiobox -->
                                            <div class="radiobox radio-success">
                                                <label>
                                                    <input type="radio" name="radio1Option[]" value="4"> <span class="label-text">Success</span>
                                                </label>
                                            </div>
                                            <!-- /.radiobox -->
                                            <div class="radiobox radio-info">
                                                <label>
                                                    <input type="radio" name="radio1Option[]" value="5"> <span class="label-text">Info</span>
                                                </label>
                                            </div>
                                            <!-- /.radiobox -->
                                            <div class="radiobox radio-danger">
                                                <label>
                                                    <input type="radio" name="radio1Option[]" value="6"> <span class="label-text">Danger</span>
                                                </label>
                                            </div>
                                            <!-- /.radiobox -->
                                            <div class="radiobox radio-pink">
                                                <label>
                                                    <input type="radio" value="3" checked="checked" disabled="disabled"> <span class="label-text">Can't See This, Ok maybe not</span>
                                                </label>
                                            </div>
                                            <!-- /.radiobox -->
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col-sm-4 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Basic Slider with Grid</h5>
                                <input type="text" data-toggle="rangeslider" data-grid="true" data-grid-num="10" data-from="500" data-min="0" data-max="1000" data-force-edges="true">
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Basic Slider without Grid</h5>
                                <input type="text" data-toggle="rangeslider" data-grid-num="10" data-min="0" data-max="100" data-from="30" data-force-edges="true" data-step="10">
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Range with Min Max</h5>
                                <input type="text" data-toggle="rangeslider" data-grid-num="10" data-min="0" data-max="100" data-from="40" data-to="70" data-from-min="20" data-from-max="40" data-from-shadow="true" data-to-min="70" data-to-max="90" data-to-shadow="true"
                                data-type="double" data-step="10">
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Range with Min Max</h5>
                                <input type="text" data-toggle="rangeslider" data-grid-num="10" data-min="0" data-max="100" data-from="40" data-to="70" data-type="double" data-step="10">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/3.1.2/jquery.bootstrap-touchspin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.1.7/js/ion.rangeSlider.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>