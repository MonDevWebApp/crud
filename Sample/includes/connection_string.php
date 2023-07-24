<?php

// Set up connection parameters
$servername = "localhost";
$username = "root";
$password = "MNTBN@25oio";
$databasename = "crud";

// Check if server is reachable
if (!@fsockopen($servername, 80)) {
    // Redirect the user to the error page
    header("Location: ../index.php");
    // Stop executing the script
    exit;
}

try {
    // Attempt to connect to the database
    $conn = mysqli_connect($servername, $username, $password, $databasename);

    // Check for errors in the connection
    if (!$conn) {
        throw new Exception("Connection failed: " . mysqli_connect_error());
    }
} catch (Exception $e) {
    // Redirect the user to the error page
    header("Location: ../index.php");
    // Stop executing the script
    exit;
}