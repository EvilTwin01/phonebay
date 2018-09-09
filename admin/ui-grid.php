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
                    <h6 class="page-title-heading mr-0 mr-r-5">Grid Page</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Grid Page</li>
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
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Grid Options</h5>
                                <p class="text-muted">See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
                                <table class="table table-bordered table-striped table-responsive">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Extra small devices <small>Phones</small>
                                                <br><small>(&#60;576px)</small>
                                            </th>
                                            <th>Small devices <small>Landscape Phones</small>
                                                <br><small>(&#8805;576px)</small>
                                            </th>
                                            <th>Medium devices <small>Dekstops</small>
                                                <br><small>(&#8805;768px)</small>
                                            </th>
                                            <th>Large devices <small>Dekstops</small>
                                                <br><small>(&#8805;992px)</small>
                                            </th>
                                            <th>Extra large devices <small>Dekstops</small>
                                                <br><small>(&#8805;1200px)</small>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Grid behavior</th>
                                            <td>Horizontal at all times</td>
                                            <td colspan="4">Collapsed to start, horizontal above breakpoints</td>
                                        </tr>
                                        <tr>
                                            <th>Max container width</th>
                                            <td>None (auto)</td>
                                            <td>540px</td>
                                            <td>750px</td>
                                            <td>970px</td>
                                            <td>1170px</td>
                                        </tr>
                                        <tr>
                                            <th>Class prefix</th>
                                            <td><code>.col-</code>
                                            </td>
                                            <td><code>.col-sm-</code>
                                            </td>
                                            <td><code>.col-md-</code>
                                            </td>
                                            <td><code>.col-lg-</code>
                                            </td>
                                            <td><code>.col-xl-</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th># of columns</th>
                                            <td colspan="5">12</td>
                                        </tr>
                                        <tr>
                                            <th>Max column width</th>
                                            <td>Auto</td>
                                            <td>60px</td>
                                            <td>78px</td>
                                            <td>95px</td>
                                            <td>112px</td>
                                        </tr>
                                        <tr>
                                            <th>Gutter width</th>
                                            <td colspan="5">30px (15px on each side of a column)</td>
                                        </tr>
                                        <tr>
                                            <th>Nestable</th>
                                            <td colspan="5">Yes</td>
                                        </tr>
                                        <tr>
                                            <th>Offsets</th>
                                            <td colspan="5">Yes</td>
                                        </tr>
                                        <tr>
                                            <th>Column Ordering</th>
                                            <td colspan="5">Yes</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="text-muted">Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, applying any <code>.col-md-</code> class to an element will
                                    not only affect its styling on medium devices but also on large devices if a <code>.col-lg-</code> class is not present.</p>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Example: Stacked-To-Horizontal</h5>
                                <p class="text-muted">Using a single set of <code>.col-md-*</code> grid classes, you can create a default grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop
                                    (medium) devices. Place grid columns in any <code>.row</code>.</p>
                                <div class="row show-grid">
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                </div>
                                <div class="row show-grid">
                                    <div class="col-md-8">.col-md-8</div>
                                    <div class="col-md-4">.col-md-4</div>
                                </div>
                                <div class="row show-grid">
                                    <div class="col-md-4">.col-md-4</div>
                                    <div class="col-md-4">.col-md-4</div>
                                    <div class="col-md-4">.col-md-4</div>
                                </div>
                                <div class="row show-grid">
                                    <div class="col-md-6">.col-md-6</div>
                                    <div class="col-md-6">.col-md-6</div>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Example: Mobile and Desktop</h5>
                                <p class="text-muted">Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-*</code>  <code>.col-md-*</code> to your columns. See the example below for a better idea of
                                    how it all works.</p>
                                <div class="row show-grid">
                                    <div class="col-12 col-md-8">.col-12 .col-md-8</div>
                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                </div>
                                <div class="row show-grid">
                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                </div>
                                <div class="row show-grid">
                                    <div class="col-6">.col-6</div>
                                    <div class="col-6">.col-6</div>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Example: Mobile, Tablet, Dekstops</h5>
                                <p class="text-muted">Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</p>
                                <div class="row show-grid">
                                    <div class="col-12 col-sm-6 col-md-8">.col-12 .col-sm-6 .col-md-8</div>
                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                </div>
                                <div class="row show-grid">
                                    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
                                    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
                                    <!-- Optional: clear the XS cols if their content doesn't match in height -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Responsive Column Resets</h5>
                                <p class="text-muted">With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code> and
                                    our responsive utility classes.</p>
                                <div class="row show-grid">
                                    <div class="col-6 col-sm-3">.col-6 .col-sm-3
                                        <br>Resize your viewport or check it out on your phone for an example.</div>
                                    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
                                    <!-- Add the extra clearfix for only the required viewport -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
                                    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Offsetting Columns</h5>
                                <p class="text-muted">With the move to flexbox, we no longer have style of offset classes. Instead, use margin utilities like <code>.mr-auto</code> to force sibling columns away from one another.</p>
                                <div class="row show-grid">
                                    <div class="col-md-4">.col-md-4</div>
                                    <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                                </div>
                                <div class="row show-grid">
                                    <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
                                    <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
                                </div>
                                <div class="row show-grid">
                                    <div class="col-md-6 mx-auto">.col-md-6 .mx-auto</div>
                                </div>
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