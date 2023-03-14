<?php
require('../db/mysql.php');
$password = password_hash('qwerty', PASSWORD_BCRYPT);
$insert = "INSERT INTO admin (login, password) VALUES ('addmin','$password')";
$stmt = $db->prepare($insert);
$stmt->execute();
