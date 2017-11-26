<?php

    // Prepare variables for database connection

    $dbusername = "your_mySQL_database_username";  
    $dbpassword = "your_mySQL_database_password";  
    $server = "localhost"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"

    // Connect to your database

    $con = new mysqli($server, $dbusername, $dbpassword, "test");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }


    // Execute SQL statement

    // Retrieve all records and display them
    $result = $con->query("INSERT INTO test.smartthings (sensorID, temp, batt) VALUES ('".$_GET["sensorID"]."', '".$_GET["temp"]."', '".$_GET["batt"]."')");

        // Close the connection
    mysqli_close($con);

?>