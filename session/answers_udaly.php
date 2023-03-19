<?php
if (
    $_GET['id'] ?? false
) {
    $id = $_GET['id'];

    if ((count($_SESSION['questions'] ?? [])) < $id + 1 && !isset($_GET['answ'])
    ) {
        $noanswer = true;
    } else {
        if (isset($_GET['answ'])) {
            $_SESSION['questions'][abs($id)] = $_GET['answ'];
        }
        $id = abs($id + 1);
    }
    if (isset($_SESSION['questions'][$id])) {
        ${$_SESSION['questions'][$id]} = 'checked';
    }
    if ($id > $count) {
        header("Location: http://" . $_SERVER['HTTP_HOST'] . "/user/final.php");
    }
} else {
    $id = 1;
    if (!isset($_SESSION['checkout'])) {
        $_SESSION['checkout'] = (time() + 1810) * 1000;
    }
}