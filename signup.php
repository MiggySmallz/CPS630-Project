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
            <a href="http://localhost/index.php"><img id="logo" src="logo.png"></a>
        </div>
        <div>
            <a href="http://localhost/index.php">Home</a>
        </div>
        <div>
            <a href="http://localhost/types_of_services.php">Types Of Services</a>   
        </div>
        <div>
            <a href="http://localhost/reviews.php">Reviews</a>
        </div>
        <div>
            <a href="http://localhost/shopping_cart.php">Shopping Cart</a>
        </div>
        <div>
            <a href="http://localhost/about_us.php">About Us</a>
        </div>
        <div>
            <a href="http://localhost/contact_us.php">Contact Us</a>
        </div>
        <div>
            <a href="http://localhost/signup.php">Sign Up</a>
        </div>
        <div>
            <a href="http://localhost/signin.php">Sign In</a>
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
    }
?>


