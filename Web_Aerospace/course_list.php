<!DOCTYPE html>
<?php
include("connection.php");
$sql="SELECT * FROM course ORDER BY id DESC";
$retval = mysqli_query( $connection,$sql);
?>
<html>
<head><title>Course_list</title>
<link rel="stylesheet" href="ad_menu.css">
</head>
<body>
<div class="main">
<div class="navbar">
<div class="icon">
<h2 class="logo">Aerospace</h2>
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
<table border="1" style="font-family:Georgia, Garamond, Serif;color:white;font-style:italic;">
    <tr>
	    <th>image</th>
        <th>course name</th>
        <th>course duration</th>
		<th>eligibility </th>
		<th>course fee</th>
		<th>action</th>
</tr>
<?php
while($row = mysqli_fetch_assoc($retval)){
    ?>
<tr>
<td><?php echo $row['imagee']; ?></td>
    <td><?php echo $row['course_name']; ?></td>
    <td><?php echo $row['course_dur']; ?></td>
	<td><?php echo $row['eligibility']; ?></td>
	<td><?php echo $row['course_fee']; ?></td>
 <td><a href="add_course.php?id=<?php echo $row['id']; ?>">ADD</a>|
 <a href="delete_course.php?id=<?php echo $row['id']; ?>">Delete</a>
 </td>
 </tr>
    <?php
}
?>
</table></center>
</body>
</html>