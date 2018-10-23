<?php

    include("php/classes.php");

    niksl::connect();
    niksl::beginSession();

    $check_query = "DELETE FROM users WHERE id='$_SESSION[current_user_id]'";
    $check_result = mysqli_query($connection, $check_query);

    niksl::endSession();
    niksl::disconnect();

    header("Location: ../reviews");