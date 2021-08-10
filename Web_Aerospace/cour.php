<?php 
                
                include("connection.php");
              
                $sql="SELECT * FROM course";
                $retval = mysqli_query($connection,$sql);

                ?>
<!DOCTYPE html>
<html>
<head><title>new course</title>
</head>
<link rel="stylesheet" type="text/css" href="cour.css">
<body>
<div class="main">
<div class="navbar">
<div class="icon">
<h2 class="logo"> Aerospace</h2>
</div>
<div class="menu">
<ul>
<li><a href="user_signup.php">HOME</a></li>
<li><a href="out_us.html">ABOUT</a></li>
<li><a href="cour.php">COURSE</a></li>
<li><a href="userr.php">USER LOGIN</a></li>
</ul>
</div>
<div class="login">
<a href="admin_login.php"> <button class="btn">ADMIN-LOGIN</button></a>
</div>
<br><br>
<?php
while($row = mysqli_fetch_assoc($retval)){
    ?>
 <div class="column">
    <div class="card">
      <img src="<?php echo $row['imagee']; ?>" style="width:150px"><br>
	  <a href="user_signup.php"<h4 style="color:#fff"><?php echo $row['course_name']; ?> [<?php echo $row['course_dur']; ?>]</h4></a>
  <p style="color:#fff">Eligibility: <?php echo $row['eligibility']; ?> [Fee:<?php echo $row['course_fee']; ?>]</p>
    </div>
  </div>
  <?php    
}
?>
</header>

</div>
</body>
</html>