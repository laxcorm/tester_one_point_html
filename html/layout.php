<?php
//session_start();
require('../db/mysql.php');
require('../session/count.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>layout</title>
</head>

<body>

    <div class="container">
        <div class="row mt-4">
            <?php
            if (isset($_SESSION['admin'])) {
                require('../admin/admin.php');
            } else {
                require('../user/user.php');
            }
            ?>
        </div>
    </div>
</body>

</html>