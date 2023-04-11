<?php
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    if (isset($_SESSION['questions']) ? ((count($_SESSION['questions'])) < $id + 1) && (!isset($_POST['answer'])) : false)
     {
        $noanswer = true;
    } else {
        if (isset($_POST['answer'])) {
            $_SESSION['questions'][abs($id)] = $_POST['answer'];
        }
      $id =  ($id == $count +1) ? $id : abs($id + 1);
      }
} else {
    $id = 1;
}