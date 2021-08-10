<!DOCTYPE html>
<?php
include("session.php");
?>
<html lang='en'>
<head>
<title> Home </title>
<link rel="stylesheet" href="userr.css">
</head>
<body>

<form method="post" id="user_login" action="user_login-submit.php">
<div class="login-box">
<h1>USER LOGINBOX</h1>

<div class="textbox">
<input type="text" id="email" placeholder="email" name="email" required />
</div>

<div class="textbox">
<input type="password" id="password" placeholder="password" name="password" required />
</div>

<input class="submit" type="submit" name="submit" value="submit"/>
</div>
</div>
</form>
<script>
 function validateForm(){
      var user=document.getElementById('email').value;
      var password=document.getElementById('password').value;
      if(!email){
         alert('Please enter email');
      }
      else if(!password){
         alert("Please enter password");
      }else{
         document.getElementById("user_login").submit(); 
      }
   }
</script>
</div>
</body>
</html>