<?php

$data = json_decode(file_get_contents('php://input'), true);

$id = $data['data'];


include_once ('../../config/db-conn.php');

// $sql = "SELECT * FROM pending_users WHERE id=" . $id .";";
$sql = "INSERT INTO users (username, email, password) 
SELECT username, email, password 
FROM pending_users
WHERE id=" . $id .";";
$result = $dbc->query($sql);

$sql = "DELETE
FROM pending_users
WHERE id=" . $id .";";
$result = $dbc->query($sql);
