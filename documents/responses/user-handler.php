<?php

$data = json_decode(file_get_contents('php://input'), true);

$id = $data['data'];


include_once ('../../config/db-conn.php');

$sql = "SELECT * FROM pending_users WHERE id=" . $id .";";


$result = $dbc->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        var_dump($row['username']);
    }
}




