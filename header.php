<header>
    <h1 id="title"><a href="index.html" class="orangered">WEBSHOP</a></h1>
    <nav>
        <ul>
            <li <?php if($_SESSION["currentPage"] == "index") {echo("class='currentPage'");} ?>><a href="index.php">HOME</a></li>
            <li <?php if($_SESSION["currentPage"] == "shop") {echo("class='currentPage'");} ?>><a href="shop.php">SHOP</a></li>
        </ul>
    </nav>
</header>