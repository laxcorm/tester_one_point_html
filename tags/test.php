<?php
require("tags_drawer.php");
// $tags = [["row mt-5"=>["col-3"=>[]],["col-3 text-info"=>[
    // ["b", ["Left info"]],["span","id"=>"timer",[]]
// ]],["col-6 text-info"=>[["b",["1st question from count"]]]]]];


$timer = ["row mt-5"=>["col-3"=>[], "col-3 text-info"=>[["b", [["Time left"]]], ["span", "id"=>"timer", []]],
"col-6 text-info"=>[["b",[["1st question from count"]]]]// данные ввести id and count
]];



echo  tags_drawer($timer);

$test = ["row mt-5 h-25"=>["col-3"=>[], "col-6  h-100 border border-info rounded"=>["row h-100 align-items-center pl-2"=>[[$test['questions']]]]]];