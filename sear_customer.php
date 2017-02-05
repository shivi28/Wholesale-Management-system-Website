<?php
//Start the session to see if the user is authenticated user.
//session_start();
//Check if the user is authenticated first. Or else redirect to login page
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
require('menu.php');
	if ($_POST['submit'] == 'Search'){ 
				$search = "SELECT * FROM customer WHERE AGE>10 ";
				if($_POST['custid']){ 
					$custid = $_POST['custid']; 
					$search = $search . "&& CUST_ID = '$custid'"; } 
				if($_POST['name']){ 
					$name = $_POST['name']; 
					$search = $search . "&& NAME = '$name'"; } 
				if($_POST['age']){ 
					$age = $_POST['age']; 
					$search = $search . "&& AGE = '$age'"; }
				if($_POST['email']){ 
					$email = $_POST['email']; 
					$search = $search . "&& EMAIL = '$email'"; } 
				if($_POST['phnno']){
					$phnno = $_POST['phnno']; 
					$search = $search . "&& PHN_NO = '$phnno'"; }
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
				//Execute query
				$results = mysqli_query($link,$search);  
				if($results == FALSE) 
					echo mysqli_error() . '<br>'; 
				else 
					echo mysqli_info($link); 
				} 
				echo '<h1 align="center">The Customer Details are - </h1>'; 
				//Draw the table for suppliers 
				echo '<table border="1" align="center"> 
				<th>CUST_ID</th> 
				<th>NAME</th> 
				<th>PHN_NO</th> 
				<th>E-MAIL</th> 
				<th>ADDRESS</th>
				<th>AGE</th>'; 
				//Show the rows in the fetched resultset one by one 
				while ($row = mysqli_fetch_assoc($results)) 
				{ 
				echo '<tr> 
				<td>'.$row['CUST_ID'].'</td> 
				<td>'.$row['NAME'].'</td> 
				<td>'.$row['PHN_NO'].'</td> 
				<td>'.$row['EMAIL'].'</td> 
				<td>'.$row['ADDRESS'].'</td> 
				<td>'.$row['AGE'].'</td>
				</tr>'; 
				}
				echo '</table>'; 
				//}
				?>
				