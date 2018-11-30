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

                    <?php

                        $review = validate($_POST["review"]);

                        if ($review == "") {

                            echo '<span id="thankyouHeader">
                                  Error, no fields can be left empty!
                                  </span>';

                        } else {

                            $query = "INSERT INTO reviews (review, user) VALUES ('$review', '$_SESSION[current_user_id]')";
                            $check_result = mysqli_query($connection, $query);

                            echo '<span id="thankyouHeader">
                                  Thank you! <br>
                                  Your review is appreciated!
                                  </span>';

                            niksl::disconnect();

                        }

                    ?>

                </div>

            </div>

        </div>

        <?php template::thankyouNav() ?>

    </div>

    </body>

</html>

