<?php

/* $query = "SELECT COUNT(*) FROM tests";
$stmt = $db->prepare($query);
$stmt->execute();
$count = (int)$stmt->fetch(PDO::FETCH_ASSOC)['COUNT(*)'];
if ($count < $id) {
    require('final.php');
} */
//не выводить ответы
// if($id <= $count)
    //  {
        $query = "SELECT questions, answer_1, answer_2, answer_3, answer FROM tests WHERE id=" . $id;
        // ($id = $id + ($step ?? 0)); зачем 0
   
        // $query = "SELECT questions, answer_1, answer_2, answer_3 FROM tests WHERE id=" . $id;
    
//         $query = "SELECT questions, answer_1, answer_2, answer_3". (isset($_SESSION['authorized']) ? ",answer": "") ." FROM tests WHERE id=" . $id;

// echo $query;
//         echo "<br>";
//         echo $_SERVER['SCRIPT_NAME'];
    $stmt = $db->prepare($query);
    $stmt->execute();
    $test = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $test = empty($test)? false :$test[0];
    if (!empty($test)) {
        $test =  $test[0];
    }
  
    
    