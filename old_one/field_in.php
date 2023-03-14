<?php
if($_SERVER['REQUEST_METHOD'] = 'POST'){
    require_once('input.php');
}
?>
<form method="post" action="<?= $_SERVER['SCRIPT_NAME']; ?>">
            <div class="row mt-3">
                <div class="col">
                    <!-- <form> -->
                    <div class="form-group">
                                <textarea class="form-control" name="question" row mt-3s="3">
                                <?php echo /* $_SESSION['question'] =  */$test['questions']; ?>
                        </textarea>
                    </div>
                    <!-- </form> -->
                </div>
            </div>

<?php

for ($i = 1; $i != 3; $i++) {
    echo '<div class="row mt-3">
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <input type="radio" name="answ" value="answer_$i"'. ${'answer_'.$i}. '>
            </div>
        </div>
        <input type="text" autocomplete="off" name="answer_$i" class="form-control" value = "'.$test['answer_'.$i].'">
    </div>
</div>';
}
?>
<div class="row mt-3"><div class="col-3"><button type="submit">Save</button></div><div class="col-3">Delete</div></div>
</form>