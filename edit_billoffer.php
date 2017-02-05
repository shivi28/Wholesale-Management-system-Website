<?php 
//Start the session to see if the user is authenticated user. 
//session_start(); 
 require('menu.php'); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{ 
 
	
 
	// Code to be executed when 'Insert' is clicked. 
 	if ($_POST['submit'] == 'Insert')
 	{ 
 
		 //validation flag to check that all validations are done 
		 $validationFlag = true; 
		 
		 //Check all the required fields are filled 
		 if(!($_POST['MIN_BILL']))
		 { 
			 echo 'All the fields marked as * are compulsary.<br>'; 
			 $validationFlag = false; 
		 } 
		 else
		 { 
		 	 $MIN_BILL = $_POST['MIN_BILL']; 
			 
		 } 
 
		 if(!$_POST['DESCRIPTION']) 
		 	$DESCRIPTION = 'NULL'; 
		 else 
		 	$DESCRIPTION = $_POST['DESCRIPTION']; 
		  
		 
		 //If all validations are correct, connect to MySQL and execute the query 
		 if($validationFlag)
		 { 
			//Connect to mysql server
				$link = mysqli_connect('localhost', 'root', '');
				//Check link to the mysql server
				if(!$link)
				{
				die('Failed to connect to server: ' . mysqli_error($link));
				}
		 
			 //Select database 
			 $db = mysqli_select_db($link,'project'); 
			 if(!$db)
			 { 
			 	die("Unable to select database"); 
			 } 
			 
		 	//Create Insert query 
			 $query1 = "INSERT INTO billoffer 
			 (MIN_BILL,DESCRPTION) 
			 VALUES 
			('.$MIN_BILL.', '.$DESCRIPTION.')"; 
			 
		 	//Execute query 
		 	$results1 = mysqli_query($link,$query1); 
		 
			 //Check if query executes successfully 
			if($results1== FALSE) 
			 	echo mysqli_error($link) . '<br>'; 
			else 
			 	echo 'Data inserted successfully! '; 
		 }  
 	} 
 
	 // Code to be executed when 'Update' is clicked. 
	 if ($_POST['submit'] == 'Update')
	 { 
	 	if(!$_POST['MIN_BILL']) 
	 		echo 'Enter The min bill as it is the primary key.'; 
	 	else
	 	{ 
			$MIN_BILL=$_POST['MIN_BILL'];
			 $validationFlag = true; 
			 
			 $update = "UPDATE billoffer SET MIN_BILL = '$MIN_BILL'"; 
			 
			 if($_POST['DESCRIPTION'])
			 { 
				$DESCRIPTION=$_POST['DESCRIPTION'];
			 	$update = $update . ", DESCRPTION = '$DESCRIPTION'"; 
			 } 

			
		 
			 $update = $update . " WHERE MIN_BILL = '$MIN_BILL'"; 
			 
			 //If all validations are correct, connect to MySQL and execute the query 
			 if($validationFlag)
			 { 
			 	//Connect to mysql server
				$link = mysqli_connect('localhost', 'root', '');
				//Check link to the mysql server
				if(!$link)
				{
				die('Failed to connect to server: ' . mysqli_error($link));
				}
			 
				 //Select database 
				$db = mysqli_select_db($link,'project'); 
				 if(!$db)
				 { 
				 	die("Unable to select database"); 
				 } 
				 
				 //Execute query 
				$results3 = mysqli_query($link,$update); 
			 
				if($results3 == FALSE) 
			 		echo mysqli_error($link) . '<br>'; 
			 	else 
			 		echo 'UPDATED SUCCESSFULLY'; 
			 } 
 		} 
 	} 
	 // Code to be executed when 'Delete' is clicked. 
	 if ($_POST['submit'] == 'Delete')
	 { 
		 if(!$_POST['MIN_BILL']) 
		 	echo 'Enter the model id as it is the primary key.'; 
		 else
		 { 
			$MIN_BILL=$_POST['MIN_BILL'];
		 	$delete = "DELETE FROM billoffer WHERE MIN_BILL = '$MIN_BILL'"; 
		 
		 	//Connect to mysql server
				$link = mysqli_connect('localhost', 'root', '');
				//Check link to the mysql server
				if(!$link)
				{
				die('Failed to connect to server: ' . mysqli_error($link));
				}
		 
			 //Select database 
			 $db = mysqli_select_db($link,'project'); 
			 if(!$db)
			 { 
				 die("Unable to select database"); 
			 } 
			 
			 //Execute query 
			 $results4 = mysqli_query($link,$delete); 
			 
			 if($results4 == FALSE) 
				 echo mysqli_error($link) . '<br>'; 
			 else 
			 	echo 'Data deleted successfully'; 
		 } 
	 } 
} 
 
?> 