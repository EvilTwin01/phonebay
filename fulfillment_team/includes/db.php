<?php

$con = mysqli_connect("localhost","root","","hermo");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>