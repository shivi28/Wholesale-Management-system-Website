<?php
//Start the session to see if the user is authenticated user.
//Check if the user is authenticated first. Or else redirect to login page
require('menu.php');
echo '<html><head><style>
table {
	align : center;
    border-collapse: collapse;
    width: 100%;
}
body {
    background-image:url("green.jpg");
	background-repeat: no-repeat;
	background-size:100%;
}
th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
h1{
	align: center;
}
.center {
	position: fixed;
	top: 20%;
	left: 25%;
    width: 50%;
    border: 3px solid #73AD23;
    padding: 10px;
}
.fixed {
    position: fixed;
	top: 40%;
	left: 15%;
    width: 70%;
    border: 3px solid #73AD21;
}
</style>
</head>';
?>
<html>
<head>
	<title>Register</title>
	<style type="text/css">
	body 
	{
		
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
  height: 300px;
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
<h1>SEARCH FOR THE CUSTOMER</h1>
<form action="sear_customer.php" method="post">
<table cellpadding = "10">
<tr>
<td>Customer ID</td>
<td><input type="text" name="custid" maxlength="25"></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name="name" maxlength="15"></td>
</tr>
<tr>
<td>E-Mail</td>
<td><input type="text" name="email" maxlength="30"></td>
<td>Age</td>
<td><input type="text" name="age" maxlength="4"></td>
</tr>
<tr>
<td>Phone Number</td>
<td><input type="text" name="phnno" maxlength="13"></td>
</tr>
</table>
<table cellpadding = "20">
<tr>
<td><input type="submit" name="submit" value="Search"></td>
</tr>
</table>
</form>
</center>
</body>
</html>