<html>
<Body background="style/50-Beautiful-and-Minimalist-Presentation-Backgrounds-03.jpg">

<style>
    .S {
        font-size:20px;
        transition:0.5s all ease;
    }
    .S:hover{
        color:green;

    }   
</style>

<?php
     
	require_once "searchfun.php" ;
	$key = $_GET["key"];
    $planes = search($key) ;
    echo "<table border='1'>";
	echo "<tr>
		<td>Transport_name</td><td>Transport_id</td><td>fare</td><td>Departure time</td>
	</tr>";
	foreach($planes as $row){
		echo "<tr>";
			echo "<td>".$row["Transport_name"]."</td>";
			echo "<td>".$row["Transport_id"]."</td>";
			echo "<td>".$row["Fare"]."</td>";
			echo "<td>".$row["departure_time"]."</td>";
		echo "</tr>";
		
	}
	echo "</table>";
    
?> 
</body> 
</html>