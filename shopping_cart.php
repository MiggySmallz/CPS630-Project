<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Smart Customer Services</title>
<link rel="stylesheet" href="shopping_cart.css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $(".item-quantity").change(function () {
            var quantity = $(this).val();
            var id = $(this).attr('id');

            $.ajax({type:"POST", url:"updateRecord.php", data:{item_id: id, quantity: quantity}, success:function(data){
                console.log(data);}
            })
        });
    });
</script>

<body>

<div class="menu-bar">
    <div>
        <a href="http://localhost/index.php"><img id="logo" src="logo.png"></a>
    </div>
    <div>
        <a href="http://localhost/index.php">Home</a>
    </div>
    <div>
        <a href="http://localhost/types_of_services.php">Types Of Services</a>   
    </div>
    <div>
        <a href="http://localhost/reviews.php">Reviews</a>
    </div>
    <div>
        <a href="http://localhost/shopping_cart.php">Shopping Cart</a>
    </div>
    <div>
        <a href="http://localhost/about_us.php">About Us</a>
    </div>
    <div>
        <a href="http://localhost/contact_us.php">Contact Us</a>
    </div>
    <div>
        <a href="http://localhost/signup.php">Sign Up</a>
    </div>
    <div>
        <a href="http://localhost/signin.php">Sign In</a>
    </div>
</div>

<div class="container">

    <div id="results">

        <div id="title">
            <h1>Shopping Cart</h1>
        </div>

        <div class="cart">
            <?php
            $con = mysqli_connect("localhost", "root", "", "cps630"); // Check connection

                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                // $result = mysqli_query($con, "SELECT * FROM items");
                $result = mysqli_query($con,"SELECT id, name, price, quantity FROM items GROUP BY id");
                if ($result-> num_rows > 0) {
                    echo "<div align='center'><table><tr><th>Name</th><th>Price</th><th>Quantity</th></tr>";
                    // output data of each row
                    $count = 1;
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>".$row["name"]."</td><td>".$row["price"]."</td><td>".$row["quantity"]."</td><td><select name='item-quantity' class='item-quantity' id='".$row["id"]."'>
                        <option value='0'>0 (Delete)</option>
                        <option "; if($row["quantity"] == '1'){{echo"selected='selected'";}} echo" value='1'>1</option>
                        <option "; if($row["quantity"] == '2'){{echo"selected='selected'";}} echo" value='2'>2</option>
                        <option "; if($row["quantity"] == '3'){{echo"selected='selected'";}} echo" value='3'>3</option>
                        <option "; if($row["quantity"] == '4'){{echo"selected='selected'";}} echo" value='4'>4</option>
                        <option "; if($row["quantity"] == '5'){{echo"selected='selected'";}} echo" value='5'>5</option>
                    </select></td></tr>";
                    $count = $count +1;
                    }
                    echo "</table></div>";
                } else {
                    echo "0 results" . "<br>";
                }
                mysqli_close($con);

            ?>
        </div>

        
    </div>
</div>







</body>
</html>