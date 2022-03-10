<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cps630";


$name = $_POST['item_name'];
$price = $_POST['item_price'];
$item_id = $_POST['item_id'];


// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $result = $conn->query("SELECT * FROM `stock` WHERE id = $item_id");

// while($data = $result->fetch_assoc()) {
//     $name = $data['name'];
//     $price = $data['price'];
// }

$result = mysqli_query($conn,"SELECT * FROM items WHERE id = $item_id");
if ($result-> num_rows == 0) {

    $sql = "INSERT INTO `items`(`id`, `name`, `price`, `quantity`) VALUES ('$item_id','$name','$price', 1)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

else{
    $quantity = $result->fetch_assoc()['quantity']+1;

    if ($quantity-1 >= 5){
        echo "Too many items";
    }
    else{
        $sql = "UPDATE `items` SET `quantity`='$quantity' WHERE id = $item_id";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }    
}



$conn->close();
?> 