<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASWORD", "");
    define("DB_NAME", "forma90");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo 'Klaida: ' . $mysqli->connect_error;
        exit();
    }

    mysqli_query($mysqli, "INSERT INTO subscription (name, email, phone, message)
    VALUES ('$_POST[name]', '$_POST[email]', '$_POST[phone]', '$_POST[message]')");