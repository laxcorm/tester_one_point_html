<?php
 if (isset($_GET['id'])) {
       $id =  ($_GET['id'] > $count) ? $_GET['id'] : (abs($_GET['id'] + 1));//почему сработает abs
    }
   //   
    else{
       $id = 1;
    } 