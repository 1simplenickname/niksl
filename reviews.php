<?php

    include('php/template.php');
    include('php/classes.php');

    niksl::connect();

?>

<!doctype html>
<html lang="en">

    <head>

        <title>Niks Ļ</title>
        <!--UTF-8 character support-->
        <meta charset="UTF-8">
        <?php template::generateHeader(); ?>

    </head>

    <body>

        <div id="container">

            <div id="content">

                <div id="reviewScreen">

                    <?php

                        $check_query = "SELECT * FROM reviews ORDER BY RAND() LIMIT 1";
                        $check_result = mysqli_query($connection, $check_query);
                        $row = $check_result->fetch_assoc();
                        echo '<div id="reviewPreview"
                        style="height: 50%; text-align: center; visibility: visible">

                        <div id="reviewAuthor"
                        style="padding: 100px 0 50px 0; font-size: 25px;">

                        Review submitted by: <span style="font-weight: bold;">';
                        $query = "SELECT user FROM users WHERE id='$row[user]'";
                        $check = mysqli_query($connection, $query);
                        $reviewer = $check->fetch_assoc();
                        echo $reviewer["user"];
                        echo '
                        </span>

                        </div>
                        <div id="reviewContent"
                        style="width:100%; padding:10px; font-size: 25px; text-align: center">';
                        echo $row["review"];
                        echo '</div>';

                        niksl::disconnect();

                    ?>

                    </div>

                    <div id="signupEntrance" style="transform: translateY(-30%);">

                        <i class="fas fa-clipboard-list xlicon" onclick="signup()"></i>
                        <div id="signupDesc">Sign up</div>

                    </div>
                    <div id="loginEntrance" style="transform: translateY(-30%);">

                        <i class="fas fa-key xlicon" onclick="login()"></i>
                        <div id="loginDesc">Log in</div>

                    </div>

                    <div id="loginScreen" style="visibility: hidden;">

                        <div id="loginHeader">Log in:</div>

                        <form action="login" method="post">

                            <input name="username" type="text"
                                   placeholder="username"><br>
                            <input name="password" type="password"
                                   placeholder="password"><br>
                            <input type="submit">

                        </form>

                    </div>
                    <div id="signupScreen" style="visibility: hidden;">

                        <div id="signupHeader">Sign up:</div>

                        <form action="signup" method="post">

                            <input name="username" type="text"
                                   placeholder="username"><br>
                            <input name="password" type="password"
                                   placeholder="password"><br>
                            <input type="submit">

                        </form>

                    </div>

                </div>

        </div>

        <?php template::reviewNav() ?>

        <script>

            function toggleVisibility(target, state) {
                document.getElementById(target).style.visibility = state;
            }

            function signup() {
                toggleVisibility("signupScreen", "visible");
                toggleVisibility("reviewPreview", "hidden");
                toggleVisibility("signupEntrance", "hidden");
                toggleVisibility("loginEntrance", "hidden");
            }

            function login() {
                toggleVisibility("loginScreen", "visible");
                toggleVisibility("reviewPreview", "hidden");
                toggleVisibility("loginEntrance", "hidden");
                toggleVisibility("signupEntrance", "hidden");
            }

        </script>

        </div>

    </body>

</html>

