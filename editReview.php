<?php

    include('php/template.php');
    include('php/classes.php');

    niksl::connect();
    niksl::beginSession();

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

                            $review = validate($_POST["review"]);

                            if ($review == "") {

                                template::validationEmpty();

                            } else {

                                $query = "UPDATE reviews SET review='$review' WHERE user='$_SESSION[current_user_id]'";
                                $check_result = mysqli_query($connection, $query);

                                template::reviewEdited();

                                niksl::disconnect();

                            }

                            template::editUserVisual();
                            template::deleteUserVisual();

                        ?>

                        <a id="exit" class="fas fa-sign-out-alt" href="php/endSession"></a>

                    </div>

                </div>

            </div>

            <?php template::reviewNav() ?>

        </div>

    </body>

</html>