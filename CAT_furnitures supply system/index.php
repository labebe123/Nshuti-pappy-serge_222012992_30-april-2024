<!DOCTYPE html>
<html>
<head>
	<title>hirwa cargo</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div>
	<form action="" method="POST">
		<div><h3><center>login form</center></h3>
			<p id="error"></p></div>
		<label>username</label>
		<input type="text" name="username">
		<label>password</label>
		<input type="password" name="password"><br>
		<input type="submit" name="login">
	</form>

</div>
</body>
</html>
<?php
if (isset($_POST['login'])) {
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM manager WHERE username = '$username' and password = '$password'";
$result = $conn->query($sql);
if ($result->num_rows >0) {
	while ($row = $result->fetch_assoc()) {
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
	}
	header('location:furniture.php');
}else{
	echo "<script>document.getElementById('error').innerHTML ='Wrong password and username';</script>";
}
}
?>
<?php
// if (isset($_POST['insertfurniture'])) {
// include 'connection.php';
// $furnitureid = $_POST['furnitureid'];
// $furniturename = $_POST['furniturename'];
// $furnitureownernames = $_POST['furnitureownernames'];

// $sql = "INSERT INTO furniture VALUES('$furnitureid','$furniturename','$furnitureownernames')";
// $result = $conn->query($sql);
// if ($result->num_rows >0) {
// 	header('location:furnitureretrieve.php');
// }else{
// 	echo "error in loggin";
// }
// }
// ?>

<?php
// include 'connection.php';
// $username = $_POST['username'];
// $password = $_POST['password'];

// $sql = "SELECT * FROM furniture";
// $result = $conn->query($sql);
// echo '<table>
// 		<tr><td>furnitureid</td><td>furniturename</td><td>furnitureownernames</td><td colspan="2">operations</td></tr>';
// if ($result->num_rows >0) {
// 	while ($row = $result->fetch_assoc()) {
// 		echo'
// 		<tr>';
// 		echo '<td>'.$row['furnitureid'].'</td>';
// 		echo'<td>'.$row['furniturename'].'</td>';
// 		echo'<td>'.$row['furnitureownernames'].'</td>';
// 		echo'<td>'.$row['username'].'</td>';
// 		echo'<td>'.$row['username'].'</td>';
// 		echo'</tr>';
	
// 	}
// 	header('location:furniture.php');
// }else{
// 	echo "error in loggin";
// }
// echo "</table>";
?>

<?php
// if (isset($_POST['impo'])) {
// include 'connection.php';
// $furnitureid = $_GET['furnitureid'];
// $importdate = $_POST['importdate'];
// $quantity = $_POST['quantity'];

// $sql = "INSERT INTO import VALUES('$furnitureid','$importdate','$quantity')";
// $result = $conn->query($sql);
// if ($result->num_rows >0) {
// 	header('location:furnitureretrieve.php');
// }else{
// 	echo "error in import";
// }
// }
?>

<?php
// if (isset($_POST['exp'])) {
// include 'connection.php';
// $furnitureid = $_GET['furnitureid'];
// $expdate = $_POST['expdate'];
// $quantity = $_POST['quantity'];

// $sql = "INSERT INTO export VALUES('$furnitureid','$expdate','$quantity')";
// $result = $conn->query($sql);
// if ($result->num_rows >0) {
// 	header('location:furnitureretrieve.php');
// }else{
// 	echo "error in export";
// }
// }
?>
