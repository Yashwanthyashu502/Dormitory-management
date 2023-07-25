<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'Miniproject');
$Room_id_no = $_POST['regno'];
$Stu_name = $_POST['name'];
$Block = $_POST['block'];
$Warden_name = $_POST['wardenname'];
$No_of_beds	= $_POST['no-of-beds'];
$s = "select * from rooms where Room_id_no ='$Room_id_no'";
$result = mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($num ==1)
{
    echo"Room_id is aldready taken";
}
    else
    {
      $register= "insert into rooms values('$Room_id_no','$Stu_name','$Block','$Warden_name','$No_of_beds')";
      mysqli_query($con,$register);
      header('Location:Home.php', TRUE, 302);
      echo"regitration successful";
    }  
?>
