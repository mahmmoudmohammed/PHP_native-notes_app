<?php
include '../include/nav.php';
?>
<form action="../admin/adduser.php" method="post" class=".form-control">
    <div class="form-group">
        <label for="username">اسم المستخدم: </label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="name">الاسم ثلاثى:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">البريد الالكترونى : </label>
        <input type="email" class="form-control" id="email" name=email required>
    </div>
    <div class="form-group">
        <label for="password">كلمه المرور: </label>
        <input type="text" class="form-control" id="password" name="password" required>
    </div>
    <div class="form-group">
        <label for="city">المدينه: </label>
        <input type="text" class="form-control" id="city" name="city" required>
    </div>
    <div class="form-group">
        <label for="gender">النوع:</label>
        <select name="gender" class="form-control">
            <option>ذكر</option>
            <option>انثى</option>
        </select>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php
include '../include/footer.php';

?>