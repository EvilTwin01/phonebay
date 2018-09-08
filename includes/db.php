<?php

$con = mysqli_connect("localhost","root","test123","phonebay");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>