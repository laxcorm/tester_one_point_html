<?php
require_once('lock_guest.php');
?>
<div class="col"><?php echo "<b>Number of questions - $count</b>" ?></div>
<div class="col-6 mt-3">
    <form method="post" action="admin/input.php">

        <div class="mb-4">
            <textarea class="form-control" name="questions" row mt-3s="3"><?php echo $test['questions'] ?? '' ?></textarea>
        </div>

        <?php
        for ($i = 1; $i < 4; ++$i) {
            echo   '<div class="input-group mt-2">
<div class="input-group-text"><input type="radio" class="form-check-input mt-0" name="answer" value="answer_' . $i . '" ' . (${'answer_' . $i} ?? "") . '>
</div>
<input type="text" autocomplete="off" name="answer_' . $i . '" class="form-control" value="' . ($test["answer_$i"] ?? "") . '"></div>';
        }
        ?>

        <div class="row mt-3">
            <div class="col-1"></div>
            <?php if ($id <= $count) : ?>
                <a href="/?id=<?php echo $count + 1; ?>" class="btn btn-primary col-2" role="button">+</a>
            <?php else : ?>
                <div class="col-2"></div>
            <?php endif ?>

            <div class="col-2"></div>
            <button class="btn btn-success col-2" type="submit" name='id' value="<?php echo $id ?>">Save</button>
            <div class="col-2"></div>
            
            <?php if ($id <= $count) : ?>
                <a href="admin/delete.php?id=<?php echo $id ?>" class="btn btn-danger col-2" role="button">Delete</a>
            <?php endif ?>
            <div class="col-1"></div>
        </div>
    </form>

    <form action="/" class="row mt-3" method="post">
        <?php require_once('common/id_walk.php'); ?>
    </form>
    <div class="row mt-3">
        <div class="col-9"></div>
        <a href="admin/logout.php" class="col-2 btn btn-secondary" role="button">Logout</a>
        <div class="col"></div>
    </div>
</div>
<div class="col"></div>