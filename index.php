<?php
include 'include/nav.php';


?>
<!-- start of form login -->

<div class="container">
    <div style="text-align: center">

        <h2 style="color:rgb(112,143,125);">مرحبا بك فى ملاحظاتى من فضلك قم بتسجيل الدخول</h2>
        <form class="form-inline" action="cklogin.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="ادخل اسم المستخدم " name="username"
                       required>
            </div>
            <br>
            <br>
            <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder=" ادخل  كلمه المرور"
                       name="password">
            </div>
            <br><br>
            <button type="submit" class="btn btn-default">تسجيل</button>

            <div class="checkbox">
                <label><input type="checkbox" name="checkB">تذكرنى </label>
            </div>
            <br><br>
        </form>
    </div>
</div>

<!-- end form login -->

<?php
include 'include/footer.php';
?>
