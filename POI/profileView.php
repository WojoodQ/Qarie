<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" href="css/s.css">
  <link rel="icon" href="image/Qarie.png" type="image/icon type">
  <title>View My Blog</title>
</head>

<body>
  <?php
  require('connection.php');
  session_start();
  if ($dbc = @mysqli_connect('localhost', 'root', '')) {
    if (!@mysqli_select_db($dbc, 'reader')) {
      die('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');
    }
  } else {
    die('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');
  } ?>

  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <div class="wrapper">
    <div class="left">

      <img src="image/Logoperson.JPG" alt="user" width="100">
      <?php

      if ($_GET['id'] == 1) {
        // print"ttttttttttttttttttttttttttttttttttttttttttttttttttttttttt";
        $user = 'اسم المستخدم';
        $fulnam = 'الاسم الكامل';
        $email = 'Abc123@gmail.com';
        $mobile = 966999999;
        $socila = 'اعزب';
        $majer = 'مبرمج';
        $userrname = "$_SESSION[username]";

        $query = "INSERT INTO profiles (mobile,majer,socialstatus,facebook,twitter, inestigram,username_profile) 
              VALUES ($mobile,'$majer','$socila','www@facebook.com','www@twitter.com','www@Instagram.com','$_SESSION[username]')";
        @mysqli_query($dbc, $query);
      }
      if ($_GET['id'] == 4) {
        $quer1 = "DELETE FROM reader.profiles WHERE mobile =966999999";
        @mysqli_query($dbc, $quer1);
      }
      $query1 = "SELECT * 
        FROM reader.profiles
        WHERE profiles.username_profile='$_SESSION[username]'";
      $r1 = mysqli_query($dbc, $query1);
      $row1 = mysqli_fetch_array($r1);

      $query = "SELECT * 
        FROM reader.users
        WHERE users.username='$_SESSION[username]'";

      if ($r = mysqli_query($dbc, $query)) {
        while ($row = mysqli_fetch_array($r)) {
          $equl = strcmp($row['username'], $_SESSION['username']);
          if ($equl == 0) {

            $user = $row['username'];
            $fulnam = $row['full_name'];
            $email = $row['email'];
            $mobile = $row1['mobile'];
            $socila = $row1['socialstatus'];
            $majer = $row1['majer'];
            $facebook = $row1['facebook'];
            $twitter = $row1['twitter'];
            $inestigram = $row1['inestigram'];
          }
        }
        echo "<h4> $user</h4>";
      }
      echo "<p> $fulnam</p>";
      ?>
      <div class="infoo">
        <div class="buttons">

          <?php
          print "<a href=\"profileEtit.php?id=$mobile\"><span></span>تعديل</a> ";
          ?>
          <a href="index.php"><span></span>تم</a>
        </div>
      </div>

    </div>
    <div class="right">
      <img src="image/Qarie.png" alt="labe" width="100">
      <div class="info">
        <h3>الملف الشخصي</h3>
        <div class="info_data">
          <div class="data">
            <h4>بريد الالكتروني</h4>

            <?php
            echo "<p> $email</p>";
            ?>
          </div>
          <div class="data">
            <h4> رقم الجوال </h4>
            <?php
            echo "<p> $mobile</p>";
            ?>
          </div>
        </div>
      </div>

      <div class="projects">
        <h3>النبذة التعريفية </h3>
        <div class="projects_data">
          <div class="data">
            <h4>الحالة الإجتماعية </h4>
            <?php
            echo "<p> $socila</p>";
            ?>
          </div>
          <div class="data">
            <h4>التخصص </h4>

            <?php
            echo "<p> $majer</p>";
            ?>
          </div>
        </div>
      </div>

      <div class="infoo">
        <h3>مواقع التواصل</h3>
        <div class="social_media">
          <ul>
            <li><a href="<$facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="$twitter"><i class="fab fa-twitter"></i></a></li>
            <li><a href="$inestigram"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
</body>

</html>