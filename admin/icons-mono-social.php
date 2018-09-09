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
                    <h6 class="page-title-heading mr-0 mr-r-5">Social Icons</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Social Icons</li>
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
                                <h5 class="box-title mr-b-0">Mono Social Icons Font</h5>
                                <p class="text-muted">Sample code: <code>&lt;i class="social-icons list-icon"&gt;facebook&lt;/i&gt;</code>
                                </p>
                                <div class="row text-center">
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">fivehundredpx</i>
                                        <br><small>fivehundredpx</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">aboutme</i>
                                        <br><small>aboutme</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">addme</i>
                                        <br><small>addme</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">amazon</i>
                                        <br><small>amazon</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">aol</i>
                                        <br><small>aol</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">appstorealt</i>
                                        <br><small>appstorealt</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">appstore</i>
                                        <br><small>appstore</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">apple</i>
                                        <br><small>apple</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">bebo</i>
                                        <br><small>bebo</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">behance</i>
                                        <br><small>behance</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">bing</i>
                                        <br><small>bing</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">blip</i>
                                        <br><small>blip</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">blogger</i>
                                        <br><small>blogger</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">coroflot</i>
                                        <br><small>coroflot</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">daytum</i>
                                        <br><small>daytum</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">delicious</i>
                                        <br><small>delicious</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">designbump</i>
                                        <br><small>designbump</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">designfloat</i>
                                        <br><small>designfloat</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">deviantart</i>
                                        <br><small>deviantart</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">diggalt</i>
                                        <br><small>diggalt</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">digg</i>
                                        <br><small>digg</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">dribble</i>
                                        <br><small>dribbble</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">drupal</i>
                                        <br><small>drupal</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">ebay</i>
                                        <br><small>ebay</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">email</i>
                                        <br><small>email</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">emberapp</i>
                                        <br><small>emberapp</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">etsy</i>
                                        <br><small>etsy</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">facebook</i>
                                        <br><small>facebook</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">feedburner</i>
                                        <br><small>feedburner</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">flickr</i>
                                        <br><small>flickr</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">foodspotting</i>
                                        <br><small>foodspotting</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">forrst</i>
                                        <br><small>forrst</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">foursquare</i>
                                        <br><small>foursquare</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">friendsfeed</i>
                                        <br><small>friendsfeed</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">friendstar</i>
                                        <br><small>friendstar</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">gdgt</i>
                                        <br><small>gdgt</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">github</i>
                                        <br><small>github</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">githubalt</i>
                                        <br><small>githubalt</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">googlebuzz</i>
                                        <br><small>googlebuzz</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">googleplus</i>
                                        <br><small>googleplus</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">googletalk</i>
                                        <br><small>googletalk</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">gowallapin</i>
                                        <br><small>gowallapin</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">gowalla</i>
                                        <br><small>gowalla</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">grooveshark</i>
                                        <br><small>grooveshark</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">heart</i>
                                        <br><small>heart</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">hyves</i>
                                        <br><small>hyves</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">icondock</i>
                                        <br><small>icondock</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">icq</i>
                                        <br><small>icq</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">identica</i>
                                        <br><small>identica</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">imessage</i>
                                        <br><small>imessage</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">itunes</i>
                                        <br><small>itunes</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">lastfm</i>
                                        <br><small>lastfm</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">linkedin</i>
                                        <br><small>linkedin</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">meetup</i>
                                        <br><small>meetup</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">metacafe</i>
                                        <br><small>metacafe</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">mixx</i>
                                        <br><small>mixx</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">mobileme</i>
                                        <br><small>mobileme</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">mrwong</i>
                                        <br><small>mrwong</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">msn</i>
                                        <br><small>msn</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">myspace</i>
                                        <br><small>myspace</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">newsvine</i>
                                        <br><small>newsvine</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">paypal</i>
                                        <br><small>paypal</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">photobucket</i>
                                        <br><small>photobucket</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">picasa</i>
                                        <br><small>picasa</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">pinterest</i>
                                        <br><small>pinterest</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">podcast</i>
                                        <br><small>podcast</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">posterous</i>
                                        <br><small>posterous</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">qik</i>
                                        <br><small>qik</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">quora</i>
                                        <br><small>quora</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">reddit</i>
                                        <br><small>reddit</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">retweet</i>
                                        <br><small>retweet</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">rss</i>
                                        <br><small>rss</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">scribd</i>
                                        <br><small>scribd</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">sharethis</i>
                                        <br><small>sharethis</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">skype</i>
                                        <br><small>skype</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">slashdot</i>
                                        <br><small>slashdot</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">slideshare</i>
                                        <br><small>slideshare</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">smugmug</i>
                                        <br><small>smugmug</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">soundcloud</i>
                                        <br><small>soundcloud</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">spotify</i>
                                        <br><small>spotify</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">squidoo</i>
                                        <br><small>squidoo</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">stackoverflow</i>
                                        <br><small>stackoverflow</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">star</i>
                                        <br><small>star</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">stumbleupon</i>
                                        <br><small>stumbleupon</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">technorati</i>
                                        <br><small>technorati</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">tumblr</i>
                                        <br><small>tumblr</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">twitterbird</i>
                                        <br><small>twitterbird</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">twitter</i>
                                        <br><small>twitter</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">viddler</i>
                                        <br><small>viddler</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">vimeo</i>
                                        <br><small>vimeo</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">virb</i>
                                        <br><small>virb</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">www</i>
                                        <br><small>www</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">wikipedia</i>
                                        <br><small>wikipedia</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">windows</i>
                                        <br><small>windows</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">wordpress</i>
                                        <br><small>wordpress</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">xing</i>
                                        <br><small>xing</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">yahoobuzz</i>
                                        <br><small>yahoobuzz</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">yahoo</i>
                                        <br><small>yahoo</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">yelp</i>
                                        <br><small>yelp</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">youtube</i>
                                        <br><small>youtube</small>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">instagram</i>
                                        <br><small>instagram</small>
                                    </div>
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