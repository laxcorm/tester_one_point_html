<?php
if (isset($_SESSION['questions'][$id])) {
    ${$_SESSION['questions'][$id]} = 'checked';
}
if ($id > $count) {
    require_once('user/final.php');
}