<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "cps630";

    $connect = mysqli_connect($servername, $username, $password);
    $connect->query("CREATE DATABASE IF NOT EXISTS cps630;");
    $connect->close();

    // Create connection
    $connect = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully" . "<br>";
?>