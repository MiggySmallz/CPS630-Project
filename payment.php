<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <head>
        <title>Smart Customer Services</title>
        <link rel="stylesheet" href="project-team19.css">
    </head>
    <script type="text/javascript" src="./test.js"></script>
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
                <label>Credit Card Number:</label> <input type="text" name="cc_num" id="cc_num" required><br>
                <label>CVC:</label> <input type="password" name="cvc" id="cvc" required><br>
                <input style="font-size: 20px" type="submit" name="save" value="Payment" onclick="payment()">
            </div>
        </form>

        <div id="result"></div>

    </body>

</html>

