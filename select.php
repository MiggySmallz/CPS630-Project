<?php include 'dbconnect.php' ?>

<!DOCTYPE html>
<html>
   <head>
      <title>Select Records</title>
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
      
     <h1 style="text-align:center;">Select Records</h1>
     
     <form action="" method="post">
     
       <p>Select Table to Search From:<p>
         <select name="table">
            <option value="orders">Orders</option>
            <option value="items">Items</option>
            <option value="users">Users</option>
            <option value="trip">Trip</option>
            <option value="truck">Truck</option>
            <option value="stock">Stock</option>
            <option value="payment">Payment</option>
         </select>
       
     
         <p>Type in the id to Search From Table:<p>
         <input type="text" id="item" name="item"><br>
       
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
            $result = $connect -> query("SELECT * from orders WHERE order_id=$item;");
            if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
                echo "Order ID: " . $row["order_id"] . "<br>Trip ID: " . $row["trip_id"] . "<br>receipt ID: "
                . $row["receipt_id"] . "<br>User ID: " . $row["user_id"] . "<br>Branch: " . $row["branch"]
                . "<br>Date Issued: " . $row["date_issued"] . "<br>Date Received: " . $row["date_recieved"]
                . "<br>Total Price: " . $row["total_price"];
            }
            else echo "No entry found.";
        }

        if ($_POST['table'] === 'items') {
            $item = $_POST['item'];
            $result = $connect -> query("SELECT * from items WHERE item_id=$item;");
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "Item ID: " . $row["item_id"] . "<br>Name: " . $row["name"] . "<br>Price: "
                . $row["price"] . "<br>Quantity: " . $row["quantity"];
            }
            else echo "No entry found.";
        }

        if ($_POST['table'] === 'users') {
            $item = $_POST['item'];
            $result = $connect -> query("SELECT * from users WHERE user_id=$item;");
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "User ID: " . $row["user_id"] . "<br>Name: " . $row["name"] . "<br>Phone: "
                . $row["tel_no"] . "<br>Email: " . $row["email"] . "<br>Address: " . $row["address"]
                . "<br>Login ID: " . $row["login_id"] . "<br>Password: " . $row["password"]
                . "<br>Balance: " . $row["balance"];
            }
            else echo "No entry found.";
        }

        if ($_POST['table'] === 'trip') {
            $item = $_POST['item'];
            $result = $connect -> query("SELECT * from trip WHERE trip_id=$item;");
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "Trip ID: " . $row["trip_id"] . "<br>Truck: " . $row["truck_id"] . "<br>Distance: "
                . $row["distance"] . "<br>Branch: " . $row["branch"] . "<br>Destination: " . $row["destination"];
            }
            else echo "No entry found.";
        }
        
        if ($_POST['table'] === 'truck') {
            $item = $_POST['item'];
            $result = $connect -> query("SELECT * from truck WHERE truck_id=$item;");
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "Truck ID: " . $row["truck_id"] . "<br>Truck Code: " . $row["truck_code"] 
                . "<br>Avaialble: " . $row["available"];
            }
            else echo "No entry found.";
        }
    
        if ($_POST['table'] === 'stock') {
            $item = $_POST['item'];
            $result = $connect -> query("SELECT * from stock WHERE stock_id=$item;");
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "Stock ID: " . $row["stock_id"] . "<br>Name: " . $row["name"] . "<br>Pirce: "
                . $row["price"] . "<br>Quantity: " . $row["quantity"];
            }
            else echo "No entry found.";
        }
    
        if ($_POST['table'] === 'payment') {
            $item = $_POST['item'];
            $result = $connect -> query("SELECT * from payment WHERE user_id=$item;");
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "User ID: " . $row["user_id"] . "<br>CC Number: " . $row["cc_num"] 
                . "<br>CVV: " . $row["cvv"];
            }
            else echo "No entry found.";
        }
    }

    
?>