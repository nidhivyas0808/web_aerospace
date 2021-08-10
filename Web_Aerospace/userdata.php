<!DOCTYPE html>
<?php
include("connection.php");
$email=$_SESSION['userData']['email'];

$sql="SELECT * FROM reg WHERE email='$email' ORDER BY name DESC";
$retval = mysqli_query( $connection,$sql);
?>
<html>
<head><title>registration list</title>
<link rel="stylesheet" href="ad_menu.css">
</head>

<body>

<body>
<div class="main">
<div class="navbar">
<div class="icon">
<h2 class="logo"> Aerospace</h2>
</div>
<div class="menu">
<ul>

<li><a href="userhomee.php">YOUR DATA</a></li>
<li><a href="logoutt.php">LOGOUT</a></li>
</ul>
</div>
<br><br><br><br><br><br><br><br>

<table border="1" style="font-family:Georgia, Garamond, Serif;color:white;font-style:italic;">
    <tr>
        <th>name</th>
		<th>email</th>
		<th>course</th>
		<th>gender</th>
		<th>contact</th>
		
</tr>
<?php
while($row = mysqli_fetch_assoc($retval)){
    ?>
<tr>
    <td><?php echo $row['name']; ?></td>
	 <td><?php echo $row['email']; ?></td>
	 <td><?php echo $row['course']; ?></td> 
	 <td><?php echo $row['gender']; ?></td> 
	 <td><?php echo $row['contact']; ?></td>
   
</tr>
    <?php
}
?>
</tables>
</body>
</html>