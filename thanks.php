<?php

    include('template.php');
    session_start();

    $server = "localhost:3306";
    $serverUsername = "root";
    $serverPassword = "parole123";

    $connection = new mysqli($server, $serverUsername, $serverPassword);

    if ($connection->connect_error) {
        die("Connection failed: ". $connection->connect_error);
    }

    mysqli_select_db($connection, "niksl");

    $query = "INSERT INTO reviews (review) VALUES ('$_POST[review]')";

    if ($connection->query($query) === TRUE) {
    //        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $connection->error;
    }

    $connection->close();

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

                    <span id="thankyouHeader">
                        Thank you! <br>
                        Your review is appreciated!
                    </span>

                </div>

            </div>

        </div>

        <?php thankyouNav() ?>

    </div>

    </body>

    <?php

        session_unset();
        session_destroy();

    ?>

</html>

