<header>
    <h1 id="title"><a href="index.php" class="orangered">SJOV</a></h1>
    <nav>
        <ul>
            <li <?php if($_SESSION["currentPage"] == "index") {echo("class='currentPage'");} ?>><a href="index.php">HOME</a></li>
            <li <?php if($_SESSION["currentPage"] == "shop") {echo("class='currentPage'");} ?>><a href="shop.php">SHOP</a></li>
            <li <?php if($_SESSION["currentPage"] == "contact") {echo("class='currentPage'");} ?>><a href="contact.php">CONTACT</a></li>
        </ul>
    </nav>
</header>