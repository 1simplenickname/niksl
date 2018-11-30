<?php

    include('php/template.php');

?>

<!doctype html>
<html lang="en">

    <head>

        <title>Niks Ļ</title>
        <!--UTF-8 character support-->
        <meta charset="UTF-8">
        <?php template::generateHeader() ?>

    </head>

    <body>

        <div id="container">

            <div id="content">

                <div id="contactsScreen">

                    <div id="photo"></div>
                    <div id="name">Niks Ļeoņenko</div>

                    <div id="contactsDetail">

                        <span id="callMe" onclick="showPhone()">call me</span><br>
                        <span id="emailMe" onclick="showEmail()">e-mail me</span><br>
                        <span id="findMe" onclick="showAddress()">find me</span><br>
                        <br>
                        <div id="247">anywhere, anytime</div>

                    </div>

                </div>

        </div>

        <?php template::indexNav() ?>

        </div>

        <!--Scripts-->
        <script>

            let callMe = document.getElementById("callMe");
            let emailMe = document.getElementById("emailMe");
            let findMe = document.getElementById("findMe");


            function showPhone() {

                if (callMe.innerHTML === "call me") {
                    callMe.innerHTML = "+37126858216";
                } else {
                    callMe.innerHTML = "call me";
                }

            }

            function showEmail() {

                if (emailMe.innerHTML === "e-mail me") {
                    emailMe.innerHTML = "niks.leonenko@icloud.com";
                } else {
                    emailMe.innerHTML = "e-mail me";
                }

            }

            function showAddress() {

                if (findMe.innerHTML === "find me") {
                    findMe.innerHTML = "kaivas iela 50/4 - 73a";
                } else {
                    findMe.innerHTML = "find me";
                }

            }

        </script>

    </body>

</html>