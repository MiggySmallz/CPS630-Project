<?php include 'dbconnect.php' ?>

<!DOCTYPE php>
<php lang="en">
<meta charset="UTF-8">
<title>Smart Customer Services</title>
<link rel="stylesheet" href="project-team19.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript" src="./test.js"></script>
<script type="text/javascript" src="./drag.js"></script>

<script>
    
</script>

<style>
</style>

<body>

<div class="menu-bar">
    <div>
        <a href="index.php"><img id="logo" src="logo.png"></a>
    </div>
    <div>
        <a href="index.php">Home</a>
    </div>
    <div>
        <a href="types_of_services.php">Types Of Services</a>   
    </div>
    <div>
        <a href="reviews.php">Reviews</a>
    </div>
    <div>
        <a href="shopping_cart.php">Shopping Cart</a>
    </div>
    <div>
        <a href="about_us.php">About Us</a>
    </div>
    <div>
        <a href="contact_us.php">Contact Us</a>
    </div>
    <div class="dropdown" <?php 
        session_start();
        if ($_SESSION['login_id'] !== 'admin' && $_SESSION['password'] !== 'admin') {
            echo 'style="display:none;"'; 
        }

        ?>>
        <button class="dropbtn">DB Maintain</button>
        <div class="dropdown-content">
            <a href="insert.php">Insert</a>
            <a href="delete.php">Delete</a>
            <a href="select.php">Select</a>
            <a href="update.php">Update</a>
        </div>
    </div>
    
    <form class="searchBar" onsubmit="addedItemNotification()" method='post'>
        <input type="text" placeholder="Search for specific order..." name="search">
        <button type="submit" name="submit">Load</button>
    </form>

    <button type="submit" name="submit" onclick="addedItemNotification()">Search</button>

    <div>
        <a href="logout.php">Log Out</a>
    </div>
</div>
</div>

<div class="bottomright">
    <?php
        require __DIR__ . './functions.php';
        if (isset($_POST['submit'])) {
            $item = $_POST['item'];
            $result = $connect -> query("SELECT * from orders WHERE order_id=$item;");
            if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
                echo "Order ID: " . $row["order_id"] . "<br>Trip ID: " . $row["trip_id"] . "<br>receipt ID: "
                . $row["receipt_id"] . "<br>User ID: " . $row["user_id"] . "<br>Branch: " . $row["branch"]
                . "<br>Date Issued: " . $row["date_issued"] . "<br>Date Received: " . $row["date_recieved"]
                . "<br>Total Price: " . $row["total_price"];
            }
            else echo "No entry found.";
        }
    ?>
</div>

<div class="container">
    <div class = "container2">
        <div class="item-list-parent" id="flex-child">
            <div>
                <div class="item">
                    <div class="item-img"><img id="product_0_ASUS-RTX-3070_1549.15" draggable="true" ondragstart="drag(event)" src="./imgs/ASUS3070.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_0">ASUS RTX 3070</h2><h1>$1549.15</h1><button onclick="updateCart(0, 'ASUS RTX 3070', 1549.15)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_1_ASUS-VivoBook-15_679.99" draggable="true" ondragstart="drag(event)" src="./imgs/ASUSVivoBook15.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_1">ASUS VivoBook 15</h2><h1>$679.99</h1><button onclick="updateCart(1, 'ASUS VivoBook 15', 679.99)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_2_Air-Pods-Pro_278.32" draggable="true" ondragstart="drag(event)" src="./imgs/Air Pods Pro.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_2">Air Pods Pro</h2><h1>$278.32</h1><button onclick="updateCart(2, 'Air Pods Pro', 278.32)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_3_iPhone-11-Pro-Max_749.99" draggable="true" ondragstart="drag(event)" src="./imgs/IPHONE11PROMAX.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_3">iPhone 11 Pro Max</h2><h1>$749.99</h1><button onclick="updateCart(3, 'iPhone 11 Pro Max', 749.99)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_4_Nintendo-Switch_379.96" draggable="true" ondragstart="drag(event)" src="./imgs/SWITCH.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_4">Nintendo Switch</h2><h1>$379.96</h1><button onclick="updateCart(4, 'Nintendo Switch', 379.96)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_5_ASUS-ProArt-27inch_497.95" draggable="true" ondragstart="drag(event)" src="./imgs/asus monitor.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_5">ASUS ProArt 27"</h2><h1>$497.95</h1><button onclick="updateCart(5, 'ASUS ProArt 27inch', 497.95)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_6_AMD-Ryzen-5-5600x_299.99" draggable="true" ondragstart="drag(event)" src="./imgs/amd ryzen 5 5600x.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_6">AMD Ryzen 5 5600x</h2><h1>$299.99</h1><button onclick="updateCart(6, 'AMD Ryzen 5 5600x', 299.99)" type="button">Add to Cart</button></div>
                </div>
            </div>

            <div class="item-list-row">
                <div class="item">
                    <div class="item-img"><img id="product_7_Gigabyte-RTX-3060_954.72" draggable="true" ondragstart="drag(event)" src="./imgs/Gigabyte3060.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_7">Gigabyte RTX 3060</h2><h1>$954.72</h1><button onclick="updateCart(7, 'Gigabyte RTX 3060', 954.72)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_8_Samsung-GalaxyBook-Pro360_1869.99" draggable="true" ondragstart="drag(event)" src="./imgs/SamsungGalaxyBookPro360.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_8">Samsung GalaxyBook Pro360</h2><h1>$1869.99</h1><button onclick="updateCart(8, 'Samsung GalaxyBook Pro360', 1869.99)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_9_Samsung-Galaxy-Buds_179.72" draggable="true" ondragstart="drag(event)" src="./imgs/Galaxy Buds.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_9">Samsung Galaxy Buds</h2><h1>$179.72</h1><button onclick="updateCart(9, 'Samsung Galaxy Buds', 179.72)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_10_Galaxy-S22_1099.99" draggable="true" ondragstart="drag(event)" src="./imgs/GALAXY_S22.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_10">Galaxy S22</h2><h1>$1099.99</h1><button onclick="updateCart(10, 'Galaxy S22', 1099.99)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_11_Xbox-One_379.96" draggable="true" ondragstart="drag(event)" src="./imgs/XBOX.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_11">Xbox One</h2><h1>$379.96</h1><button onclick="updateCart(11, 'Xbox One', 379.96)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_12_Samsung-Curve-27inch_328.92" draggable="true" ondragstart="drag(event)" src="./imgs/SamsungMonitor.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_12">Samsung Curve 27"</h2><h1>$328.92</h1><button onclick="updateCart(12, 'Samsung Curve 27inch', 328.92)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_13_Intel-i7-8700k_427.98" draggable="true" ondragstart="drag(event)" src="./imgs/Intel i7-8700k.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_13">Intel i7-8700k</h2><h1>$427.98</h1><button onclick="updateCart(13, 'Intel i7-8700k', 427.98)" type="button">Add to Cart</button></div>
                </div>
            </div>

            <div class="item-list-row">
                <div class="item">
                    <div class="item-img"><img id="product_14_MSI-RTX-3080_1999.99" draggable="true" ondragstart="drag(event)" src="./imgs/MSI3080.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_14">MSI RTX 3080</h2><h1>$1999.99</h1><button onclick="updateCart(14, 'MSI RTX 3080', 1999.99)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_15_Huawei-MateBook-14s_1898.99" draggable="true" ondragstart="drag(event)" src="./imgs/HUAWEI_MateBook_14s.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_15">Huawei MateBook 14s</h2><h1>$1898.99</h1><button onclick="updateCart(15, 'Huawei MateBook 14s', 1898.99)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_16_SONY-LinkBuds_249.99" draggable="true" ondragstart="drag(event)" src="./imgs/SONY LinkBuds.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_16">SONY LinkBuds</h2><h1>$249.99</h1><button onclick="updateCart(16, 'SONY LinkBuds', 249.99)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_17_Oneplus-9_759.99" draggable="true" ondragstart="drag(event)" src="./imgs/ONEPLUS9.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_17">Oneplus 9</h2><h1>$759.99</h1><button onclick="updateCart(17, 'Oneplus 9', 759.99)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_18_PS5_429.99" draggable="true" ondragstart="drag(event)" src="./imgs/PS5.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_18">PS5</h2><h1>$429.99</h1><button onclick="updateCart(18, 'PS5', 429.99)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_19_Benq-25inch_419.99" draggable="true" ondragstart="drag(event)" src="./imgs/Benq Monitor.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_19">Benq 25"</h2><h1>$419.99</h1><button onclick="updateCart(19, 'Benq 25inch', 419.99)" type="button">Add to Cart</button></div>
                </div>
                <div class="item">
                    <div class="item-img"><img id="product_20_Intel-i7-11700k_449.99" draggable="true" ondragstart="drag(event)" src="./imgs/Intel i7-11700k.jpg"></div>
                    <div class="item-desc"><h2 class="item-list-row" draggable="true" ondragstart="drag(event)" id="product_20">Intel i7-11700k</h2><h1>$449.99</h1><button onclick="updateCart(20, 'Intel i7-11700k', 449.99)" type="button">Add to Cart</button></div>
                </div>
            </div>
        </div>
        
        <div class="topright" id="flex-child" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h3 style="text-align: center;"><u>Shopping Cart</u></h3>
        </div>

    </div>

    <div class="bottomleft">
        <h4 style="color: white; text-align: center;">Item Has Been Added To Your Cart</h4>
    </div>
    <div class="max-items">
        <h4 style="color: white; text-align: center;">Max quantity is 5 items</h4>
    </div>

</div>


</body>
</php>

<?php 
    if (isset($_POST['submit'])) {
        $search = $_POST['search'];
        $sql = "SELECT * FROM orders WHERE order_id=$search";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['order_id'] !== '0000-00-00 00:00:0') {
                echo "<div class='bottomright'>";
                echo "<h4 style='color: white; text-align: center;'>That order is not done</h4>";
                echo "</div>";
            }
            else {
                echo "<div class='bottomright'>";
                echo "<h4 style='color: white; text-align: center;'>That order is done</h4>";
                echo "</div>";
            }
        }
        else {
            echo "<div class='bottomright'>";
            echo "<h4 style='color: white; text-align: center;'>That order does not exist</h4>";
            echo "</div>";
        }
    }
?>




