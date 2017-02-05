<?php
/*//Start the session to see if the user is authenticated user.
session_start();
//Check if the user is authenticated first. Or else redirect to login page
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){*/
require('menu.php');
//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_pen'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['brand'] && $_POST['model'] &&
$_POST['color'] && $_POST['price'])){
echo 'All the fields marked as * are compulsory.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$brand = $_POST['brand'];
$price = '\''.$_POST['price'].'\'';
$model = '\''.$_POST['model'].'\'';
$color = $_POST['color'];
}
if(!$_POST['length'])
$length = 'NULL';
else
$length = '\''.$_POST['length'].'\'';
if(!$_POST['nibgrade'])
$nibgrade = 'NULL';
else
$nibgrade = '\''.$_POST['nibgrade'].'\'';
if(!$_POST['type'])
$type = 'NULL';
else
$type = '\''.$_POST['type'].'\'';
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
$query = "INSERT INTO pen(MODEL_ID, BRAND, MODEL, COLOR, PRICE, LENGTH, NIBGRADE, TYPE)
VALUES ('$modelid', '$brand', '$model', '$color', $price, $length, '$nibgrade', '$type')";
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
if ($_POST['submit'] == 'Update_pen'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE pen SET MODEL_ID = '$modelid'";
if($_POST['brand']){
$brand = $_POST['brand']; 
$update = $update . ", BRAND = '$brand'";
}
if($_POST['model']){
$model = $_POST['model']; 
$update = $update . ", MODEL = '$model'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['length']){
$length = $_POST['length']; 
$update = $update . ", LENGTH = $length";
}
if($_POST['nibgrade']){
$nibgrade = $_POST['nibgrade']; 
$update = $update . ", NIBGRADE = '$nibgrade'";
}
if($_POST['type']){
$type = $_POST['type']; 
$update = $update . ", TYPE = '$type'";
}
$update = $update . ' WHERE MODEL_ID = '.$_POST['modelid'];
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
if ($_POST['submit'] == 'Delete_pen'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM pen WHERE MODEL_ID = '$modelid'";
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
echo mysqli_error() . '<br>';
else
echo 'Data deleted successfully';
}
}
//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_books'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['brand'] && $_POST['model'] &&
$_POST['color'] && $_POST['price'] && $_POST['ruling'] &&
$_POST['size'] && $_POST['no_of_pages'])){
echo 'All the fields marked as * are compulsory.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$model = $_POST['model'];
$color = $_POST['color'];
$ruling = $_POST['ruling'];
$size = $_POST['size'];
$no_of_pages = $_POST['no_of_pages'];
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
$query = "INSERT INTO books(MODEL_ID, BRAND, MODEL, COLOR, PRICE, RULING, SIZE, NO_OF_PAGES)
VALUES ('$modelid', '$brand', '$model', '$color', $price, '$ruling', '$size', $no_of_pages)";
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
if ($_POST['submit'] == 'Update_books'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = 'UPDATE books SET MODEL_ID = '.$_POST['modelid'];
if($_POST['brand']){
$brand = $_POST['brand']; 
$update = $update . ", BRAND = '$brand'";
}
if($_POST['model']){
$model = $_POST['model']; 
$update = $update . ", MODEL = '$model'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['ruling']){
$ruling = $_POST['ruling']; 
$update = $update . ", RULING = '$ruling'";
}
if($_POST['size']){
$size = $_POST['size']; 
$update = $update . ", SIZE = '$size'";
}
if($_POST['no_of_pages']){
$no_of_pages = $_POST['no_of_pages']; 
$update = $update . ", NO_OF_PAGES = $no_of_pages";
}
$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_books'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM books WHERE MODEL_ID = '$modelid'";
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
echo mysqli_error() . '<br>';
else
echo 'Data deleted successfully';
}
}
//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_calculator'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['brand'] && $_POST['model'] &&
$_POST['color'] && $_POST['price'] && $_POST['powersource'] &&
$_POST['display'] && $_POST['dim'])){
echo 'All the fields marked as * are compulsory.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$model = $_POST['model'];
$color = $_POST['color'];
$powersource = $_POST['powersource'];
$display = $_POST['display'];
$dim = $_POST['dim'];
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
$query = 'INSERT INTO calculator(MODEL_ID, BRAND, MODEL, COLOR, PRICE, POWERSOURCE, DISPLAY, DIM)
VALUES ($modelid, $brand, $model, $color, $price, $powersource, $display, $dim)';
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
if ($_POST['submit'] == 'Update_calculator'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = 'UPDATE calculator SET MODEL_ID = '.$_POST['modelid'];
if($_POST['brand']){
$brand = $_POST['brand']; 
$update = $update . ", BRAND = '$brand'";
}
if($_POST['model']){
$model = $_POST['model']; 
$update = $update . ", MODEL = '$model'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['powersource']){
$powersource = $_POST['powersource']; 
$update = $update . ", POWERSOURCE = '$powersource'";
}
if($_POST['display']){
$display = $_POST['display']; 
$update = $update . ", DISPLAY = '$display'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$update = $update . ", DIM = '$dim'";
}
$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_calculator'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM calculator WHERE MODEL_ID = $modelid";
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
echo mysqli_error() . '<br>';
else
echo 'Data deleted successfully';
}
}
//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_folders'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['brand'] && $_POST['model'] &&
$_POST['color'] && $_POST['price'] && $_POST['no_of_innerpockets'] &&
$_POST['finishing'] && $_POST['pen_pad'])){
echo 'All the fields marked as * are compulsory.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$model = $_POST['model'];
$color = $_POST['color'];
$no_of_innerpockets = $_POST['no_of_innerpockets'];
$finishing = $_POST['finishing'];
$pen_pad = $_POST['pen_pad'];
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
$query = 'INSERT INTO folders(MODEL_ID, BRAND, MODEL, COLOR, PRICE, NO_OF_INNERPOCKETS, FINISHING, PEN_PAD)
VALUES ($modelid, $brand, $model, $color, $price, $no_of_innerpockets, $finishing, $pen_pad)';
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
if ($_POST['submit'] == 'Update_folders'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = 'UPDATE folders SET MODEL_ID = '.$_POST['modelid'];
if($_POST['brand']){
$brand = $_POST['brand']; 
$update = $update . ", BRAND = '$brand'";
}
if($_POST['model']){
$model = $_POST['model']; 
$update = $update . ", MODEL = '$model'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['no_of_innerpockets']){
$no_of_innerpockets = $_POST['no_of_innerpockets']; 
$update = $update . ", NO_OF_INNERPOCKETS = $no_of_innerpockets";
}
if($_POST['finishing']){
$finishing = $_POST['finishing']; 
$update = $update . ", FINISHING = '$finishing'";
}
if($_POST['pen_pad']){
$pen_pad = $_POST['pen_pad']; 
$update = $update . ", PEN_PAD = '$pen_pad'";
}
$update = $update . ' WHERE MODEL_ID = $modelid';
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
if ($_POST['submit'] == 'Delete_folders'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM folders WHERE MODEL_ID = '$modelid'";
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
echo mysqli_error() . '<br>';
else
echo 'Data deleted successfully';
}
}
//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_cardholder'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['brand'] && $_POST['model'] &&
$_POST['color'] && $_POST['price'] && $_POST['compartments'] &&
$_POST['trays'] && $_POST['interlocking'])){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$model = $_POST['model'];
$color = $_POST['color'];
$compartments = $_POST['compartments'];
$trays = $_POST['trays'];
$interlocking = $_POST['interlocking'];
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
$query = "INSERT INTO cardholder(MODEL_ID, BRAND, MODEL, COLOR, PRICE, COMPARTMENTS, TRAYS, INTERLOCKING)
VALUES ('$modelid', '$brand', '$model', '$color', $price, '$compartments', '$trays', '$interlocking')";
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
if ($_POST['submit'] == 'Update_cardholder'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = 'UPDATE cardholder SET MODEL_ID = '.$_POST['modelid'];
if($_POST['brand']){
$brand = $_POST['brand']; 
$update = $update . ", BRAND = '$brand'";
}
if($_POST['model']){
$model = $_POST['model']; 
$update = $update . ", MODEL = '$model'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['compartments']){
$compartments = $_POST['compartments']; 
$update = $update . ", COMPARTMENTS = '$compartments'";
}
if($_POST['trays']){
$trays = $_POST['trays']; 
$update = $update . ", TRAYS = '$trays'";
}
if($_POST['interlocking']){
$interlocking = $_POST['interlocking']; 
$update = $update . ", INTERLOCKING = '$interlocking'";
}
$update = $update . ' WHERE MODEL_ID = $modelid ';
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
if ($_POST['submit'] == 'Delete_cardholder'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM cardholder WHERE MODEL_ID = '$modelid'";
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
echo mysqli_error() . '<br>';
else
echo 'Data deleted successfully';
}
}
//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_fruits'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['price'] && $_POST['name'] &&
$_POST['unit'] && $_POST['temp'])){
echo 'All the fields marked as * are compulsory.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$price = $_POST['price'];
$name = $_POST['name'];
$unit = $_POST['unit'];
$temp = $_POST['temp'];
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
$query = "INSERT INTO fruits(MODEL_ID, PRICE, NAME, UNIT, TEMP)
VALUES ('$modelid', $price, '$name', '$unit', $temp)";
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
if ($_POST['submit'] == 'Update_fruits'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE fruits SET MODEL_ID = '$modelid'";
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['name']){
$name = $_POST['name']; 
$update = $update . ", NAME = '$name'";
}
if($_POST['unit']){
$unit = $_POST['unit']; 
$update = $update . ", UNIT = '$unit'";
}
if($_POST['temp']){
$temp = $_POST['temp']; 
$update = $update . ", TEMP = '$temp'";
}
$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_fruits'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM fruits WHERE MODEL_ID = '$modelid'";
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
echo mysql_error() . '<br>';
else
echo 'Data deleted successfully';
}
}
//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_meat'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['price'] && $_POST['name'] &&
$_POST['unit'] && $_POST['temp'])){
echo 'All the fields marked as * are compulsory.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$price = $_POST['price'];
$name = $_POST['name'];
$unit = $_POST['unit'];
$temp = $_POST['temp'];
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
$query = "INSERT INTO meat(MODEL_ID, PRICE, NAME, UNIT, TEMP)
VALUES ('$modelid', $price, '$name', '$unit', $temp)";
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
if ($_POST['submit'] == 'Update_meat'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE meat SET MODEL_ID = '$modelid'";
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['name']){
$name = $_POST['name']; 
$update = $update . ", NAME = '$name'";
}
if($_POST['unit']){
$unit = $_POST['unit']; 
$update = $update . ", UNIT = '$unit'";
}
if($_POST['temp']){
$temp = $_POST['temp']; 
$update = $update . ", TEMP = $temp";
}
$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_meat'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM meat WHERE MODEL_ID = '$modelid'";
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
echo mysqli_error() . '<br>';
else
echo 'Data deleted successfully';
}
}
//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_vegetables'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['price'] && $_POST['name'] &&
$_POST['unit'] && $_POST['green'] && $_POST['temp'])){
echo 'All the fields marked as * are compulsory.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$price = $_POST['price'];
$name = $_POST['name'];
$unit = $_POST['unit'];
$green = $_POST['green'];
$temp = $_POST['temp'];
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
$query = "INSERT INTO vegetables(MODEL_ID, PRICE, NAME, UNIT, GREEN, TEMP)
VALUES ('$modelid', $price, '$name', '$unit', '$green', $temp)";
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
if ($_POST['submit'] == 'Update_vegetables'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE vegetables SET MODEL_ID = '$modelid'";
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['name']){
$name = $_POST['name']; 
$update = $update . ", NAME = '$name'";
}
if($_POST['unit']){
$unit = $_POST['unit']; 
$update = $update . ", UNIT = '$unit'";
}
if($_POST['green']){
$green = $_POST['green']; 
$update = $update . ", GREEN = '$green'";
}
if($_POST['temp']){
$temp = $_POST['temp']; 
$update = $update . ", TEMP = $temp";
}
$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_vegetables'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM vegetables WHERE MODEL_ID = '$modelid'";
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
echo mysqli_error() . '<br>';
else
echo 'Data deleted successfully';
}
}
//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_packeditem'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['price'] && $_POST['quan'] &&
$_POST['company'] &&
$_POST['expiry'] && $_POST['v_nv'] &&
$_POST['flavor'] && $_POST['temp'])){
echo 'All the fields marked as * are compulsory.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$price = $_POST['price'];
$quan = $_POST['quan'];
$company = $_POST['company'];
$mfd = "'".$_POST['year'].'-'.$_POST['month']. '-' .$_POST['day']."'";
$expiry = $_POST['expiry'];
$flavor = $_POST['flavor'];
$v_nv = $_POST['v_nv'];
$temp = $_POST['temp'];
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
$query = "INSERT INTO packeditem(MODEL_ID, PRICE, QUAN, COMPANY, MFD, EXPIRY, FLAVOR, V_NV, TEMP)
VALUES ('$modelid', $price, '$quan', '$company', $mfd, $expiry, '$flavor', '$v_nv', $temp)";
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
if ($_POST['submit'] == 'Update_packeditem'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE packeditem SET MODEL_ID = '$modelid'";
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['quan']){
$quan = $_POST['quan']; 
$update = $update . ", QUAN = '$quan'";
}
if($_POST['company']){
$company = $_POST['company']; 
$update = $update . ", COMPANY = '$company'";
}
if($_POST['year'] && $_POST['month'] && $_POST['day']){
$mfd = "'".$_POST['year'].'-'.$_POST['month']. '-' .$_POST['day']."'"; 
$update = $update . ", MFD = $mfd";
}
if($_POST['expiry']){
$expiry = $_POST['expiry']; 
$update = $update . ", EXPIRY = $expiry";
}
if($_POST['flavor']){
$flavor = $_POST['flavor']; 
$update = $update . ", FLAVOR = '$flavor'";
}
if($_POST['v_nv']){
$v_nv = $_POST['v_nv']; 
$update = $update . ", V_NV = '$v_nv'";
}
if($_POST['temp']){
$temp = $_POST['temp']; 
$update = $update . ", TEMP = $temp";
}
$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_packeditem'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM packeditem WHERE MODEL_ID = '$modelid'";
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
//***************************************************************************************
if ($_POST['submit'] == 'Insert_skincare'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['brand'] && $_POST['mfdyear'] && $_POST['mfdmonth'] && $_POST['mfdday'] &&  $_POST['expyear'] && $_POST['expmonth'] && $_POST['expday'] && $_POST['price'] && $_POST['description']  && $_POST['idealfor'] && $_POST['quan'] && $_POST['category'] && $_POST['skintype'] && $_POST['benefits'] )){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$description = $_POST['description'];
$mfd = "'".$_POST['mfdyear'] . '-' . $_POST['mfdmonth'] . '-' . $_POST['mfdday']."'";
$expiry = "'".$_POST['expyear'] . '-' . $_POST['expmonth'] . '-' . $_POST['expday']."'";
$idealfor = $_POST['idealfor'];
$quan = $_POST['quan'];
$category = $_POST['category'];
$skintype = $_POST['skintype'];
$benefits = $_POST['benefits'];

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
$query = "INSERT INTO skincare(MODEL_ID, BRAND, PRICE,DESCRIPTION,MFD,EXPIRY,IDEALFOR,QUAN,CATEGORY,SKINTYPE,BENEFITS)
VALUES ('$modelid' ,
'$brand',
$price ,
'$description',
$mfd,
$expiry,
'$idealfor',
$quan,
'$category' ,
'$skintype',
'$benefits')";
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
if ($_POST['submit'] == 'Update_skincare'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE skincare SET MODEL_ID = '$modelid'";
if($_POST['brand']){
$brand = $_POST['brand']; 
$update = $update . ", BRAND = '$brand'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ",PRICE = '$price'";
}
if($_POST['description']){
$description = $_POST['description']; 
$update = $update . ", DESCRIPTION = '$description'";
}
if($_POST['mfdyear'] && $_POST['mfdmonth'] && $_POST['mfdday']){
$mfd = "'".$_POST['mfdyear'].'-'.$_POST['mfdmonth']. '-' .$_POST['mfdday']."'"; 
$update = $update . ", MFD = $mfd";
}
if($_POST['expyear'] && $_POST['expmonth'] && $_POST['expday']){
$expiry = "'".$_POST['expyear'].'-'.$_POST['expmonth']. '-' .$_POST['expday']."'"; 
$update = $update . ", EXPIRY = $expiry";
}

if($_POST['idealfor']){
$idealfor = $_POST['idealfor']; 
$update = $update . ", IDEALFOR = '$idealfor'";
}
if($_POST['quan']){
$quan = $_POST['quan']; 
$update = $update . ",QUAN  = '$quan'";
}
if($_POST['category']){
$category = $_POST['category']; 
$update = $update . ", CATEGORY = '$category'";
}
if($_POST['skintype']){
$skintype = $_POST['skintype']; 
$update = $update . ",SKINTYPE  = '$skintype'";
}
if($_POST['benefits']){
$benefits = $_POST['benefits']; 
$update = $update . ", BENEFITS = '$benefits'";
}

$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_skincare'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM skincare WHERE MODEL_ID ='$modelid'";
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
//*************************************************************************************************************//

if ($_POST['submit'] == 'Insert_haircare'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['brand'] && $_POST['price'] && $_POST['description'] && $_POST['mfdyear'] && $_POST['mfdmonth'] && $_POST['mfdday'] &&  $_POST['expyear'] && $_POST['expmonth'] && $_POST['expday'] && $_POST['idealfor'] && $_POST['quan'] && $_POST['category'] && $_POST['usedfor'] && $_POST['hairtype'] )){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$description = $_POST['description'];
$mfd = "'".$_POST['mfdyear'] . '-' . $_POST['mfdmonth'] . '-' . $_POST['mfdday']."'";
$expiry = "'".$_POST['expyear'] . '-' . $_POST['expmonth'] . '-' . $_POST['expday']."'";
$idealfor = $_POST['idealfor'];
$quan = $_POST['quan'];
$category = $_POST['category'];
$usedfor = $_POST['usedfor'];
$hairtype = $_POST['hairtype'];
//$ = '\''.$_POST[''].'\'';
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
$query = "INSERT INTO haircare(MODEL_ID, BRAND, PRICE,DESCRIPTION,MFD,EXPIRY,IDEALFOR,QUAN,CATEGORY,USEDFOR,HAIRTYPE)
VALUES ('$modelid' ,
'$brand' ,
$price ,
'$description',
$mfd,
$expiry ,
'$idealfor',
$quan ,
'$category' ,
'$usedfor',
'$hairtype')";
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
if ($_POST['submit'] == 'Update_haircare'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE haircare SET MODEL_ID = '$modelid'";
if($_POST['brand']){
$brand = $_POST['brand']; 
$update = $update . ", BRAND = '$brand'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ",PRICE = '$price'";
}
if($_POST['description']){
$description = $_POST['description']; 
$update = $update . ", DESCRIPTION = '$description'";
}
if($_POST['mfdyear'] && $_POST['mfdmonth'] && $_POST['mfdday']){
$mfd = "'".$_POST['mfdyear'].'-'.$_POST['mfdmonth']. '-' .$_POST['mfdday']."'"; 
$update = $update . ", MFD = $mfd";
}
if($_POST['expyear'] && $_POST['expmonth'] && $_POST['expday']){
$expiry = "'".$_POST['expyear'].'-'.$_POST['expmonth']. '-' .$_POST['expday']."'"; 
$update = $update . ", EXPIRY = $expiry";
}
if($_POST['idealfor']){
$idealfor = $_POST['idealfor']; 
$update = $update . ", IDEALFOR = '$idealfor'";
}
if($_POST['quan']){
$quan = $_POST['quan']; 
$update = $update . ",QUAN  = '$quan'";
}
if($_POST['category']){
$category = $_POST['category']; 
$update = $update . ", CATEGORY = '$category'";
}
if($_POST['usedfor']){
$usedfor = $_POST['usedfor']; 
$update = $update . ",USEDFOR  = '$usedfor'";
}
if($_POST['hairtype']){
$hairtype = $_POST['hairtype']; 
$update = $update . ", HAIRTYPE = '$hairtype'";
}

$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_haircare'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM haircare WHERE MODEL_ID = '$modelid'";
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
//*************************************

if ($_POST['submit'] == 'Insert_nailpolish'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['brand'] && $_POST['price'] && $_POST['description'] && $_POST['mfdyear'] && $_POST['mfdmonth'] && $_POST['mfdday']   && $_POST['idealfor'] && $_POST['quan'] && $_POST['organictype'] && $_POST['containershape'] && $_POST['shade'] )){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$description = $_POST['description'];
$mfd = "'".$_POST['mfdyear'] . '-' . $_POST['mfdmonth'] . '-' . $_POST['mfdday']."'";
//$expiry = "'".$_POST['expyear'] . '-' . $_POST['expmonth'] . '-' . $_POST['expday']."'";
$idealfor = $_POST['idealfor'];
$quan = $_POST['quan'];
$organictype = $_POST['organictype'];
$containershape = $_POST['containershape'];
$shade = $_POST['shade'];
//$ = '\''.$_POST[''].'\'';
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
$query = "INSERT INTO nailpolish(MODEL_ID, BRAND, PRICE,DESCRIPTION,MFD,IDEALFOR,QUAN,ORGANICTYPE,CONTAINERSHAPE,SHADE)
VALUES ('$modelid' ,
'$brand' ,
$price ,
'$description',
$mfd,
'$idealfor',
$quan ,
'$organictype' ,
'$containershape',
'$shade')";
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
if ($_POST['submit'] == 'Update_nailpolish'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE nailpolish SET MODEL_ID = '$modelid'";
if($_POST['brand']){
$brand = $_POST['brand']; 
$update = $update . ", BRAND = '$brand'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ",PRICE = '$price'";
}
if($_POST['description']){
$description = $_POST['description']; 
$update = $update . ", DESCRIPTION = '$description'";
}
if($_POST['mfdyear'] && $_POST['mfdmonth'] && $_POST['mfdday']){
$mfd = "'".$_POST['mfdyear'].'-'.$_POST['mfdmonth']. '-' .$_POST['mfdday']."'"; 
$update = $update . ", MFD = $mfd";
}

if($_POST['idealfor']){
$idealfor = $_POST['idealfor']; 
$update = $update . ", IDEALFOR = '$idealfor'";
}
if($_POST['quan']){
$quan = $_POST['quan']; 
$update = $update . ",QUAN  = '$quan'";
}
if($_POST['organictype']){
$organictype = $_POST['organictype']; 
$update = $update . ", ORGANICTYPE = '$organictype'";
}
if($_POST['containershape']){
$containershape = $_POST['containershape']; 
$update = $update . ",CONTAINERSHAPE  = '$containershape'";
}
if($_POST['shade']){
$shade = $_POST['shade']; 
$update = $update . ", SHADE = '$shade'";
}

$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_nailpolish'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM nailpolish WHERE MODEL_ID = '$modelid'";
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
//**********************************************

if ($_POST['submit'] == 'Insert_kajal'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['brand'] && $_POST['price'] && $_POST['description'] && $_POST['mfdyear'] && $_POST['mfdmonth'] && $_POST['mfdday'] &&  $_POST['expyear'] && $_POST['expmonth']&& $_POST['expday'] && $_POST['idealfor'] && $_POST['quan'] && $_POST['smudge'] && $_POST['duration'] && $_POST['shade'] )){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$description = $_POST['description'];
$mfd = "'".$_POST['mfdyear'] . '-' . $_POST['mfdmonth'] . '-' . $_POST['mfdday']."'";
$expiry = "'".$_POST['expyear'] . '-' . $_POST['expmonth'] . '-' . $_POST['expday']."'";
$idealfor = $_POST['idealfor'];
$quan = $_POST['quan'];
$smudge = $_POST['smudge'];
$duration = $_POST['duration'];
$shade = $_POST['shade'];
//$ = '\''.$_POST[''].'\'';
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
$query = "INSERT INTO kajal(MODEL_ID, BRAND, PRICE,DESCRIPTION,MFD,EXPIRY,IDEALFOR,QUAN,SMUDGE,DURATION,SHADE)
VALUES ('$modelid' ,
'$brand',
$price ,
'$description',
$mfd ,
$expiry,
'$idealfor',
$quan ,
'$smudge' ,
'$duration',
'$shade')";
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
if ($_POST['submit'] == 'Update_kajal'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE kajal SET MODEL_ID = '$modelid'";
if($_POST['brand']){
$brand = $_POST['brand']; 
$update = $update . ", BRAND = '$brand'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ",PRICE = '$price'";
}
if($_POST['description']){
$description = $_POST['description']; 
$update = $update . ", DESCRIPTION = '$description'";
}
if($_POST['mfdyear'] && $_POST['mfdmonth'] && $_POST['mfdday']){
$mfd = "'".$_POST['mfdyear'].'-'.$_POST['mfdmonth']. '-' .$_POST['mfdday']."'"; 
$update = $update . ", MFD = $mfd";
}
if($_POST['expyear'] && $_POST['expmonth'] && $_POST['expday']){
$expiry = "'".$_POST['expyear'].'-'.$_POST['expmonth']. '-' .$_POST['expday']."'"; 
$update = $update . ", EXPIRY = $expiry";
}
if($_POST['idealfor']){
$idealfor = $_POST['idealfor']; 
$update = $update . ", IDEALFOR = '$idealfor'";
}
if($_POST['quan']){
$quan = $_POST['quan']; 
$update = $update . ",QUAN  = '$quan'";
}
if($_POST['smudge']){
$smudge = $_POST['smudge']; 
$update = $update . ", SMUDGE = '$smudge'";
}
if($_POST['duration']){
$duration = $_POST['duration']; 
$update = $update . ",DURATION  = '$duration'";
}
if($_POST['shade']){
$shade = $_POST['shade']; 
$update = $update . ", SHADE = '$shade'";
}

$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_kajal'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM kajal WHERE MODEL_ID = '$modelid'";
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
//********************************************

if ($_POST['submit'] == 'Insert_lipstick'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['brand'] && $_POST['price'] && $_POST['description'] && $_POST['mfdyear'] && $_POST['mfdmonth'] && $_POST['mfdday'] &&  $_POST['expyear'] && $_POST['expmonth'] && $_POST['expday']  && $_POST['idealfor'] && $_POST['quan'] && $_POST['type'] && $_POST['finish'] && $_POST['organic'] && $_POST['shade'] )){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$description = $_POST['description'];
$mfd = "'".$_POST['mfdyear'] . '-' . $_POST['mfdmonth'] . '-' . $_POST['mfdday']."'";
$expiry = "'".$_POST['expyear'] . '-' . $_POST['expmonth'] . '-' . $_POST['expday']."'";
$idealfor = $_POST['idealfor'];
$quan = $_POST['quan'];
$type = $_POST['type'];
$finish = $_POST['finish'];
$organic = $_POST['organic'];
$shade = $_POST['shade'];
//$ = '\''.$_POST[''].'\'';
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
$query = "INSERT INTO lipstick(MODEL_ID, BRAND, PRICE,DESCRIPTION,MFD,EXPIRY,IDEALFOR,QUAN,TYPE,FINISH,ORGANIC,SHADE)
VALUES ('$modelid' ,
'$brand' ,
$price ,
'$description',
$mfd,
$expiry,
'$idealfor',
$quan ,
'$type' ,
'$finish',
'$organic',
'$shade')";
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
if ($_POST['submit'] == 'Update_lipstick'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE lipstick SET MODEL_ID = '$modelid'";
if($_POST['brand']){
$brand = $_POST['brand']; 
$update = $update . ", BRAND = '$brand'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ",PRICE = '$price'";
}
if($_POST['description']){
$description = $_POST['description']; 
$update = $update . ", DESCRIPTION = '$description'";
}
if($_POST['mfdyear'] && $_POST['mfdmonth'] && $_POST['mfdday']){
$mfd = "'".$_POST['mfdyear'].'-'.$_POST['mfdmonth']. '-' .$_POST['mfdday']."'"; 
$update = $update . ", MFD = $mfd";
}
if($_POST['expyear'] && $_POST['expmonth'] && $_POST['expday']){
$expiry = "'".$_POST['expyear'].'-'.$_POST['expmonth']. '-' .$_POST['expday']."'"; 
$update = $update . ", EXPIRY = $expiry";
}
if($_POST['idealfor']){
$idealfor = $_POST['idealfor']; 
$update = $update . ", IDEALFOR = '$idealfor'";
}
if($_POST['quan']){
$quan = $_POST['quan']; 
$update = $update . ",QUAN  = '$quan'";
}
if($_POST['type']){
$type = $_POST['type']; 
$update = $update . ", TYPE = '$type'";
}
if($_POST['finish']){
$finish = $_POST['finish']; 
$update = $update . ",FINISH  = '$finish'";
}
if($_POST['organic']){
$organic = $_POST['organic']; 
$update = $update . ",ORGANIC  = '$organic'";
}
if($_POST['shade']){
$shade = $_POST['shade']; 
$update = $update . ", SHADE = '$shade'";
}

$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_lipstick'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM lipstick WHERE MODEL_ID = '$modelid'";
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
//************************************

if ($_POST['submit'] == 'Insert_washingmach'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['company'] && $_POST['model'] && $_POST['price'] && $_POST['color'] && $_POST['warranty'] && $_POST['dim'] && $_POST['digital'] && $_POST['controltype'] && $_POST['loadtype'] && $_POST['method'] )){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$company = $_POST['company'];
$model = $_POST['model'];
$price = $_POST['price'];
$color = $_POST['color'];
$warranty = $_POST['warranty'];
$dim = $_POST['dim'];
$digital = $_POST['digital'];
$controltype = $_POST['controltype'];
$loadtype = $_POST['loadtype'];
$method = $_POST['method'];
//$ = '\''.$_POST[''].'\'';
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
$query = "INSERT INTO washingmach(MODEL_ID,COMPANY,MODEL,PRICE,COLOR,WARRANTY,DIM,DIGITAL,CONTROLTYPE,LOADTYPE,METHOD)
VALUES ('$modelid' ,
'$company' ,
'$model' ,
$price,
'$color' ,
'$warranty' ,
'$dim',
'$digital' ,
'$controltype' ,
'$loadtype',
'$method')";
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
if ($_POST['submit'] == 'Update_washingmach'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE washingmach SET MODEL_ID = '$modelid'";
if($_POST['company']){
$company = $_POST['company']; 
$update = $update . ", COMPANY = '$company'";
}
if($_POST['model']){
$model = $_POST['model']; 
$update = $update . ",MODEL= '$model'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = '$price'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$update = $update . ", WARRANTY = '$warranty'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$update = $update . ", DIM = '$dim'";
}
if($_POST['digital']){
$digital = $_POST['digital']; 
$update = $update . ",DIGITAL  = '$digital'";
}
if($_POST['controltype']){
$controltype = $_POST['controltype']; 
$update = $update . ", CONTROLTYPE = '$controltype'";
}
if($_POST['loadtype']){
$loadtype = $_POST['loadtype']; 
$update = $update . ", LOADTYPE  = '$loadtype'";
}
if($_POST['method']){
$method = $_POST['method']; 
$update = $update . ",METHOD  = '$method'";
}

}

$update = $update . " WHERE MODEL_ID = '$modelid'";
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
// Code to be executed when 'Delete' is clicked.
if ($_POST['submit'] == 'Delete_washingmach'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM washingmach WHERE MODEL_ID = '$modelid'";
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
//*********************************

if ($_POST['submit'] == 'Insert_ac'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['company'] && $_POST['model'] && $_POST['price'] && $_POST['color'] && $_POST['warranty'] && $_POST['dim'] && $_POST['type'] && $_POST['capacity'] && $_POST['energyrating'] && $_POST['weight'] && $_POST['powerreq'] )){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$company = $_POST['company'];
$model = $_POST['model'];
$price = $_POST['price'];
$color = $_POST['color'];
$warranty = $_POST['warranty'];
$dim = $_POST['dim'];
$type = $_POST['type'];
$capacity = $_POST['capacity'];
$energyrating = $_POST['energyrating'];
$weight =$_POST['weight'];
$powerreq = $_POST['powerreq'];
//$ = '\''.$_POST[''].'\'';
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
$query = "INSERT INTO ac(MODEL_ID,COMPANY,MODEL,PRICE,COLOR,WARRANTY,DIM,TYPE,CAPACITY,ENERGYRATING,WEIGHT,POWERREQ)
VALUES ('$modelid' ,
'$company' ,
'$model' ,
$price,
'$color' ,
'$warranty' ,
'$dim',
'$type' ,
'$capacity' ,
'$energyrating',
'$weight',
'$powerreq')";
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
if ($_POST['submit'] == 'Update_ac'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE ac SET MODEL_ID = '$modelid'";
if($_POST['company']){
$company = $_POST['company']; 
$update = $update . ", COMPANY = '$company'";
}
if($_POST['model']){
$model = $_POST['model']; 
$update = $update . ",MODEL= '$model'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = '$price'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$update = $update . ", WARRANTY = '$warranty'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$update = $update . ", DIM = '$dim'";
}
if($_POST['type']){
$type = $_POST['type']; 
$update = $update . ",TYPE  = '$type'";
}
if($_POST['capacity']){
$capacity = $_POST['capacity']; 
$update = $update . ", CAPACITY = '$capacity'";
}
if($_POST['energyrating']){
$energyrating = $_POST['energyrating']; 
$update = $update . ",ENERGYRATING = '$energyrating'";
}
if($_POST['weight']){
$weight = $_POST['weight']; 
$update = $update . ",WEIGHT  = '$weight'";
}
if($_POST['powerreq']){
$powerreq = $_POST['powerreq']; 
$update = $update . ",POWERREQ  = '$powerreq'";
}
}

$update = $update . " WHERE MODEL_ID = '$modelid'";
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
// Code to be executed when 'Delete' is clicked.
if ($_POST['submit'] == 'Delete_ac'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM ac WHERE MODEL_ID = '$modelid'";
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
//************************************
if ($_POST['submit'] == 'Insert_fridge'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['company'] && $_POST['model'] && $_POST['price'] && $_POST['color'] && $_POST['warranty'] && $_POST['dim'] && $_POST['type']  && $_POST['technology'] && $_POST['capacity']  )){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$company = $_POST['company'];
$model =$_POST['model'];
$price = $_POST['price'];
$color = $_POST['color'];
$warranty = $_POST['warranty'];
$dim = $_POST['dim'];
$type = $_POST['type'];
$technology = $_POST['technology'];
$capacity = $_POST['capacity'];


//$ = '\''.$_POST[''].'\'';
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
$query = "INSERT INTO fridge(MODEL_ID,COMPANY,MODEL,PRICE,COLOR,WARRANTY,DIM,TYPE,TECHNOLOGY,CAPACITY)
VALUES ('$modelid' ,
'$company' ,
'$model' ,
$price,
'$color' ,
'$warranty' ,
'$dim',
'$type' ,
'$technology',
'$capacity')";
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
if ($_POST['submit'] == 'Update_fridge'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE fridge SET MODEL_ID = '$modelid'";
if($_POST['company']){
$company = $_POST['company']; 
$update = $update . ", COMPANY = '$company'";
}
if($_POST['model']){
$model = $_POST['model']; 
$update = $update . ",MODEL= '$model'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = '$price'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$update = $update . ", WARRANTY = '$warranty'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$update = $update . ", DIM = '$dim'";
}
if($_POST['type']){
$type = $_POST['type']; 
$update = $update . ",TYPE  = '$type'";
}
if($_POST['technology']){
$technology = $_POST['technology']; 
$update = $update . ",TECHNOLOGY = '$technology'";
}
if($_POST['capacity']){
$capacity= $_POST['capacity']; 
$update = $update . ", CAPACITY = '$capacity'";
}


}
$update = $update . " WHERE MODEL_ID = '$modelid'";
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
// Code to be executed when 'Delete' is clicked.
if ($_POST['submit'] == 'Delete_fridge'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM fridge WHERE MODEL_ID = '$modelid'";
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
//*************************************





if ($_POST['submit'] == 'Insert_tv'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['company'] && $_POST['model'] && $_POST['price'] && $_POST['color'] && $_POST['warranty'] && $_POST['dim'] && $_POST['resolution'] && $_POST['features'] && $_POST['screentype'] && $_POST['connectivity'] && $_POST['hdmi'] && $_POST['usb'] )){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$company = $_POST['company'];
$model = $_POST['model'];
$price = $_POST['price'];
$color = $_POST['color'];
$warranty = $_POST['warranty'];
$dim = $_POST['dim'];
$resolution = $_POST['resolution'];
$features = $_POST['features'];
$screentype = $_POST['screentype'];
$connectivity = $_POST['connectivity'];
$hdmi = $_POST['hdmi'];
$usb = $_POST['usb'];
//$ = '\''.$_POST[''].'\'';
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
$query ="INSERT INTO tv(MODEL_ID,COMPANY,MODEL,PRICE,COLOR,WARRANTY,DIM,RESOLUTION,FEAUTRES,SCREENTYPE,CONNECTIVITY,HDMI,USB)
VALUES ('$modelid' ,
'$company' ,
'$model' ,
$price,
'$color' ,
'$warranty' ,
'$dim',
'$resolution' ,
'$features' ,
'$screentype',
'$connectivity',
'$hdmi',
'$usb')";
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
if ($_POST['submit'] == 'Update_tv'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE tv SET MODEL_ID = '$modelid'";
if($_POST['company']){
$company = $_POST['company']; 
$update = $update . ", COMPANY = '$company'";
}
if($_POST['model']){
$model = $_POST['model']; 
$update = $update . ",MODEL= '$model'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = '$price'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$update = $update . ", WARRANTY = '$warranty'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$update = $update . ", DIM = '$dim'";
}
if($_POST['resolution']){
$resolution = $_POST['resolution']; 
$update = $update . ",RESOLUTION = '$resolution'";
}
if($_POST['features']){
$features = $_POST['features']; 
$update = $update . ", FEATURES = '$features'";
}
if($_POST['screentype']){
$screentype = $_POST['screentype']; 
$update = $update . ",SCREENTYPE= '$screentype'";
}
if($_POST['connectivity']){
$connectivity= $_POST['connectivity']; 
$update = $update . ",CONNECTIVITY  = '$connectivity'";
}
if($_POST['hdmi']){
$hdmi= $_POST['hdmi']; 
$update = $update . ",HDMI  = '$hdmi'";
}
if($_POST['usb']){
$usb = $_POST['usb']; 
$update = $update . ",USB  = '$usb'";
}
}
$update = $update . " WHERE MODEL_ID = '$modelid'";
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
// Code to be executed when 'Delete' is clicked.
if ($_POST['submit'] == 'Delete_tv'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM tv WHERE MODEL_ID = '$modelid'";
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



//*****************************************

if ($_POST['submit'] == 'Insert_oven'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['company'] && $_POST['model'] && $_POST['price'] && $_POST['color'] && $_POST['warranty'] && $_POST['dim'] && $_POST['type'] && $_POST['capacity'] && $_POST['controltype'] && $_POST['weight'] && $_POST['powerout'] )){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$company = $_POST['company'];
$model = $_POST['model'];
$price = $_POST['price'];
$color = $_POST['color'];
$warranty =$_POST['warranty'];
$dim = $_POST['dim'];
$type = $_POST['type'];
$capacity = $_POST['capacity'];
$controltype = $_POST['controltype'];
$weight = $_POST['weight'];
$powerout = $_POST['powerout'];
//$ = '\''.$_POST[''].'\'';
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
$query = "INSERT INTO oven(MODEL_ID,COMPANY,MODEL,PRICE,COLOR,WARRANTY,DIM,TYPE,CAPACITY,CONTROLTYPE,WEIGHT,POWEROUT)
VALUES ('$modelid' ,
'$company' ,
'$model' ,
$price,
'$color' ,
'$warranty' ,
'$dim',
'$type' ,
'$capacity' ,
'$controltype',
'$weight',
'$powerout')";
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
if ($_POST['submit'] == 'Update_oven'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE oven SET MODEL_ID = '$modelid'";
if($_POST['company']){
$company = $_POST['company']; 
$update = $update . ", COMPANY = '$company'";
}
if($_POST['model']){
$model = $_POST['model']; 
$update = $update . ",MODEL= '$model'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = '$price'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$update = $update . ", WARRANTY = '$warranty'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$update = $update . ", DIM = '$dim'";
}
if($_POST['type']){
$type = $_POST['type']; 
$update = $update . ",TYPE  = '$type'";
}
if($_POST['capacity']){
$capacity = $_POST['capacity']; 
$update = $update . ", CAPACITY = '$capacity'";
}
if($_POST['controltype']){
$controltype = $_POST['controltype']; 
$update = $update . ",CONTROLTYPE = '$controltype'";
}
if($_POST['weight']){
$weight = $_POST['weight']; 
$update = $update . ",WEIGHT  = '$weight'";
}
if($_POST['powerout']){
$powerout = $_POST['powerout']; 
$update = $update . ",POWEROUT  = '$powerout'";
}
}
$update = $update . " WHERE MODEL_ID = '$modelid'";
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
// Code to be executed when 'Delete' is clicked.
if ($_POST['submit'] == 'Delete_oven'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM oven WHERE MODEL_ID = '$modelid'";
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
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_mobiles'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['company'] && $_POST['model'] && $_POST['name'] 
&& $_POST['display'] && $_POST['price'] && $_POST['int_memory'] && $_POST['ext_memory'])){
echo 'All the fields marked as * are compulsory.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$company = $_POST['company'];
$model = $_POST['model'];
$name = $_POST['name'];
$display= $_POST['display'];
$price =$_POST['price'];
$int_memory = $_POST['int_memory'];
$ext_memory = $_POST['ext_memory'];
}
if(!$_POST['camera'])
$camera = 'NULL';
else
$camera = $_POST['camera'];
if(!$_POST['color'])
$color = 'NULL';
else
$color = $_POST['color'];
if(!$_POST['warranty'])
$warranty = 'NULL';
else
$warranty = $_POST['warranty'];
if(!$_POST['battery'])
$battery = 'NULL';
else
$battery = $_POST['battery'];
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
$query = "INSERT INTO mobiles(MODEL_ID, COMPANY, MODEL, NAME, CAMERA, COLOR, WARRANTY, DISPLAY, BATTERY, PRICE, INT_MEMORY,EXT_MEMORY)
VALUES ('$modelid', '$company', '$model', '$name', '$camera', '$color', '$warranty', '$display', '$battery', $price, '$int_memory', '$ext_memory')";
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
if ($_POST['submit'] == 'Update_mobiles'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE mobiles SET MODEL_ID = '$modelid'";
if($_POST['company']){
$company = $_POST['company']; 
$update = $update . ", COMPANY = '$company'";
}
if($_POST['model']){
$model = $_POST['model']; 
$update = $update . ", MODEL = '$model'";
}
if($_POST['name']){
$name = $_POST['name']; 
$update = $update . ", NAME = '$name'";
}
if($_POST['camera']){
$camera = $_POST['camera']; 
$update = $update . ", CAMERA = '$camera'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$update = $update . ", WARRANTY = '$warranty'";
}
if($_POST['display']){
$display = $_POST['display']; 
$update = $update . ", DISPLAY = '$display'";
}
if($_POST['battery']){
$battery = $_POST['battery']; 
$update = $update . ", BATTERY = '$battery'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['int_memory']){
$int_memory = $_POST['int_memory']; 
$update = $update . ", INT_MEMORY = '$int_memory'";
}
if($_POST['ext_memory']){
$ext_memory = $_POST['ext_memory']; 
$update = $update . ", EXT_MEMORY = '$ext_memory'";
}
$update = $update . " WHERE MODEL_ID = '.$modelid'";
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
if ($_POST['submit'] == 'Delete_mobiles'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM mobiles WHERE MODEL_ID = '$modelid'";
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

//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_laptop'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['company'] && $_POST['model'] && $_POST['name'] && $_POST['camera']
&& $_POST['display'] && $_POST['price'] && $_POST['core'] && $_POST['ram'] && $_POST['hdd'] && $_POST['os']
 && $_POST['hdmi'] && $_POST['usb'])){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$company = $_POST['company'];
$model = $_POST['model'];
$name = $_POST['name'];
$camera = $_POST['camera'];
$display= $_POST['display'];
$price = $_POST['price'];
$core = $_POST['core'];
$ram = $_POST['ram'];
$hdd = $_POST['hdd'];
$os = $_POST['os'];
$hdmi = $_POST['hdmi'];
$usb = $_POST['usb'];
$ext_memory = $_POST['ext_memory'];

}
if(!$_POST['color'])
$color = 'NULL';
else
$color = $_POST['color'];
if(!$_POST['warranty'])
$warranty = 'NULL';
else
$warranty = $_POST['warranty'];
if(!$_POST['battery'])
$battery = 'NULL';
else
$battery = $_POST['battery'];
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
$query = "INSERT INTO laptop(MODEL_ID, COMPANY, MODEL, NAME, CAMERA, COLOR, WARRANTY, DISPLAY, BATTERY, PRICE, CORE, RAM, HDD, OS, HDMI, USB)
VALUES ('$modelid', '$company', '$model', '$name', '$camera', '$color', '$warranty', '$display', '$battery', $price, '$core', '$ram', '$hdd', '$os', '$hdmi', '$usb')";
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
if ($_POST['submit'] == 'Update_laptop'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE laptop SET MODEL_ID = '$modelid'";
if($_POST['company']){
$company = $_POST['company']; 
$update = $update . ", COMPANY = '$company'";
}
if($_POST['model']){
$model = $_POST['model']; 
$update = $update . ", MODEL = '$model'";
}
if($_POST['name']){
$name = $_POST['name']; 
$update = $update . ", NAME = '$name'";
}
if($_POST['camera']){
$camera = $_POST['camera']; 
$update = $update . ", CAMERA = '$camera'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$update = $update . ", WARRANTY = '$warranty'";
}
if($_POST['display']){
$display = $_POST['display']; 
$update = $update . ", DISPLAY = '$display'";
}
if($_POST['battery']){
$battery = $_POST['battery']; 
$update = $update . ", BATTERY = '$battery'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['core']){
$core = $_POST['core']; 
$update = $update . ", CORE = '$core'";
}
if($_POST['ram']){
$ram = $_POST['ram'];
$update = $update . ", RAM = '$ram'";
}
if($_POST['hdd']){
$hdd = $_POST['hdd']; 
$update = $update . ", HDD = '$hdd'";
}
if($_POST['os']){
$os = $_POST['os']; 
$update = $update . ", OS = '$os'";
}
if($_POST['hdmi']){
$hdmi = $_POST['hdmi']; 
$update = $update . ", HDMI = '$hdmi'";
}
if($_POST['usb']){
$usb = $_POST['usb']; 
$update = $update . ", USB = '$usb'";
}
$update = $update . " WHERE MODEL_ID = '.$modelid'";
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
if ($_POST['submit'] == 'Delete_laptop'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM laptop WHERE MODEL_ID = '$modelid'";
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

//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_sofa'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['brand'] && $_POST['style'] && $_POST['dim'] && $_POST['price'] && $_POST['seatingcapacity'])){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$brand = $_POST['brand'];
$style = $_POST['style'];
$dim = $_POST['dim'];
$price = $_POST['price'];
$seatingcapacity = $_POST['seatingcapacity'];

}
if(!$_POST['deliverycondtn'])
$deliverycondtn = 'NULL';
else
$deliverycondtn = $_POST['deliverycondtn'];
if(!$_POST['color'])
$color = 'NULL';
else
$color = $_POST['color'];
if(!$_POST['suitablefor'])
$suitablefor = 'NULL';
else
$suitablefor = $_POST['suitablefor'];
if(!$_POST['warranty'])
$warranty = 'NULL';
else
$warranty = $_POST['warranty'];
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
$query = "INSERT INTO sofa(MODEL_ID, BRAND, STYLE, DELIVERYCONDTN, DIM, COLOR, SUITABLEFOR, WARRANTY, PRICE, SEATINGCAPACITY)
VALUES ('$modelid', '$brand', '$style', '$deliverycondtn', '$dim', '$color', '$suitablefor', '$warranty', $price, '$seatingcapacity')";
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
if ($_POST['submit'] == 'Update_sofa'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE sofa SET MODEL_ID = '$modelid'";
if($_POST['brand']){
$brand = $_POST['brand']; 
$update = $update . ", BRAND = '$brand'";
}
if($_POST['style']){
$style = $_POST['style']; 
$update = $update . ", STYLE = '$style'";
}
if($_POST['deliverycondtn']){
$deliverycondtn = $_POST['deliverycondtn']; 
$update = $update . ", DELIVERYCONDTN = '$deliverycondtn'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$update = $update . ", DIM = '$dim'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['suitablefor']){
$suitablefor = $_POST['suitablefor']; 
$update = $update . ", SUITABLEFOR = '$suitablefor'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$update = $update . ", WARRANTY = '$warranty'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['seatingcapacity']){
$seatincapacity = $_POST['seatingcapacity']; 
$update = $update . ", SEATINGCAPACITY = '$seatincapacity'";
}
$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_sofa'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM sofa WHERE MODEL_ID = '$modelid'";
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

//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_bed'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['brand'] && $_POST['style'] && $_POST['dim'] && $_POST['price'] && $_POST['size'])){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$brand = $_POST['brand'];
$style = $_POST['style'];
$dim = $_POST['dim'];
$price = $_POST['price'];
$size = $_POST['size'];

}
if(!$_POST['deliverycondtn'])
$deliverycondtn = 'NULL';
else
$deliverycondtn = $_POST['deliverycondtn'];
if(!$_POST['color'])
$color = 'NULL';
else
$color = $_POST['color'];
if(!$_POST['suitablefor'])
$suitablefor = 'NULL';
else
$suitablefor = $_POST['suitablefor'];
if(!$_POST['warranty'])
$warranty = 'NULL';
else
$warranty = $_POST['warranty'];
if(!$_POST['type'])
$type = 'NULL';
else
$type = $_POST['type'];
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
$query = "INSERT INTO bed(MODEL_ID, BRAND, STYLE, DELIVERYCONDTN, DIM, COLOR, SUITABLEFOR, WARRANTY, PRICE, TYPE, SIZE)
VALUES ('$modelid', '$brand', '$style', '$deliverycondtn', '$dim', '$color', '$suitablefor', '$warranty', $price, '$type', '$size')";
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
if ($_POST['submit'] == 'Update_bed'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE bed SET MODEL_ID = '$modelid'";
if($_POST['brand']){
$brand = $_POST['brand']; 
$update = $update . ", BRAND = '$brand'";
}
if($_POST['style']){
$style = $_POST['style']; 
$update = $update . ", STYLE = '$style'";
}
if($_POST['deliverycondtn']){
$deliverycondtn = $_POST['deliverycondtn']; 
$update = $update . ", DELIVERYCONDTN = '$deliverycondtn'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$update = $update . ", DIM = '$dim'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['suitablefor']){
$suitablefor = $_POST['suitablefor']; 
$update = $update . ", SUITABLEFOR = '$suitablefor'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$update = $update . ", WARRANTY = '$warranty'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['type']){
$type = $_POST['type']; 
$update = $update . ", TYPE = '$type'";
}
if($_POST['size']){
$size = $_POST['size']; 
$update = $update . ", SIZE = '$size'";
}
$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_bed'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM bed WHERE MODEL_ID = '$modelid'";
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

//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_diningtable'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['brand'] && $_POST['style'] && $_POST['dim'] && $_POST['price'] && $_POST['seatingcapacity'])){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$brand = $_POST['brand'];
$style = $_POST['style'];
$dim = $_POST['dim'];
$price = $_POST['price'];
$seatingcapacity = $_POST['seatingcapacity'];

}
if(!$_POST['deliverycondtn'])
$deliverycondtn = 'NULL';
else
$deliverycondtn = $_POST['deliverycondtn'];
if(!$_POST['color'])
$color = 'NULL';
else
$color = $_POST['color'];
if(!$_POST['suitablefor'])
$suitablefor = 'NULL';
else
$suitablefor = $_POST['suitablefor'];
if(!$_POST['warranty'])
$warranty = 'NULL';
else
$warranty = $_POST['warranty'];
if(!$_POST['foldable'])
$foldable = 'NULL';
else
$foldable = $_POST['foldable'];
if(!$_POST['no_of_chairs'])
$no_of_chairs = 'NULL';
else
$no_of_chairs = $_POST['no_of_chairs'];
if(!$_POST['extendable'])
$extendable = 'NULL';
else
$extendable = $_POST['extendable'];
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
$query = "INSERT INTO diningtable(MODEL_ID, BRAND, STYLE, DELIVERYCONDTN, DIM, COLOR, SUITABLEFOR, WARRANTY, PRICE, FOLDABLE, NO_OF_CHAIRS, SEATINGCAPACITY, EXTENDABLE)
VALUES ('$modelid', '$brand', '$style', '$deliverycondtn', '$dim', '$color', '$suitablefor', '$warranty', $price, '$foldable', $no_of_chairs, '$seatingcapacity', '$extendable')";
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
if ($_POST['submit'] == 'Update_diningtable'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE diningtable SET MODEL_ID = '$modelid'";
if($_POST['brand']){
$brand = $_POST['brand']; 
$update = $update . ", BRAND = '$brand'";
}
if($_POST['style']){
$style = $_POST['style']; 
$update = $update . ", STYLE = '$style'";
}
if($_POST['deliverycondtn']){
$deliverycondtn = $_POST['deliverycondtn']; 
$update = $update . ", DELIVERYCONDTN = '$deliverycondtn'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$update = $update . ", DIM = '$dim'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['suitablefor']){
$suitablefor = $_POST['suitablefor']; 
$update = $update . ", SUITABLEFOR = '$suitablefor'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$update = $update . ", WARRANTY = '$warranty'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['foldable']){
$foldable = $_POST['foldable']; 
$update = $update . ", FOLDABLE = '$foldable'";
}
if($_POST['no_of_chairs']){
$no_of_chairs = $_POST['no_of_chairs']; 
$update = $update . ", NO_OF_CHAIRS = $no_of_chairs";
}
if($_POST['seatingcapacity']){
$seatingcapacity = $_POST['seatingcapacity']; 
$update = $update . ", SEATINGCAPACITY = '$seatingcapacity'";
}
if($_POST['extendable']){
$extendable = $_POST['extendable']; 
$update = $update . ", EXTENDABLE = '$extendable'";
}
$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_diningtable'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM diningtable WHERE MODEL_ID = '$modelid'";
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

//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_tvcabinet'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['brand'] && $_POST['style'] && $_POST['dim'] && $_POST['price'] && $_POST['no_of_shelves'] && $_POST['no_of_draws'])){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$brand = $_POST['brand'];
$style = $_POST['style'];
$dim = $_POST['dim'];
$price = $_POST['price'];
$no_of_shelves = $_POST['no_of_shelves'];
$no_of_draws = $_POST['no_of_draws'];

}
if(!$_POST['deliverycondtn'])
$deliverycondtn = 'NULL';
else
$deliverycondtn = $_POST['deliverycondtn'];
if(!$_POST['color'])
$color = 'NULL';
else
$color = $_POST['color'];
if(!$_POST['suitablefor'])
$suitablefor = 'NULL';
else
$suitablefor = $_POST['suitablefor'];
if(!$_POST['warranty'])
$warranty = 'NULL';
else
$warranty = $_POST['warranty'];
if(!$_POST['door'])
$door = 'NULL';
else
$door = $_POST['door'];
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
$query = "INSERT INTO tvcabinet(MODEL_ID, BRAND, STYLE, DELIVERYCONDTN, DIM, COLOR, SUITABLEFOR, WARRANTY, PRICE, DOOR, NO_OF_SHELVES, NO_OF_DRAWS)
VALUES ('$modelid', '$brand', '$style', '$deliverycondtn', '$dim', '$color', '$suitablefor', '$warranty', $price, '$door', $no_of_shelves, $no_of_draws)";
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
if ($_POST['submit'] == 'Update_tvcabinet'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE tvcabinet SET MODEL_ID = '$modelid'";
if($_POST['brand']){
$brand = $_POST['brand']; 
$update = $update . ", BRAND = '$brand'";
}
if($_POST['style']){
$style = $_POST['style']; 
$update = $update . ", STYLE = '$style'";
}
if($_POST['deliverycondtn']){
$deliverycondtn = $_POST['deliverycondtn']; 
$update = $update . ", DELIVERYCONDTN = '$deliverycondtn'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$update = $update . ", DIM = '$dim'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['suitablefor']){
$suitablefor = $_POST['suitablefor']; 
$update = $update . ", SUITABLEFOR = '$suitablefor'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$update = $update . ", WARRANTY = '$warranty'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['door']){
$door = $_POST['door']; 
$update = $update . ", DOOR = '$door'";
}
if($_POST['no_of_shelves']){
$no_of_shelves = $_POST['no_of_shelves']; 
$update = $update . ", NO_OF_SHELVES = $no_of_shelves";
}
if($_POST['no_of_draws']){
$no_of_draws = $_POST['no_of_draws']; 
$update = $update . ", NO_OF_DRAWS = $no_of_draws";
}
$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_tvcabinet'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM tvcabinet WHERE MODEL_ID = '$modelid'";
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

//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_shoeracks'){
//validation flag to check that all validations are done
$validationFlag = true;
//Check all the required fields are filled
if(!($_POST['modelid'] && $_POST['brand'] && $_POST['style'] && $_POST['dim'] && $_POST['price'] && $_POST['no_of_shelves'])){
echo 'All the fields marked as * are compulsary.<br>';
$validationFlag = false;
}
else{
$modelid = $_POST['modelid'];
$brand = $_POST['brand'];
$style = $_POST['style'];
$dim = $_POST['dim'];
$price = $_POST['price'];
$no_of_shelves = $_POST['no_of_shelves'];

}
if(!$_POST['deliverycondtn'])
$deliverycondtn = 'NULL';
else
$deliverycondtn = $_POST['deliverycondtn'];
if(!$_POST['color'])
$color = 'NULL';
else
$color = $_POST['color'];
if(!$_POST['suitablefor'])
$suitablefor = 'NULL';
else
$suitablefor = $_POST['suitablefor'];
if(!$_POST['warranty'])
$warranty = 'NULL';
else
$warranty = $_POST['warranty'];
if(!$_POST['portable'])
$portable = 'NULL';
else
$portable = $_POST['portable'];
if(!$_POST['foldable'])
$foldable = 'NULL';
else
$foldable = $_POST['foldable'];
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
$query = "INSERT INTO shoeracks(MODEL_ID, BRAND, STYLE, DELIVERYCONDTN, DIM, COLOR, SUITABLEFOR, WARRANTY, PRICE, PORTABLE, NO_OF_SHELVES, FOLDABLE)
VALUES ('$modelid', '$brand', '$style', '$deliverycondtn', '$dim', '$color', '$suitablefor', '$warranty', $price, '$portable', $no_of_shelves, '$foldable')";
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
if ($_POST['submit'] == 'Update_shoeracks'){
if(!$_POST['modelid'])
echo 'Enter the model id as it is the primary key.';
else{
$validationFlag = true;
$modelid = $_POST['modelid'];
$update = "UPDATE shoeracks SET MODEL_ID = '$modelid'";
if($_POST['brand']){
$brand = $_POST['brand']; 
$update = $update . ", BRAND = '$brand'";
}
if($_POST['style']){
$style = $_POST['style']; 
$update = $update . ", STYLE = '$style'";
}
if($_POST['deliverycondtn']){
$deliverycondtn = $_POST['deliverycondtn']; 
$update = $update . ", DELIVERYCONDTN = '$deliverycondtn'";
}
if($_POST['dim']){
$dim = $_POST['dim']; 
$update = $update . ", DIM = '$dim'";
}
if($_POST['color']){
$color = $_POST['color']; 
$update = $update . ", COLOR = '$color'";
}
if($_POST['suitablefor']){
$suitablefor = $_POST['suitablefor']; 
$update = $update . ", SUITABLEFOR = '$suitablefor'";
}
if($_POST['warranty']){
$warranty = $_POST['warranty']; 
$update = $update . ", WARRANTY = '$warranty'";
}
if($_POST['price']){
$price = $_POST['price']; 
$update = $update . ", PRICE = $price";
}
if($_POST['portable']){
$portable = $_POST['portable']; 
$update = $update . ", PORTABLE = '$portable'";
}
if($_POST['no_of_shelves']){
$no_of_shelves = $_POST['no_of_shelves']; 
$update = $update . ", NO_OF_SHELVES = $no_of_shelves";
}
if($_POST['foldable']){
$foldable = $_POST['foldable']; 
$update = $update . ", FOLDABLE = '$foldable'";
}
$update = $update . " WHERE MODEL_ID = '$modelid'";
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
if ($_POST['submit'] == 'Delete_shoeracks'){
if(!$_POST['modelid'])
echo 'Enter the id of the model as it is the primary key.';
else{
$modelid = $_POST['modelid'];
$delete = "DELETE FROM shoeracks WHERE MODEL_ID = '$modelid'";
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
//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_pads')
{
	//validation flag to check that all validations are done
	$validationFlag = true;
	//Check all the required fields are filled
	if(!($_POST['modelid'] && $_POST['brand'] && $_POST['price'] &&
	$_POST['color'] && $_POST['size'] && $_POST['material'] && $_POST['face_mat'] && $_POST['inner_mat'] && $_POST['filling_mat'] && $_POST['weight'] && $_POST['ideal_for'])){
	echo 'All the fields marked as * are compulsory.<br>';
	$validationFlag = false;
}
else
{
	$modelid = $_POST['modelid'];
	$brand = $_POST['brand'];
	$price = $_POST['price'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$material = $_POST['material'];
	$face_mat = $_POST['face_mat'];
	$inner_mat = $_POST['inner_mat'];
	$filling_mat = $_POST['filling_mat'];
	$weight = $_POST['weight'];
	$ideal_for = $_POST['ideal_for'];
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
	//Create Insert query
	$query = "INSERT INTO pads(MODEL_ID, BRAND, PRICE, COLOR, SIZE, MATERIAL, FACE_MAT, INNER_MAT,FILLING_MAT,WEIGHT,IDEALFOR)
	VALUES ('$modelid', '$brand', $price, '$color', '$size', '$material', '$face_mat', '$inner_mat','$filling_mat','$weight','$ideal_for')";
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
if ($_POST['submit'] == 'Update_pads')
{
	if(!$_POST['modelid'])
	{
		echo 'Enter the model id as it is the primary key.';
	}
	else
	{
		$validationFlag = true;
		$modelid = $_POST['modelid'];
		$update = "UPDATE pads SET MODEL_ID = '$modelid'";
		if($_POST['brand'])
		{
			$brand = $_POST['brand']; 
			$update = $update . ", BRAND = '$brand'";
		}
		if($_POST['price'])
		{
			$price = $_POST['price']; 
			$update = $update . ", PRICE = '$price'";
		}
		if($_POST['color'])
		{
			$color = $_POST['color']; 
			$update = $update . ", COLOR = '$color'";
		}
		if($_POST['size'])
		{
			$size = $_POST['size']; 
			$update = $update . ", SIZE = '$size'";
		}
		if($_POST['material'])
		{
			$material = $_POST['material']; 
			$update = $update . ", MATERIAL = '$material'";
		}
		if($_POST['face_mat'])
		{
			$face_mat = $_POST['face_mat']; 
			$update = $update . ", FACE_MAT = '$face_mat'";
		}
		if($_POST['inner_mat'])
		{
			$inner_mat = $_POST['inner_mat']; 
			$update = $update . ", INNER_MAT = '$inner_mat'";
		}
		if($_POST['filling_mat'])
		{
			$filling_mat = $_POST['filling_mat']; 
			$update = $update . ", FILLING_MAT = '$filling_mat'";
		}
		if($_POST['weight'])
		{
			$weight = $_POST['weight']; 
			$update = $update . ", WEIGHT = '$weight'";
		}
		if($_POST['ideal_for'])
		{
			$ideal_for = $_POST['ideal_for']; 
			$update = $update . ", IDEALFOR = '$ideal_for'";
		}

		$update = $update . ' WHERE MODEL_ID = '.$_POST['modelid'];
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
			$results = mysqli_query($link,$update);
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo mysqli_info($link);
		}
	}
}
// Code to be executed when 'Delete' is clicked.
if ($_POST['submit'] == 'Delete_pads')
{
	if(!$_POST['modelid'])
		echo 'Enter the id of the model as it is the primary key.';
	else
	{
		$modelid = $_POST['modelid'];
		$delete = "DELETE FROM pads WHERE MODEL_ID = '$modelid'";
		//Connect to mysql server
		$link = mysqli_connect('localhost', 'root', '');
		//Check link to the mysql server
		if(!$link)
		{
			die('Failed to connect to server: ' . mysqli_error($link));
		}
		//Select database
		$db=mysqli_select_db($link,'project');
		if(!$db)
		{
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

//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_gloves')
{
	//validation flag to check that all validations are done
	$validationFlag = true;
	//Check all the required fields are filled
	if(!($_POST['modelid'] && $_POST['brand'] && $_POST['price'] &&
	$_POST['color'] && $_POST['size'] && $_POST['material'] && $_POST['ideal_for'] && $_POST['sport_type']))
	{
		echo 'All the fields marked as * are compulsory.<br>';
		$validationFlag = false;
	}
	else
	{
	$modelid = $_POST['modelid'];
	$brand = $_POST['brand'];
	$price = $_POST['price'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$material = $_POST['material'];
	$ideal_for = $_POST['ideal_for'];
	$sport_type = $_POST['sport_type'];
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
	//Create Insert query
	$query = "INSERT INTO gloves(MODEL_ID, BRAND, PRICE, COLOR, SIZE, MATERIAL, IDEALFOR, SPORT_TYPE)
	VALUES ('$modelid', '$brand', '$price', '$color', '$size', '$material','$ideal_for','$sport_type')";
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
if ($_POST['submit'] == 'Update_gloves')
{
	if(!$_POST['modelid'])
	{
		echo 'Enter the model id as it is the primary key.';
	}
	else
	{
		$validationFlag = true;
		$modelid = $_POST['modelid'];
		$update = "UPDATE gloves SET MODEL_ID = '$modelid'";
		if($_POST['brand'])
		{
			$brand = $_POST['brand']; 
			$update = $update . ", BRAND = '$brand'";
		}
		if($_POST['price'])
		{
			$price = $_POST['price']; 
			$update = $update . ", PRICE = '$price'";
		}
		if($_POST['color'])
		{
			$color = $_POST['color']; 
			$update = $update . ", COLOR = '$color'";
		}
		if($_POST['size'])
		{
			$size = $_POST['size']; 
			$update = $update . ", SIZE = '$size'";
		}
		if($_POST['material'])
		{
			$material = $_POST['material']; 
			$update = $update . ", MATERIAL = '$material'";
		}
		if($_POST['sport_type'])
		{
			$sport_type = $_POST['sport_type']; 
			$update = $update . ", SPORT_TYPE = '$sport_type'";
		}
		if($_POST['ideal_for'])
		{
			$ideal_for = $_POST['ideal_for']; 
			$update = $update . ", IDEALFOR = '$ideal_for'";
		}
		

		$update = $update . ' WHERE MODEL_ID = '.$_POST['modelid'];
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
			$results = mysqli_query($link,$update);
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo mysqli_info($link);
		}
	}
}
// Code to be executed when 'Delete' is clicked.
if ($_POST['submit'] == 'Delete_gloves')
{
	if(!$_POST['modelid'])
		echo 'Enter the id of the model as it is the primary key.';
	else
	{
		$modelid = $_POST['modelid'];
		$delete = "DELETE FROM gloves WHERE MODEL_ID = '$modelid'";
		//Connect to mysql server
		$link = mysqli_connect('localhost', 'root', '');
		//Check link to the mysql server
		if(!$link)
		{
			die('Failed to connect to server: ' . mysqli_error($link));
		}
		//Select database
		$db=mysqli_select_db($link,'project');
		if(!$db)
		{
			die("Unable to select database");
		}
		//Execute query
		$results = mysqli_query($link,$delete);
		if($results == FALSE)
			echo mysqli_error() . '<br>';
		else
			echo 'Data deleted successfully';
	}
}

//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_helmet')
{
	//validation flag to check that all validations are done
	$validationFlag = true;
	//Check all the required fields are filled
	if(!($_POST['modelid'] && $_POST['brand'] && $_POST['price'] &&
	$_POST['color'] && $_POST['size'] && $_POST['material'] && $_POST['ideal_for'] && $_POST['sport_type']&& $_POST['absorbent_cloth']))
	{
		echo 'All the fields marked as * are compulsary.<br>';
		$validationFlag = false;
	}
	else
	{
		$modelid = $_POST['modelid'];
		$brand = $_POST['brand'];
		$price = $_POST['price'];
		$size = $_POST['size'];
		$color = $_POST['color'];
		$material = $_POST['material'];
		$ideal_for = $_POST['ideal_for'];
		$sport_type = $_POST['sport_type'];
		$absorbent_cloth = $_POST['absorbent_cloth'];
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
	//Create Insert query
	$query = "INSERT INTO helmet(MODEL_ID, BRAND, PRICE, COLOR, SIZE, MATERIAL, IDEALFOR, SPORT_TYPE,ABSORBENT_CLOTH)
	VALUES ('$modelid', '$brand', '$price', '$color','$size', '$material','$ideal_for','$sport_type','$absorbent_cloth')";
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
if ($_POST['submit'] == 'Update_helmet')
{
	if(!$_POST['modelid'])
	{
		echo 'Enter the model id as it is the primary key.';
	}
	else
	{
		$validationFlag = true;
		$modelid = $_POST['modelid'];
		$update = "UPDATE helmet SET MODEL_ID = '$modelid'";
		if($_POST['brand'])
		{
			$brand = $_POST['brand']; 
			$update = $update . ", BRAND = '$brand'";
		}
		if($_POST['price'])
		{
			$price = $_POST['price']; 
			$update = $update . ", PRICE = '$price'";
		}
		if($_POST['color'])
		{
			$color = $_POST['color']; 
			$update = $update . ", COLOR = '$color'";
		}
		if($_POST['size'])
		{
			$size = $_POST['size']; 
			$update = $update . ", SIZE = '$size'";
		}
		if($_POST['material'])
		{
			$material = $_POST['material']; 
			$update = $update . ", MATERIAL = '$material'";
		}
		if($_POST['sport_type'])
		{
			$sport_type = $_POST['sport_type']; 
			$update = $update . ", SPORT_TYPE = '$sport_type'";
		}
		if($_POST['ideal_for'])
		{
			$ideal_for = $_POST['ideal_for']; 
			$update = $update . ", IDEALFOR = '$ideal_for'";
		}
		if($_POST['absorbent_cloth'])
		{
			$absorbent_cloth = $_POST['absorbent_cloth']; 
			$update = $update . ", ABSORBENT_CLOTH = '$absorbent_cloth'";
		}
		

		$update = $update . ' WHERE MODEL_ID = '.$_POST['modelid'];
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
			$results = mysqli_query($link,$update);
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo mysqli_info($link);
		}
	}
}
// Code to be executed when 'Delete' is clicked.
if ($_POST['submit'] == 'Delete_helmet')
{
	if(!$_POST['modelid'])
		echo 'Enter the id of the model as it is the primary key.';
	else
	{
		$modelid = $_POST['modelid'];
		$delete = "DELETE FROM helmet WHERE MODEL_ID = '$modelid'";
		//Connect to mysql server
		$link = mysqli_connect('localhost', 'root', '');
		//Check link to the mysql server
		if(!$link)
		{
			die('Failed to connect to server: ' . mysqli_error($link));
		}
		//Select database
		$db=mysqli_select_db($link,'project');
		if(!$db)
		{
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

//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_guard')
{
	//validation flag to check that all validations are done
	$validationFlag = true;
	//Check all the required fields are filled
	if(!($_POST['modelid'] && $_POST['brand'] && $_POST['price'] &&
	$_POST['color'] && $_POST['size'] && $_POST['material'] && $_POST['ideal_for'] && $_POST['sport_type']))
	{
		echo 'All the fields marked as * are compulsary.<br>';
		$validationFlag = false;
	}
	else
	{
	$modelid = $_POST['modelid'];
	$brand = $_POST['brand'];
	$price = $_POST['price'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$material = $_POST['material'];
	$ideal_for = $_POST['ideal_for'];
	$sport_type = $_POST['sport_type'];
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
	//Create Insert query
	$query = "INSERT INTO guard(MODEL_ID, BRAND, PRICE, COLOR, SIZE, MATERIAL, IDEALFOR, SPORT_TYPE)
	VALUES ('$modelid', '$brand', '$price', '$color', '$size', '$material','$ideal_for','$sport_type')";
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
if ($_POST['submit'] == 'Update_guard')
{
	if(!$_POST['modelid'])
	{
		echo 'Enter the model id as it is the primary key.';
	}
	else
	{
		$validationFlag = true;
		$modelid = $_POST['modelid'];
		$update = "UPDATE guard SET MODEL_ID = '$modelid'";
		if($_POST['brand'])
		{
			$brand = $_POST['brand']; 
			$update = $update . ", BRAND = '$brand'";
		}
		if($_POST['price'])
		{
			$price = $_POST['price']; 
			$update = $update . ", PRICE = '$price'";
		}
		if($_POST['color'])
		{
			$color = $_POST['color']; 
			$update = $update . ", COLOR = '$color'";
		}
		if($_POST['size'])
		{
			$size = $_POST['size']; 
			$update = $update . ", SIZE = '$size'";
		}
		if($_POST['material'])
		{
			$material = $_POST['material']; 
			$update = $update . ", MATERIAL = '$material'";
		}
		if($_POST['sport_type'])
		{
			$sport_type = $_POST['sport_type']; 
			$update = $update . ", SPORT_TYPE = '$sport_type'";
		}
		if($_POST['ideal_for'])
		{
			$ideal_for = $_POST['ideal_for']; 
			$update = $update . ", IDEALFOR = '$ideal_for'";
		}
		
		$update = $update . ' WHERE MODEL_ID = '.$_POST['modelid'];
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
			$results = mysqli_query($link,$update);
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo mysqli_info($link);
		}
	}
}
// Code to be executed when 'Delete' is clicked.
if ($_POST['submit'] == 'Delete_guard')
{
	if(!$_POST['modelid'])
		echo 'Enter the id of the model as it is the primary key.';
	else
	{
		$modelid = $_POST['modelid'];
		$delete = "DELETE FROM guard WHERE MODEL_ID = '$modelid'";
		//Connect to mysql server
		$link = mysqli_connect('localhost', 'root', '');
		//Check link to the mysql server
		if(!$link)
		{
			die('Failed to connect to server: ' . mysqli_error($link));
		}
		//Select database
		$db=mysqli_select_db($link,'project');
		if(!$db)
		{
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

//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_sportshoes')
{
	//validation flag to check that all validations are done
	$validationFlag = true;
	//Check all the required fields are filled
	if(!($_POST['modelid'] && $_POST['brand'] && $_POST['price'] &&
	$_POST['color'] && $_POST['size'] && $_POST['material'] && $_POST['ideal_for'] && $_POST['sport_type']&& $_POST['lace']))
	{
		echo 'All the fields marked as * are compulsary.<br>';
		$validationFlag = false;
	}
	else
	{
		$modelid = $_POST['modelid'];
		$brand = $_POST['brand'];
		$price = $_POST['price'];
		$size = $_POST['size'];
		$color = $_POST['color'];
		$material = $_POST['material'];
		$ideal_for = $_POST['ideal_for'];
		$sport_type = $_POST['sport_type'];
		$lace = $_POST['lace'];
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
	//Create Insert query
	$query = "INSERT INTO sportshoes(MODEL_ID, BRAND, PRICE, COLOR, SIZE, MATERIAL, IDEALFOR, SPORT_TYPE,LACE)
	VALUES ('$modelid', '$brand', '$price', '$color', '$size', '$material','$ideal_for','$sport_type','$lace')";
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
if ($_POST['submit'] == 'Update_sportshoes')
{
	if(!$_POST['modelid'])
	{
		echo 'Enter the model id as it is the primary key.';
	}
	else
	{
		$validationFlag = true;
		$modelid = $_POST['modelid'];
		$update = "UPDATE sportshoes SET MODEL_ID = '$modelid'";
		if($_POST['brand'])
		{
			$brand = $_POST['brand']; 
			$update = $update . ", BRAND = '$brand'";
		}
		if($_POST['price'])
		{
			$price = $_POST['price']; 
			$update = $update . ", PRICE = '$price'";
		}
		if($_POST['color'])
		{
			$color = $_POST['color']; 
			$update = $update . ", COLOR = '$color'";
		}
		if($_POST['size'])
		{
			$size = $_POST['size']; 
			$update = $update . ", SIZE = '$size'";
		}
		if($_POST['material'])
		{
			$material = $_POST['material']; 
			$update = $update . ", MATERIAL = '$material'";
		}
		if($_POST['sport_type'])
		{
			$sport_type = $_POST['sport_type']; 
			$update = $update . ", SPORT_TYPE = '$sport_type'";
		}
		if($_POST['ideal_for'])
		{
			$ideal_for = $_POST['ideal_for']; 
			$update = $update . ", IDEALFOR = '$ideal_for'";
		}
		if($_POST['lace'])
		{
			$lace = $_POST['lace']; 
			$update = $update . ",LACE = '$lace'";
		}
		

		$update = $update . ' WHERE MODEL_ID = '.$_POST['modelid'];
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
			$results = mysqli_query($link,$update);
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo mysqli_info($link);
		}
	}
}
// Code to be executed when 'Delete' is clicked.
if ($_POST['submit'] == 'Delete_sportshoes')
{
	if(!$_POST['modelid'])
		echo 'Enter the id of the model as it is the primary key.';
	else
	{
		$modelid = $_POST['modelid'];
		$delete = "DELETE FROM sportshoes WHERE MODEL_ID = '$modelid'";
		//Connect to mysql server
		$link = mysqli_connect('localhost', 'root', '');
		//Check link to the mysql server
		if(!$link)
		{
			die('Failed to connect to server: ' . mysqli_error($link));
		}
		//Select database
		$db=mysqli_select_db($link,'project');
		if(!$db)
		{
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

//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_bat')
{
	//validation flag to check that all validations are done
	$validationFlag = true;
	//Check all the required fields are filled
	if(!($_POST['modelid'] && $_POST['brand'] && $_POST['price'] &&
	$_POST['color'] && $_POST['size'] && $_POST['material']  && $_POST['sport_name']&& $_POST['company']&& $_POST['dim']))
	{
		echo 'All the fields marked as * are compulsary.<br>';
		$validationFlag = false;
	}
	else
	{
	$modelid = $_POST['modelid'];
	$brand = $_POST['brand'];
	$price = $_POST['price'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$material = $_POST['material'];
	$sport_name = $_POST['sport_name'];
	$company = $_POST['company'];
	$dim = $_POST['dim'];
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
	//Create Insert query
	$query = "INSERT INTO bat(MODEL_ID, BRAND, PRICE, COLOR, SIZE, MATERIAL, SPORT_NAME,COMPANY,DIM)
	VALUES ('$modelid', '$brand', '$price', '$color', '$size', '$material','$sport_name','$company','$dim')";
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
if ($_POST['submit'] == 'Update_bat')
{
	if(!$_POST['modelid'])
	{
		echo 'Enter the model id as it is the primary key.';
	}
	else
	{
		$validationFlag = true;
		$modelid = $_POST['modelid'];
		$update = "UPDATE bat SET MODEL_ID = '$modelid'";
		if($_POST['brand'])
		{
			$brand = $_POST['brand']; 
			$update = $update . ", BRAND = '$brand'";
		}
		if($_POST['price'])
		{
			$price = $_POST['price']; 
			$update = $update . ", PRICE = '$price'";
		}
		if($_POST['color'])
		{
			$color = $_POST['color']; 
			$update = $update . ", COLOR = '$color'";
		}
		if($_POST['size'])
		{
			$size = $_POST['size']; 
			$update = $update . ", SIZE = '$size'";
		}
		if($_POST['material'])
		{
			$material = $_POST['material']; 
			$update = $update . ", MATERIAL = '$material'";
		}
		if($_POST['sport_name'])
		{
			$sport_name = $_POST['sport_name']; 
			$update = $update . ", SPORT_NAME = '$sport_name'";
		}
		if($_POST['company'])
		{
			$company = $_POST['company']; 
			$update = $update . ", COMPANY = '$company'";
		}
		if($_POST['dim'])
		{
			$dim = $_POST['dim']; 
			$update = $update . ", dim = '$dim'";
		}
		

		$update = $update . ' WHERE MODEL_ID = '.$_POST['modelid'];
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
			$results = mysqli_query($link,$update);
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo mysqli_info($link);
		}
	}
}
// Code to be executed when 'Delete' is clicked.
if ($_POST['submit'] == 'Delete_bat')
{
	if(!$_POST['modelid'])
		echo 'Enter the id of the model as it is the primary key.';
	else
	{
		$modelid = $_POST['modelid'];
		$delete = "DELETE FROM bat WHERE MODEL_ID = '$modelid'";
		//Connect to mysql server
		$link = mysqli_connect('localhost', 'root', '');
		//Check link to the mysql server
		if(!$link)
		{
			die('Failed to connect to server: ' . mysqli_error($link));
		}
		//Select database
		$db=mysqli_select_db($link,'project');
		if(!$db)
		{
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
//*************************************************************************************************************//
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'Insert_ball')
{
	//validation flag to check that all validations are done
	$validationFlag = true;
	//Check all the required fields are filled
	if(!($_POST['modelid'] && $_POST['brand'] && $_POST['price'] &&
	$_POST['color'] && $_POST['size'] && $_POST['material']  && $_POST['sport_name']&& $_POST['weight']&& $_POST['dim']))
	{
		echo 'All the fields marked as * are compulsary.<br>';
		$validationFlag = false;
	}
	else
	{
	$modelid = $_POST['modelid'];
	$brand = $_POST['brand'];
	$price = $_POST['price'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$material = $_POST['material'];
	$sport_name = $_POST['sport_name'];
	$weight = $_POST['weight'];
	$dim = $_POST['dim'];
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
	//Create Insert query
	$query = "INSERT INTO ball(MODEL_ID, BRAND, PRICE, COLOR, SIZE, MATERIAL, SPORT_NAME,WEIGHT,DIM)
	VALUES ('$modelid', '$brand', '$price', '$color', '$size', '$material','$sport_name','$weight','$dim')";
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
if ($_POST['submit'] == 'Update_ball')
{
	if(!$_POST['modelid'])
	{
		echo 'Enter the model id as it is the primary key.';
	}
	else
	{
		$validationFlag = true;
		$modelid = $_POST['modelid'];
		$update = "UPDATE ball SET MODEL_ID = '$modelid'";
		if($_POST['brand'])
		{
			$brand = $_POST['brand']; 
			$update = $update . ", BRAND = '$brand'";
		}
		if($_POST['price'])
		{
			$price = $_POST['price']; 
			$update = $update . ", PRICE = '$price'";
		}
		if($_POST['color'])
		{
			$color = $_POST['color']; 
			$update = $update . ", COLOR = '$color'";
		}
		if($_POST['size'])
		{
			$size = $_POST['size']; 
			$update = $update . ", SIZE = '$size'";
		}
		if($_POST['material'])
		{
			$material = $_POST['material']; 
			$update = $update . ", MATERIAL = '$material'";
		}
		if($_POST['sport_name'])
		{
			$sport_name = $_POST['sport_name']; 
			$update = $update . ", SPORT_NAME = '$sport_name'";
		}
		if($_POST['weight'])
		{
			$weight = $_POST['weight']; 
			$update = $update . ", WEIGHT = '$weight'";
		}
		if($_POST['dim'])
		{
			$dim = $_POST['dim']; 
			$update = $update . ", dim = '$dim'";
		}
		

		$update = $update . ' WHERE MODEL_ID = '.$_POST['modelid'];
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
			$results = mysqli_query($link,$update);
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo mysqli_info($link);
		}
	}
}
// Code to be executed when 'Delete' is clicked.
if ($_POST['submit'] == 'Delete_ball')
{
	if(!$_POST['modelid'])
		echo 'Enter the id of the model as it is the primary key.';
	else
	{
		$modelid = $_POST['modelid'];
		$delete = "DELETE FROM ball WHERE MODEL_ID = '$modelid'";
		//Connect to mysql server
		$link = mysqli_connect('localhost', 'root', '');
		//Check link to the mysql server
		if(!$link)
		{
			die('Failed to connect to server: ' . mysqli_error($link));
		}
		//Select database
		$db=mysqli_select_db($link,'project');
		if(!$db)
		{
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
