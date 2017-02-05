<?php 
//Start the session to see if the user is authenticated user. 
 
	require('menu.php'); 
 
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
		 	 $DESCRIPTION = $_POST['DESCRIPTION']; 
		} 
 
		 
		 
 	 
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
			 $query = "INSERT INTO discount
			 (MODEL_ID,DESCRIPTION) 
			 VALUES 
			('$MODEL_ID', 
			'$DESCRIPTION')"; 
			 
		 	//Execute query 
		 	$results = mysqli_query($query); 
		 
			 //Check if query executes successfully 
			if($results == FALSE) 
			 	echo mysqli_error($link) . '<br>'; 
			else 
			 	echo 'Data inserted successfully! '; 
		 }  
 	} 
 
	 // Code to be executed when 'Update' is clicked. 
	 if ($_POST['submit'] == 'Update')
	 { 
	 	if(!$_POST['MODEL_ID']) 
	 		echo 'Enter the model id as it is the primary key.'; 
	 	else
	 	{ 
			 $validationFlag = true; 
			 $MODEL_ID = $_POST['MODEL_ID'];
			  
			 $update = "UPDATE discount SET MODEL_ID = '$MODEL_ID'"; 
			 
			 if($_POST['DESCRIPTION'])
			 { 
		 $DESCRIPTION = $_POST['DESCRIPTION'];
			 	$update = $update . ", DESCRIPTION= '$DESCRIPTION'"; 
			 } 
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
				$results1 = mysqli_query($link,$update); 
			 
				if($results1 == FALSE) 
			 		echo mysqli_error($link) . '<br>'; 
			 	else 
			 		echo 'DATA UPDATED'; 
			 } 
 		} 
	 // Code to be executed when 'Delete' is clicked. 
	 if ($_POST['submit'] == 'Delete')
	 { 
		 if(!$_POST['MODEL_ID']) 
		 	echo 'Enter MODEL ID as it is the primary key.'; 
		 else
		 { 
	 $MODEL_ID = $_POST['MODEL_ID'];
		 	$delete = "DELETE FROM discount WHERE MODEL_ID = '$MODEL_ID'"; 
		 
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
			 $results2 = mysqli_query($link,$delete); 
			 
			 if($results2 == FALSE) 
				 echo mysqli_error($link) . '<br>'; 
			 else 
			 	echo 'Data deleted successfully'; 
		 } 
	 }
	 
?> 