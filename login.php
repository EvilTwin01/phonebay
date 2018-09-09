<?php

session_start();

include("includes/db.php");
include("includes/secondary-header.php");

?>  

        <main class="main"> 
            <div class="container"> 
                <div class="row sec-padding">
                     <div class="col-md-12 col-sm-12">
                         <div class="login-wrap">
                            <div class="bm-30">
                                <span class="icon lh"><i class="icofont icofont-ui-unlock"></i></span>
                                <h3>Login Account</h3>
                                <p>Enter your username and password to login.</p>
                            </div>

                            <form action="" method="post" >
                                <div class="form-group">
                                    <label>Username / Email <span>* amy@gmail.com</span></label>
                                    <input type="text" placeholder="Your Username / Email" value="amy@gmail.com" name="c_email" autocomplete="off" required>
                                </div>

                                <div class="form-group">
                                    <label>Password <span>* amy123</span></label>
                                    <input type="password" placeholder="***********" value="amy123" name="c_pass" autocomplete="off" required>
                                </div>

                                <div class="form-group flx-element">
                                    <div class="check-wrap">
                                        <input type="checkbox">
                                        <label>Remember me</label>
                                    </div>

                                    <a href="#">Lost Password?</a>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Login" name='login'>
                                </div>

                                Don’t have an account yet? <a href="signup.html"><strong>Signup Now!</strong></a> 
                            </form>
                         </div>
                     </div>
                </div>              
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


<?php

if(isset($_POST['login'])){

    $customer_email = mysqli_real_escape_string($con, $_POST['c_email']);
    $customer_pass = mysqli_real_escape_string($con, $_POST['c_pass']);

    $select_customer = "select * from customer where customer_email='$customer_email'";

    $run_customer = mysqli_query($con,$select_customer);
    $check_customer = mysqli_num_rows($run_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    //$hash_password = $row_customer['customer_pass'];
    //$decrypt_password = password_verify($customer_pass, $hash_password);

    //if($decrypt_password == 0){

    //echo "<script>alert('your password or email is wrong')</script>";

    //exit();

    //}

    //$get_ip = getRealUserIp();

    //$select_cart = "select * from cart where ip_add='$get_ip'";

    //$run_cart = mysqli_query($con,$select_cart);
    //$check_cart = mysqli_num_rows($run_cart);

    if($check_customer==1){
        $_SESSION['customer_email']=$customer_email;
        echo "<script>alert('You are Logged In')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    else{
        $_SESSION['customer_email']=$customer_email;
        echo "<script>alert('wrong password!')</script>";
        session_destroy();
        echo "<script>window.open('index.php','_self')</script>";
    } 
}

?>