<?php
include 'connection.php';
$sql = "SELECT * FROM furniture";
$result = $conn->query($sql);
echo '<table border="1">
		<tr><td>furnitureid</td><td>furniturename</td><td>furnitureownernames</td><td colspan="3">operations</td></tr>';
if ($result->num_rows >0) {
	while ($row = $result->fetch_assoc()) {
		echo'
		<tr>';
		$furnitureid = $row['furnitureid'];
		echo '<td>'.$row['furnitureid'].'</td>';
		echo'<td>'.$row['furniturename'].'</td>';
		echo'<td>'.$row['furnitureownernames'].'</td>';
		echo"<td><a href=delete.php?furnitureid=$row[furnitureid]>delete</td>";
		echo"<td><a href=update.php?furnitureid=$furnitureid>update</td>";
		echo"<td><a href=import.php?furnitureid=$furnitureid>import</td>";
		// echo'<td>'.$row['username'].'</td>';
		echo'</tr>';
	
	}
}else{
	echo "error in retrieve";
}
echo "</table>";
?>