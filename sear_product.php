<?php
//Start the session to see if the user is authenticated user.
//Check if the user is authenticated first. Or else redirect to login pag
require('menu.php');
// Code to be executed when 'Insert' is clicked.
if ($_POST['submit'] == 'SEARCH'){
	echo '<html>
					<head>
	<title>Register</title>
	<style type="text/css">
	body 
	{
		
		background-image:url("green.jpg");
		 background-repeat: no-repeat;
		background-size:100%;
	}

	h1 
	{
		color: maroon;
		margin-left: 40px;
	}
	
	form {
  background: -webkit-linear-gradient(bottom, #9FE581, #9FE581 175px);
  background: -moz-linear-gradient(bottom, #9FE581, #9FE581 175px);
  background: linear-gradient(bottom, #9FE581, #9FE581 175px);
  margin: auto;
  position: relative;
  width: 980px;
  height: 500px;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
  font-style: italic;
  line-height: 24px;
  font-weight: bold;
  color: #09C;
  text-decoration: none;
  border-radius: 10px;
  padding: 10px;
  border: 1px solid #999;
  border: inset 1px solid #333;
  -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
	</style>
</head>';
	if($_POST['table']== 'mobiles'){	
				echo '<html>
				<body>
				<center>
				<h1>Search in Mobiles</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
				<tr>
				<td>MODEL_ID*</td>
				<td><input type="text" name="modelid" maxlength="20"></td>
				</tr>
				<tr>
				<td>COMPANY*</td>
				<td><input type="text" name="company" maxlength="30"></td>
				<td>MODEL*</td>
				<td><input type="text" name="model" maxlength="5"></td>
				</tr>
				<tr>
				<td>NAME*</td>
				<td><input type="text" name="name" maxlength="10"></td>
				<td>CAMERA</td>
				<td><input type="text" name="camera" maxlength="5"></td>
				</tr>
				<tr>
				<td>COLOR</td>
				<td><input type="text" name="color" maxlength="10"></td>
				<td>WARRANTY</td>
				<td><input type="text" name="warranty" maxlength="5"></td>
				</tr>
				<tr>
				<td>DISPLAY*</td>
				<td><input type="text" name="display" maxlength="5"></td>
				<td>BATTERY</td>
				<td><input type="text" name="battery" maxlength="5"></td>
				</tr>
				<tr>
				<td>PRICE*</td>
				<td><input type="text" name="price" maxlength="10"></td>
				<td>INT_MEMORY*</td>
				<td><input type="text" name="int_memory" maxlength="5"></td>
				</tr>
				<tr>
				<td>EXT_MEMORY*</td>
				<td><input type="text" name="ext_memory" maxlength="5"></td>
				</tr>
				<td><input type="submit" name="submit" value="Search_mobiles"></td>
				</tr>
				</table>
				</form>
				</center>
				</body>
	</html>';
	}
//*********************************************************************************************************************//
	if($_POST['table']== 'laptop'){
		echo '<html>
			<body>
				<center>
				<h1>Search in Laptops</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="20"></td>
					</tr>
					<tr>
					<td>COMPANY*</td>
					<td><input type="text" name="company" maxlength="30"></td>
					<td>MODEL*</td>
					<td><input type="text" name="model" maxlength="5"></td>
					</tr>
					<tr>
					<td>NAME*</td>
					<td><input type="text" name="name" maxlength="10"></td>
					<td>CAMERA*</td>
					<td><input type="text" name="camera" maxlength="5"></td>
					</tr>
					<tr>
					<td>COLOR</td>
					<td><input type="text" name="color" maxlength="10"></td>
					<td>WARRANTY</td>
					<td><input type="text" name="warranty" maxlength="5"></td>
					</tr>
					<tr>
					<td>DISPLAY*</td>
					<td><input type="text" name="display" maxlength="5"></td>
					<td>BATTERY</td>
					<td><input type="text" name="battery" maxlength="5"></td>
					</tr>
					<tr>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					<td>CORE*</td>
				    <td><input type="text" name="core" maxlength="5"></td>
					</tr>
					<tr>
					<td>RAM*</td>
					<td><input type="text" name="ram" maxlength="5"></td>
					<td>HDD*</td>
					<td><input type="text" name="hdd" maxlength="5"></td>
					</tr>
					<tr>
					<td>OS*</td>
					<td><input type="text" name="os" maxlength="10"></td>
					<td>HDMI*</td>
					<td><input type="text" name="hdmi" maxlength="10"></td>
					</tr>
					<tr>
					<td>USB*</td>
					<td><input type="text" name="usb" maxlength="5"></td>
					<td>EXT_MEMORY*</td>
					<td><input type="text" name="ext_memory" maxlength="5"></td>
					</tr>
					<td><input type="submit" name="submit" value="Search_laptop"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*************************************************************************************************************//
	if($_POST['table']== 'bed'){
		echo '<html>
			<body>
				<center>
				<h1>Search in Beds</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>BRAND*</td>
					<td><input type="text" name="brand" maxlength="10"></td>
					<td>STYLE*</td>
					<td><input type="text" name="style" maxlength="10"></td>
					</tr>
					<tr>
					<td>DELIVERYCONDTN</td>
					<td><input type="text" name="deliverycondtn" maxlength="20"></td>
					<td>DIM*</td>
					<td><input type="text" name="dim" maxlength="20"></td>
					</tr>
					<tr>
					<td>COLOR</td>
					<td><input type="text" name="color" maxlength="10"></td>
					<td>SUITABLEFOR</td>
					<td><input type="text" name="suitablefor" maxlength="20"></td>
					</tr>
					<tr>
					<td>WARRANTY</td>
					<td><input type="text" name="warranty" maxlength="10"></td>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr>
					<tr>
					<td>TYPE</td>
					<td><input type="text" name="type" maxlength="10"></td>
					<td>SIZE*</td>
				    <td><input type="text" name="size" maxlength="10"></td>
					</tr>
					<td><input type="submit" name="submit" value="Search_bed"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*************************************************************************************************************//
	if($_POST['table']== 'sofa'){
		echo '<html>
			<body>
				<center>
				<h1>Search in sofas</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>BRAND*</td>
					<td><input type="text" name="brand" maxlength="10"></td>
					<td>STYLE*</td>
					<td><input type="text" name="style" maxlength="10"></td>
					</tr>
					<tr>
					<td>DELIVERYCONDTN</td>
					<td><input type="text" name="deliverycondtn" maxlength="20"></td>
					<td>DIM*</td>
					<td><input type="text" name="dim" maxlength="20"></td>
					</tr>
					<tr>
					<td>COLOR</td>
					<td><input type="text" name="color" maxlength="10"></td>
					<td>SUITABLEFOR</td>
					<td><input type="text" name="suitablefor" maxlength="20"></td>
					</tr>
					<tr>
					<td>WARRANTY</td>
					<td><input type="text" name="warranty" maxlength="10"></td>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr>
					<tr>
					<td>SEATINGCAPACITY*</td>
					<td><input type="text" name="seatingcapacity" maxlength="10"></td>
					</tr>
					<td><input type="submit" name="submit" value="Search_sofa"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
	//*************************************************************************************************************//
	if($_POST['table']== 'diningtable'){
		echo '<html>
			<body>
				<center>
				<h1>Search in diningtables</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>BRAND*</td>
					<td><input type="text" name="brand" maxlength="10"></td>
					<td>STYLE*</td>
					<td><input type="text" name="style" maxlength="10"></td>
					</tr>
					<tr>
					<td>DELIVERYCONDTN</td>
					<td><input type="text" name="deliverycondtn" maxlength="20"></td>
					<td>DIM*</td>
					<td><input type="text" name="dim" maxlength="20"></td>
					</tr>
					<tr>
					<td>COLOR</td>
					<td><input type="text" name="color" maxlength="10"></td>
					<td>SUITABLEFOR</td>
					<td><input type="text" name="suitablefor" maxlength="20"></td>
					</tr>
					<tr>
					<td>WARRANTY</td>
					<td><input type="text" name="warranty" maxlength="10"></td>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr>
					<tr>
					<td>FOLDABLE</td>
					<td><input type="text" name="foldable" maxlength="5"></td>
					<td>NO_OF_CHAIRS</td>
				    <td><input type="text" name="no_of_chairs" maxlength="5"></td>
					</tr>
					<tr>
					<td>SEATINGCAPACITY*</td>
					<td><input type="text" name="seatingcapacity" maxlength="5"></td>
					<td>EXTENDABLE</td>
					<td><input type="text" name="extendable" maxlength="5"></td>
					</tr>
					<td><input type="submit" name="submit" value="Search_diningtable"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*************************************************************************************************************//
	if($_POST['table']== 'tvcabinet'){
		echo '<html>
			<body>
				<center>
				<h1>Search in TV Cabinet</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>BRAND*</td>
					<td><input type="text" name="brand" maxlength="10"></td>
					<td>STYLE*</td>
					<td><input type="text" name="style" maxlength="10"></td>
					</tr>
					<tr>
					<td>DELIVERYCONDTN</td>
					<td><input type="text" name="deliverycondtn" maxlength="20"></td>
					<td>DIM*</td>
					<td><input type="text" name="dim" maxlength="20"></td>
					</tr>
					<tr>
					<td>COLOR</td>
					<td><input type="text" name="color" maxlength="10"></td>
					<td>SUITABLEFOR</td>
					<td><input type="text" name="suitablefor" maxlength="20"></td>
					</tr>
					<tr>
					<td>WARRANTY</td>
					<td><input type="text" name="warranty" maxlength="10"></td>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr>
					<tr>
					<td>DOOR</td>
					<td><input type="text" name="door" maxlength="10"></td>
					<td>NO_OF_SHELVES*</td>
				    <td><input type="text" name="no_of_shelves" maxlength="5"></td>
					</tr>
					<tr>
					<td>N0_OF_DRAWS*</td>
					<td><input type="text" name="no_of_draws" maxlength="5"></td>
					</tr>
					<td><input type="submit" name="submit" value="Search_tvcabinet"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
	//*************************************************************************************************************//
	if($_POST['table']== 'shoeracks'){
		echo '<html>
			<body>
				<center>
				<h1>Search in shoeracks</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>BRAND*</td>
					<td><input type="text" name="brand" maxlength="10"></td>
					<td>STYLE*</td>
					<td><input type="text" name="style" maxlength="10"></td>
					</tr>
					<tr>
					<td>DELIVERYCONDTN</td>
					<td><input type="text" name="deliverycondtn" maxlength="20"></td>
					<td>DIM*</td>
					<td><input type="text" name="dim" maxlength="20"></td>
					</tr>
					<tr>
					<td>COLOR</td>
					<td><input type="text" name="color" maxlength="10"></td>
					<td>SUITABLEFOR</td>
					<td><input type="text" name="suitablefor" maxlength="20"></td>
					</tr>
					<tr>
					<td>WARRANTY</td>
					<td><input type="text" name="warranty" maxlength="10"></td>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr>
					<tr>
					<td>PORTABLE</td>
					<td><input type="text" name="portable" maxlength="5"></td>
					<td>NO_OF_SHELVES*</td>
				    <td><input type="text" name="no_of_shelves" maxlength="5"></td>
					</tr>
					<tr>
					<td>FOLDABLE</td>
					<td><input type="text" name="foldable" maxlength="5"></td>
					</tr>
					<td><input type="submit" name="submit" value="Search_shoeracks"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*************************************************************************************************************//
	if($_POST['table']== 'fruits'){
		echo '<html>
			<body>
				<center>
				<h1>Search in Fruits</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					<td>NAME*</td>
					<td><input type="text" name="name" maxlength="10"></td>
					</tr>
					<tr>
					<td>UNIT*</td>
					<td><input type="text" name="unit" maxlength="10"></td>
					<td>TEMP*</td>
					<td><input type="text" name="temp" maxlength="10"></td>
					</tr>
					<td><input type="submit" name="submit" value="Search_fruits"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*************************************************************************************************************//
	if($_POST['table']== 'meat'){
		echo '<html>
			<body>
				<center>
				<h1>Search in Meat</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					<td>NAME*</td>
					<td><input type="text" name="name" maxlength="10"></td>
					</tr>
					<tr>
					<td>UNIT*</td>
					<td><input type="text" name="unit" maxlength="10"></td>
					<td>TEMP*</td>
					<td><input type="text" name="temp" maxlength="10"></td>
					</tr>
					<td><input type="submit" name="submit" value="Search_meat"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*************************************************************************************************************//
	if($_POST['table']== 'vegetables'){
		echo '<html>
			<body>
				<center>
				<h1>Search in vegetables</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					<td>NAME*</td>
					<td><input type="text" name="name" maxlength="10"></td>
					</tr>
					<tr>
					<td>UNIT*</td>
					<td><input type="text" name="unit" maxlength="10"></td>
					<td>GREEN*</td>
					<td><input type="text" name="green" maxlength="5"></td>
					<td>TEMP*</td>
					<td><input type="text" name="temp" maxlength="10"></td>
					</tr>
					<tr>
					<td><input type="submit" name="submit" value="Search_vegetables"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*************************************************************************************************************//
	if($_POST['table']== 'packeditem'){
		echo '<html>
			<body>
				<center>
				<h1>Search in Packed items</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					<td>QUAN*</td>
					<td><input type="text" name="quan" maxlength="10"></td>
					</tr>
					<tr>
					<td>COMPANY*</td>
					<td><input type="text" name="company" maxlength="20"></td>
					<tr>
					<td>MFD*</td>
					<td>Day*<select name = "day">
					<option></option>';
					for($i = 1; $i <= 31; $i++){
					echo '<option value='.$i.'>'.$i.'</option>';
					}
					echo '</select>';
					$months = array('01'=>'January', '02'=>'February',
					'03'=>'March', '04'=>'April', '05'=>'May',
					'06'=>'June', '07'=>'July', '08'=>'August',
					'09'=>'September','10'=>'October',
					'11'=>'November','12'=>'December');
					echo 'Month<select name = "month">
					<option></option>';
					foreach($months as $num => $nm){
					echo "<option value='$num'>$nm</option>";
					}
					echo '</select>
					Year<select name = "year">
					<option></option>';
					for($i = date('Y')-70; $i <= date('Y')-5; $i++){
					echo "<option value='$i'>$i</option>";
					}
					echo'</select>
					</td>
					</tr>
					<tr>
					<td>EXPIRY*</td>
					<td><input type="text" name="expiry" maxlength="15">
					</td>
					</tr>
					<tr>
					<td>FLAVOR*</td>
					<td><input type="text" name="flavor" maxlength="10"></td>
					<td>V_NV*</td>
					<td><input type="text" name="v_nv" maxlength="10"></td>
					</tr>
					<tr>
					<td>TEMP*</td>
					<td><input type="text" name="temp" maxlength="20"></td>
					<tr>
					<tr>
					<td><input type="submit" name="submit" value="Search_packeditem"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*************************************************************************************************************//
	if($_POST['table']== 'clothing'){
		echo '<html>
			<body>
				<center>
				<h1>Search in clothing</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>TARGET_GROUP</td>
					<td><input type="text" name="target_group" maxlength="10"></td>
					<td>PRICE</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr>
					<tr>
					<td>OUTFIT</td>
					<td><input type="text" name="outfit" maxlength="10"></td>
					<td>BRAND</td>
					<td><input type="text" name="brand" maxlength="10"></td>
					</tr>
					<tr>
					<td>TYPE</td>
					<td><input type="text" name="type" maxlength="10"></td>
					<td>COLOR</td>
					<td><input type="text" name="color" maxlength="10"></td>
					<td>DESCRIPTION</td>
					<td><input type="text" name="description" maxlength="200"></td>
					</tr>
					<td><input type="submit" name="submit" value="Search_clothing"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*************************************************************************************************************//
	if($_POST['table']== 'pen'){
		echo '<html>
			<body>
				<center>
				<h1>Search in Pens Updation Form</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>BRAND*</td>
					<td><input type="text" name="brand" maxlength="20"></td>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr>
					<tr>
					<td>MODEL*</td>
					<td><input type="text" name="model" maxlength="20"></td>
					<td>COLOR*</td>
					<td><input type="text" name="color" maxlength="10"></td>
					</tr>
					<tr>
					<td>TYPE</td>
					<td><input type="text" name="type" maxlength="15"></td>
					<td>LENGTH</td>
					<td><input type="text" name="length" maxlength="10"></td>
					<td>NIBGRADE</td>
					<td><input type="text" name="nibgrade" maxlength="10"></td>
					</tr>
					<td><input type="submit" name="submit" value="Search_pen"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*************************************************************************************************************//
	if($_POST['table']== 'books'){
		echo '<html>
			<body>
				<center>
				<h1>Search in Books</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>BRAND*</td>
					<td><input type="text" name="brand" maxlength="20"></td>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr>
					<tr>
					<td>MODEL*</td>
					<td><input type="text" name="model" maxlength="20"></td>
					<td>COLOR*</td>
					<td><input type="text" name="color" maxlength="10"></td>
					</tr>
					<td>RULING*</td>
					<td><input type="text" name="ruling" maxlength="20"></td>
					<td>SIZE*</td>
					<td><input type="text" name="size" maxlength="20"></td>
					<td>NO_OF_PAGES*</td>
					<td><input type="text" name="no_of_pages" maxlength="20"></td>
					</tr>
					<td><input type="submit" name="submit" value="Search_books"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*************************************************************************************************************//
	if($_POST['table']== 'calculator'){
		echo '<html>
			<body>
				<center>
				<h1>Search in Calculators</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>BRAND*</td>
					<td><input type="text" name="brand" maxlength="20"></td>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr>
					<tr>
					<td>MODEL*</td>
					<td><input type="text" name="model" maxlength="20"></td>
					<td>COLOR*</td>
					<td><input type="text" name="color" maxlength="10"></td>
					</tr>
					<tr>
					<td>POWERSOURCE*</td>
					<td><input type="text" name="powersource" maxlength="20"></td>
					<td>DISPLAY*</td>
					<td><input type="text" name="display" maxlength="20"></td>
					<td>DIMENSION*</td>
					<td><input type="text" name="dimension" maxlength="50"></td>
					</tr>
					<td><input type="submit" name="submit" value="Search_calculator"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*************************************************************************************************************//
	if($_POST['table']== 'folders'){
		echo '<html>
			<body>
				<center>
				<h1>Search in Folders</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>BRAND*</td>
					<td><input type="text" name="brand" maxlength="20"></td>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr>
					<tr>
					<td>MODEL*</td>
					<td><input type="text" name="model" maxlength="20"></td>
					<td>COLOR*</td>
					<td><input type="text" name="color" maxlength="10"></td>
					</tr>
					<tr>
					<td>NO_OF_INNERPOCKETS*</td>
					<td><input type="text" name="no_of_innerpockets" maxlength="10"></td>
					<td>FINISHING*</td>
					<td><input type="text" name="finishing" maxlength="20"></td>
					<td>PEN_PAD*</td>
					<td><input type="text" name="pen_pad" maxlength="10"></td>
					</tr>
					<td><input type="submit" name="submit" value="Search_folders"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*************************************************************************************************************//
	if($_POST['table']== 'cardholder'){
		echo '<html>
			<body>
				<center>
				<h1>Search in Cardholders</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>BRAND*</td>
					<td><input type="text" name="brand" maxlength="20"></td>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr>
					<tr>
					<td>MODEL*</td>
					<td><input type="text" name="model" maxlength="20"></td>
					<td>COLOR*</td>
					<td><input type="text" name="color" maxlength="10"></td>
					</tr>
					<tr>
					<td>COMPARTMENTS*</td>
					<td><input type="text" name="compartments" maxlength="10"></td>
					<td>TRAYS*</td>
					<td><input type="text" name="trays" maxlength="10"></td>
					<td>INTERLOCKING*</td>
					<td><input type="text" name="interlocking" maxlength="10"></td>
					</tr>
					<td><input type="submit" name="submit" value="Search_cardholder"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*************************************************************************************************************//
if($_POST['table']== 'skincare'){
		echo '<html>
			<body>
				<center>
				<h1>Search in skincare</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>BRAND*</td>
					<td><input type="text" name="brand" maxlength="20"></td>
					</tr><tr>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr><tr>
					<td>DESCRIPTION*</td>
					<td><input type="text" name="description" maxlength="200"></td></tr>
					<tr>
					<td>MFD*</td>
					<td>Day<select name = "day">
					<option></option>';
					for($i = 1; $i <= 31; $i++){
					echo '<option value='.$i.'>'.$i.'</option>';
					}
					echo '</select>';
					$months = array('01'=>'January', '02'=>'February',
					'03'=>'March', '04'=>'April', '05'=>'May',
					'06'=>'June', '07'=>'July', '08'=>'August',
					'09'=>'September','10'=>'October',
					'11'=>'November','12'=>'December');
					echo 'Month<select name = "month">
					<option></option>';
					foreach($months as $num => $nm){
					echo "<option value='$num'>$nm</option>";
					}
					echo '</select>
					Year<select name = "year">
					<option></option>';
					for($i = date('Y')-70; $i <= date('Y')-5; $i++){
					echo "<option value='$i'>$i</option>";
					}
					echo'</select>
					</td>
					</tr>
					<tr>
					<td>EXPIRY</td>
					<td>Day<select name = "day">
					<option></option>';
					for($i = 1; $i <= 31; $i++){
					echo '<option value='.$i.'>'.$i.'</option>';
					}
					echo '</select>';
					$months = array('01'=>'January', '02'=>'February',
					'03'=>'March', '04'=>'April', '05'=>'May',
					'06'=>'June', '07'=>'July', '08'=>'August',
					'09'=>'September','10'=>'October',
					'11'=>'November','12'=>'December');
					echo 'Month<select name = "month">
					<option></option>';
					foreach($months as $num => $nm){
					echo "<option value='$num'>$nm</option>";
					}
					echo '</select>
					Year<select name = "year">
					<option></option>';
					for($i = date('Y')-70; $i <= date('Y')-5; $i++){
					echo "<option value='$i'>$i</option>";
					}
					echo'</select>
					</td>
					</tr><tr>
					<td>IDEALFOR*</td>
					<td><input type="text" name="idealfor" maxlength="200"></td>
					</tr>
					<tr>
					<td>QUAN*</td>
					<td><input type="text" name="quan" maxlength="20"></td>
					<td>CATEGORY*</td>
					<td><input type="text" name="category" maxlength="20"></td>
					</tr>
					<tr>
					<td>SKINTYPE*</td>
					<td><input type="text" name="skintype" maxlength="20"></td>
					<td>BENEFITS*</td>
				    	<td><input type="text" name="benefits" maxlength="200"></td>
					</tr>
					<tr>
					<td><input type="submit" name="submit" value="Search_skincare"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*******************************************************************
if($_POST['table']== 'haircare'){
		echo '<html>
			<body>
				<center>
				<h1>Search in Haircare</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>BRAND*</td>
					<td><input type="text" name="brand" maxlength="20"></td>
					</tr><tr>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr><tr>
					<td>DESCRIPTION*</td>
					<td><input type="text" name="decription" maxlength="200"></td>
					</tr>
					<tr>
					<td>MFD*</td>
					<td>Day<select name = "day">
					<option></option>';
					for($i = 1; $i <= 31; $i++){
					echo '<option value='.$i.'>'.$i.'</option>';
					}
					echo '</select>';
					$months = array('01'=>'January', '02'=>'February',
					'03'=>'March', '04'=>'April', '05'=>'May',
					'06'=>'June', '07'=>'July', '08'=>'August',
					'09'=>'September','10'=>'October',
					'11'=>'November','12'=>'December');
					echo 'Month<select name = "month">
					<option></option>';
					foreach($months as $num => $nm){
					echo "<option value='$num'>$nm</option>";
					}
					echo '</select>
					Year<select name = "year">
					<option></option>';
					for($i = date('Y')-70; $i <= date('Y')-5; $i++){
					echo "<option value='$i'>$i</option>";
					}
					echo '</select>
					</td>
					</tr>
					<tr>
					<td>EXPIRY*</td>
					<td>Day<select name = "day">
					<option></option>';
					for($i = 1; $i <= 31; $i++){
					echo '<option value='.$i.'>'.$i.'</option>';
					}
					echo '</select>';
					$months = array('01'=>'January', '02'=>'February',
					'03'=>'March', '04'=>'April', '05'=>'May',
					'06'=>'June', '07'=>'July', '08'=>'August',
					'09'=>'September','10'=>'October',
					'11'=>'November','12'=>'December');
					echo 'Month<select name = "month">
					<option></option>';
					foreach($months as $num => $nm){
					echo "<option value='$num'>$nm</option>";
					}
					echo '</select>
					Year<select name = "year">
					<option></option>';
					for($i = date('Y')-70; $i <= date('Y')-5; $i++){
					echo "<option value='$i'>$i</option>";
					}
					echo '</select>
					</td>
					</tr>
					<tr>
					<td>IDEALFOR*</td>
					<td><input type="text" name="idealfor" maxlength="200"></td>
					</tr>
					<tr>
					<td>QUAN*</td>
					<td><input type="text" name="quan" maxlength="20"></td>
					<td>CATEGORY*</td>
					<td><input type="text" name="category" maxlength="20"></td>
					</tr>
					<tr>
					<td>USEDFOR*</td>
					<td><input type="text" name="usedfor" maxlength="20"></td>
					<td>HAIRTYPE*</td>
				    	<td><input type="text" name="hairtype" maxlength="20"></td>
					</tr>
					<tr>
					<td><input type="submit" name="submit" value="Search_haircare"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//***********************************************************************

if($_POST['table']== 'nailpolish'){
		echo '<html>
			<body>
				<center>
				<h1>Search in Nailpolish</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>BRAND*</td>
					<td><input type="text" name="brand" maxlength="20"></td>
					</tr><tr>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr><tr>
					<td>DESCRIPTION*</td>
					<td><input type="text" name="decription" maxlength="200"></td>
					
					</tr>
					<tr>
					<td>MFD*</td>
					<td>Day<select name = "day">
					<option></option>';
					for($i = 1; $i <= 31; $i++){
					echo '<option value='.$i.'>'.$i.'</option>';
					}
					echo '</select>';
					$months = array('01'=>'January', '02'=>'February',
					'03'=>'March', '04'=>'April', '05'=>'May',
					'06'=>'June', '07'=>'July', '08'=>'August',
					'09'=>'September','10'=>'October',
					'11'=>'November','12'=>'December');
					echo 'Month<select name = "month">
					<option></option>';
					foreach($months as $num => $nm){
					echo "<option value='$num'>$nm</option>";
					}
					echo '</select>
					Year<select name = "year">
					<option></option>';
					for($i = date('Y')-70; $i <= date('Y')-5; $i++){
					echo "<option value='$i'>$i</option>";
					}
					echo '</select>
					</td>
					</tr>
					<tr>
					<td>IDEALFOR*</td>
					<td><input type="text" name="idealfor" maxlength="200"></td>
					</tr>
					<tr>
					<td>QUAN*</td>
					<td><input type="text" name="quan" maxlength="20"></td>
					<td>ORGANICTYPE*</td>
					<td><input type="text" name="organictype" maxlength="5"></td>
					</tr>
					<tr>
					<td>CONTAINERSHAPE*</td>
					<td><input type="text" name="containershape" maxlength="20"></td>
					<td>SHADE*</td>
				    	<td><input type="text" name="shade" maxlength="20"></td>
					</tr>
					<tr>
					<td><input type="submit" name="submit" value="Search_nailpolish"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>
';
	}

//***********************************************************************

if($_POST['table']== 'kajal'){
		echo '<html>
			<body>
				<center>
				<h1>Search in Kajal</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>BRAND*</td>
					<td><input type="text" name="brand" maxlength="20"></td>
					</tr><tr>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr><tr>
					<td>DESCRIPTION*</td>
					<td><input type="text" name="decription" maxlength="200"></td>
					
					</tr>
					<tr>
					<td>MFD*</td>
					<td>Day<select name = "day">
					<option></option>';
					for($i = 1; $i <= 31; $i++){
					echo '<option value='.$i.'>'.$i.'</option>';
					}
					echo '</select>';
					$months = array('01'=>'January', '02'=>'February',
					'03'=>'March', '04'=>'April', '05'=>'May',
					'06'=>'June', '07'=>'July', '08'=>'August',
					'09'=>'September','10'=>'October',
					'11'=>'November','12'=>'December');
					echo 'Month<select name = "month">
					<option></option>';
					foreach($months as $num => $nm){
					echo "<option value='$num'>$nm</option>";
					}
					echo '</select>
					Year<select name = "year">
					<option></option>';
					for($i = date('Y')-70; $i <= date('Y')-5; $i++){
					echo "<option value='$i'>$i</option>";
					}
					echo '</select>
					</td>
					</tr>
					<tr>
					<td>EXPIRY*</td>
					<td>Day<select name = "day">
					<option></option>';
					for($i = 1; $i <= 31; $i++){
					echo '<option value='.$i.'>'.$i.'</option>';
					}
					echo '</select>';
					$months = array('01'=>'January', '02'=>'February',
					'03'=>'March', '04'=>'April', '05'=>'May',
					'06'=>'June', '07'=>'July', '08'=>'August',
					'09'=>'September','10'=>'October',
					'11'=>'November','12'=>'December');
					echo 'Month<select name = "month">
					<option></option>';
					foreach($months as $num => $nm){
					echo '<option value='.$num.'>'.$nm.'</option>';
					}
					echo '</select>
					Year<select name = "year">
					<option></option>';
					for($i = date('Y')-70; $i <= date('Y')-5; $i++){
					echo "<option value='$i'>$i</option>";
					}
					echo '</select>
					</td>
					</tr>
					<tr>
					<td>IDEALFOR*</td>
					<td><input type="text" name="idealfor" maxlength="200"></td>
					</tr>
					<tr>
					<td>QUAN*</td>
					<td><input type="text" name="quan" maxlength="20"></td>
					<td>SMUDGE*</td>
					<td><input type="text" name="organictype" maxlength="5"></td>
					</tr>
					<tr>
					<td>DURATION*</td>
					<td><input type="text" name="duration" maxlength="20"></td>
					<td>SHADE*</td>
				    	<td><input type="text" name="shade" maxlength="20"></td>
					</tr>
					<tr>
					<td><input type="submit" name="submit" value="Search_kajal"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}


//**************************************************************



if($_POST['table']== 'lipstick'){
		echo '<html>
			<body>
				<center>
				<h1>Search in Lipsticks</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="10"></td>
					</tr>
					<tr>
					<td>BRAND*</td>
					<td><input type="text" name="brand" maxlength="20"></td>
					</tr><tr>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					</tr><tr>
					<td>DESCRIPTION*</td>
					<td><input type="text" name="decription" maxlength="200"></td>
					
					</tr>
					<tr>
					<td>MFD*</td>
					<td>Day<select name = "day">
					<option></option>';
					for($i = 1; $i <= 31; $i++){
					echo '<option value='.$i.'>'.$i.'</option>';
					}
					echo '</select>';
					$months = array('01'=>'January', '02'=>'February',
					'03'=>'March', '04'=>'April', '05'=>'May',
					'06'=>'June', '07'=>'July', '08'=>'August',
					'09'=>'September','10'=>'October',
					'11'=>'November','12'=>'December');
					echo 'Month<select name = "month">
					<option></option>';
					foreach($months as $num => $nm){
					echo "<option value='$num'>$nm</option>";
					}
					echo '</select>
					Year<select name = "year">
					<option></option>';
					for($i = date('Y')-70; $i <= date('Y')-5; $i++){
					echo "<option value='$i'>$i</option>";
					}
					echo '</select>
					</td>
					</tr>
					<tr>
					<td>EXPIRY</td>
					<td>Day<select name = "day">
					<option></option>';
					for($i = 1; $i <= 31; $i++){
					echo '<option value='.$i.'>'.$i.'</option>';
					}
					echo '</select>';
					$months = array('01'=>'January', '02'=>'February',
					'03'=>'March', '04'=>'April', '05'=>'May',
					'06'=>'June', '07'=>'July', '08'=>'August',
					'09'=>'September','10'=>'October',
					'11'=>'November','12'=>'December');
					echo 'Month<select name = "month">
					<option></option>';
					foreach($months as $num => $nm){
					echo "<option value='$num'>$nm</option>";
					}
					echo '</select>
					Year<select name = "year">
					<option></option>';
					for($i = date('Y')-70; $i <= date('Y')-5; $i++){
					echo "<option value='$i'>$i</option>";
					}
					echo '</select>
					</td>
					</tr>
					<tr>
					<td>IDEALFOR*</td>
					<td><input type="text" name="idealfor" maxlength="200"></td>
					</tr>
					<tr>
					<td>QUAN*</td>
					<td><input type="text" name="quan" maxlength="20"></td>
					<td>TYPE*</td>
					<td><input type="text" name="type" maxlength="5"></td>
					</tr>
					<tr>
					<td>FINISH*</td>
					<td><input type="text" name="finish" maxlength="20"></td>
					</tr><tr>
					<td>ORGANIC*</td>
					<td><input type="text" name="organic" maxlength="20"></td>					
					<td>SHADE*</td>
				    	<td><input type="text" name="shade" maxlength="200"></td>
					</tr>
					<tr>
					<td><input type="submit" name="submit" value="Search_lipstick"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}



//*******************************************************


if($_POST['table']== 'washingmach'){
		echo '<html>
			<body>
				<center>
				<h1>Search in WASHING MACHINE</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="20"></td>
					</tr>
					<tr>
					<td>COMPANY*</td>
					<td><input type="text" name="company" maxlength="50"></td>
					</tr><tr>
					<td>MODEL*</td>
					<td><input type="text" name="model" maxlength="20"></td>
					</tr><tr>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					<td>COLOR*</td>
					<td><input type="date" name="color" maxlength="20"></td>
					</tr>
					<tr>
					<td>WARRANTY*</td>
					<td><input type="date" name="warranty" maxlength="20"></td>
					<td>DIM*</td>
					<td><input type="text" name="dim" maxlength="20"></td>
					</tr>
					<tr>
					<td>DIGITAL*</td>
					<td><input type="text" name="digital" maxlength="20"></td>
					<td>CONTROLTYPE*</td>
					<td><input type="text" name="controltype" maxlength="20"></td>
					</tr>
					<tr>
					<td>LOADTYPE*</td>
					<td><input type="text" name="loadtype" maxlength="20"></td>
					<td>METHOD*</td>
				    	<td><input type="text" name="method" maxlength="200"></td>
					</tr>
					<tr>
					<td><input type="submit" name="submit" value="Search_washingmach"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//******************************************************************************


if($_POST['table']== 'ac'){
		echo '<html>
			<body>
				<center>
				<h1>Search in AC</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="20"></td>
					</tr>
					<tr>
					<td>COMPANY*</td>
					<td><input type="text" name="company" maxlength="50"></td>
					</tr><tr>
					<td>MODEL*</td>
					<td><input type="text" name="model" maxlength="20"></td>
					</tr><tr>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					<td>COLOR*</td>
					<td><input type="text" name="color" maxlength="20"></td>
					</tr>
					<tr>
					<td>WARRANTY*</td>
					<td><input type="date" name="warranty" maxlength="20"></td>
					<td>DIM*</td>
					<td><input type="text" name="dim" maxlength="20"></td>
					</tr>
					<tr>
					<td>TYPE*</td>
					<td><input type="text" name="type" maxlength="20"></td>
					<td>CAPACITY*</td>
					<td><input type="text" name="capacity" maxlength="20"></td>
					</tr>
					<tr>
					<td>ENERGYRATING*</td>
					<td><input type="text" name="energyrating" maxlength="20"></td>
					<td>WEIGHT*</td>
				    	<td><input type="text" name="weight" maxlength="20"></td>
					</tr>
					<tr>
					<td>POWERREQ*</td>
					<td><input type="text" name="powerreq" maxlength="20"></td>
					
					</tr>
					<tr>
					<td><input type="submit" name="submit" value="Search_ac"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}




//*******************************************************

if($_POST['table']== 'fridge'){
		echo '<html>
			<body>
				<center>
				<h1>Search in Fridges</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="20"></td>
					</tr>
					<tr>
					<td>COMPANY*</td>
					<td><input type="text" name="company" maxlength="50"></td>
					</tr><tr>
					<td>MODEL*</td>
					<td><input type="text" name="model" maxlength="20"></td>
					</tr><tr>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					<td>COLOR*</td>
					<td><input type="text" name="color" maxlength="20"></td>
					</tr>
					<tr>
					<td>WARRANTY*</td>
					<td><input type="date" name="warranty" maxlength="20"></td>
					<td>DIM*</td>
					<td><input type="text" name="dim" maxlength="20"></td>
					</tr>
					<tr>
					<td>TYPE*</td>
					<td><input type="text" name="type" maxlength="20"></td>
					<td>TECHNOLOGY*</td>
					<td><input type="text" name="technology" maxlength="50"></td>
					</tr>
					<tr>
					<td>CAPACITY*</td>
					<td><input type="text" name="capacity" maxlength="20"></td>
					

					</tr>
					<tr>
					<td><input type="submit" name="submit" value="Search_fridge"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}

//**********************************************


if($_POST['table']== 'tv'){
		echo '<html>
			<body>
				<center>
				<h1>Search in TV</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="20"></td>
					</tr>
					<tr>
					<td>COMPANY*</td>
					<td><input type="text" name="company" maxlength="50"></td>
					</tr><tr>
					<td>MODEL*</td>
					<td><input type="text" name="model" maxlength="20"></td>
					</tr><tr>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					<td>COLOR*</td>
					<td><input type="text" name="color" maxlength="20"></td>
					</tr>
					<tr>
					<td>WARRANTY*</td>
					<td><input type="date" name="warranty" maxlength="20"></td>
					<td>DIM*</td>
					<td><input type="text" name="dim" maxlength="20"></td>
					</tr>
					<tr>
					<td>RESOLUTION*</td>
					<td><input type="text" name="resolution" maxlength="20"></td>
					<td>FEATURES*</td>
					<td><input type="text" name="features" maxlength="200"></td>
					</tr>
					<tr>
					<td>SCREENTYPE*</td>
					<td><input type="text" name="screentype" maxlength="20"></td>
					<td>CONNECTIVITY*</td>
				    	<td><input type="text" name="connectivity" maxlength="20"></td>
					</tr>
					<tr>
					<td>HDMI*</td>
					<td><input type="text" name="hdmi" maxlength="5"></td>
					
					</tr>
					<tr>
					<td>USB*</td>
					<td><input type="text" name="usb" maxlength="5"></td>
					
					</tr>
					<tr>
					<td><input type="submit" name="submit" value="Search_tv"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}


//***************************************************************


if($_POST['table']== 'oven'){
		echo '<html>
			<body>
				<center>
				<h1>Search in OVEN</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
					<tr>
					<td>MODEL_ID*</td>
					<td><input type="text" name="modelid" maxlength="20"></td>
					</tr>
					<tr>
					<td>COMPANY*</td>
					<td><input type="text" name="company" maxlength="50"></td>
					</tr><tr>
					<td>MODEL*</td>
					<td><input type="text" name="model" maxlength="20"></td>
					</tr><tr>
					<td>PRICE*</td>
					<td><input type="text" name="price" maxlength="10"></td>
					<td>COLOR*</td>
					<td><input type="text" name="color" maxlength="20"></td>
					</tr>
					<tr>
					<td>WARRANTY*</td>
					<td><input type="date" name="warranty" maxlength="20"></td>
					<td>DIM*</td>
					<td><input type="text" name="dim" maxlength="20"></td>
					</tr>
					<tr>
					<td>TYPE*</td>
					<td><input type="text" name="type" maxlength="20"></td>
					<td>CAPACITY*</td>
					<td><input type="text" name="capacity" maxlength="20"></td>
					</tr>
					<tr>
					<td>CONTROLTYPE*</td>
					<td><input type="text" name="controltype" maxlength="20"></td>
					<td>WEIGHT*</td>
				    	<td><input type="text" name="weight" maxlength="20"></td>
					</tr>
					<tr>
					<td>POWEROUT*</td>
					<td><input type="text" name="powerout" maxlength="20"></td>
					
					</tr>
					
					<tr>
					<td><input type="submit" name="submit" value="Search_oven"></td>
					</tr>
				</table>
				</form>
				</center>
			</body>
	    </html>';
	}
//*************************************************************************************************************//
if($_POST['table']== 'pads')
{	
				echo '<html>
				<body>
				<center>
				<h1>Search in pads</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
				<tr>
				<td>MODEL_ID*</td>
				<td><input type="text" name="modelid" maxlength="10"></td>
				<td>BRAND*</td>
				<td><input type="text" name="brand" maxlength="10"></td>
				<td>PRICE*</td>
				<td><input type="text" name="price" maxlength="10"></td>
				</tr>
				<tr>
				<td>COLOR*</td>
				<td><input type="text" name="color" maxlength="10"></td>
				<td>SIZE*</td>
				<td><input type="text" name="size" maxlength="10"></td>
				<td>MATERIAL*</td>
				<td><input type="text" name="material" maxlength="10"></td>
				</tr>
				<tr>
				<td>FACE MATERIAL*</td>
				<td><input type="text" name="face_mat" maxlength="10"></td>
				<td>INNER MATERIAL*</td>
				<td><input type="text" name="inner_mat" maxlength="10"></td>
				<td>FILLING MATERIAL*</td>
				<td><input type="text" name="filling_mat" maxlength="10"></td>
				</tr>
				<tr>
				<td>WEIGHT*</td>
				<td><input type="text" name="weight" maxlength="5"></td>
				<td>IDEAL FOR*</td>
				<td><input type="text" name="ideal_for" maxlength="10"></td>
				</tr>
				<td><input type="submit" name="submit" value="Search_pads"></td>
				</tr>
				</table>
				</form>
				</center>
				</body>
	</html>';
	}
//*********************************************************************************************************************//
if($_POST['table']== 'gloves')
{	
				echo '<html>
				<body>
				<center>
				<h1>Search in gloves</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
				<tr>
				<td>MODEL_ID*</td>
				<td><input type="text" name="modelid" maxlength="10"></td>
				<td>BRAND*</td>
				<td><input type="text" name="brand" maxlength="10"></td>
				<td>PRICE*</td>
				<td><input type="text" name="price" maxlength="10"></td>
				</tr>
				<tr>
				<td>COLOR*</td>
				<td><input type="text" name="color" maxlength="10"></td>
				<td>SIZE*</td>
				<td><input type="text" name="size" maxlength="5"></td>
				<td>MATERIAL*</td>
				<td><input type="text" name="material" maxlength="10"></td>
				</tr>
				<td>IDEAL FOR*</td>
				<td><input type="text" name="ideal_for" maxlength="10"></td>
				<td>SPORT TYPE*</td>
				<td><input type="text" name="sport_type" maxlength="10"></td>
				</tr>
				<td><input type="submit" name="submit" value="Search_gloves"></td>
				</tr>
				</table>
				</form>
				</center>
				</body>
	</html>';
	}
//*********************************************************************************************************************//
if($_POST['table']== 'helmet')
{	
				echo '<html>
				<body>
				<center>
				<h1>Search in helmets</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
				<tr>
				<td>MODEL_ID*</td>
				<td><input type="text" name="modelid" maxlength="10"></td>
				<td>BRAND*</td>
				<td><input type="text" name="brand" maxlength="10"></td>
				<td>PRICE*</td>
				<td><input type="text" name="price" maxlength="10"></td>
				</tr>
				<tr>
				<td>COLOR*</td>
				<td><input type="text" name="color" maxlength="10"></td>
				<td>SIZE*</td>
				<td><input type="text" name="size" maxlength="5"></td>
				<td>MATERIAL*</td>
				<td><input type="text" name="material" maxlength="10"></td>
				</tr>
				<tr>
				<td>IDEAL FOR*</td>
				<td><input type="text" name="ideal_for" maxlength="10"></td>
				<td>SPORT TYPE*</td>
				<td><input type="text" name="sport_type" maxlength="10"></td>
				<td>ABSORBENT CLOTH</td>
				<td><input type="text" name="absorbent_cloth" maxlength="10"></td>
				</tr>
				<td><input type="submit" name="submit" value="Search_helmet"></td>
				</tr>
				</table>
				</form>
				</center>
				</body>
	</html>';
	}
//*********************************************************************************************************************//
if($_POST['table']== 'guard')
{	
				echo '<html>
				<body>
				<center>
				<h1>Search in guards</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
				<tr>
				<td>MODEL_ID*</td>
				<td><input type="text" name="modelid" maxlength="10"></td>
				<td>BRAND*</td>
				<td><input type="text" name="brand" maxlength="10"></td>
				<td>PRICE*</td>
				<td><input type="text" name="price" maxlength="10"></td>
				</tr>
				<tr>
				<td>COLOR*</td>
				<td><input type="text" name="color" maxlength="30"></td>
				<td>SIZE*</td>
				<td><input type="text" name="size" maxlength="5"></td>
				<td>MATERIAL*</td>
				<td><input type="text" name="material" maxlength="10"></td>
				</tr>
				<td>IDEAL FOR*</td>
				<td><input type="text" name="ideal_for" maxlength="10"></td>
				<td>SPORT TYPE*</td>
				<td><input type="text" name="sport_type" maxlength="10"></td>
				</tr>
				<td><input type="submit" name="submit" value="Search_guard"></td>
				</tr>
				</table>
				</form>
				</center>
				</body>
	</html>';
	}
//*********************************************************************************************************************//
if($_POST['table']== 'sportshoes')
{	
				echo '<html>
				<body>
				<center>
				<h1>Search in sportshoes</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
				<tr>
				<td>MODEL_ID*</td>
				<td><input type="text" name="modelid" maxlength="10"></td>
				<td>BRAND*</td>
				<td><input type="text" name="brand" maxlength="10"></td>
				<td>PRICE*</td>
				<td><input type="text" name="price" maxlength="10"></td>
				</tr>
				<tr>
				<td>COLOR*</td>
				<td><input type="text" name="color" maxlength="10"></td>
				<td>SIZE*</td>
				<td><input type="text" name="size" maxlength="5"></td>
				<td>MATERIAL*</td>
				<td><input type="text" name="material" maxlength="10"></td>
				</tr>
				<tr>
				<td>IDEAL FOR*</td>
				<td><input type="text" name="ideal_for" maxlength="10"></td>
				<td>SPORT TYPE*</td>
				<td><input type="text" name="sport_type" maxlength="10"></td>
				<td>LACE</td>
				<td><input type="text" name="lace" maxlength="10"></td>
				</tr>
				<td><input type="submit" name="submit" value="Search_sportshoes"></td>
				</tr>
				</table>
				</form>
				</center>
				</body>
	</html>';
	}
//*********************************************************************************************************************//
if($_POST['table']== 'bat')
{	
				echo '<html>
				<body>
				<center>
				<h1>Search in bats</h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
				<tr>
				<td>MODEL_ID*</td>
				<td><input type="text" name="modelid" maxlength="10"></td>
				<td>BRAND*</td>
				<td><input type="text" name="brand" maxlength="10"></td>
				<td>PRICE*</td>
				<td><input type="text" name="price" maxlength="10"></td>
				</tr>
				<tr>
				<td>COLOR*</td>
				<td><input type="text" name="color" maxlength="10"></td>
				<td>SIZE*</td>
				<td><input type="text" name="size" maxlength="5"></td>
				<td>MATERIAL*</td>
				<td><input type="text" name="material" maxlength="10"></td>
				</tr>
				<tr>
				<td>SPORT_NAME*</td>
				<td><input type="text" name="sport_name" maxlength="10"></td>
				<td>COMPANY*</td>
				<td><input type="text" name="company" maxlength="10"></td>
				<td>DIM*</td>
				<td><input type="text" name="dim" maxlength="10"></td>
				</tr>
				<td><input type="submit" name="submit" value="Search_bat"></td>
				</tr>
				</table>
				</form>
				</center>
				</body>
	</html>';
	}
//*********************************************************************************************************************//
if($_POST['table']== 'ball')
{	
				echo '<html>
				<body>
				<center>
				<h1>Search in balls </h1>
				<form action="search_product.php" method="post">
				<table cellpadding = "10">
				<tr>
				<td>MODEL_ID*</td>
				<td><input type="text" name="modelid" maxlength="10"></td>
				<td>BRAND*</td>
				<td><input type="text" name="brand" maxlength="10"></td>
				<td>PRICE*</td>
				<td><input type="text" name="price" maxlength="10"></td>
				</tr>
				<tr>
				<td>COLOR*</td>
				<td><input type="text" name="color" maxlength="10"></td>
				<td>SIZE*</td>
				<td><input type="text" name="size" maxlength="5"></td>
				<td>MATERIAL*</td>
				<td><input type="text" name="material" maxlength="10"></td>
				</tr>
				<tr>
				<td>SPORT NAME*</td>
				<td><input type="text" name="sport_name" maxlength="10"></td>
				<td>WEIGHT*</td>
				<td><input type="text" name="weight" maxlength="10"></td>
				<td>DIM*</td>
				<td><input type="text" name="dim" maxlength="5"></td>
				</tr>
				<td><input type="submit" name="submit" value="Search_ball"></td>
				</tr>
				</table>
				</form>
				</center>
				</body>
	</html>';
	}
//*********************************************************************************************************************//
}
?>