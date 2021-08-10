<!DOCTYPE html>
<?php
include("connection.php");
$sql="SELECT * FROM reg ORDER BY name DESC";
$retval = mysqli_query( $connection,$sql);
?>
<html>
<head><title>registration list</title>
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
<br><br><br><br><br>
<div class="content">
<h1>YOUR LOGOUT PAGE<br><span>ADMIN</span> <br></h1>
<p class="par">
IF YOU LOGOUT FROM THIS ADMIN SIDE,<br>
YOU ARE NO LONGER ABLE TO USE OR SEE THE ACTIVITIES <br>
OF THIS SIDE........ FOR PERFORMING ALL ACTIVITY AGAIN PLEASE LOG-IN AGAIN....<br>
AND IF YOU REALLY WANT TO LOGOUT,<br>
PLEASE PRESS THE BELOW LOGOUT BUTTON
</p>
 <center> <button class="con"><a href="admin_logout.php">LOGOUT</a></button>
</center>
</div>
</div>
</body>
</html>