<?php
$back = $id - 1;
$forward = $id + 1;
?>

<form>
    <?php if ($id != 1) : ?>
        <button class="btn-primary" formaction="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $back; ?>">Back</button>
    <?php endif; ?>
    <div class="col-1 border border-dark"><?php echo  $_SERVER['PHP_SELF'] . '?id=' . $forward; ?></div>

    <?php if ($id != $count) : ?>
        <button class="btn-primary" formaction="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $forward; ?>">Forward</button>
    <?php endif; ?>
</form>