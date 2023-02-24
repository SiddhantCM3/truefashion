<?php
    $servername = "localhost";
    $username = "divyazkt_developerCM3";
    $password = "DeveloperCM3";
    $dbname = "divyazkt_truefashion_db";
     
    // Create connection
    $conn = new mysqli($servername,
        $username, $password, $dbname);
     
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: "
            . $conn->connect_error);
    }
?>