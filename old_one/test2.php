<?php

    echo $_SERVER['SCRIPT_NAME'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<form action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" method="get">
<input type="radio" name='test' value="justes">
</form>
<a href="<?php echo $_SERVER['SCRIPT_NAME'] ?>">Submit</a>

<?php
/*
require('mysql.php');
$query = "SELECT COUNT(*) FROM tests";
$stmt = $db->prepare($query);
$stmt->execute();
$count = (int)$stmt->fetch(PDO::FETCH_ASSOC)['COUNT(*)'];
