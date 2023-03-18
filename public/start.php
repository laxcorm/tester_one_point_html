<?php
session_start();
$_SESSION['questions'] = [];
    $_SESSION['checkout'] = (time() + 600) * 1000;
header("Location: http://" . $_SERVER['HTTP_HOST']);