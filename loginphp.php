<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'Miniproject');
if(isset($_POST['login']))
{
    $Email_id= $_POST['Email'];
    $Password = $_POST['password'];
    $sql=mysqli_query($con,"SELECT * FROM warden where Email_id ='$Email_id' and  Password ='$Password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        
        $_SESSION["Email"]=$row['Email_id'];
        $_SESSION["Name"]=$row['Name'];
        
        header("Location:Home.php"); 
    }
    else
    {
        echo('Invalid login details') ;
        
       
        header("Location:index.php"); 
    }
}
?>
