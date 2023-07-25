<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'Miniproject');
$Pay_id_no = $_POST['idno'];
$Name = $_POST['name'];
$Stu_id_no = $_POST['stu-id'];
$Food_type	 = $_POST['foodtype'];
$Room_type	= $_POST['room'];
$Pay_amt= $_POST['payamt'];
$Pay_type	 = $_POST['paytype'];
$s = "select * from payment where Pay_id_no ='$Pay_id_no'";
$result = mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($num ==1)
{
    echo"Payment id  aldready taken";
}
    else
    {
      $register= "insert into payment values('$Pay_id_no','$Name','$Stu_id_no','$Food_type','$Room_type','$Pay_amt','$Pay_type')";
      mysqli_query($con,$register);
      header('Location:Home.php', TRUE, 302);
      echo"regitration successful";
      

    }
    
?>