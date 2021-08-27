<?php

include '../include/nav.php';
include '../include/connection.php';
// session_start();
if ($_SESSION['username'] && $_SESSION['userid'] && $_SESSION['role'] == 0) {
    $idd = $_SESSION['userid'];
    $note_id = $_GET['idd'];
    $q = $conn->prepare("SELECT * FROM notess WHERE note_id=$note_id");
    $q->execute();
    $row = $q->fetch();
    ?>
    <h3 style="text-align: center;"> التعديل فى المستخدم :<?php echo $row['note_name']; ?></h3>
    <form action="../users/EditNote.php" method="post" class=".form-control">
        <div class="form-group">
            <label for="note_name">Notename:</label>
            <input type="text" class="form-control" id="note_name" value="<?php echo $row['note_name']; ?>"
                   name="note_name" required>
        </div>

        <div class="form-group">
            <label for="note_body">note body:</label>
            <input type="text" class="form-control" id="note_body" value="<?php echo $row['note_body']; ?>"
                   name="note_body" required>
        </div>
        <div class="form-group">
            <label for="note_status">note status:</label>
            <select name="note_status" class="form-control">

                <option>عاديه</option>
                <option>غير عاديه</option>
            </select>
        </div>
        <!--  <div class="form-group">
    <label for="user_id">user id:</label>

   <select name ="user_id" class="form-control">
        <?php foreach ($colom as $element) {
            echo '<option>$element</option>';
        } ?>
         
        </select>
        </div>
 -->

        <input type="text" name="idd" value="<?php echo $row['note_id']; ?>" hidden>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>

    <?php
    include '../include/footer.php';
} else
    header("Location:../index.php");
?>