<?php
//Start the session to see if the user is authenticated user.
//Check if the user is authenticated first. Or else redirect to login page
require('menu.php');
?><?php
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
/*Start the session to see if the user is authenticated user.
session_start();
//Check if the user is authenticated first. Or else redirect to login page
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
require('menu.php');*/
//*************************************************************************************************************//
$validationFlag = true;
if ($_POST['submit'] == 'Search_pen'){
$search = "SELECT * FROM pen WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand']){
$brand = $_POST['brand']; 
$search = $search . "&& BRAND = '$brand'";
}
if($_POST['model']){
$model = $_POST['model']; 
$search = $search . "&& MODEL = '$model'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['length']){
$length = $_POST['length']; 
$search = $search . "&& LENGTH = '$length'";
}
if($_POST['nibgrade']){
$nibgrade = $_POST['nibgrade']; 
$search = $search . "&& NIBGRADE = '$nibgrade'";
}
if($_POST['type']){
$type = $_POST['type']; 
$search = $search . "&& TYPE = '$type'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_books'){
$search = "SELECT * FROM books WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand']){
$brand = $_POST['brand']; 
$search = $search . "&& BRAND = '$brand'";
}
if($_POST['model']){
$model = $_POST['model']; 
$search = $search . "&& MODEL = '$model'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['ruling']){
$ruling = $_POST['ruling']; 
$search = $search . "&& RULING = '$ruling'";
}
if($_POST['size']){
$size = $_POST['size']; 
$search = $search . "&& SIZE = '$size'";
}
if($_POST['no_of_pages']){
$no_of_pages = $_POST['no_of_pages']; 
$search = $search . "&& NO_OF_PAGES = '$no_of_pages'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_calculator'){
$search = "SELECT * FROM calculator WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand']){
$brand = $_POST['brand']; 
$search = $search . "&& BRAND = '$brand'";
}
if($_POST['model']){
$model = $_POST['model']; 
$search = $search . "&& MODEL = '$model'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['powersource']){
$powersource = $_POST['powersource']; 
$search = $search . "&& POWERSOURCE = '$powersource'";
}
if($_POST['display']){
$display = $_POST['display']; 
$search = $search . "&& DISPLAY = '$display'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$search = $search . "&& DIM = '$dim'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_folders'){
$search = "SELECT * FROM folders WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand']){
$brand = $_POST['brand']; 
$search = $search . "&& BRAND = '$brand'";
}
if($_POST['model']){
$model = $_POST['model']; 
$search = $search . "&& MODEL = '$model'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['no_of_innerpockets']){
$no_of_innerpockets = $_POST['no_of_innerpockets']; 
$search = $search . "&& NO_OF_INNERPOCKETS = '$no_of_innerpockets'";
}
if($_POST['finishing']){
$finishing = $_POST['finishing']; 
$search = $search . "&& FINISHING = '$finishing'";
}
if($_POST['pen_pad']){
$pen_pad = $_POST['pen_pad']; 
$search = $search . "&& PEN_PAD = '$pen_pad'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_cardholder'){
$search = "SELECT * FROM cardholder WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand']){
$brand = $_POST['brand']; 
$search = $search . "&& BRAND = '$brand'";
}
if($_POST['model']){
$model = $_POST['model']; 
$search = $search . "&& MODEL = '$model'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['compartments']){
$compartments = $_POST['compartments']; 
$search = $search . "&& COMPARTMENTS = '$compartments'";
}
if($_POST['trays']){
$trays = $_POST['trays']; 
$search = $search . "&& TRAYS = '$trays'";
}
if($_POST['interlocking']){
$interlocking = $_POST['interlocking']; 
$search = $search . "&& INTERLOCKING = '$interlocking'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_fruits'){
$search = "SELECT * FROM fruits WHERE PRICE>0 ";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['name']){
$name = $_POST['name']; 
$search = $search . "&& NAME = '$name'";
}
if($_POST['unit']){
$unit = $_POST['unit']; 
$search = $search . "&& UNIT = '$unit'";
}
if($_POST['temp']){
$temp = $_POST['temp']; 
$search = $search . "&& TEMP = $temp";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
echo '<h1 class="center"">The FRUITS Details are - </h1>';
//Draw the table FRUITS
echo '<table class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>
<th>NAME</th>
<th>UNIT</th>
<th>TEMP</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($results))
{
echo '<tr>
<td class="tbl-content">'.$row['MODEL_ID'].'</td>
<td class="tbl-content">'.$row['PRICE'].'</td>
<td class="tbl-content">'.$row['NAME'].'</td>
<td class="tbl-content">'.$row['UNIT'].'</td>
<td class="tbl-content">'.$row['TEMP'].'</td>
</tr>';
}
echo '</table>';
}
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_vegetables'){
$search = "SELECT * FROM vegetables WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['name']){
$name = $_POST['name']; 
$search = $search . "&& NAME = '$name'";
}
if($_POST['unit']){
$unit = $_POST['unit']; 
$search = $search . "&& UNIT = '$unit'";
}
if($_POST['green']){
$green = $_POST['green']; 
$search = $search . "&& GREEN = '$green'";
}
if($_POST['temp']){
$temp = $_POST['temp']; 
$search = $search . "&& TEMP = '$temp'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
echo '<h1 class="center">The VEGETABLES Details are - </h1>';
//Draw the table VEGETABLES
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>
<th>NAME</th>
<th>UNIT</th>
<th>GREEN</th>
<th>TEMP</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_meat'){
$search = "SELECT * FROM meat WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['name']){
$name = $_POST['name']; 
$search = $search . "&& NAME = '$name'";
}
if($_POST['unit']){
$unit = $_POST['unit']; 
$search = $search . "&& UNIT = '$unit'";
}
if($_POST['temp']){
$temp = $_POST['temp']; 
$search = $search . "&& TEMP = '$temp'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
echo '<h1 class="center">The MEAT Details are - </h1>';
//Draw the table MEAT
echo '<table border="2" class="fixed">
<th>MODEL_ID</th>
<th>PRICE</th>
<th>NAME</th>
<th>UNIT</th>
<th>TEMP</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_packeditem'){
$search = "SELECT * FROM packeditem WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['quan']){
$quan = $_POST['quan']; 
$search = $search . "&& QUAN = '$quan'";
}
if($_POST['company']){
$company = $_POST['company']; 
$search = $search . "&& COMPANY = '$company'";
}
if($_POST['year'] && $_POST['month'] && $_POST['day']){
$mfd = "'".$_POST['year'].'-'.$_POST['month']. '-' .$_POST['day']."'"; 
$search = $search . ", MFD = $mfd";
}
if($_POST['expiry']){
$expiry = $_POST['expiry']; 
$search = $search . "&& EXPIRY = '$expiry'";
}
if($_POST['flavor']){
$flavor = $_POST['flavor']; 
$search = $search . "&& FLAVOR = '$flavor'";
}
if($_POST['v_nv']){
$v_nv = $_POST['v_nv']; 
$search = $search . "&& V_NV = '$v_nv'";
}
if($_POST['temp']){
$temp = $_POST['temp']; 
$search = $search . "&& TEMP = '$temp'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_skincare'){
$search = "SELECT * FROM skincare WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand']){
$brand = $_POST['brand']; 
$search = $search . "&& BRAND = '$brand'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['description']){
$description = $_POST['description']; 
$search = $search . "&& DESCRIPTION = '$description'";
}
if($_POST['mfd']){
$mfd = $_POST['mfd']; 
$search = $search . "&& MFD = '$mfd'";
}
if($_POST['expiry']){
$expiry = $_POST['expiry']; 
$search = $search . "&& EXPIRY = '$expiry'";
}
if($_POST['idealfor']){
$idealfor = $_POST['idealfor']; 
$search = $search . "&& IDEALFOR = '$idealfor'";
}
if($_POST['quan']){
$quan = $_POST['quan']; 
$search = $search . "&& QUAN  = '$quan'";
}
if($_POST['category']){
$category = $_POST['category']; 
$search = $search . "&& CATEGORY = '$category'";
}
if($_POST['skintype']){
$skintype = $_POST['skintype']; 
$search = $search . "&& SKINTYPE  = '$skintype'";
}
if($_POST['benefits']){
$benefits = $_POST['benefits']; 
$search = $search . "&& BENEFITS = '$benefits'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_haircare'){
$search = "SELECT * FROM haircare WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand']){
$brand = $_POST['brand']; 
$search = $search . "&& BRAND = '$brand'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['description']){
$description = $_POST['description']; 
$search = $search . "&& DESCRIPTION = '$description'";
}
if($_POST['mfd']){
$mfd = $_POST['mfd']; 
$search = $search . "&& MFD = '$mfd'";
}
if($_POST['expiry']){
$expiry = $_POST['expiry']; 
$search = $search . "&& EXPIRY = '$expiry'";
}
if($_POST['idealfor']){
$idealfor = $_POST['idealfor']; 
$search = $search . "&& IDEALFOR = '$idealfor'";
}
if($_POST['quan']){
$quan = $_POST['quan']; 
$search = $search . "&& QUAN  = '$quan'";
}
if($_POST['category']){
$category = $_POST['category']; 
$search = $search . "&& CATEGORY = '$category'";
}
if($_POST['usedfor']){
$usedfor = $_POST['usedfor']; 
$search = $search . "&& USEDFOR  = '$usedfor'";
}
if($_POST['hairtype']){
$hairtype = $_POST['hairtype']; 
$search = $search . "&& HAIRTYPE = '$hairtype'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_nailpolish'){
$search = "SELECT * FROM nailpolish WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand']){
$brand = $_POST['brand']; 
$search = $search . "&& BRAND = '$brand'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['description']){
$description = $_POST['description']; 
$search = $search . "&& DESCRIPTION = '$description'";
}
if($_POST['mfd']){
$mfd = $_POST['mfd']; 
$search = $search . "&& MFD = '$mfd'";
}
if($_POST['expiry']){
$expiry = $_POST['expiry']; 
$search = $search . "&& EXPIRY = '$expiry'";
}
if($_POST['idealfor']){
$idealfor = $_POST['idealfor']; 
$search = $search . "&& IDEALFOR = '$idealfor'";
}
if($_POST['quan']){
$quan = $_POST['quan']; 
$search = $search . "&& QUAN  = '$quan'";
}
if($_POST['organictype']){
$organictype = $_POST['organictype']; 
$search = $search . "&& ORGANICTYPE = '$organictype'";
}
if($_POST['containershape']){
$containershape = $_POST['containershape']; 
$search = $search . "&& CONTAINERSHAPE  = '$containershape'";
}
if($_POST['shade']){
$shade = $_POST['shade']; 
$search = $search . "&& SHADE = '$shade'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_kajal'){
$search = "SELECT * FROM kajal WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand']){
$brand = $_POST['brand']; 
$search = $search . "&& BRAND = '$brand'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['description']){
$description = $_POST['description']; 
$search = $search . "&& DESCRIPTION = '$description'";
}
if($_POST['mfd']){
$mfd = $_POST['mfd']; 
$search = $search . "&& MFD = '$mfd'";
}
if($_POST['expiry']){
$expiry = $_POST['expiry']; 
$search = $search . "&& EXPIRY = '$expiry'";
}
if($_POST['idealfor']){
$idealfor = $_POST['idealfor']; 
$search = $search . "&& IDEALFOR = '$idealfor'";
}
if($_POST['quan']){
$quan = $_POST['quan']; 
$search = $search . "&& QUAN  = '$quan'";
}
if($_POST['smudge']){
$smudge = $_POST['smudge']; 
$search = $search . "&& SMUDGE = '$smudge'";
}
if($_POST['duration']){
$duration = $_POST['duration']; 
$search = $search . "&& DURATION  = '$duration'";
}
if($_POST['shade']){
$shade = $_POST['shade']; 
$search = $search . "&& SHADE = '$shade'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_lipstick'){
$search = "SELECT * FROM lipstick WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand']){
$brand = $_POST['brand']; 
$search = $search . "&& BRAND = '$brand'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['description']){
$description = $_POST['description']; 
$search = $search . "&& DESCRIPTION = '$description'";
}
if($_POST['mfd']){
$mfd = $_POST['mfd']; 
$search = $search . "&& MFD = '$mfd'";
}
if($_POST['expiry']){
$expiry = $_POST['expiry']; 
$search = $search . "&& EXPIRY = '$expiry'";
}
if($_POST['idealfor']){
$idealfor = $_POST['idealfor']; 
$search = $search . "&& IDEALFOR = '$idealfor'";
}
if($_POST['quan']){
$quan = $_POST['quan']; 
$search = $search . "&& QUAN  = '$quan'";
}
if($_POST['type']){
$type = $_POST['type']; 
$search = $search . "&& TYPE = '$type'";
}
if($_POST['finish']){
$finish = $_POST['finish']; 
$search = $search . "&& FINISH  = '$finish'";
}
if($_POST['organic']){
$organic = $_POST['organic']; 
$search = $search . "&& ORGANIC  = '$organic'";
}
if($_POST['shade']){
$shade = $_POST['shade']; 
$search = $search . "&& SHADE = '$shade'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_washingmach'){
$search = "SELECT * FROM washingmach WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['company']){
$company = $_POST['company']; 
$search = $search . "&& COMPANY = '$company'";
}
if($_POST['model']){
$model = $_POST['model']; 
$search = $search . "&& MODEL= '$model'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$search = $search . "&& WARRANTY = '$warranty'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$search = $search . "&& DIM = '$dim'";
}
if($_POST['digital']){
$digital = $_POST['digital']; 
$search = $search . "&& DIGITAL  = '$digital'";
}
if($_POST['controltype']){
$controltype = $_POST['controltype']; 
$search = $search . "&& CONTROLTYPE = '$controltype'";
}
if($_POST['loadtype']){
$loadtype = $_POST['loadtype']; 
$search = $search . "&& LOADTYPE  = '$loadtype'";
}
if($_POST['method']){
$method = $_POST['method']; 
$search = $search . "&& METHOD  = '$method'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_ac'){
$search = "SELECT * FROM ac WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['company']){
$company = $_POST['company']; 
$search = $search . "&& COMPANY = '$company'";
}
if($_POST['model']){
$model = $_POST['model']; 
$search = $search . "&& MODEL= '$model'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search= $search . "&& COLOR = '$color'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$search = $search . "&& WARRANTY = '$warranty'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$search = $search . "&& DIM = '$dim'";
}
if($_POST['type']){
$type = $_POST['type']; 
$search = $search . "&& TYPE  = '$type'";
}
if($_POST['capacity']){
$capacity = $_POST['capacity']; 
$search = $search . "&& CAPACITY = '$capacity'";
}
if($_POST['energyrating']){
$energyrating = $_POST['energyrating']; 
$search = $search . "&& ENERGYRATING = '$energyrating'";
}
if($_POST['weight']){
$weight = $_POST['weight']; 
$search = $search . "&& WEIGHT  = '$weight'";
}
if($_POST['powerreq']){
$powerreq = $_POST['powerreq']; 
$search = $search . "&& POWERREQ  = '$powerreq'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_fridge'){
$search = "SELECT * FROM fridge WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['company']){
$company = $_POST['company']; 
$search = $search . "&& COMPANY = '$company'";
}
if($_POST['model']){
$model = $_POST['model']; 
$search = $search . "&& MODEL= '$model'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$search = $search . "&& WARRANTY = '$warranty'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$search = $search . "&& DIM = '$dim'";
}
if($_POST['type']){
$type = $_POST['type']; 
$search = $search . "&& TYPE  = '$type'";
}
if($_POST['technology']){
$technology = $_POST['technology']; 
$search = $search . "&& TECHNOLOGY = '$technology'";
}
if($_POST['capacity']){
$capacity = $_POST['capacity']; 
$search = $search . "&& CAPACITY = '$capacity'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_tv'){
$search = "SELECT * FROM tv WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['company']){
$company = $_POST['company']; 
$search = $search . "&& COMPANY = '$company'";
}
if($_POST['model']){
$model = $_POST['model']; 
$search = $search . "&& MODEL= '$model'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$search = $search . "&& WARRANTY = '$warranty'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$search = $search . "&& DIM = '$dim'";
}
if($_POST['resolution']){
$resolution = $_POST['resolution']; 
$search = $search . "&& RESOLUTION = '$resolution'";
}
if($_POST['features']){
$features = $_POST['features']; 
$search = $search . "&& FEATURES = '$features'";
}
if($_POST['screentype']){
$screentype = $_POST['screentype']; 
$search = $search . "&& SCREENTYPE= '$screentype'";
}
if($_POST['connectivity']){
$connectivity = $_POST['connectivity']; 
$search = $search . "&& CONNECTIVITY  = '$connectivity'";
}
if($_POST['hdmi']){
$hdmi = $_POST['hdmi']; 
$search = $search . "&& HDMI  = '$hdmi'";
}
if($_POST['usb']){
$usb = $_POST['usb']; 
$search = $search . "&& USB  = '$usb'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
<th>FEAUTRES</th>
<th>SCREENTYPE</th>
<th>CONNECTIVITY</th>
<th>HDMI</th>
<th>USB</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_oven'){
$search = "SELECT * FROM oven WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['company']){
$company = $_POST['company']; 
$search = $search . "&& COMPANY = '$company'";
}
if($_POST['model']){
$model = $_POST['model']; 
$search = $search . "&& MODEL= '$model'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$search = $search . "&& WARRANTY = '$warranty'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$search = $search . "&& DIM = '$dim'";
}
if($_POST['type']){
$type = $_POST['type']; 
$search = $search . "&& TYPE  = '$type'";
}
if($_POST['capacity']){
$capacity = $_POST['capacity']; 
$search = $search . "&& CAPACITY = '$capacity'";
}
if($_POST['controltype']){
$controltype = $_POST['controltype']; 
$search = $search . "&& CONTROLTYPE = '$controltype'";
}
if($_POST['weight']){
$weight = $_POST['weight']; 
$search = $search . "&& WEIGHT  = '$weight'";
}
if($_POST['powerout']){
$powerout = $_POST['powerout']; 
$search = $search . "&& POWEROUT  = '$powerout'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_mobile'){
$search = "SELECT * FROM mobiles WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['company']){
$company = $_POST['company']; 
$search = $search . "&& COMPANY = '$company'";
}
if($_POST['model']){
$model = $_POST['model']; 
$search = $search . "&& MODEL = '$model'";
}
if($_POST['name']){
$name = $_POST['name']; 
$search = $search . "&& NAME = '$name'";
}
if($_POST['camera']){
$camera = $_POST['camera']; 
$search = $search . "&& CAMERA = '$camera'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$search = $search . "&& WARRANTY = '$warranty'";
}
if($_POST['display']){
$display = $_POST['display']; 
$search = $search . "&& DISPLAY = '$display'";
}
if($_POST['battery']){
$battery = $_POST['battery']; 
$search = $search . "&& BATTERY = '$battery'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['int_memory']){
$int_memory = $_POST['int_memory']; 
$search = $search . "&& INT_MEMORY = '$int_memory'";
}
if($_POST['ext_memory']){
$ext_memory = $_POST['ext_memory']; 
$search = $search . "&& EXT_MEMORY = '$ext_memory'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
<th>EXT_MEMORY</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_laptop'){
$search = "SELECT * FROM laptop WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['company']){
$company = $_POST['company']; 
$search = $search . "&& COMPANY = '$company'";
}
if($_POST['model']){
$model = $_POST['model']; 
$search = $search . "&& MODEL = '$model'";
}
if($_POST['name']){
$name = $_POST['name']; 
$search = $search . "&& NAME = '$name'";
}
if($_POST['camera']){
$camera = $_POST['camera']; 
$search = $search . "&& CAMERA = '$camera'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$search = $search . "&& WARRANTY = '$warranty'";
}
if($_POST['display']){
$display = $_POST['display']; 
$search = $search . "&& DISPLAY = '$display'";
}
if($_POST['battery']){
$battery = $_POST['battery']; 
$search = $search . "&& BATTERY = '$battery'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['core']){
$core = $_POST['core']; 
$search = $search . "&& CORE = '$core'";
}
if($_POST['ram']){
$ram = $_POST['ram']; 
$search = $search . "&& RAM = '$ram'";
}
if($_POST['hdd']){
$hdd = $_POST['hdd']; 
$search = $search . "&& HDD = '$hdd'";
}
if($_POST['os']){
$os = $_POST['os']; 
$search = $search . "&& OS = '$os'";
}
if($_POST['hdmi']){
$hdmi = $_POST['hdmi']; 
$search = $search . "&& HDMI = '$hdmi'";
}
if($_POST['usb']){
$usb = $_POST['usb']; 
$search = $search . "&& USB = '$usb'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_sofa'){
$search = "SELECT * FROM sofa WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand']){
$brand = $_POST['brand']; 
$search = $search . "&& BRAND = '$brand'";
}
if($_POST['style']){
$style = $_POST['style']; 
$search = $search . "&& STYLE = '$style'";
}
if($_POST['deliverycondtn']){
$deliverycondtn = $_POST['name']; 
$search = $search . "&& DELIVERYCONDTN = '$deliverycondtn'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$search = $search . "&& DIM = '$dim'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['suitablefor']){
$suitablefor = $_POST['suitablefor']; 
$search = $search . "&& SUITABLEFOR = '$suitablefor'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$search = $search . "&& WARRANTY = '$warranty'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['seatingcapacity']){
$seatingcapacity = $_POST['seatingcapacity']; 
$search = $search . "&& SEATINGCAPACITY = '$seatingcapacity'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
echo '<h1 class="center">The SOFA Details are - </h1>';
//Draw the table SOFA
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
<th>SEATINGCAPACITY</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($results))
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
<td>'.$row['SEATINGCAPACITY'].'</td>
</tr>';
}
echo '</table>';
}
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_bed'){
$search = "SELECT * FROM bed WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand']){
$brand = $_POST['brand']; 
$search = $search . "&& BRAND = '$brand'";
}
if($_POST['style']){
$style = $_POST['style']; 
$search = $search . "&& STYLE = '$style'";
}
if($_POST['deliverycondtn']){
$deliverycondtn = $_POST['name']; 
$search = $search . "&& DELIVERYCONDTN = '$deliverycondtn'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$search = $search . "&& DIM = '$dim'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['suitablefor']){
$suitablefor = $_POST['suitablefor']; 
$search = $search . "&& SUITABLEFOR = '$suitablefor'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$search = $search . "&& WARRANTY = '$warranty'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['type']){
$type = $_POST['type']; 
$search = $search . "&& TYPE = '$type'";
}
if($_POST['size']){
$size = $_POST['size']; 
$search = $search . "&& SIZE = '$size'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
echo '<h1 class="center">The BED Details are - </h1>';
//Draw the table BED
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
<th>TYPE</th>
<th>SIZE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($results))
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
<td>'.$row['TYPE'].'</td>
<td>'.$row['SIZE'].'</td>
</tr>';
}
echo '</table>';
}
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_diningtable'){
$search = "SELECT * FROM diningtable WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand']){
$brand = $_POST['brand']; 
$search = $search . "&& BRAND = '$brand'";
}
if($_POST['style']){
$style = $_POST['style']; 
$search = $search . "&& STYLE = '$style'";
}
if($_POST['deliverycondtn']){
$deliverycondtn = $_POST['name']; 
$search = $search . "&& DELIVERYCONDTN = '$deliverycondtn'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$search = $search . "&& DIM = '$dim'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['suitablefor']){
$suitablefor = $_POST['suitablefor']; 
$search = $search . "&& SUITABLEFOR = '$suitablefor'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$search = $search . "&& WARRANTY = '$warranty'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['foldable']){
$foldable = $_POST['foldable']; 
$search = $search . "&& FOLDABLE = '$foldable'";
}
if($_POST['no_of_chairs']){
$no_of_chairs = $_POST['no_of_chairs']; 
$search = $search . "&& NO_OF_CHAIRS = '$no_of_chairs'";
}
if($_POST['seatingcapacity']){
$seatingcapacity = $_POST['seatingcapacity']; 
$search = $search . "&& SEATINGCAPACITY = '$seatingcapacity'";
}
if($_POST['extendable']){
$extendable = $_POST['extendable']; 
$search = $search . "&& EXTENDABLE = '$extendable'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_tvcabinet'){
$search = "SELECT * FROM tvcabinet WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand']){
$brand = $_POST['brand']; 
$search = $search . "&& BRAND = '$brand'";
}
if($_POST['style']){
$style = $_POST['style']; 
$search = $search . "&& STYLE = '$style'";
}
if($_POST['deliverycondtn']){
$deliverycondtn = $_POST['name']; 
$search = $search . "&& DELIVERYCONDTN = '$deliverycondtn'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$search = $search . "&& DIM = '$dim'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['suitablefor']){
$suitablefor = $_POST['suitablefor']; 
$search = $search . "&& SUITABLEFOR = '$suitablefor'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$search = $search . "&& WARRANTY = '$warranty'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['door']){
$door = $_POST['door']; 
$search = $search . "&& DOOR = '$door'";
}
if($_POST['no_of_shelves']){
$no_of_shelves = $_POST['no_of_shelves']; 
$search = $search . "&& NO_OF_SHELVES = '$no_of_shelves'";
}
if($_POST['no_of_draws']){
$no_of_draws = $_POST['no_of_draws']; 
$search = $search . "&& NO_OF_DRAWS = '$no_of_draws'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_shoeracks'){
$search = "SELECT * FROM shoeracks WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand']){
$brand = $_POST['brand']; 
$search = $search . "&& BRAND = '$brand'";
}
if($_POST['style']){
$style = $_POST['style']; 
$search = $search . "&& STYLE = '$style'";
}
if($_POST['deliverycondtn']){
$deliverycondtn = $_POST['name']; 
$search = $search . "&& DELIVERYCONDTN = '$deliverycondtn'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$search = $search . "&& DIM = '$dim'";
}
if($_POST['color']){
$color = $_POST['color']; 
$search = $search . "&& COLOR = '$color'";
}
if($_POST['suitablefor']){
$suitablefor = $_POST['suitablefor']; 
$search = $search . "&& SUITABLEFOR = '$suitablefor'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$search = $search . "&& WARRANTY = '$warranty'";
}
if($_POST['price']){
$price = $_POST['price']; 
$search = $search . "&& PRICE = '$price'";
}
if($_POST['portable']){
$portable = $_POST['portable']; 
$search = $search . "&& PORTABLE = '$portable'";
}
if($_POST['no_of_shelves']){
$no_of_shelves = $_POST['no_of_shelves']; 
$search = $search . "&& NO_OF_SHELVES = '$no_of_shelves'";
}
if($_POST['foldable']){
$foldable = $_POST['foldable']; 
$search = $search . "&& FOLDABLE = '$foldable'";
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
//Execute query
$results = mysqli_query($link,$search);
if($results == FALSE)
echo mysqli_error($link) . '<br>';
else
echo mysqli_info($link);
}
echo '<h1 class="center">The SHOERACKS Details are - </h1>';
//Draw the table SHOERACKS
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
<th>PORTABLE</th>
<th>NO_OF_SHELVES</th>
<th>FOLDABLE</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($results))
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
<td>'.$row['PORTABLE'].'</td>
<td>'.$row['NO_OF_SHELVES'].'</td>
<td>'.$row['FOLDABLE'].'</td>
</tr>';
}
echo '</table>';
}
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_pads'){
$search = "SELECT * FROM pads WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand'])
		{
			$brand = $_POST['brand']; 
			$search = $search . "&& BRAND = '$brand'";
		}
		if($_POST['price'])
		{
			$price = $_POST['price']; 
			$search = $search . "&& PRICE = '$price'";
		}
		if($_POST['color'])
		{
			$color = $_POST['color']; 
			$search = $search . "&& COLOR = '$color'";
		}
		if($_POST['size'])
		{
			$size = $_POST['size']; 
			$search = $search . "&& SIZE = '$size'";
		}
		if($_POST['material'])
		{
			$material = $_POST['material']; 
			$search = $search . "&& MATERIAL = '$material'";
		}
		if($_POST['face_mat'])
		{
			$face_mat = $_POST['face_mat']; 
			$search = $search . "&& FACE_MAT = '$face_mat'";
		}
		if($_POST['inner_mat'])
		{
			$inner_mat = $_POST['inner_mat']; 
			$search = $search . "&& INNER_MAT = '$inner_mat'";
		}
		if($_POST['filling_mat'])
		{
			$filling_mat = $_POST['filling_mat']; 
			$search = $search . "&& FILLING_MAT = '$filling_mat'";
		}
		if($_POST['weight'])
		{
			$weight = $_POST['weight']; 
			$search = $search . "&& WEIGHT = '$weight'";
		}
		if($_POST['ideal_for'])
		{
			$ideal_for = $_POST['ideal_for']; 
			$search = $search . "&& IDEALFOR = '$ideal_for'";
		}
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
			if(!$db)
			{
				die("Unable to select database");
			}
			//Execute query
			$results = mysqli_query($link,$search);
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo mysqli_info($link);
		}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_gloves'){
$search = "SELECT * FROM gloves WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand'])
		{
			$brand = $_POST['brand']; 
			$search = $search . "&& BRAND = '$brand'";
		}
		if($_POST['price'])
		{
			$price = $_POST['price']; 
			$search = $search . "&& PRICE = '$price'";
		}
		if($_POST['color'])
		{
			$color = $_POST['color']; 
			$search = $search . "&& COLOR = '$color'";
		}
		if($_POST['size'])
		{
			$size = $_POST['size']; 
			$search = $search . "&& SIZE = '$size'";
		}
		if($_POST['material'])
		{
			$material = $_POST['material']; 
			$search = $search . "&& MATERIAL = '$material'";
		}
		if($_POST['sport_type'])
		{
			$sport_type = $_POST['sport_type']; 
			$search = $search . "&& SPORT_TYPE = '$sport_type'";
		}
		if($_POST['ideal_for'])
		{
			$ideal_for = $_POST['ideal_for']; 
			$search = $search . "&& IDEALFOR = '$ideal_for'";
		}
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
			if(!$db)
			{
				die("Unable to select database");
			}
			//Execute query
			$results = mysqli_query($link,$search);
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo mysqli_info($link);
		}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_helmet'){
$search = "SELECT * FROM helmet WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand'])
		{
			$brand = $_POST['brand']; 
			$search = $search . "&& BRAND = '$brand'";
		}
		if($_POST['price'])
		{
			$price = $_POST['price']; 
			$search = $search . "&& PRICE = '$price'";
		}
		if($_POST['color'])
		{
			$color = $_POST['color']; 
			$search = $search . "&& COLOR = '$color'";
		}
		if($_POST['size'])
		{
			$size = $_POST['size']; 
			$search = $search . "&& SIZE = '$size'";
		}
		if($_POST['material'])
		{
			$material = $_POST['material']; 
			$search = $search . "&& MATERIAL = '$material'";
		}
		if($_POST['sport_type'])
		{
			$sport_type = $_POST['sport_type']; 
			$search = $search . "&& SPORT_TYPE = '$sport_type'";
		}
		if($_POST['ideal_for'])
		{
			$ideal_for = $_POST['ideal_for']; 
			$search = $search . "&& IDEALFOR = '$ideal_for'";
		}
		if($_POST['absorbent_cloth'])
		{
			$absorbent_cloth = $_POST['abosrbent_cloth']; 
			$search = $search . "&& ABSORBENT_CLOTH = '$absorbent_cloth'";
		}
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
			if(!$db)
			{
				die("Unable to select database");
			}
			//Execute query
			$results = mysqli_query($link,$search);
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo mysqli_info($link);
		}
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
<th>ABSORBENT_CLOTH</th>';//Show the rows in the fetched resultset one by one
while ($row = mysqli_fetch_assoc($results))
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
<td>'.$row['ABSORBENT_CLOTH'].'</td>
</tr>';
}
echo '</table>';
	}
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_guard'){
$search = "SELECT * FROM guard WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand'])
		{
			$brand = $_POST['brand']; 
			$search = $search . "&& BRAND = '$brand'";
		}
		if($_POST['price'])
		{
			$price = $_POST['price']; 
			$search = $search . "&& PRICE = '$price'";
		}
		if($_POST['color'])
		{
			$color = $_POST['color']; 
			$search = $search . "&& COLOR = '$color'";
		}
		if($_POST['size'])
		{
			$size = $_POST['size']; 
			$search = $search . "&& SIZE = '$size'";
		}
		if($_POST['material'])
		{
			$material = $_POST['material']; 
			$search = $search . "&& MATERIAL = '$material'";
		}
		if($_POST['sport_type'])
		{
			$sport_type = $_POST['sport_type']; 
			$search = $search . "&& SPORT_TYPE = '$sport_type'";
		}
		if($_POST['ideal_for'])
		{
			$ideal_for = $_POST['ideal_for']; 
			$search = $search . "&& IDEALFOR = '$ideal_for'";
		}
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
			if(!$db)
			{
				die("Unable to select database");
			}
			//Execute query
			$results = mysqli_query($link,$search);
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo mysqli_info($link);
		}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_sportshoes'){
$search = "SELECT * FROM sportshoes WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand'])
		{
			$brand = $_POST['brand']; 
			$search = $search . "&& BRAND = '$brand'";
		}
		if($_POST['price'])
		{
			$price = $_POST['price']; 
			$search = $search . "&& PRICE = '$price'";
		}
		if($_POST['color'])
		{
			$color = $_POST['color']; 
			$search = $search . "&& COLOR = '$color'";
		}
		if($_POST['size'])
		{
			$size = $_POST['size']; 
			$search = $search . "&& SIZE = '$size'";
		}
		if($_POST['material'])
		{
			$material = $_POST['material']; 
			$search = $search . "&& MATERIAL = '$material'";
		}
		if($_POST['sport_type'])
		{
			$sport_type = $_POST['sport_type']; 
			$search = $search . "&& SPORT_TYPE = '$sport_type'";
		}
		if($_POST['ideal_for'])
		{
			$ideal_for = $_POST['ideal_for']; 
			$search = $search . "&& IDEALFOR = '$ideal_for'";
		}
		if($_POST['lace'])
		{
			$lace = $_POST['lace']; 
			$search = $search . "&& LACE = '$lace'";
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
			if(!$db)
			{
				die("Unable to select database");
			}
			//Execute query
			$results = mysqli_query($link,$search);
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo mysqli_info($link);
		}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_bat'){
$search = "SELECT * FROM bat WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand'])
		{
			$brand = $_POST['brand']; 
			$search = $search . "&& BRAND = '$brand'";
		}
		if($_POST['price'])
		{
			$price = $_POST['price']; 
			$search = $search . "&& PRICE = '$price'";
		}
		if($_POST['color'])
		{
			$color = $_POST['color']; 
			$search = $search . "&& COLOR = '$color'";
		}
		if($_POST['size'])
		{
			$size = $_POST['size']; 
			$search = $search . "&& SIZE = '$size'";
		}
		if($_POST['material'])
		{
			$material = $_POST['material']; 
			$search = $search . "&& MATERIAL = '$material'";
		}
		if($_POST['sport_name'])
		{
			$sport_name = $_POST['sport_name']; 
			$search = $search . "&& SPORT_NAME = '$sport_name'";
		}
		if($_POST['company'])
		{
			$company = $_POST['company']; 
			$search = $search . "&& COMPANY = '$company'";
		}
		if($_POST['dim'])
		{
			$dim = $_POST['dim']; 
			$search = $search . "&& dim = '$dim'";
		}
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
			if(!$db)
			{
				die("Unable to select database");
			}
			//Execute query
			$results = mysqli_query($link,$search);
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo mysqli_info($link);
		}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
if ($_POST['submit'] == 'Search_ball'){
$search = "SELECT * FROM ball WHERE PRICE>0";
if($_POST['modelid']){
$modelid = $_POST['modelid']; 
$search = $search . "&& MODEL_ID = '$modelid'";
}
if($_POST['brand'])
		{
			$brand = $_POST['brand']; 
			$search = $search . "&& BRAND = '$brand'";
		}
		if($_POST['price'])
		{
			$price = $_POST['price']; 
			$search = $search . "&& PRICE = '$price'";
		}
		if($_POST['color'])
		{
			$color = $_POST['color']; 
			$search = $search . "&& COLOR = '$color'";
		}
		if($_POST['size'])
		{
			$size = $_POST['size']; 
			$search = $search . "&& SIZE = '$size'";
		}
		if($_POST['material'])
		{
			$material = $_POST['material']; 
			$search = $search . "&& MATERIAL = '$material'";
		}
		if($_POST['sport_name'])
		{
			$sport_name = $_POST['sport_name']; 
			$search = $search . "&& SPORT_NAME = '$sport_name'";
		}
		if($_POST['weight'])
		{
			$weight = $_POST['weight']; 
			$search = $search . "&& WEIGHT = '$weight'";
		}
		if($_POST['dim'])
		{
			$dim = $_POST['dim']; 
			$search = $search . "&& dim = '$dim'";
		}
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
			if(!$db)
			{
				die("Unable to select database");
			}
			//Execute query
			$results = mysqli_query($link,$search);
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo mysqli_info($link);
		}
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
while ($row = mysqli_fetch_assoc($results))
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
//*************************************************************************************************************//
?>