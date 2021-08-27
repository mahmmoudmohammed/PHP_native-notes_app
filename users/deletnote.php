<?php
    include '../include/connection.php';
    $note_id = $_GET['idd'];
    $q = "DELETE FROM notess WHERE note_id=$note_id";
    $conn->exec($q);
    header("Location:../show.php");
?>