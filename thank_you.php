<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Smart Customer Services</title>
<link rel="stylesheet" href="project-team19.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
</style>

<script>

window.onload = (function () {
    $.ajax({type:"POST", url:"insertRecord.php", data:{type: "getOrderId"}, success:function(data){
    document.getElementById("orderID").innerHTML = data;
  }
  })
});

</script>

<?php include 'dbconnect.php' ?>

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

<div class="thankyou" style="margin-top: 5em"><img style="height: 100px" src="imgs/greencheck.png"></div>

<div class="thankyou"><h1 style="padding: 2em 0 2em 0">Thank you for shopping with us!</h1></div>
<div class="thankyou"><h2>Your order has been placed</h2></div>
<div class="thankyou"><h2>Your order# is: <b id="orderID"></b></h2></div>

</body>
</html>


<?php 

session_start();
$_SESSION['cart_id']++;

echo "230879324807234    " . $_SESSION['cart_id'];

?>