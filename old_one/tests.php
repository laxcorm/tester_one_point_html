<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['login']) && isset($_GET['team'])) {
        echo $_GET['login'];
        echo "<br>";
        echo $_GET['team'];
        echo "<br>";
    }
    ?>
    <form method="get" action="<?php echo $_SERVER['SCRIPT_NAME'] ?>">
        <input type="text" name="login">
        <input type="text" name="team">
        <!-- <a href="<?php /* echo $_SERVER['SCRIPT_NAME'] */ ?>">submit</a> -->
    </form>

    <form>
        <button formaction="test4.php">Submit</button>
    </form>
</body>

</html>

