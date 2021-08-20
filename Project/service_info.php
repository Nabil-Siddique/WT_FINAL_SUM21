<html><?php

	
  
	include 'db_config.php';
	$query = "select Transport_name,Transport_id,fare from plane_list";
	
	$result = get($query);
	
	echo "<table border='1'>";
	echo "<tr>
		<td>Transport_name</td><td>Transport_id</td><td>fare</td>
	</tr>";
	foreach($result as $row){
		echo "<tr>";
			echo "<td>".$row["Transport_name"]."</td>";
			echo "<td>".$row["Transport_id"]."</td>";
			echo "<td>".$row["fare"]."</td>";
		echo "</tr>";
		
	}
	echo "</table>";
	
	
?></html>