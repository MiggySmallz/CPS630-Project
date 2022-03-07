<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">

    <head>
        <title>Smart Customer Services</title>
        <link rel="stylesheet" href="project-team19.css">
    </head>

    <body>

        <div class="menu-bar">
            <div id="logo">
                <img src="logo.png">
            </div>
            <div>
                <a href="index.html">Home</a>
            </div>
            <div>
                Types Of Services       
            </div>
            <div>
                Reviews
            </div>
            <div>
                Shopping Cart
            </div>
            <div>
                About Us
            </div>
            <div>
                Contact Us
            </div>
            <div>
                <a href="signup.php">Sign Up</a>
            </div>
            <div>
                Sign In
            </div>
        </div>

        <form id="signup" action="" method="post">

            <div id="signInField">
                <label>Email:</label> <input type="text" name="email"><br>
                <label>Password:</label> <input type="text" name="password"><br>
                <input type="submit" name="signUp" value="Sign Up">
            </div>
        </form>

    </body>

</html>

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
?>

<?php 
    session_start(); 

    if (isset($_POST['signUp'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    echo $email . " " . $password;
    
    /*
    if (isset($_POST['email']) && isset($_POST['password'])) {
    
        function validate($data){
    
           $data = trim($data);
    
           $data = stripslashes($data);
    
           $data = htmlspecialchars($data);
    
           return $data;
    
        }
    }
    */
?>


