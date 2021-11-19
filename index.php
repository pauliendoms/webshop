<?php

session_start();
$_SESSION["currentPage"] = "index";

require "db/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="assets/favicon.ico" rel="icon">
    <title>SJOV</title>
</head>
<body>
<div class="wrapper">
    <?php
        require "header.php";
    ?>
    <div class="banner">
        <p class="banner_text">Never stop doing what you love.</p>
        <p class="banner_button"><a href="shop.php">SHOP NOW</a></p>
    </div>
    <div class="highlighted">
        <p>Take a look at our highlighted items</p>
        <?php
            $query = "SELECT * FROM Products WHERE Products.status = 1;";
            $result = mysqli_query($con, $query);

            while($product = mysqli_fetch_array($result)) {
                if($product['highlight'] == 1) {
                    echo("
                        <div class=\"product_card\">
                            <img src=\"{$product['photoPath']}\" alt=\"{$product['productName']}\">
                            <p>{$product['productName']}</p>
                        </div>
                    ");
                }
            }
        ?>
    </div>
</div>
</body>
</html>