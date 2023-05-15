<?php
require('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="nav/nav.css">
    <link rel="icon" href="image/Qarie.png" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <title>تتبع قراءتك</title>
</head>

<body class="trackingPage">

    <section id="banner">
        <a href="index.php"><img src="image/Qarie.png" class="logo"></a>
    </section>

    <?php include("nav/nav.php"); ?>

    <div class="banner-btn-tracking">
        <form method="post" action="export.php">
            <input type="submit" name="export" value="تنزيل مراجعاتك"><span></span></input>
        </form>
        <a href="#" id="open4"><span></span>أضف كتابك</a>
    </div>

    <!-- dynamic table -->
    <div class="container">
        <table class="_table">
            <thead>
                <tr>
                    <th>الغلاف</th>
                    <th>العنوان</th>
                    <th>المؤلف</th>
                    <th>تاريخ البدء</th>
                    <th>تاريخ الإنتهاء</th>
                    <th>التقدم</th>
                    <th width="50px">
                    </th>
                </tr>
            </thead>

            <tbody id="table_body">
                <?php
                $query = "SELECT * FROM `tracking` WHERE `username_tracking`='$_SESSION[username]'";
                $result = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><img style='width:80px; height: 100px; border-radius: 10px; margin: 0.1px;' src="upload/<?php echo $row['cover'] ?>" class='open6' book-id="<?php echo $row["book_id"] ?>" book-review="<?php echo $row["review"] ?>"></td>
                        <td><?php echo $row["book_name"] ?></td>
                        <td><?php echo $row["author_name"] ?></td>
                        <td><?php echo $row["start_date"] ?></td>
                        <td><?php echo $row["end_date"] ?></td>
                        <td>
                            <div class='progress-container'><progress value='<?php echo $row["current_page"] ?>' max='<?php echo $row["page_number"] ?>'></progress></div>
                        </td>
                        <td>
                            <div class='action_container'>
                                <a href='delete_book.php?book_id=" <?php echo $row["book_id"] ?> "' onclick='remove_tr(this)'><img class="row-icon" src="image/bin.png"></a>

                                <a class='open5' book-id="<?php echo $row["book_id"] ?>"><img class="row-icon" src="image/edit.png"></a>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>



    <div class="modal-container-tracking" id="modal_container4">
        <div class="modal-tracking">
            <form class="book-form" method="post" action="add_book.php" enctype="multipart/form-data">
                <!-- Modal content -->
                <div class="closeIcon-tracking" id="close4">
                    <span class="close-tracking">&times;</span>
                </div>
                <div class="modalContent-tracking">
                    <h3>اضافة كتاب</h3>
                    <input type="text" name="book_name" placeholder="اسم الكتاب" class="name" required />
                    <input type="text" name="author_name" placeholder="اسم المؤلف" class="author" required />
                    <input type="number" name="page_number" placeholder="عدد صفحات الكتاب" class="pages" min='1' required />
                    <input name="start_date" placeholder='تاريخ البدء' type="date" class="start-date" required />
                    <br>
                    <label>
                        غلاف الكتاب
                        <input name="cover" id="Image" type="file" class="img" accept=".jpg,.png" required />
                    </label>
                    <button name="add_book" class="bn60" style="text-decoration: none;" onclick="create_tr('table_body')">أضِف الكتاب</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal-container-tracking" id="modal_container5">
        <div class="modal-tracking">
            <form class="book-form" method="post" action="update_book.php" enctype="multipart/form-data">
                <!-- Modal content -->
                <div class="closeIcon-tracking" id="close5">
                    <span class="close-tracking">&times;</span>
                </div>
                <div class="modalContent-tracking">
                    <h3>تحديثات الكتاب</h3>
                    <input type="number" name="current_page" placeholder="عدد الصفحات المقروءة" class="pages" min='1' required />
                    <input name="end_date" placeholder='تاريخ الانتهاء' type="date" class="start-date" required />
                    <textarea class="review" name="review" placeholder="مراجعة الكتاب"></textarea>
                    <input type="hidden" name="book_id" class="book-id-input">
                    <button href="" name="update_book" class="bn60" style="text-decoration: none;">حدِّث الكتاب</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal-container-tracking" id="modal_container6">
        <div class="modal-tracking">
            <!-- Modal content -->
            <div class="closeIcon-tracking" id="close6">
                <span class="close-tracking">&times;</span>
            </div>
            <div class="modalContent-tracking">
                <h3>مراجعة الكتاب</h3>
                <input type="text" class="book-review-input">
            </div>
        </div>
    </div>

    <script src="nav/nav.js"></script>
    <script src="js/script.js"></script>
    <script>
        //Popup page 
        const open5 = document.querySelectorAll('.open5');
        const modal_container5 = document.getElementById('modal_container5');
        const close5 = document.getElementById('close5');

        open5.forEach(function(el, i, nodeList) {
            el.addEventListener('click', () => {
                modal_container5.classList.add('show');
                document.querySelector('.book-id-input').value = el.getAttribute('book-id');
                // console.log(el.getAttribute('book-id'))
            });
        });

        close5.addEventListener('click', () => {
            modal_container5.classList.remove('show');
        });
        //end of Popup page
    </script>

    <script>
        //Popup page 
        const open6 = document.querySelectorAll('.open6');
        const modal_container6 = document.getElementById('modal_container6');
        const close6 = document.getElementById('close6');

        open6.forEach(function(el, i, nodeList) {
            el.addEventListener('click', () => {
                modal_container6.classList.add('show');
                document.querySelector('.book-review-input').value = el.getAttribute('book-review');
                // console.log(el.getAttribute('book-review'))
            });
        });

        close6.addEventListener('click', () => {
            modal_container6.classList.remove('show');
        });
        //end of Popup page
    </script>
</body>
</html>