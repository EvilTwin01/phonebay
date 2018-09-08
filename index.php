<?php

session_start();

include("includes/db.php");

//include("functions/functions.php");

//define("login.php", TRUE);

//define("review_order", TRUE);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0' name='viewport' />
    <title>Home | Electro</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/png" href="assets/images/fav.png" />

    <!--Stylesheets -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome-animation.min.css" rel="stylesheet">
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/css/icofont.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/youtube-pop-up.css" rel="stylesheet">
    <link href="assets/css/full-screen-menu.css" rel="stylesheet">
    <link href="assets/css/fractionslider.css" rel="stylesheet">
    <link href="assets/css/component.css" rel="stylesheet"> 
    <link href="assets/css/lightcase.css" rel="stylesheet">
    <link href="assets/css/slider-360.css" rel="stylesheet">
    <link href="assets/css/amaran.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/skin/yellow.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800%7CRaleway:300,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
</head>

<body class="home">
    <div id="wrap">
        <header class="header-3 bm-20">
            <div class="top-bar bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 site-dir hidden-xs">                      
                        
                            <?php
                                $trim_email = $_SESSION['customer_email'];

                                if(!isset($_SESSION['customer_email'])){
                                    echo "Welcome :Guest";
                                }else{
                                    echo "Welcome : " . substr($trim_email, 0, -10) . " !";
                                }
                            ?>

                        </div>
                        <!--site dir-->

                        <div class="col-md-6 col-sm-6 col-xs-12 header-right pull-right text-right">
                            <div class="lang">
                                <div class="dropdown">
                                    <span class="drop-down-toggle">
                                        <img src="assets/images/flag1.png" alt=""> Eng <i class="fa fa-angle-down"></i>
                                    </span>
                                    <ul class="drop-link trans">
                                        <li><a href="#" class="bg-dark">English</a></li>
                                        <li><a href="#" class="bg-dark">Spanish</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--lang-->

                            <div class="currency">
                                <div class="dropdown">
                                    <span class="drop-down-toggle">
                                        MYR <i class="fa fa-angle-down"></i>
                                    </span>
                                    <ul class="drop-link trans">
                                        <li><a href="#" class="bg-dark">MYR</a></li>
                                        <li><a href="#" class="bg-dark">EUR</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--currency-->

                            <div class="account-wrap style2">
                                <div class="dropdown">
                                    <span class="drop-down-toggle">
                                        <i class="fa fa-user"></i> ACCOUNT <i class="fa fa-angle-down"></i>
                                    </span>
                                    <ul class="drop-link trans">
                                        <?php
                                            if(!isset($_SESSION['customer_email'])){
                                        ?>
                                                <li><a href="login.php" class="bg-dark">Login</a></li>  
                                        <?php
                                            }
                                            else{
                                                echo " ";
                                            }
                                        ?>
                                        <li><a href="logout.php" class="bg-dark">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--account wrap-->

                            <form class="search-form visible-xs">
                                <input class="search-input" type="search" placeholder="Search..."> 
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
            <!--top bar-->

            <div class="container">
                <div class="row header-mid">
                    <div class="col-md-3 col-sm-3">
                        <a class="navbar-brand" href="index.php"><img src="assets/images/logo2.png" alt=""></a> 
                        <!--<a class="navbar-brand site-brand" href="index.php">Electro</a>--> 
                    </div>

                    <div class="col-md-9 col-sm-9 mid-right">
                        <div class="pdct-srch hidden-xs">
                            <form action="#">
                                <input type="search" placeholder="Search">
                                <ul class="search-cat">
                                    <li>
                                        <a href="#">All categories <i class="fa fa-angle-down"></i></a>
                                        <ul>                                        
                                            <li><a href="#" class="bg-dark">Apple store</a></li>
                                            <li><a href="#" class="bg-dark">Computer</a></li>
                                            <li><a href="#" class="bg-dark">Smart phone</a></li>
                                            <li><a href="#" class="bg-dark">Camera</a></li>
                                            <li><a href="#" class="bg-dark">Tv</a></li>
                                        </ul> 
                                    </li>                                   
                                </ul>

                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--search-->

                        <div class="call-supprt hidden-xs">
                            <i class="pe-7s-headphones"></i>
                            <h5>
                                <span class="pri-font">Support</span> 
                                <a href="tel:0112345671289">+1 1200 123 1234</a>
                            </h5>
                        </div>
                        <!--support-->

                        <div class="header-cart style2">
                            <a href="#" class="crt-btn pe-7s-like"></a> 
                        </div>
                        <!--header mini cart-->

                        <div class="header-cart style2">
                            <a href="#" class="crt-btn drop-cart pe-7s-cart"> </a>
                            <div class="cart-count">
                                0 Items
                                <strong>RM0.00</strong>
                            </div>

                            <div class="widget widget_shopping_cart ">
                                <h5 class="title">Your cart have (<span>2</span> Items)</h5>
                                <ul class="neo-mini-cart">
                                    <li class="item">
                                        <figure class="product-thumb">
                                           <a href="#"><img src="assets/images/cart-pdt-thumb3.jpg" alt=""></a>
                                        </figure>
                                        <!--product thumb-->

                                        <div class="item-disc">
                                            <h6 class="pri-font">Ladies black full sleeves</h6>
                                            <span class="qty">1</span> X <span class="item-price">RM110</span>
                                        </div>

                                        <a href="#" class="delete-item"><i class="pe-7s-close"></i></a>
                                    </li>

                                    <li class="item">
                                        <figure class="product-thumb">
                                           <a href="#"><img src="assets/images/cart-pdt-thumb1.jpg" alt=""></a>
                                        </figure>
                                        <!--product thumb-->

                                        <div class="item-disc">
                                            <h6 class="pri-font">Ladies black top</h6>
                                            <span class="qty">1</span> X <span class="item-price">RM110</span>
                                        </div>

                                        <a href="#" class="delete-item"><i class="pe-7s-close"></i></a>
                                    </li>
                                </ul>

                                <div class="mini-cart-total flx-element">
                                    <span>Subtotal</span> 
                                    <span>RM220.00</span>
                                </div>

                                <div class="btn-hold flx-element">
                                    <a class="btn text-uppercase" href="cart.html">view cart</a>
                                    <a class="btn pri-bg text-uppercase" href="checkout.html">checkout</a>
                                </div>
                            </div>
                            <!--mini cart-->
                        </div>
                        <!--header mini cart-->
                    </div>
                </div>
            </div>

            <div class="navbar navbar-default menu-bar sec-bg">
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-3 col-sm-3">
                            <div id="elec-catg" class="catg-wrap"> 
                                <div class="catg-btn pri-bg">
                                    <span class="cat-toggle"><i class="fa fa-align-justify"></i> categories</span>
                                </div>

                                <ul class="detail-cat bg-soft-gray">
                                    <li class="menu-item-has-children">
                                        <a href="#"><i class="icofont icofont-laptop-alt"></i> Computer & Laptops </a>
                                        <div class="sub-cat-wrap">
                                             <div class="sub-cat-wrap">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5>Accessories</h5>
                                                    <ul>
                                                        <li><a href="#">CPUs, Processors</a></li>
                                                        <li><a href="#">Fans & Cooling</a></li>
                                                        <li><a href="#">Graphics, Video Cards</a></li>
                                                        <li><a href="#">Memory (RAM)</a></li>
                                                        <li><a href="#">Motherboards</a></li> 
                                                        <li><a href="#">Sound Cards (Internal)</a></li>  
                                                        <li><a href="#">Othres..</a></li> 
                                                    </ul> 

                                                    <h5>Monitors</h5>
                                                    <ul>
                                                        <li><a href="#">Banq</a></li>
                                                        <li><a href="#">Acer</a></li>
                                                        <li><a href="#">Dell</a></li>
                                                        <li><a href="#">Apple</a></li> 
                                                        <li><a href="#">Samsung</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-sm-6">
                                                    <h5>Laptops & Desktops</h5>
                                                    <ul>
                                                        <li><a href="#">Banq</a></li>
                                                        <li><a href="#">Acer</a></li>
                                                        <li><a href="#">Dell</a></li>
                                                        <li><a href="#">Apple</a></li>
                                                        <li><a href="#">HP</a></li>
                                                        <li><a href="#">Samsung</a></li>
                                                        <li><a href="#">Lenovo</a></li>    
                                                    </ul> 

                                                    <figure>
                                                        <a href="#">
                                                            <img src="assets/images/electronics/ele-sub-cat-offer.jpg" alt="">
                                                        </a>
                                                    </figure>
                                                </div>    
                                            </div>                                        
                                        </div>                                      
                                        </div>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#"><i class="icofont icofont-ui-cell-phone"></i> Mobile & Tablets </a>
                                        <div class="sub-cat-wrap">
                                             <div class="sub-cat-wrap">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5>Mobile & Tablets</h5>
                                                    <ul> 
                                                        <li><a href="#">Smartphones</a></li>
                                                        <li><a href="#">Android Mobiles</a></li>
                                                        <li><a href="#">Windows Mobiles</a></li> 
                                                    </ul> 

                                                    <h5>Smart Phones & Tablets</h5>
                                                    <ul>
                                                        <li><a href="#">Apple</a></li>
                                                        <li><a href="#">Samsung</a></li>
                                                        <li><a href="#">Micromax</a></li>
                                                        <li><a href="#">Sony</a></li>
                                                        <li><a href="#">Nokia</a></li>
                                                        <li><a href="#">Zopo</a></li> 
                                                        <li><a href="#">Panasonic</a></li>
                                                        <li><a href="#">Lenovo</a></li> 
                                                    </ul>
                                                </div>

                                                <div class="col-sm-6">
                                                    <h5>All Mobile Accessories</h5>
                                                    <ul>
                                                        <li><a href="#">Cases & Covers</a></li>
                                                        <li><a href="#">Screen Protectors</a></li>
                                                        <li><a href="#">Power Banks</a></li>
                                                        <li><a href="#">Head phones</a></li>    
                                                    </ul> 

                                                    <figure>
                                                        <a href="#">
                                                            <img src="assets/images/electronics/ele-sub-mobile-offer.jpg" alt="">
                                                        </a>
                                                    </figure>
                                                </div>    
                                            </div>                                        
                                        </div>                                      
                                        </div>
                                    </li>

                                    <li><a href="#"><i class="icofont icofont-ui-video"></i> TV & Videos</a></li>
                                    <li><a href="#"><i class="icofont icofont-ui-music "></i> Music & Audio</a> </li> 
                                    <li><a href="#"><i class="icofont icofont-headphone-alt-1"></i> Headphones</a></li>
                                    <li><a href="#"><i class="icofont icofont-ui-game"></i> Video Games</a></li> 
                                    <li><a href="#"><i class="icofont icofont-retro-music-disk"></i> Music Systems</a></li>
                                    <li><a href="#"><i class="icofont icofont-ui-camera"></i> Camera & Accessories</a></li>
                                    <li><a href="#"><i class="icofont icofont-washing-machine"></i> Home appliences</a></li>
                                    <li><a href="#"><i class="icofont icofont-drwaing-tablet"></i> Office supplies</a></li> 
                                </ul>
                            </div> 
                        </div>
                        <!--elec catg-->


                        <div class="col-md-9 col-sm-9 pull-right">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                            </button> 

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                <li><a href="index.php">Home</a></li>

                               <li class="active menu-item-has-children mega-menu">
                                    <a href="#">shop</a>

                                    <div class="mega-wrap">
                                        <div class="row">
                                            <div class="col-sm-4 menu-item-has-children">
                                                <h6>Shop pages</h6>
                                                <ul>
                                                    <li><a href="single-category.html">Shop Left Sidebar</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-sm-4 menu-item-has-children">
                                                <h6>Product pages</h6>
                                                <ul>
                                                    <li><a href="product-single-v1.html">Single Product</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-sm-4 menu-item-has-children">
                                                <h6>account</h6>
                                                <ul>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="checkout.html">checkout</a></li> 
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                               <li class="menu-item-has-children">
                                    <a href="#">pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="faq.html">faq</a></li>  
                                        <li><a href="account/dashboard.html">user account</a></li>  
                                    </ul>
                                </li>

                                <li><a href="blog-v2.html">News</a></li>

                                <li><a href="contact-v1.html">Get In Touch</a></li>
                            </ul>
                            </div> 
                        </div>
                    </div> 
                </div>
            </div>  
        </header>
        <!--header-->

        <main>
            <div class="elec-banner bm-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-9 col-xs-12 pull-right banner-hold">
                            <div class="slider-wrapper elec-hero-slider hero-banner"> 
                                <div class="electronic-banner">
                                    <div class="fs_loader"></div> 

                                    <div class="slide">
                                        <img src="assets/images/electronics/slider1-bg.jpg" alt="" data-in="fade">
                                        
                                        <img src="assets/images/electronics/watch.png" alt="" data-position="10,20" data-in="right" > 

                                        <h5 class="pri-font" data-position="100,550" data-in="top" data-delay="300">
                                           <span class="vertical">UPTO</span>
                                        </h5>

                                        <h2 data-position="100,550" data-in="top" data-delay="300">
                                            <strong><span class="pri-color">20<sup>%<br>OFF</sup></span></strong>
                                        </h2> 

                                        <p class="text-uppercase" data-position="220,550" data-in="top" data-delay="400">
                                            smart watchs  series
                                        </p>

                                        <p class="text-uppercase" data-position="245,550" data-in="top" data-delay="400">
                                            starting from <strong class="pri-color">RM100.00</strong>
                                        </p>                                         
                                        

                                        <div data-position="315,550" data-in="bottom" data-delay="500">
                                            <a class="btn">SHOP NOW </a>
                                        </div>
                                    </div>
                                    <!--slide 1-->  


                                    <div class="slide">
                                        <img src="assets/images/electronics/slider1-bg.jpg" alt="" data-in="fade">
                                        
                                        <img src="assets/images/electronics/headphone.png" alt="" data-position="15,80" data-in="right" > 

                                        <h5 class="pri-font" data-position="100,511" data-in="top" data-delay="300">
                                           <span class="vertical">UPTO</span>
                                        </h5>

                                        <h2 class="ex-lg pri-font" data-position="115,500" data-in="top" data-delay="300">
                                            <strong><span class="pri-color">30<sup>%<br>OFF</sup></span></strong>
                                        </h2> 

                                        <h3 class="text-uppercase" data-position="230,500" data-in="top" data-delay="400">
                                            new arrival
                                        </h3>                                         
                                        

                                        <div data-position="280,500" data-in="bottom" data-delay="500">
                                            <a class="btn">SHOP NOW </a>
                                        </div>
                                    </div>
                                    <!--slide 2-->                         
                                </div> 
                            </div>
                        </div>
                        <!--slider-->
                    </div>
                </div>
            </div>
            <!--banner--> 

            <div class="shop-feature boxed sec-mar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 shp-ftr-wrap">
                            <div class="feature-box delivery">
                                <h5><span class="icon icofont icofont-free-delivery"></span>Free Shipping</h5>
                                <span class="sub-text">Orders above RM40</span>
                            </div>

                            <div class="feature-box return">
                                <h5><span class="icon icofont icofont-reply"></span>Return back</h5>
                                <span class="sub-text">30 days retrun time</span>
                            </div> 

                            <div class="feature-box payment">
                                <h5><span class="icon icofont icofont-money"></span>secure payment</h5>
                                <span class="sub-text">Best payment method</span>
                            </div>

                            <div class="feature-box sprt">
                                <h5><span class="icon icofont icofont-live-support"></span>24 / 7 support</h5>
                                <span class="sub-text">Best support system</span>
                            </div>
                        </div> 
                    </div>      
                </div>
            </div> 
            <!--shop feature-->

            <div class="container">
                <div class="sec-mar electronic-cat gutter-5">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="cat-3 img-animi bm-10">                                
                                <a href="#" class="link-layer">&nbsp;</a>
                                <div class="text-overlay light text-uppercase">
                                    <h3 class="bm-0 text-white">smart watch 
                                        <span class="pri-font">250 Items</span>
                                    </h3>
                                    <span class="text-white view"><i class="fa fa-angle-right"></i></span>
                                </div>    
                                <figure>
                                    <img src="assets/images/electronics/cat-smart-watch.jpg" alt="smart watch">
                                </figure>
                            </div>
                        </div>  
                        <!--singel cat--> 

                        <div class="col-md-4 col-sm-4">
                            <div class="cat-3 img-animi bm-10">                                
                                <a href="#" class="link-layer">&nbsp;</a> 
                                <div class="text-overlay light text-uppercase">
                                    <h3 class="bm-0  text-white">smart phones 
                                        <span class="pri-font">250 Items</span>
                                    </h3>
                                    <span class="text-white view"><i class="fa fa-angle-right"></i></span>
                                </div>    
                                <figure>
                                    <img src="assets/images/electronics/cat-smart-phone.jpg" alt="smart phone">
                                </figure>
                            </div>
                        </div>  
                        <!--singel cat--> 

                        <div class="col-md-4 col-sm-4">
                            <div class="cat-3 img-animi bm-10">                                
                                <a href="#" class="link-layer">&nbsp;</a> 
                                <div class="text-overlay light text-uppercase">
                                    <h3 class="bm-0 text-white">accessories 
                                        <span class="pri-font">250 Items</span>
                                    </h3>
                                    <span class="text-white view"><i class="fa fa-angle-right"></i></span>
                                </div>    
                                <figure>
                                    <img src="assets/images/electronics/cat-smart-accessories.jpg" alt="accessories">
                                </figure>
                            </div>
                        </div>  
                        <!--singel cat-->    
                    </div>
                </div>
                <!--electronic category-->

                <div class="sec-mar elec-featured-pdt">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="bdr-title title-bar">
                                <h3><span>Featured Products</span></h3>

                                <a href="#" class="btn-link">View more <i class="fa fa-angle-right"></i></a>
                            </div>

                            <div class="product-wrap">
                                <ul class="products">
                                    <li class="product">
                                        <figure class="img-animi">
                                            <div class="actions trans">
                                                <a class="link-layer" href="#">&nbsp;</a>
                                                <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                            </div>

                                            <a href="#"><img src="assets/images/electronics/product1.jpg" alt=""></a>
                                        </figure>

                                        <div class="price-wrap">
                                            <div class="price">
                                                <del>RM189.00</del>
                                                <ins>RM119.00 </ins>
                                            </div>
                                            <div class="star-rate">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>
                                        </div>
                                        <h4><a href="#">Samsung Galaxy S8+ </a></h4>
                                    </li>
                                    <!--product-->

                                    <li class="product new">
                                        <figure class="img-animi">
                                            <div class="tag new">new</div>
                                            <div class="actions trans">
                                                <a class="link-layer" href="#">&nbsp;</a>
                                                <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                            </div>

                                            <a href="#"><img src="assets/images/electronics/product2.jpg" alt=""></a>
                                        </figure>

                                        <div class="price-wrap">
                                            <div class="price">
                                                <ins>RM30.00 </ins>
                                            </div>
                                            <div class="star-rate">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>
                                        </div>
                                        <h4><a href="#">Sony Headphone</a></h4>
                                    </li>
                                    <!--product-->

                                    <li class="product">
                                        <figure class="img-animi">
                                            <div class="actions trans">
                                                <a class="link-layer" href="#">&nbsp;</a>
                                                <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                            </div>

                                            <a href="#"><img src="assets/images/electronics/product3.jpg" alt=""></a>
                                        </figure>

                                        <div class="price-wrap">
                                            <div class="price">
                                                <ins>RM200.00 </ins>
                                            </div>
                                            <div class="star-rate">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>
                                        </div>

                                        <h4><a href="#">Gen 3 Smartwatch</a></h4>
                                    </li>
                                    <!--product-->

                                    <li class="product last">
                                        <figure class="img-animi">
                                            <div class="actions trans">
                                                <a class="link-layer" href="#">&nbsp;</a>
                                                <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                            </div>
                                            <a href="#"><img src="assets/images/electronics/product4.jpg" alt=""></a>
                                        </figure>

                                        <div class="price-wrap">
                                            <div class="price">
                                                <del>RM680.00</del>
                                                <ins>RM660.00 </ins>
                                            </div>

                                            <div class="star-rate">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>
                                        </div>
                                        <h4><a href="#">Sony KDL-55W650D</a></h4>
                                    </li>
                                    <!--product-->

                                    <li class="product">
                                        <figure class="img-animi">
                                            <div class="actions trans">
                                                <a class="link-layer" href="#">&nbsp;</a>
                                                <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                            </div>

                                            <a href="#"><img src="assets/images/electronics/product5.jpg" alt=""></a>
                                        </figure>

                                        <div class="price-wrap">
                                            <div class="price">
                                                <del>RM189.00</del>
                                                <ins>RM189.00 </ins>
                                            </div>

                                            <div class="star-rate">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>
                                        </div>
                                        <h4><a href="#">Samsung Galaxy S8+ </a></h4>
                                    </li>
                                    <!--product-->

                                    <li class="product new">
                                        <figure class="img-animi">
                                            <div class="tag new">new</div>
                                            <div class="actions trans">
                                                <a class="link-layer" href="#">&nbsp;</a>
                                                <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                            </div>

                                            <a href="#"><img src="assets/images/electronics/product6.jpg" alt=""></a>
                                        </figure>

                                        <div class="price-wrap">
                                            <div class="price">
                                                <ins>RM30.00 </ins>
                                            </div>

                                            <div class="star-rate">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>
                                        </div>
                                        <h4><a href="#">Sony Headphone</a></h4>
                                    </li>
                                    <!--product-->

                                    <li class="product">
                                        <figure class="img-animi">
                                            <div class="actions trans">
                                                <a class="link-layer" href="#">&nbsp;</a>
                                                <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                            </div>

                                            <a href="#"><img src="assets/images/electronics/product7.jpg" alt=""></a>
                                        </figure>

                                        <div class="price-wrap">
                                            <div class="price">
                                                <del>RM189.00</del>
                                                <ins>RM189.00 </ins>
                                            </div>

                                            <div class="star-rate">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>
                                        </div>
                                        <h4><a href="#">Smartwatches for women</a></h4>
                                    </li>
                                    <!--product-->

                                    <li class="product new last">
                                        <figure class="img-animi">
                                            <div class="tag new">new</div>
                                            <div class="actions trans">
                                                <a class="link-layer" href="#">&nbsp;</a>
                                                <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                            </div>

                                            <a href="#"><img src="assets/images/electronics/product8.jpg" alt=""></a>
                                        </figure>

                                        <div class="price-wrap">
                                            <div class="price">
                                                <ins>RM30.00 </ins>
                                            </div>

                                            <div class="star-rate">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>
                                        </div>
                                        <h4><a href="#">Lenovo IdeaPad 320-17IKBR</a></h4>
                                    </li>
                                    <!--product-->
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <!--products-->
                        </div>
                    </div>
                </div>
                <!--featured product-->

            </div>


            <div class="container"> 
                <div class="row sec-mar">
                    <div class="col-md-9 col-sm-9 col-xs-12 left-block pull-right elec-new-arrival">
                        <div class="bdr-title">
                            <h3><span>New Arrivals</span></h3>
                        </div>

                        <div class="product-wrap elec-pdct">
                            <ul class="products product-slider">
                                <li class="product">
                                    <figure class="img-animi">
                                        <div class="actions trans">
                                            <a class="link-layer" href="#">&nbsp;</a>
                                            <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>

                                        <a href="#"><img src="assets/images/electronics/product1.jpg" alt=""></a>
                                    </figure>

                                    <div class="price-wrap">
                                        <div class="price">
                                            <del>RM189.00</del>
                                            <ins>RM189.00 </ins>
                                        </div>
                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>
                                    <h4><a href="#">Samsung Galaxy S8+ </a></h4>
                                </li>
                                <!--product-->

                                <li class="product new">
                                    <figure class="img-animi">
                                        <div class="tag new">new</div>
                                        <div class="actions trans">
                                            <a class="link-layer" href="#">&nbsp;</a>
                                            <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>

                                        <a href="#"><img src="assets/images/electronics/product2.jpg" alt=""></a>
                                    </figure>

                                    <div class="price-wrap">
                                        <div class="price">
                                            <ins>RM30.00 </ins>
                                        </div>
                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>
                                    <h4><a href="#">Sony Headphone</a></h4>
                                </li>
                                <!--product-->

                                <li class="product">
                                    <figure class="img-animi">
                                        <div class="actions trans">
                                            <a class="link-layer" href="#">&nbsp;</a>
                                            <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>

                                        <a href="#"><img src="assets/images/electronics/product3.jpg" alt=""></a>
                                    </figure>

                                    <div class="price-wrap">
                                        <div class="price">
                                            <ins>RM400.00 </ins>
                                        </div>
                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>

                                    <h4><a href="#">Lenovo idea-pad</a></h4>
                                </li>
                                <!--product-->

                                <li class="product">
                                    <figure class="img-animi">
                                        <div class="actions trans">
                                            <a class="link-layer" href="#">&nbsp;</a>
                                            <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>
                                        <a href="#"><img src="assets/images/electronics/product4.jpg" alt=""></a>
                                    </figure>

                                    <div class="price-wrap">
                                        <div class="price">
                                            <del>RM680.00</del>
                                            <ins>RM660.00 </ins>
                                        </div>

                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>
                                    <h4><a href="#">Sony KDL-55W650D</a></h4>
                                </li>
                                <!--product-->

                                <li class="product">
                                    <figure class="img-animi">
                                        <div class="actions trans">
                                            <a class="link-layer" href="#">&nbsp;</a>
                                            <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>

                                        <a href="#"><img src="assets/images/electronics/product5.jpg" alt=""></a>
                                    </figure>

                                    <div class="price-wrap">
                                        <div class="price">
                                            <del>RM189.00</del>
                                            <ins>RM189.00 </ins>
                                        </div>

                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>
                                    <h4><a href="#">Samsung Galaxy S8+ </a></h4>
                                </li>
                                <!--product-->

                                <li class="product new">
                                    <figure class="img-animi">
                                        <div class="tag new">new</div>
                                        <div class="actions trans">
                                            <a class="link-layer" href="#">&nbsp;</a>
                                            <a href="#" class="actn add-to-favorite" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            <a href="#quick-view-popup" class="actn" data-toggle="tooltip" data-placement="top" data-rel="quickview-popup" title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>

                                        <a href="#"><img src="assets/images/electronics/product6.jpg" alt=""></a>
                                    </figure>

                                    <div class="price-wrap">
                                        <div class="price">
                                            <ins>RM30.00 </ins>
                                        </div>

                                        <div class="star-rate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                        </div>
                                    </div>
                                    <h4><a href="#">Sony Headphone</a></h4>
                                </li>
                                <!--product-->
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!--products--> 
                    </div>
                    <!--left-->

                    <div class="col-md-3 col-sm-3 col-xs-12 sidebar offer-wrap">
                        <div class= "sidebar-offer text-center">
                            <div class="tag">offer</div>

                            <div class="offer-slide">
                                <div class="product">
                                    <figure>
                                        <a href="#"><img src="assets/images/electronics/offer-product.jpg" alt=""></a>
                                    </figure>

                                    <h4 class="text-uppercase bm-0"><a href="#">Nikon D3400</a></h4>
                                    <div class="price pri-font bm-10"><del>RM500.00</del><ins>RM480.00 </ins></div>
                                    <div class="stk-info bm-20">
                                        <div class="info">
                                            <span>Sold <strong>20</strong></span>
                                            <span>In stock <strong>20</strong></span>
                                        </div>
                                        <div class="progress">
                                            <div class="bar pri-bg" data-percentage="80"></div>
                                        </div>
                                    </div>

                                    Hurry up! Offer ends in:
                                    <div class="count-down" data-end-date="April 2, 2018"></div> 
                                </div>
                                <!--single offer-->

                                <div class="product"> 
                                    <figure>
                                        <a href="#"><img src="assets/images/electronics/offer-iwatch.jpg" alt=""></a>
                                    </figure>

                                    <h4 class="text-uppercase bm-0"><a href="#">Smart watch</a></h4>
                                    <div class="price pri-font bm-10"><del>RM300.00</del><ins>RM280.00 </ins></div>
                                    <div class="stk-info bm-20">
                                        <div class="info">
                                            <span>Sold <strong>20</strong></span>
                                            <span>In stock <strong>20</strong></span>
                                        </div>
                                        <div class="progress">
                                            <div class="bar pri-bg" data-percentage="80"></div>
                                        </div>
                                    </div>

                                    Hurry up! Offer ends in:
                                    <div class="count-down" data-end-date="April 5, 2018"></div> 
                                </div>
                                <!--single offer-->

                                <div class="product"> 
                                    <figure>
                                        <a href="#"><img src="assets/images/electronics/offer-ideapad.jpg" alt=""></a>
                                    </figure>

                                    <h4 class="text-uppercase bm-0"><a href="#">Idea-pad 520</a></h4>
                                    <div class="price pri-font bm-10"><del>RM500.00</del><ins>RM480.00 </ins></div><div class="stk-info bm-20">
                                        <div class="info">
                                            <span>Sold <strong>20</strong></span>
                                            <span>In stock <strong>20</strong></span>
                                        </div>
                                        <div class="progress">
                                            <div class="bar pri-bg" data-percentage="80"></div>
                                        </div>
                                    </div>

                                    Hurry up! Offer ends in:
                                    <div class="count-down" data-end-date="April 7, 2018"></div> 
                                </div>
                                <!--single offer-->
                            </div> 
                        </div>                        
                        <!--offer--> 
                    </div>
                    <!--sidebar-->
                </div>
                <!--new arrival-->

                <div class="row sec-mar promo-2-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="promo-2 img-animi">
                                    <div class="content">
                                        <div>
                                            <h4 class="bm-5 text-uppercase"><a href="#">4K ultra HD, smart tv</a></h4>
                                            <p>
                                                Completely productivate pandemic niche markets rather than.
                                            </p>

                                            <a href="#" class="btn  btn-link"><u>Shop now <i class="fa fa-angle-right"></i></u></a>
                                        </div>
                                    </div>

                                    <figure>
                                        <img src="assets/images/electronics/promo-banner1.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <!--single promo-->

                            <div class="col-md-6 col-sm-6">
                                <div class="promo-2 right img-animi">
                                    <div class="content ">
                                        <div>
                                            <h4 class="bm-5 text-uppercase"><a href="#">Apple i watch 2.0</a></h4>
                                            <p>
                                                Completely productivate pandemic niche markets rather than.
                                            </p>

                                            <a href="#" class="btn  btn-link"><u>Shop now <i class="fa fa-angle-right"></i></u></a>
                                        </div>
                                    </div>

                                    <figure>
                                        <img src="assets/images/electronics/promo-banner2.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <!--single promo-->
                        </div>   
                    </div>
                </div>
                <!--promo banner--> 
            </div>
            <!--container-->

            <div class="sec-mar">
                <div class="bg-soft-gray sec-padding">
                    <div class="container">
                        <div class="row"> 
                            <div class="col-md-4 col-sm-4 hot-deal">
                                <div class="title bm-30">
                                    <h5><span>Hot Deal</span></h5>
                                </div>
                                <div class="clearfix"></div>

                                <div class="product-wrap pdt-small">
                                    <ul class="products">
                                        <li class="product">
                                            <figure class="img-animi">
                                                <a href="#"><img src="assets/images/electronics/product1.jpg" alt=""></a>
                                            </figure>

                                            <h6 class="pri-font"><a href="#">Samsung Galaxy S8+ </a></h6>
                                            <div class="star-rate bm-5">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>

                                            <div class="price bm-5">
                                                <del>RM189.00</del>
                                                <ins>RM189.00 </ins>
                                            </div>

                                            <a href="#" class="btn btn-link"><i class="pe-7s-cart"></i> Add to cart</a> 
                                        </li>
                                        <!--product-->

                                        <li class="product">
                                            <figure class="img-animi">
                                                <a href="#"><img src="assets/images/electronics/product2.jpg" alt=""></a>
                                            </figure>

                                            <h6 class="pri-font"><a href="#">Sony Headphone</a></h6>
                                            
                                            <div class="star-rate bm-5">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>

                                            <div class="price bm-5">
                                                <ins>RM40.00 </ins>
                                            </div>

                                            <a href="#" class="btn btn-link"><i class="pe-7s-cart"></i> Add to cart</a> 
                                        </li>
                                        <!--product-->

                                        <li class="product">
                                            <figure class="img-animi">
                                                <a href="#"><img src="assets/images/electronics/product3.jpg" alt=""></a>
                                            </figure>

                                            <h6 class="pri-font"><a href="#">Gen 3 Smartwatch</a></h6>
                                            <div class="star-rate bm-5">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>

                                            <div class="price bm-5">
                                                <ins>RM40.00 </ins>
                                            </div>

                                            <a href="#" class="btn btn-link"><i class="pe-7s-cart"></i> Add to cart</a> 
                                        </li>
                                        <!--product-->
                                    </ul>
                                </div>
                            </div> 
                            <!--hot deal-->

                            <div class="col-md-4 col-sm-4 best-seller">
                                <div class="title bm-30">
                                    <h5><span>Best Seller</span></h5>
                                </div>
                                <div class="clearfix"></div>

                                <div class="product-wrap pdt-small">
                                    <ul class="products">
                                        <li class="product">
                                            <figure class="img-animi">
                                                <a href="#"><img src="assets/images/electronics/product4.jpg" alt=""></a>
                                            </figure>

                                            <h6 class="pri-font"><a href="#">Sony KDL-55W650D </a></h6>
                                            <div class="star-rate bm-5">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>

                                            <div class="price bm-5">
                                                <del>RM189.00</del>
                                                <ins>RM189.00 </ins>
                                            </div>

                                            <a href="#" class="btn btn-link"><i class="pe-7s-cart"></i> Add to cart</a>  
                                        </li>
                                        <!--product-->

                                        <li class="product">
                                            <figure class="img-animi">
                                                <a href="#"><img src="assets/images/electronics/product5.jpg" alt=""></a>
                                            </figure>

                                            <h6 class="pri-font"><a href="#">Samsung Galaxy S8+</a></h6>
                                            
                                            <div class="star-rate bm-5">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>

                                            <div class="price bm-5">
                                                <ins>RM40.00 </ins>
                                            </div>

                                            <a href="#" class="btn btn-link"><i class="pe-7s-cart"></i> Add to cart</a> 
                                        </li>
                                        <!--product-->

                                        <li class="product">
                                            <figure class="img-animi">
                                                <a href="#"><img src="assets/images/electronics/product6.jpg" alt=""></a>
                                            </figure>

                                            <h6 class="pri-font"><a href="#">Sony Headphone</a></h6>
                                            <div class="star-rate bm-5">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>

                                            <div class="price bm-5">
                                                <ins>RM40.00 </ins>
                                            </div>

                                            <a href="#" class="btn btn-link"><i class="pe-7s-cart"></i> Add to cart</a> 
                                        </li>
                                        <!--product-->
                                    </ul>
                                </div>
                            </div> 
                            <!--best deal-->

                            <div class="col-md-4 col-sm-4 top-rated">
                                <div class="title bm-30">
                                    <h5><span>Top Rated</span></h5>
                                </div>
                                <div class="clearfix"></div>

                                <div class="product-wrap pdt-small">
                                    <ul class="products">
                                        <li class="product">
                                            <figure class="img-animi">
                                                <a href="#"><img src="assets/images/electronics/product7.jpg" alt=""></a>
                                            </figure>

                                            <h6 class="pri-font"><a href="#">Smartwatches</a></h6>
                                            <div class="star-rate bm-5">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>

                                            <div class="price bm-5">
                                                <del>RM189.00</del>
                                                <ins>RM189.00 </ins>
                                            </div>

                                            <a href="#" class="btn btn-link"><i class="pe-7s-cart"></i> Add to cart</a> 
                                        </li>
                                        <!--product-->

                                        <li class="product">
                                            <figure class="img-animi">
                                                <a href="#"><img src="assets/images/electronics/product8.jpg" alt=""></a>
                                            </figure>

                                            <h6 class="pri-font"><a href="#">IdeaPad 320-17IKBR</a></h6>
                                            
                                            <div class="star-rate bm-5">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>

                                            <div class="price bm-5">
                                                <ins>RM40.00 </ins>
                                            </div>

                                            <a href="#" class="btn btn-link"><i class="pe-7s-cart"></i> Add to cart</a> 
                                        </li>
                                        <!--product-->

                                        <li class="product">
                                            <figure class="img-animi">
                                                <a href="#"><img src="assets/images/electronics/product3.jpg" alt=""></a>
                                            </figure>

                                            <h6 class="pri-font"><a href="#">Gen 3 Smartwatch</a></h6>
                                            <div class="star-rate bm-5">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                            </div>

                                            <div class="price bm-5">
                                                <ins>RM40.00 </ins>
                                            </div>

                                            <a href="#" class="btn btn-link"><i class="pe-7s-cart"></i> Add to cart</a> 
                                        </li>
                                        <!--product-->
                                    </ul>
                                </div>
                            </div> 
                            <!--hot deal-->
                        </div>
                    </div>
                </div>
            </div>
            <!--tranding-->

            <div class="brands sec-mar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 bm-30">
                            <div class="bdr-title">
                                <h3>Our Brands</h3>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <ul class="brand-slider">
                                <li><img src="assets/images/electronics/samsung.jpg" alt=""></li>
                                <li><img src="assets/images/electronics/nokia.jpg" alt=""></li>
                                <li><img src="assets/images/electronics/canon.jpg" alt=""></li>
                                <li><img src="assets/images/electronics/apple.jpg" alt=""></li>
                                <li><img src="assets/images/electronics/htc.jpg" alt=""></li>
                                <li><img src="assets/images/electronics/lg.jpg" alt=""></li>
                                <li><img src="assets/images/electronics/nokia.jpg" alt=""></li>
                                <li><img src="assets/images/electronics/canon.jpg" alt=""></li>
                                <li><img src="assets/images/electronics/lg.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--brands-->
        </main>

        <footer>
            <div class="footer-top bg-dark sec-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <h5>Customer Service</h5>

                            <ul class="footer-nav">
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Return</a></li>
                                <li><a href="#">Site map</a></li>
                                <li><a href="#">Brand</a></li>
                                <li><a href="#">Gift Vouchers</a></li>
                            </ul>
                        </div>
                        <!--widget-->

                        <div class="col-md-3 col-sm-3">
                            <h5>Information</h5>

                            <ul class="footer-nav">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                        <!--widget-->

                        <div class="col-md-3 col-sm-3">
                            <h5>Account</h5>

                            <ul class="footer-nav">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Specials</a></li>
                            </ul>
                        </div>
                        <!--widget-->

                        <div class="col-md-3 col-sm-3">
                            <h5>Contact us</h5>
                            <div class="contact-info">
                                <p>
                                    <i class="fa fa-map-marker"></i> Lorem Ipsum is simply dummy text of the printing and typesetting.
                                </p>

                                <p>
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="#">info@yourdomain.com</a>
                                </p>

                                <p>
                                    <i class="fa fa-phone"></i> 01 234 5678 / 01 234 5698
                                </p>
                            </div>
                        </div>
                        <!--widget-->
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="container">
                    <div class="row footer-bottom">
                        <div class="col-md-4 col-sm-4">
                            Copyright &copy; 2018 - Electro, All right reserved
                        </div>
                        <div class="col-md-4 col-sm-4 cards text-center">
                            <ul class="cards">
                                <li><i class="icofont icofont-paypal"></i></li>
                                <li><i class="icofont icofont-maestro"></i></li>
                                <li><i class="icofont icofont-discover"></i></li>
                                <li><i class="icofont icofont-american-express"></i></li>
                            </ul>
                        </div>
                        <!--cards-->

                        <div class="col-md-4 col-sm-4 text-right">
                            <ul class="social">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--social-->
                    </div>
                </div>
            </div>
        </footer>
        <!--footer-->
    </div> 
    <!--wrap-->

    <div id="morphsearch" class="morphsearch">
        <div class="morphsearch-content">
            <div class="container">
                <span class="morphsearch-close"></span>

                <form class="morphsearch-form">
                    <input class="morphsearch-input" type="search" placeholder="Search..."/>
                    <button class="morphsearch-submit" type="submit"><i class="pe-7s-search"></i></button>
                </form> 
            </div>
        </div><!-- /morphsearch-content -->        
    </div>
    <!--search wrap-->

    <div class="modal fade" id="newsletter">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <figure>
                            <img src="assets/images/electronics/newsletter-bg.jpg" alt="">
                        </figure>

                        <div class="content-hold">
                            <div class="wrap">
                                <h2 class="text-uppercase text-white">SIGN UP AND <br> CONNECT TO Electro!</h2>
                                <h6 class="text-white bm-30">Sign up for Exclusive Updates, New Arrivals and and Discount offers.</h6>

                                <form>
                                    <div class="form-group bm-0">
                                        <input type="text" placeholder="Email address">
                                        <input type="submit" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>  
    </div>
    <!-- /.modal -->

    <div id="quick-view-popup">
        <div class="qv-wrap">
            <div class="row product">
                <div class="col-md-6 col-sm-6 image pdt-single-slider">
                    <div class="product-thumb-slider layout-btm-thumb">
                        <div class="slide-top">
                            <ul class="qv-single-image single-2">
                                <li>
                                    <figure><img src="assets/images/electronics/pdt-single-slide1.jpg" alt=""></figure>
                                </li>
                                <li>
                                    <figure><img src="assets/images/electronics/pdt-single-slide2.jpg" alt=""></figure>
                                </li>
                                <li>
                                    <figure><img src="assets/images/electronics/pdt-single-slide3.jpg" alt=""></figure>
                                </li>
                                <li>
                                    <figure><img src="assets/images/electronics/pdt-single-slide4.jpg" alt=""></figure>
                                </li>
                                <li>
                                    <figure><img src="assets/images/electronics/pdt-single-slide5.jpg" alt=""></figure>
                                </li>
                                <li>
                                    <figure><img src="assets/images/electronics/pdt-single-slide6.jpg" alt=""></figure>
                                </li>
                            </ul>
                        </div>

                        <ul class="qv-single-thumb thumb-2">
                            <li>
                                <figure><img src="assets/images/electronics/pdt-single-slide1.jpg" alt=""></figure>
                            </li>
                            <li>
                                <figure><img src="assets/images/electronics/pdt-single-slide2.jpg" alt=""></figure>
                            </li>
                            <li>
                                <figure><img src="assets/images/electronics/pdt-single-slide3.jpg" alt=""></figure>
                            </li>
                            <li>
                                <figure><img src="assets/images/electronics/pdt-single-slide4.jpg" alt=""></figure>
                            </li>
                            <li>
                                <figure><img src="assets/images/electronics/pdt-single-slide5.jpg" alt=""></figure>
                            </li>
                            <li>
                                <figure><img src="assets/images/electronics/pdt-single-slide6.jpg" alt=""></figure>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--slider-->
                <!--quick view start-->
                <div class="col-md-6 col-sm-6 summary ">
                    <div class="wrap">
                        <div class="pdt-cat bm-5">
                            <span>Ladies fashion</span>
                        </div>

                        <h4>Ladies black full sleeves </h4>

                        <div class="price-wrap">
                            <div class="price"><del>RM189.00</del><ins>RM189.00 </ins></div>
                            <div class="star-rate">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                            </div>
                        </div>
                        <!--price wrap-->

                        <div class="disc bm-20">
                            Globally administrate synergistic web services after team driven technology. Professionally customize cutting-edge information vis-a-vis value-added internal or "organic" sources. Holisticly develop value-added communities via orthogonal products.
                        </div>
                        <!--disc-->

                        <div class="flx-element bm-20">
                            <div><strong>Availability :</strong> 10
                                <span class="text-green"><i class="fa fa-check-square"></i> Stock</span>
                            </div>
                            <div><strong>SKU :</strong> BLFG01</div>
                        </div>
                        <!--flex-->

                        <div class="color-option bm-20">
                            <h6 class="bm-5">Select color</h6>

                            <div class="color-filter">
                                <form>
                                    <div class="radio-wrap red">
                                        <input type="radio" name="color">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--red-->

                                    <div class="radio-wrap black">
                                        <input type="radio" name="color">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--black-->

                                    <div class="radio-wrap yellow">
                                        <input type="radio" name="color">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--yellow-->

                                    <div class="radio-wrap blue">
                                        <input type="radio" name="color">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--blue-->
                                </form>
                            </div>
                        </div>
                        <!--color option--> 

                        <div class="btn-wrap bm-20">
                            <input type="number" value="1" title="Qty" class="input-text qty" size="4">
                            <a href="#" class="btn pri-bg"><i class="pe-7s-cart"></i> ADD TO CART</a>
                            <a href="#" class="btn bdr"><i class="pe-7s-like"></i></a>
                        </div>
                        <!--btn wrap-->

                        <div class="share pri-font">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i> facebook</a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i> twitter</a>
                            <a href="#" class="pin"><i class="fa fa-pinterest-p"></i> pinterest</a>
                        </div>
                    </div>
                </div>
                <!--summery-->
            </div>
        </div>
    </div>
    <!--quick view-->

    <a href="#" class="back-to-top"><i class="fa fa-long-arrow-up"></i></a>
    
    <!-- jQuery library -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/touch.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/youtube-jquery.js"></script>
    <script src="assets/js/jquery.fractionslider.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/jarallax-video.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/threesixty.min.js"></script>
    <script src="assets/js/jquery.amaran.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>