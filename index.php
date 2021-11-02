<?php

session_start();
$_SESSION["currentPage"] = "index";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <title>Webshop</title>
</head>
<body>
<div class="wrapper">
    <?php
        require "header.php";
    ?>
    <div class="banner">
        <img src="assets/G0081100.jpg" alt="Banner Foto" class="banner_foto">
        <p class="banner_text">Never stop doing what you love.</p>
        <p class="banner_button">SHOP NOW</p>
    </div>
    <div class="highlighted">
        <p>Take a look at our highlighted items</p>
    </div>
</div>
</body>
</html>