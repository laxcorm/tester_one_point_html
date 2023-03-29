<?php
session_start();
require_once('../db/mysql.php');
$post_password = $_POST['password'];
$post_login = $_POST['login'];
$query = "SELECT password FROM admin WHERE login = :login";
$stmt = $db->prepare($query);
$stmt->execute([':login' => $post_login]);
$origin_password = $stmt->fetchAll(PDO::FETCH_ASSOC)[0]['password'];

if (password_verify($post_password, $origin_password)) {
    $_SESSION['admin'] = true;
}
else{
    $_SESSION['error'] = "Input data is not correct";

}
header("Location: http://" . $_SERVER['HTTP_HOST']);