<?php
$back = $id - 1;
$forward = $id + 1;
?>

<div class="col-1 border border-dark">
    <?php if ($id != 1) : 
    ?>
        <a class="btn btn-primary" href="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $back 
                                            ?>" role="button">Back</a>
    <?php endif; 
    ?>
</div>
<div class="col-1 border border-dark">Counter</div>
<div class="col-1 border border-dark">
    <?php if ($id != $count) : 
    ?>
        <a class="btn btn-primary" href="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $forward 
                                            ?>" role="button">Forward</a>
    <?php endif; 
    ?>
</div>

