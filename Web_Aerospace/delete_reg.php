<?php
include("connection.php");
$id=$_GET['id'];
$sql="DELETE FROM reg WHERE id='$id'";
$retval = mysqli_query( $connection,$sql );
header("location:reg_list.php")
?>