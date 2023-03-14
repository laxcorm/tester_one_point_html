<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>layout</title>
</head>

<?php
require('../html/tags_drawer.php');

$input = ["input-group mt-2" => [
    "input-group-prepend" => [
        "input-group-text" => [["input", "type" => "radio", "name" => "answer", "value" => "answer",  '']]
    ], ["input", "type" => "text", "name" => "answer_", "class" => "form_control", "autocomplete" => "off", "value" => "Jack"]
]];

$container = ["container" => ["row mt-2" => ["col-3 border border-info" => [], "col-6 border border-info" => ["input-group mt-2" => [
    "input-group-prepend" => [
        "input-group-text" => [["input", "type" => "radio", "name" => "answer", "value" => "answer",  '']]
    ], ["input", "type" => "text", "name" => "answer_", "class" => "form_control", "autocomplete" => "off", "value" => "Jack"]
]]]]];

echo tags_drawer($container);
echo tags_drawer($input);

$ex = ["input-group mt-2" => ["input-group-prepend" => [["input", "type" => "text", "autocomplete" => "off", "name" => "answer_1", "class" => "form-control", "value" => "jess", []]]]];
$inex = ["input-group mt-2" => ["input-group-prepend" => ["input-group-text"=>[["input", "type" => "radio"]]],
["input", "type"=>"text", "class"=>"form-control", "value"=>"inex"]]];
echo tags_drawer($inex);

?>
<div class="input-group mt-2">
    <div class="input-group-prepend">
<div class="input-group-text"></div>
        </div>
        <input type="text" autocomplete="off" name="answer_1" class="form-control" value="just read">
</div>

<div class="input-group">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <input type="radio" aria-label="Radio button for following text input">
        </div>
    </div>
    <input type="text" class="form-control" aria-label="Text input with radio button">
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>