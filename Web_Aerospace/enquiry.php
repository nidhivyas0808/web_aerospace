<!DOCTYPE html>
<?php
include("session.php");
?>
<html lang='en'>
<head>
<title> ENQUIRY </title>
<link rel="stylesheet" href="enquiry.css">
</head>
<body background="adminall.jpg" >
 <form method="post" id="enquiry_form" action="enquiry_submit.php">
  <div class="container">  
  <center>  <h1> ENQUIRY FORM </h1> 
   </center>  
   <hr>    
<center>
<label> YOUR NAME </label></br>
<input type="text" name="name" id="name" placeholder="name" size="15" style="width: 500px;" required /></br>

<label>CONTACT </label></br>   
<input type="text" value="" name="contact" id="contact" placeholder="contact" size="15" style="width: 500px;" required /></br>	
<label>

<label>E-MAIL </label></br>   
<input type="text" name="email" id="email" placeholder="email" size="15" style="width: 500px;" required /></br>	
<label>   

<label>ENQUIRY SUBJECT </label></br>   
<input type="text" name="enquiry_subject" id="enquiry_subject" placeholder="enquiry_subject" size="15" style="width: 500px;" required /></br>	
<label>

<label>MESSAGE </label></br>   
<input type="text" name="message" id="message" placeholder="message" size="15" style="width: 500px;" required /></br>	
<label>

</br>
  <button type="submit" class="submitbtn" onclick="validateForm()">Submit</button>    
    <button type="cancel" class="cancelbtn">Cancel</button>    
	<a href="reply.php" style="color:red"><b><u>CLICK HERE TO SEE REPLY</u></b></a>
</center>
</form>  

</div>
<script>
 function validateForm(){
      var name=document.getElementById('name').value;
	   var contact=document.getElementById('contact').value;
      var email=document.getElementById('email').value;
	  var enquiry_subject=document.getElementById('enquiry_subject').value;
	   var message=document.getElementById('message').value;
     
      if(!name){
         alert('Please enter name');
      }
	  else if(!contact){
         alert("Please enter contact");
		}else if(!checkContact(contact)){
         alert("Please enter valid contact number");
      }else if(!email){
         alert('Please enter email');
      }
      else if(!validateEmail(email)){
         alert("Please enter validate email");
	  }else if(!enquiry_subject){
         alert("Please enter enquiry_subject"); 
      }
	  else if(!message){
         alert("Please enter message");
		}
		else{
         document.getElementById("enquiry_form").submit(); 
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
