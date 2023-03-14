<?php
// require('../session/session_start.php');
require('../db/mysql.php');
require('../session/count.php');
require('../session/answer_q.php');
if (isset($test['answer'])) {
    ${$test['answer']} = 'checked';
}
require('../html/head.php');
require('../html/ad_body.php');
require('../html/foot.php');