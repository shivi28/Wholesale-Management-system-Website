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
require('menu.php');
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
$table = $_POST['table'];
//******************************************************************************************//
if($table=='mobiles')
{
//Create query
$q1 = 'SELECT * FROM mobiles';
//Execute query
$result1 = mysqli_query($link,$q1);

echo '<h1 class="center">The mobiles Details are - </h1>';
//Draw the table for mobiles
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>COMPANY</th>
<th>MODEL</th>
<th>NAME</th>
<th>CAMERA</th>
<th>COLOR</th>
<th>WARRANTY</th>
<th>DISPLAY</th>
<th>BATTERY</th>
<th>PRICE</th>
<th>INT_MEMORY</th>
<th>OUT_MEMORY</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result1))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['COMPANY'].'</td>
<td>'.$row['MODEL'].'</td>
<td>'.$row['NAME'].'</td>
<td>'.$row['CAMERA'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['WARRANTY'].'</td>
<td>'.$row['DISPLAY'].'</td>
<td>'.$row['BATTERY'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['INT_MEMORY'].'</td>
<td>'.$row['EXT_MEMORY'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='laptop')
{
//Create query
$q2 = 'SELECT * FROM laptop';
//Execute query
$result2 = mysqli_query($link,$q2);

echo '<h1 class="center">The laptop Details are - </h1>';
//Draw the table for laptop
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>COMPANY</th>
<th>MODEL</th>
<th>NAME</th>
<th>CAMERA</th>
<th>COLOR</th>
<th>WARRANTY</th>
<th>DISPLAY</th>
<th>BATTERY</th>
<th>PRICE</th>
<th>CORE</th>
<th>RAM</th>
<th>HDD</th>
<th>OS</th>
<th>HDMI</th>
<th>USB</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result2))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['COMPANY'].'</td>
<td>'.$row['MODEL'].'</td>
<td>'.$row['NAME'].'</td>
<td>'.$row['CAMERA'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['WARRANTY'].'</td>
<td>'.$row['DISPLAY'].'</td>
<td>'.$row['BATTERY'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['CORE'].'</td>
<td>'.$row['RAM'].'</td>
<td>'.$row['HDD'].'</td>
<td>'.$row['OS'].'</td>
<td>'.$row['HDMI'].'</td>
<td>'.$row['USB'].'</td>
</tr>';
}
echo '</table>';
}
//*********************************************************************************//
if($table=='washingmach')
{
//Create query
$q3 = 'SELECT * FROM washingmach';
//Execute query
$result3 = mysqli_query($link,$q3);

echo '<h1 class="center">The washingmach Details are - </h1>';
//Draw the table for washingmach
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>COMPANY</th>
<th>MODEL</th>
<th>PRICE</th>
<th>COLOR</th>
<th>WARRANTY</th>
<th>DIM</th>
<th>DIGITAL</th>
<th>CONTROLTYPE</th>
<th>LOADTYPE</th>
<th>METHOD</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result3))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['COMPANY'].'</td>
<td>'.$row['MODEL'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['WARRANTY'].'</td>
<td>'.$row['DIM'].'</td>
<td>'.$row['DIGITAL'].'</td>
<td>'.$row['CONTROLTYPE'].'</td>
<td>'.$row['LOADTYPE'].'</td>
<td>'.$row['METHOD'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='ac')
{
//Create query
$q4 = 'SELECT * FROM ac';
//Execute query
$result4 = mysqli_query($link,$q4);

echo '<h1 class="center">The AC Details are - </h1>';
//Draw the table for AC
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>COMPANY</th>
<th>MODEL</th>
<th>PRICE</th>
<th>COLOR</th>
<th>WARRANTY</th>
<th>DIM</th>
<th>TYPE</th>
<th>CAPACITY</th>
<th>ENERGYRATING</th>
<th>WEIGHT</th>
<th>POWERREQ</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result4))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['COMPANY'].'</td>
<td>'.$row['MODEL'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['WARRANTY'].'</td>
<td>'.$row['DIM'].'</td>
<td>'.$row['TYPE'].'</td>
<td>'.$row['CAPACITY'].'</td>
<td>'.$row['ENERGYRATING'].'</td>
<td>'.$row['WEIGHT'].'</td>
<td>'.$row['POWERREQ'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='fridge')
{
//Create query
$q5 = 'SELECT * FROM fridge';
//Execute query
$result5 = mysqli_query($link,$q5);

echo '<h1 class="center">The FRIDGE Details are - </h1>';
//Draw the table for FRIDGE
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>COMPANY</th>
<th>MODEL</th>
<th>PRICE</th>
<th>COLOR</th>
<th>WARRANTY</th>
<th>DIM</th>
<th>TYPE</th>
<th>TECHNOLOGY</th>
<th>CAPACITY</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result5))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['COMPANY'].'</td>
<td>'.$row['MODEL'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['WARRANTY'].'</td>
<td>'.$row['DIM'].'</td>
<td>'.$row['TYPE'].'</td>
<td>'.$row['TECHNOLOGY'].'</td>
<td>'.$row['CAPACITY'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='tv')
{
//Create query
$q6 = 'SELECT * FROM tv';
//Execute query
$result6 = mysqli_query($link,$q6);

echo '<h1 class="center">The TV Details are - </h1>';
//Draw the table for TV
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>COMPANY</th>
<th>MODEL</th>
<th>PRICE</th>
<th>COLOR</th>
<th>WARRANTY</th>
<th>DIM</th>
<th>RESOLUTION</th>
<th>FEATURES</th>
<th>SCREENTYPE</th>
<th>CONNECTIVITY</th>
<th>HDMI</th>
<th>USB</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result6))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['COMPANY'].'</td>
<td>'.$row['MODEL'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['WARRANTY'].'</td>
<td>'.$row['DIM'].'</td>
<td>'.$row['RESOLUTION'].'</td>
<td>'.$row['FEAUTRES'].'</td>
<td>'.$row['SCREENTYPE'].'</td>
<td>'.$row['CONNECTIVITY'].'</td>
<td>'.$row['HDMI'].'</td>
<td>'.$row['USB'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='oven')
{
//Create query
$q7 = 'SELECT * FROM oven';
//Execute query
$result7 = mysqli_query($link,$q7);
 
echo '<h1 class="center">The OVEN Details are - </h1>';
//Draw the table for OVEN
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>COMPANY</th>
<th>MODEL</th>
<th>PRICE</th>
<th>COLOR</th>
<th>WARRANTY</th>
<th>DIM</th>
<th>TYPE</th>
<th>CAPACITY</th>
<th>CONTROLTYPE</th>
<th>WEIGHT</th>
<th>POWEROUT</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result7))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['COMPANY'].'</td>
<td>'.$row['MODEL'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['WARRANTY'].'</td>
<td>'.$row['DIM'].'</td>
<td>'.$row['TYPE'].'</td>
<td>'.$row['CAPACITY'].'</td>
<td>'.$row['CONTROLTYPE'].'</td>
<td>'.$row['WEIGHT'].'</td>
<td>'.$row['POWEROUT'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='skincare')
{
//Create query
$q8 = 'SELECT * FROM skincare';
//Execute query
$result8 = mysqli_query($link,$q8);
 
echo '<h1 class="center">The SKINCARE Details are - </h1>';
//Draw the table SKINCARE
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>PRICE</th>
<th>DESCRIPTION</th>
<th>MFD</th>
<th>EXPIRY</th>
<th>IDEALFOR</th>
<th>QUAN</th>
<th>CATEGORY</th>
<th>SKINTYPE</th>
<th>BENEFITS</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result8))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['DESCRIPTION'].'</td>
<td>'.$row['MFD'].'</td>
<td>'.$row['EXPIRY'].'</td>
<td>'.$row['IDEALFOR'].'</td>
<td>'.$row['QUAN'].'</td>
<td>'.$row['CATEGORY'].'</td>
<td>'.$row['SKINTYPE'].'</td>
<td>'.$row['BENEFITS'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='haircare')
{
//Create query
$q9 = 'SELECT * FROM haircare';
//Execute query
$result9 = mysqli_query($link,$q9);
 
echo '<h1 class="center">The HAIRCARE Details are - </h1>';
//Draw the table HAIRCARE
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>PRICE</th>
<th>DESCRIPTION</th>
<th>MFD</th>
<th>EXPIRY</th>
<th>IDEALFOR</th>
<th>QUAN</th>
<th>CATEGORY</th>
<th>USEDFOR</th>
<th>HAIRTYPE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result9))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['DESCRIPTION'].'</td>
<td>'.$row['MFD'].'</td>
<td>'.$row['EXPIRY'].'</td>
<td>'.$row['IDEALFOR'].'</td>
<td>'.$row['QUAN'].'</td>
<td>'.$row['CATEGORY'].'</td>
<td>'.$row['USEDFOR'].'</td>
<td>'.$row['HAIRTYPE'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='nailpolish')
{
//Create query
$q10 = 'SELECT * FROM nailpolish';
//Execute query
$result10 = mysqli_query($link,$q10);
 
echo '<h1 class="center">The NAILPOLISH Details are - </h1>';
//Draw the table NAILPOLISH
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>PRICE</th>
<th>DESCRIPTION</th>
<th>MFD</th>
<th>EXPIRY</th>
<th>IDEALFOR</th>
<th>QUAN</th>
<th>ORGANICTYPE</th>
<th>CONTAINERSHAPE</th>
<th>SHADE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result10))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['DESCRIPTION'].'</td>
<td>'.$row['MFD'].'</td>
<td>'.$row['EXPIRY'].'</td>
<td>'.$row['IDEALFOR'].'</td>
<td>'.$row['QUAN'].'</td>
<td>'.$row['ORGANICTYPE'].'</td>
<td>'.$row['CONTAINERSHAPE'].'</td>
<td>'.$row['SHADE'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='kajal')
{
//Create query
$q11 = 'SELECT * FROM kajal';
//Execute query
$result11 = mysqli_query($link,$q11);
 
echo '<h1 class="center">The KAJAL Details are - </h1>';
//Draw the table KAJAL
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>PRICE</th>
<th>DESCRIPTION</th>
<th>MFD</th>
<th>EXPIRY</th>
<th>IDEALFOR</th>
<th>QUAN</th>
<th>SMUDGE</th>
<th>DURATION</th>
<th>SHADE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result11))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['DESCRIPTION'].'</td>
<td>'.$row['MFD'].'</td>
<td>'.$row['EXPIRY'].'</td>
<td>'.$row['IDEALFOR'].'</td>
<td>'.$row['QUAN'].'</td>
<td>'.$row['SMUDGE'].'</td>
<td>'.$row['DURATION'].'</td>
<td>'.$row['SHADE'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='lipstick')
{
//Create query
$q12 = 'SELECT * FROM lipstick';
//Execute query
$result12 = mysqli_query($q12);
 
echo '<h1 class="center">The LIPSTICK Details are - </h1>';
//Draw the table LIPSTICK
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>PRICE</th>
<th>DESCRIPTION</th>
<th>MFD</th>
<th>EXPIRY</th>
<th>IDEALFOR</th>
<th>QUAN</th>
<th>TYPE</th>
<th>FINISH</th>
<th>ORGANIC</th>
<th>SHADE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result12))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['DESCRIPTION'].'</td>
<td>'.$row['MFD'].'</td>
<td>'.$row['EXPIRY'].'</td>
<td>'.$row['IDEALFOR'].'</td>
<td>'.$row['QUAN'].'</td>
<td>'.$row['TYPE'].'</td>
<td>'.$row['FINISH'].'</td>
<td>'.$row['ORGANIC'].'</td>
<td>'.$row['SHADE'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='sofa')
{
//Create query
$q13 = 'SELECT * FROM sofa';
//Execute query
$result13 = mysqli_query($link,$q13);
 
echo '<h1 class="center">The SOFA Details are - </h1>';
//Draw the table SOFA
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>STYLE</th>
<th>DLIVERYCONDTN</th>
<th>DIM</th>
<th>COLOR</th>
<th>SUITABLEFOR</th>
<th>WARRANTY</th>
<th>PRICE</th>
<th>SEATINGCAPACITY</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result13))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['STYLE'].'</td>
<td>'.$row['DLIVERYCONDTN'].'</td>
<td>'.$row['DIM'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['SUITABLEFOR'].'</td>
<td>'.$row['WARRANTY'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['SEATINGCAPACITY'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='bed')
{
//Create query
$q14 = 'SELECT * FROM bed';
//Execute query
$result14 = mysqli_query($link,$q14);
 
echo '<h1 class="center">The BED Details are - </h1>';
//Draw the table BED
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>STYLE</th>
<th>DELIVERYCONDTN</th>
<th>DIM</th>
<th>COLOR</th>
<th>SUITABLEFOR</th>
<th>WARRANTY</th>
<th>PRICE</th>
<th>TYPE</th>
<th>SIZE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result14))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['STYLE'].'</td>
<td>'.$row['DELIVERYCONDTN'].'</td>
<td>'.$row['DIM'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['SUITABLEFOR'].'</td>
<td>'.$row['WARRANTY'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['TYPE'].'</td>
<td>'.$row['SIZE'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='diningtable')
{
//Create query
$q15 = 'SELECT * FROM diningtable';
//Execute query
$result15 = mysqli_query($link,$q15);
 
echo '<h1 class="center">The DININGTABLE Details are - </h1>';
//Draw the table DININGTABLE
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>STYLE</th>
<th>DELIVERYCONDTN</th>
<th>DIM</th>
<th>COLOR</th>
<th>SUITABLEFOR</th>
<th>WARRANTY</th>
<th>PRICE</th>
<th>FOLDABLE</th>
<th>NO_OF_CHAIRS</th>
<th>SEATINGCAPACITY</th>
<th>EXTENDABLE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result15))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['STYLE'].'</td>
<td>'.$row['DELIVERYCONDTN'].'</td>
<td>'.$row['DIM'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['SUITABLEFOR'].'</td>
<td>'.$row['WARRANTY'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['FOLDABLE'].'</td>
<td>'.$row['NO_OF_CHAIRS'].'</td>
<td>'.$row['SEATINGCAPACITY'].'</td>
<td>'.$row['EXTENDABLE'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='tvcabinet')
{
//Create query
$q16 = 'SELECT * FROM tvcabinet';
//Execute query
$result16 = mysqli_query($link,$q16);
 
echo '<h1 class="center">The TVCABINET Details are - </h1>';
//Draw the table TVCABINET
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>STYLE</th>
<th>DELIVERYCONDTN</th>
<th>DIM</th>
<th>COLOR</th>
<th>SUITABLEFOR</th>
<th>WARRANTY</th>
<th>PRICE</th>
<th>DOOR</th>
<th>NO_OF_SHELVES</th>
<th>NO_OF_DRAWS</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result16))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['STYLE'].'</td>
<td>'.$row['DELIVERYCONDTN'].'</td>
<td>'.$row['DIM'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['SUITABLEFOR'].'</td>
<td>'.$row['WARRANTY'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['DOOR'].'</td>
<td>'.$row['NO_OF_SHELVES'].'</td>
<td>'.$row['NO_OF_DRAWS'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='shoeracks')
{
//Create query
$q17 = 'SELECT * FROM shoeracks';
//Execute query
$result17 = mysqli_query($link,$q17);
 
echo '<h1 class="center">The SHOERACKS Details are - </h1>';
//Draw the table SHOERACKS
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>STYLE</th>
<th>DLIVERYCONDTN</th>
<th>DIM</th>
<th>COLOR</th>
<th>SUITABLEFOR</th>
<th>WARRANTY</th>
<th>PRICE</th>
<th>PORTABLE</th>
<th>NO_OF_SHELVES</th>
<th>FOLDABLE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result17))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['STYLE'].'</td>
<td>'.$row['DLIVERYCONDTN'].'</td>
<td>'.$row['DIM'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['SUITABLEFOR'].'</td>
<td>'.$row['WARRANTY'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['PORTABLE'].'</td>
<td>'.$row['NO_OF_SHELVES'].'</td>
<td>'.$row['FOLDABLE'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='pen')
{
//Create query
$q18 = 'SELECT * FROM pen';
//Execute query
$result18 = mysqli_query($link,$q18);
 
echo '<h1 class="center">The PEN Details are - </h1>';
//Draw the table PEN
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>MODEL</th>
<th>COLOR</th>
<th>PRICE</th>
<th>LENGTH</th>
<th>NIBGRADE</th>
<th>TYPE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result18))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['MODEL'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['LENGTH'].'</td>
<td>'.$row['NIBGRADE'].'</td>
<td>'.$row['TYPE'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='books')
{
//Create query
$q19 = 'SELECT * FROM books';
//Execute query
$result19 = mysqli_query($link,$q19);
 
echo '<h1 class="center">The BOOKS Details are - </h1>';
//Draw the table BOOKS
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>MODEL</th>
<th>COLOR</th>
<th>PRICE</th>
<th>RULING</th>
<th>SIZE</th>
<th>NO_OF_PAGES</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result19))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['MODEL'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['RULING'].'</td>
<td>'.$row['SIZE'].'</td>
<td>'.$row['NO_OF_PAGES'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='calculator')
{
//Create query
$q20 = 'SELECT * FROM calculator';
//Execute query
$result20 = mysqli_query($link,$q20);
 
echo '<h1 class="center">The CALCULATOR Details are - </h1>';
//Draw the table CALCULATOR
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>MODEL</th>
<th>COLOR</th>
<th>PRICE</th>
<th>POWERSOURCE</th>
<th>DISPLAY</th>
<th>DIM</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result20))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['MODEL'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['POWERSOURCE'].'</td>
<td>'.$row['DISPLAY'].'</td>
<td>'.$row['DIM'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='folders')
{
//Create query
$q21 = 'SELECT * FROM folders';
//Execute query
$result21 = mysqli_query($link,$q21);
 
echo '<h1 class="center">The FOLDERS Details are - </h1>';
//Draw the table FOLDERS
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>MODEL</th>
<th>COLOR</th>
<th>PRICE</th>
<th>NO_OF_INNERPOCKETS</th>
<th>FINISHING</th>
<th>PEN_PAD</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result21))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['MODEL'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['NO_OF_INNERPOCKETS'].'</td>
<td>'.$row['FINISHING'].'</td>
<td>'.$row['PEN_PAD'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='cardholder')
{
//Create query
$q22 = 'SELECT * FROM cardholder';
//Execute query
$result22 = mysqli_query($link,$q22);
 
echo '<h1 class="center">The CARDHOLDER Details are - </h1>';
//Draw the table CARDHOLDER
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>MODEL</th>
<th>COLOR</th>
<th>PRICE</th>
<th>COMPARTMENTS</th>
<th>TRAYS</th>
<th>INTERLOCKING</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result22))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['MODEL'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['COMPARTMENTS'].'</td>
<td>'.$row['TRAYS'].'</td>
<td>'.$row['INTERLOCKING'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='pads')
{
//Create query
$q23 = 'SELECT * FROM pads';
//Execute query
$result23 = mysqli_query($link,$q23);
 
echo '<h1 class="center">The PADS Details are - </h1>';
//Draw the table PADS
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>PRICE</th>
<th>COLOR</th>
<th>SIZE</th>
<th>MATERIAL</th>
<th>FACE_MAT</th>
<th>INNER_MAT</th>
<th>FILLING_MAT</th>
<th>WEIGHT</th>
<th>IDEALFOR</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result23))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['SIZE'].'</td>
<td>'.$row['MATERIAL'].'</td>
<td>'.$row['FACE_MAT'].'</td>
<td>'.$row['INNER_MAT'].'</td>
<td>'.$row['FILLING_MAT'].'</td>
<td>'.$row['WEIGHT'].'</td>
<td>'.$row['IDEALFOR'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='gloves')
{
//Create query
$q24 = 'SELECT * FROM gloves';
//Execute query
$result24 = mysqli_query($link,$q24);
 
echo '<h1 class="center">The GLOVES Details are - </h1>';
//Draw the table GLOVES
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>PRICE</th>
<th>COLOR</th>
<th>SIZE</th>
<th>MATERIAL</th>
<th>IDEALFOR</th>
<th>SPORT_TYPE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result24))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['SIZE'].'</td>
<td>'.$row['MATERIAL'].'</td>
<td>'.$row['IDEALFOR'].'</td>
<td>'.$row['SPORT_TYPE'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='helmet')
{
//Create query
$q25 = 'SELECT * FROM helmet';
//Execute query
$result25 = mysqli_query($link,$q25);
 
echo '<h1 class="center">The HELMET Details are - </h1>';
//Draw the table HELMET
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>PRICE</th>
<th>COLOR</th>
<th>SIZE</th>
<th>MATERIAL</th>
<th>IDEALFOR</th>
<th>SPORT_TYPE</th>
<th>ABSORMENT_CLOTH</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result25))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['SIZE'].'</td>
<td>'.$row['MATERIAL'].'</td>
<td>'.$row['IDEALFOR'].'</td>
<td>'.$row['SPORT_TYPE'].'</td>
<td>'.$row['ABSORMENT_CLOTH'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='guard')
{
//Create query
$q26 = 'SELECT * FROM guard';
//Execute query
$result26 = mysqli_query($link,$q26);
 
echo '<h1 class="center">The GUARD Details are - </h1>';
//Draw the table GUARD
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>PRICE</th>
<th>COLOR</th>
<th>SIZE</th>
<th>MATERIAL</th>
<th>IDEALFOR</th>
<th>SPORT_TYPE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result26))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['SIZE'].'</td>
<td>'.$row['MATERIAL'].'</td>
<td>'.$row['IDEALFOR'].'</td>
<td>'.$row['SPORT_TYPE'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='sportshoes')
{
//Create query
$q27 = 'SELECT * FROM sportshoes';
//Execute query
$result27 = mysqli_query($link,$q27);
 
echo '<h1 class="center">The SPORTSHOES Details are - </h1>';
//Draw the table SPORTSHOES
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>PRICE</th>
<th>COLOR</th>
<th>SIZE</th>
<th>MATERIAL</th>
<th>IDEALFOR</th>
<th>SPORT_TYPE</th>
<th>LACE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result27))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['SIZE'].'</td>
<td>'.$row['MATERIAL'].'</td>
<td>'.$row['IDEALFOR'].'</td>
<td>'.$row['SPORT_TYPE'].'</td>
<td>'.$row['LACE'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='bat')
{
//Create query
$q28 = 'SELECT * FROM bat';
//Execute query
$result28 = mysqli_query($link,$q28);
 
echo '<h1 class="center">The BAT Details are - </h1>';
//Draw the table BAT
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>PRICE</th>
<th>COLOR</th>
<th>SIZE</th>
<th>MATERIAL</th>
<th>SPORT_NAME</th>
<th>COMPANY</th>
<th>DIM</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result28))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['SIZE'].'</td>
<td>'.$row['MATERIAL'].'</td>
<td>'.$row['SPORT_NAME'].'</td>
<td>'.$row['COMPANY'].'</td>
<td>'.$row['DIM'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='ball')
{
//Create query
$q29 = 'SELECT * FROM ball';
//Execute query
$result29 = mysqli_query($link,$q29);
 
echo '<h1 class="center">The BALL Details are - </h1>';
//Draw the table BALL
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>BRAND</th>
<th>PRICE</th>
<th>COLOR</th>
<th>SIZE</th>
<th>MATERIAL</th>
<th>SPORT_NAME</th>
<th>WEIGHT</th>
<th>DIM</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result29))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['SIZE'].'</td>
<td>'.$row['MATERIAL'].'</td>
<td>'.$row['SPORT_NAME'].'</td>
<td>'.$row['WEIGHT'].'</td>
<td>'.$row['DIM'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='fruits')
{
//Create query
$q30 = 'SELECT * FROM  fruits';
//Execute query
$result30 = mysqli_query($link,$q30);
 
echo '<h1 class="center">The FRUITS Details are - </h1>';
//Draw the table FRUITS
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>
<th>NAME</th>
<th>UNIT</th>
<th>TEMP</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result30))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['NAME'].'</td>
<td>'.$row['UNIT'].'</td>
<td>'.$row['TEMP'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='vegetables')
{
//Create query
$q31 = 'SELECT * FROM vegetables';
//Execute query
$result31 = mysqli_query($link,$q31);
 
echo '<h1 class="center">The VEGETABLES Details are - </h1>';
//Draw the table VEGETABLES
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>
<th>NAME</th>
<th>UNIT</th>
<th>GREEN</th>
<th>TEMP</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result31))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['NAME'].'</td>
<td>'.$row['UNIT'].'</td>
<td>'.$row['GREEN'].'</td>
<td>'.$row['TEMP'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='meat')
{
//Create query
$q32 = 'SELECT * FROM meat';
//Execute query
$result32 = mysqli_query($link,$q32);
 
echo '<h1 class="center">The MEAT Details are - </h1>';
//Draw the table MEAT
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>
<th>NAME</th>
<th>UNIT</th>
<th>TEMP</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result32))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['NAME'].'</td>
<td>'.$row['UNIT'].'</td>
<td>'.$row['TEMP'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='packeditem')
{
//Create query
$q33 = 'SELECT * FROM packeditem';
//Execute query
$result33 = mysqli_query($link,$q33);
 
echo '<h1 class="center">The PACKEDITEM Details are - </h1>';
//Draw the table PACKEDITEM
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>
<th>QUAN</th>
<th>COMPANY</th>
<th>MFD</th>
<th>EXPIRY</th>
<th>FLAVOR</th>
<th>V_NV</th>
<th>TEMP</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result33))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['QUAN'].'</td>
<td>'.$row['COMPANY'].'</td>
<td>'.$row['MFD'].'</td>
<td>'.$row['EXPIRY'].'</td>
<td>'.$row['FLAVOR'].'</td>
<td>'.$row['V_NV'].'</td>
<td>'.$row['TEMP'].'</td>
</tr>';
}
echo '</table>';
}
//************************************************************************************//
if($table=='clothing')
{
//Create query
$q34 = 'SELECT * FROM clothing';
//Execute query
$result34 = mysqli_query($link,$q34);
 
echo '<h1 class="center">The CLOTHING Details are - </h1>';
//Draw the table CLOTHING
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>TARGET_GROUP</th>
<th>PRICE</th>
<th>OUTFIT</th>
<th>BRAND</th>
<th>TYPE</th>
<th>COLOR</th>
<th>DESCRIPTION</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($result34))
{
echo '<tr>
<td>'.$row['MODEL_ID'].'</td>
<td>'.$row['TARGET_GROUP'].'</td>
<td>'.$row['PRICE'].'</td>
<td>'.$row['OUTFIT'].'</td>
<td>'.$row['BRAND'].'</td>
<td>'.$row['TYPE'].'</td>
<td>'.$row['COLOR'].'</td>
<td>'.$row['DESCRIPTION'].'</td>
</tr>';
}
echo '</table>';
}
/*}
else{
header('location:login_form.php');
exit();
}*/
?>
