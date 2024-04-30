<html>
<head>
	<title>hirwa cargo</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div>
	<form action="" method="POST">
		<center><h2>IMPORT</h2></center>
		<!-- <label>furnitureid</label>
		<input type="text" name="furnitureid"> -->
		<label>importdate</label>
		<input type="date" name="importdate"><br>
		<label>quantity</label>
		<input type="text" name="quantity"><br>
		<input type="submit" name="impo" value="insert">
	</form>

</div>
</body>
</html>
<?php
if (isset($_POST['impo'])) {
include 'connection.php';
$furnitureid = $_GET['furnitureid'];
$importdate = $_POST['importdate'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO import VALUES('$furnitureid','$importdate','$quantity')";
$result = $conn->query($sql);
if ($result) {
	header('location:furn_importret.php');
}else{
	echo "error in import";
}
}
?>