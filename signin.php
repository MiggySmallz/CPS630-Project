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
                <a href="signup.php">Sign Up</a>
            </div>
            <div>
                <a href="signin.php">Sign In</a>
            </div>
        </div>

        <form id="signup" action="" method="post">

            <div id="signInField">
                <h2>Already have an account? Sign in here.</h2>
                <label>Username:</label> <input type="text" name="email" required><br>
                <label>Password:</label> <input type="password" name="password" required><br>
                <input type="submit" name="signUp" value="Log in">
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
    if (isset($_POST['signUp'])) {
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = validate($_POST['email']);
        $password = validate($_POST['password']);

        $sql = "SELECT * FROM users WHERE username='$email' AND password='$password'";
        $result = mysqli_query($connect, $sql);

        function redirect($url, $permanent = false) {
            if (headers_sent() === false) header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
            exit();
        }

        if (mysqli_num_rows($result) === 1) {
            while ($row = $result -> fetch_assoc()) {
                if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['password'] = $row['password'];
                    redirect("index.php");
                }
            }
        }
        else {
            echo "<br>" . "Your email or password is incorrect.";
        }

        $sql = "SELECT username, password FROM users";
        $result = mysqli_query($connect, $sql);
    
        if ($result-> num_rows > 0) {
            echo "<div align='center'><table><tr><th>Email</th><th>Password</th></th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["username"]."</td><td>  ".$row["password"] . "</td></tr>";
            }
            echo "</table></div>";
        } else {
            echo "0 results" . "<br>";
        }
    }
?>