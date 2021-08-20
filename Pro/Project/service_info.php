<html>
<Body background="style/GettyImages-185298837.jpg">
	<form border>
	<fieldset>
	<table align = "center">
<?php


	
  
	include 'models/control.php';
	$query = "select Transport_name,Transport_id,fare,departure_time from plane_list";
	
	$result = get($query);
	
	echo "<table border='1'>";
	echo "<tr>
		<td>Transport_name</td><td>Transport_id</td><td>fare</td><td>Departure Time</td>
	</tr>";
	
	foreach($result as $row){
		echo "<tr>";
			echo "<td>".$row["Transport_name"]."</td>";
			echo "<td>".$row["Transport_id"]."</td>";
			echo "<td>".$row["fare"]."</td>";
			echo "<td>".$row["departure_time"]."</td>";
		echo "</tr>";
		
	}
	echo "</table>";
	
	
?>

</table>
	</fieldset>
	</form>
	</body>
</html>