<?php
	include 'controllers/mng_control.php';
	$booking = getallRefund(); 
	
?>
<html>
<link rel="stylesheet" href="style/refundrqst.css">
	<body>
	<div class="bg">
	<h1 align="center">Refund</h1>
	<a target="" href="Manager.php"><button  class="button2" >Manager Home</button></a>
	<table align="center">
		<tr>
			<td align="center">Serial</td>
			<td align="center">User Name</td>
			<td align="center">User Email</td>
			<td align="center">User Phone Number</td>
			<td align="center">User Transport Selection</td>
			<td align="center">Seat Number</td>
			<td align="center">Departure From</td>
			<td align="center">Departure Time</td>
			<td align="center">Arrival To</td>
			<td align="center">Arrival Time</td>
			<td align="center">Booking Status</td>
			<td align="center">Refund</td>
			<td align="center">Accept Refund Request</td>
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
							echo "<td>".$c["Seat_Number"]."</td>";
							echo "<td>".$c["Froms"]."</td>";
							echo "<td>".$c["From_Time"]."</td>";
							echo "<td>".$c["Tos"]."</td>";
							echo "<td>".$c["To_Time"]."</td>";
							echo "<td>".$c["Booking"]."</td>";
							echo "<td>".$c["Refund"]."</td>";
							echo '<td><a href="Refund.php?id='.$c['ID'].'"><button class="button">Send Refund</button></a></td>';
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
	
	</table>

	</body>
</html>