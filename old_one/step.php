<?php


/* if ($_GET['id'] ?? false) {
    $step = ($_GET['id'] > 0) ? 1 : -1;
    $id = abs($_GET['id']);
    $id = $id + $step;
} */

if ($_GET['id'] ?? false) {
    $id = $_GET['id'];
    $id = $id + 1;
    $id = abs($id);
    
} /* else {
    $id = 1;
} */

//update
/* if (isset($_SERVER['HTTP_REFERER'])) {
    if ($_SERVER['HTTP_REFERER'] == "http://" . $_SERVER['HTTP_HOST'] . "/auth.php" ||  $_SERVER['HTTP_REFERER'] == "http://" . $_SERVER['HTTP_HOST']) {
        $id = 1;
    }
} */

/* if($_SERVER['HTTP_REFERER'] == "http://" . $_SERVER['HTTP_HOST'] . "/auth.php" && !isset($_GET['id'])) {
    $id = 1;
} */

//для output.php
// if (!isset($_SESSION['authorized'])) {
//    /*  if ($_SERVER['HTTP_REFERER'] == "http://" . $_SERVER['HTTP_HOST']) {
//        $id = 1;
//     } */

//     if ((!isset($_SESSION['questions'][$id])) && !isset($_GET['answ']) && $step != -1) {
//         $step = 0;
//         $noanswer = true;
//     } else {
//         $_SESSION['questions'][$id] = $_GET['answ'];
//     }

//     if (isset($_SESSION['questions'][$id + $step])) {
//         ${$_SESSION['questions'][$id + $step]} = 'checked';
//     }  
//     $id = $id + $step;
// }

//update
//для output.php новый
// if (!isset($_SESSION['authorized'])) {
//     /*  if ($_SERVER['HTTP_REFERER'] == "http://" . $_SERVER['HTTP_HOST']) {
//         $id = 1;
//      } */
 
//      if ((!isset($_SESSION['questions'][$id])) && !isset($_GET['answ']) && $step != -1) {
//          $step = 0;
//          $noanswer = true;
//      } else {
//          $_SESSION['questions'][$id] = $_GET['answ'];
//      }
 
//      if (isset($_SESSION['questions'][$id + $step])) {
//          ${$_SESSION['questions'][$id + $step]} = 'checked';
//      }  
//      $id = $id + $step;
//  }