<?php
include 'conn.php';
extract($_GET);
$query="delete from student where Stu_id_no='$Stu_id_no'";
mysqli_query($conn,$query);
header('location:display.php');
?>