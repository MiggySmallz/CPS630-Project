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

<form class="update" action="update.php" method="post">
  <div class="form-group">
    <label for="seeAnotherField">Which table would you like to insert into?</label><br>
    <select class="form-control" name="table" id="seeAnotherField">
        <option value="order">order</option>
        <option value="item">item</option>
        <option value="user">user</option>
        <option value="trip">trip</option>
        <option value="truck">truck</option>
        <option value="shopping">shopping</option>
  </select>
  </div>

  <div class="form-group" id="orderDiv">
    <form action="insert.php" method="post">
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
          <input type="payment" name="payment" class="form-control">
  </div>
  
  
  <div class="form-group" id="itemDiv">
      <label>Enter item ID: </label>
        <input type="item_id" name="item_id" class="form-control"> <br>
      <label>Enter item name: </label>
        <input type="item_name" name="item_name" class="form-control"> <br>
      <label>Enter price: </label>
        <input type="price" name="price" class="form-control"> <br>
      <label>Enter quantity: </label>
        <input type="quantity" name="quantity" class="form-control"> <br>
  </div>
  
  <div class="form-group" id="userDiv">
      <label>Enter user ID: </label>
      <input type="user_id" name="user_id" class="form-control"> <br>
    <label>Enter name: </label>
      <input type="name" name="name" class="form-control"> <br>
    <label>Enter address: </label>
      <input type="address" name="address" class="form-control"> <br>
    <label>Enter email: </label>
      <input type="email" name="email" class="form-control"> <br>
    <label>Enter phone number: </label>
      <input type="tel_no" name="tel_no" class="form-control"> <br>
    <label>Enter balance: </label>
      <input type="balance" name="balance" class="form-control"> <br>
    <label>Enter username: </label>
      <input type="username" name="username" class="form-control"> <br>
    <label>Enter password: </label>
      <input type="password" name="password" class="form-control">
  </div>
  
  <div class="form-group" id="tripDiv">
    <label>Enter trip ID: </label>
      <input type="trip_id" name="trip_id" class="form-control"> <br>
    <label>Enter branch: </label>
      <input type="branch" name="branch" class="form-control"> <br>
    <label>Enter destination: </label>
      <input type="destination" name="destination" class="form-control"> <br>
    <label>Enter distance: </label>
      <input type="distance" name="distance" class="form-control"> <br>
    <label>Enter truck ID: </label>
      <input type="truck_id" name="truck_id" class="form-control"> <br>
  </div>
  
  <div class="form-group" id="truckDiv">
    <label>Enter truck ID: </label>
      <input type="truck_id" name="truck_id" class="form-control"> <br>
    <label>Enter truck code: </label>
      <input type="truck_code" name="truck_code" class="form-control"> <br>
  </div>
  
  <div class="form-group" id="shoppingDiv">
    <label>Enter receipt ID: </label>
      <input type="receipt_id" name="receipt_id" class="form-control"> <br>
    <label>Enter branch: </label>
      <input type="branch" name="branch" class="form-control"> <br>
    <label>Enter total price: </label>
      <input type="total_price" name="total_price" class="form-control"> <br>
  </div>
  
  
  <input type="submit" value="Submit">
</form>
  
  <script>
  $("#seeAnotherField").change(function() {
  if ($(this).val() == "item") {
    $('#itemDiv').show();
    $('#userDiv').hide();
    $('#orderDiv').hide();
    $('#tripDiv').hide();
    $('#truckDiv').hide();
    $('#shoppingDiv').hide();
  } else if ($(this).val() == "user") {
    $('#userDiv').show();
    $('#itemDiv').hide();
    $('#orderDiv').hide();
    $('#tripDiv').hide();
    $('#truckDiv').hide();
    $('#shoppingDiv').hide();
  } else if ($(this).val() == "order") {
    $('#orderDiv').show();
    $('#itemDiv').hide();
    $('#userDiv').hide();
    $('#tripDiv').hide();
    $('#truckDiv').hide();
    $('#shoppingDiv').hide();
  } else if ($(this).val() == "trip") {
    $('#tripDiv').show();
    $('#itemDiv').hide();
    $('#userDiv').hide();
    $('#orderDiv').hide();
    $('#truckDiv').hide();
    $('#shoppingDiv').hide();
  } else if ($(this).val() == "truck") {
    $('#truckDiv').show();
    $('#tripDiv').hide();
    $('#itemDiv').hide();
    $('#userDiv').hide();
    $('#orderDiv').hide();
    $('#shoppingDiv').hide();
  } else if ($(this).val() == "shopping") {
    $('#shoppingDiv').show();
    $('#truckDiv').hide();
    $('#tripDiv').hide();
    $('#itemDiv').hide();
    $('#userDiv').hide();
    $('#orderDiv').hide();
  } else {
    $('#itemDiv').hide();
    $('#userDiv').hide();
    $('#orderDiv').hide();
    $('#tripDiv').hide();
    $('#truckDiv').hide();
    $('#shoppingDiv').hide();
  }
});
$("#seeAnotherField").trigger("change");
</script>
     
</body>
</div>
   
</html>
