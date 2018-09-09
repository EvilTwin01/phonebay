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
                    <h6 class="page-title-heading mr-0 mr-r-5">Add Products</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">title,description,price,etc</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Form Elements</li>
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
                    <!-- /.widget-holder -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Vertical Form</h5>
                                <p class="text-muted">All bootstrap element classies</p>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="l30">Product Title</label>
                                                <input class="form-control" id="l30" placeholder="Email Address" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="l30">Product URL</label>
                                                <input class="form-control" id="l30" placeholder="Email Address" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label class="form-control-label">Product Category</label>
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
                                    </div>
                                    <!-- /.form-group -->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="l31">Password</label>
                                                <div class="input-group">
                                                    <input class="form-control" id="l31" placeholder="Password" type="password"> <span class="input-group-addon"><i class="material-icons list-icon">lock</i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="l32">Left Icon</label>
                                                <div class="form-input-icon"><i class="material-icons list-icon">face</i> 
                                                    <input class="form-control" id="l32" placeholder="Left icon" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="l33">Right Icon</label>
                                                <div class="form-input-icon form-input-icon-right"><i class="material-icons list-icon">file_download</i> 
                                                    <input class="form-control" id="l33" placeholder="Right icon" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="l34">Input with Icon</label>
                                                <div class="input-group"><span class="input-group-addon"><i class="material-icons list-icon">search</i> </span>
                                                    <input class="input-error form-control" id="l34" type="text" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="l36">Disabled</label>
                                                <input class="form-control" disabled="" id="l36" placeholder="Disabled" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="l37">Readonly</label>
                                                <input class="form-control" id="l37" placeholder="Readonly" readonly="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="l38">Textarea</label>
                                        <textarea class="form-control" id="l38" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="l39">File input</label>
                                        <br>
                                        <input id="l39" type="file">
                                        <br><small class="text-muted">Technical information for user</small>
                                    </div>
                                    <div class="form-actions btn-list">
                                        <button class="btn btn-primary" type="button">Submit</button>
                                        <button class="btn btn-outline-fulfillment_team" type="button">Cancel</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Rounded Inputs</h5>
                                <p class="text-muted">Use class <code>.form-control-rounded</code>
                                </p>
                                <div class="row mr-b-50">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label" for="l81">Rounded Input</label>
                                            <input class="form-control form-control-rounded" id="l81" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label" for="l82">Disabled Rounded Input</label>
                                        <input class="form-control form-control-rounded" disabled="" id="l82" placeholder="Password" type="password">
                                    </div>
                                </div>
                                <h5 class="box-title mr-b-0">Input States</h5>
                                <p class="text-muted">Use class <code>.is-valid</code>  <code>.is-invalid</code>  <code>.invalid-feedback</code>
                                </p>
                                <div class="row mr-b-50">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer01">First name</label>
                                        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer02">Last name</label>
                                        <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer03">City</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationServer04">State</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                                        <div class="invalid-feedback">Please provide a valid state.</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationServer05">Zip</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                </div>
                                <h5 class="box-title mr-b-0">Inline Form</h5>
                                <form class="form-inline">
                                    <div class="form-group mr-2">
                                        <label class="sr-only" for="exampleInputAmount">Amount</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">$</div>
                                            <input class="form-control" id="exampleInputAmount" placeholder="Amount" type="text">
                                            <div class="input-group-addon">.00</div>
                                        </div>
                                    </div><a class="btn btn-primary" href="javascript: void(0);">Transfer cash</a>
                                </form>
                                <h5 class="box-title mr-t-50">Column Sizing</h5>
                                <form class="mr-b-30">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input class="form-control" placeholder=".col-md-2" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input class="form-control" placeholder=".col-md-3" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input class="form-control" placeholder=".col-md-4" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input class="form-control" placeholder=".col-md-2" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Vertical Forms With Left Icons</h5>
                                <p class="text-muted">Basic Form with left icons</p>
                                <form action="javascript:void(0)">
                                    <div class="form-group mr-t-30">
                                        <label for="sample1UserName">User Name</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="material-icons">person</i>
                                            </div>
                                            <input type="text" class="form-control" id="sample1UserName" placeholder="User Name">
                                        </div>
                                        <!-- /.input-group -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="sample1Password">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="material-icons">lock</i>
                                            </div>
                                            <input type="password" class="form-control" id="sample1Password" placeholder="Password">
                                        </div>
                                        <!-- /.input-group -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group mb-3">
                                        <div class="checkbox checkbox-primary">
                                            <label>
                                                <input type="checkbox" id="sample1Checkbox"> <span class="label-text">Remember me</span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-actions">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12 btn-list">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-fulfillment_team">Cancel</button>
                                                </div>
                                                <!-- /.col-sm-12 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.form-group -->
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Vertical Forms With Right Icons</h5>
                                <p class="text-muted">Basic Forms with right icons</p>
                                <form action="javascript:void(0)" class="mr-t-30">
                                    <div class="form-group">
                                        <label for="sample2UserName">User Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="sample2UserName" placeholder="User Name">
                                            <div class="input-group-addon"><i class="material-icons">person</i>
                                            </div>
                                        </div>
                                        <!-- /.input-group -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="sample2Password">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="sample2Password" placeholder="Password">
                                            <div class="input-group-addon"><i class="material-icons">lock</i>
                                            </div>
                                        </div>
                                        <!-- /.input-group -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group mb-3">
                                        <div class="checkbox checkbox-primary">
                                            <label>
                                                <input type="checkbox" id="sample2checkbox"> <span class="label-text">Remember me</span>
                                            </label>
                                        </div>
                                        <!-- /.checkbox -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-actions">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12 btn-list">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-fulfillment_team">Cancel</button>
                                                </div>
                                                <!-- /.col-sm-12 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.form-actions -->
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Horizontal form with left icons</h5>
                                <p class="text-muted">Use Bootstrap's predefined classes horizontal form</p>
                                <form class="mr-t-30" action="javascript:void(0)">
                                    <div class="form-group row">
                                        <label for="sample3UserName" class="text-sm-right col-sm-3 col-form-label">User Name</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="material-icons">person</i>
                                                </div>
                                                <input type="text" class="form-control" id="sample3UserName" placeholder="User Name">
                                            </div>
                                            <!-- /.input-group -->
                                        </div>
                                        <!-- /.col-sm-9 -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group row">
                                        <label for="sample3Password" class="text-sm-right col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="material-icons">lock</i>
                                                </div>
                                                <input type="password" class="form-control" id="sample3Password" placeholder="Password">
                                            </div>
                                            <!-- /.input-group -->
                                        </div>
                                        <!-- /.col-sm-9 -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group mb-3 mr-4">
                                        <div class="col-sm-9 ml-auto">
                                            <div class="checkbox checkbox-primary">
                                                <label>
                                                    <input type="checkbox" id="sample3checkbox"> <span class="label-text">Remember me</span>
                                                </label>
                                            </div>
                                            <!-- /.checkbox -->
                                        </div>
                                        <!-- /.col-sm-9 -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-actions">
                                        <div class="form-group row">
                                            <div class="col-sm-9 ml-auto btn-list">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="button" class="btn btn-fulfillment_team">Cancel</button>
                                            </div>
                                            <!-- /.col-sm-12 -->
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.form-actions -->
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Horizontal Form with right icons</h5>
                                <p class="text-muted">Use Bootstrap's predefined classes horizontal form</p>
                                <form class="mr-t-30" action="javascript:void(0)">
                                    <div class="form-group row">
                                        <label for="sample4UserName" class="text-sm-right col-sm-3 col-form-label">User Name</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="sample4UserName" placeholder="User Name">
                                                <div class="input-group-addon"><i class="material-icons">person</i>
                                                </div>
                                            </div>
                                            <!-- /.input-group -->
                                        </div>
                                        <!-- /.col-sm-9 -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group row">
                                        <label for="sample4Password" class="text-sm-right col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="sample4Password" placeholder="Password">
                                                <div class="input-group-addon"><i class="material-icons">lock</i>
                                                </div>
                                            </div>
                                            <!-- /.input-group -->
                                        </div>
                                        <!-- /.col-sm-9 -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group mb-3 mr-4">
                                        <div class="col-sm-9 ml-auto">
                                            <div class="checkbox checkbox-primary">
                                                <label>
                                                    <input type="checkbox" id="sample4checkbox"> <span class="label-text">Remember me</span>
                                                </label>
                                            </div>
                                            <!-- /.checkbox -->
                                        </div>
                                        <!-- /.col-sm-9 -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-actions">
                                        <div class="form-group row">
                                            <div class="col-sm-9 ml-auto btn-list">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="button" class="btn btn-fulfillment_team">Cancel</button>
                                            </div>
                                            <!-- /.col-sm-12 -->
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.form-actions -->
                                </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>