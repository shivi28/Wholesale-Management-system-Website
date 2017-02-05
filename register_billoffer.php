<?php 
//Start the session to see if the user is authenticated user. 
//session_start(); 
 
//Check if the user is authenticated first. Or else redirect to login page 
 require('menu.php'); 
/*else{ 
 header('location:index.html'); 
 exit(); 
} */
?> 
<html> 
<head>
	<title>Register</title>
	<style type="text/css">
	body 
	{
		background-color: #00FFFF;
		background-image:url("green.jpg");
		 background-repeat: no-repeat;
		background-size:100%;
	}

	h1 
	{
		color: maroon;
		margin-left: 40px;
	}
	
	form {
  background: -webkit-linear-gradient(bottom, #9FE581, #9FE581 175px);
  background: -moz-linear-gradient(bottom, #9FE581, #9FE581 175px);
  background: linear-gradient(bottom, #9FE581, #9FE581 175px);
  margin: auto;
  position: relative;
  width: 350px;
  height: 150px;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
  font-style: italic;
  line-height: 24px;
  font-weight: bold;
  color: #09C;
  text-decoration: none;
  border-radius: 10px;
  padding: 10px;
  border: 1px solid #999;
  border: inset 1px solid #333;
  -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
	</style>

</head>
 <body> 
 <center> 
 <h1>BILL OFFER Updation Form</h1> 
 <form action="edit_billoffer.php" method="post"> 
 <table cellpadding = "10"> 
 <tr> 
 	<td>MIN_BILL</td>
 	<td><input type="text" name="MIN_BILL" maxlength="25"></td> 
 </tr>
 <tr>
 <td>DESCRIPTION</td> 
<td><input type="text" name="DESCRIPTION" maxlength="25"></td> 
 </tr> 
 
 <table cellpadding = "20"> 
 <tr> 
 <td><input type="submit" name="submit" value="Insert"></td> 
 <td><input type="submit" name="submit" value="Update"></td> 
 <td><input type="submit" name="submit" value="Delete"></td> 
 </tr> 
 </table> 
 </form> 
 </center> 
 </body> 
</html>