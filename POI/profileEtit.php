<?php
require('connection.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/s.css">
<link rel="icon" href="image/Qarie.png" type="image/icon type">
<title>Edit a Blog Entry</title>
</head>
<body>
<?php 
session_start();


if ($dbc = @mysqli_connect ('localhost', 'root', '')) {		
  if (!@mysqli_select_db ($dbc, 'reader')) {
  die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');	}
  } 
  else {	
  die ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');
  }
$user="";
$fulnam="";
$email="";
$mobile="";
$socila="";
$majer="";
$facebook="";
$twitter="";
$inestigram="";
$quer="";

if (isset ($_POST['submit'])) { // Handle the form

  $quer="UPDATE reader.profiles SET mobile={$_POST['mobile']}, socialstatus='{$_POST['socialstatus']}', majer='{$_POST['majer']}' ,facebook='{$_POST['facebook']}',
  twitter='{$_POST['twitter']}',inestigram='{$_POST['inestigram']}'
   WHERE username_profile='$_SESSION[username]'";
    $r11 = mysqli_query ($dbc, $quer); 

    if (mysqli_affected_rows($dbc) == 1) {
      $quier1="UPDATE reader.users SET full_name='{$_POST['full_name']}', email='{$_POST['email']}' WHERE username='$_SESSION[username]'";
      $r = mysqli_query ($dbc, $quier1);

      
  $quer="UPDATE reader.profiles SET mobile={$_POST['mobile']}, socialstatus='{$_POST['socialstatus']}', majer='{$_POST['majer']}' ,facebook='{$_POST['facebook']}',
  twitter='{$_POST['twitter']}',inestigram='{$_POST['inestigram']}'
   WHERE username_profile='$_SESSION[username]'";
    $r11 = mysqli_query ($dbc, $quer);


      if (mysqli_affected_rows($dbc) == 1) {
              
  $quer="UPDATE reader.profiles SET mobile={$_POST['mobile']}, socialstatus='{$_POST['socialstatus']}', majer='{$_POST['majer']}' ,facebook='{$_POST['facebook']}',
  twitter='{$_POST['twitter']}',inestigram='{$_POST['inestigram']}'
   WHERE username_profile='$_SESSION[username]'";
    $r11 = mysqli_query ($dbc, $quer);
    
        echo "
        <script>
        alert('تم حفظ التعديلات ');
        window.location.href='profileView.php?id=4';
        </script>
        ";
  
  
  }else{
          
  $quer="UPDATE reader.profiles SET mobile={$_POST['mobile']}, socialstatus='{$_POST['socialstatus']}', majer='{$_POST['majer']}' ,facebook='{$_POST['facebook']}',
  twitter='{$_POST['twitter']}',inestigram='{$_POST['inestigram']}'
   WHERE username_profile='$_SESSION[username]'";
    $r11 = mysqli_query ($dbc, $quer);
    echo "
    <script>
    alert('تم حفظ التعديلات ');
    window.location.href='profileView.php?id=4';
    </script>
    ";

  }    
  


} 
 
    else {

      $quier1="UPDATE reader.users SET full_name='{$_POST['full_name']}', email='{$_POST['email']}' WHERE
       username='$_SESSION[username]'";
      $r = mysqli_query ($dbc, $quier1);

      if (mysqli_affected_rows($dbc) == 1) {

              
  $quer="UPDATE reader.profiles SET mobile={$_POST['mobile']}, socialstatus='{$_POST['socialstatus']}', majer='{$_POST['majer']}' ,facebook='{$_POST['facebook']}',
  twitter='{$_POST['twitter']}',inestigram='{$_POST['inestigram']}'
   WHERE username_profile='$_SESSION[username]'";
    $r11 = mysqli_query ($dbc, $quer);
        echo "
        <script>
        alert('تم حفظ التعديلات ');
        window.location.href='profileView.php?id=4';
        </script>
        ";
  
  
  }else{
    print "<p>Could not update the entry because: <b>" . mysqli_error($dbc) . "</b>. The query 
    was $quer.</p>";

  }

    
  }
 } else { 
  

    $que = "SELECT * 
    FROM reader.users
    WHERE users.username='$_SESSION[username]'";
     // echo "$_SESSION[username]";
     
    if ($r = mysqli_query ($dbc, $que)) { // Run the query.
    $row = mysqli_fetch_array ($r); // Retrieve the information.


    $que1 = "SELECT * 
    FROM reader.profiles
    WHERE profiles.username_profile='$_SESSION[username]'";
        // echo "$_SESSION[username]";
     
    if ($r1 = mysqli_query ($dbc, $que1)) { // Run the query.
    $ro1 = mysqli_fetch_array ($r1); // Retrieve the information.
print '<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<link rel="stylesheet" href="s.css">

<div class="wrapper">
    <div class="left">
        <img src="image/Logoperson.JPG" alt="user" width="100">
        <form action="profileEtit.php" method="post">
       <!-- <input type="file" id="myFile" name="filename"> -->
       <h4> <input type="text" name="username" size="15" maxsize="50" value="' . $row['username'] . '" placeholder=" اسم المستخدم" disabled/></h4>
        

        <input type="text" name="full_name" size="15" maxsize="50" value="' . $row['full_name'] . '" placeholder=" الاسم الثلاثي" /> 

   


        <div class="infoo">
        <div class="buttons">
          <input type="hidden" name="id" value="' . $_GET['id'] . '" />	
<a>
          <input type="submit" name="submit" value="تم"  /><span></span>
          </a>
          <!-- <a href="#"><span></span>تم</a> -->
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
                  
                   
               <input type="email" name="email" size="15" maxsize="50" value="' . $row['email'] . '" placeholder=" ABCabc123@gmail.com " /> 

                 </div>
                 <div class="data">
                   <h4> رقم الجوال </h4>
                    <input type="text" name="mobile" size="15" maxsize="50" value="' . $ro1['mobile'] . '" placeholder=" 05XXXXXXXXX" />

              </div>
            </div>
        </div>
      
      <div class="projects">
            <h3>النبذة التعريفية </h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>الحالة الإجتماعية </h4>
                    <input type="radio" id="single"
                    name="socialstatus" value="أعزب" >
                   <label for="single"> أعزب</label>
                   <br>
                   <input type="radio" id="merreg"
                    name="socialstatus" value="متزوج">
                   <label for="merreg"> متزوج</label>
                 </div>
                 <div class="data">
                   <h4>التخصص </h4>
                    <input type="text" name="majer" size="15" maxsize="50" value="' . $ro1['majer'] . '" placeholder=" مبرمج" />

              </div>
            </div>
        </div>

        <div class="infoo">
          <h3>مواقع التواصل</h3>
          <div class="social_media">
          
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f" ></i></a>
              <input  type="email" name="facebook" size="10" maxsize="50" value="' . $ro1['facebook'] . '" placeholder=" www@facebook.com" />
              </li>
              <li><a href="#"><i class="fab fa-twitter"></i></a>
              <input  type="email" name="twitter" size="10" maxsize="50" value="' . $ro1['twitter'] . '" placeholder="www@twitter.com" />
              </li>
              <li><a href="#"><i class="fab fa-instagram"></i></a>
              <input  type="email" name="inestigram" size="10" maxsize="50" value="' . $ro1['inestigram'] . '" placeholder="www@Instagram.com" />
              </li>
          </ul>
      </div>
     
      </form>
      
    </div>
</div>
';} 

else { // Couldn't get the information.
print "<p>Could not retrieve the entry because: <b>" . mysqli_error($dbc) . "</b>. The query 
was $que.</p>";
} }
else { // No ID set.
print '<p><b>You must have made a mistake in using this page.</b></p>'; }} // End of main IF.
mysqli_close($dbc); // Close the database connection.
?>
</body>
</html>