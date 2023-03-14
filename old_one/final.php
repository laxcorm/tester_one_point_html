<?php
session_start();
require('mysql.php');
require('count.php');
// $query = 'SELECT answer from '

$query = 'SELECT answer FROM tests';
$stmt = $db->prepare($query);
$stmt->execute();
$real_answers = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "Real answers";
var_dump($real_answers);
$user_answers = $_SESSION['questions'];
echo "User answers";
var_dump($user_answers);

function cmp($a, $b)
{
    if ($a == $b) {
        return 1;
    } else {
        return 0;
    }
}

$correct_answers = array_udiff_assoc($user_answers, $real_answers, 'cmp');
echo "Quantity of correct answers";
var_dump($correct_answers);
$correct_number = count($correct_answers);
//закрыть сессию
?>

<div>
    <?php echo "Правильних відповідей $correct_number з $count"; ?>
</div>