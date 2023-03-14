<?php
// session_start();
// require('step.php');
// require('select.php');
// require('count.php');
//require('input.php');
// $_SESSION['answer'] = $test['answer'];
//${$test['answer']} = 'checked';

// if ($_SESSION['questions']) {
//     require_once('checked_in.php');
// }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Input</title>
</head>

<body>

    <div class="container">
        <div class="row mt-3">
            <div class="offset-4"></div>
            <div class="col-1"><a class="btn btn-primary" href="<?= $_SERVER['SCRIPT_NAME'].'?id='.-$id ?>" role="button"> <span class="material-icons">arrow_back_ios</span></a></div>
            <div class="col-2"><?= ($test['id'] ?? 0)."/".$count ?></div>
            <div class="col-1"><a class="btn btn-primary" href="<?= $_SERVER['SCRIPT_NAME'].'?id='.$id ?>" role="button"> <span class="material-icons">arrow_forward_ios</span></a></div>
        </div>



        <form method="post" action="<?= $_SERVER['SCRIPT_NAME']; ?>">
            <div class="row mt-3">
                <div class="col">
                    <!-- <form> -->
                    <div class="form-group">
                        
                        <textarea class="form-control" name="question" row mt-3s="3">
                                <?php echo $_SESSION['question'] = $test['questions']; ?>
                        </textarea>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
            <div class="row mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="answ" value="first" aria-label="Radio button for following text input" <?php echo $first ?? ''; ?>>
                        </div>
                    </div>
                    <input type="text" autocomplete="off" name="first" class="form-control" aria-label="Text input with radio button" value="<?= $test['first']; ?>">
                </div>
            </div>
            <div class=" row mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="answ" value="second" aria-label="Radio button for following text input" <?php echo $second ?? ''; ?>>
                        </div>
                    </div>
                    <input type="text" autocomplete="off" name="second" class="form-control" aria-label="Text input with radio button" value="<?= $test['second']; ?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="answ" value="third" aria-label="Radio button for following text input" <?php echo $third ?? ''; ?>>
                        </div>
                    </div>
                    <input type="text" autocomplete="off" name="third" class="form-control" aria-label="Text input with radio button" value="<?= $test['third']; ?>">
                </div>
            </div>
            <div class="row mt-3">
                <?php if (!$test['id']) : ?>
                    <div class="col-3"><button class="btn btn-outline-info" type="submit" name="test" value="<?= $id ?>">Save</button></div>
                    <div class=" col-3"> <button class="btn btn-outline-info" type="submit" name="test" value="<?= $id ?>"> <span class="material-icons">arrow_back_ios</span></button></div>

                <?php else : ?>
                    <div class="col-3"><button class="btn btn-outline-info" type="submit" name="test" value="<?= $id ?>">+</button></div>
                    <div class="col-3"><button class="btn btn-outline-info" type="submit" name="test" value="<?= $id ?>">Delete</button></div>
                    <div class="col-3"><button class="btn btn-outline-info" type="submit" name="test" value="<?= $id ?>">Update</button></div>

                <?php endif ?>
                <!-- <div class="col"><input class="btn btn-primary" type="submit" value="Submit"></div>
                <span class="material-icons">
                    arrow_back
                </span>
                <span class="material-icons">
                    arrow_forward
                </span> -->
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>