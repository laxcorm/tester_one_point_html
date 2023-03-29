<?php
session_start();
require_once('common/title.php');
require_once('db/mysql.php');
require_once('session/count.php');
require_once('common/id.php');
require_once('db/select.php');
?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?php echo $title ?></title>
</head>
<div class="container">
    <div class="row mt-3">
        <?php
        if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger row" role="alert">
                <?php echo $_SESSION['error']; ?>
            </div>
        <?php
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['admin'])) {
            require_once('admin/admin.php');
        } elseif (isset($_SESSION['questions'])) {
            require_once('user/next.php');
            require_once('user/output.php');
        } elseif (isset($_SESSION['result'])) {
            require_once('user/result.php');
        } else {
            require_once('common/intro.php');
        }
        ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>