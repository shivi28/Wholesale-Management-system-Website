
<?php
//Start the session to see if the user is authenticated user.


//Check if the user is
	
	require('menu.php');
	
	// Code to be executed when 'Insert' is clicked.
	if ($_POST['submit'] == 'Insert'){			

		//validation flag to check that all validations are done
		$validationFlag = true;
		
		//Check all the required fields are filled
		if (!($_POST['eid'] && $_POST['phnno'] &&  $_POST['name'] && $_POST['address'] && $_POST['salary'] && $_POST['dobyear'] && $_POST['dobmonth'] && $_POST['dobday'] &&  $_POST['dojyear'] && $_POST['dojmonth'] && $_POST['dojday'] && $_POST['sex'] && $_POST['designation'] && $_POST['age'] && $_POST['email'] )){
			echo 'All the fields marked as * are compulsory.<br>';
			$validationFlag = false;
		}
		else{
			$eid = $_POST['eid'];
			$phnno = $_POST['phnno'];
			$name = $_POST['name'];
			$address =$_POST['address'];
			$salary =$_POST['salary'];
			$dob = "'".$_POST['dobyear'] . '-' . $_POST['dobmonth'] . '-' . $_POST['dobday']."'";
$doj = "'".$_POST['dojyear'] . '-' . $_POST['dojmonth'] . '-' . $_POST['dojday']."'";
			
			$sex = $_POST['sex'];
			$designation = $_POST['designation'];
			$age = $_POST['age'];
			$email =$_POST['email'];
			
		}		
									

		//If all validations are correct, connect to MySQL and execute the query
		if($validationFlag){
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
			
			//Create Insert query
			$query = "INSERT INTO employee
						(E_ID,PHN_NO,NAME,ADDRESS,SALARY,DOB,SEX,DESIGNATION,AGE,EMAIL,DOJ) 
						VALUES 
						('$eid',$phnno,'$name', '$address', $salary,$dob,'$sex','$designation',$age,'$email',$doj)";
			
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
		if(!$_POST['eid'])
			echo 'Enter the ID of the employee as it is the primary key.';
		else{
			$validationFlag = true;
			
			$eid = $_POST['eid'];
			
			$update = "UPDATE employee SET E_ID = '$eid'";
			
			if($_POST['eid']){
				$eid = $_POST['eid'];
				$update = $update . ",E_ID  = '$eid'";
}	
			if($_POST['phnno']){
				$phnno = $_POST['phnno'];
				$update = $update . ", PHN_NO = $phnno";
			}
			if($_POST['name']){
				$name = $_POST['name'];
				$update = $update . ", NAME = '$name'";
			}
			
			if($_POST['address']){
				$address = $_POST['address'];
				$update = $update . ", ADDRESS = '$address'";
			}
			
			if($_POST['salary']){
				$salary = $_POST['salary'];
				$update = $update . ", SALARY = $salary";
			}
			
			if($_POST['dobyear'] && $_POST['dobmonth'] && $_POST['dobday']){
$dob = "'".$_POST['dobyear'].'-'.$_POST['dobmonth']. '-' .$_POST['dobday']."'"; 
$update = $update . ", DOB = $dob";
}
if($_POST['dojyear'] && $_POST['dojmonth'] && $_POST['dojday']){
$doj = "'".$_POST['dojyear'].'-'.$_POST['dojmonth']. '-' .$_POST['dojday']."'"; 
$update = $update . ", DOJ = $doj";
}
	
			if($_POST['sex']){
				$sex = $_POST['sex'];
				$update = $update . ",SEX  = '$sex'";
			}
			

			if($_POST['designation']){
				$designaion = $_POST['designation'];
				$update = $update . ", DESIGNATION = '$designation'";
			}
			
			if($_POST['age']){
				$age = $_POST['age'];
				$update = $update . ",AGE  = $age";
			}
			if($_POST['email']){
				$email = $_POST['email'];
				$update = $update . ",EMAIL  = '$email'";
			}
			
			$update = $update . " WHERE E_ID = '$eid'";
		
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
					echo "Updated successfully";
			}
		}
	}
		// Code to be executed when 'Delete' is clicked.
	if ($_POST['submit'] == 'Delete'){
		if(!$_POST['eid'])
			echo 'Enter the ID of the Employee as it is the primary key.';
		else{
			$eid = $_POST['eid'];
			
			$delete = "DELETE FROM EMPLOYEE WHERE E_ID = '$eid'";
			
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
			$results = mysqli_query($link,$delete);
			
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo 'Data deleted successfully';
		}
	}


?>

