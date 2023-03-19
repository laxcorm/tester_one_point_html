<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['questions']) ? ((count($_SESSION['questions'])) < $id + 1) && (!isset($_GET['answer'])) : false)
     {
        $noanswer = true;
    } else {
        if (isset($_GET['answer'])) {
            $_SESSION['questions'][abs($id)] = $_GET['answer']; //зачем прописать abs($id)
        }
      $id =  ($id == $count +1) ? $id : abs($id + 1);
      }
} else {
    $id = 1;
}