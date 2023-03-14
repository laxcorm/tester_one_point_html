<?php

require('../html/tags_drawer.php');


$test["answer_1"] = "Its number one";
$test["answer_2"] = "Its second number";
$test["answer_3"] = "Its third case";


$test['questions'] = "Just read it";

$answer_2 = "checked";


// $input = ["input-group mt-2"=>[
//     "input-group-prepend"=>[
//         "input-group-text"=>
//         [["input","type"=>"radio","name"=>"answer","value"=>"answer_".$i, ${"answer_".$i} ?? '']]
//     ],
//     ["input","type"=>"text","name"=>"answer_".$i, "class"=>"form_control","autocomplete"=>"off", "value"=>"{$test["answer_".$i]}" ?? '']
// ]];




// $form = ['container'=>[["form", "method"=>"post", "action"=>"input.php", $input_group]]];

// echo tags_drawer($form);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>layout</title>
</head>

<?php


/* $input_group = '';

for ($i = 1; $i < 4; $i++) {
    $input = ["input-group mt-2" => [
        "input-group-prepend" => [
            "input-group-text" =>
            [["input", "type" => "radio", "name" => "answer", "value" => "answer_$i", $answer_1 ?? '']]
        ],
        ["input", "type" => "text", "name" => "answer_$i", "class" => "form_control", "autocomplete" => "off", "value" => "{$test["answer_$i"]}" ?? '']
    ]];

    $input_group .= tags_drawer($input);
}

$textarea = ["form-group" => [[
    "textarea", "class" => "form-control",
    "name" => "questions", "row", "mt-3s" => "3", $test['questions'] ?? ''
]]];

$form =  ["form", "method" => "post", "action" => "input.php",  [$textarea,$input_group]];



$container = ["container" => ["row mt-3" => ["col-3"=>[], "col-6" => [$form]]]];

echo tags_drawer($container); */



$input_group ='';

for ($i = 1; $i < 4; $i++) {
    $input = ["input-group mt-2" => [
        "input-group-prepend" => ["input-group-text" =>[["input", "type" => "radio", "name" => "answer", "value" => "answer_$i", ${"answer_$i"} ?? '' ]]
        ],["input", "type" => "text", "name" => "answer_$i", "class" => "form_control", "autocomplete" => "off", "value" => "{$test["answer_$i"]}" ?? '']]];

    $input_group .= tags_drawer($input);
}

echo $input_group;

$textarea = ["form-group" => [[
    "textarea", "class" => "form-control",
    "name" => "questions", "row", "mt-3s" => "3", [[$test['questions']]]
]]];

$form =  ["form", "method" => "post", "action" => "input.php",  [$textarea, [$input_group]]];

$container = ["container"=>["row mt-2"=>["col-3 border border-info"=>[],"col-6 border border-info"=>[$form]]]];

// echo tags_drawer($container);

?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>