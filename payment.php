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
                <a href="logout.php">Log Out</a>
            </div>
        </div>

        <form id="signup" action="" method="post">

            <div id="signInField">
                <h2>Enter your Payment Info</h2>
                <label>Credit Card Number:</label> <input type="text" name="login_id" required><br>
                <label>CVC:</label> <input type="password" name="password" required><br>
                <input type="submit" name="save" value="Enter">
            </div>
        </form>

    </body>

</html>

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
?>

<?php 
    function redirect($url, $permanent = false) {
        if (headers_sent() === false) header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
        exit();
    }

    if (isset($_POST['save'])) {


        //redirect("thank_you.php");
    }
?>
