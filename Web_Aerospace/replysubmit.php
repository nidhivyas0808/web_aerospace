<?php
include("connection.php");
$id=$_POST['id'];
$reply=$_POST['reply'];
$chkEmailSql="UPDATE enquiry SET reply='$reply' WHERE id='$id'";
$chkEmailRs=mysqli_query($connection,$chkEmailSql);
$_SESSION['msg']="Reply has submitted";
header("location:enquiry_list.php");
?>