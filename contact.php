<?php

    session_start();
    $_SESSION["currentPage"] = "contact";

    require "db/db.php";

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>SJOV</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="assets/favicon.ico" rel="icon">
    <script src="js/jquery.js"></script>
    <script>

        $("document").ready(function() {
            $("#verzenden").click(function () {
                var form = $("#contact");
                var firstname = $("#firstname").val();
                var lastname = $("#lastname").val();
                var email = $("#email").val();
                var password = $("#password").val();

                var errorMessage = $("#error");
                var error = "";

                if (firstname == "" || email == "" || password == "" || lastname == ""){ //bron: https://stackoverflow.com/questions/2013451/test-if-string-contains-only-letters-a-z-%C3%A9-%C3%BC-%C3%B6-%C3%AA-%C3%A5-%C3%B8-etc
                    error = "Fill out all required fields.";
                } else if (!firstname.match(/^[a-zA-Z\u00C0-\u00ff]+$/)){
                    error = "Please, only use alphabetic characters for your name.";
                } else if (!lastname.match(/^[a-zA-Z\u00C0-\u00ff]+$/)){
                    error = "Please, only use alphabetic characters for your name.";
                } else if (!password.match(/^[a-zA-Z\u00C0-\u00ff]+$/)) {
                    error = "Vul alle velden met een sterretje in."
                } else if (!email.includes("@") || !email.includes(".")){
                    error = "Gelieve een geldig email adres in te vullen."
                }

                if (error == "") {
                    // php gebruiken om te checken of email al bestaat in db -> dit kan met ajax
                    console.log("We zijn er voorbij geraakt!");
                    form.submit();
                } else {
                    errorMessage.text(error);
                }


            });
        });
        
        
    </script>
</head>
<body>
    <div class="wrapper">
        <?php
            require "header.php";
        ?>
        <div class="middle">
            <div class="form">
                <form action="none" class="border" method="POST" id="contact" enctype="text/plain">
                    <p>
                        <label for="firstname">First name: <span class="orangered">*</span></label>
                        <input type="text" id="firstname" name="firstname">
                    </p>    
                    <p>
                        <label for="lastname">Last name: <span class="orangered">*</span></label>
                        <input type="text" id="lastname" name="lastname">
                    </p>
                    <p>
                        <label for="email">Email: <span class="orangered">*</span></label>
                        <input type="email" id="email" name="email">
                    </p>
                    <p>
                        <label for="password">Password: <span class="orangered">*</span></label>
                        <input type="password" id="password" name="password">
                    </p>
                    <p>
                        <input type="button" value="Verzenden" id="verzenden">
                        <input type="reset" value="Resetten">
                        <span class="orangered" id="error"></span>
                    </p>    
                </form>
            </div>
        </div>
    </div>
    
</body>

</html>