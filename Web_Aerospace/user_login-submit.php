<?php
include("connection.php");

$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM signup WHERE email='$email' AND password='$password'";
$retval = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($retval);

if(!empty($row)){
    $_SESSION['userData']=$row;
   header("location:user_home.php");
}
else{
    $_SESSION['msg']="Invalid user and password & IF YOU NOT SIGN-UP SO YOU ARE NOT ABLE TO FECTH YOUR DATA, SO FIRSTLY PLEASE GO AND SIGN-UP";
 header("location:userr.php");
}
?>
