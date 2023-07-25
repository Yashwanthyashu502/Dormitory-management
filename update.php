<?php
include 'conn.php';
$Phone = $_POST['contact'];
$Email_id= $_POST['email'];
$Stu_id_no=$_POST['id'];
if(count($_POST)!=0)
{
    extract($_POST);
    extract($_GET);
    $query="update student set Phone='$Phone',Email_id='$Email_id' where Stu_id_no='$Stu_id_no'";
    $result=mysqli_query($conn,$query);
    if($result==true)
    {
        echo "updated details";
        header('location:display.php');
    }
    else
    {
        echo "failed";
    }
}
?>
