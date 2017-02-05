<?php 
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
//Start the session to see if the user is authenticated user. 
require('menu.php'); 
//Connect to mysql server 
$link = mysqli_connect('localhost', 'root', ''); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysqli_error()); 
} 
//Select database 
$db = mysqli_select_db($link,'project'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Create query 
$qry = 'SELECT * FROM stock'; 
//Execute query 
$result = mysqli_query($link,$qry); 
//Draw the table for Stock 
echo '<h1 class="center">Stock details are - </h1>';
echo '<table border="1" class="fixed" > 
<th>MODEL_ID</th> 
<th>QUANTITY</th>'; 
//Show the rows in the fetched resultset one by one 
while ($row = mysqli_fetch_assoc($result)) 
{ 
echo '<tr> 
<td>'.$row['MODEL_ID'].'</td> 
<td>'.$row['QUANTITY'].'</td> 
</tr>'; 
} 
echo '</table>'; 
?>
