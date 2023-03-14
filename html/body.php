<body class="h-100">
    <div class="container h-25">
        <?php if ($noanswer ?? false) : ?>
            <div class="alert alert-danger" role="alert">
                Будь ласка, оберіть відповідь
            </div>
        <?php endif ?>

        <div class="row mt-5">
            <div class="col-3"></div>
            <div class="col-3 text-info"><b>Left time</b>
                <span id='timer'></span>
            </div>
            <div class="col-6 text-info"><?php echo "<b>" . $id . " question from " . $count . "</b>"  ?></div>
            <script type="text/javascript">
                let checkout = <?php echo $_SESSION['checkout']; ?>;
                let current = <?php echo (time() * 1000); ?>;
                let left = checkout - current;
                let timeObj = new Date();

                function timer(left) {
                    if (typeof(timer.count) == 'undefined') {
                        timer.count = left;
                    }
                    timer.count -= 1000;
                    if (timer.count <= 0) {
                        location.replace('/final.php');
                    }
                    timeObj.setTime(timer.count);
                    document.getElementById('timer').innerHTML = timeObj.toLocaleString([], {
                        minute: '2-digit',
                        second: '2-digit'
                    });
                }

                setInterval(timer, 1000, left);
            </script>
        </div>
        <div class="row mt-5 h-25">
            <div class="col-3"></div>
            <div class="col-6  h-100 border border-info rounded">

                <div class="row h-100 align-items-center pl-2">
                    <!-- <div class="col align-self-center border border-info"> --><?php echo $test['questions']; ?><!-- </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 pl-4 pr-4 pt-2 pb-2 mt-5 border rounded border-dark">
                <!-- <legend class="text-center">Please choose answer</legend> -->
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
                    <?php require('arrows.php'); ?>
                </form>
            </div>
        </div>

    </div>