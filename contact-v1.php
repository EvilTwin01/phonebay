<?php

session_start();

include("includes/db.php");
include("includes/secondary-header.php");

?>

        <div class="pg-header jarallax overlay parlx-pad sec-mar">
            <img class="jarallax-img" src="assets/images/contact-banner.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center"> 
                        <h2>Contact us</h2>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>              
                </div>
            </div>
        </div>
        <!--page title-->

        <main class="main"> 
            <div class="container">
                 <div class="row bm-50">
                    <div class="col-md-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-xs-12 text-center">
                        <div class="title mid-sep bm-30"><h2>Make an enquiry</h2></div>  

                        <p>Lorem ipsum dolor sit amet  adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor dapibus eget. Mauris tincidunt aliquam lectus sed vestibulum. Vestibulum bibendum suscipit mattis.</p>
                    </div>
                </div>

                <div class="row sec-mar contact-form-1"> 
                    <div class="col-md-8 col-sm-offset-2 col-sm-8 col-md-offset-2">
                        <form>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input type="text" placeholder="First name">
                                </div>
                                <!--name-->

                                <div class="form-group col-sm-6">
                                    <input type="text" placeholder="Last name">
                                </div>
                                <!--last name-->

                                <div class="form-group col-sm-6">
                                    <input type="email" placeholder="Email">
                                </div>
                                <!--name-->

                                <div class="form-group col-sm-6">
                                    <input type="tel" placeholder="Phone">
                                </div>
                                <!--last name--> 

                                <div class="form-group col-sm-12">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                                <!--message-->    

                                <div class="form-group col-sm-12">
                                    <input type="submit" value="SUBMIT">
                               </div>                            
                            </div>
                        </form>
                    </div>
                </div>
             </div> 
             <!--enquiry form-->

             <div class="container">
                 <div class="gutter-0 sec-mar">
                     <div class="row contact-bottom ">
                        <div class="col-md-3 col-sm-3 text-white left">
                            <div class="wrap sec-bg">
                                <h4 class="text-white text-uppercase bm-30">Company information</h4> 

                                 <div class="info">
                                    <div class="icon-wrap">
                                        <span class="icon radius-circle"><i class="pe-7s-phone"></i></span> 
                                    </div>

                                    <div>
                                        <p>+01 234 5685</p> 
                                        <p>+01 234 5685</p>
                                    </div>
                                 </div>

                                 <div class="info">
                                    <div class="icon-wrap">
                                        <span class="icon radius-circle"><i class="pe-7s-mail"></i></span> 
                                    </div>

                                    <div>
                                        <p>info@electro.com</p>   
                                        <p>sales@electro.com</p>
                                    </div>
                                 </div>

                                 <div class="info">
                                    <div class="icon-wrap">
                                        <span class="icon radius-circle"><i class="pe-7s-map-marker"></i></span> 
                                    </div>

                                    <div>
                                        <p>Progressively iterate  <br>
                                        seamless technology </p>
                                    </div>
                                 </div>
                            </div>
                         </div>

                         <div class="col-md-9 col-sm-9">
                             <div class="map-hold">
                                <iframe src="https://www.google.com/maps/embed?pb=!1sm18!1m12!1m3!1d424143.279121209!2d150.65108987709291!3d-33.8479254539181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2snp!4v1513605431022" width="600" height="450"  allowfullscreen></iframe>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
        </main>
        <!--main-->

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