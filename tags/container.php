<?php
require('tags_drawer.php');

echo $id;

$textarea = ["form-group" => [["textarea", "class" => "form-control","name" => "questions", "row", "mt-3s" => "3",[[$test['questions'] ?? '']]]]];

$textarea = tags_drawer($textarea);

$input_group = '';

for($i=1;$i<4;$i++)
{
    $input = ["input-group mt-2" => [
        "input-group-prepend" => ["input-group-text" => [["input", "type" => "radio", "name" =>"answer", "value"=>"answer_$i", ${"answer_".$i} ?? '']]],
        ["input", "type" => "text", "class" => "form-control", "autocomplete"=>"off","name"=>"answer_$i","value" => "{$test["answer_$i"]}"]
    ]];
    $input_group .= tags_drawer($input);
}

$form_buttons = ["row mt-2"=>["col-6"=>[],["button", "class"=>"btn btn-primary col-2", "type"=>"submit", "name"=>"id", "value"=>$id,[["Save"]]],
"col-1"=>[],["a", "href"=>"delete.php?id=$id", "class"=>"btn btn-danger col-2", "role"=>"button",[["Delete"]]]]];

$form = ["form", "method"=>"post", "action"=>"input.php",[[$textarea, $input_group], $form_buttons]];

++$id;

$page_button = ["button", "type"=>"button submit", "class"=>"btn btn-primary col-1", "formaction"=>"/?id=$id",[["back"]]];

$page_form=["form", 
"class"=>"row mt-3", [["col-4"=>[], $page_button, "col-2"=>[], $page_button, "col-4"=>[]]]];

$container = ["container"=>["row mt-3"=>["col-3"=>[],"col-6"=>[$form]], $page_form]];
 
 echo tags_drawer($container);
?>

<!-- <form class="row mt-3">
         <div class="col-4"></div>
           <button type="button" class="btn btn-primary col-1" formaction="#">123</button>
           <div class="col-2"></div>
           <button class="btn btn-primary col-1" formaction="#">456</button>
           <div class="col-4"></div>
     </form> -->