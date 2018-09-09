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
                    <h6 class="page-title-heading mr-0 mr-r-5">FAQS Page</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">FAQS Page</li>
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
                    <ul class="col-md-3 list-unstyled">
                        <li class="widget-holder widget-bg">
                            <a href="#accordion1" class="widget-body d-flex">
                                <div class="mr-3 mr-0-rtl ml-3-rtl"><i class="material-icons text-primary">store</i>
                                </div>
                                <div>
                                    <h5 class="mt-0 mb-1 fs-16 fw-400 sub-heading-font-family">Common FAQ</h5><small>Lorem ipsum dolor sit amet.</small>
                                </div>
                            </a>
                        </li>
                        <li class="widget-holder widget-bg">
                            <a href="#accordion2" class="widget-body d-flex">
                                <div class="mr-3 mr-0-rtl ml-3-rtl"><i class="material-icons text-info">lightbulb_outline</i>
                                </div>
                                <div>
                                    <h5 class="mt-0 mb-1 fs-16 fw-400 sub-heading-font-family">Knowledge Base</h5><small>Lorem ipsum dolor sit amet.</small>
                                </div>
                            </a>
                        </li>
                        <li class="widget-holder widget-bg">
                            <a href="#accordion3" class="widget-body d-flex">
                                <div class="mr-3 mr-0-rtl ml-3-rtl"><i class="material-icons text-danger">help_outline</i>
                                </div>
                                <div>
                                    <h5 class="mt-0 mb-1 fs-16 fw-400 sub-heading-font-family">Purchase FAQ</h5><small>Lorem ipsum dolor sit amet.</small>
                                </div>
                            </a>
                        </li>
                        <li class="widget-holder widget-bg">
                            <a href="#accordion4" class="widget-body d-flex">
                                <div class="mr-3 mr-0-rtl ml-3-rtl"><i class="material-icons text-success">card_travel</i>
                                </div>
                                <div>
                                    <h5 class="mt-0 mb-1 fs-16 fw-400 sub-heading-font-family">Buisness FAQ</h5><small>Lorem ipsum dolor sit amet.</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.col-md-3 -->
                    <div class="col-md-9">
                        <div class="widget-holder">
                            <div class="widget-bg">
                                <div class="widget-body clearfix">
                                    <div class="accordion accordion-minimal" id="accordion1" role="tablist" aria-multiselectable="true">
                                        <div class="d-flex mb-4 mt-2">
                                            <div class="mr-3 mr-0-rtl ml-3-rtl"><i class="material-icons fs-36 text-primary">store</i>
                                            </div>
                                            <div class="d-flex flex-1">
                                                <div>
                                                    <h5 class="mt-0 mb-1 fs-22 fw-400 sub-heading-font-family">Common FAQ</h5><small>Lorem ipsum dolor sit amet.</small>
                                                </div><span class="flex-1"></span>  <a href="#" class="text-uppercase headings-font-family"><small>Back To Top</small></a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingOne">
                                                <h5 class="card-title fw-300"><a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</strong></a></h5>
                                            </div>
                                            <div id="collapseOne" class="card-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingTwo">
                                                <h5 class="card-title fw-300"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><strong>Ut enim ad minim veniam, quis nostrud exercitation?</strong></a></h5>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingThree">
                                                <h5 class="card-title fw-300"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><strong>Excepteur sint occaecat cupidatat non proident?</strong></a></h5>
                                            </div>
                                            <div id="collapseThree" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header border-0" role="tab" id="headingFour">
                                                <h5 class="card-title fw-300"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><strong>Duis aute irure dolor in reprehenderit?</strong></a></h5>
                                            </div>
                                            <div id="collapseFour" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.accordion -->
                                </div>
                                <!-- /.widget-body -->
                            </div>
                            <!-- /.widget-bg -->
                        </div>
                        <!-- /.widget-holder -->
                        <div class="widget-holder">
                            <div class="widget-bg">
                                <div class="widget-body clearfix">
                                    <div class="accordion accordion-minimal" id="accordion2" role="tablist" aria-multiselectable="true">
                                        <div class="d-flex mb-4 mt-2">
                                            <div class="mr-3 mr-0-rtl ml-3-rtl"><i class="material-icons fs-36 text-info">lightbulb_outline</i>
                                            </div>
                                            <div class="d-flex flex-1">
                                                <div>
                                                    <h5 class="mt-0 mb-1 fs-22 fw-400 sub-heading-font-family">Knowledge Base</h5><small>Lorem ipsum dolor sit amet.</small>
                                                </div><span class="flex-1"></span>  <a href="#" class="text-uppercase headings-font-family"><small>Back To Top</small></a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingFive">
                                                <h5 class="card-title fw-300"><a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</strong></a></h5>
                                            </div>
                                            <div id="collapseFive" class="card-collapse collapse show" role="tabpanel" aria-labelledby="headingFive">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingSix">
                                                <h5 class="card-title fw-300"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><strong>Ut enim ad minim veniam, quis nostrud exercitation?</strong></a></h5>
                                            </div>
                                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingSeven">
                                                <h5 class="card-title fw-300"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><strong>Excepteur sint occaecat cupidatat non proident?</strong></a></h5>
                                            </div>
                                            <div id="collapseSeven" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingEight">
                                                <h5 class="card-title fw-300"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight"><strong>Duis aute irure dolor in reprehenderit?</strong></a></h5>
                                            </div>
                                            <div id="collapseEight" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingNine">
                                                <h5 class="card-title fw-300"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</strong></a></h5>
                                            </div>
                                            <div id="collapseNine" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header border-0" role="tab" id="headingTen">
                                                <h5 class="card-title fw-300"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen"><strong>Ut enim ad minim veniam, quis nostrud exercitation?</strong></a></h5>
                                            </div>
                                            <div id="collapseTen" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.accordion -->
                                </div>
                                <!-- /.widget-body -->
                            </div>
                            <!-- /.widget-bg -->
                        </div>
                        <!-- /.widget-holder -->
                        <div class="widget-holder">
                            <div class="widget-bg">
                                <div class="widget-body clearfix">
                                    <div class="accordion accordion-minimal" id="accordion3" role="tablist" aria-multiselectable="true">
                                        <div class="d-flex mb-4 mt-2">
                                            <div class="mr-3 mr-0-rtl ml-3-rtl"><i class="material-icons fs-36 text-danger">help_outline</i>
                                            </div>
                                            <div class="d-flex flex-1">
                                                <div>
                                                    <h5 class="mt-0 mb-1 fs-22 fw-400 sub-heading-font-family">Purchase FAQ</h5><small>Lorem ipsum dolor sit amet.</small>
                                                </div><span class="flex-1"></span>  <a href="#" class="text-uppercase headings-font-family"><small>Back To Top</small></a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingEleven">
                                                <h5 class="card-title fw-300"><a role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</strong></a></h5>
                                            </div>
                                            <div id="collapseEleven" class="card-collapse collapse show" role="tabpanel" aria-labelledby="headingEleven">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingTwelve">
                                                <h5 class="card-title fw-300"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve"><strong>Ut enim ad minim veniam, quis nostrud exercitation?</strong></a></h5>
                                            </div>
                                            <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header border-0" role="tab" id="headingThirteen">
                                                <h5 class="card-title fw-300"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen"><strong>Excepteur sint occaecat cupidatat non proident?</strong></a></h5>
                                            </div>
                                            <div id="collapseThirteen" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.accordion -->
                                </div>
                                <!-- /.widget-body -->
                            </div>
                            <!-- /.widget-bg -->
                        </div>
                        <!-- /.widget-holder -->
                        <div class="widget-holder">
                            <div class="widget-bg">
                                <div class="widget-body clearfix">
                                    <div class="accordion accordion-minimal" id="accordion4" role="tablist" aria-multiselectable="true">
                                        <div class="d-flex mb-4 mt-2">
                                            <div class="mr-3 mr-0-rtl ml-3-rtl"><i class="material-icons fs-36 text-success">card_travel</i>
                                            </div>
                                            <div class="d-flex flex-1">
                                                <div>
                                                    <h5 class="mt-0 mb-1 fs-22 fw-400 sub-heading-font-family">Buisness FAQ</h5><small>Lorem ipsum dolor sit amet.</small>
                                                </div><span class="flex-1"></span>  <a href="#" class="text-uppercase headings-font-family"><small>Back To Top</small></a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingFourteen">
                                                <h5 class="card-title fw-300"><a role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</strong></a></h5>
                                            </div>
                                            <div id="collapseFourteen" class="card-collapse collapse show" role="tabpanel" aria-labelledby="headingFourteen">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingFifteen">
                                                <h5 class="card-title fw-300"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen"><strong>Ut enim ad minim veniam, quis nostrud exercitation?</strong></a></h5>
                                            </div>
                                            <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingSixteen">
                                                <h5 class="card-title fw-300"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen"><strong>Excepteur sint occaecat cupidatat non proident?</strong></a></h5>
                                            </div>
                                            <div id="collapseSixteen" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingSixteen">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header border-0" role="tab" id="headingSeventeen">
                                                <h5 class="card-title fw-300"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen"><strong>Duis aute irure dolor in reprehenderit?</strong></a></h5>
                                            </div>
                                            <div id="collapseSeventeen" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingSeventeen">
                                                <div class="card-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                    deserunt mollit anim id est laborum.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.accordion -->
                                </div>
                                <!-- /.widget-body -->
                            </div>
                            <!-- /.widget-bg -->
                        </div>
                        <!-- /.widget-holder -->
                    </div>
                    <!-- /.col-md-9 -->
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