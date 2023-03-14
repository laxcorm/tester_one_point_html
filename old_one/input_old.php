<?php
session_start();
require('mysql.php');
$id = $_POST['input'];
if ($id > $_SESSION['count']) {
    
    $question = trim($_POST['question']);
    $answer = $_POST['answer'];
    $answer_1 = trim($_POST['answer_1']);
    $answer_2 = trim($_POST['answer_2']);
    $answer_3 = trim($_POST['answer_3']);

    $query = 'INSERT INTO tests(id ,questions, answer_1,answer_2,answer_3, answer) VALUES(:id, :question, :answer_1, :answer_2, :answer_3, :answer)';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->bindValue(':question', $question, PDO::PARAM_STR);
    $stmt->bindValue(':answer_1', $answer_1, PDO::PARAM_STR);
    $stmt->bindValue(':answer_2', $answer_2, PDO::PARAM_STR);
    $stmt->bindValue(':answer_3', $answer_3, PDO::PARAM_STR);
    $stmt->bindValue(':answer', $answer, PDO::PARAM_STR);
    if ($stmt->execute()) {
        $_SESSION['count'] = $id;
    }
} else {
    //$id = $_POST['input'];

    $question = trim($_POST['question']);
    $answer = $_POST['answer'];
    $answer_1 = trim($_POST['answer_1']);
    $answer_2 = trim($_POST['answer_2']);
    $answer_3 = trim($_POST['answer_3']);

    $query = 'UPDATE tests SET questions = :question, answer_1 = :answer_1, answer_2 = :answer_2 ,answer_3 = :answer_3, answer = :answer WHERE id='.$id;
    $stmt = $db->prepare($query);
    $stmt->bindValue(':question', $question, PDO::PARAM_STR);
    $stmt->bindValue(':answer_1', $answer_1, PDO::PARAM_STR);
    $stmt->bindValue(':answer_2', $answer_2, PDO::PARAM_STR);
    $stmt->bindValue(':answer_3', $answer_3, PDO::PARAM_STR);
    $stmt->bindValue(':answer', $answer, PDO::PARAM_STR);
    $stmt->execute();
}
header("Location: http://".$_SERVER['HTTP_HOST']."/fillin.php?id=1");
