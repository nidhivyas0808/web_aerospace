<!DOCTYPE html>
<?php
include("session.php");
?>
<html lang='en'>
<head>
<title> Home </title>
<link rel="stylesheet" href="reg.css">
</head>
<body>
<div class="main">
<div class="navbar">
<div class="icon">
<h2 class="logo"> Aerospace</h2>
<h4><button><a href="user_signup.php">BACK TO HOME PAGE</a></button></h4>
</div>
 <form method="post" id="reg_form" action="reg_submit.php">
  <div class="container">  
  <center>  <h1> ADMISSION REGISTRATION FORM</h1> 
   </center>  
   <hr>    
<center>
<label> YOUR NAME </label></br>
<input type="text" name="name" id="name" placeholder="name" size="15" style="width: 500px;" required /></br>
<label>E-MAIL </label></br>   
<input type="text" name="email" id="email" placeholder="email" size="15" style="width: 500px;" required /></br>	
<label>   
<label for="course"> 
COURSE:</label>
<select name="course" id="course">
<option value="select course">select course</option>
<option value="Aviation, Hospitality and Travel Management ">Aviation, Hospitality and Travel Management </option>
<option value="Hospitality, Travel & Customer Service">Hospitality, Travel & Customer Service</option>
 <option value="Certificate Course in Aviation, Hospitality and Travel Management">Certificate Course in Aviation, Hospitality and Travel Management</option>
 <option value="Certificate Course in Hospitality, Travel & Customer Service"> Certificate Course in Hospitality, Travel & Customer Service</option>
 <option value="Aviation & Hospitality Services (Post Graduate) Airport Ground Services (Post Graduate)"> Aviation & Hospitality Services (Post Graduate) Airport Ground Services (Post Graduate)</option>
 <option value="Aviation, Hospitality, Travel & Customer Service (Post Graduate)">Aviation, Hospitality, Travel & Customer Service (Post Graduate)</option>
 <option value="Hospitality Management">Hospitality Management</option>
</select>
<br>
<div>  
<label>   
GENDER
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender" required > Female   
<input type="radio" value="Other" name="gender" required > Other  
  </div>  
CONTACT
</label></br>  
<input type="text" value="" name="contact" id="contact" placeholder="phone no." size="10" style="width: 500px;" required />
</br>
  <button type="submit" class="submitbtn" onclick="validateForm()">Submit</button>    
    <button type="cancel" class="cancelbtn">Cancel</button> 	
</center>
</form>  
</div>
<script>
 function validateForm(){
      var name=document.getElementById('name').value;
      var email=document.getElementById('email').value;
	  var course=document.getElementById('course').value;
      var contact=document.getElementById('contact').value;
      if(!name){
         alert('Please enter name');
      }
	  else if(!email){
         alert('Please enter email');
      }
      else if(!validateEmail(email)){
         alert("Please enter validate email");
	  }else if(!course){
         alert("Please enter course"); 
      }
	  else if(!contact){
         alert("Please enter contact");
		}else if(!checkContact(contact)){
         alert("Please enter valid contact number");
      }
		else{
         document.getElementById("reg_form").submit(); 
      }
   }
   function validateEmail(email) {
      const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
   }
   function checkPhone(phone) {
      //   var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
        var regx = /^[6-9]\d{9}$/ ;
  if(regx.test(phone))
    return true;
  else
    return false;
        }
</script>
</body>
</html>











