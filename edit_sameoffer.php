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
		 if(!($_POST['MODEL_ID']))
		 { 
			 echo 'All the fields marked as * are compulsary.<br>'; 
			 $validationFlag = false; 
		 } 
		 else
		 { 
		 	 $MODEL_ID = $_POST['MODEL_ID']; 
			 
		 } 
 
		 if(!$_POST['MIN_QUAN']) 
		 	$MIN_QUAN = 'NULL'; 
		 else 
		 	$MIN_QUAN = $_POST['MIN_QUAN']; 
		 if(!$_POST['EXTRA_QUAN']) 
		 	$EXTRA_QUAN = 'NULL'; 
		 else 
		 	$EXTRA_QUAN = $_POST['EXTRA_QUAN']; 
		 
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
			 $query1 = "INSERT INTO sameoffer 
			 (MODEL_ID,MIN_QUAN, EXTRA_QUAN) 
			 VALUES 
			('$MODEL_ID', '$MIN_QUAN', '$EXTRA_QUAN')"; 
			 
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
	 	if(!$_POST['MODEL_ID']) 
	 		echo 'Enter The model id as it is the primary key.'; 
	 	else
	 	{ 
			 $validationFlag = true; 
			  $MODEL_ID=$_POST['MODEL_ID'];
			 $update = "UPDATE sameoffer SET MODEL_ID = '$MODEL_ID'"; 
			 
			 if($_POST['MIN_QUAN'])
			 { 
				$MIN_QUAN=$_POST['MIN_QUAN'];
			 	$update = $update . ", MIN_QUAN = '$MIN_QUAN'"; 
			 } 

			 if($_POST['EXTRA_QUAN'])
			 
			 {
				 $EXTRA_QUAN=$_POST['EXTRA_QUAN'];
			 	$update = $update . ", EXTRA_QUAN = '$EXTRA_QUAN'"; 
			 } 
		 
			 $update = $update . " WHERE MODEL_ID = '$MODEL_ID'"; 
			 
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
		 if(!$_POST['MODEL_ID']) 
		 	echo 'Enter the model id as it is the primary key.'; 
		 else
		 { 
			 $MODEL_ID=$_POST['MODEL_ID'];
		 	$delete = "DELETE FROM sameoffer WHERE MODEL_ID = '$MODEL_ID'"; 
		 
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