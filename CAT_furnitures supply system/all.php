<?php
include 'connection.php';
$sql = "SELECT furniture.furnitureid,furniture.furniturename,furniture.furnitureownernames,import.quantity,import.importdate,export.quantity as quantity1,export.expdate FROM furniture inner join import on furniture.furnitureid = import.furnitureid inner join export on furniture.furnitureid = export.furnitureid";
$result = $conn->query($sql);
echo '<table border="1">
		<tr><td>furnitureid</td><td>furniturename</td><td>furnitureownernames</td><td>quantity</td><td>exported_quantity</td><td colspan="2">operations</td></tr>';
if ($result->num_rows >0) {
	while ($row = $result->fetch_assoc()) {
		echo'
		<tr>';
		$furnitureid = $row['furnitureid'];
		echo '<td>'.$row['furnitureid'].'</td>';
		echo'<td>'.$row['furniturename'].'</td>';
		echo'<td>'.$row['furnitureownernames'].'</td>';
		echo'<td>'.$row['quantity'].'</td>';
		echo'<td>'.$row['quantity1'].'</td>';
		echo"<td><a href=delete.php?furnitureid=$row[furnitureid]>delete</td>";
		echo"<td><a href=update.php?furnitureid=$furnitureid>update</td>";
		// echo'<td>'.$row['username'].'</td>';
		echo'</tr>';
	
	}
}else{
	echo "error in retrieve";
}
echo "</table>";
echo "<button onclick='window.print()'>print</button>";
?>