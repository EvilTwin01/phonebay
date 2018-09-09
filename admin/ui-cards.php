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
                    <h6 class="page-title-heading mr-0 mr-r-5">Cards</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Cards</li>
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
                    <!-- Card with Image -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg-transparent">
                            <div class="widget-body">
                                <h5 class="box-title">Cards with Images</h5>
                                <div class="row">
                                    <div class="col-md-4 mr-b-30">
                                        <div class="card blog-post-new">
                                            <div class="card-header sub-heading-font-family border-bottom-0 p-0">
                                                <figure>
                                                    <a href="javascript:void(0);">
                                                        <img class="card-img-top" src="assets/demo/cards/blog-post-new-1.jpeg" alt="">
                                                    </a>
                                                </figure><span class="badge badge-danger text-uppercase">Maldives</span>
                                                <figure class="user-image thumb-sm">
                                                    <a href="javascript:void(0);">
                                                        <img src="assets/demo/users/user6.jpg" class="rounded-circle" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="card-body sub-heading-font-family">
                                                <h5 class="card-title sub-heading-font-family mb-3">Dive In: Maldives</h5>
                                                <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="card-action d-flex border-0"><a href="#" class="card-link fw-300 mr-auto mr-0-rtl ml-auto-rtl">July 16, 2015</a>  <a href="#" class="card-link text-uppercase"><i class="material-icons list-icon text-muted px-2">share</i> <i class="material-icons list-icon text-muted px-2">favorite_border</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mr-b-30">
                                        <div class="card blog-post-new">
                                            <div class="card-header sub-heading-font-family border-bottom-0 p-0">
                                                <figure>
                                                    <a href="javascript:void(0);">
                                                        <img class="card-img-top" src="assets/demo/cards/blog-post-new-2.jpeg" alt="">
                                                    </a>
                                                </figure><span class="badge badge-danger text-uppercase">Brazil</span>
                                                <figure class="user-image thumb-sm">
                                                    <a href="javascript:void(0);">
                                                        <img src="assets/demo/users/user2.jpg" class="rounded-circle" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="card-body sub-heading-font-family">
                                                <h5 class="card-title sub-heading-font-family mb-3">Plan a Trip: Brazil</h5>
                                                <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="card-action d-flex border-0"><a href="#" class="card-link fw-300 mr-auto mr-0-rtl ml-auto-rtl">December 05, 2016</a>  <a href="#" class="card-link text-uppercase"><i class="material-icons list-icon text-muted px-2">share</i> <i class="material-icons list-icon text-muted px-2">favorite_border</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mr-b-30">
                                        <div class="card blog-post-new">
                                            <div class="card-header sub-heading-font-family border-bottom-0 p-0">
                                                <figure>
                                                    <a href="javascript:void(0);">
                                                        <img class="card-img-top" src="assets/demo/cards/blog-post-new-3.jpeg" alt="">
                                                    </a>
                                                </figure><span class="badge badge-danger text-uppercase">London</span>
                                                <figure class="user-image thumb-sm">
                                                    <a href="javascript:void(0);">
                                                        <img src="assets/demo/users/user4.jpg" class="rounded-circle" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="card-body sub-heading-font-family">
                                                <h5 class="card-title sub-heading-font-family mb-3">The Freedom: London</h5>
                                                <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="card-action d-flex border-0"><a href="#" class="card-link fw-300 mr-auto mr-0-rtl ml-auto-rtl">January 25, 2017</a>  <a href="#" class="card-link text-uppercase"><i class="material-icons list-icon text-muted px-2">share</i> <i class="material-icons list-icon text-muted px-2">favorite_border</i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Blog Posts -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg-transparent">
                            <div class="widget-body">
                                <h5 class="box-title">Blog Posts</h5>
                                <div class="row">
                                    <div class="col-md-4 mr-b-30 d-flex">
                                        <div class="blog-post blog-post-card text-center">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/demo/cards/blog-post-1.jpg" alt="Blog Post 1">
                                                </a>
                                            </figure>
                                            <header>
                                                <ul class="blog-post-share-links list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="bg-primary ripple toggle-link"><i class="list-icon social-icons">sharethis</i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="bg-facebook ripple"><i class="list-icon social-icons">facebook</i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="bg-twitter ripple"><i class="list-icon social-icons">twitter</i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="bg-dribbble ripple"><i class="list-icon social-icons">dribble</i></a>
                                                    </li>
                                                </ul>
                                                <div class="block text-muted blog-post-tags">Posted in
                                                    <ul class="ml-1 inline-block list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#"><strong>Challenge</strong></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"><strong>Flowers</strong></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h4 class="h3 fw-300 m-1 blog-post-title"><a href="#">5 Amazing places to visit before you die</a></h4>
                                            </header>
                                            <footer class="mr-t-30"><a href="#" class="btn btn-outline-primary btn-rounded">Continue Reading</a>
                                            </footer>
                                        </div>
                                        <!-- /.blog-post -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="col-md-4 mr-b-30 d-flex">
                                        <div class="blog-post blog-post-card text-center">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/demo/cards/blog-post-2.jpeg" alt="">
                                                </a>
                                            </figure>
                                            <header>
                                                <ul class="blog-post-share-links list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="bg-primary ripple toggle-link"><i class="list-icon social-icons">sharethis</i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="bg-facebook ripple"><i class="list-icon social-icons">facebook</i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="bg-twitter ripple"><i class="list-icon social-icons">twitter</i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="bg-dribbble ripple"><i class="list-icon social-icons">dribble</i></a>
                                                    </li>
                                                </ul>
                                                <div class="text-muted blog-post-tags">Posted in
                                                    <ul class="ml-1 inline-block list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#"><strong>Challenge</strong></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"><strong>Flowers</strong></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h4 class="h3 fw-300 m-1 blog-post-title"><a href="#">8 Practical ways to improve yourself</a></h4>
                                            </header>
                                            <footer class="mr-t-30"><a href="#" class="btn btn-outline-primary btn-rounded">Continue Reading</a>
                                            </footer>
                                        </div>
                                        <!-- /.blog-post -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="col-md-4 mr-b-30 d-flex">
                                        <div class="blog-post blog-post-card text-center">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/demo/cards/blog-post-3.jpeg" alt="">
                                                </a>
                                            </figure>
                                            <header>
                                                <ul class="blog-post-share-links list-unstyled list-inline">
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="bg-primary ripple toggle-link"><i class="list-icon social-icons">sharethis</i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="bg-facebook ripple"><i class="list-icon social-icons">facebook</i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="bg-twitter ripple"><i class="list-icon social-icons">twitter</i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="bg-dribbble ripple"><i class="list-icon social-icons">dribble</i></a>
                                                    </li>
                                                </ul>
                                                <div class="block text-muted blog-post-tags">Posted in
                                                    <ul class="ml-1 inline-block list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#"><strong>Challenge</strong></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"><strong>Flowers</strong></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h4 class="h3 fw-300 m-1 blog-post-title"><a href="#">3 Benefits of waking up early</a></h4>
                                            </header>
                                            <footer class="mr-t-30"><a href="#" class="btn btn-outline-primary btn-rounded">Continue Reading</a>
                                            </footer>
                                        </div>
                                        <!-- /.blog-post -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg-transparent -->
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