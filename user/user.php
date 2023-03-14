<?php
// require('../session/session_start.php');
require('../db/mysql.php');
require('../session/count.php');
require('../session/answers.php');
require('../db/select.php');
if (empty($test)) {
    echo "No data to output";
    exit;
}
?>
<div class="col"></div>
            <div class="col-6 pl-4 pr-4 pt-2 pb-2 mt-5 border rounded">
                <!-- <legend class="text-center">Please choose answer</legend> -->
                <div class="align-items-center pl-2">One game</div>
                    <!-- <div class="col align-self-center border border-info"> --><?php echo $test['questions']; ?><!-- </div> -->
                <!-- </div> -->
                <form action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" method="get">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answ" id="first" value="answer_1" <?php echo $answer_1 ?? ''; ?>>
                        <label class=" form-check-label" for="first">
                            <?php echo $test['answer_1']; ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answ" id="second" value="answer_2" <?php echo $answer_2  ?? ''; ?>>
                        <label class="form-check-label" for="second">
                            <?php echo $test['answer_2']; ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answ" id="third" value="answer_3" <?php echo $answer_3 ?? ''; ?>>
                        <label class="form-check-label" for="third">
                            <?php echo $test['answer_3']; ?>
                        </label>
                    </div>
                    </form>
</div>
<div class="col"></div>
