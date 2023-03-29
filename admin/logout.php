<?php
session_start();
require_once('lock_guest.php');
require_once('../session/destroy.php');
header("Location: http://" . $_SERVER['HTTP_HOST']);