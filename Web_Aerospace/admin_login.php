<!DOCTYPE html>
<?php
include("session.php");
?>
<html>
<head>
<title>Login form</title>
<link rel="stylesheet" href="adminlogin.css">
</head>
<body>
<form method="post" id="login_form" action="admin_login_submit.php">
<div class="login-box">
<h1>ADMIN LOGINBOX</h1>

<div class="textbox">
<input type="text" id="user" placeholder="user" name="user" required />
</div>

<div class="textbox">
<input type="password" id="password" placeholder="password" name="password" required />
</div>

<input class="submit" type="submit" name="submit" value="submit"/>
<a href="user_signup.php"><b><u>BACK</u></b></a>    
</div>
</div>
</form>
<script>
 function validateForm(){
      var user=document.getElementById('user').value;
      var password=document.getElementById('password').value;
      if(!user){
         alert('Please enter user');
      }
      else if(!password){
         alert("Please enter password");
      }else{
         document.getElementById("login_form").submit(); 
      }
   }
</script>
</body>
</html>
