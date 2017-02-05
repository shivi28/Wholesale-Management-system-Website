<?php 
//Start the session to see if the user is authenticated user. 
//session_start(); 
 
//Check if the user is authenticated first. Or else redirect to login page 
 require('menu.php'); 


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
  width: 700px;
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
 <h1>Ordering Updation Form</h1> 
 <form action="edit_ordering.php" method="post"> 
 <table cellpadding = "10"> 
	 <tr> 
		 <td>ORDER_ID*</td> 
		<td><input type="text" name="order_id" maxlength="30"></td> 
	 </tr> 
	 <tr> 
	 	<td>CUST_ID*</td> 
		<td><input type="text" name="cust_id" maxlength="30"></td> 
		 <td>P_ID*</td> 
		<td><input type="text" name="p_id" maxlength="10"></td> 

	 </tr> 
	 <tr> 
 <td>QUAN*</td> 
<td><input type="text" name="quan" maxlength="20"></td> 
 <td colspan="3">Day<select name = "day">
					<option></option>
					<?php
					for($i = 1; $i <= 31; $i++){
					echo '<option value='.$i.'>'.$i.'</option>';
					}
					echo '</select>';
					$months = array('01'=>'January', '02'=>'February',
					'03'=>'March', '04'=>'April', '05'=>'May',
					'06'=>'June', '07'=>'July', '08'=>'August',
					'09'=>'September','10'=>'October',
					'11'=>'November','12'=>'December');
					echo 'Month<select name = "month">
					<option></option>';
					foreach($months as $num => $nm){
					echo "<option value='$num'>$nm</option>";
					}
					echo '</select>
					Year<select name = "year">
					<option></option>';
					for($i = date('Y')-70; $i <= date('Y')-5; $i++){
					echo "<option value='$i'>$i</option>";
					}
					echo'</select>';
					?>
					</td>
 </tr> 
 <tr> 
 <td>E_ID*</td> 
<td><input type="text" name="e_id" maxlength="30"></td> 
 <td>PRICE*</td> 
<td><input type="text" name="price" maxlength="20"></td> 
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