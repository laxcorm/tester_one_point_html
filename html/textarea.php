<div class="container">
    <form method="post" action="<?php echo '../db/input.php'; ?> ">
        <div class="row mt-3">
            <div class="col-3"></div>
            <div class="col-6">
                <!-- <form> -->
               

                    <textarea class="form-control" name="questions" row mt-3s="3">
                                <?php echo $test['questions'] ?? '' ?>
                        </textarea>
                
            </div>
        </div>