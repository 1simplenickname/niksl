<?php

    include('php/classes.php');

    niksl::connect();
    niksl::beginSession();

    $newUsername = validate($_POST["newUsername"]);
    $newPassword = validate($_POST["newPassword"]);

    if ($newUsername == "" or $newPassword == "") {

        // do nothing

    } else {

        $query = "UPDATE users SET user='$newUsername', password='$newPassword' WHERE id='$_SESSION[current_user_id]'";
        $result = mysqli_query($connection, $query);

    }

    niksl::endSession();
    niksl::disconnect();

    header("Location: ../reviews");