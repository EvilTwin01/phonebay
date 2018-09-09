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
                    <h6 class="page-title-heading mr-0 mr-r-5">Blog Single</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Blog Single</li>
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
                    <div class="widget-holder col-md-8 blog-page-widget">
                        <div class="widget-bg-transparent">
                            <div class="widget-body">
                                <div class="blog-post-single blog-post-card">
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
                                    <div class="blog-post-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur turpis nisl, posuere in elit molestie, condimentum lobortis felis. Aenean lacus eros, congue ac consectetur eget, efficitur sodales arcu.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat dolor metus, ut laoreet quam blandit a. Duis et justo nec ex venenatis tincidunt at ut enim. Vestibulum in felis in urna tempus placerat.</p>
                                        <p>Sed cursus est libero, sed facilisis ipsum aliquam eget. Integer cursus, tortor et dapibus efficitur, magna enim iaculis ipsum, quis luctus purus massa a purus. Nulla hendrerit accumsan congue. Cras scelerisque
                                            velit ut tortor sollicitudin, vitae tristique risus rhoncus. Fusce at est sem. Cras quis sem ac nisi posuere feugiat non at lectus. Nunc vel tellus vel ante ultrices facilisis.</p>
                                        <p>Cras mauris odio, sodales et velit in, auctor dapibus ipsum. Aliquam ac ornare nisi. Curabitur vel tempor mauris. Praesent et maximus nulla. Pellentesque nec lacinia mi. Etiam eros ligula, consequat eu tincidunt
                                            et, molestie sed erat. Integer vitae arcu quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                        <p>Praesent ultricies molestie odio, in finibus orci volutpat id. In hac habitasse platea dictumst. Etiam ante dui, placerat in aliquet eu, commodo at tortor. Vivamus sit amet sapien quam. Vivamus lorem ante, suscipit
                                            in lectus vel, tempus dignissim mauris. Nullam feugiat vulputate tincidunt.</p>
                                        <p>Ut condimentum velit in est dignissim sollicitudin. Nunc elementum velit consequat laoreet bibendum. Mauris non turpis tincidunt ligula lacinia eleifend eu eu est. Pellentesque ac ultrices orci. Donec elementum
                                            finibus vulputate. Phasellus lobortis purus odio, vel sollicitudin lorem lobortis vel. Mauris nec dui in turpis convallis ultricies. In tincidunt ante est, et bibendum arcu tempor quis. Sed a sapien ex. Maecenas
                                            id est egestas magna luctus ornare. Aliquam placerat porta tortor at elementum.</p>
                                    </div>
                                    <!-- /.blog-post-body -->
                                </div>
                                <!-- /.blog-post -->
                                <div id="blog-post-comments" class="blog-post-comments">
                                    <h3>3 Comments</h3>
                                    <hr>
                                    <div class="comment media">
                                        <figure class="thumb-sm">
                                            <img src="assets/demo/users/user1.jpg" alt="User 1" class="rounded-circle"> <a href="#" class="text-indent-full pos-0">User 1</a>
                                        </figure>
                                        <div class="media-body comment-body">
                                            <div class="comment-meta mb-3">
                                                <h5 class="my-0"><a href="#" class="headings-color">John Doe</a></h5><small>Replied on 05:40 AM, 2 December, 2017</small>
                                            </div>
                                            <!-- /.comment-meta -->
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat dolor metus, ut laoreet quam blandit a. Duis et justo nec ex venenatis tincidunt at ut enim. Vestibulum in felis in urna tempus placerat.</p>
                                            <a
                                            href="#" class="btn btn-sm btn-primary">Reply</a>
                                        </div>
                                        <!-- /.media-body -->
                                        <div class="replies">
                                            <div class="comment media">
                                                <figure class="thumb-sm">
                                                    <img src="assets/demo/users/user1.jpg" alt="User 1" class="rounded-circle"> <a href="#" class="text-indent-full pos-0">User 1</a>
                                                </figure>
                                                <div class="media-body comment-body">
                                                    <div class="comment-meta mb-3">
                                                        <h5 class="my-0"><a href="#" class="headings-color">John Doe</a></h5><small>Replied on 05:40 AM, 2 December, 2017</small>
                                                    </div>
                                                    <!-- /.comment-meta -->
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat dolor metus, ut laoreet quam blandit a. Duis et justo nec ex venenatis tincidunt at ut enim. Vestibulum in felis in urna tempus
                                                        placerat.</p><a href="#" class="btn btn-sm btn-primary">Reply</a>
                                                </div>
                                                <!-- /.media-body -->
                                            </div>
                                            <!-- /.comment -->
                                        </div>
                                        <!-- /.replies -->
                                    </div>
                                    <!-- /.comment -->
                                    <div class="comment-form mt-5">
                                        <form action="#" method="post">
                                            <h3>Reply to this post</h3>
                                            <hr>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Name:</label>
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                                <!-- /.form-group -->
                                                <div class="form-group col-md-6">
                                                    <label>Email:</label>
                                                    <input type="email" name="email" class="form-control">
                                                </div>
                                                <!-- /.form-group -->
                                            </div>
                                            <!-- /.row -->
                                            <div class="form-group">
                                                <label>Message:</label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                            <!-- /.form-group -->
                                            <button type="button" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                    <!-- /.comment-form -->
                                </div>
                                <!-- /.blog-post-comment -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder.blog-page -->
                    <aside class="widget-holder col-md-4 blog-page-sidebar">
                        <div class="widget-bg-transparent">
                            <div class="widget-body">
                                <section class="widget widget_search">
                                    <h2 class="widget-title">Search Our Site</h2>
                                    <form class="search-form" role="search" method="get" action="#">
                                        <div class="form-group">
                                            <label for="search-form-1" class="sr-only">Search For</label>
                                            <input id="search-form-1" class="search-field form-control" placeholder="Type and hit enter" value="" name="s" type="search">
                                        </div>
                                        <!-- /.form-group -->
                                        <button class="search-submit btn btn-primary px-4" type="submit">Search</button>
                                    </form>
                                </section>
                                <section class="widget widget_tag_cloud">
                                    <h2 class="widget-title">Top Tags</h2>
                                    <div class="tagcloud"><a href="#" class="tag-cloud-link" style="font-size: 8pt" aria-label="business - 8 posts">business</a>  <a href="#" class="tag-cloud-link" style="font-size: 24pt" aria-label="minimal - 24 posts">minimal</a>  <a href="#"
                                        class="tag-cloud-link" style="font-size: 15pt" aria-label="relax - 15 posts">relax</a>  <a href="#" class="tag-cloud-link" style="font-size: 28pt" aria-label="amazing - 28 posts">amazing</a>  <a href="#" class="tag-cloud-link"
                                        style="font-size: 12pt" aria-label="nature - 12 posts">nature</a>  <a href="#" class="tag-cloud-link" style="font-size: 18pt" aria-label="music - 18 posts">music</a>  <a href="#" class="tag-cloud-link" style="font-size: 26pt"
                                        aria-label="videos - 26 posts">videos</a>  <a href="#" class="tag-cloud-link" style="font-size: 10pt" aria-label="youtube - 10 posts">youtube</a>
                                    </div>
                                    <!-- /.tagcloud -->
                                </section>
                                <section class="widget widget_archives">
                                    <h2 class="widget-title">Archives</h2>
                                    <ul>
                                        <li><a href="#">Jan 2017</a>( 40 )</li>
                                        <li><a href="#">Dec 2016</a>( 5 )</li>
                                        <li><a href="#">Nov 2016</a>( 18 )</li>
                                        <li><a href="#">Oct 2016</a>( 22 )</li>
                                        <li><a href="#">Sept 2016</a>( 64 )</li>
                                        <li><a href="#">Aug 2016</a>( 48 )</li>
                                        <li><a href="#">Jul 2016</a>( 28 )</li>
                                    </ul>
                                </section>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </aside>
                    <!-- /.widget-holder.blog-page -->
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