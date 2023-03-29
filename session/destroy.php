<?php
$_SESSION = [];
unset($_COOKIE[session_name()]);
session_destroy();