<!DOCTYPE html>
<html>
   <head>
      <title>Select Records</title>
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Code+Pro'>
      <link rel="stylesheet" type="text/css" href="style.css">
      <style> body {font-family: 'Source Code Pro', sans-serif; color: black;} </style>
   </head>
   
   <div style="text-align:center;">

   <body>
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