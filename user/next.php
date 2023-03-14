<?php
if (isset($_SESSION['questions'][$id])) {
    ${$_SESSION['questions'][$id]} = 'checked';
}
if ($id > $count) {
    require('final.php');
    // header("Location: http://" . $_SERVER['HTTP_HOST'] . "/final.php");
}