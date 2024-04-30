<html>
<head>
	<title>hirwa cargo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>
	<form action="" method="POST">
		<!-- <label>furnitureid</label>
		<input type="text" name="furnitureid"> -->
		<label>importdate</label>
		<input type="date" name="expdate"><br>
		<label>quantity</label>
		<input type="text" name="quantity"><br>
		<input type="submit" name="exp" value="export">
	</form>

</div>
</body>
</html>
<?php
include 'connection.php';
$furnitureid = $_GET['furnitureid'];
$sql = "SELECT * FROM import WHERE furnitureid='$furnitureid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row['quantity'];
echo $id;
		

if (isset($_POST['exp'])) {

$furnitureid = $_GET['furnitureid'];
$expdate = $_POST['expdate'];
$quantity = $_POST['quantity'];
$qu = $id - $quantity;
if ($quantity > $id) {
	echo "you entered more than imported";
}else{
$sql = "INSERT INTO export (furnitureid,expdate,quantity)VALUES('$furnitureid','$expdate','$quantity')";

$sql1 = "UPDATE import SET quantity = '$qu' WHERE furnitureid = '$furnitureid'";
$result = $conn->query($sql);
$result1 = $conn->query($sql1);
if ($result && $result1) {
	header('location:all.php');
}else{
	echo "error in export";
}
}
}
?>
