<?php
	
	require('menu.php');
	
	// Code to be executed when 'Insert' is clicked.
	if ($_POST['submit'] == 'Insert'){			

		//validation flag to check that all validations are done
		$validationFlag = true;
		
		//Check all the required fields are filled
		if (!($_POST['custid'] && $_POST['name'] &&  $_POST['phnno'] && $_POST['email'] && $_POST['address'] && $_POST['age'])){
			echo 'All the fields marked as * are compulsory.<br>';
			$validationFlag = false;
		}
		else{
			$custid = $_POST['custid'];
			$name = $_POST['name'];
			$phnno = $_POST['phnno'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$age = $_POST['age'];
		}		
									

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
			
			//Create Insert query
			$query = "INSERT INTO customer
						(CUST_ID,NAME,PHN_NO,EMAIL,ADDRESS,AGE) 
						VALUES 
						('$custid','$name',$phnno, '$email', '$address', $age)";
			
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
		if(!$_POST['custid'])
			echo 'Enter the ID of the customer as it is the primary key.';
		else{
			$validationFlag = true;
			
			$custid = $_POST['custid'];
			
			$update = "UPDATE customer SET CUST_ID = '$custid'";
			
			if($_POST['name']){
				$name = $_POST['name'];
				$update = $update . ", NAME = '$name'";
			}
			if($_POST['phnno']){
				$phnno = $_POST['phnno'];
				$update = $update . ", PHN_NO = '$phnno'";
			}

			if($_POST['email']){
				$email = $_POST['email'];
				$update = $update . ", EMAIL = '$email'";
			}			
			
			if($_POST['address']){
				$address = $_POST['address'];
				$update = $update . ", ADDRESS = '$address'";
			}

			

			if($_POST['age']){
				$age = $_POST['age'];
				$update = $update . ", AGE = '$age'";
			}
			


			
			
			$update = $update . " WHERE CUST_ID = '$custid'";
		
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
				$results = mysqli_query($update);
				
				if($results == FALSE)
					echo mysqli_error() . '<br>';
				else
					echo "Updated successfully";
			}
		}
	}
		// Code to be executed when 'Delete' is clicked.
	if ($_POST['submit'] == 'Delete'){
		if(!$_POST['custid'])
			echo 'Enter the ID of the Customer as it is the primary key.';
		else{
			$custid = $_POST['custid'];
			
			$delete = "DELETE FROM CUSTOMER WHERE CUST_ID = '$custid'";
			
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
			$results = mysqli_query($delete);
			
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo 'Data deleted successfully';
		}
	}
?>

