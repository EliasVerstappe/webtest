<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
 
/* Attempt to connect to MySQL database */
$dbc = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD);
 
// Check connection
if($dbc === false){
    die("ERROR: Could not connect." . $dbc->connect_error);
}
?>