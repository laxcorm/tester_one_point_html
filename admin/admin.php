<?php

if($_GET['logout'] ?? false){
    require_once('../admin/logout.php');
}

if (isset($test['answer'])) {
    ${$test['answer']} = 'checked';
}
 
require_once('../admin/question_form.php');