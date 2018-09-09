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
                    <h6 class="page-title-heading mr-0 mr-r-5">Feather Icons</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Feather Icons</li>
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
                                <section>
                                    <h5 class="box-title mb-0">Feather Icons</h5>
                                    <p class="text-muted">Sample code: <code>&lt;i class="feather feather-activity"&gt;&lt;/i&gt;</code>
                                    </p>
                                    <div class="row text-center">
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-activity"></i>
                                            <br><small>feather-activity</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-airplay"></i>
                                            <br><small>feather-airplay</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-alert-circle"></i>
                                            <br><small>feather-alert-circle</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-alert-octagon"></i>
                                            <br><small>feather-alert-octagon</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-alert-triangle"></i>
                                            <br><small>feather-alert-triangle</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-align-center"></i>
                                            <br><small>feather-align-center</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-align-justify"></i>
                                            <br><small>feather-align-justify</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-align-left"></i>
                                            <br><small>feather-align-left</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-align-right"></i>
                                            <br><small>feather-align-right</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-anchor"></i>
                                            <br><small>feather-anchor</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-aperture"></i>
                                            <br><small>feather-aperture</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-arrow-down"></i>
                                            <br><small>feather-arrow-down</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-arrow-left"></i>
                                            <br><small>feather-arrow-left</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-arrow-right"></i>
                                            <br><small>feather-arrow-right</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-arrow-up"></i>
                                            <br><small>feather-arrow-up</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-at-sign"></i>
                                            <br><small>feather-at-sign</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-award"></i>
                                            <br><small>feather-award</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-bar-chart-2"></i>
                                            <br><small>feather-bar-chart-2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-bar-chart"></i>
                                            <br><small>feather-bar-chart</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-bell-off"></i>
                                            <br><small>feather-bell-off</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-bell"></i>
                                            <br><small>feather-bell</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-bluetooth"></i>
                                            <br><small>feather-bluetooth</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-book"></i>
                                            <br><small>feather-book</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-bookmark"></i>
                                            <br><small>feather-bookmark</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-box"></i>
                                            <br><small>feather-box</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-briefcase"></i>
                                            <br><small>feather-briefcase</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-camera-off"></i>
                                            <br><small>feather-camera-off</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-camera"></i>
                                            <br><small>feather-camera</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-check-circle"></i>
                                            <br><small>feather-check-circle</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-check-square"></i>
                                            <br><small>feather-check-square</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-check"></i>
                                            <br><small>feather-check</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-chevron-down"></i>
                                            <br><small>feather-chevron-down</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-chevron-left"></i>
                                            <br><small>feather-chevron-left</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-chevron-right"></i>
                                            <br><small>feather-chevron-right</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-chevron-up"></i>
                                            <br><small>feather-chevron-up</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-chrome"></i>
                                            <br><small>feather-chrome</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-circle"></i>
                                            <br><small>feather-circle</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-clipboard"></i>
                                            <br><small>feather-clipboard</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-clock"></i>
                                            <br><small>feather-clock</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-cloud-off"></i>
                                            <br><small>feather-cloud-off</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-cloud"></i>
                                            <br><small>feather-cloud</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-settings"></i>
                                            <br><small>feather-settings</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-command"></i>
                                            <br><small>feather-command</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-cpu"></i>
                                            <br><small>feather-cpu</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-crosshair"></i>
                                            <br><small>feather-crosshair</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-delete"></i>
                                            <br><small>feather-delete</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-disc"></i>
                                            <br><small>feather-disc</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-download-cloud"></i>
                                            <br><small>feather-download-cloud</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-download"></i>
                                            <br><small>feather-download</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-droplet"></i>
                                            <br><small>feather-droplet</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-edit"></i>
                                            <br><small>feather-edit</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-external-link"></i>
                                            <br><small>feather-external-link</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-eye-off"></i>
                                            <br><small>feather-eye-off</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-eye"></i>
                                            <br><small>feather-eye</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-facebook"></i>
                                            <br><small>feather-facebook</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-fast-forward"></i>
                                            <br><small>feather-fast-forward</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-feather"></i>
                                            <br><small>feather-feather</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-file"></i>
                                            <br><small>feather-file</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-filter"></i>
                                            <br><small>feather-filter</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-flag"></i>
                                            <br><small>feather-flag</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-folder"></i>
                                            <br><small>feather-folder</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-globe"></i>
                                            <br><small>feather-globe</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-grid"></i>
                                            <br><small>feather-grid</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-hash"></i>
                                            <br><small>feather-hash</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-headphones"></i>
                                            <br><small>feather-headphones</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-heart"></i>
                                            <br><small>feather-heart</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-home"></i>
                                            <br><small>feather-home</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-image"></i>
                                            <br><small>feather-image</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-inbox"></i>
                                            <br><small>feather-inbox</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-info"></i>
                                            <br><small>feather-info</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-instagram"></i>
                                            <br><small>feather-instagram</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-layers"></i>
                                            <br><small>feather-layers</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-layout"></i>
                                            <br><small>feather-layout</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-life-buoy"></i>
                                            <br><small>feather-life-buoy</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-loader"></i>
                                            <br><small>feather-loader</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-navigation"></i>
                                            <br><small>feather-navigation</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-navigation-2"></i>
                                            <br><small>feather-navigation-2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-lock"></i>
                                            <br><small>feather-lock</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-mail"></i>
                                            <br><small>feather-mail</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-map-pin"></i>
                                            <br><small>feather-map-pin</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-map"></i>
                                            <br><small>feather-map</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-maximize-2"></i>
                                            <br><small>feather-maximize-2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-maximize"></i>
                                            <br><small>feather-maximize</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-menu"></i>
                                            <br><small>feather-menu</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-mic-off"></i>
                                            <br><small>feather-mic-off</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-mic"></i>
                                            <br><small>feather-mic</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-minimize-2"></i>
                                            <br><small>feather-minimize-2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-minimize"></i>
                                            <br><small>feather-minimize</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-minus-circle"></i>
                                            <br><small>feather-minus-circle</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-minus-square"></i>
                                            <br><small>feather-minus-square</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-minus"></i>
                                            <br><small>feather-minus</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-monitor"></i>
                                            <br><small>feather-monitor</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-moon"></i>
                                            <br><small>feather-moon</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-more-horizontal"></i>
                                            <br><small>feather-more-horizontal</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-more-vertical"></i>
                                            <br><small>feather-more-vertical</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-move"></i>
                                            <br><small>feather-move</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-music"></i>
                                            <br><small>feather-music</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-octagon"></i>
                                            <br><small>feather-octagon</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-pause"></i>
                                            <br><small>feather-pause</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-phone-call"></i>
                                            <br><small>feather-phone-call</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-phone-forwarded"></i>
                                            <br><small>feather-phone-forwarded</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-phone-incoming"></i>
                                            <br><small>feather-phone-incoming</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-phone-missed"></i>
                                            <br><small>feather-phone-missed</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-phone-off"></i>
                                            <br><small>feather-phone-off</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-phone-outgoing"></i>
                                            <br><small>feather-phone-outgoing</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-phone"></i>
                                            <br><small>feather-phone</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-pie-chart"></i>
                                            <br><small>feather-pie-chart</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-play"></i>
                                            <br><small>feather-play</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-plus-circle"></i>
                                            <br><small>feather-plus-circle</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-plus-square"></i>
                                            <br><small>feather-plus-square</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-plus"></i>
                                            <br><small>feather-plus</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-pocket"></i>
                                            <br><small>feather-pocket</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-power"></i>
                                            <br><small>feather-power</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-printer"></i>
                                            <br><small>feather-printer</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-radio"></i>
                                            <br><small>feather-radio</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-refresh-ccw"></i>
                                            <br><small>feather-refresh-ccw</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-refresh-cw"></i>
                                            <br><small>feather-refresh-cw</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-rewind"></i>
                                            <br><small>feather-rewind</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-rotate-ccw"></i>
                                            <br><small>feather-rotate-ccw</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-rotate-cw"></i>
                                            <br><small>feather-rotate-cw</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-scissors"></i>
                                            <br><small>feather-scissors</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-search"></i>
                                            <br><small>feather-search</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-share"></i>
                                            <br><small>feather-share</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-shuffle"></i>
                                            <br><small>feather-shuffle</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-skip-back"></i>
                                            <br><small>feather-skip-back</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-skip-forward"></i>
                                            <br><small>feather-skip-forward</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-slash"></i>
                                            <br><small>feather-slash</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-square"></i>
                                            <br><small>feather-square</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-star"></i>
                                            <br><small>feather-star</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-sun"></i>
                                            <br><small>feather-sun</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-sunrise"></i>
                                            <br><small>feather-sunrise</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-sunset"></i>
                                            <br><small>feather-sunset</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-tag"></i>
                                            <br><small>feather-tag</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-target"></i>
                                            <br><small>feather-target</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-thermometer"></i>
                                            <br><small>feather-thermometer</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-thumbs-down"></i>
                                            <br><small>feather-thumbs-down</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-thumbs-up"></i>
                                            <br><small>feather-thumbs-up</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-toggle-left"></i>
                                            <br><small>feather-toggle-left</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-toggle-right"></i>
                                            <br><small>feather-toggle-right</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-trash-2"></i>
                                            <br><small>feather-trash-2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-trash"></i>
                                            <br><small>feather-trash</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-triangle"></i>
                                            <br><small>feather-triangle</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-twitter"></i>
                                            <br><small>feather-twitter</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-umbrella"></i>
                                            <br><small>feather-umbrella</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-unlock"></i>
                                            <br><small>feather-unlock</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-upload-cloud"></i>
                                            <br><small>feather-upload-cloud</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-upload"></i>
                                            <br><small>feather-upload</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-user-minus"></i>
                                            <br><small>feather-user-minus</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-user-plus"></i>
                                            <br><small>feather-user-plus</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-user"></i>
                                            <br><small>feather-user</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-video-off"></i>
                                            <br><small>feather-video-off</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-video"></i>
                                            <br><small>feather-video</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-watch"></i>
                                            <br><small>feather-watch</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-wifi"></i>
                                            <br><small>feather-wifi</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-wind"></i>
                                            <br><small>feather-wind</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-x-circle"></i>
                                            <br><small>feather-x-circle</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-x-square"></i>
                                            <br><small>feather-x-square</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-x"></i>
                                            <br><small>feather-x</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-zap"></i>
                                            <br><small>feather-zap</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-zoom-in"></i>
                                            <br><small>feather-zoom-in</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="feather feather-zoom-out"></i>
                                            <br><small>feather-zoom-out</small>
                                        </div>
                                    </div>
                                </section>
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