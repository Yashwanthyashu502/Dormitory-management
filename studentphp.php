<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'Miniproject');
$Stu_id_no = $_POST['regno'];
$Name = $_POST['name'];
$Address = $_POST['address'];
$Phone = $_POST['contact'];
$Email_id= $_POST['email'];
$Gender= $_POST['gender'];
$Warden_name = $_POST['warname'];
$Pay_id = $_POST['payment'];
$Phone2 = $_POST['contact1'];
$Pay_amt=$_POST['payamt'];
$Block = $_POST['block'];
$Room_id=$_POST['roomid'];
$s = "select * from student where Stu_id_no ='$Stu_id_no'";
$result = mysqli_query($con,$s);
$num =mysqli_num_rows($result);

if($num ==1)
{
    echo"student id  aldready taken";
}
    else
    {
      $register= "insert into student values('$Stu_id_no','$Name','$Address','$Phone','$Email_id','$Gender','$Warden_name','$Pay_id','$Pay_amt','$Block','$Room_id')";
      mysqli_query($con,$register);
      header('Location:Home.php', TRUE, 302);
      echo"regitration successful";
      

    }
    
?>