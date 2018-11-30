<?php

    include('php/template.php');
    include('php/classes.php');

    niksl::connect();
    niksl::beginSession();
    niksl::initSession();

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

                            if ($_SESSION["current_user"] == "" or $_SESSION["current_user_password"] == "") {

                                template::validationEmpty();

                            } else {

                                $query = "SELECT * FROM users WHERE user='$_SESSION[current_user]'";
                                $result = mysqli_query($connection, $query);

                                if (mysqli_num_rows($result) > 0 ) {

                                    template::userExists();

                                } else {

                                    $query = "INSERT INTO users (user, password) VALUES ('$_SESSION[current_user]', '$_SESSION[current_user_password]')";
                                    $result = mysqli_query($connection, $query);

                                    niksl::generateID();

                                    template::userLogin();
                                    template::editUserVisual();
                                    template::deleteUserVisual();

                                }

                                niksl::disconnect();

                            }


                        ?>

                        <a id="exit" class="fas fa-sign-out-alt" href="php/endSession"></a>

                    </div>

                </div>

            </div>

            <?php template::reviewNav() ?>

        </div>

    </body>

</html>

