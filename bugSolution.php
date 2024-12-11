<?php
// Database credentials
define('DB_HOST', 'localhost');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
define('DB_NAME', 'your_database');

// Create a new mysqli object
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Perform a query
$sql = "SELECT * FROM your_table";
$result = $mysqli->query($sql);

// Check if the query was successful
if ($result) {
    // Process the results
    while ($row = $result->fetch_assoc()) {
        // Do something with each row
        print_r($row);
    }
    $result->free_result();
} else {
    echo "Error: " . $mysqli->error;
}

// Close the connection
$mysqli->close();
?> 