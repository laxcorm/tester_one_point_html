<?php
(session_status() == PHP_SESSION_ACTIVE) ?: session_start();
require_once(dirname(__DIR__).'/db/mysql.php');
require_once(dirname(__DIR__).'/session/count.php');

function fromArray($array){
    return $array[0];
}
$query = 'SELECT answer FROM tests';
$stmt = $db->prepare($query);
$stmt->execute();
$real_answers = $stmt->fetchAll(PDO::FETCH_NUM);
$real_answers = array_map('fromArray', $real_answers);
$user_answers = $_SESSION['questions'];
$user_answers = array_values($user_answers);
$correct = array_intersect_assoc($user_answers, $real_answers);
$correct_num = count($correct);
$_SESSION['result']= "Правильних відповідей на $correct_num питань з $count";
unset($_SESSION['questions']);
header("Location: http://" . $_SERVER['HTTP_HOST']);