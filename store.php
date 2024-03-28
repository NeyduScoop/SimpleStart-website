<?php
// Check if latitude, longitude, and user agent are set
if(isset($_GET['lat']) && isset($_GET['long']) && isset($_GET['uagent'])) {
    // Retrieve latitude, longitude, and user agent
    $latitude = $_GET['lat'];
    $longitude = $_GET['long'];
    $userAgent = $_GET['uagent'];

    // You can do further processing here, such as storing the data in a database
    // For demonstration purposes, let's just echo the received data
    echo "Latitude: $latitude<br>";
    echo "Longitude: $longitude<br>";
    echo "User Agent: $userAgent<br>";

    // You may also want to log the data to a file or database for future analysis
} else {
    // Handle the case where one or more parameters are missing
    echo "Error: Required parameters are missing.";
}
?>
