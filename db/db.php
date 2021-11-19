<?php

$host = "localhost";
$user = "Webuser";
$password = "Lab2021";
$database = "webshop";

$con = mysqli_connect($host, $user, $password) or die ("Unable to connect with $host");
mysqli_select_db($con, $database) or die ("Database unavailable");

