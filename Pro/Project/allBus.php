<?php
	require_once "controllers/busController.php" ;
	$buses = getAllBuses();
?>

<html>
    <head> 
	     <title>All Buses</title></head>
	<body>
		<center><h1>ALL Bus</h1></center>
		      <h2 align="center">
			        <span><a  style="text-decoration:none" href="addbus.php" target="_self" >Add Bus &nbsp</a> </span> 
					<span><a  style="text-decoration:none" href="removeBus.php" target="_self" >Remove Bus &nbsp</a> </span>
					<span><a  style="text-decoration:none" href="searchBus.php" target="_self" >Search Bus &nbsp</a> </span>
					<span><a  style="text-decoration:none" href="homepage.php" target="_self" >Back &nbsp</a> </span>

              </h2>
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
						echo "</tr>" ;
					}
				?>
		   </tbody>
			
			
			
		</table>
	<center>    
        </body>
</html>