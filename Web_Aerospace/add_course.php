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
 <form method="post" action="course_submit.php">
  <div class="container">  
  <center>  <h1> ADD </h1> 
   </center>  
   <hr>    
<center>
<label> IMAGE </label></br>
<input type="text" name="imagee" id="imagee" placeholder="image" size="15" style="width: 500px;" required /></br>

<label> COURSE NAME </label></br>   
<input type="text" name="course_name" id="course_name" placeholder="course name" size="15" style="width: 500px;" required /></br>	
<label>

<label> COURSE DURATION </label></br>   
<input type="text" name="course_dur" id="course_dur" placeholder="course_dur" size="15" style="width: 500px;" required /></br>	
<label>   

<label> ELIGIBILITY </label></br>   
<input type="text" name="eligibility" id="eligibility" placeholder="eligibility" size="15" style="width: 500px;" required /></br>	
<label>

<label> COURSE FEE </label></br>   
<input type="text" name="course_fee" id="course_fee" placeholder="course_fee" size="15" style="width: 500px;" required /></br>	
<label>

</br>
  <button type="submit" class="submitbtn">ADD</button>    
    <button type="cancel" class="cancelbtn">Cancel</button>    
</center>
</form>  
</div>
</body>
</html>
