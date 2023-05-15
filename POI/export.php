<?php 
require('connection.php');
session_start();
if (isset($_POST["export"])) {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output", "w");
    fputcsv($output, array('Book Name', 'Author Name', 'Review'));
    $query = "SELECT  `book_name`, `author_name`, `review` from tracking WHERE username_tracking='$_SESSION[username]' ORDER BY book_id DESC";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, $row);
    }
    fclose($output);
}
?>