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
    session_start();
    $destination = $_SESSION['address']; 
    $user_id = $_SESSION['user_id']; 
    $cart_id = $_SESSION['cart_id']; 


    $sql = "INSERT INTO `orders`(`trip_id`,`cart_id`,`user_id`,`branch`,`date_issued`,`date_recieved`,`total_price`)
    VALUES (1, '$cart_id', '$user_id', '$branch', '$time', 'null','$price')";

    $result = mysqli_query($conn,"SELECT * FROM `truck` WHERE available != 'no' LIMIT 1");
    $truck_id = $result->fetch_assoc()['truck_id'];


    $conn->query("INSERT INTO `trip`(`truck_id`, `distance`, `branch`, `destination`) VALUES ('$truck_id', '$distance', '$branch', '$destination')");
    // 

    $conn->query("UPDATE `truck` SET `available`='no' WHERE truck_id = '$truck_id'");

    if ($conn->query($sql) === TRUE) {

        echo "New record created successfullyyyyy";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

if ($_POST['type'] == 'getOrderId'){


    session_start();
    $user_id = $_SESSION['user_id']; 

    $result = mysqli_query($conn,"SELECT * FROM `orders` WHERE user_id = $user_id ORDER BY order_id DESC LIMIT 1");
    $currentOrderId = $result->fetch_assoc()['order_id'];

    echo $currentOrderId;
}

// if ($_POST['type'] == 'shopping'){
    
//     $branch = $_POST['branch'];
//     $price = $_POST['price'];

//     $conn->query("INSERT INTO `shopping`(`branch`,`total_price`) VALUES ('$branch', '$price')" );

//     echo $_POST['type'];
// }

if ($_POST['type'] == 'payment'){
    
    $cc_num = $_POST['cc_num'];
    $cvv = $_POST['cvv'];

    session_start();
    $user_id = $_SESSION['user_id']; 

    $result = mysqli_query($conn,"SELECT * FROM payment WHERE user_id = $user_id");

    if ($result-> num_rows == 0) {
        $conn->query("INSERT INTO `payment`(`user_id`, `cc_num`,`cvv`) VALUES ('$user_id', '$cc_num', '$cvv')" );
    }
    else{
        $conn->query("UPDATE `payment` SET `cc_num`= '$cc_num',`cvv`='$cvv' where user_id = $user_id");
    }


    
    // echo $cc_num;
}

if ($_POST['type'] == 'item'){

    $name = $_POST['item_name'];
    $price = $_POST['item_price'];
    $item_id = $_POST['item_id'];
    $quantity = $_POST['quantity'];
    $newCart = $_POST['newCart'];

    session_start();
    $cart_id = $_SESSION['cart_id']; 


    $result = mysqli_query($conn,"SELECT * FROM items ORDER BY cart_id DESC LIMIT 1");
    $currentCartId = $result->fetch_assoc()['cart_id'];

        
    $conn->query("INSERT INTO `items`(`item_id`, `cart_id`, `name`, `price`, `quantity`) VALUES ('$item_id', '$cart_id', '$name','$price', '$quantity')");
       
        
         
            
    
        

    




    // $result = mysqli_query($conn,"SELECT * FROM items WHERE item_id = $item_id");
    // if ($result-> num_rows == 0) {

    //     $sql = "INSERT INTO `items`(`item_id`, `name`, `price`, `quantity`) VALUES ('$item_id','$name','$price', '$quantity')";

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
}



$conn->close();
?> 