<?php
echo '<html><head><style>
table {
	align : center;
    border-collapse: collapse;
    width: 100%;
}
body {
    background-image:url("green.jpg");
	background-repeat: no-repeat;
	background-size:100%;
}
th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
h1{
	align: center;
}
.center {
	position: fixed;
	top: 20%;
	left: 25%;
    width: 50%;
    border: 3px solid #73AD23;
    padding: 10px;
}
.fixed {
    position: fixed;
	top: 40%;
	left: 15%;
    width: 70%;
    border: 3px solid #73AD21;
}
</style>
</head>';
//Start the session to see if the user is authencticated user.
session_start();
//Check if the user is authenticated first. Or else redirect to login page
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
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
//Create query
$q1 = 'SELECT MODEL_ID,PRICE FROM mobiles';
$q2 = 'SELECT MODEL_ID,PRICE FROM laptop';
$q3 = 'SELECT MODEL_ID,PRICE FROM washingmach';
$q4 = 'SELECT MODEL_ID,PRICE FROM ac';
$q5 = 'SELECT MODEL_ID,PRICE FROM fridge';
$q6 = 'SELECT MODEL_ID,PRICE FROM tv';
$q7 = 'SELECT MODEL_ID,PRICE FROM oven';
$q8 = 'SELECT MODEL_ID,PRICE FROM skincare';
$q9 = 'SELECT MODEL_ID,PRICE FROM haircare';
$q10 = 'SELECT MODEL_ID,PRICE FROM nailpolish';
$q11 = 'SELECT MODEL_ID,PRICE FROM kajal';
$q12 = 'SELECT MODEL_ID,PRICE FROM lipstick';
$q13 = 'SELECT MODEL_ID,PRICE FROM sofa';
$q14 = 'SELECT MODEL_ID,PRICE FROM bed';
$q15 = 'SELECT MODEL_ID,PRICE FROM diningtable';
$q16 = 'SELECT MODEL_ID,PRICE FROM tvcabinet';
$q17 = 'SELECT MODEL_ID,PRICE FROM shoeracks';
$q18 = 'SELECT MODEL_ID,PRICE FROM pen';
$q19 = 'SELECT MODEL_ID,PRICE FROM books';
$q20 = 'SELECT MODEL_ID,PRICE FROM calculator';
$q21 = 'SELECT MODEL_ID,PRICE FROM folders';
$q22 = 'SELECT MODEL_ID,PRICE FROM cardholder';
$q23 = 'SELECT MODEL_ID,PRICE FROM pads';
$q24 = 'SELECT MODEL_ID,PRICE FROM gloves';
$q25 = 'SELECT MODEL_ID,PRICE FROM helmet';
$q26 = 'SELECT MODEL_ID,PRICE FROM guard';
$q27 = 'SELECT MODEL_ID,PRICE FROM sportshoes';
$q28 = 'SELECT MODEL_ID,PRICE FROM bat';
$q29 = 'SELECT MODEL_ID,PRICE FROM ball';
$q30 = 'SELECT MODEL_ID,PRICE FROM fruits';
$q31 = 'SELECT MODEL_ID,PRICE FROM vegetables';
$q32 = 'SELECT MODEL_ID,PRICE FROM meat';
$q33 = 'SELECT MODEL_ID,PRICE FROM packeditem';
$q34 = 'SELECT MODEL_ID,PRICE FROM clothing';
//Execute query
//**********************************************************************************//
$result1 = mysqli_query($link,$q1);
echo '<table width="99%">
<tr><td><a href="main_page.php">Back to main Page</a></td><td><a 
href="log_out.php">Log Out </a></td></tr>
</table>';
echo '<h1 class="center">The mobiles Details are - </h1>';
//Draw the table for mobiles
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result1))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//**********************************************************************************//
$result2 = mysqli_query($link,$q2);
echo '<h1 class="center">The laptop Details are - </h1>';
//Draw the table for laptop
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result2))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result3 = mysqli_query($link,$q3);
echo '<h1 class="center">The washingmech Details are - </h1>';
//Draw the table for washingmech
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result3))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result4 = mysqli_query($link,$q4);
echo '<h1 class="center">The ac Details are - </h1>';
//Draw the table for ac
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result4))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result5 = mysqli_query($link,$q5);
echo '<h1 class="center">The fridge Details are - </h1>';
//Draw the table for fridge
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result5))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result6 = mysqli_query($link,$q6);
echo '<h1 class="center">The television Details are - </h1>';
//Draw the table for tv
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result6))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result7 = mysqli_query($link,$q7);
echo '<h1 class="center">The oven Details are - </h1>';
//Draw the table for oven
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result7))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result8 = mysqli_query($link,$q8);
echo '<h1 class="center">The skincare Details are - </h1>';
//Draw the table for skincare
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result8))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result9 = mysqli_query($link,$q9);
echo '<h1 class="center">The haircare Details are - </h1>';
//Draw the table for haircare
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result9))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result10 = mysqli_query($link,$q10);
echo '<h1 class="center">The nailpolish Details are - </h1>';
//Draw the table for nailpolish
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result10))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result11 = mysqli_query($link,$q11);
echo '<h1 class="center">The kajal Details are - </h1>';
//Draw the table for kajal
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result11))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result12 = mysqli_query($link,$q12);
echo '<h1 class="center">The lipstick Details are - </h1>';
//Draw the table for lipstick
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result12))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result13 = mysqli_query($link,$q13);
echo '<h1 class="center">The sofa Details are - </h1>';
//Draw the table for sofa
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result13))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result14 = mysqli_query($link,$q14);
echo '<h1 class="center">The bed Details are - </h1>';
//Draw the table for bed
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result14))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result15 = mysqli_query($link,$q15);
echo '<h1 class="center">The diningtable Details are - </h1>';
//Draw the table for diningtable
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result15))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result16 = mysqli_query($link,$q16);
echo '<h1 class="center">The tvcabinet Details are - </h1>';
//Draw the table for tvcabinet
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result16))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result17 = mysqli_query($link,$q17);
echo '<h1 class="center">The shoeracks Details are - </h1>';
//Draw the table for shoeracks
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result17))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result18 = mysqli_query($link,$q18);
echo '<h1 class="center">The pen Details are - </h1>';
//Draw the table for pen
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result18))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result19 = mysqli_query($link,$q19);
echo '<h1 class="center">The books Details are - </h1>';
//Draw the table for books
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result19))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result20 = mysqli_query($link,$q20);
echo '<h1 class="center">The calculator Details are - </h1>';
//Draw the table for calculator
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result20))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result21 = mysqli_query($link,$q21);
echo '<h1 class="center">The folders Details are - </h1>';
//Draw the table for folders
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result21))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result22 = mysqli_query($link,$q22);
echo '<h1 class="center">The cardholder Details are - </h1>';
//Draw the table for cardholder
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result22))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result23 = mysqli_query($link,$q23);
echo '<h1 class="center">The pads Details are - </h1>';
//Draw the table for pads
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result23))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result24 = mysqli_query($link,$q24);
echo '<h1 class="center">The gloves Details are - </h1>';
//Draw the table for gloves
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result24))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result25 = mysqli_query($link,$q25);
echo '<h1 class="center">The helmet Details are - </h1>';
//Draw the table for helmet
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result25))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result26 = mysqli_query($link,$q26);
echo '<h1 class="center">The guard Details are - </h1>';
//Draw the table for guard
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result26))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result27 = mysqli_query($link,$q27);
echo '<h1 class="center">The sportshoes Details are - </h1>';
//Draw the table for sportshoes
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result27))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result28 = mysqli_query($link,$q28);
echo '<h1 class="center">The bat Details are - </h1>';
//Draw the table for bat
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result28))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result29 = mysqli_query($link,$q29);
echo '<h1 class="center">The ball Details are - </h1>';
//Draw the table for ball
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result29))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result30 = mysqli_query($link,$q30);
echo '<h1 class="center">The fruits Details are - </h1>';
//Draw the table for fruits
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result30))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result31 = mysqli_query($link,$q31);
echo '<h1 class="center">The vegetables Details are - </h1>';
//Draw the table for vegetables
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result31))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result32 = mysqli_query($link,$q32);
echo '<h1 class="center">The meat Details are - </h1>';
//Draw the table for meat
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result32))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result33 = mysqli_query($link,$q33);
echo '<h1 class="center">The packeditem Details are - </h1>';
//Draw the table for packeditem
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result33))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';
//***********************************************************************************//
$result34 = mysqli_query($link,$q34);
echo '<h1 class="center">The clothing Details are - </h1>';
//Draw the table for clothing
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result34))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
</tr>';
}
echo '</table>';

}
else{
header('location:login_form.php');
exit();
}
?>