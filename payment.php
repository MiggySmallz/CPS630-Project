<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <head>
        <title>Smart Customer Services</title>
        <link rel="stylesheet" href="project-team19.css">
    </head>
    <body>

        <div class="menu-bar">
            <div>
                <a href="index.php"><img id="logo" src="logo.png"></a>
            </div>
            <div>
                <a href="index.php">Home</a>
            </div>
            <div>
                <a href="types_of_services.php">Types Of Services</a>   
            </div>
            <div>
                <a href="reviews.php">Reviews</a>
            </div>
            <div>
                <a href="shopping_cart.php">Shopping Cart</a>
            </div>
            <div>
                <a href="about_us.php">About Us</a>
            </div>
            <div>
                <a href="contact_us.php">Contact Us</a>
            </div>
            <div>
                <a href="signup.php">Sign Up</a>
            </div>
            <div>
                <a href="signin.php">Sign In</a>
            </div>
        </div>

        <form id="signup" action="" method="post">

            <div id="signInField">
                <h2>Already have an account? Sign in here.</h2>
                <label>Log In Id:</label> <input type="text" name="login_id" required><br>
                <label>Password:</label> <input type="password" name="password" required><br>
                <input type="submit" name="save" value="Log in">
            </div>
        </form>

    </body>

</html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "accounts";

    $connect = mysqli_connect($servername, $username, $password);
    $connect->query("CREATE DATABASE IF NOT EXISTS accounts;");
    $connect->close();

    // Create connection
    $connect = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully" . "<br>";

    session_start(); 
?>

<?php 
    function redirect($url, $permanent = false) {
        if (headers_sent() === false) header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
        exit();
    }

    if (isset($_POST['signUp'])) {
        redirect("thank_you.php");
    }
?>
