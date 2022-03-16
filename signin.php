<?php include 'dbconnect.php' ?>

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
    session_start(); 

    require __DIR__ . './functions.php';

    if (isset($_POST['signUp'])) {

        $login_id = validate($_POST['login_id']);
        $password = validate($_POST['password']);

        $sql = "SELECT * FROM users WHERE login_id='$login_id' AND password='$password'";
        $result = mysqli_query($connect, $sql);

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