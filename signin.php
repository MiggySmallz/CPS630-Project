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
                <label>Log In Id:</label> <input type="text" name="login_id" required><br>
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

        $login_id = validate($_POST['login_id']);
        $password = validate($_POST['password']);

        $sql = "SELECT * FROM users WHERE login_id='$login_id' AND password='$password'";
        $result = mysqli_query($connect, $sql);

        function redirect($url, $permanent = false) {
            if (headers_sent() === false) header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
            exit();
        }

        if (mysqli_num_rows($result) === 1) {
            while ($row = $result -> fetch_assoc()) {
                if (!isset($_SESSION['login_id']) && !isset($_SESSION['password'])) {
                    $_SESSION['login_id'] = $row['login_id'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['address'] = $row['address'];
                    $_SESSION['user_id'] = $row['user_id'];
                    redirect("index.php");
                }
            }
        }
        else {
            echo "<br>" . "Your ID or password is incorrect.";
        }

        $sql = "SELECT login_id, password FROM users";
        $result = mysqli_query($connect, $sql);
    
        if ($result-> num_rows > 0) {
            echo "<div align='center'><table><tr><th>Email</th><th>Password</th></th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["login_id"]."</td><td>  ".$row["password"] . "</td></tr>";
            }
            echo "</table></div>";
        } else {
            echo "0 results" . "<br>";
        }
    }
?>