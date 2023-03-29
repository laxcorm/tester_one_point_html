<div class="col-3"></div>
<div class="col-6 border border-success">
    <div class="row mt-5">
        <div class="col-8"></div>
        <div class="col-2">Time left:</div>
        <div class="col-2" id="timer"></div>
        <?php require_once('counter.php') ?>
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
                    <?php require_once('common/id_walk.php'); ?>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-3"></div>