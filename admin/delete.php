<?php
session_start();
require_once('lock_guest.php');
require_once('/db/mysql.php');
$id = $_GET['id'];
$query = 'DELETE FROM tests WHERE id=:id';
$stmt = $db->prepare($query);
$stmt->execute([':id' => $id]);

$query = 'UPDATE tests SET id = id -1 WHERE id >' . $id;
$stmt = $db->prepare($query);
if ($stmt->execute()) {
    $_SESSION['count'] = $_SESSION['count'] - 1;
}
header("Location: http://" . $_SERVER['HTTP_HOST']);