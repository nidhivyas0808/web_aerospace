<?php
include("connection.php");

$user=$_POST['user'];
$password=$_POST['password'];
 $sql="SELECT * FROM admin WHERE user='$user' AND password='$password' AND role='admin'";
$retval = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($retval);

if(!empty($row)){
    $_SESSION['adminData']=$row;
   header("location:admin_home.php");
}
else{
    $_SESSION['msg']="Invalid user and password";
 
 header("location:admin_login.php");
}
?>

