<?php
include("connection.php");
$email=$_POST['email'];
$sql="SELECT * FROM enquiry WHERE email='$email'";
$retval=mysqli_query($connection,$sql);
?>
<html>
<head>
<style>
div
{
	width:320px;
	padding:10px;
	margin-top:250px;
	margin-left:50px;
}
</style></head>
<body background="adminall.jpg">
<center>
<div>
<h1 style="font-size:25px">YOUR MESSAGE AND REPLY FROM ADMIN</h1>
<table class="cent" border="5px">
<tr>
<th style="color:black">MESSAGE</th>
<th style="color:black">REPLY</th>
</tr></div>
</center>
<?php
while($row=mysqli_fetch_assoc($retval)){
	?>
	<tr>
	<td><?php echo $row['message'];?></td>
    	<td><?php echo $row['reply'];?></td>
		</tr>
		<?php
}
			?>
			</table>
			</body>
			<html>
			