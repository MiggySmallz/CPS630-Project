<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Smart Customer Services</title>
<link rel="stylesheet" href="shopping_cart.css">

<script type="text/javascript" src="./test.js"></script>
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
                $result = mysqli_query($con,"SELECT item_id, name, price, quantity FROM items GROUP BY item_id");
                if ($result-> num_rows > 0) {
                    echo "<div align='center'><table><tr><th>Name</th><th>Price</th><th>Quantity</th></tr>";
                    // output data of each row
                    $count = 1;
                    $final_price = 0;
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>".$row["name"]."</td><td>".$row["price"]*$row["quantity"]."</td><td><select name='item-quantity' class='item-quantity' id='".$row["item_id"]."'>
                        <option value='0'>0 (Delete)</option>
                        <option "; if($row["quantity"] == '1'){{echo"selected='selected'";}} echo" value='1'>1</option>
                        <option "; if($row["quantity"] == '2'){{echo"selected='selected'";}} echo" value='2'>2</option>
                        <option "; if($row["quantity"] == '3'){{echo"selected='selected'";}} echo" value='3'>3</option>
                        <option "; if($row["quantity"] == '4'){{echo"selected='selected'";}} echo" value='4'>4</option>
                        <option "; if($row["quantity"] == '5'){{echo"selected='selected'";}} echo" value='5'>5</option>
                    </select></td></tr>";
                    $count = $count +1;
                    $final_price = $final_price+$row["price"]*$row["quantity"];
                    }
                    echo "<tr><td><b>Final Price</b></td><td><b id='price'>".$final_price."</b></td><td></td></tr>";
                    echo "</table></div>";
                } else {
                    echo "0 results" . "<br>";
                }
                mysqli_close($con);

            ?>
        

            <div class="shopping-info">

                <form action="./invoice.php">
                <p>Please select branch to ship from:</p>
                <input type="radio" id="york" name="branch" value="Ryerson University, Victoria Street, Toronto, ON" checked>
                <label for="York">York</label><br>
                <input type="radio" id="east-york" name="branch" value="Michael Garron Hospital, Coxwell Avenue, Toronto, ON">
                <label for="css">East York</label><br>
                <input type="radio" id="etobicoke" name="branch" value="CF Sherway Gardens, The West Mall, Etobicoke, ON">
                <label for="etobicoke">Etobicoke</label>
 
                <!-- <br>  

                <p>Please select time for delivery:</p>
                <select name='delivery-time' class='item-quantity' >
                <option value="00:00">12.00 AM</option>
                <option value="01:00">01.00 AM</option>
                <option value="02:00">02.00 AM</option>
                <option value="03:00">03.00 AM</option>
                <option value="04:00">04.00 AM</option>
                <option value="05:00">05.00 AM</option>
                <option value="06:00">06.00 AM</option>
                <option value="07:00">07.00 AM</option>
                <option value="08:00">08.00 AM</option>
                <option value="09:00">09.00 AM</option>
                <option value="10:00">10.00 AM</option>
                <option value="11:00">11.00 AM</option>
                <option value="12:00">12.00 PM</option>
                <option value="13:00">01.00 PM</option>
                <option value="14:00">02.00 PM</option>
                <option value="15:00">03.00 PM</option>
                <option value="16:00">04.00 PM</option>
                <option value="17:00">05.00 PM</option>
                <option value="18:00">06.00 PM</option>
                </select> -->
                <br><br>

                <label for="shipment-time">Enter a date and time for your shipment:</label>
                <input id="shipment-time" type="datetime-local" name="shipment-time" value="2022-03-01T09:00">
  
                <br><br>
                
                <input type="submit" value="Proceed to checkout" onclick="shoppingCart()">
                </form>

                


                


            </div>
        </div>

        
    </div>
</div>







</body>
</html>