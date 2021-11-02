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
    <p>thuis pagina</p>
</div>
</body>
</html>