<?php
include("connection.php");
$name=$_POST['name'];
$email=$_POST['email'];
$course=$_POST['course'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];

     $sql="INSERT INTO reg (name,email,course,gender,contact) VALUES ('$name','$email','$course','$gender','$contact')";
    $retval = mysqli_query( $connection,$sql );
    $_SESSION['msg']="THANKS FOR REGISTER,WE WILL SOON CONTACT YOU THROUGH YOUR DETAILS AND IF YOU WANT TO SEE YOUR DETAILS GO BACK AND PRESS THE USER TAB";
    header("location:reg.php");

// $retval = mysql_query($connection,$sql);
?>


