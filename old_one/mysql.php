<?php
// $dsn = 'mysql:dbname=test;host=localhost';
// $user = 'root';
// $password = 'usbw';
// $db = new PDO($dsn, $user, $password);


$dsn = 'mysql:dbname=tests;host=localhost';
$user = 'myuser';
$password = 'aaaa';
try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    print("<b>Data base connection error:</b>" . $e->getMessage());
    die();
}


// $dsn = 'mysql:dbname=tests;host=localhost';
// $user = 'myuser';
// $password = 'qqqqqq';
// $db = new PDO($dsn, $user, $password);
