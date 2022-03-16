<?php 

function func1($user_id)
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

        // session_start();
        // $user_id = $_SESSION['user_id']; 
        // echo $user_id;


        $result = mysqli_query($conn,"SELECT * FROM `users` WHERE user_id = $user_id");

        $data = $result->fetch_assoc();

        return $data['address'];

        $conn->close();

        
    }

?>