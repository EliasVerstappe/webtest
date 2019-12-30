<?php

$data = json_decode(file_get_contents('php://input'), true);
// var_dump($data);

$id = $data['data'][0];
$action = $data['data'][1];

// var_dump($id);
// var_dump($action);

include_once ('../../config/db-conn.php');

if ($action == 'approve') {
    $sql = "INSERT INTO users (username, email, password) 
    SELECT username, email, password 
    FROM pending_users
    WHERE id=" . $id .";";
    $result = $dbc->query($sql);
    var_dump($result);
}

$sql = "DELETE
FROM pending_users
WHERE id=" . $id .";";
$result = $dbc->query($sql);
var_dump($result);
