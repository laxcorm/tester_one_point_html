<?php
/* if (($_POST['login'] ?? false) || ($_POST['password'] ?? false)) {
    require('auth.php');
}
require('../user/user.php');
require('../admin/admin.php');
if($_SESSION['authorized'] === true){  
}
require('../tags/test.php'); */
/*
if(@$_GET['del']) echo $_GET['del']."deleted";
if(($name = trim($_SERVER['REQUEST_URI'], "/")))
{
 if(preg_match('{delete/id+}', $name)){
    // echo "eyeys";
    require("../admin/delete.php");
 }

$file = ($_SESSION['admin']) ? "../admin/$name.php" : "../user/$name.php";

(!file_exists($file)) ?? require($file);
}
*/
?><?php
    // header('Cache-Control: no-store');
    // header('Cache-Control: no-cache, no-store, must-revalidate');
    session_start();
    require_once('../db/mysql.php');
    require_once('../session/count.php');
    require_once('../user/id.php');
    require_once('../db/select.php');
    ?>
<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Layout</title>
</head>
<div class="container">
    <div class="row mt-3">
        <?php
        // $_SESSION['admin'] = true;
        if (isset($_SESSION['error'])) { ?>
          <div class="alert alert-danger row" role="alert">
          <?php  echo $_SESSION['error']; ?>
          </div> 
        <?php 
        unset($_SESSION['error']);
        } 
        if (isset($_SESSION['admin'])) {
            require('../admin/admin.php');
        } elseif (isset($_SESSION['questions'])) {
            //require('../user/user.php');
            require('../user/next.php');
            require('../html/output.php');
        } elseif (isset($_SESSION['result'])) {
            require('result.php');
        } else {
            require('../html/intro.php');
        }
        ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>