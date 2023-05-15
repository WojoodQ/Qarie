<div id="sideNav">
    <nav>
        <ul>
            <li><a href="trackingPage.php">تتبع قراءتك</a></li>
            <li><a href="store.php">المتجر</a></li>
            <?php
            if (isset($_SESSION['logged_in'])) {
                echo "<li><a href=\"profileView.php?id=1\" id=\"open1\"> الصفحة الشخصية لـ $_SESSION[full_name]</a></li>";
                print '<li><a href="logout.php">تسجيل خروج</a></li>';
            } else {

                print '<li><a href="#" id="open1"> تسجيل دخول</a></li>';
                print '<li><a href="#" id="open2"> انشاء حساب</a></li>';
            }
            ?>
        </ul>
    </nav>
</div>

<div id="menuBtn">
    <img src="image/menu.png" id="menu">
</div>
<?php if (isset($_GET['error'])) { ?>
    <div class="modal-container" id="modal_container3">
        <div class="modal">
            <div class="closeIcon" id="close3">
                <span class="close">&times;</span>
            </div>
            <p class="error"><?php echo $_GET['error']; ?></p>
        </div>
    </div>
<?php } ?>

<div class="modal-container" id="modal_container1">
    <div class="modal">
        <form class="book-form" method="post" action="register_login.php">
            <!-- Modal content -->
            <div class="closeIcon" id="close1">
                <span class="close">&times;</span>
            </div>
            <input type='text' name='email_username' class='input-field' placeholder='البريد الالكتروني او اسم المستخدم' required value="<?php echo $id ?>">
            <input type='password' name='password' class='input-field' placeholder='كلمة المرور' required value="<?php echo $pass ?>">
            <span> <label style="margin-right:125px" id='re' class="xx">حفظ</lebel> </span>
            <input style="margin-left:542px" type='checkbox' name='remember_me' for='re' class="xx">
            <button type='submit' name='login' class='submit-btn'>تسجيل الدخول</button>
        </form>
    </div>
</div>

<div class="modal-container" id="modal_container2">
    <div class="modal">
        <form class="book-form" method="post" action="register_login.php">
            <!-- Modal content -->
            <div class="closeIcon" id="close2">
                <span class="close">&times;</span>
            </div>
            <input type='text' name='full_name' class='input-field' placeholder='الاسم كاملًا' required>
            <input type='text' name='username' class='input-field' placeholder='اسم المستخدم' required>
            <input type='email' name='email' class='input-field' placeholder='البريد الالكتروني' required>
            <input type='password' name='password' class='input-field' placeholder='ادخل كلمة المرور' required>
            <button type='submit' name='register' class='submit-btn'>انشاء حساب</button>
        </form>
    </div>
</div>