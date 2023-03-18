<?php
function button($id=1, $title=1){
    return '<button type="submit" class="col-2 btn btn-info" name="id" value='.$id.'>'. $title. '</button>';
}

function buttonOrBlock($proviso, $id, $title){
echo $proviso ? button($id, $title) : '<div class="col-2 border border-dark"></div>';
}

