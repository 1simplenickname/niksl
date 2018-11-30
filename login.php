<?php

    include('php/template.php');
    include('php/classes.php');

    niksl::connect();
    niksl::beginSession();
    niksl::initSession();
    niksl::generateID();

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

                                $check_query = "SELECT * FROM users WHERE id='$_SESSION[current_user_id]' AND password='$_SESSION[current_user_password]'";
                                $check_result = mysqli_query($connection, $check_query);

                                if (mysqli_num_rows($check_result) == 1) {

                                    $query = "SELECT * FROM reviews WHERE user='$_SESSION[current_user_id]'";
                                    $result = mysqli_query($connection, $query);
                                    echo mysqli_num_rows($result);

                                    if (mysqli_num_rows($result) == 1 ) {

                                        template::userHasReview();
                                        template::editUserVisual();
                                        template::deleteUserVisual();

                                    } else {

                                        template::userLogin();
                                        template::editUserVisual();
                                        template::deleteUserVisual();

                                    }

                                } else {
                                    template::loginFailure();
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