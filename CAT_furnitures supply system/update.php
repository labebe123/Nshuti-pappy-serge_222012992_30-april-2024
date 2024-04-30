
<?php
include 'connection.php';
$furnitureid = $_GET['furnitureid'];
$sql = "SELECT * FROM furniture inner join import WHERE furniture.furnitureid = '$furnitureid' and import.furnitureid = '$furnitureid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>hirwa cargo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        h2{
background: linear-gradient(rgba(to left,#ff003366),rgba(50,80,0));
        }
    </style>

</head>
<body>
<div>
	<form action="" method="POST">
		<center><h2>UPDATE RECORDS</h2></center>
		<!-- <label>furnitureid</label>
		<input type="text" name="furnitureid"> -->
		<label>furturename</label>
		<input type="text" name="furniturename" value="<?php echo $row['furniturename'];?>"><br>
		<label>furnitureowner</label>
		<input type="text" name="furnitureownernames"value="<?php echo $row['furnitureownernames'];?>"><br>
		<label>Quantity</label>
		<input type="text" name="quantity"value="<?php echo $row['quantity'];?>"><br>
			<label>expdate</label>
		<input type="date" name="expdate"value="<?php echo $row['expdate'];?>"><br>
		<input type="submit" name="update" value="insert">
	</form>

</div>
</body>
</html>
<?php
if (isset($_POST['update'])) {
include 'connection.php';
$furnitureid = $_GET['furnitureid'];
$furniturename = $_POST['furniturename'];
$furnitureownernames = $_POST['furnitureownernames'];
$quantity = $_POST['quantity'];
$expdate = $_POST['expdate'];

$sql = "UPDATE furniture SET furniturename='$furniturename',furnitureownernames = '$furnitureownernames' WHERE furnitureid = '$furnitureid'";
$sql1 = "UPDATE import SET quantity='$quantity',expdate = '$expdate' WHERE furnitureid = '$furnitureid'";
$result = $conn->query($sql);
$result1 = $conn->query($sql1);
if ($result) {
	header('location:all.php');
}else{
	echo "error in update furniture";
}
}
 ?>
