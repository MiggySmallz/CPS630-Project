<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cps630";


$item_id = $_POST['item_id'];


// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "INSERT INTO `shopping_cart`(`item_id`) VALUES ('$item_id')";
$result = $conn->query("SELECT * FROM `stock` WHERE stock_id = $item_id");


// Gets name and price of item from stock table given item_id
while($data = $result->fetch_assoc()) {
    $name = $data['name'];
    $price = $data['price'];
}

echo $item_id. " ". $name ." ". $price;


// $result = mysqli_query($conn,"SELECT * FROM items WHERE item_id = $item_id");
// if ($result-> num_rows == 0) {

//     $sql = "INSERT INTO `items`(`item_id`, `name`, `price`, `quantity`) VALUES ('$item_id','$name','$price', 1)";

//     if ($conn->query($sql) === TRUE) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }

// }

// else{
//     $quantity = $result->fetch_assoc()['quantity']+1;

//     if ($quantity-1 >= 5){
//         echo "Too many items";
//     }
//     else{
//         $sql = "UPDATE `items` SET `quantity`='$quantity' WHERE item_id = $item_id";

//         if ($conn->query($sql) === TRUE) {
//             echo "New record created successfully";
//         } else {
//             echo "Error: " . $sql . "<br>" . $conn->error;
//         }
//     }    
// }



$conn->close();
?> 