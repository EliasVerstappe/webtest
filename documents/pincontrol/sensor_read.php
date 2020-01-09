<?php
system("gpio -g mode 14 in");
system("gpio -g mode 17 in");
system("gpio -g mode 18 in");
system("gpio -g mode 23 in");
system("gpio -g mode 24 in");
system("gpio -g mode 25 in");
system("gpio -g mode 20 in");
system("gpio -g mode 21 in");

exec("gpio -g read 14", $bit7);
exec("gpio -g read 17", $bit6);
exec("gpio -g read 18", $bit5);
exec("gpio -g read 23", $bit4);
exec("gpio -g read 24", $bit3);
exec("gpio -g read 25", $bit2);
exec("gpio -g read 20", $bit1);
exec("gpio -g read 21", $bit0);

$distance = 0;
$distance = $bit7[0];
$distance = $distance << 1;
$distance = $distance | $bit6[0];
$distance = $distance << 1;
$distance = $distance | $bit5[0];
$distance = $distance << 1;
$distance = $distance | $bit4[0];
$distance = $distance << 1;
$distance = $distance | $bit3[0];
$distance = $distance << 1;
$distance = $distance | $bit2[0];
$distance = $distance << 1;
$distance = $distance | $bit1[0];
$distance = $distance << 1;
$distance = $distance | $bit0[0];

var_dump($distance);

// print_r("bit7");var_dump($bit7);
// print_r("bit6");var_dump($bit6);
// print_r("bit5");var_dump($bit5);
// print_r("bit4");var_dump($bit4);
// print_r("bit3");var_dump($bit3);
// print_r("bit2");var_dump($bit2);
// print_r("bit1");var_dump($bit1);
// print_r("bit0");var_dump($bit0);


include_once ('../../config/db-conn.php');

$sql = "INSERT INTO measurements (value) 
VALUES (" . $distance . ");";
$result = $dbc->query($sql);
var_dump($result);
