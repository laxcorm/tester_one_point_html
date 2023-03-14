<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('mysql.php');
    $stmt = $db->prepare('SELECT * FROM admin');
    $stmt->execute();
    $admin = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($admin['admin'] == $_POST['admin'] && $admin['password'] == $_POST['password']){
        session_start();
        $_SESSION['authorized'] = true;
        header("Location:http://". $_SERVER['HTTP_HOST']."/fillin.php");
      
    }
    else{
        header("Location:http://". $_SERVER['HTTP_HOST']."/index.php");

    }
}



