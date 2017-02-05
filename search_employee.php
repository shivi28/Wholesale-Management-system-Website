<?php
//Start the session to see if the user is authenticated user.
//session_start();
//Check if the user is authenticated first. Or else redirect to login page
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
  width: 650px;
  height: 500px;
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
		<h1>Search for Employee</h1>
		<form action="sear_employee.php" method="post">
			<table cellpadding = "10">
				<tr>
					<td>E_ID*</td>
					<td><input type="text" name="eid" maxlength="25"></td>
				</tr>
				<tr>
					<td>Phn_No*</td>
					<td><input type="number" name="phnno" maxlength="12"></td>
					<td>Name*</td>
					<td><input type="text" name="name" maxlength="15"></td>
				</tr>
				<tr>
					<td>Address*</td>
					<td><input type="text" name="address" maxlength="20"></td>
					<td>Salary*</td>
					<td><input type="text" name="salary" maxlength="15"></td>
				</tr>
				<tr>
					<td>Date of Birth</td>
					<td>Day<select name = "day">
							<option></option>
							<?php
							for($i = 1; $i <= 31; $i++){
								echo '<option value='.$i.'>'.$i.'</option>';
							}
							?>
						</select>
						<?php
							$months = array('01'=>'January', '02'=>'February',
							'03'=>'March', '04'=>'April', '05'=>'May',
							'06'=>'June', '07'=>'July', '08'=>'August',
							'09'=>'September','10'=>'October',
							'11'=>'November','12'=>'December');
						?>
					Month<select name = "month">
							<option></option>
							<?php
							foreach($months as $num => $nm){
								echo "<option value='$num'>$nm</option>";
							}
							?>
						</select>
					Year<select name = "year">
							<option></option>
							<?php
							for($i = date('Y')-70; $i <= date('Y')-5; $i++){
								echo "<option value='$i'>$i</option>";
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					
					<td>Sex*</td>
					<td>
						<Input type = 'Radio' Name ='sex' value= 'M' >Male
						<Input type = 'Radio' Name ='sex' value= 'F'>Female
					</td>
				</tr>
				<tr>
					<td>Designation*</td>
					<td><input type="text" name="designation" maxlength="30"></td>
					<td>Age</td>
					<td><input type="number" name="age" maxlength="4"></td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td><input type="text" name="email" maxlength="6"></td>
				</tr>
				<tr>
					<td>Date of Joining</td>
					<td>Day<select name = "day">
							<option></option>
							<?php
							for($i = 1; $i <= 31; $i++){
								echo '<option value='.$i.'>'.$i.'</option>';
							}
							?>
						</select>
						<?php
							$months = array('01'=>'January', '02'=>'February',
							'03'=>'March', '04'=>'April', '05'=>'May',
							'06'=>'June', '07'=>'July', '08'=>'August',
							'09'=>'September','10'=>'October',
							'11'=>'November','12'=>'December');
						?>
					Month<select name = "month">
							<option></option>
							<?php
							foreach($months as $num => $nm){
								echo "<option value='$num'>$nm</option>";
							}
							?>
						</select>
					Year<select name = "year">
							<option></option>
							<?php
							for($i = date('Y')-70; $i <= date('Y')-5; $i++){
								echo "<option value='$i'>$i</option>";
							}
							?>
						</select>
					</td>
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