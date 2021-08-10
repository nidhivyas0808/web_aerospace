<!DOCTYPE html>
<?php
include("session.php");
?>
<html lang='en'>
<head>
<title> Home </title>
<link rel="stylesheet" href="usersignup.css">
</head>
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
</div>
<div class="content">
<h1>AEROSPACE <br><span>WELCOMES YOU!!</span> <br></h1>
<p class="par">Aerospace has pioneered Soft-skills training in India,<br>
 spanning industries such as Aviation, Hospitality, Travel and Customer Service and <br>
 has consequently transformed countless careers in the process.<br>
 IF YOU NEED ANY TYPE OF ENQUIRY ON ANY SUBJECT RELATED<br>
TO OUR INSTITUTE OR COURSE PLEASE PRESS BELLOW BUTTON
</p>
  <button class="con"><a href="enquiry.php">ENQUIRY</a></button>
  <div class="form">
  <h2>SIGN-UP HERE</h2>
   <form method="post" id="signup_form" action="signup_submit.php">
  <input type="email" id="email" name="email" placeholder="Enter E-mail here">
  <input type="password" id="password" name="password" placeholder="Enter password">
  <button onclick="validateForm()" type="submit" class="btnn">SIGN-UP</button>
  <p class="link">AFTER SIGN-UP REGISTRATION<br>IS COMPULSORY<br><br>
  <a href="reg.php"><u><b>REGISTRATION</b></u></a> CLICK HERE</a></p>
  </div>
 </div>
</div>
</div>
</form>
<script>
 function validateForm(){
      var email=document.getElementById('email').value;
      var password=document.getElementById('password').value;
      if(!email){
         alert('Please enter email');
      }
      else if(!validateEmail(email)){
         alert("Please enter validate email");
      }else if(!password){
         alert("Please enter password");
      }else{
         document.getElementById("signup_form").submit(); 
      }
   }
   function validateEmail(email) {
      const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
   }
</script>
</body>
</html>