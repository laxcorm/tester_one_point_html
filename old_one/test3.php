<?php
// if ($id > $count) {
//     $test = ['id' => $id, 'questions' => '', 'answer_1' => '', 'answer_2' => '', 'answer_3' => '', 'answer' => ''];
// } else {
//     if (isset($_SESSION['authorized'])) {
//         $query = "SELECT questions, answer_1, answer_2, answer_3, answer FROM tests WHERE id=" . $id/* ($id = $id + ($step ?? 0)) */; //зачем 0
//     } else {
//         $query = "SELECT questions, answer_1, answer_2, answer_3 FROM tests WHERE id=" . $id;
//     }
//     $stmt = $db->prepare($query);
//     $stmt->execute();
//     $test = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     // $test = empty($test)? false :$test[0];
//     if ($test) {
//         $test =  $test[0];
//     }
// }
require('mysql.php');
$top = true;

$query = "SELECT ". (!isset($top) ?: "questions,") ." answer_1, answer_2, answer_3 FROM tests WHERE id=1";


$stmt = $db->prepare($query);
$stmt->execute();
$test = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $test = empty($test)? false :$test[0];
if ($test) {
    $test =  $test[0];
}

var_dump($test);