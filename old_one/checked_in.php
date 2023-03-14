<?php
require('mysql.php');

$query = "SELECT id, answer FROM tests";
echo $query;
$stmt = $db->prepare($query);
$stmt->execute();
echo "<br>";

while ($answer = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $arr[$answer['id']] = $answer['answer'];
}
var_dump($arr);

/* do {
    $rowset = $stmt->fetchAll(PDO::FETCH_NUM);
    if ($rowset) {
        printResultSet($rowset, $i);
    }
    $i++;
} while ($stmt->nextRowset());
 */