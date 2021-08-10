<?php
include("connection.php");
$imagee=$_POST['imagee'];
$course_name=$_POST['course_name'];
$course_dur=$_POST['course_dur'];
$eligibility=$_POST['eligibility'];
$course_fee=$_POST['course_fee'];

  $sql="INSERT INTO course (imagee,course_name,course_dur,eligibility,course_fee) VALUES ('$imagee','$course_name','$course_dur','$eligibility','$course_fee')";
    $retval = mysqli_query( $connection,$sql );
    header("location:course_list.php");
// $retval = mysql_query($connection,$sql);
?>


