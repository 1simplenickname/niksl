<?php

    include('template.php');

?>

<!doctype html>
<html lang="en">

    <head>

        <title>Niks Ļ</title>
        <!--UTF-8 character support-->
        <meta charset="UTF-8">
        <?php generateHeader(); ?>

    </head>

    <body>

        <div id="container">

            <div id="content">

                <div id="reviewScreen">

                    <div id="signupEntrance" onclick="signup()">

                        <i class="fas fa-clipboard-list xlicon"></i>
                        <div id="signupDesc">Sign up</div>

                    </div>
                    <div id="loginEntrance" onclick="login()">

                        <i class="fas fa-key xlicon"></i>
                        <div id="loginDesc">Log in</div>

                    </div>

                    <div id="loginScreen" style="visibility: hidden;">

                        <div id="loginHeader">Log in:</div>

                        <form action="login.php" method="post">

                            <input name="username" type="text"
                                   placeholder="username"><br>
                            <input name="password" type="password"
                                   placeholder="password"><br>
                            <input type="submit">

                        </form>

                    </div>

                    <div id="signupScreen" style="visibility: hidden;">

                        <div id="signupHeader">Sign up:</div>

                        <form action="signup.php" method="post">

                            <input name="username" type="text"
                                   placeholder="username"><br>
                            <input name="password" type="password"
                                   placeholder="password"><br>
                            <input type="submit">

                        </form>

                    </div>

                </div>

        </div>

        <?php reviewNav() ?>

        <script>

            function toggleVisibility(target, state) {
                document.getElementById(target).style.visibility = state;
            }

            function signup() {

                toggleVisibility("signupScreen", "visible");
                toggleVisibility("signupEntrance", "hidden");
                toggleVisibility("loginEntrance", "hidden");

            }

            function login() {

                toggleVisibility("loginScreen", "visible");
                toggleVisibility("loginEntrance", "hidden");
                toggleVisibility("signupEntrance", "hidden");

            }

        </script>

        </div>

    </body>

</html>