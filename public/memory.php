<?php

$input_group = ["input-group mt-2"=>[
    "input-group-prepend"=>[
        "input-group-text"=>
        [["input","type"=>"radio","name"=>"answer","value"=>"answer_$i", $answer_1 ?? '']]
    ],
    ["input","type"=>"text","name"=>"answer_$i", "class"=>"form_control","autocomplete"=>"off", "value"=>"{$test["answer_$i"]}" ?? '']
]];

$form = ["form", "method"=>"post", "action"=>"input.php", $input_group];

