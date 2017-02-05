<?php
//session_start();
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
require('menu.php');
}

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
  width: 300px;
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
	<h3 align="center"> ENTER MODEL ID * </h3>
	<form name="DISCOUNT" method="post" action="view_discount_wid_mid.php">
		<table align="center" cellpadding="10" cellspacing="4">
		<tr>
			<td ><b>MODEL_ID*</b></td>
			<td><input name="DIS" type="text" value="MODEL_ID"/></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
			<input type="submit" name="submit" value="submit" /></td>
		</tr>
		</table>
</body>
</html>
