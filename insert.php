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
        <option value="stock">stock</option>
        <option value="payment">payment</option>
  </select>
  </div>

  <div class="form-group" id="orderDiv">
      <label>Enter Order ID: </label>
        <input type="order_id" name="order_id" class="form-control"> <br>
      <label>Enter Trip ID: </label>
        <input type="text" name="order_trip_id" class="form-control"> <br>
      <label>Enter date issued: </label>
        <input type="date_issued" name="order_date_issued" class="form-control"> <br>
      <label>Enter date received: </label>
        <input type="date_received" name="order_date_received" class="form-control"> <br>
      <label>Enter total price: </label>
        <input type="total_price" name="order_total_price" class="form-control"> <br>
      <label>Enter user ID: </label>
        <input type="user_id" name="order_user_id" class=" form-control"> <br>
      <label>Enter receipt ID: </label>
        <input type="receipt_id" name="order_receipt_id" class="form-control"> <br>
      <label>Enter Branch: </label>
        <input type="branch" name="order_branch" class="form-control">
  </div>
  
  
  <div class="form-group" id="itemDiv">
      <label>Enter Item ID: </label>
        <input type="item_id" name="item_item_id" class="form-control"> <br>
      <label>Enter Cart ID: </label>
        <input type="cart_id" name="item_cart_id" class="form-control"> <br>
      <label>Enter Item Name: </label>
        <input type="name" name="item_name" class="form-control"> <br>
      <label>Enter Price: </label>
        <input type="price" name="item_price" class="form-control"> <br>
      <label>Enter Quantity: </label>
        <input type="quantity" name="item_quantity" class="form-control"> <br>
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
      <input type="text" name="trip_trip_id" class="form-control"> <br>
    <label>Enter Branch: </label>
      <input type="branch" name="trip_branch" class="form-control"> <br>
    <label>Enter Destination: </label>
      <input type="destination" name="trip_destination" class="form-control"> <br>
    <label>Enter Distance: </label>
      <input type="distance" name="trip_distance" class="form-control"> <br>
    <label>Enter Truck ID: </label>
      <input type="truck_id" name="trip_truck_id" class="form-control"> <br>
  </div>
  
  <div class="form-group" id="truckDiv">
    <label>Enter Truck ID: </label>
      <input type="truck_id" name="truck_truck_id" class="form-control"> <br>
    <label>Enter Truck Code: </label>
      <input type="truck_code" name="truck_truck_code" class="form-control"> <br>
    <label>Enter Available: </label>
      <input type="available" name="truck_available" class="form-control"> <br>
  </div>
  
  <div class="form-group" id="stockDiv">
    <label>Enter Name: </label>
      <input type="name" name="stock_name" class="form-control"> <br>
    <label>Enter Price: </label>
      <input type="price" name="stock_price" class="form-control"> <br>
    <label>Enter Quantity: </label>
      <input type="quantity" name="stock_quantity" class="form-control"> <br>
  </div>

  <div class="form-group" id="paymentDiv">
    <label>Enter User ID: </label>
      <input type="user_id" name="payment_user_id" class="form-control"> <br>
    <label>Enter CC Number: </label>
      <input type="cc_num" name="payment_cc_num" class="form-control"> <br>
    <label>Enter CCV: </label>
      <input type="ccv" name="payment_ccv" class="form-control"> <br>
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
    console.log("ORDER");
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
    
    if ($_POST['table'] === 'orders') {
      $trip_id = validate($_POST['order_trip_id']);
      $date_issued = validate($_POST['order_date_issued']);
      $date_received = validate($_POST['order_date_received']);
      $total_price = validate($_POST['order_total_price']);
      $user_id = validate($_POST['order_user_id']);
      $receipt_id = validate($_POST['order_receipt_id']);
      $branch = validate($_POST['order_branch']);

      echo "<br>trip_id: " . $trip_id . " date issued: " . $date_issued . " date_received: " . $date_received . " total_price: " . $total_price . " user_id: " . $user_id . 
        " receipt_id: " . $receipt_id . " branch: " . $branch;

      echo "<br>" . "Added to Database " . $_POST['table'];
      $connect -> query("INSERT INTO orders (trip_id, receipt_id, user_id, branch, date_issued, date_recieved, total_price) VALUES
      ('$trip_id', '$receipt_id', '$user_id', '$branch', '$date_issued', '$date_received', '$total_price')");
    }

    if ($_POST['table'] === 'items') {
      $item_id = validate($_POST['item_item_id']);
      // $cart_id = validate($_POST['item_cart_id']);
      $name = validate($_POST['item_name']);
      $price = validate($_POST['item_price']);
      $quantity = validate($_POST['item_quantity']);
      echo "<br>" . "Added to Database " . $_POST['table'];
      $connect -> query("INSERT INTO items (item_id, name, price, quantity) VALUES 
      ('$item_id', '$name', '$price', '$quantity')");
      // $connect -> query("INSERT INTO items (item_id, cart_id, name, price, quantity) VALUES 
      // ('$item_id', '$cart_id', '$name', '$price', '$quantity')");
    }

    if ($_POST['table'] === 'users') {
      $name = validate($_POST['name']);
      $address = validate($_POST['address']);
      $email = validate($_POST['email']);
      $tel_no = validate($_POST['tel_no']);
      $balance = validate($_POST['balance']);
      $login_id = validate($_POST['login_id']);
      $password = validate($_POST['password']);

      echo "<br>" . "Added to Database " . $_POST['table'];
      $connect -> query("INSERT INTO users (name, tel_no, email, address, login_id, password, balance) VALUES 
      ('$name', '$tel_no', '$email', '$address', '$login_id', '$password', '$balance')");
    }

    if ($_POST['table'] === 'trip') {
      $trip_truck_id = validate($_POST['trip_truck_id']);
      $trip_distance = validate($_POST['trip_distance']);
      $trip_branch = validate($_POST['trip_branch']);
      $trip_destination = validate($_POST['trip_destination']);

      echo "<br>" . "Added to Database " . $_POST['table'];
      $connect -> query("INSERT INTO trip (truck_id, distance, branch, destination) VALUES 
      ('$trip_truck_id', '$trip_distance', '$trip_branch', '$trip_destination')");
    }

    if ($_POST['table'] === 'truck') {
      $truck_truck_code = validate($_POST['truck_truck_code']);
      $truck_available = validate($_POST['truck_available']);

      echo "<br>" . "Added to Database " . $_POST['table'];
      $connect -> query("INSERT INTO truck (truck_code, available) VALUES 
      ('$truck_truck_code', '$truck_available')");
    }

    if ($_POST['table'] === 'stock') {
      $stock_name = validate($_POST['stock_name']);
      $stock_price = validate($_POST['stock_price']);
      $stock_quantity = validate($_POST['stock_quantity']);

      echo "<br>" . "Added to Database " . $_POST['table'];
      $connect -> query("INSERT INTO stock (name, price, quantity) VALUES 
      ('$stock_name', '$stock_price', '$stock_quantity')");
    }

    if ($_POST['table'] === 'payment') {
      $payment_user_id = validate($_POST['payment_user_id']);
      $payment_cc_num = validate($_POST['payment_cc_num']);
      $payment_ccv = validate($_POST['payment_ccv']);

      echo "<br>" . "Added to Database " . $_POST['table'];
      $connect -> query("INSERT INTO payment (user_id, cc_num, cvv) VALUES 
      ('$payment_user_id', '$payment_cc_num', '$payment_ccv')");
    }
  }
?>