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
$result = $conn->query("SELECT * FROM `stock` WHERE id = $item_id");

while($data = $result->fetch_assoc()) {
    $name = $data['name'];
    $price = $data['price'];
}




$sql = "INSERT INTO `items`(`id`, `name`, `price`, `quantity`) VALUES ('$item_id','$name','$price', 1)";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 