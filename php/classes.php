<?php

    class niksl {

        static function connect() {

            global $connection;

            $server = "localhost:3306";
            $serverUsername = "root";
            $serverPassword = "parole123";

            $connection = new mysqli($server, $serverUsername, $serverPassword);

            mysqli_select_db($connection, "niksl");

        }

        static function disconnect() {

            global $connection;

            $connection->close();

        }

        static function beginSession() {

            session_start();

        }

        static function initSession() {

            $_SESSION["current_user"] = validate($_POST["username"]);
            $_SESSION["current_user_password"] = validate($_POST["password"]);

        }

        static function generateID() {

            global $connection;

            $query = "SELECT id FROM users WHERE user='$_SESSION[current_user]'";
            $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
            $_SESSION["current_user_id"] = $row["id"];

        }

        static function endSession() {

            session_start();
            session_unset();
            session_destroy();

        }

    }

    function validate($variable) {

        $variable = trim($variable);
        $variable = stripslashes($variable);
        $variable = htmlspecialchars($variable);
        return $variable;

    }