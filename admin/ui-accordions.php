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
                    <h6 class="page-title-heading mr-0 mr-r-5">Accordions</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Accordions</li>
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
                        <div class="widget-bg-transparent">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Accordion Minimal</h5>
                                <div class="accordion accordion-minimal" id="accordion-5" role="tablist" aria-multiselectable="true">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="heading13">
                                            <h6 class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion-5" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">Collapsible Group Item #1</a></h6>
                                        </div>
                                        <div id="collapseFive" class="card-collapse collapse show" role="tabpanel" aria-labelledby="heading13">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                    <div class="card">
                                        <div class="card-header" role="tab" id="heading14">
                                            <h6 class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-5" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Collapsible Group Item #2</a></h6>
                                        </div>
                                        <div id="collapseSix" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                    <div class="card">
                                        <div class="card-header" role="tab" id="heading15">
                                            <h6 class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-5" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Collapsible Group Item #3</a></h6>
                                        </div>
                                        <div id="collapseSeven" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading15">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                        </div>
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.panel-group -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg-transparent">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Danger Accordion</h5>
                                <div class="accordion" id="accordion-3" role="tablist" aria-multiselectable="true">
                                    <div class="card card-outline-success">
                                        <div class="card-header" role="tab" id="heading4">
                                            <h6 class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" href="#collapse21" aria-expanded="true" aria-controls="collapse21">Collapsible Group Item #1</a></h6>
                                        </div>
                                        <!-- /.card-header -->
                                        <div id="collapse21" class="card-collapse collapse show" role="tabpanel" aria-labelledby="heading4">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card-collapse -->
                                    </div>
                                    <!-- /.panel -->
                                    <div class="card card-outline-success">
                                        <div class="card-header" role="tab" id="heading5">
                                            <h6 class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-3" href="#collapse22" aria-expanded="false" aria-controls="collapse22">Collapsible Group Item #2</a></h6>
                                        </div>
                                        <!-- /.card-header -->
                                        <div id="collapse22" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card-collapse -->
                                    </div>
                                    <!-- /.panel -->
                                    <div class="card card-outline-success">
                                        <div class="card-header" role="tab" id="heading6">
                                            <h6 class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-3" href="#collapse23" aria-expanded="false" aria-controls="collapse23">Collapsible Group Item #3</a></h6>
                                        </div>
                                        <!-- /.card-header -->
                                        <div id="collapse23" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card-collapse -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.panel-group -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg-transparent">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Info Accordion</h5>
                                <div class="accordion" id="accordion-2" role="tablist" aria-multiselectable="true">
                                    <div class="card card-outline-info">
                                        <div class="card-header" role="tab" id="heading7">
                                            <h6 class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapse31" aria-expanded="true" aria-controls="collapse31">Collapsible Group Item #1</a></h6>
                                        </div>
                                        <!-- /.card-header -->
                                        <div id="collapse31" class="card-collapse collapse show" role="tabpanel" aria-labelledby="heading7">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card-collapse -->
                                    </div>
                                    <!-- /.panel -->
                                    <div class="card card-outline-info">
                                        <div class="card-header" role="tab" id="heading8">
                                            <h6 class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapse32" aria-expanded="false" aria-controls="collapse32">Collapsible Group Item #2</a></h6>
                                        </div>
                                        <!-- /.card-header -->
                                        <div id="collapse32" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading8">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card-collapse -->
                                    </div>
                                    <!-- /.panel -->
                                    <div class="card card-outline-info">
                                        <div class="card-header" role="tab" id="heading9">
                                            <h6 class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapse33" aria-expanded="false" aria-controls="collapse33">Collapsible Group Item #3</a></h6>
                                        </div>
                                        <!-- /.card-header -->
                                        <div id="collapse33" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading9">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card-collapse -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.panel-group -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg-transparent">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Color Scheme Accordion</h5>
                                <div class="accordion" id="accordion-4" role="tablist" aria-multiselectable="true">
                                    <div class="card card-outline-primary">
                                        <div class="card-header" role="tab" id="heading10">
                                            <h6 class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion-4" href="#collapse41" aria-expanded="true" aria-controls="collapse41"><i class="align-middle material-icons md-18 mr-1 mr-0-rtl ml-1-rtl">extension</i> Collapsible Group Item #1</a></h6>
                                        </div>
                                        <!-- /.card-header -->
                                        <div id="collapse41" class="card-collapse collapse show" role="tabpanel" aria-labelledby="heading10">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card-collapse -->
                                    </div>
                                    <!-- /.panel -->
                                    <div class="card card-outline-primary">
                                        <div class="card-header" role="tab" id="heading11">
                                            <h6 class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-4" href="#collapse42" aria-expanded="false" aria-controls="collapse42"><i class="material-icons md-18 align-middle mr-1 mr-0-rtl ml-1-rtl">face</i> Collapsible Group Item #2</a></h6>
                                        </div>
                                        <!-- /.card-header -->
                                        <div id="collapse42" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card-collapse -->
                                    </div>
                                    <!-- /.panel -->
                                    <div class="card card-outline-primary">
                                        <div class="card-header" role="tab" id="heading12">
                                            <h6 class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-4" href="#collapse43" aria-expanded="false" aria-controls="collapse43"><i class="material-icons md-18 align-middle mr-1 mr-0-rtl ml-1-rtl">fingerprint</i> Collapsible Group Item #3</a></h6>
                                        </div>
                                        <!-- /.card-header -->
                                        <div id="collapse43" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card-collapse -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.panel-group -->
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