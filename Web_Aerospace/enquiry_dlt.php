<?php
include("connection.php");
$id=$_GET['id'];
$sql="DELETE FROM enquiry WHERE id='$id'";
$retval = mysqli_query( $connection,$sql );
header("location:enquiry_list.php")
?>