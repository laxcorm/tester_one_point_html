<?php
function button($id = 1, $title = 1)
{
    if(isset($_SESSION['questions'])) {$title = "Save/to $title";}
    return '<button type="submit" class="col-3 btn btn-info fs-8" name="id" value=' . $id . '>' . $title . '</button>';
}

function buttonOrBlock($proviso, $id, $title)
{
    echo $proviso ? button($id, $title) : '<div class="col-3"></div>';
}

if (isset($_SESSION['admin'])) {
    $proviso = ($id < $count);
    $next = $id + 1;
} elseif (isset($_SESSION['questions'])) {
    $proviso = true;
    $next = ($count != $id) ?  $id + 1 : "summ up";
}
?>
<div class="col-4"></div>
<?php buttonOrBlock($id > 1, -$id, $id - 1); ?>
<div class="col-2 text-info text-center align-bottom">
    <?php echo $id; ?>
</div>
<?php buttonOrBlock($proviso, $id, $next); ?>