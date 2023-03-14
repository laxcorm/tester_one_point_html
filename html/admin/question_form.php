<div class="col"><?php echo "<b>Number of questions - $count</b>" ?></div>
<div class="col-6 mt-3">
    <form method="post" action="input.php">

        <div class="mb-4">
            <textarea class="form-control" name="questions" row mt-3s="3"><?php echo $test['questions'] ?? '' ?></textarea>
        </div>

<?php
for($i = 1; $i<4; ++$i){
echo   '<div class="input-group mt-2">
<div class="input-group-text"><input type="radio" class="form-check-input mt-0" name="answer" value="answer_'.$i.'" '. (${'answer_' . $i} ?? "") . '>
</div>
<input type="text" autocomplete="off" name="answer_'.$i.'" class="form-control" value="' . ($test["answer_$i"] ?? "") . '"></div>';
}
?>
        <!-- <div class="input-group mt-3">
            <div class="input-group-text">
                <input type="radio" class="form-check-input mt-0" name="answer" value="answer_1" <?php //echo $answer_1 ?? ''; ?>>
            </div>
            <input type="text" autocomplete="off" name="answer_1" class="form-control" value="<?php //echo $test['answer_1'] ?? ''; ?>">
        </div>


        <div class="input-group mt-2">
            <div class="input-group-text">
                <input type="radio" class="form-check-input mt-0" name="answer" value="answer_2" <?php //echo $answer_2 ?? ''; ?>>
            </div>
            <input type="text" autocomplete="off" name="answer_2" class="form-control" value="<?php //echo $test['answer_2'] ?? ''; ?>">
        </div>


        <div class="input-group mt-2">
            <div class="input-group-text">
                <input type="radio" class="form-check-input mt-0" name="answer" value="answer_3" <?php //echo $answer_3 ?? ''; ?>>
            </div>
            <input type="text" autocomplete="off" name="answer_3" class="form-control" value="<?php //echo $test['answer_3'] ?? ''; ?>">
        </div> -->

        <div class="row mt-3">
            <div class="col-1"></div>
            <?php if ($id <= $count) : ?>
                <a href="/?id=<?php echo $count + 1; ?>" class="btn btn-primary col-2" role="button">+</a>
            <?php else : ?>
                <div class="col-2"></div>
            <?php endif ?>

            <div class="col-2"></div>
            <button class="btn btn-success col-2" type="submit" name='id' value="<?php echo $id  /*select - выводить id*/
                                                                                    ?>">Save</button>
            <div class="col-2"></div>
            <?php if ($id <= $count) : ?>
                <a href="delete.php?id=<?php echo $id ?>" class="btn btn-danger col-2" role="button">Delete</a>
            <?php endif ?>
            <div class="col-1"></div>
        </div>
    </form>

    <form action="/" class="row mt-3">
        <div class="col-5"></div>
        <?php if ($id > 1) : ?>
            <button class="col-2 btn btn-info" name="id" value=<?php echo  -$id; ?>><?php echo $page = $id - 1; ?></button>
        <?php else : ?>
            <div class="col-2"></div>
        <?php endif; ?>
        <div class="col-2 text-info text-center align-bottom"><?php echo $id; ?></div>
        <?php if ($id < $count) : ?>
            <button class="col-2 btn btn-info" name="id" value=<?php echo  $id; ?>><?php echo $page = $id + 1; ?></button>
        <?php else : ?>
            <div class="col-2"></div>
        <?php endif; ?>
    </form>

    <div class="row mt-3">
        <div class="col-9"></div>
        <a href="logout.php" class="col-2 btn btn-secondary" role="button">Logout</a>
        <div class="col"></div>
    </div>
</div>
<div class="col"></div>