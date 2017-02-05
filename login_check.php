<?php
//Collect POST values
$login = $_POST['login'];
$password = $_POST['password'];
if($login && $password){
//Connect to mysql server
$link = mysqli_connect('localhost', 'root', '');
//Check link to the mysql server
if(!$link) {
die('Failed to connect to server: ' . mysqli_error($link));
}
//Select database
$db = mysqli_select_db($link,'project');
if(!$db) {
die("Unable to select database");
}
//Create query
$qry="SELECT * FROM logins WHERE LOGIN_ID = '$login' AND PASSWRD = '$password'";
//Execute query
$result=mysqli_query($link,$qry);
//Check whether the query was successful or not
/*if($result){
$count = mysqli_num_rows($result);
}
else{
//Login failed
include('index.html');
echo '<center>Incorrect Username or Password !!!<center>';
exit();
}
//if query was successful it should fetch 1 matching record from the table.
if($count == 1){*/
//Login successful set session variables and redirect to main page.
session_start();
$_SESSION['IS_AUTHENTICATED'] = 1;
$_SESSION['USER_ID'] = $login;
$row = mysqli_fetch_assoc($result);
if(in_array("ADMIN", $row)){
	$acc="ADMIN";
	header('location:admin.html');}
else if(in_array("GM",$row)){
	$acc="GM";
	header('location:gm.html');}
else if(in_array("ACCOUNTANT",$row)){
	$acc="ACCOUNTANT";
	header('location:accountant.html');}
else if(in_array("STOCKER",$row)){
	$acc="STOCKER";
	header('location:stocker.html');}
else if(in_array("COUNTER BOY",$row)){
	$acc="COUNTER BOY";
	header('location:counter.html');}
else{
	$acc="OFFER BOY";
	header('location:offer.html');}
$_SESSION['access']= $acc;
/*else{
//Login failed
include('index.html');
echo '<center>Incorrect Username or Password !!!<center>';
exit();
}*/
}
else{
include('index.html');
echo '<center>Username or Password missing!!</center>';
exit();
}
?>