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
                <h2>First Time? Sign up here.</h2>
                <label>Username:</label> <input type="text" name="username" required><br>
                <label>Password:</label> <input type="password" name="password" required><br>
                <label>Name:</label> <input type="text" name="name" ><br>
                <label>Phone:</label> <input type="text" name="phone" ><br>
                <label>Address:</label> <input type="text" name="address" ><br>
                <label>Email:</label> <input type="text" name="email" ><br>
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

    $connect = mysqli_connect($servername, $username, $password);
    $connect->query("CREATE DATABASE IF NOT EXISTS accounts;");
    $connect->close();

    // Create connection
    $connect = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
?>

<?php 
    session_start(); 

    if (isset($_POST['signUp'])) {
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = validate($_POST['username']);
        $password = validate($_POST['password']);
        $name = validate($_POST['name']);
        $phone = validate($_POST['phone']);
        $address = validate($_POST['address']);
        $email = validate($_POST['email']);

        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) === 1) {
            echo "<br>" . "Username is already being used";
        }
        else {
            echo "<br>" . "Added to Database";
            $sql = "INSERT INTO users (username, password, name, phone, address, email) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $connect->prepare($sql);
        
            $stmt->bind_param("ssssss", $username, $password, $name, $phone, $address, $email);
            $stmt->execute();
        }

        $sql = "SELECT * FROM users";
        $result = mysqli_query($connect, $sql);
    
        if ($result-> num_rows > 0) {
            echo "<div align='center'><table><tr><th>Username</th><th>Password</th><th>Name</th><th>Phone</th><th>Address</th><th>Email</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["username"] . "</td><td>" . $row["password"] ."</td><td>" . $row["name"] ."</td><td>" . $row["phone"] ."</td><td>" 
                . $row["address"] ."</td><td>" . $row["email"] ."</td></tr>";
            }
            echo "</table></div>";
        } else {
            echo "0 results" . "<br>";
        }

        exit();
    }
?>


