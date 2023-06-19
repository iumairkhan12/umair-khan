<?php

$host = 'localhost'; // The hostname of your MySQL server
$username = 'root'; // The username of your MySQL user
$password = ''; // The password of your MySQL user
$dbname = 'travel'; // The name of your MySQL database

// Create a new connection to the database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

?>
