<?php

if ($_GET['id'] ?? false) {
    $step = ($_GET['id'] > 0) ? 1 : -1;
    $id = abs($_GET['id']);
    //проверка на админа
    if (!isset($_SESSION['authorized'])) {
        if (!isset($_SESSION['questions'][$id]) && !isset($_GET['answ']) && $step != -1) {
            $step = 0;
            $noanswer = true;
        } else {
            $_SESSION['questions'][$id] = $_GET['answ'];
        }

        if (isset($_SESSION['questions'][$id + $step])) {
            ${$_SESSION['questions'][$id + $step]} = 'checked';
        }  
        $id = $id + $step;
    }
    $id = $id + $step;

} elseif (!isset($_GET['id'])) {
    $id = $count + 1;
}
//как прописать хост?
elseif ($_SERVER['HTTP_REFERER'] == "http://" . $_SERVER['HTTP_HOST'] . "/auth.php" && !isset($_GET['id'])) {
    $id = 1;
}
//  echo $id;
// echo "<br>";
// echo $step;
// echo "<br>";
// var_dump($_SESSION['questions']);
// echo "<br>";