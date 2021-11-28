<?php
	require_once "controllers/busController.php" ;
	$buses = getAllbuses();
?>

<html>
    <head> 
	     <title>Remove Bus</title></head>
	<body>
		<center><h1>Removed Bus </h1></center>
		     
	<center>			
		<table border="1" style="border-collapse:collapse;">
		<thead>
				<th>Serial</th>
				<th>Bus Name</th>
				<th>Departure Station</th>
				<th>Arrival Station</th>
				<th>Via Station</th>
				<th>Departure Time</th>
				<th>Arrival Time</th>
				<th>Rent</th>
                <th>Remove</th>
				
			</thead>
			<tbody>
				<?php
					foreach($buses as $bus)
					{
						echo "<tr>" ;
							echo "<td>".$bus["id"]."</td>" ;
							echo "<td>".$bus["bname"]."</td>" ;
							echo "<td>".$bus["dstation"]."</td>" ;
							echo "<td>".$bus["astation"]."</td>" ;
							echo "<td>".$bus["vstation"]."</td>" ;
							echo "<td>".$bus["dtime"]."</td>" ;
							echo "<td>".$bus["atime"]."</td>" ;
							echo "<td>".$bus["rent"]."</td>" ;
							
							echo '<td><a href="removeBus1.php?id='.$bus["id"].'">Delete</a></td>';
						echo "</tr>" ;
					}
				?>
		   </tbody>
			
			
			
		</table>
	<center>    
        </body>
</html>