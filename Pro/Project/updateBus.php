<?php
	require_once "controllers/busController.php" ;
	$buses = getAllbuses();
?>

<html>
    <head> 
	     <title>Book Bus</title></head>
	<body>
		<center><h1>Book Bus </h1></center>
		     
	<center>			
		<table border="1" style="border-collapse:collapse;">
		<thead>
				<th>Serial No</th>
				<th>Bus Name</th>
                <th>Departure Station</th>
                <th>Arrival Station</th>
                <th>Via Station</th>
                <th>Departure Time</th>
                <th>Arrival time</th>
                <th>Rent</th>
                <th>Book</th>
				
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
							echo '<td><a href="bookBus.php">Book bus</a></td>';
						echo "</tr>" ;
					}
				?>
		   </tbody>
			
			
			
		</table>
	<center>    
        </body>
</html>