<?php 
//Start the session to see if the user is authenticated user. 
//Check if the user is authenticated first. Or else redirect to login page 
require('menu.php'); 
// Code to be executed when 'Insert' is clicked.
 if ($_POST['submit'] == 'Insert'){ 
 //validation flag to check that all validations are done
 $validationFlag = true; 
 //Check all the required fields are filled 
 if(!($_POST['modelid'] && $_POST['quantity'])){
	 echo 'All the fields marked as * are compulsory.<br>';
	 $validationFlag = false; 
	} 
 else{ 
 $modelid = $_POST['modelid']; 
 $quantity= $_POST['quantity'];
 } 
	//If all validations are correct, connect to MySQL and execute the query 
	if($validationFlag){
		//Connect to mysql server
		$link = mysqli_connect('localhost', 'root', ''); 
		//Check link to the mysql server 
		if(!$link){ die('Failed to connect to server: ' . mysqli_error($link)); } 
		//Select database 
		$db = mysqli_select_db($link,'project'); 
		if(!$db){ die("Unable to select database"); }
		//Create Insert query
		$query = "INSERT INTO STOCK (MODEL_ID, QUANTITY) VALUES ('$modelid', '$quantity')"; 
		//Execute query 
		$results = mysqli_query($link,$query);
		//Check if query executes successfully 
		if($results == FALSE)
			echo mysqli_error() . '<br>'; 
		else 
			echo 'Data inserted successfully! '; 
		} 
} 
		// Code to be executed when 'Update' is clicked. 
		if ($_POST['submit'] == 'Update'){
			if(!$_POST['modelid']) 
				echo 'Enter the Model ID as it is the primary key.'; 
			else{ 
				$validationFlag = true; 
				$modelid = $_POST['modelid'];
				$update = "UPDATE STOCK SET MODEL_ID = '$modelid'";
				if($_POST['quantity']){ 
					$quantity = $_POST['quantity']; 
					$update = $update . ", QUANTITY = '$quantity'"; }  
				$update = $update . " WHERE MODEL_ID = '$modelid'"; 
				//If all validations are correct, connect to MySQL and execute the query 
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
				$results = mysqli_query($link,$update); 
				if($results == FALSE) 
					echo mysqli_error($link) . '<br>'; 
				else 
					echo mysqli_info($link); 
				} 
			} 
		} 
		// Code to be executed when 'Delete' is clicked. 
			if ($_POST['submit'] == 'Delete'){
					if(!$_POST['modelid']) 
						echo 'Enter the Model ID as it is the primary key.'; 
					else{ 
						$modelid = $_POST['modelid']; 
						$delete = "DELETE FROM STOCK WHERE MODEL_ID = $modelid"; 
						//Connect to mysql server
						$link = mysqli_connect('localhost', 'root', ''); 
						//Check link to the mysql server 
						if(!$link){ die('Failed to connect to server: ' . mysqli_error()); } 
						//Select database
						$db = mysql_select_db($link,'project'); 
						if(!$db){ die("Unable to select database"); }
						//Execute query 
						$results = mysqli_query($link,$delete); 
						if($results == FALSE) 
							echo mysqli_error() . '<br>'; 
						else 
							echo 'Data deleted successfully'; 
					}
				}
?>