<?php session_start()?>
<!DOCTYPE php>
<php lang="en">
<meta charset="UTF-8">
<title>Smart Customer Services</title>
<!-- <link rel="stylesheet" href="project-team19.css"> -->
<link rel="stylesheet" href="invoice.css">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script defer
        src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyBty7m_H-rgEQwNB5CH_tgI0XXQcHDAw_U"
        type="text/javascript"></script>

<script type="text/javascript" src="./test.js"></script>
<script type="text/javascript" src="./drag.js"></script>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->

<?php require_once('getUserAddress.php'); ?>

<!-- AIzaSyBty7m_H-rgEQwNB5CH_tgI0XXQcHDAw_U -->




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
        <a href="logout.php">Log Out</a>
    </div>
</div>
<div id="container">
    <h1>Invoice</h1>
    <div id="order"><button onclick="submitOrder('<?php echo $_GET['branch'] ?>', '<?php echo $_GET['shipment-time'] ?>'), window.location.href='./payment.php'" style="font-size: 20px">Place Your Order</button></div>
    
    <!-- , window.location.href='./payment.php' -->
    
    <div class="cart">
        <div style="display: flex; position: absolute;">
        
            <div class='flex-child'>
                <table id="shopping-cart">
                    <!-- <tr><th>Name</th><th>Price</th><th>Quantity</th></tr><tr> -->
                        
                </table>
            </div>
            
            <div class="maps-container">
            <div class="flex-child" id="map"></div>
            <div id="result">Distance from branch to your location is <b id="distance"></b></div>
            </div>
        </div>

    
        
    
        
    </div>
    <div id="results" style="background-color:red"></div>
    

    <!-- , window.location.href='/thank_you.php' -->

    
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

        function displayRoute(origin, destination, directionsService, directionsDisplay) {
            
            directionsService.route({
                
                origin: "<?php echo $_GET['branch'] ?>",
                destination: "<?php echo func1($_SESSION['user_id']) ?>",
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
            var origin = "<?php echo $_GET['branch'] ?>";
            var destination = "<?php echo func1($_SESSION['user_id']) ?>";
            console.log("<?php echo func1($_SESSION['user_id']) ?>");
            var directionsDisplay = new google.maps.DirectionsRenderer({'draggable': true});
            var directionsService = new google.maps.DirectionsService();
            displayRoute(origin, destination, directionsService, directionsDisplay);
            calculateDistance(origin, destination);
            populateTable()
        });




        function calculateDistance(origin, destination) {
            var DistanceMatrixService = new google.maps.DistanceMatrixService();
            DistanceMatrixService.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode["DRIVING"],
                    // unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                    unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                }, save_results);
        }

        // save distance results
        function save_results(response, status) {
            
            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#result').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#result').html("Sorry , not available to use this travel mode between " + origin + " and " + destination);
                } else {
                    var distance = response.rows[0].elements[0].distance;
                    var duration = response.rows[0].elements[0].duration;
                    var distance_in_kilo = distance.value / 1000; // the kilo meter
                    var distance_in_mile = distance.value / 1609.34; // the mile
                    var duration_text = duration.text;
                    appendResults(distance_in_kilo, distance_in_mile, duration_text);
                    // sendAjaxRequest(origin, destination, distance_in_kilo, distance_in_mile, duration_text);
                }
            }
        }

        // append html results
        function appendResults(distance_in_kilo, distance_in_mile, duration_text) {
        console.log(distance_in_kilo);
        $('#distance').html(distance_in_kilo + "km");
        }



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
