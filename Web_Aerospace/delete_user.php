<?php
include("connection.php");
$id=$_GET['id'];
$sql="DELETE FROM signup WHERE id='$id'";
$retval = mysqli_query( $connection,$sql );
header("location:user_list.php")
?>