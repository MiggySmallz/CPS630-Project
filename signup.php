<?php include 'dbconnect.php' ?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer
        src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key={MAPKEY}"
        type="text/javascript"></script>

    <head>
        <title>Smart Customer Services</title>
        <link rel="stylesheet" href="project-team19.css">
    </head>

    <script>
    $(function () {
        var origin, destination, map;

        // add input listeners
        google.maps.event.addDomListener(window, 'load', function (listener) {
            setDestination();
        });

        function setDestination() {
            var from_places = new google.maps.places.Autocomplete(document.getElementById('address'));
            

            google.maps.event.addListener(from_places, 'place_changed', function () {
                var from_place = from_places.getPlace();
                var from_address = from_place.formatted_address;
                $('#address').val(from_address);
            });
        }
    });
    </script>


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
                <label>Name:</label> <input type="text" name="name" required><br>
                <label>Phone:</label> <input type="text" name="phone" required><br>
                <label>Email:</label> <input type="text" name="email" required><br>
                <label>Address:</label> <input id="address" type="text" name="address" required ><br>
                <label>Balance:</label> <input type="text" name="balance" required><br>
                <input type="submit" name="signUp" value="Sign Up">
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
            $connect -> query("INSERT INTO users (name, tel_no, email, address, login_id, password, balance) VALUES 
                ('$name', '$tel_no', '$email', '$address', '$login_id', '$password', '$balance')");
            redirect("signin.php");
        }

        $sql = "SELECT * FROM users";
        $result = mysqli_query($connect, $sql);

        $connect->close();
        exit();
    }
?>


