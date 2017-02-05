<?php
//Start the session to see if the user is authencticated user.
session_start();
//Check if the user is authenticated first. Or else redirect to login page
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
//Connect to mysql server
$link = mysqli_connect('localhost', 'root', '');
//Check link to the mysql server
if(!$link){
die('Failed to connect to server: ' . mysql_error());
}
//Select database
$db = mysqli_select_db($link,'project');
if(!$db){
die("Unable to select database");
}
$table = $_POST['table'];
if($table=='customers')
{ 
	<a href="view_customers.php">Click here to view employees details</a><br>
	<a href="register_customers.php">Click here to edit employees details</a><br>
	<a href="search_customers.php">Click here to search employees details</a><br>
}
if($table=='products')
{ 
	<a href="table_list.php">Click here to view employees details</a><br>
	<a href="table_list_edit.php">Click here to edit employees details</a><br>
	<a href="table_list_search.php">Click here to search employees details</a><br>
}
if($table=='offers')
{ 
	<a href="view_offers.php">Click here to view employees details</a><br>
	<a href="register_offers.php">Click here to edit employees details</a><br>
}
if($table=='discounts')
{ 
	<a href="view_discounts.php">Click here to view employees details</a><br>
	<a href="register_discounts.php">Click here to edit employees details</a><br>
}
if($table=='ordering')
{ 
	<a href="view_ordering.php">Click here to view employees details</a><br>
	<a href="register_ordering.php">Click here to edit employees details</a><br>
}
}
else{
header('location:login_form.php');
exit();
}
?>