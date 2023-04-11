<?php
session_start();
require_once('lock_guest.php');
require_once(dirname(__DIR__) . '/session/destroy.php');
header("Location: http://" . $_SERVER['HTTP_HOST']);