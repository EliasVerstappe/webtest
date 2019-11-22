<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$dbc = new mysqli($servername, $username, $password);

// Check connection
if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
}
echo "Connected successfully";
?>