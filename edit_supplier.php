<?php 
//Start the session to see if the user is authenticated user. 

	require('menu.php'); 
 
	// Code to be executed when 'Insert' is clicked. 
 	if ($_POST['submit'] == 'Insert')
 	{ 
 
		 //validation flag to check that all validations are done 
		 $validationFlag = true; 
		 
		 //Check all the required fields are filled 
		 if(!($_POST['supp_id']&& $_POST['name']&&$_POST['ph_no']&&$_POST['email']&&$_POST['address']))
		 { 
			 echo 'All the fields marked as * are compulsory.<br>'; 
			 $validationFlag = false; 
		 } 
		 else
		 { 
		 	 $supp_id = $_POST['supp_id']; 
		 	 $name = $_POST['name'];
			 $ph_no = $_POST['ph_no']; 
			 $email = $_POST['email']; 
			 $address = $_POST['address']; 
			 
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
				if(!$db){
				die("Unable to select database");
				}
		 	//Create Insert query 
			 $query = "INSERT INTO supplier 
			 (SUPP_ID,NAME,PHN_NO,EMAIL,ADDRESS) 
			 VALUES ('$supp_id','$name',$ph_no,'$email','$address')"; 
			 
		 	//Execute query 
		 	$results = mysqli_query($link,$query); 
		 
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
	 	if(!$_POST['supp_id']) 
	 		echo 'Enter the supplier id as it is the primary key.'; 
	 	else
	 	{ 
			 $validationFlag = true; 
			 $supp_id = $_POST['supp_id'];
			 $update = "UPDATE supplier SET SUPP_ID = '$supp_id'"; 
			 
			 if($_POST['name'])
			 { 
		 $name = $_POST['name'];
			 	$update = $update . ",NAME= '$name'"; 
			 } 
			 if($_POST['ph_no'])
			 { 
		 $ph_no = $_POST['ph_no'];
			 	$update = $update . ",PHN_NO= '$ph_no'"; 
			 }
			if($_POST['email'])
			 { 
		 $email = $_POST['email']; 
			 	$update = $update . ",EMAIL= '$email'"; 
			 }
			if($_POST['address'])
			 { 
		 $address = $_POST['address'];
			 	$update = $update . ",ADDRESS= '$address'"; 
			 }
			 $update = $update . " WHERE SUPP_ID = '$supp_id'";
		}
			//If all validations are correct, connect to MySQL and execute the query 
			 if($validationFlag)
			 { 
			 	 $link = mysqli_connect('localhost', 'root', ''); 
 
				//Check link to the mysql server 
				if(!$link) { 
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
		 if(!$_POST['supp_id']) 
		 	echo 'Enter MODEL ID as it is the primary key.'; 
		 else
		 { 
			$supp_id = $_POST['supp_id'];
		 	$delete = "DELETE FROM supplier WHERE SUPP_ID = '$supp_id'"; 
		 
		 	 $link = mysqli_connect('localhost', 'root', ''); 
 
			//Check link to the mysql server 
			if(!$link) { 
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