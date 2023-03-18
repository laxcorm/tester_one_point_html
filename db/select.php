<?php

$query = "SELECT questions, answer_1, answer_2, answer_3, answer FROM tests WHERE id=" . $id;

$stmt = $db->prepare($query);
$stmt->execute();
$test = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (!empty($test)) {
    $test =  $test[0];
}
