<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'Miniproject');
$Name = $_POST['name'];
$Complaint = $_POST['complaint'];
$phone = $_POST['phone'];
$Complaint_no=$_POST[''];
$s = "select * from complaint where Complaint_no ='$Complaint_no'";
$result = mysqli_query($con,$s);
$num =mysqli_num_rows($result);
$num=2;
if($num ==1)
{
    echo"Complaint_id is aldready taken";
}
    else
    {
      $register= "insert into complaint values('$Complaint_no','$Name','$Complaint','$phone')";
      mysqli_query($con,$register);
      header('Location:Home.php', TRUE, 302);
      echo"regitration successful";
    }  
?>

