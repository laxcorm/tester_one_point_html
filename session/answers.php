<?php

/*  if ($_SERVER['HTTP_REFERER'] == "http://" . $_SERVER['HTTP_HOST']) {
            $id = 1;
         } */

/* if ($_GET['id'] ?? false) {
    $id = $_GET['id'];
    if (isset($_GET['answ'])) {
        $_SESSION['questions'][abs($id)] = $_GET['answ'];
        $id = $id + 1;
        $id = abs($id);
    } elseif ((!isset($_SESSION['questions'][$id])) && !isset($_GET['answ']) && $_GET['id'] > 0) {
        $id = $id - 1;
        $noanswer = true;
    } elseif (isset($_SESSION['questions'][$id])) {
        ${$_SESSION['questions'][$id]} = 'checked';
    }
} else {
    $id = 1;
} */

//вторая версия
/* if ($_GET['id'] ?? false) {
    $id = $_GET['id'];
    if ((!isset($_SESSION['questions'][abs(++$id)])) && !isset($_GET['answ'])) {
        --$id;
        $noanswer = true;
    } else {
        $_SESSION['questions'][abs($id)] = $_GET['answ'];
    }

    if (isset($_SESSION['questions'][abs($id)])) {
        ${$_SESSION['questions'][$id]} = 'checked';
    }
} else {
    $id = 1;
}
 */
//третья версия
if (
    $_GET['id'] ?? false
) {
    $id = $_GET['id'];
    
    if ((count($_SESSION['questions'] ?? [])) < $id + 1 && !isset($_GET['answ'])
    ) {
        $noanswer = true;
    }
    /* elseif (isset($_GET['answ'])) {
        $_SESSION['questions'][abs($id)] = $_GET['answ'];
    } */ else {

        if (isset($_GET['answ'])) {
            $_SESSION['questions'][abs($id)] = $_GET['answ'];
        }
        $id = abs($id + 1);
    }
    if (isset($_SESSION['questions'][$id])) {
        ${$_SESSION['questions'][$id]} = 'checked';
    }
    if ($id > $count) {
        header("Location: http://" . $_SERVER['HTTP_HOST'] . "/final.php");
    }
} else {
    $id = 1;
    if (!isset($_SESSION['checkout'])) {
        $_SESSION['checkout'] = (time() + 1810) * 1000;
    }
}

/* 
first version
if ($_GET['id'] ?? false) {
    if ((!isset($_SESSION['questions'][$id])) && !isset($_GET['answ'])) {
        $id = $id - 1;
        $noanswer = true;
    } else {
        $_SESSION['questions'][$id] = $_GET['answ'];
    }

    if (isset($_SESSION['questions'][$id])) {
        ${$_SESSION['questions'][$id]} = 'checked';
    }
} */


