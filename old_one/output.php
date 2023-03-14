<?php
session_start();
require('mysql.php');
require('count.php');
require('answers.php');
//require('step.php');
require('select.php');
if (empty($test)) {
    echo "No data to output";
    exit;
}
?>

<!doctype html>
<html lang="en" class="h-100">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Test</title>
</head>

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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>