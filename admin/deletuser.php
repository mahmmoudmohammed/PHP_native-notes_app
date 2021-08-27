<?php
    include '../include/connection.php';
    $user_id = $_GET['idd'];
    $q = "DELETE FROM users WHERE user_id=$user_id";
    $conn->exec($q);
    header("Location:../profile.php");
?>