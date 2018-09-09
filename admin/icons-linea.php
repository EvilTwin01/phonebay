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
                    <h6 class="page-title-heading mr-0 mr-r-5">Linea Icons</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Linea Icons</li>
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
                                    <h5 class="box-title mb-0">Linea Icons</h5>
                                    <p class="text-muted">Sample code: <code>&lt;i class="linea linea-basic-accelerator"&gt;&lt;/i&gt;</code>
                                    </p>
                                    <div class="row text-center">
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-accelerator"></i>
                                            <br><small>basic-accelerator</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-alarm"></i>
                                            <br><small>basic-alarm</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-anchor"></i>
                                            <br><small>basic-anchor</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-anticlockwise"></i>
                                            <br><small>basic-anticlockwise</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-archive"></i>
                                            <br><small>basic-archive</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-archive-full"></i>
                                            <br><small>basic-archive-full</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-ban"></i>
                                            <br><small>basic-ban</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-battery-charge"></i>
                                            <br><small>basic-battery-charge</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-battery-empty"></i>
                                            <br><small>basic-battery-empty</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-battery-full"></i>
                                            <br><small>basic-battery-full</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-battery-half"></i>
                                            <br><small>basic-battery-half</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-bolt"></i>
                                            <br><small>basic-bolt</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-book"></i>
                                            <br><small>basic-book</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-book-pen"></i>
                                            <br><small>basic-book-pen</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-book-pencil"></i>
                                            <br><small>basic-book-pencil</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-bookmark"></i>
                                            <br><small>basic-bookmark</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-calculator"></i>
                                            <br><small>basic-calculator</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-calendar"></i>
                                            <br><small>basic-calendar</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-cards-diamonds"></i>
                                            <br><small>basic-cards-diamonds</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-cards-hearts"></i>
                                            <br><small>basic-cards-hearts</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-case"></i>
                                            <br><small>basic-case</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-chronometer"></i>
                                            <br><small>basic-chronometer</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-clessidre"></i>
                                            <br><small>basic-clessidre</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-clock"></i>
                                            <br><small>basic-clock</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-clockwise"></i>
                                            <br><small>basic-clockwise</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-cloud"></i>
                                            <br><small>basic-cloud</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-clubs"></i>
                                            <br><small>basic-clubs</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-compass"></i>
                                            <br><small>basic-compass</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-cup"></i>
                                            <br><small>basic-cup</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-diamonds"></i>
                                            <br><small>basic-diamonds</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-display"></i>
                                            <br><small>basic-display</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-download"></i>
                                            <br><small>basic-download</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-exclamation"></i>
                                            <br><small>basic-exclamation</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-eye"></i>
                                            <br><small>basic-eye</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-eye-closed"></i>
                                            <br><small>basic-eye-closed</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-female"></i>
                                            <br><small>basic-female</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-flag1"></i>
                                            <br><small>basic-flag1</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-flag2"></i>
                                            <br><small>basic-flag2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-floppydisk"></i>
                                            <br><small>basic-floppydisk</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-folder"></i>
                                            <br><small>basic-folder</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-folder-multiple"></i>
                                            <br><small>basic-folder-multiple</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-gear"></i>
                                            <br><small>basic-gear</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-geolocalize-01"></i>
                                            <br><small>basic-geolocalize-01</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-geolocalize-05"></i>
                                            <br><small>basic-geolocalize-05</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-globe"></i>
                                            <br><small>basic-globe</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-gunsight"></i>
                                            <br><small>basic-gunsight</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-hammer"></i>
                                            <br><small>basic-hammer</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-headset"></i>
                                            <br><small>basic-headset</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-heart"></i>
                                            <br><small>basic-heart</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-heart-broken"></i>
                                            <br><small>basic-heart-broken</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-helm"></i>
                                            <br><small>basic-helm</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-home"></i>
                                            <br><small>basic-home</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-info"></i>
                                            <br><small>basic-info</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-ipod"></i>
                                            <br><small>basic-ipod</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-joypad"></i>
                                            <br><small>basic-joypad</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-key"></i>
                                            <br><small>basic-key</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-keyboard"></i>
                                            <br><small>basic-keyboard</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-laptop"></i>
                                            <br><small>basic-laptop</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-life-buoy"></i>
                                            <br><small>basic-life-buoy</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-lightbulb"></i>
                                            <br><small>basic-lightbulb</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-link"></i>
                                            <br><small>basic-link</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-lock"></i>
                                            <br><small>basic-lock</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-lock-open"></i>
                                            <br><small>basic-lock-open</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-magic-mouse"></i>
                                            <br><small>basic-magic-mouse</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-magnifier"></i>
                                            <br><small>basic-magnifier</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-magnifier-minus"></i>
                                            <br><small>basic-magnifier-minus</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-magnifier-plus"></i>
                                            <br><small>basic-magnifier-plus</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-mail"></i>
                                            <br><small>basic-mail</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-mail-multiple"></i>
                                            <br><small>basic-mail-multiple</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-mail-open"></i>
                                            <br><small>basic-mail-open</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-mail-open-text"></i>
                                            <br><small>basic-mail-open-text</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-male"></i>
                                            <br><small>basic-male</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-map"></i>
                                            <br><small>basic-map</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-message"></i>
                                            <br><small>basic-message</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-message-multiple"></i>
                                            <br><small>basic-message-multiple</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-message-txt"></i>
                                            <br><small>basic-message-txt</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-mixer2"></i>
                                            <br><small>basic-mixer2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-mouse"></i>
                                            <br><small>basic-mouse</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-notebook"></i>
                                            <br><small>basic-notebook</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-notebook-pen"></i>
                                            <br><small>basic-notebook-pen</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-notebook-pencil"></i>
                                            <br><small>basic-notebook-pencil</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-paperplane"></i>
                                            <br><small>basic-paperplane</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-pencil-ruler"></i>
                                            <br><small>basic-pencil-ruler</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-pencil-ruler-pen"></i>
                                            <br><small>basic-pencil-ruler-pen</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-photo"></i>
                                            <br><small>basic-photo</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-picture"></i>
                                            <br><small>basic-picture</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-picture-multiple"></i>
                                            <br><small>basic-picture-multiple</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-pin1"></i>
                                            <br><small>basic-pin1</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-pin2"></i>
                                            <br><small>basic-pin2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-postcard"></i>
                                            <br><small>basic-postcard</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-postcard-multiple"></i>
                                            <br><small>basic-postcard-multiple</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-printer"></i>
                                            <br><small>basic-printer</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-question"></i>
                                            <br><small>basic-question</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-rss"></i>
                                            <br><small>basic-rss</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-server"></i>
                                            <br><small>basic-server</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-server2"></i>
                                            <br><small>basic-server2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-server-cloud"></i>
                                            <br><small>basic-server-cloud</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-server-download"></i>
                                            <br><small>basic-server-download</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-server-upload"></i>
                                            <br><small>basic-server-upload</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-settings"></i>
                                            <br><small>basic-settings</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-share"></i>
                                            <br><small>basic-share</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-sheet"></i>
                                            <br><small>basic-sheet</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-sheet-multiple"></i>
                                            <br><small>basic-sheet-multiple</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-sheet-pen"></i>
                                            <br><small>basic-sheet-pen</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-sheet-pencil"></i>
                                            <br><small>basic-sheet-pencil</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-sheet-txt"></i>
                                            <br><small>basic-sheet-txt</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-signs"></i>
                                            <br><small>basic-signs</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-smartphone"></i>
                                            <br><small>basic-smartphone</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-spades"></i>
                                            <br><small>basic-spades</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-spread"></i>
                                            <br><small>basic-spread</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-spread-bookmark"></i>
                                            <br><small>basic-spread-bookmark</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-spread-text"></i>
                                            <br><small>basic-spread-text</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-spread-text-bookmark"></i>
                                            <br><small>basic-spread-text-bookmark</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-star"></i>
                                            <br><small>basic-star</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-tablet"></i>
                                            <br><small>basic-tablet</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-target"></i>
                                            <br><small>basic-target</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-todo"></i>
                                            <br><small>basic-todo</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-todo-pen"></i>
                                            <br><small>basic-todo-pen</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-todo-pencil"></i>
                                            <br><small>basic-todo-pencil</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-todo-txt"></i>
                                            <br><small>basic-todo-txt</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-todolist-pen"></i>
                                            <br><small>basic-todolist-pen</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-todolist-pencil"></i>
                                            <br><small>basic-todolist-pencil</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-trashcan"></i>
                                            <br><small>basic-trashcan</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-trashcan-full"></i>
                                            <br><small>basic-trashcan-full</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-trashcan-refresh"></i>
                                            <br><small>basic-trashcan-refresh</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-trashcan-remove"></i>
                                            <br><small>basic-trashcan-remove</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-upload"></i>
                                            <br><small>basic-upload</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-usb"></i>
                                            <br><small>basic-usb</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-video"></i>
                                            <br><small>basic-video</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-watch"></i>
                                            <br><small>basic-watch</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-webpage"></i>
                                            <br><small>basic-webpage</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-webpage-img-txt"></i>
                                            <br><small>basic-webpage-img-txt</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-webpage-multiple"></i>
                                            <br><small>basic-webpage-multiple</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-webpage-txt"></i>
                                            <br><small>basic-webpage-txt</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="linea linea-basic-world"></i>
                                            <br><small>basic-world</small>
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