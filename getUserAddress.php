<?php 

function func1()
    {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "cps630";


        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $result = mysqli_query($conn,"SELECT address FROM `users`;");

        $data = $result->fetch_assoc();

        return $data['address'];

        $conn->close();

        
    }

?>