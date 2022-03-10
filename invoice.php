<!DOCTYPE php>
<php lang="en">
<meta charset="UTF-8">
<title>Smart Customer Services</title>
<!-- <link rel="stylesheet" href="project-team19.css"> -->
<link rel="stylesheet" href="invoice.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script defer
        src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key={ENTER API KEY HERE}"
        type="text/javascript"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->

<?php require_once('getUserAddress.php'); ?>




</head>

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
    <div>
        <a href="signup.php">Sign Up</a>
    </div>
    <div>
        <a href="signin.php">Sign In</a>
    </div>
</div>
<div id="container">
    <h1>Invoice</h1>
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
                $final_price = 0;
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["name"]."</td><td>".$row["price"]."</td><td>".$row["quantity"]."</td></tr>";
                    $count = $count +1;
                    $final_price = $final_price+$row["price"]*$row["quantity"];
                }
                echo "<tr><td><b>Final Price</b></td><td><b>".$final_price."</b></td><td></td></tr>";
                echo "</table></div>";
            } else {
                echo "0 results" . "<br>";
            }
            mysqli_close($con);

        ?>

    <div id="map"></div>
    </div>

    


    
    <script>
    $(function () {
        var origin, destination, map;


        // add input listeners
        google.maps.event.addDomListener(window, 'load', function (listener) {
            // setDestination();
            initMap();
        });

        // init or load map
        function initMap() {

            var myLatLng = {
                lat: 43.65924372894913, 
                lng: -79.38030177747302
            };
            map = new google.maps.Map(document.getElementById('map'), {zoom: 16, center: myLatLng,});
        }

        // function setDestination() {
        //     var from_places = new google.maps.places.Autocomplete(document.getElementById('from_places'));
        //     var to_places = new google.maps.places.Autocomplete(document.getElementById('to_places'));

        //     google.maps.event.addListener(from_places, 'place_changed', function () {
        //         var from_place = from_places.getPlace();
        //         var from_address = from_place.formatted_address;
        //         $('#origin').val(from_address);
        //     });

        //     google.maps.event.addListener(to_places, 'place_changed', function () {
        //         var to_place = to_places.getPlace();
        //         var to_address = to_place.formatted_address;
        //         $('#destination').val(to_address);
        //     });
        // }

        function displayRoute(origin, destination, directionsService, directionsDisplay) {
            
            directionsService.route({
                origin: "<?php echo $_GET['branch'] ?>",
                destination: "<?php echo func1() ?>",
                travelMode: "DRIVING",
                avoidTolls: true
            }, function (response, status) {
                if (status === 'OK') {
                    directionsDisplay.setMap(map);
                    directionsDisplay.setDirections(response);
                } else {
                    directionsDisplay.setMap(null);
                    directionsDisplay.setDirections(null);
                    alert('Could not display directions due to: ' + status);
                }
            });
        }
        
        
        window.onload = (function (e) {
            e.preventDefault();
            var origin = $('#origin').val();
            var destination = $('#destination').val();
            var directionsDisplay = new google.maps.DirectionsRenderer({'draggable': true});
            var directionsService = new google.maps.DirectionsService();
           displayRoute(origin, destination, directionsService, directionsDisplay);
            // calculateDistance(travel_mode, origin, destination);
        });
    });

    // function getCurrentPosition() {
    //     if (navigator.geolocation) {
    //         navigator.geolocation.getCurrentPosition(setCurrentPosition);
    //     } else {
    //         alert("Geolocation is not supported by this browser.")
    //     }
    // }

    // function setCurrentPosition(pos) {
    //     var geocoder = new google.maps.Geocoder();
    //     var latlng = {lat: parseFloat(pos.coords.latitude), lng: parseFloat(pos.coords.longitude)};
    //     geocoder.geocode({ 'location' :latlng  }, function (responses) {
    //         console.log(responses);
    //         if (responses && responses.length > 0) {
    //             $("#origin").val(responses[1].formatted_address);
    //             $("#from_places").val(responses[1].formatted_address);
    //             //    console.log(responses[1].formatted_address);
    //         } else {
    //             alert("Cannot determine address at this location.")
    //         }
    //     });
    // }
    </script>

</div>

</body>
</html>
