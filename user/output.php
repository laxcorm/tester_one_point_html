<div class="col-3"></div>
<div class="col-6 border border-success">
    <div class="row mt-5">
        <div class="col-8"></div>
        <div class="col-2">Time left:</div>
        <div class="col-2" id="timer"></div>
        <script type="text/javascript">
            let checkout = <?php echo $_SESSION['checkout']; ?>;
            let current = <?php echo (time() * 1000); ?>;
            let left = checkout - current;
            let timeObj = new Date();

            function timer(left) {

                if (typeof(timer.count) == 'undefined') {
                    timer.count = left;
                }
                if (timer.count <= 0) {
                    location.replace('user/final.php');
                    return false;
                }
                timer.count -= 1000;
                timeObj.setTime(timer.count);
                document.getElementById('timer').innerHTML = timeObj.toLocaleString([], {
                    minute: '2-digit',
                    second: '2-digit'
                });
            }
            setInterval(timer, 1000, left);
        </script>
    </div>
    <div class="row mt-5">
        <?php if ($noanswer ?? false) : ?>
            <div class="alert alert-danger" role="alert">
                Будь ласка, оберіть відповідь
            </div>
        <?php endif ?>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><?php echo $test['questions']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <form action="/" method="get">
                <div class="list-group mt-5">
                    <?php
                    for ($i = 1; $i < 4; ++$i) {
                        echo '<label class="list-group-item"><input class="form-check-input me-1" type="radio" value="answer_' . $i . '" name="answer" ' . (${'answer_' . $i} ?? '') . '>' .   $test["answer_$i"] . '</label>';
                    } ?>

                </div>
                <div class="row mt-5">
                    <?php require_once('public/id_walk.php'); ?>
                    <!-- <div class="col-2"></div> -->
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-3"></div>