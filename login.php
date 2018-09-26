<?php

    include('template.php');
    session_start();

    $server = "localhost:3306";
    $serverUsername = "root";
    $serverPassword = "parole123";

    $_SESSION["current_user"] = $_POST["username"];
    $_SESSION["current_user_password"] = $_POST["password"];

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

                    <div id="newReview">

                        <i id="userIcon" class="fas fa-user-circle"></i>
                        <div id="userName">

                            <?php echo $_SESSION["current_user"] ?>

                        </div>

                        <i id="passwordIcon" class="fas fa-key"></i>
                        <div id="userPassword">

                            <?php echo $_SESSION["current_user_password"] ?>

                        </div>

                        <?php

                            $connection = new mysqli($server, $serverUsername, $serverPassword);

                            if ($connection->connect_error) {
                                die("Connection failed: ". $connection->connect_error);
                            }

                            mysqli_select_db($connection, "niksl");

                            $check_query = "SELECT * FROM users WHERE user='$_SESSION[current_user]' AND password='$_SESSION[current_user_password]'";
                            $check_result = mysqli_query($connection, $check_query);

                            if (mysqli_num_rows($check_result) == 1 ) {

                                reviewSuccess();

                            } else {

                                loginFailure();

                            }

                            $connection->close();

                        ?>

                        <a id="exit" class="fas fa-sign-out-alt" href="reviews.php"></a>

                    </div>

                </div>

            </div>

            <?php reviewNav() ?>

        </div>

    </body>

    <?php

        session_unset();
        session_destroy();

    ?>

</html>