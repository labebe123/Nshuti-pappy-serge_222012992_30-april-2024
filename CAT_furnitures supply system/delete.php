<?php
include 'connection.php';
if (isset($_GET['furnitureid'])) {
	$furnitureid = $_GET['furnitureid'];
	$sql = "DELETE FROM import WHERE furnitureid = '$furnitureid'";
	$sql1 = "DELETE FROM export WHERE furnitureid = '$furnitureid'";
	$sql2 = "DELETE FROM furniture WHERE furnitureid = '$furnitureid'";
	$result = $conn->query($sql);
	$result1 = $conn->query($sql1);
	$result2 = $conn->query($sql2);
	if ($result && $result1 &&$result2) {
		header('location:all.php');
	}else{
		echo "date not deleted";
	}
}

?>