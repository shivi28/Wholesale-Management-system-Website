<?php 
 
	require('menu.php'); 
 
	// Code to be executed when 'Insert' is clicked. 
 	if ($_POST['submit'] == 'Insert')
 	{ 
 
		 //validation flag to check that all validations are done 
		 $validationFlag = true; 
		 
		 //Check all the required fields are filled 
		 if(!($_POST['order_id'] && $_POST['cust_id'] && $_POST['p_id'] && $_POST['quan'] && $_POST['year'] && $_POST['month'] && $_POST['day'] && $_POST['e_id'] && $_POST['price']))
		 { 
			 echo 'All the fields marked as * are compulsory.<br>'; 
			 $validationFlag = false; 
		 } 
		 else
		 { 
		 	 $order_id = $_POST['order_id']; 
		 	 $cust_id = $_POST['cust_id']; 
			 $p_id = $_POST['p_id']; 
			 $quan = $_POST['quan'];
			 $date = "'".$_POST['year'].'-'.$_POST['month']. '-' .$_POST['day']."'";
			 $e_id = $_POST['e_id'];
			 $price = $_POST['price'];
			 
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
			 $query = "INSERT INTO ordering
			 (ORDER_ID,CUST_ID,P_ID, QUAN, DATE, E_ID, PRICE) 
			 VALUES 
			('$order_id', '$cust_id','$p_id','$quan',$date,'$e_id','$price')"; 
			 
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
	 	if(!$_POST['order_id']) 
	 		echo 'Enter order_id as it is the primary key.'; 
	 	else if(!$_POST['p_id']) 
	 		echo 'Enter p_id as it is the primary key.'; 
		else
	 	{ 
			 $validationFlag = true; 
			 $order_id= $_POST['order_id'];
			 $p_id= $_POST['p_id'];
			 
			 
			 $update = "UPDATE ordering SET ORDER_ID = '$order_id' && p_id = '$p_id'"; 
			 
			 if($_POST['CUST_ID'])
			 { 
				$cust_id=$_POST['CUST_ID'];
			 	$update = $update . ", CUST_ID` = '$cust_id'"; 
			 } 
		 
			 if($_POST['quan'])
			 { 
				$quan=$_POST['quan'];
			 	$update = $update . ", QUAN` = '$quan'"; 
			 } 
			 
			if($_POST['year'] && $_POST['month'] && $_POST['day']){
				$date = "'".$_POST['year'].'-'.$_POST['month']. '-' .$_POST['day']."'"; 
				$update = $update . ", DATE = $date";
				} 
			 if($_POST['e_id'])
			 { 
				$e_id=$_POST['e_id'];
			 	$update = $update . ", E_ID = '$e_id'"; 
			 } 
			 
			 if($_POST['price'])
			 { 
				$price=$_POST['price'];
			 	$update = $update . ", PRICE = '$price'"; 
			 } 
			 
			 $update = $update . " WHERE ORDER_ID = '$order_id' && P_ID = 'p_id'"; 
			 
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
			if(!$_POST['order_id'])
			echo 'Enter the id of the order as it is the primary key.';
			elseif(!$_POST['p_id'])
			echo 'Enter the id of the product as it is the primary key.';
			else{
			$order_id = $_POST['order_id'];
			$p_id = $_POST['p_id'];
			
			$delete = "DELETE FROM ordering WHERE ORDER_ID = '$order_id' && P_ID = '$p_id'";
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