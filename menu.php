<?php
session_start();
$acc=$_SESSION['access'];
echo '<html>
<head>
<style>
/* unvisited link */
a:link {
    color: #4CAF50;
	text-decoration: none;
}
/* visited link */
a:visited {
    color: #4CAF50;
	text-decoration: none;
}
/* mouse over link */
a:hover {
    color: #008000;
	text-decoration: none;
}
/* selected link */
a:active {
    color: #008000;
	text-decoration: underline;
}
.lef{
	position: fixed;
    left: 10px;
	top: 20px;
}
.ryt{
	position: fixed;
    right: 10px;
	top: 20px;
}
body 
	{
		background-color: #00FFFF;
		background-image:url("green.jpg");
		 background-repeat: no-repeat;
		background-size:100%;
	}
</style>
</head>
<body><p class="lef">';
if($acc == 'ADMIN')
	echo '<a href="admin.html">HOME</a></p>';
else if($acc == 'GM')
	echo '<a href="gm.html">HOME</a></p>';
else if($acc == 'ACCOUNTANT')
	echo '<a href="accountant.html">HOME</a></p>';
else if($acc == 'STOCKER')
	echo '<a href="stocker.html">HOME</a></p>';
else if($acc == 'COUNTER BOY')
	echo '<a href="counter.html">HOME</a></p>';
else
	echo '<a href="offer.html">HOME</a></p>';
echo '<p class="ryt"><a href="log_out.php">LOG OUT</a></p>';
?>

