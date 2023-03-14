<div class="row mt-3">
    <nav aria-label="Page navigation example">
        <?php if (@$test['id'] > 1) : ?>
            <div class="col-1"><a class="btn btn-primary" href="<?php echo $_SERVER['SCRIPT_NAME'] . '?id=' . -$test['id'] ?>" role="button"> <span class="material-icons">arrow_back_ios</span></a></div>
        <?php endif ?>
        <div class="col-2"><?php echo ($test['id'] ?? ($count + 1)) . "/" . $count ?></div>
        <?php if (@$test['id'] < $count) : ?>
            <div class="col-1"><a class="btn btn-primary" href="<?php echo $_SERVER['SCRIPT_NAME'] . '?id=' . @$test['id'] ?>" role="button"> <span class="material-icons">arrow_forward_ios</span></a></div>
        <?php endif ?>
    </nav>
</div>


<button type="submit" name="id" value="<?php echo $id ?>">Forward</button>
<button type="submit" name="id" value="<?php echo --$id ?>">Back</button>
