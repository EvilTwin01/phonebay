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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="body-bg-full profile-page">
    <div id="wrapper" class="wrapper">
        <div class="row container-min-full-height">
            <div class="col-lg-8 p-3 login-left">
                <div class="w-50">
                    <h2 class="mb-4 text-center">Welcome back!</h2>
                    <form action="" method="post" class="text-center">
                        <div class="form-group">
                            <label class="text-muted" for="example-email">Email</label>
                            <input type="email" class="form-control form-control-line" id="example-email" name="f_email" value="kumar@gmail.com" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="example-password">Password</label>
                            <input type="password" class="form-control form-control-line" id="example-password" name="f_password" value="kumar123" autocomplete="off">
                        </div>
                        <div class="form-group no-gutters mb-5 text-center"><a href="page-forgot-pwd.html" id="to-recover" class="text-muted fw-700 text-uppercase heading-font-family fs-12">Forgot Password?</a>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group mr-b-20">
                            <button class="btn btn-block btn-rounded btn-md btn-primary text-uppercase fw-600 ripple" type="submit" name="login">Sign In</button>
                        </div>
                    </form>
                    <!-- /form -->
                    <button type="button" class="btn btn-block btn-rounded btn-outline-facebook ripple" title="Login with Facebook">Connect using <span class="fw-700">facebook</span>
                    </button>
                </div>
                <!-- /.w-75 -->
            </div>
            <div class="col-lg-4 login-right d-lg-flex d-none pos-fixed pos-right text-inverse container-min-full-height" style="background-image: url(assets/img/site-bg-small.jpg)">
                <div class="login-content px-3 w-75 text-center">
                    <h2 class="mb-4 text-center fw-300">New here?</h2>
                    <p class="heading-font-family fw-300 letter-spacing-minus">Sign up and discover the many great features that our app provides</p><a class="btn btn-rounded btn-md btn-outline-inverse text-uppercase fw-600 ripple pd-lr-60 mr-t-200">Sign Up</a>
                    <ul class="list-inline mt-4 heading-font-family text-uppercase fs-13 mr-t-20">
                        <li class="list-inline-item"><a href="#">Home</a>
                        </li>
                        <li class="list-inline-item"><a href="#">About</a>
                        </li>
                        <li class="list-inline-item"><a href="#">Contact</a>
                        </li>
                        <li class="list-inline-item"><a href="#">Careers</a>
                        </li>
                    </ul>
                </div>
                <!-- /.login-content -->
            </div>
            <!-- /.login-right -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.wrapper -->
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/material-design.js"></script>
</body>

</html>

<?php

if(isset($_POST['login'])){

    $fulfillment_email = mysqli_real_escape_string($con, $_POST['f_email']);
    $fulfillment_pass = mysqli_real_escape_string($con, $_POST['f_pass']);

    $select_fulfillment = "select * from fulfillment where fulfill_email='$fulfillment_email'";

    $run_fulfillment = mysqli_query($con,$select_fulfillment);
    $check_fulfillment = mysqli_num_rows($run_fulfillment);
    //$row_fulfillment = mysqli_fetch_array($run_fulfillment);
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

    if($check_fulfillment==1){
        $_SESSION['fulfill_email']=$fulfillment_email;
        echo "<script>alert('You are Logged In')</script>";
        echo "<script>window.open('main.php','_self')</script>";
    }
    else{
        $_SESSION['fulfill_email']=$fulfillment_email;
        echo "<script>alert('what is this')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    } 
}

?>