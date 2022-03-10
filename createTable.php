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

    $sql = "CREATE TABLE users (user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50), tel_no INT(50), email VARCHAR(50), address VARCHAR(100), 
        login_id VARCHAR(50), password VARCHAR(50), balance INT(50))";
    $result = mysqli_query($connect, $sql);
?>