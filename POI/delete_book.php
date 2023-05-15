<?php
require('connection.php');

$b_id=$_GET["book_id"];
$query="DELETE FROM `tracking` WHERE `book_id`=$b_id";
mysqli_query($con, $query);
header("Location: trackingPage.php");
?>