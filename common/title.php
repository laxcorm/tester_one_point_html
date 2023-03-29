<?php
$title = 'start';
if(isset($_SESSION['admin'])){
$title='administration';
}elseif(isset($_SESSION['questions'])){
$title='testing';
}elseif(isset($_SESSION['result'])){
    $title='result';
}