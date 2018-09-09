<?php

session_start();

include("includes/db.php");
include("includes/secondary-header.php");

?> 

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li class="active">Checkout</li>
                    </ul>
                </div>
            </div>  
            <!--breadcrumb-->

            <div class="checkout-info">
                Returning customer? <a href="#">Click here</a> to login
            </div>
            <!--checkout info-->

            <form class="checkout sec-mar">
                <div class="row">
                    <div id="customer_details" class="col-md-8 col-sm-8 checkout-left"> 
                        <h3>Billing Address</h3>

                        <div class="row billing-fields">
                            <div class="col-sm-6 form-group">
                                <label>First Name <span>*</span></label>
                                <input type="text">
                            </div> 
                            <!--first name--> 

                            <div class="col-sm-6 form-group">
                                <label>Last Name <span>*</span></label>
                                <input type="text">
                            </div>
                            <!--last name-->

                            <div class="col-sm-6 form-group">
                                <label>Email <span>*</span></label>
                                <input type="email">
                            </div>  
                            <!--email-->

                            <div class="col-sm-6 form-group">
                                <label>Telephone</label>
                                <input type="tel">
                            </div> 
                            <!--tel--> 

                            <div class="col-sm-12 form-group">
                                <label>Company Name</label>
                                <input type="text">
                            </div> 
                            <!--company--> 

                            <div class="col-sm-12 form-group">
                                <label>Country</label>
                                <select>
                                    <option>Choose country</option>
                                </select>
                            </div>
                            <!--country-->

                            <div class="col-sm-12 form-group">
                                <label>Address <span>*</span></label>
                                <input type="text" placeholder="Street address">
                                <input type="text" placeholder="Apartment, Suit, Unit etc">
                            </div>
                            <!--country-->

                            <div class="col-sm-6 form-group">
                                <label>Town / City</label>
                                <input type="text">
                            </div>
                            <!--town-->

                            <div class="col-sm-6 form-group">
                                <label>Zip code</label>
                                <input type="text">
                            </div>
                            <!--zip-->                             
                        </div> 
                        <!--billing field-->

                        <div class="row account-field">
                            <div class="col-sm-12 form-group">
                                <div class="check-wrap">
                                    <input type="checkbox">
                                    <label> Create an account?</label>
                                </div>
                            </div>                            
                        </div> 
                        <!--account--> 

                        <div class="row additional-fields">
                            <div class="col-sm-12">
                                <h3>Additional information</h3>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label>Order notes</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>
                        </div>       
                    </div> 
                    <!--left-->

                    <div class="col-md-4 col-sm-4 checkout-right">
                        <div class="bdr-box bm-30">
                            <h3>Have a promotional code?</h3> 
                            <div class="coupon">
                                <input type="text" placeholder="Coupon Code">
                                <input type="submit" value="Apply">
                            </div>                           
                        </div>
                         <!--coupon--> 

                        <div class="bdr-box bm-30 bg-soft-gray checkout-review">
                            <h3>Your order</h3> 
                           <table class="table_shop checkout_review"> 
                                <tbody>
                                    <tr>
                                       <td>Ladies black full sleeves   X 1 </td>
                                       <td>RM110.00</td>
                                    </tr>

                                    <tr>
                                       <td>Ladies black full sleeves   X 1 </td>
                                       <td>RM110.00</td>
                                   </tr> 

                                   <tr>
                                       <td>Ladies black full sleeves   X 1 </td>
                                       <td>RM110.00</td>
                                    </tr>

                                    <tr>
                                       <td>Ladies black full sleeves   X 1 </td>
                                       <td>RM110.00</td>
                                   </tr> 
                                </tbody>    

                                <tfoot>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>RM440.00</td>
                                    </tr>

                                    <tr>
                                        <td>Total</td>
                                        <td>RM440.00</td>
                                    </tr>
                                </tfoot>                          
                           </table>                        
                        </div>
                        <!--checkout review--> 

                        <div class="bdr-box checkout-payment">
                            <ul class="pay_mthd">
                                <li>
                                    <input type="radio" name="pay_mod" value="bacs" checked="checked">
                                    <label> Direct Bank Transfer </label>
                                    <div class="payment_box payment_method_bacs">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </li>

                                <li>
                                    <input type="radio" name="pay_mod" value="bacs">
                                    <label> Check Payments </label>
                                </li>

                                <li>
                                    <input type="radio" name="pay_mod" value="bacs">
                                    <label> Cash on Delivery </label>
                                </li>

                                <li>
                                    <input type="radio" name="pay_mod" value="bacs">
                                    <label> PayPal <img src="assets/images/check-out-paypal.jpg" alt=""></label>
                                </li>
                            </ul>

                            <div class="place-order">
                                <input type="submit" value="place order">
                            </div>
                        </div>

                    </div> 
                    <!--right-->  
                </div>
            </form>
            <!--checkout-->               
        </div>
       <!--container--> 

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