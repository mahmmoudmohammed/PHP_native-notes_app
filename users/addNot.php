<?php
session_start();
if (isset($_SESSION['username'])) {
    include '../include/connection.php';


    $noteName = $_POST['notename'];
    $noteTime = $_POST['notetime'];
    $noteDate = $_POST['notedate'];
    $noteStatus = $_POST['status'];
    $noteBody = $_POST['notebody'];
    //$userId = $_POST['userid'];
    $user_id = $_SESSION['userid'];

    //INSERT INTO `notess` (`note_id`, `note_name`, `note_date`, `note_time`, `note_status`, `user_id`, `note_body`) VALUES (NULL, 'ملاحظه1', '2019-08-06', '15:09:00', 'عاجله', '7', 'عاجله عاجله عاجله عاجله عاجله');
    $q = "INSERT INTO notess (note_name,note_date,note_time,note_status,note_body,user_id)
	VALUES ('$noteName','$noteDate','$noteTime','$noteStatus','$noteBody','$user_id')";
    $conn->exec($q);
    header("Location:../show.php");
} else {
    echo "faild  login ";
    header("Location:../index.php");
}

?>
