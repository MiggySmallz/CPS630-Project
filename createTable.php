<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "accounts";

    // Create connection
    $connect = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    $sql = "CREATE TABLE users (username VARCHAR(50), password VARCHAR(50))";
    $result = mysqli_query($connect, $sql);
?>