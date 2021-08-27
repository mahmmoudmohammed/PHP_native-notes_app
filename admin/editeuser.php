<?php

include '../include/nav.php';
include '../include/connection.php';
//login for admin only
if ($_SESSION['username'] && $_SESSION['userid'] && $_SESSION['role'] == 1) {
    $idd = $_SESSION['userid'];
    $user_id = $_GET['idd'];
    $q = $conn->prepare("SELECT * FROM users WHERE user_id=$user_id");
    $q->execute();
    $row = $q->fetch();
    ?>
    <h3 style="text-align: center;"> التعديل فى المستخدم :<?php echo $row['user_name']; ?></h3>
    <form action="../admin/EditUser.php" method="post" class=".form-control">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" value="<?php echo $row['user_name']; ?>"
                   name="username" required>
        </div>


        <div class="form-group">
            <label for="name">name:</label>
            <input type="text" class="form-control" id="name" value="<?php echo $row['name']; ?>" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" value="<?php echo $row['email']; ?>" name=email
                   required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" class="form-control" id="password" value="<?php echo $row['password']; ?>" name=password
                   required>
        </div>


        <div class="form-group">
            <label for="city">city:</label>
            <input type="text" class="form-control" id="city" value="<?php echo $row['city']; ?>" name="city" required>
        </div>

        <div class="form-group">
            <label for="role">role:</label>
            <input type="text" class="form-control" id="role" value="<?php echo $row['role']; ?>" name="role" required>
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="gender" class="form-control">

                <option>ذكر</option>
                <option>انثى</option>
            </select>
        </div>

        <input type="text" name="idd" value="<?php echo $row['user_id']; ?>" hidden>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>

    <?php
    include '../include/footer.php';
} else
    header("Location:../index.php");
?>