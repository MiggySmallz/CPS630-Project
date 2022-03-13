<!DOCTYPE html>
<html>
   <head>
      <title>Delete Records</title>
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Code+Pro'>
      <link rel="stylesheet" type="text/css" href="style.css">
      <style> body {font-family: 'Source Code Pro', sans-serif; color: black;} </style>
   </head>
   
   <div style="text-align:center;">

   <body>
     <h1 style="text-align:center;">Delete Records</h1>
     
     <form action= "" method="post">
        <label for="item">Item you want to delete:</label><br>
        <input type="text" id="item" name="item"><br><br>
      
        <label for="date">Select Table to delete from:</label>
        <select name="tables" id="tables">
          <option value="order">order</option>
          <option value="item">item</option>
          <option value="user">user</option>
          <option value="trip">trip</option>
          <option value="truck">truck</option>
          <option value="shopping">shopping</option>
        </select>
        <br><br>
      <input type="submit" value="Submit">
      </form>
     
     <a href="menu.html">Return to Site</a><br> 
   </body>
   
   </div>
   
</html>