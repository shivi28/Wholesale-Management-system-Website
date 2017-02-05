<?php
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
//Start the session to see if the user is authenticated user.
//Check if the user is authenticated first. Or else redirect to login page
//if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
	$validationFlag=true;
	if ($_POST['submit'] == 'Search'){ 
			$search = "SELECT * FROM employee WHERE AGE>10 ";
			if($_POST['eid']){
				$eid = $_POST['eid'];
				$search = $search . "&& E_ID  = '$eid'";
			}	
			if($_POST['phnno']){
				$phnno = $_POST['phnno'];
				$search = $search . "&& PHN_NO = $phnno";
			}
			if($_POST['name']){
				$name = $_POST['name'];
				$search = $search . "&& NAME = '$name'";
			}
			
			if($_POST['salary']){
				$salary = $_POST['salary'];
				$search = $search . "&& SALARY = $salary";
			}
			

			if($_POST['designation']){
				$designaion = $_POST['designation'];
				$search = $search . "&& DESIGNATION = '$designation'";
			}
			
			if($_POST['age']){
				$age = $_POST['age'];
				$search = $search . " && AGE  = $age";
			}
			if($_POST['email']){
				$email = $_POST['email'];
				$search = $search . " && EMAIL  = '$email'";
			}
			
			if($validationFlag){
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
				
				//Execute query
				$results = mysqli_query($link,$search);
				
				if($results == FALSE) 
					echo mysqli_error($link) . '<br>'; 
				else 
					echo mysqli_info($link); 
			}
			echo '<h1> EMPLOYEE DETAILS ARE - </h1>';
/*Draw the table for SAMEOFFER*/
echo '<table border="2">
<th>EMPLOYEE_ ID</th>
<th>PHONE NUMBER</th>
<th>NAME</th>
<th>ADDRESS</th>
<th>SALARY</th>
<th>DATE OF BIRTH</th>
<th>SEX</th>
<th>DESIGNATION</th>
<th>AGE</th>
<th>EMAIL</th>
<th>DATE OF JOINING</th>';
/*Show the rows in the fetched resultset one by one*/
while ($row = mysqli_fetch_assoc($results))
{
echo '<tr>
<td>'.$row['E_ID'].'</td>
<td>'.$row['PHN_NO'].'</td>
<td>'.$row['NAME'].'</td>
<td>'.$row['ADDRESS'].'</td>
<td>'.$row['SALARY'].'</td>
<td>'.$row['DOB'].'</td>
<td>'.$row['SEX'].'</td>
<td>'.$row['DESIGNATION'].'</td>
<td>'.$row['AGE'].'</td>
<td>'.$row['EMAIL'].'</td>
<td>'.$row['DOJ'].'</td>
</tr>';
}
echo '</table>';
		}
//}
?>