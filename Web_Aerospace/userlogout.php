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
<li><a href="user_home.php">YOUR DATA</a></li>
<li><a href="userlogout.php">LOGOUT</a></li>
</ul>
</div>
<br><br><br><br><br>
<div class="content">
<h1>YOUR LOGOUT PAGE<br><span>USER</span> <br></h1>
<p class="par">
IF YOU LOGOUT FROM THIS USER SIDE,<br>
YOU ARE NO LONGER ABLE TO FETCH YOUR DATA <br>
OF THIS SIDE........ FOR SEE YOUR DATA AGAIN PLEASE LOG-IN....<br>
AND IF YOU REALLY WANT TO LOGOUT,<br>
PLEASE PRESS THE BELOW LOGOUT BUTTON
</p>
 <center> <button class="con"><a href="user_signup.php">LOGOUT</a></button>
</center>
</div>
</div>
</body>
</html>