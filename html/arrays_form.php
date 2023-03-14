<?php

require('tags_drawer.php');

$input_group = '';

for ($i = 1; $i < 4; $i++) {
    $input = ["input-group mt-2" => [
        "input-group-prepend" => [
            "input-group-text" =>
            [["input", "type" => "radio", "name" => "answer", "value" => "answer_$i", $answer_1 ?? '']]
        ],
        ["input", "type" => "text", "name" => "answer_$i", "class" => "form_control", "autocomplete" => "off", "value" => "{$test["answer_$i"]}" ?? '']
    ]];
    $input_group .= $input;
}

$textarea = ["form-group"=>[["textarea", "class"=>"form-control",
"name" => "questions", "row", "mt-3s"=>"3", $test['questions'] ?? '']]];

$form =  [["form", "method" => "post", "action" => "input.php", [[$textarea], $input_group]]];



$container = ["container" => ["row mt-3"=>["col-3", "col-6"=>$form]]];

echo tags_drawer($form);
