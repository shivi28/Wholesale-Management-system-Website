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

//Start the session to see if the user is authencticated user.
//session_start();
//Check if the user is authenticated first. Or else redirect to login page
//Connect to mysql server
$link = mysqli_connect('localhost', 'root', '');
//Check link to the mysql server
if(!$link){
die('Failed to connect to server: ' . mysqli_error($link));
}
//Select database
$db = mysqli_select_db($link,'project');
if(!$db){
die("Unable to select database");
}
//Create query
$qry1 = "SELECT * FROM ordering";
//Execute query1
$result1 = mysqli_query($link,$qry1);
//echo '<table width="99%">
//<tr><td><a href="main_page.php">home</a></td><td><a 
//href="log_out.php">Log Out </a></td></tr>
//</table>';
echo '<h1> ORDERING DETAILS ARE - </h1>';
/*Draw the table for SAMEOFFER*/
echo '<table border="2">
<th>ORDER ID</th>
<th>CUSTOMER ID</th>
<th>PRODUCT ID</th>
<th>QUANTITY</th>
<th>DATE</th>
<th>EMPLOYEE ID</th>
<th>PRICE</th>';
/*Show the rows in the fetched resultset one by one*/
while ($row = mysqli_fetch_assoc($result1))
{
echo '<tr>
<td>'.$row['ORDER_ID'].'</td>
<td>'.$row['CUST_ID'].'</td>
<td>'.$row['P_ID'].'</td>
<td>'.$row['QUAN'].'</td>
<td>'.$row['DATE'].'</td>
<td>'.$row['E_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
?>