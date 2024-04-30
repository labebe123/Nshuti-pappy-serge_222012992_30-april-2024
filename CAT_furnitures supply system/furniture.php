<!DOCTYPE html>
<html>
<head>
	<title>hirwa cargo</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div>
	<form action="" method="POST">
		<center><h2>RECORD NEW FURNITURE</h2></center>
		<label>furnitureid</label>
		<input type="text" name="furnitureid">
		<label>furturename</label>
		<input type="text" name="furniturename"><br>
		<label>furnitureowner</label>
		<input type="text" name="furnitureownernames"><br>
		<input type="submit" name="insertfurniture" value="insert">
	</form>

</div>
</body>
</html>
<?php
if (isset($_POST['insertfurniture'])) {
include 'connection.php';
$furnitureid = $_POST['furnitureid'];
$furniturename = $_POST['furniturename'];
$furnitureownernames = $_POST['furnitureownernames'];

$sql = "INSERT INTO furniture VALUES('$furnitureid','$furniturename','$furnitureownernames')";
$result = $conn->query($sql);
if ($result) {
	header('location:furnitureretrieve.php');
}else{
	echo "error in insert furniture";
}
}
 ?>
