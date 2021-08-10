<!DOCTYPE html>
<html>
<head><title>enquiry_list</title>
<link rel="stylesheet" href="ad_menu.css">
</head>
<body>
<div class="main">
<div class="navbar">
<div class="icon">
<h2 class="logo"> Aerospace</h2>
</div>
<div class="menu">
<ul>
<li><a href="ad_home.php">DASHBOARD</a></li>
<li><a href="user_list.php">MANAGE SIGN-UP</a></li>
<li><a href="reg_list.php">MANAGE REGISTRATION</a></li>
<li><a href="course_list.php">MANAGE COURSE</a></li>
<li><a href="logoutt.php">LOGOUT</a></li>
<li><a href="enquiry_list.php">MANAGE ENQUIRY</a></li>
</ul>
</div>
<br><br><br><br><br><br><br>
<br><br>
<?php
include("connection.php");
$sql="SELECT * FROM enquiry ORDER BY name DESC";
$retval = mysqli_query( $connection,$sql);
?>
<table border="2px" style="font-family:Georgia, Garamond, Serif;color:white;font-style:italic;">
    <tr>
        <th>name</th>
        <th>contact</th>
		<th>email</th>
		<th>enquiry subject</th>
		<th>message</th>
		<th>reply</th>
		<th>action</th>
       
</tr>
<?php
while($row = mysqli_fetch_assoc($retval)){
    ?>
<tr>
    <th><?php echo $row['name']; ?></th>
	<th><?php echo $row['contact']; ?></th>
   <th><?php echo $row['email']; ?></th>
   <th><?php echo $row['enquiry_subject']; ?></th>
	<th><?php echo $row['message']; ?></th>
	<th><?php echo $row['reply']; ?></th>
    <th><a href="enquiry_list.php?id=<?php echo $row['id']; ?>">REPLY</a></th>
	<th><a href="enquiry_dlt.php?id=<?php echo $row['id']; ?>">DELETE</a></th>
</tr>
    <?php
}
?>
</table></center>
<?php
if(isset($_GET['id']))
{
?>
<form method="POST" action="replysubmit.php">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<input type="text" name="reply" placeholder="enter reply" style="width:500px">
<br>
<button type="submit" class="btn">REPLY</button>
</form>
<?php
}
?>
</body>
</html>