<?php
// if(isset($_GET['new'])){

// }
// require_once('../session/count.php');
// require_once('id.php');

// (!$_GET['logout']) ?? (require('../auth/logout.php'));

if($_GET['logout'] ?? false){
    require('../auth/logout.php');
}

if (isset($test['answer'])) {
    ${$test['answer']} = 'checked';
}
 
require('../html/admin/question_form.php');







// require('../html/textarea.php');
// require('../html/input_group.php');
// require('../html/save.php');
// require('../html/delete.php');
// require('../html/admin_arrow.php');

// require('../html/add_question.php');
// require('../html/logout.php');



