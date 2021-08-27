<?php

//session_start();
include 'include/nav.php';
if ($_SESSION['username'] && $_SESSION['userid'] && $_SESSION['role'] == 1) {

    include 'include/connection.php';


    $idd = $_SESSION['userid'];
    $un = $_SESSION['username'];

    $q = $conn->prepare('SELECT * FROM users');
    $q->execute();
    $rows = $q->fetchAll();
    ?>
    <a href="users/regester.php" class="btn btn-primary btn-block" role="button"> اضافه مستخدم </a>

    <table class="table">
        <thead>
        <th> اسم المستخدم</th><!--username-->
        <th> الايميل</th><!--email-->
        <th> الاسم</th><!--name-->
        <th> النوع</th><!--gender-->
        <th> المدينه</th><!--city-->
        <th> الرول</th><!--role-->
        <th> تعديل</th><!--edite-->
        <th> حذف</th><!--delete-->

        </thead>

        <tbody>
        <?php
        $classes = array('success', 'danger', 'info', 'warning', 'active');
        $num = 0;
        foreach ($rows as $row) {
            echo "<tr class='$classes[$num]'>";
            echo "<td>" . $row['user_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['role'] . "</td>";
            echo "<td>" . "<a href='admin/editeuser.php?idd=$row[user_id]'>تعديل<a>" . "</td>";
            echo "<td>" . "<a href='admin/deletuser.php?idd=$row[user_id]'> حذف </a>" . "</td>";
            echo "</tr>";
            $num++;
            if ($num >= 4) $num = 0;
        }

        ?>


        </tbody>

        <tfoot>
        <th> اسم المستخدم</th><!--username-->
        <th> الايميل</th><!--email-->
        <th> الاسم</th><!--name-->
        <th> الانوع</th><!--gender-->
        <th> المدينه</th><!--city-->
        <th> الرول</th><!--role-->
        <th> تعديل</th><!--edite-->
        <th> حذف</th><!--delete-->

        </tfoot>
    </table>
    <?php
    include 'include/footer.php';
} else
    header("Location:index.php");
?>