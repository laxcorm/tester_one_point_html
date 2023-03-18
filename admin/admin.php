<?php

if($_GET['logout'] ?? false){
    require('../auth/logout.php');
}

if (isset($test['answer'])) {
    ${$test['answer']} = 'checked';
}
 
require('../html/admin/question_form.php');




