<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cps630";

$conn = new mysqli($servername, $username, $password);
$conn->query("CREATE DATABASE cps630;");
$conn->close();


// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("CREATE TABLE users (user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50), tel_no INT(50), email VARCHAR(50), address VARCHAR(50), login_id VARCHAR(50), password VARCHAR(50), balance INT(50))");
$conn->query("CREATE TABLE items (item_id INT, name VARCHAR(255), price FLOAT, quantity INT);");
$conn->query("CREATE TABLE stock (stock_id INT, name VARCHAR(255), price FLOAT, quantity INT);");
$conn->query("CREATE TABLE shopping (receipt_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, branch VARCHAR(255), total_price FLOAT);");
$conn->query("CREATE TABLE orders (order_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, trip_id INT, receipt_id INT, user_id INT, branch VARCHAR(255), date_issued DATETIME, date_recieved DATETIME,total_price FLOAT);");  // add payment??
$conn->query("CREATE TABLE trip (trip_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, truck_id INT, distance FLOAT, branch VARCHAR(255), destination VARCHAR(255));"); 
$conn->query("CREATE TABLE truck (truck_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, truck_code INT, available VARCHAR(3));"); 
$conn->query("CREATE TABLE payment (user_id INT(6) , cc_num INT(16), cvc INT(3)"); 




$conn->query("INSERT INTO `users`(`user_id`, `name`, `tel_no`, `email`, `address`, `login_id`, `password`, `balance`) VALUES (1, 'Albert', 2147483647, 'albert@gmail.com', '8 Sunnylea Ave W, Etobicoke, ON M8Y 2J7', 1, 'pass' , 0)" );

$conn->query("INSERT INTO `truck`(`truck_code`, `available`) VALUES (100, 'yes')" );
$conn->query("INSERT INTO `truck`(`truck_code`, `available`) VALUES (101, 'yes')" );
$conn->query("INSERT INTO `truck`(`truck_code`, `available`) VALUES (102, 'yes')" );
$conn->query("INSERT INTO `truck`(`truck_code`, `available`) VALUES (103, 'yes')" );
$conn->query("INSERT INTO `truck`(`truck_code`, `available`) VALUES (104, 'yes')" );
$conn->query("INSERT INTO `truck`(`truck_code`, `available`) VALUES (105, 'yes')" );
$conn->query("INSERT INTO `truck`(`truck_code`, `available`) VALUES (106, 'yes')" );
$conn->query("INSERT INTO `truck`(`truck_code`, `available`) VALUES (107, 'yes')" );
$conn->query("INSERT INTO `truck`(`truck_code`, `available`) VALUES (108, 'yes')" );
$conn->query("INSERT INTO `truck`(`truck_code`, `available`) VALUES (109, 'yes')" );

$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (0, 'ASUS RTX 3070', '1549.15', 1)" );
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (1, 'ASUS VivoBook 15', '679.99', 1)" );
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (2, 'Air Pods Pro', '278.32', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (3, 'iPhone 11 Pro Max', '749.99', 1)");
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (4, 'Nintendo Switch', '379.96', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (5, 'ASUS ProArt 27inch', '497.95', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (6, 'AMD Ryzen 5 5600x', '299.99', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (7, 'Gigabyte RTX 3060', '954.72', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (8, 'Samsung GalaxyBook Pro360', '1869.99', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (9, 'Samsung Galaxy Buds', '179.72', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (10, 'Galaxy S22', '1099.99', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (11, 'Xbox One', '379.96', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (12, 'Samsung Curve 27inch', '328.92', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (13, 'Intel i7-8700k', '427.98', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (14, 'MSI RTX 3080', '1999.99', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (15, 'Huawei MateBook 14s', '1898.99', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (16, 'SONY LinkBuds', '249.99', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (17, 'Oneplus 9', '759.99', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (18, 'PS5', '429.99', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (19, 'Benq 25inch', '419.99', 1)"); 
$conn->query("INSERT INTO `stock`(`id`, `name`, `price`, `quantity`) VALUES (20, 'Intel i7-11700k', '449.99', 1)"); 


// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }


$conn->close();
?> 