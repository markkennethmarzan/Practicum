<!-- Creating Connection to the Database -->
<?php
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link, "game");
?>

<!DOCTYPE>

<html>

	<head>
		<title>Admin Shop</title>
		<link rel="stylesheet" type="text/css" href="_CSS/_style.css">
		<link href="https://fonts.googleapis.com/css?family=Electrolize|Slabo+13px" rel="stylesheet">
	</head>
	
	<body>
		<div class="title_container">
		<a href="#" class="title">ADMIN</a>		
		</div>
		
		
		<?php
			$maxprod = mysqli_query($link, "select max(product_id) as prodmax from products");
			$maxrow = mysqli_fetch_array($maxprod);
			//echo "<p>"; echo $maxrow["prodmax"]; echo "</p>";	
		?>
		
		<div class="max_container">
		<p class="maxlabel"> LATEST PRODUCT ID: </p>
		<p class="maxval"><?php echo $maxrow["prodmax"];?></p>
		</div>
		
		<form name="products_form" action="" method="post">
		<table align="center" class="mainT">
			<tr>
			<td colspan="2" class="header">INSERT PRODUCTS TO DATA BASE</td>
			</tr>
			
			<tr>
				<td>Enter the id category of the product:</td>
				<td>
					<input type="text" name="icategory_id">
				</td>
			</tr>
			
			<tr>
				<td>Enter the description of the product:</td>
				<td>
					<input type="text" name="idescription">
				</td>
			</tr>
			
			<tr>
				<td>Enter the name of the image file:</td>
				<td>
					<input type="text" name="iimage">
				</td>
			</tr>
			
			<tr>
				<td>Enter the price of the product:</td>
				<td>
					<input type="text" name="iprice">
				</td>
			</tr>
			
			<tr>
				<td>Enter name of the title:</td>
				<td>
					<input type="text" name="ititle">
				</td>
			</tr>
			
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="isubmit" value="insert">
				</td>
			</tr>
			
			<tr>
				<td>
					<br/>
				</td>
			</tr>
			
<!-------------------------------------------------------------------------------------------------->
			
			<tr>
				<td colspan="2" class="header">DELETE RECORD TO DATA BASE</td>
			</tr>
			
			<tr>
				<td>Enter the product ID of the item:</td>
				<td><input type="text" name="dproduct_id"></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="dsubmit" value="delete">
				</td>
			</tr>
			
			<tr>
				<td>
					<br/>
				</td>
			</tr>
			
<!-------------------------------------------------------------------------------------------------->
			
			<tr>
				<td colspan="2" class="header">UPDATE RECORD TO DATA BASE</td>
			</tr>
			
			<tr>
				<td class="primary"><b>Enter first the product ID of the item:</b></td>
				<td><input type="text" name="uproduct_id"></td>
			</tr>
			
			<tr>
				<td>Current category ID of the product:</td>
				<td><input type="text" name="uccategory_id"></td>
			</tr>
			
			<tr>
				<td class="uprow">New category ID of the product:</td>
				<td>
					<input type="text" name="uncategory_id">
				</td>
			</tr>
			
			<tr>
				<td>Current title of the product:</td>
				<td><input type="text" name="uctitle"></td>
			</tr>
			
			<tr>
				<td class="uprow">New title of the product:</td>
				<td>
					<input type="text" name="untitle">
				</td>
			</tr>
			
			<tr>
				<td>Current description of the product:</td>
				<td><input type="text" name="ucdescription"></td>
			</tr>
			
			<tr>
				<td class="uprow">New description of the product:</td>
				<td>
					<input type="text" name="undescription">
				</td>
			</tr>
			
			<tr>
				<td>Current name of the image:</td>
				<td><input type="text" name="ucimg"></td>
			</tr>
			
			<tr>
				<td class="uprow">New name of the image:</td>
				<td>
					<input type="text" name="unimg">
				</td>
			</tr>
			
			<tr>
				<td>Current price of the product:</td>
				<td><input type="text" name="ucprice"></td>
			</tr>
			
			<tr>
				<td class="uprow">New price of the product:</td>
				<td>
					<input type="text" name="unprice">
				</td>
			</tr>
			
								
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="usubmit" value="update">
				</td>
			</tr>
			
			<tr>
				<td>
					<br/>
				</td>
			</tr>

<!-------------------------------------------------------------------------------------------------->
			
			<tr>
			<td colspan="2" class="header">SEARCH RECORD TO DATA BASE</td>
			</tr>
			
			
			<tr>
				<td class="uprow">Enter the product ID:</td>
				<td>
					<input type="text" name="sproduct_id">
				</td>
			</tr>
			
			<tr>
				<td>Enter the name of the product:</td>
				<td>
					<input type="text" name="stitle">
				</td>
			</tr>
			
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="ssubmit" value="search">
				</td>
			</tr>
			
			<tr>
				<td>
					<br/>
				</td>
			</tr>
			
<!-------------------------------------------------------------------------------------------------->
			
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="dssubmit" value="DISPLAY ALL">
				</td>
			</tr>
			
		</table>
		</form>
		
		
		
<?php	
//IMPORT
if(isset($_POST["isubmit"])){
	mysqli_query($link,"insert into products (category_id, title, description, image, price)
	values('$_POST[icategory_id]', '$_POST[ititle]', '$_POST[idescription]', '$_POST[iimage]', '$_POST[iprice]')");
}

//DELETE
if(isset($_POST["dsubmit"])){
	mysqli_query($link,"delete from products where product_id='$_POST[dproduct_id]'");
}	

//UPDATE
if(isset($_POST["usubmit"])){
	mysqli_query($link,"update products set category_id=$_POST[uncategory_id] where category_id=$_POST[uccategory_id] and product_id=$_POST[uproduct_id]");
	mysqli_query($link,"update table1 set description='$_POST[undescription]' where description='$_POST[ucdescription]' and product_id=$_POST[uproduct_id]");
	mysqli_query($link,"update products set image='$_POST[unimg]' where image='$_POST[ucimg]' and product_id=$_POST[uproduct_id]");
	mysqli_query($link,"update products set price='$_POST[unprice]' where price='$_POST[ucprice]' and product_id=$_POST[uproduct_id]");
	mysqli_query($link,"update products set title='$_POST[untitle]' where title='$_POST[uctitle]' and product_id=$_POST[uproduct_id]");
}

//SEARCH
if(isset($_POST["ssubmit"])){
	$res = mysqli_query($link,"select * from products where product_id='$_POST[sproduct_id]' or title='$_POST[stitle]'");
	echo "<table border=1>";
		echo "<tr>";
		echo "<th>"; echo "product_id"; echo"</td>";
		echo "<th>"; echo "category_id"; echo"</td>";
		echo "<th>"; echo "title"; echo"</td>";
		echo "<th>"; echo "description"; echo"</td>";
		echo "<th>"; echo "image"; echo"</td>";
		echo "<th>"; echo "price"; echo"</td>";	
		echo "</tr>";
	while($row=mysqli_fetch_array($res)){
		echo "<tr>";
		echo "<td>"; echo $row["product_id"]; echo"</td>";
		echo "<td>"; echo $row["category_id"]; echo"</td>";
		echo "<td>"; echo $row["title"]; echo"</td>";
		echo "<td>"; echo $row["description"]; echo"</td>";
		echo "<td>"; echo $row["image"]; echo"</td>";
		echo "<td>"; echo $row["price"]; echo"</td>";		
		echo "</tr>";	
	}
	echo "</table>";	
}
		
//DISPLAY
if(isset($_POST["dssubmit"])){
	$res = mysqli_query($link,"select * from products");
	echo "<table border=1>";
		echo "<tr>";
		echo "<th>"; echo "product_id"; echo"</td>";
		echo "<th>"; echo "category_id"; echo"</td>";
		echo "<th>"; echo "title"; echo"</td>";
		echo "<th>"; echo "description"; echo"</td>";
		echo "<th>"; echo "image"; echo"</td>";
		echo "<th>"; echo "price"; echo"</td>";
		echo "</tr>";
	while($row=mysqli_fetch_array($res)){
		echo "<tr>";
		echo "<td>"; echo $row["product_id"]; echo"</td>";
		echo "<td>"; echo $row["category_id"]; echo"</td>";
		echo "<td>"; echo $row["title"]; echo"</td>";
		echo "<td>"; echo $row["description"]; echo"</td>";
		echo "<td>"; echo $row["image"]; echo"</td>";
		echo "<td>"; echo $row["price"]; echo"</td>";	
		echo "</tr>";	
	}
	echo "</table>";	
}
				
?>
	</body>
	
</html>