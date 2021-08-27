<?php
include '../include/nav.php';
if ($_SESSION['username'] && $_SESSION['userid']) {
//session_start();
//$user_id=$_GET['idd'];
    $user_id = $_SESSION['userid'];
    ?>
    <!--  strt form to add new note-->
    <form action="addNot.php" method="post" class=".form-control">

        <div class="form-group">
            <label for="notename"> اسم الملاحظه </label>
            <input type="text" class="form-control" id="notename" name="notename" required>
        </div>

        <div class="form-group">
            <label for="notedate"> تاريخ الملاحظه </label>
            <input type="date" class="form-control" id="notedate" name="notedate" required>
        </div>

        <div class="form-group">
            <label for="notetime"> وقت الملاحظه </label>
            <input type="time" class="form-control" id="notetime" name="notetime" required>
        </div>

        <div class="form-group">
            <label for="status"> نوع الملاحظه </label>
            <select name="status" class="form-control">

                <option>عاديه</option>
                <option> هامه</option>
                <option> غير عاديه</option>
            </select>
        </div>

        <div class="form-group">
            <label> المحتوى </label><br>
            <textarea id="notebody" name="notebody" rows="10" cols="30"></textarea>
        </div>
        <button type="submit" class="btn btn-default">إضافه</button>
    </form>
    <!--  end of form to add new note-->

    <?php
    include '../include/footer.php';
} else
    header("Location:../index.php");
?>
