<?php 
//Start the session to see if the user is authenticated user. 
//Check if the user is authenticated first. Or else redirect to login page 
require('menu.php'); 
// Code to be executed when 'Insert' is clicked.
 if ($_POST['submit'] == 'Insert'){ 
 //validation flag to check that all validations are done
 $validationFlag = true; 
 //Check all the required fields are filled 
 if(!($_POST['modelid'] && $_POST['suppid'] && $_POST['quan'])){
	 echo 'All the fields marked as * are compulsory.<br>';
	 $validationFlag = false; 
	} 
 else{ 
 $suppid = $_POST['suppid'];
 $modelid = $_POST['modelid']; 
 $quan= "'".$_POST['quan']."'";
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
		$query = "INSERT INTO SUPPLYING (SUPP_ID,MODEL_ID, QUAN) VALUES ('$suppid', '$modelid', $quan)"; 
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
		if ($_POST['submit'] == 'Update'){
			if(!$_POST['suppid']) 
				echo 'Enter the Supplier ID as it is the primary key.'; 
			else if(!$_POST['modelid']) 
				echo 'Enter the Model ID as it is the primary key.'; 
			else{ 
				$validationFlag = true; 
				$modelid = $_POST['modelid'];
				$suppid = $_POST['suppid'];
				$update = "UPDATE STOCK SET SUPP_ID = '$suppid'";
				if($_POST['quan']){ 
					$quan = $_POST['quan']; 
					$update = $update . ", QUAN = $quan"; } 
				if($_POST['modelid']){ 
					$modelid = $_POST['modelid']; 
					$update = $update . ", MODEL_ID = '$modelid'"; } 
				$update = $update . " WHERE SUPP_ID = '$suppid'"; 
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
					if(!$_POST['suppid']) 
						echo 'Enter the Supplier ID as it is part of the primary key.';
					else if(!$_POST['modelid']) 
						echo 'Enter the Model ID as it is part of the primary key.'; 
					else{ 
						$modelid = $_POST['modelid']; 
						$suppid = $_POST['suppid'];
						$delete = "DELETE FROM STOCK WHERE MODEL_ID = '$modelid' && SUPP_ID = '$suppid'"; 
						//Connect to mysql server
						$link = mysqli_connect('localhost', 'root', ''); 
						//Check link to the mysql server 
						if(!$link){ die('Failed to connect to server: ' . mysqli_error()); } 
						//Select database
						$db = mysqli_select_db($link,'project'); 
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