<!DOCTYPE html>
<html>
   <head>
      <title>Update Records</title>
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
      
     <h1 style="text-align:center;">Update Records</h1>

<form class="update" action="update.php" method="post">
  <div class="form-group">
    <label for="seeAnotherField">Which table would you like to Update?</label><br>
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
    <label for="orderField">Choose type:</label>
    <select class="form-control" name="orderVari" id="orderVari">
        <option value="date_issued">Date Issued</option>
        <option value="date_recieved">Date Recieved</option>
        <option value="total_price">Total Price</option>
        <option value="payment">Payment</option>
    </select>
    <p>Enter Order ID: <p>
    <input type="text" id="orderOldItem" name="orderOldItem"><br>
    <p>Enter replacement:<p>
    <input type="text" id="orderNewItem" name="orderNewItem"><br>
  </div>
  
  
  <div class="form-group" id="itemDiv">
    <label for="itemField">Choose type:</label>
    <select class="form-control" name="itemVari" id="itemVari">
        <option value="item_name">Name</option>
        <option value="price">Price</option>      
        <option value="quantity">Quantity</option>        
    </select>
    <p>Enter Item ID: <p>
    <input type="text" id="itemOldItem" name="itemOldItem"><br>
    <p>Enter replacement:<p>
    <input type="text" id="itemNewItem" name="itemNewItem"><br>
  </div>
  
    <div class="form-group" id="userDiv">
    <label for="userField">Choose type:</label>
    <select class="form-control" name="userVari" id="userVari">
        <option value="order_name">Name</option>
        <option value="balance">Balance</option>
        <option value="tel_no">Phone Number</option>
        <option value="home_address">Home Address</option>
        <option value="email">Email</option>
        <option value="username">Username</option>
        <option value="password">Password</option>
    </select>
    <p>Enter User ID: <p>
    <input type="text" id="userOldItem" name="userOldItem"><br>
    <p>Enter replacement:<p>
    <input type="text" id="userNewItem" name="userNewItem"><br>
  </div>
  
  <div class="form-group" id="tripDiv">
    <label for="tripField">Choose type:</label>
    <select class="form-control" name="tripVari" id="tripVari">
        <option value="branch">Branch</option>
        <option value="destination">Destination</option>
        <option value="distance">Distance</option>  
    </select>
    <p>Enter Trip ID: <p>
    <input type="text" id="tripOldItem" name="tripOldItem"><br>
    <p>Enter replacement:<p>
    <input type="text" id="tripNewItem" name="tripNewItem"><br>
  </div>
  
  <div class="form-group" id="truckDiv">
    <label for="truckField">Choose type:</label>
    <select class="form-control" name="truckVari" id="truckVari">
        <option value="truck_code">Truck code</option>
    </select>
    <p>Enter Truck ID: <p>
    <input type="text" id="truckOldItem" name="truckOldItem"><br>
    <p>Enter replacement:<p>
    <input type="text" id="truckNewItem" name="truckNewItem"><br>
  </div>
  
  <div class="form-group" id="shoppingDiv">
    <label for="shoppingField">Choose type:</label>
    <select class="form-control" name="shoppingVari" id="shoppingVari">
        <option value="branch">Branch</option>
        <option value="total_price">Total Price</option>      
    </select>
    <p>Enter Shopping ID: <p>
    <input type="text" id="shoppingOldItem" name="shoppingOldItem"><br>
    <p>Enter replacement:<p>
    <input type="text" id="shoppingNewItem" name="shoppingNewItem"><br>
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
     
     <a href="menu.html">Return to Site</a><br> 
   </body>
   
   </div>
   
</html>
