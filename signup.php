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
                <label>Log In Id:</label> <input type="text" name="login_id" required><br>
                <label>Password:</label> <input type="password" name="password" required><br>
                <label>Name:</label> <input type="text" name="name" ><br>
                <label>Phone:</label> <input type="text" name="phone" ><br>
                <label>Email:</label> <input type="text" name="email" ><br>
                <label>Address:</label> <input type="text" name="address" ><br>
                <label>Balance:</label> <input type="text" name="balance" ><br>
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

        //$sql = "CREATE TABLE user (user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50), tel_no INT(50), email VARCHAR(50), address VARCHAR(50), city_code VARCHAR(50), 
        //login_id VARCHAR(50), password VARCHAR(50), balance INT(50))";

        $login_id = validate($_POST['login_id']);
        $password = validate($_POST['password']);
        $name = validate($_POST['name']);
        $tel_no = validate($_POST['phone']);
        $email = validate($_POST['email']);
        $address = validate($_POST['address']);
        $balance = validate($_POST['balance']);

        $sql = "SELECT * FROM users WHERE login_id='$login_id'";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) === 1) {
            echo "<br>" . "Username is already being used";
        }
        else {
            echo "<br>" . "Added to Database";
            $sql = "INSERT INTO users (name, tel_no, email, address, login_id, password, balance) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $connect->prepare($sql);
        
            $stmt->bind_param("sssssss", $name, $tel_no, $email, $address, $login_id, $password, $balance);
            $stmt->execute();
        }

        $sql = "SELECT * FROM users";
        $result = mysqli_query($connect, $sql);
    
        if ($result-> num_rows > 0) {
            echo "<div align='center'><table><tr><th>Login_Id</th><th>Password</th><th>Name</th><th>Phone</th><th>Email</th><th>Address</th><th>Balance</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["login_id"] . "</td><td>" . $row["password"] ."</td><td>" . $row["name"] ."</td><td>" . $row["tel_no"] ."</td><td>" 
                . $row["email"] ."</td><td>" . $row["address"] ."</td><td>" . $row["balance"] ."</td></tr>";
            }
            echo "</table></div>";
        } else {
            echo "0 results" . "<br>";
        }

        exit();
    }
?>


