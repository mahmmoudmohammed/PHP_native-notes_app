<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> ملاحظاتى</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
       <a class="navbar-brand" href='../show.php'>ملاحظاتى</a>
    </div>

    <ul class="nav navbar-nav">
         </li>
         <li class="active"><a href='../home.php'>الرئيسيه</a></li><!-- home-->

         <li>
           <?php
            if (isset($_SESSION['role'])) {
                 echo" <a href='../users/formAddNote.php'> اضافه ملاحظه </a>";
                  }?></li><!-- addnote-->

           <?php
              if (isset($_SESSION['role'])) { echo "";}
              else {
                echo "
                      </ul>
                      <ul class='nav navbar-nav navbar-right'>
                      <!-- regester-->
                      <li><a href='../users/regester.php'><span class='glyphicon glyphicon-user'></span> تسجيل عضويه</a></li>
                        ";
                      }?>
         <!-- login logout-->
         <li> <?php 
            if (isset($_SESSION['role']) && $_SESSION['role']==1) {
                echo '<a href="../profile.php"> عرض البيانات   </a>
                  <!-- logout-->';
                }?></li>
            <li>
              <?php
            if (isset($_SESSION['role'])) {
                echo '<a href="../logout.php"> <span class="glyphicon glyphicon-log-in"> </span>تسجسل الخروج  </a>
                  <!-- logout-->';
            }
            else
            {
              echo '<a href="../index.php"> <span class="glyphicon glyphicon-log-in"> </span>دخول  </a>
              <!-- login-->';
            }
           ?>
        </li>
    </ul>

  </div>
</nav>
</body>
</html>