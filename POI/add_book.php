<?php
require('connection.php');
session_start();

// Add book query
if(isset($_POST['add_book'])){

header("Location: trackingPage.php");

$img_name = $_FILES['cover']['name'];
move_uploaded_file($_FILES['cover']['tmp_name'], '/Applications/XAMPP/xamppfiles/htdocs/POI/upload/' . $_FILES['cover']['name']);

$query = "INSERT INTO `tracking`(`book_id`, `username_tracking`, `cover`, `book_name`, `author_name`, `page_number`, `current_page`, `start_date`, `end_date`, `review`) VALUES(0,'{$_SESSION['username']}','{$_FILES['cover']['name']}','{$_POST['book_name']}','{$_POST['author_name']}','{$_POST['page_number']}',NULL,'{$_POST['start_date']}',NULL,NULL)";
$_SESSION['book_id']= mysqli_query($con, $query);
}
?>