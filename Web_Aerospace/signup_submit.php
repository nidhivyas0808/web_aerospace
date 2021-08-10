
<?php
include("connection.php");
$email=$_POST['email'];
$password=$_POST['password'];
$chkEmailSql="SELECT * FROM signup WHERE email='$email'";
$chkEmailRs = mysqli_query($connection,$chkEmailSql);
$chkEmailInfo = mysqli_fetch_assoc($chkEmailRs);
if(empty($chkEmailInfo)){
    
    $sql="INSERT INTO signup (email,password) VALUES ('$email','$password')";
    $retval = mysqli_query( $connection,$sql );
    $_SESSION['msg']="YOU ARE SUCCESSFULLY SIGNED-UP, WE WILL CONTACT YOU THROUGH YOUR E-MAIL";
    header("location:user_signup.php");
}else{
    $_SESSION['msg']="E-MAIL ALREADY USED, SELECT ANOTHER ONE OR JUST LOGIN  BY CLICKING  ON USER TAB FOR FETCHING YOUR DATA ";
    header("location:user_signup.php");
}
// $retval = mysql_query($connection,$sql);
?>
