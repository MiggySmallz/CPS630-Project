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
                <label>Email:</label> <input type="text" name="email" required><br>
                <label>Password:</label> <input type="text" name="password" required><br>
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
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = validate($_POST['email']);
        $password = validate($_POST['password']);

        $sql = "SELECT * FROM users WHERE username='$email'";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) === 1) {
            //$row = mysqli_fetch_assoc($result);
            //if ($row['username'] === $email) {
            echo "<br>" . "Email is already being used";
        }
            //}
        else {
            echo "<br>" . "Added to Database";
            $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
            $stmt = $connect->prepare($sql);
        
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
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

        exit();

        //echo $email . " " . $password;
    }



    
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


