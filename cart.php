<?php

session_start();

include("includes/db.php");
include("includes/secondary-header.php");

?>

        <div class="pg-header jarallax overlay parlx-pad sec-mar">
            <img class="jarallax-img" src="assets/images/page-title.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center"> 
                        <h2>Cart</h2>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Cart</li>
                        </ul>
                    </div>              
                </div>
            </div>
        </div>
        <!--page title-->

        <main class="main cart"> 
            <div class="container">
                <form action="#">  
                    <div class="row sec-mar">                    
                        <div class="col-md-12 col-sm-12">                        
                            <table class="table_shop">
                                <thead>
                                    <tr>
                                        <th class="pdt_remove"></th>
                                        <th class="pdt_name">Product</th>
                                        <th class="pdt_price">Price</th>
                                        <th class="pdt_qty">Quantity</th>
                                        <th class="pdt_subtotal">Total</th> 
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="crt_itm">
                                        <td class="pdt_remove" data-title="Remove"> <a href="#"><i class="pe-7s-close"></i></a> </td>

                                        <td class="pdt_name" data-title="Product name">
                                            <figure class="pdt_thumb">
                                                <img src="assets/images/cart-pdt-thumb1.jpg" alt="">
                                            </figure>

                                            <span class="pdt_title">Ladies black full sleeves</span>
                                        </td>

                                        <td class="pdt_price" data-title="Price">RM175.00</td>

                                        <td class="pdt_qty" data-title="Quantity">
                                            <input type="number" value="1" title="Qty" class="input-text qty" size="4">
                                        </td>

                                        <td class="pdt_subtotal" data-title="Total">RM175.00</td> 
                                    </tr>
                                    <!--single item-->

                                    <tr class="crt_itm">
                                        <td class="pdt_remove" data-title="Remove"> <a href="#"><i class="pe-7s-close"></i></a> </td>

                                        <td class="pdt_name" data-title="Product name">
                                            <figure class="pdt_thumb">
                                                <img src="assets/images/cart-pdt-thumb2.jpg" alt="">
                                            </figure>

                                            <span class="pdt_title">Men’s shirt</span>
                                        </td>

                                        <td class="pdt_price" data-title="Price">RM175.00</td>

                                        <td class="pdt_qty" data-title="Quantity">
                                            <input type="number" value="1" title="Qty" class="input-text qty" size="4">
                                        </td>

                                        <td class="pdt_subtotal" data-title="Total">RM175.00</td> 
                                    </tr>
                                    <!--single item--> 

                                    <tr class="crt_itm">
                                        <td class="pdt_remove" data-title="Remove"> <a href="#"><i class="pe-7s-close"></i></a> </td>

                                        <td class="pdt_name" data-title="Product name">
                                            <figure class="pdt_thumb">
                                                <img src="assets/images/cart-pdt-thumb3.jpg" alt="">
                                            </figure>

                                            <span class="pdt_title">Ladies full sleeves</span>
                                        </td>

                                        <td class="pdt_price" data-title="Price">RM175.00</td>

                                        <td class="pdt_qty" data-title="Quantity">
                                            <input type="number" value="1" title="Qty" class="input-text qty" size="4">
                                        </td>

                                        <td class="pdt_subtotal" data-title="Total">RM175.00</td> 
                                    </tr>
                                    <!--single item-->

                                    <tr class="crt_itm">
                                        <td class="pdt_remove" data-title="Remove"> <a href="#"><i class="pe-7s-close"></i></a> </td>

                                        <td class="pdt_name" data-title="Product name">
                                            <figure class="pdt_thumb">
                                                <img src="assets/images/cart-pdt-thumb4.jpg" alt="">
                                            </figure>

                                            <span class="pdt_title">Ladies full sleeves</span>
                                        </td>

                                        <td class="pdt_price" data-title="Price">RM175.00</td>

                                        <td class="pdt_qty" data-title="Quantity">
                                            <input type="number" value="1" title="Qty" class="input-text qty" size="4">
                                        </td>

                                        <td class="pdt_subtotal" data-title="Total">RM175.00</td> 
                                    </tr>
                                    <!--single item-->  

                                    <tr>
                                        <td colspan="5" class="cupon-action">
                                            <div class="flx-element"> 
                                                <div class="coupon">
                                                    <input type="text"  placeholder="Coupon Code">
                                                    <input type="submit"  value="Apply Coupon">
                                                </div>
                                                <!--coupon-->

                                                <a class="btn btn_cart">Continue shopping</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                        
                        </div>
                        <!--shop table--> 
 
                        <div class="bdr-box cart-collaterals">
                            <h4>Cart Totals</h4>

                            <table class="table_shop">
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>RM700.00</td>
                                    </tr>

                                    <tr>
                                        <td>Shipping</td>
                                        <td>RM25.00</td>
                                    </tr>

                                    <tr>
                                        <td>Grand Total</td>
                                        <td>RM725.00</td>
                                    </tr>
                                </tbody>    
                            </table>

                            <a class="btn pri-bg">PROCEED TO CHECKOUT</a>
                        </div> 
                    </div> 
                </form>               
            </div>  
        </main>
        <!--main-->
        <?php include("includes/footer.php"); ?>
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