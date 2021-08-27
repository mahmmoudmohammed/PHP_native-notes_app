<?php
    include '../include/connection.php';

    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];

    //connection

    $q = "INSERT INTO users (user_name,name,password,email,city,gender)
        VALUES ('$username','$name','$password','$email','$city','$gender')";

    //execution

    $conn->exec($q);
    header("Location:../profile.php");

?>
<script type="text/javascript"> onload = 'window.alert("insertion is done !!!");'</script>

