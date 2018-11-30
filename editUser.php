<?php

    include('php/template.php');
    include('php/classes.php');

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

                        echo '<div id="reviewPreview"
                                    style="height: 50%; text-align: center; visibility: hidden;">
            
                                    <div id="reviewAuthor"
                                    style="padding: 100px 0 50px 0; font-size: 25px;">
            
                                    Review submitted by: <span style="font-weight: bold;">';
                        echo '
                                    </span>
            
                                    </div>
                                    <div id="reviewContent"
                                    style="width:100%; padding:10px; font-size: 25px; text-align: center; visibility: hidden;">';
                        echo '</div>';

                    ?>

                </div>

                <div id="loginScreen" style="visibility: visible;">

                    <div id="loginHeader">Enter new user data:</div>

                    <form action="editUserData" method="post">

                        <input name="newUsername" type="text"
                               placeholder="username"><br>
                        <input name="newPassword" type="text"
                               placeholder="password"><br>
                        <input type="submit">

                    </form>

                </div>

            </div>

        </div>

            <?php template::reviewNav() ?>

        </div>

    </body>

</html>

