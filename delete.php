<?php include 'dbconnect.php' ?>

<!DOCTYPE html>
<html>
   <head>
      <title>Delete Records</title>
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Code+Pro'>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="project-team19.css">
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
      
     <h1 style="text-align:center;">Delete Records</h1>
     
     <form action= "" method="post">
        <label for="item">ID of record you want to delete:</label><br>
        <input type="text" id="item" name="item"><br><br>
      
        <label for="date">Select Table to delete from:</label>
        <select name="table" id="table">
          <option value="orders">Orders</option>
          <option value="items">Items</option>
          <option value="users">Users</option>
          <option value="trip">Trip</option>
          <option value="truck">Truck</option>
          <option value="stock">Stock</option>
          <option value="payment">Payment</option>
        </select>
        <br><br>
      <input type="submit" name="submit" value="Submit">
      </form>
   </body>
   
   </div>
   
</html>

<?php
    require __DIR__ . './functions.php';

    if (isset($_POST['submit'])) {

        if ($_POST['table'] === 'orders') {
            $item = $_POST['item'];
            echo "<br>" . "Deleted from Table " . $_POST['table'];
            $connect -> query("DELETE from orders WHERE order_id=$item;");
        }

        if ($_POST['table'] === 'items') {
            $item = $_POST['item'];
            echo "<br>" . "Deleted from Table " . $_POST['table'];
            $connect -> query("DELETE from items WHERE item_id=$item;");
        }

        if ($_POST['table'] === 'users') {
            $item = $_POST['item'];
            echo "<br>" . "Deleted from Table " . $_POST['table'];
            $connect -> query("DELETE from users WHERE user_id=$item;");
        }

        if ($_POST['table'] === 'trip') {
            $item = $_POST['item'];
            echo "<br>" . "Deleted from Table " . $_POST['table'];
            $connect -> query("DELETE from trip WHERE trip_id=$item;");
        }
        
        if ($_POST['table'] === 'truck') {
            $item = $_POST['item'];
            echo "<br>" . "Deleted from Table " . $_POST['table'];
            $connect -> query("DELETE from truck WHERE truck_id=$item;");
        }
    
        if ($_POST['table'] === 'stock') {
            $item = $_POST['item'];
            echo "<br>" . "Deleted from Table " . $_POST['table'];
            $connect -> query("DELETE from stock WHERE stock_id=$item;");
        }
    
        if ($_POST['table'] === 'payment') {
            $item = $_POST['item'];
            echo "<br>" . "Deleted from Table " . $_POST['table'];
            $connect -> query("DELETE from payment WHERE user_id=$item;");
        }
        
    }


?>