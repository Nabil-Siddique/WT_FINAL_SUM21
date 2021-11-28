<?php
	include 'controllers/mng_control.php';
	$booking = getallTik(); 
	
?>
<html>
<link rel="stylesheet" href="style/sendtic.css">
	<body>
	<div class="bg">
	<h1 align="center">Ticket</h1>
	<a target="" href="Manager.php"><button  class="button2" >Manager Home</button></a>
	<table align="center">
		<tr>
			<td align="center">Serial</td>
			<td align="center">User Name</td>
			<td align="center">User Email</td>
			<td align="center">User Phone Number</td>
			<td align="center">User Transport Selection</td>
			<td align="center">Departure From</td>
			<td align="center">Departure Time</td>
			<td align="center">Arrival To</td>
			<td align="center">Arrival Time</td>
			<td align="center">Ticket Number</td>
			<td align="center">Ticket Date</td>
			<td align="center">Send Ticket</td>
		</tr>
		<tbody>
				<?php
				$i=1;
					foreach($booking as $c)
					{
						echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$c["Name"]."</td>";
							echo "<td>".$c["Email"]."</td>";
							echo "<td>".$c["Phone"]."</td>";
							echo "<td>".$c["Bus_Name"]."</td>";
							echo "<td>".$c["From"]."</td>";
							echo "<td>".$c["From Time"]."</td>";
							echo "<td>".$c["To"]."</td>";
							echo "<td>".$c["To Time"]."</td>";
							echo "<td>".$c["Ticket_number"]."</td>";
							echo "<td>".$c["Ticket_Date"]."</td>";
							echo '<td><a href="Tickets.php?id='.$c['ID'].'"><button class="button1">Send Tickets</button></a></td>';
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
	
	</table>

	</body>
</html>