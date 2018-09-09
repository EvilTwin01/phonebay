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
                    <h6 class="page-title-heading mr-0 mr-r-5">Basic Tables</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Basic Tables</li>
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
                    <div class="widget-holder col-md-6">
                        <div class="widget-bg">
                            <div class="widget-body">
                                <h5 class="box-title">Basic Table</h5>
                                <p>Use basic bootstrap classes <code>.table</code> to any <code>&lt;table&gt;</code>
                                </p>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Salary</th>
                                            <th>Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Bob Williams</td>
                                            <td>$23,566</td>
                                            <td>USA</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mike Tyson</td>
                                            <td>$10,200</td>
                                            <td>Canada</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Tim Cook</td>
                                            <td>$32,190</td>
                                            <td>Netherlands</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Philip Morris</td>
                                            <td>$31,432</td>
                                            <td>UK</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Tom Hooper</td>
                                            <td>$28,768</td>
                                            <td>India</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Hulk Hogan</td>
                                            <td>$43,201</td>
                                            <td>Netherlands</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Angelina Jolie</td>
                                            <td>$12,239</td>
                                            <td>Australia</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder col-md-6">
                        <div class="widget-bg">
                            <div class="widget-body">
                                <h5 class="box-title">Striped Table</h5>
                                <p>Use <code>.table-striped</code> to add zebra-striping to any table row in <code>&lt;tbody&gt;</code>.</p>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Bob</td>
                                            <td>Williams</td>
                                            <td>@bobw</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mike</td>
                                            <td>Tyson</td>
                                            <td>@miketyson</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Tim</td>
                                            <td>Cook</td>
                                            <td>@timck</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Philip</td>
                                            <td>Morris</td>
                                            <td>@philmorris</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Tom</td>
                                            <td>Hooper</td>
                                            <td>@timhoop</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Hulk</td>
                                            <td>Hogan</td>
                                            <td>@hulkhog</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Angelina</td>
                                            <td>Jolie</td>
                                            <td>@angel</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder col-md-6">
                        <div class="widget-bg">
                            <div class="widget-body">
                                <h5 class="box-title">Bordered Table</h5>
                                <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Progress</th>
                                            <th>Deadline</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Probe Project</td>
                                            <td>
                                                <div class="progress" data-toggle="tooltip" title="80%">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>May 15, 2015</td>
                                            <td><a href="#" class="color-content"><i class="material-icons md-18">settings</i> </a><a href="#" class="color-content"><i class="material-icons md-18">clear</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Office Automatized</td>
                                            <td>
                                                <div class="progress" data-toggle="tooltip" title="30%">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"><span class="sr-only">30% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>May 15, 2015</td>
                                            <td><a href="#" class="color-content"><i class="material-icons md-18">settings</i> </a><a href="#" class="color-content"><i class="material-icons md-18">clear</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Dream successful Project</td>
                                            <td>
                                                <div class="progress" data-toggle="tooltip" title="50%">
                                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"><span class="sr-only">50% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>May 15, 2015</td>
                                            <td><a href="#" class="color-content"><i class="material-icons md-18">settings</i> </a><a href="#" class="color-content"><i class="material-icons md-18">clear</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>The sunclim bing plain</td>
                                            <td>
                                                <div class="progress" data-toggle="tooltip" title="90%">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"><span class="sr-only">90% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>May 15, 2015</td>
                                            <td><a href="#" class="color-content"><i class="material-icons md-18">settings</i> </a><a href="#" class="color-content"><i class="material-icons md-18">clear</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Dream successful Project</td>
                                            <td>
                                                <div class="progress" data-toggle="tooltip" title="40%">
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>May 15, 2015</td>
                                            <td><a href="#" class="color-content"><i class="material-icons md-18">settings</i> </a><a href="#" class="color-content"><i class="material-icons md-18">clear</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Open strategy</td>
                                            <td>
                                                <div class="progress" data-toggle="tooltip" title="50%">
                                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"><span class="sr-only">50% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>May 15, 2015</td>
                                            <td><a href="#" class="color-content"><i class="material-icons md-18">settings</i> </a><a href="#" class="color-content"><i class="material-icons md-18">clear</i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder col-md-6">
                        <div class="widget-bg">
                            <div class="widget-body">
                                <h5 class="box-title">Hover Table</h5>
                                <p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>User</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Order#21249</td>
                                            <td>Harman Beck</td>
                                            <td>$35.22</td>
                                            <td>May 15, 2015</td>
                                            <td><span class="badge badge-success py-1 px-2">Paid</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Order#34572</td>
                                            <td>Mary Adams</td>
                                            <td>$75.82</td>
                                            <td>May 12, 2015</td>
                                            <td><span class="badge badge-danger py-1 px-2">Cancel</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Order#78878</td>
                                            <td>Caleb Richard</td>
                                            <td>$45.22</td>
                                            <td>May 15, 2015</td>
                                            <td><span class="badge badge-info py-1 px-2">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Order#67686</td>
                                            <td>June Lane</td>
                                            <td>$90.23</td>
                                            <td>May 19, 2015</td>
                                            <td><span class="badge badge-warning py-1 px-2">Error</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Order#67378</td>
                                            <td>Lisa Roy</td>
                                            <td>$23.67</td>
                                            <td>April 19, 2015</td>
                                            <td><span class="badge badge-success py-1 px-2">Paid</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Order#67567</td>
                                            <td>John Doe</td>
                                            <td>$47.12</td>
                                            <td>April 28, 2015</td>
                                            <td><span class="badge badge-info py-1 px-2">Pending</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="widget-holder col-md-6">
                        <div class="widget-bg">
                            <div class="widget-body">
                                <h5 class="box-title">Condensed Table</h5>
                                <p>Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.</p>
                                <table class="table table-sm mb-4">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Salary</th>
                                            <th>Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Bob Williams</td>
                                            <td>$23,566</td>
                                            <td>USA</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mike Tyson</td>
                                            <td>$10,200</td>
                                            <td>Canada</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Tim Cook</td>
                                            <td>$32,190</td>
                                            <td>Netherlands</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Philip Morris</td>
                                            <td>$31,432</td>
                                            <td>UK</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Tom Hooper</td>
                                            <td>$28,768</td>
                                            <td>India</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Hulk Hogan</td>
                                            <td>$43,201</td>
                                            <td>Netherlands</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="widget-holder col-md-6">
                        <div class="widget-bg">
                            <div class="widget-body">
                                <h5 class="box-title">Contextual Classes</h5>
                                <p>Use contextual classes to color table rows or individual cells.</p>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-danger">
                                            <td>2</td>
                                            <td>Mike</td>
                                            <td>Tyson</td>
                                            <td>@miketyson</td>
                                        </tr>
                                        <tr class="table-warning">
                                            <td>3</td>
                                            <td>Tim</td>
                                            <td>Cook</td>
                                            <td>@timck</td>
                                        </tr>
                                        <tr class="table-info">
                                            <td>4</td>
                                            <td>Philip</td>
                                            <td>Morris</td>
                                            <td>@philmorris</td>
                                        </tr>
                                        <tr class="table-success">
                                            <td>5</td>
                                            <td>Tom</td>
                                            <td>Hooper</td>
                                            <td>@timhoop</td>
                                        </tr>
                                        <tr class="table-active">
                                            <td>1</td>
                                            <td>Bob</td>
                                            <td>Williams</td>
                                            <td>@bobw</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-4 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Primary Table</h5>
                                <p class="text-muted">Use bootstrap classes <code>thead</code>
                                </p>
                                <table class="table">
                                    <thead>
                                        <tr class="thead-inverse bg-primary">
                                            <th>Name</th>
                                            <th>Salary</th>
                                            <th>Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bob Williams</td>
                                            <td>$23,566</td>
                                            <td>USA</td>
                                        </tr>
                                        <tr>
                                            <td>Mike Tyson</td>
                                            <td>$10,200</td>
                                            <td>Canada</td>
                                        </tr>
                                        <tr>
                                            <td>Tim Cook</td>
                                            <td>$32,190</td>
                                            <td>Netherlands</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-4 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Inverse Background Table</h5>
                                <p class="text-muted">Add bootstrap background classes to each <code>tr</code>
                                </p>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Salary</th>
                                            <th>Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-info">
                                            <td>Bob Williams</td>
                                            <td>$23,566</td>
                                            <td>USA</td>
                                        </tr>
                                        <tr class="bg-info">
                                            <td>Mike Tyson</td>
                                            <td>$10,200</td>
                                            <td>Canada</td>
                                        </tr>
                                        <tr class="bg-info">
                                            <td>Tim Cook</td>
                                            <td>$32,190</td>
                                            <td>Netherlands</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-4 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Full Info Table and Hover</h5>
                                <p class="text-muted">Add <code>.full-color-table.table-hover</code>
                                </p>
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="bg-info text-inverse">
                                            <th>Name</th>
                                            <th>Salary</th>
                                            <th>Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-info">
                                            <td>Bob Williams</td>
                                            <td>$23,566</td>
                                            <td>USA</td>
                                        </tr>
                                        <tr class="table-info">
                                            <td>Mike Tyson</td>
                                            <td>$10,200</td>
                                            <td>Canada</td>
                                        </tr>
                                        <tr class="table-info">
                                            <td>Tim Cook</td>
                                            <td>$32,190</td>
                                            <td>Netherlands</td>
                                        </tr>
                                    </tbody>
                                </table>
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