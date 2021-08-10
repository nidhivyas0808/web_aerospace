<!DOCTYPE html>
<?php
include("connection.php");

$sql="SELECT * FROM signup ORDER BY id DESC";
$retval = mysqli_query( $connection,$sql);

?>
<html>
<head><title>user_list</title>
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
<table border="1" style="font-family:Georgia, Garamond, Serif;color:white;font-style:italic;">

    <tr>
        <th>Email</th>
        <th>Password</th>
		<th>action</th>
       
</tr>
<?php
while($row = mysqli_fetch_assoc($retval)){
    ?>
<tr>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['password']; ?></td>
    <td><a href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
    <?php
}
?>
</tables></center>
</body>
</html>