<?php
if (!isset($_SESSION['count'])) {
    $query = "SELECT COUNT(*) FROM tests";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $_SESSION['count'] = (int)$stmt->fetch(PDO::FETCH_ASSOC)['COUNT(*)'];
} 
    $count = $_SESSION['count'];