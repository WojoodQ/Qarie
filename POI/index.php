<?php
require('connection.php');
session_start();
if (isset($_COOKIE['email_username']) && isset($_COOKIE['password'])) {
    $id = $_COOKIE['email_username'];
    $pass = $_COOKIE['password'];
} else {
    $id = '';
    $pass = '';
}
?>

<head>
    <title>الصفحة الرئيسية</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="nav/nav.css">
    <link rel="icon" href="image/Qarie.png" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&family=Aref+Ruqaa&display=swap" rel="stylesheet">


</head>

<body class="index">
    <section id="banner">
        <a href="index.php"><img src="image/Qarie.png" class="logo"></a>
        <div class="banner-text">
            <pre> إِذَا كَانَ يُؤْذِيكَ حَرُّ المَصِيفِ</pre>
            <pre> وَيُبْسُ الخَرِيفِ وَبَرْدُ الشِّتَا                  </pre>
            <pre> وَيُلْهِيكَ حُسْنُ زَمَانِ الرَّبِيعِ</pre>
            <pre> فَأَخْذُكَ للعِلْمِ قُلْ لِي مَتَى؟                  </pre>
            <div class="banner-btn">
                <?php
                if (isset($_SESSION['logged_in'])) {
                    echo "<a href='trackingPage.php'><span></span>تتبع قراءتك</a>";
                    print '<a href="store.php"><span></span>المتجر</a>';
                } else {
                    print '<a href="store.php"><span></span>المتجر</a>';
                }
                ?>
            </div>
        </div>
    </section>

    <?php include("nav/nav.php"); ?>

    <script src="nav/nav.js"></script>


</body>

</html>