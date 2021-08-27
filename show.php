<?php
include 'include/nav.php';
if ($_SESSION['username'] && $_SESSION['userid']) {
    include 'include/connection.php';

    $idd = $_SESSION['userid'];

    $q = $conn->prepare("SELECT * FROM `notess` WHERE user_id=$idd");
    $q->execute();
    $rows = $q->fetchAll();

    ?>

    <?php echo "<a href='users/formAddNote.php?idd=$_SESSION[userid]' class='btn btn-primary btn-block' role='button'> اضافه  ملاحظه </a>"; ?>
    <table class="table">
        <thead>
        <th> اسم الملاحظه</th>
        <th> تاريخ الملاحظه</th>
        <th> وقت الملاحظه</th>
        <th> نوع الملاحظه</th>
        <th>ملاحظتك</th>
        <th>تعديل</th>
        <th> حذف</th>

        </thead>

        <tbody>
        <?php
        $classes = array('success', 'danger', 'info', 'warning', 'active');
        $num = 0;
        foreach ($rows as $row) {
            echo "<tr class='$classes[$num]'>";
            echo "<td>" . $row['note_name'] . "</td>";
            echo "<td>" . $row['note_date'] . "</td>";
            echo "<td>" . $row['note_time'] . "</td>";
            echo "<td>" . $row['note_status'] . "</td>";
            echo "<td>" . $row['note_body'] . "</td>";
            echo "<td>" . "<a href='users/editenote.php?idd=$row[note_id]'>  تعديل </a>" . "</td>";
            echo "<td>" . "<a href='users/deletnote.php?idd=$row[note_id]'> حذف </a>" . "</td>";
            echo "</tr>";
            $num++;
            if ($num >= 4) $num = 0;
        }

        ?>


        </tbody>

        <tfoot>
        <th> اسم الملاحظه</th>
        <th> تاريخ الملاحظه</th>
        <th> وقت الملاحظه</th>
        <th> نوع الملاحظه</th>
        <th>ملاحظتك</th>
        <th>تعديل</th>
        <th> حذف</th>

        </tfoot>
    </table>
    <?php
    include 'include/footer.php';
} else
    header("Location:index.php");
?>