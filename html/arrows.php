<div class="row mt-3">
    <div class="col-6"><button type="submit" name="id" value="<?php echo  $id ?>">
            <?php echo ($id != $count) ? "Forward" : "Summ up" ?>
        </button></div>

    <?php if ($id != 1) : ?>
        <div class="col-6"><button type="submit" name="id" value="<?php echo  -$id  ?>">
                Back
            </button></div>
    <?php endif ?>
</div>