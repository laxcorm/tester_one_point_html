<?php
// $orig = [0=>'a',1=>'b',2=>'r',3=>'s',4=>'e'];
// $clon = [1=>'c',2=>'m',3=>'r',4=>'d',5=>'e'];
$bench = ['c','m','r','d','e'];
$clon =  ['v','x','r','w','e'];


function compare($a, $b)
{
    if ($a == $b) {
        return  1;
    }
    //  else {
    //     return 0;
    // }
}

$correct = array_udiff($bench, $clon,'compare');

var_dump($correct);

