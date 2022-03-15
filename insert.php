<?php include 'dbconnect.php' ?>

<!DOCTYPE html>
<html>
   <head>
      <title>Insert Records</title>
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Code+Pro'>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="project-team19.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


      <style> body {font-family: 'Source Code Pro', sans-serif; color: black;} </style>
   </head>
   
   <div style="text-align:center;">

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
        <div class="dropdown">
            <button class="dropbtn">DB Maintain</button>
            <div class="dropdown-content">
                <a href="insert.php">Insert</a>
                <a href="delete.php">Delete</a>
                <a href="select.php">Select</a>
                <a href="update.php">Update</a>
            </div>
        </div>
        <div>
            <a href="logout.php">Log Out</a>
        </div>
      </div>

     <h1 style="text-align:center;">Insert Records</h1>

<form class="insert" action="" method="post">
  <div class="form-group">
    <label for="seeAnotherField">Which table would you like to insert into?</label><br>
    <select class="form-control" name="table" id="seeAnotherField">
        <option value="orders">orders</option>
        <option value="items">items</option>
        <option value="users">users</option>
        <option value="trip">trip</option>
        <option value="truck">truck</option>
        <option value="shopping">shopping</option>
        <option value="stock">stock</option>
        <option value="payment">payment</option>
  </select>
  </div>

  <div class="form-group" id="orderDiv">
      <label>Enter Order ID: </label>
        <input type="order_id" name="order_id" class="form-control"> <br>
      <label>Enter Trip ID: </label>
        <input type="trip_id" name="trip_id" class="form-control"> <br>
      <label>Enter date issued: </label>
        <input type="date_issued" name="date_issued" class="form-control"> <br>
      <label>Enter date received: </label>
        <input type="date_received" name="date_received" class="form-control"> <br>
      <label>Enter total price: </label>
        <input type="total_price" name="total_price" class="form-control"> <br>
      <label>Enter user ID: </label>
        <input type="user_id" name="user_id" class="form-control"> <br>
      <label>Enter receipt ID: </label>
        <input type="receipt_id" name="receipt_id" class="form-control"> <br>
      <label>Enter payment: </label>
        <input type="branch" name="payment" class="form-control">
  </div>
  
  
  <div class="form-group" id="itemDiv">
      <label>Enter Item ID: </label>
        <input type="item_id" name="item_id" class="form-control"> <br>
      <label>Enter Item Name: </label>
        <input type="name" name="name" class="form-control"> <br>
      <label>Enter Price: </label>
        <input type="price" name="price" class="form-control"> <br>
      <label>Enter Quantity: </label>
        <input type="quantity" name="quantity" class="form-control"> <br>
  </div>
  
  <div class="form-group" id="userDiv">
      <label>Enter User ID: </label>
      <input type="user_id" name="user_id" class="form-control"> <br>
    <label>Enter Name: </label>
      <input type="name" name="name" class="form-control"> <br>
    <label>Enter Address: </label>
      <input type="address" name="address" class="form-control"> <br>
    <label>Enter Email: </label>
      <input type="email" name="email" class="form-control"> <br>
    <label>Enter Phone Number: </label>
      <input type="tel_no" name="tel_no" class="form-control"> <br>
    <label>Enter Balance: </label>
      <input type="balance" name="balance" class="form-control"> <br>
    <label>Enter Login ID: </label>
      <input type="login_id" name="login_id" class="form-control"> <br>
    <label>Enter Password: </label>
      <input type="password" name="password" class="form-control">
  </div>
  
  <div class="form-group" id="tripDiv">
    <label>Enter Trip ID: </label>
      <input type="trip_id" name="trip_id" class="form-control"> <br>
    <label>Enter Branch: </label>
      <input type="branch" name="branch" class="form-control"> <br>
    <label>Enter Destination: </label>
      <input type="destination" name="destination" class="form-control"> <br>
    <label>Enter Distance: </label>
      <input type="distance" name="distance" class="form-control"> <br>
    <label>Enter Truck ID: </label>
      <input type="truck_id" name="truck_id" class="form-control"> <br>
  </div>
  
  <div class="form-group" id="truckDiv">
    <label>Enter Truck ID: </label>
      <input type="truck_id" name="truck_id" class="form-control"> <br>
    <label>Enter Truck Code: </label>
      <input type="truck_code" name="truck_code" class="form-control"> <br>
    <label>Enter Available: </label>
      <input type="available" name="available" class="form-control"> <br>
  </div>
  
  <div class="form-group" id="shoppingDiv">
    <label>Enter Receipt ID: </label>
      <input type="receipt_id" name="receipt_id" class="form-control"> <br>
    <label>Enter Branch: </label>
      <input type="branch" name="branch" class="form-control"> <br>
    <label>Enter Total Price: </label>
      <input type="total_price" name="total_price" class="form-control"> <br>
  </div>

  <div class="form-group" id="stockDiv">
    <label>Enter Stock ID: </label>
      <input type="stock_id" name="stock_id" class="form-control"> <br>
    <label>Enter Name: </label>
      <input type="name" name="branamench" class="form-control"> <br>
    <label>Enter Price: </label>
      <input type="price" name="price" class="form-control"> <br>
    <label>Enter Quantity: </label>
      <input type="quantity" name="quantity" class="form-control"> <br>
  </div>

  <div class="form-group" id="paymentDiv">
    <label>Enter User ID: </label>
      <input type="user_id" name="user_id" class="form-control"> <br>
    <label>Enter CC Number: </label>
      <input type="cc_num" name="cc_num" class="form-control"> <br>
    <label>Enter CCV: </label>
      <input type="ccv" name="ccv" class="form-control"> <br>
  </div>
  
  
  <input type="submit" name="submit" value="Submit">
</form>
  
  <script>
  $("#seeAnotherField").change(function() {
  if ($(this).val() == "items") {
    $('#itemDiv').show();
    $('#userDiv').hide();
    $('#orderDiv').hide();
    $('#tripDiv').hide();
    $('#truckDiv').hide();
    $('#shoppingDiv').hide();
    $('#stockDiv').hide();
    $('#paymentDiv').hide();
  } else if ($(this).val() == "users") {
    $('#userDiv').show();
    $('#itemDiv').hide();
    $('#orderDiv').hide();
    $('#tripDiv').hide();
    $('#truckDiv').hide();
    $('#shoppingDiv').hide();
    $('#stockDiv').hide();
    $('#paymentDiv').hide();
  } else if ($(this).val() == "orders") {
    $('#orderDiv').show();
    $('#itemDiv').hide();
    $('#userDiv').hide();
    $('#tripDiv').hide();
    $('#truckDiv').hide();
    $('#shoppingDiv').hide();
    $('#stockDiv').hide();
    $('#paymentDiv').hide();
  } else if ($(this).val() == "trip") {
    $('#tripDiv').show();
    $('#itemDiv').hide();
    $('#userDiv').hide();
    $('#orderDiv').hide();
    $('#truckDiv').hide();
    $('#shoppingDiv').hide();
    $('#stockDiv').hide();
    $('#paymentDiv').hide();
  } else if ($(this).val() == "truck") {
    $('#truckDiv').show();
    $('#tripDiv').hide();
    $('#itemDiv').hide();
    $('#userDiv').hide();
    $('#orderDiv').hide();
    $('#shoppingDiv').hide();
    $('#stockDiv').hide();
    $('#paymentDiv').hide();
  } else if ($(this).val() == "shopping") {
    $('#shoppingDiv').show();
    $('#truckDiv').hide();
    $('#tripDiv').hide();
    $('#itemDiv').hide();
    $('#userDiv').hide();
    $('#orderDiv').hide();
    $('#stockDiv').hide();
    $('#paymentDiv').hide();
  } else if ($(this).val() == "stock") {
    $('#stockDiv').show();
    $('#truckDiv').hide();
    $('#tripDiv').hide();
    $('#itemDiv').hide();
    $('#userDiv').hide();
    $('#orderDiv').hide();
    $('#shoppingDiv').hide();
    $('#paymentDiv').hide();
  } else if ($(this).val() == "payment") {
    $('#paymentDiv').show();
    $('#truckDiv').hide();
    $('#tripDiv').hide();
    $('#itemDiv').hide();
    $('#userDiv').hide();
    $('#orderDiv').hide();
    $('#shoppingDiv').hide();
    $('#stockDiv').hide();
  } else {
    $('#itemDiv').hide();
    $('#userDiv').hide();
    $('#orderDiv').hide();
    $('#tripDiv').hide();
    $('#truckDiv').hide();
    $('#shoppingDiv').hide();
    $('#stockDiv').hide();
    $('#paymentDiv').hide();
  }
});
$("#seeAnotherField").trigger("change");
</script>
     
</body>
</div>
   
</html>

<?php 
  require __DIR__ . './functions.php';

  if (isset($_POST['submit'])) {

    if (isset($_POST['order_id'])) {
      $order_id = validate($_POST['order_id']);

    }

    <div class="form-group" id="orderDiv">
    <label>Enter Order ID: </label>
      <input type="order_id" name="order_id" class="form-control"> <br>
    <label>Enter Trip ID: </label>
      <input type="trip_id" name="trip_id" class="form-control"> <br>
    <label>Enter date issued: </label>
      <input type="date_issued" name="date_issued" class="form-control"> <br>
    <label>Enter date received: </label>
      <input type="date_received" name="date_received" class="form-control"> <br>
    <label>Enter total price: </label>
      <input type="total_price" name="total_price" class="form-control"> <br>
    <label>Enter user ID: </label>
      <input type="user_id" name="user_id" class="form-control"> <br>
    <label>Enter receipt ID: </label>
      <input type="receipt_id" name="receipt_id" class="form-control"> <br>
    <label>Enter payment: </label>
      <input type="branch" name="payment" class="form-control">
    </div>

    if (isset($_POST['user_id'])) {
      $user_id = validate($_POST['user_id']);
      $name = validate($_POST['name']);
      $address = validate($_POST['address']);
      $email = validate($_POST['email']);
      $tel_no = validate($_POST['tel_no']);
      $balance = validate($_POST['balance']);
      $login_id = validate($_POST['login_id']);
      $password = validate($_POST['password']);

      echo "<br>" . "Added to Database";
      $connect -> query("INSERT INTO users (name, tel_no, email, address, login_id, password, balance) VALUES 
      ('$name', '$tel_no', '$email', '$address', '$login_id', '$password', '$balance')");
    }

  }
?>