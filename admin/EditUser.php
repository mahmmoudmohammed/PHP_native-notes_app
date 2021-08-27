<?php

    include '../include/connection.php';

    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $idd = $_POST['idd'];
    //connection
    echo "id is " . $idd;

    //______________________

    $q = "UPDATE users SET user_name='$username',name='$name',password='$password',role='$role',email='$email',city='$city',gender='$gender'WHERE user_id =$idd;";

    //execution

    $conn->exec($q);
    echo "done";
    header("Location:../profile.php");


?>