<?php 
//Start the session to see if the user is authenticated user. 
 
//Check if the user is authenticated first. Or else redirect to login page 
 require('menu.php'); 
?> 
<html>
	<head>
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
  width: 550px;
  height: 350px;
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
	
	</style></head>
	<body>
		<center>
		<h1>Customer Registration/Updation Form</h1>
		<form action="edit_customer.php" method="post">
			<table cellpadding = "10">
				<tr>
					<td>CUST_ID*</td>
					<td><input type="text" name="custid" maxlength="25"></td>
				</tr>
				<tr>
					<td>Name*</td>
					<td><input type="text" name="name" maxlength="15"></td>
					<td>Phn_No*</td>
					<td><input type="number" name="phnno" maxlength="12"></td>
					
				</tr>
				<tr>
					<td>Email*</td>
					<td><input type="text" name="email" maxlength="15"></td>
					<td>Address*</td>
					<td><input type="text" name="address" maxlength="20"></td>
					
				</tr>
				<tr>
					<td>Age*</td>
					<td><input type="text" name="age" maxlength="20"></td>
				</tr>
				
			
			</table>
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
