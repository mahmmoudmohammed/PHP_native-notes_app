<?php

include 'include/connection.php';
session_start();

// assign username and pwd
$username = $_POST['username'];
$password = $_POST['password'];

//query on DB
$sql = $conn->prepare("SELECT*FROM users WHERE user_name = ? AND password =?");
$sql->execute(array($username, $password));
$row = $sql->fetch();
$count = $sql->rowCount();


if ($count > 0) {
    $_SESSION['userid'] = $row['user_id'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['username'] = $row['user_name'];

//check permations
    if ($_SESSION['role'] == 1) {
        header("Location:profile.php");
    } else {
        header("Location:show.php");
    }
} else {
    header("Location:index.php");
    echo "window.alert('no one cane help you : -> help your self');";
    //imap_alerts("mn");
}


?>
