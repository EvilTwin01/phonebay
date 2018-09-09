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
                    <h6 class="page-title-heading mr-0 mr-r-5">Select and MultiSelect</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Select and MultiSelect</li>
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
                                <h5 class="box-title mr-b-0">Select2</h5>
                                <p class="text-muted">Select2 for custom search and select. Use <code>data-toggle="select2"</code>
                                </p>
                                <form action="javascript:void(0);">
                                    <div class="form-group">
                                        <label class="form-control-label">Select a State</label>
                                        <select class="m-b-10 form-control" data-placeholder="Choose" data-toggle="select2">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label class="form-control-label">Multiple Select</label>
                                        <select class="form-control" multiple="multiple" data-toggle="select2" data-plugin-options='{"minimumResultsForSearch": -1}'>
                                            <option selected="selected">Mustard</option>
                                            <option selected="selected">Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label class="form-control-label">Disable Search</label>
                                        <select class="form-control" data-toggle="select2" data-plugin-options='{"minimumResultsForSearch": -1}'>
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder col-md-6">
                        <div class="widget-bg">
                            <div class="widget-body">
                                <h5 class="box-title mr-b-0">Bootstrap Select Boxes</h5>
                                <p class="text-muted">Just add bootstrap-select-min.js and same css &amp; add class <code>.selectpicker</code>
                                </p>
                                <form action="javascript:void(0);">
                                    <div class="form-group">
                                        <label for="selectpicker1" class="form-control-label">Select Box</label>
                                        <select id="selectpicker1" class="form-control selectpicker">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="selectpicker1" class="form-control-label">Multiple Selection</label>
                                        <select class="selectpicker form-control" multiple="multiple">
                                            <option selected="selected">Mustard</option>
                                            <option selected="selected">Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label class="form-control-label">With coloured Button classes</label>
                                        <select class="selectpicker form-control" data-live-search="true" data-style="btn btn-primary">
                                            <option>Hot Dog, Fries and a Soda</option>
                                            <option>Burger, Shake and a Smile</option>
                                            <option>Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder col-md-12">
                        <div class="widget-bg">
                            <div class="widget-body">
                                <h5 class="box-title mr-b-0">Bootstrap Multi Select</h5>
                                <p class="text-muted">Use a <code>data-toggle="multiselect"</code> as your input element.</p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="fw-700">Pre-selected Options</p>
                                        <select id="pre-selected-options" class="form-control" data-toggle="multiselect" multiple="multiple">
                                            <option value="elem_1">elem 1</option>
                                            <option value="elem_2">elem 2</option>
                                            <option value="elem_3">elem 3</option>
                                            <option value="elem_4" selected="selected">elem 4</option>
                                            <option value="elem_5" selected="selected">elem 5</option>
                                            <option value="elem_6">elem 6</option>
                                            <option value="elem_7">elem 7</option>
                                            <option value="elem_8">elem 8</option>
                                            <option value="elem_9">elem 9</option>
                                            <option value="elem_10">elem 10</option>
                                            <option value="elem_11">elem 11</option>
                                            <option value="elem_12">elem 12</option>
                                            <option value="elem_13">elem 13</option>
                                            <option value="elem_14">elem 14</option>
                                            <option value="elem_15">elem 15</option>
                                            <option value="elem_16">elem 16</option>
                                            <option value="elem_17">elem 17</option>
                                            <option value="elem_18">elem 18</option>
                                            <option value="elem_19">elem 19</option>
                                            <option value="elem_20">elem 20</option>
                                        </select>
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="col-md-4">
                                        <p class="fw-700">Optgroup</p>
                                        <select multiple="multiple" id="optgroup" data-toggle="multiselect" name="optgroup[]">
                                            <optgroup label="Friends">
                                                <option value="1">Yoda</option>
                                                <option value="2" selected="selected" disabled="disabled">Obiwan</option>
                                            </optgroup>
                                            <optgroup label="Enemies">
                                                <option value="3">Palpatine</option>
                                                <option value="4" disabled="disabled">Darth Vader</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="col-md-4">
                                        <p class="fw-700">Public Methods</p>
                                        <select multiple="multiple" id="public-methods" data-toggle="multiselect" name="public-methods[]">
                                            <option value="elem_1">elem 1</option>
                                            <option value="elem_2" disabled="disabled">elem 2</option>
                                            <option value="elem_3">elem 3</option>
                                            <option value="elem_4">elem 4</option>
                                            <option value="elem_5">elem 5</option>
                                            <option value="elem_6">elem 6</option>
                                            <option value="elem_7">elem 7</option>
                                            <option value="elem_8">elem 8</option>
                                            <option value="elem_9">elem 9</option>
                                            <option value="elem_10">elem 10</option>
                                            <option value="elem_11">elem 11</option>
                                            <option value="elem_12">elem 12</option>
                                            <option value="elem_13">elem 13</option>
                                            <option value="elem_14">elem 14</option>
                                            <option value="elem_15">elem 15</option>
                                            <option value="elem_16">elem 16</option>
                                            <option value="elem_17">elem 17</option>
                                            <option value="elem_18">elem 18</option>
                                            <option value="elem_19">elem 19</option>
                                            <option value="elem_20">elem 20</option>
                                        </select>
                                        <div class="button-box mr-t-20"><a id="select-all" data-multiselect-target="#public-methods" data-multiselect-method="select_all" data-event="click" class="btn btn-outline-danger mr-r-10 mr-b-10" href="#">Select all</a>  <a id="deselect-all" data-multiselect-target="#public-methods"
                                            data-multiselect-method="deselect_all" data-event="click" class="btn btn-outline-info mr-r-10 mr-b-10" href="#">Deselect all</a>  <a id="add-option" data-multiselect-target="#public-methods" data-multiselect-method="addOption"
                                            data-event="click" class="btn btn-outline-success mr-r-10 mr-b-10" href="#">Add option</a>  <a id="refresh" data-multiselect-target="#public-methods" data-multiselect-method="refresh" data-event="click" class="btn btn-outline-warning mr-r-10 mr-b-10"
                                            href="#">Refresh</a>
                                        </div>
                                        <!-- /.button-box -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>