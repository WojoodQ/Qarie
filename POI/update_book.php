<?php
require('connection.php');
session_start();
if(isset($_POST['update_book'])){   
    $query = "UPDATE `tracking` SET `current_page`='{$_POST['current_page']}',`end_date`='{$_POST['end_date']}',`review`='{$_POST['review']}' WHERE `book_id`='{$_POST['book_id']}' ";
    mysqli_query($con, $query);
    header("Location: trackingPage.php");
    }
?>