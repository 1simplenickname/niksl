<!doctype html>
<html lang="en">

    <head>

        <title>Niks Ļ</title>
        <!--Favicons-->
<!--        <link rel="shortcut icon" href="img/icons/favicon.ico">-->
        <!--UTF-8 character support-->
        <meta charset="UTF-8">
        <!--Display scaling support-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Styling and animations-->
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

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

                <div id="skillsScreen"></div>

                <div id="jobScreen"></div>

                <div id="hobbiesScreen"></div>

            </div>

            <div id="navigation">

                <div id="contactsNav" class="item focused">

                    <div class="text">Contacts</div>

                </div>
                <div id="skillsNav" class="item unfocused">

                    <div class="text">Skills</div>

                </div>
                <div id="jobsNav" class="item unfocused">

                    <div class="text jobs">Jobs</div>

                </div>
                <div id="hobbiesNav" class="item unfocused">

                    <div class="text">Hobbies</div>

                </div>

            </div>

        </div>

        <!--Scripts-->
        <script src="js/scripts.js"></script>
        <script>

            let callMe = document.getElementById("callMe");
            let emailMe = document.getElementById("emailMe");
            let findMe = document.getElementById("findMe");

            function showPhone() {

                if (callMe.innerHTML === "call me") {
                    callMe.innerHTML = "+26858216";
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
                    findMe.innerHTML = "Kaivas iela 50/4 - 73a";
                } else {
                    findMe.innerHTML = "find me";
                }

            }

        </script>

        <?php

//            php goes here

        ?>

    </body>

</html>