<?php
    $dns = "mysql:host=localhost;dbname=notes";
    $username = "root";
    $password = "";

    $sql1 = "SET NAMES 'UTF8'";
    $sql2 = "SET CHARACTER SET UTF8";
    try {
        $conn = new PDO($dns, $username, $password);
        $conn->exec($sql1);
        $conn->exec($sql2);
    } catch (PDOException $e) {
        echo " failed: " . $e->getMessage();
    }
?>