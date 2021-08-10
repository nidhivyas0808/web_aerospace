<?php
include("connection.php");
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$enquiry_subject=$_POST['enquiry_subject'];
$message=$_POST['message'];

  $sql="INSERT INTO enquiry (name,contact,email,enquiry_subject,message) VALUES ('$name','$contact','$email','$enquiry_subject','$message')";
    $retval = mysqli_query( $connection,$sql );
    $_SESSION['msg']="WE WILL SEND YOU ENQUIRY DATES OR REPLY THROUGH YOUR E-MAIL";
    header("location:enquiry.php");
// $retval = mysql_query($connection,$sql);
?>


