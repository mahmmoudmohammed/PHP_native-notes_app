<?php

    include '../include/connection.php';

    $note_name = $_POST['note_name'];
    $note_status = $_POST['note_status'];
    $note_body = $_POST['note_body'];
    $idd = $_POST['idd'];
    echo "id is " . $idd;
    //______________________

    $q = "UPDATE notess SET note_name='$note_name',note_body='$note_body',note_status='$note_status'WHERE note_id =$idd;";


    //execution

    $conn->exec($q);
    echo "done";
    header("Location:../show.php");


?>