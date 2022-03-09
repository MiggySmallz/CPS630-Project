<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cps630";


$item_id = $_POST['item_id'];
$quantity = $_POST['quantity'];


// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($quantity == 0){
    $sql = "DELETE FROM `items` WHERE id = $item_id";
}
else{
    $sql = "UPDATE `items` SET `quantity`='$quantity' WHERE id = $item_id";
}


if ($conn->query($sql) === TRUE) {
    echo "Query successfull";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?> 