<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <head>
        <title>Smart Customer Services</title>
        <link rel="stylesheet" href="project-team19.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="./test.js"></script>
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



            <div id="signInField">
                <h2>Please enter your credit card info</h2>
                <label>Credit Card Number:</label> <input type="text" name="cc_num" id="cc_num" required><br>
                <label>CVV: </label> <input type="password" name="cvv" id="cvv" required><br>
                <button style="font-size: 20px" onclick="payment(),  window.location.href='./thank_you.php'">Sumbit</button>
            </div>
            

    </body>

</html>
