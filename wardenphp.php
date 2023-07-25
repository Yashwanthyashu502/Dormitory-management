<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'Miniproject');
$War_id_no = $_POST['regno'];
$Name = $_POST['name'];
$Address = $_POST['address'];
$Phone = $_POST['contact'];
$Email_id= $_POST['email'];
$Gender = $_POST['gender'];
$Username = $_POST['username'];
$Password = $_POST['password'];
$s = "select * from warden where email_id ='$Email_id'";
$result = mysqli_query($con,$s);
$num =mysqli_num_rows($result);

if($num ==1)
{
    echo"Email_id is aldready taken";
}
    else
    {
      $register= "insert into warden values('$War_id_no','$Name','$Address','$Phone','$Email_id','$Gender','$Username','$Password')";
      mysqli_query($con,$register);
      header('Location:index.php', TRUE, 302);
      echo"regitration successful";
      

    }

    
?>