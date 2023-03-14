<?php
session_start();
require('mysql.php');
$id = $_POST['id'];

function input($stmt)
{

    foreach ($_POST as $key => $value) {
        $$key = trim($value);
        $stmt->bindValue(":" . $key, $$key, is_string($value) ? PDO::PARAM_STR : PDO::PARAM_INT);
    }
    return $stmt->execute();
}

if ($id > $_SESSION['count']) {
    $query = 'INSERT INTO tests(id ,questions, answer_1,answer_2,answer_3, answer) VALUES(:id, :questions, :answer_1, :answer_2, :answer_3, :answer)';
} else {
    $query = 'UPDATE tests SET questions = :questions, answer_1 = :answer_1, answer_2 = :answer_2 ,answer_3 = :answer_3, answer = :answer WHERE id = :id';
}

$stmt = $db->prepare($query);
if (input($stmt) && $id > $_SESSION['count']) {
    $_SESSION['count'] = $id;
}

header("Location: http://" . $_SERVER['HTTP_HOST'] . "/fillin.php?id=1");
