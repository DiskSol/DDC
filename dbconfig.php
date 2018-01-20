<?php 
$servername = "ibmx_e5a5b333b39bf87";
$username = "b0744edea1cdb6";
$password = "04159ecc";
$dbname = "ibmx_e5a5b333b39bf87";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>