<?php
session_start();
$_SESSION['questions'] = [];
    $_SESSION['checkout'] = (time() + 30) * 1000;
header("Location: http://" . $_SERVER['HTTP_HOST']);