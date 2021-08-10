<?php
   include("connection.php");
?>
<?php
if(empty($_SESSION['adminData'])){
  // header("location:admin_login.php");
}
?>
<html>
   
   <head>
      <title>Welcome Admin</title>
      
   </head>
   
   <body>
      <?php include_once('ad_home.php'); ?>
      
   </body>
</html>