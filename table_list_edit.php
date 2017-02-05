<?php
require('menu.php');
?><html>
<head>
<style>
	.demo select {
		border: 0 !important;  /*Removes border*/
		-webkit-appearance: none;  /*Removes default chrome and safari style*/
		-moz-appearance: none; /* Removes Default Firefox style*/
        appearance:none;
		background: #73AD21 url(img/select-arrow.png) no-repeat 90% center;
		width: 300px; /*Width of select dropdown to give space for arrow image*/
		text-indent: 0.01px; /* Removes default arrow from firefox*/
		text-overflow: "";  /*Removes default arrow from firefox*/ /*My custom style for fonts*/
		color: #FFF;
		height: 50px;
		border-radius: 20px;
		padding: 5px;
		box-shadow: inset 0 0 5px rgba(000,000,000, 0.5);
	}
		.demo select.option3 {
		border-radius: 15px 0;
	}
	body{
		position : fixed;
		top: 20%;
		left: 35%;
		background-image:url("green.jpg");
		background-repeat: no-repeat;
		background-size:100%;
	}
	.colo{
		color :#4CC417;
	}
</style>
</head>
<body>
<center>
<h1 class="colo">Available Products List<h1>
<form name="myform" action="register_product.php" method="post" class="demo">
	<table align="center" cellspacing="10">
	<tr><td> <h2 class="colo">- choose table -<br></h2></td></tr>
	<tr><h2>
		<td><select name="table" class="option3">
				<option value="mobiles"> MOBILES </option>
				<option value="laptop"> LAPTOP </option>
				<option value="washingmach"> WASHINGMACH </option>
				<option value="ac"> AC </option>
				<option value="fridge"> FRIDGE </option>
				<option value="tv"> TV </option>
				<option value="oven"> OVEN </option>
				<option value="skincare"> SKINCARE </option>
				<option value="haircare"> HAIRCARE </option>
				<option value="nailpolish"> NAILPOLISH </option>
				<option value="kajal"> KAJAL </option>
				<option value="lipstick"> LIPSTICK </option>
				<option value="sofa"> SOFA </option>
				<option value="bed"> BED </option>
				<option value="diningtable"> DININGTABLE </option>
				<option value="tvcabinet"> TVCABINET </option>
				<option value="shoeracks"> SHOERACKS </option>
				<option value="pen"> PEN </option>
				<option value="books"> BOOKS </option>
				<option value="calculator"> CALCULATOR </option>
				<option value="folders"> FOLDERS </option>
				<option value="cardholder"> CARDHOLDER </option>
				<option value="pads"> PADS </option>
				<option value="gloves"> GLOVES </option>
				<option value="helmet"> HELMET </option>
				<option value="guard"> GUARD </option>
				<option value="sportshoes"> SPORTSHOES </option>
				<option value="bat"> BAT </option>
				<option value="ball"> BALL </option>
				<option value="fruits"> FRUITS </option>
				<option value="vegetables"> VEGETABLES </option>
				<option value="meat"> MEAT </option>
				<option value="packeditem"> PACKEDITEM </option>
			</select><br><br></td></tr>
	<tr align="center"><td><input type="submit" style="width:100px; height:28px;font-face: 'Comic Sans MS'; font-size: larger; color: green; background-color: #FFFFFF; border: 2pt ridge lightgrey" name="submit" value="EDIT"/></td></tr></h2>
	</table>
</form>
</center>
</body>
</html>
