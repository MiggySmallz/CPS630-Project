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
     
     <form action="search_result.php" method="post">
     
       <p>Select Table to Search From:<p>
         <select name="tables">
            <option value="order">order</option>
            <option value="item">item</option>
            <option value="user">user</option>
            <option value="trip">trip</option>
            <option value="truck">truck</option>
            <option value="shopping">shopping</option>
         </select>
       
     
         <p>Select Item to Search From Table:<p>
         <input type="text" id="item" name="item"><br>
       
       <input type="submit" value="Submit">
     </form>
     
     <a href="menu.html">Return to Site</a><br> 
   </body>
   
   </div>
   
</html>