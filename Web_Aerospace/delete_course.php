<?php
include("connection.php");
$id=$_GET['id'];
$sql="DELETE FROM course WHERE id='$id'";
$retval = mysqli_query( $connection,$sql );
header("location:course_list.php")
?>