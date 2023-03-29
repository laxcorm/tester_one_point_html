<?php
// $dsn = 'mysql:dbname=tests;host=localhost';
// $user = 'myuser';
// $password = 'aaaa';

$dsn = 'mysql:dbname=tests;host=localhost';
$user = 'root';
$password = 'usbw';

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    print("<b>Data base connection error:</b>" . $e->getMessage());
    die();
}