<?php
require('connection.php');
session_start();


if (isset($_POST['login'])) {
    $query = "SELECT * FROM users WHERE username='$_POST[email_username]' OR email='$_POST[email_username]'";
    $result = mysqli_query($con, $query);

    if ($result) {

        if (mysqli_num_rows($result) == 1) {

            $result_fetch = mysqli_fetch_assoc($result);
            if (password_verify($_POST['password'], $result_fetch['password'])) {
                //if password matched
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $result_fetch['username'];
                $_SESSION['full_name'] = $result_fetch['full_name'];
                if (isset($_POST['remember_me'])) {
                    setcookie('email_username', $_POST['email_username'], time() + (60 * 60 * 24));
                    setcookie('password', $_POST['password'], time() + (60 * 60 * 24));
                } else {
                    setcookie('email_username', '', time() - (60 * 60 * 24));
                    setcookie('password', '', time() - (60 * 60 * 24));
                }
                header("location: index.php");
            } else {
                header("Location: index.php?error=كلمة المرور غير صحيحة");
                exit();
            }
        } else {

            header("Location: index.php?error=اسم المستخدم او الايميل غير مسجل");
            exit();
        }
    } else {
        echo "
       <script>
       alert('cannot run query');
       window.location.href='index.php';
       </script>
       ";
    }
}

if (isset($_POST['register'])) {
    $user_exist_query = "SELECT * FROM users WHERE username='$_POST[username]' OR email='$_POST[email]'";
    $result = mysqli_query($con, $user_exist_query);

    if ($result) {

        if (mysqli_num_rows($result) > 0) { //if username or email is already taken
            $result_fetch = mysqli_fetch_assoc($result);

            if ($result_fetch['username'] == $_POST['username']) {
                header("Location: index.php?error=اسم المستخدم موجود سابقًا");
                exit();
            } else {
                header("Location: index.php?error= البريد الالكتروني موجود سابقًا");
                exit();
            }
        } else { //will be executed if the inserted data has not been taken befor

            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $query = "INSERT INTO `users`(`username`, `email`, `full_name`, `password`) VALUES ('$_POST[username]','$_POST[email]','$_POST[full_name]','$password')";

            if (mysqli_query($con, $query)) {
                //if data inserted succesfuly
                //if password matched 
                $user_exist_query = "SELECT * FROM users WHERE username='$_POST[username]' OR email='$_POST[email]'";
                $result2 = mysqli_query($con, $user_exist_query);
                $result_fetch2 = mysqli_fetch_assoc($result2);
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $result_fetch2['username'];
                $_SESSION['full_name'] = $result_fetch2['full_name'];
                header("location: index.php");
            } else {
                echo "
                <script>
                alert('can not run query');
                window.location.href='index.php';
                </script>
                ";
            }
        }
    } else {
        echo "
       <script>
       alert('cannot run query');
       window.location.href='index.php';
       </script>
       ";
    }
}
