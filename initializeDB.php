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

$conn->query("CREATE TABLE items (id INT, name VARCHAR(255), price FLOAT, quantity INT);");
$conn->query("CREATE TABLE stock (id INT, name VARCHAR(255), price FLOAT, quantity INT);");

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