<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cps630";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_POST['type'] == 'order'){
    
    $branch = $_POST['branch'];
    $time = $_POST['time'];
    $price = $_POST['price'];
    $distance = $_POST['distance'];
    // $destination = query from table

    // echo $branch, $time;
    $conn->query("INSERT INTO `orders`(`trip_id`,`receipt_id`,`user_id`,`branch`,`date_issued`,`date_recieved`,`total_price`)
    VALUES (1, 1, 1, '$branch', '$time', 'null','$price')");


    $result = mysqli_query($conn,"SELECT * FROM users WHERE user_id = 1");
    $destination = $result->fetch_assoc()['address'];

    $sql = "INSERT INTO `trip`(`truck_id`, `distance`, `branch`, `destination`) VALUES (1, '$distance', '$branch', '$destination')";
    // 
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



}

if ($_POST['type'] == 'shopping'){
    
    $branch = $_POST['branch'];
    $price = $_POST['price'];
    $conn->query("INSERT INTO `shopping`(`branch`,`total_price`) 
    VALUES ('$branch', '$price')" );

    echo $_POST['type'];
}

if ($_POST['type'] == 'item'){

    $name = $_POST['item_name'];
    $price = $_POST['item_price'];
    $item_id = $_POST['item_id'];


    $result = mysqli_query($conn,"SELECT * FROM items WHERE item_id = $item_id");
    if ($result-> num_rows == 0) {

        $sql = "INSERT INTO `items`(`item_id`, `name`, `price`, `quantity`) VALUES ('$item_id','$name','$price', 1)";

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
            $sql = "UPDATE `items` SET `quantity`='$quantity' WHERE item_id = $item_id";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }    
    }
}



$conn->close();
?> 