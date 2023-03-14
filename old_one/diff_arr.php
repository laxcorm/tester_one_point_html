<?php

$arr1 = array(3, 1, 3, 1, 1, 2, 1, 3);
$arr2 = array(3, 2, 3, 2, 1, 2, 2, 3);


function cmp($a, $b)
{
    if ($a == $b) {
        return 1;
    } else {
        return 0;
    }
}

$diff = array_udiff_assoc($arr1, $arr2, 'cmp');

foreach ($diff as $key => $value) {
    echo "$key => " . $value . "<br>";
}