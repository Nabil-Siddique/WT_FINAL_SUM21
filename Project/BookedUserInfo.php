<?php
	include 'controllers/mng_control.php';
	$booking = getallBooking(); 

	
?>
<html>
<script src="js/BookedUser.js"></script>
<link rel="stylesheet" href="style/bookeduserinfos.css">
	<body>
	<div class="bg">
	<h1 align="center">Booked User</h1>
	<p align="center"><input type="text" onkeyup="search(this)" placeholder="Search For User..." ></p>
	<div id="bookuser"> </div>
	<a target="" href="Manager.php"><button  class="button2" >Manager Home</button></a>
	<table align="center" >
		<tr>
			<td align="center">Serial</td>
			<td align="center">User Name</td>
			<td align="center">User Email</td>
			<td align="center">User Phone Number</td>
			<td align="center">User Bus Selection</td>
			<td align="center">Departure From</td>
			<td align="center">Departure Time</td>
			<td align="center">Arrival To</td>
			<td align="center">Arrival Time</td>
			<td align="center">Booking Status</td>
			<td align="center">Confirmation</td>
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
							echo "<td>".$c["Booking"]."</td>";
							echo '<td><a href="ConfirmedBookedUser.php?id='.$c['ID'].'"><button class="button">Confirm Booking</button></a></td>';
						echo "</tr>";
						$i++;
					}
				?>
		</tbody>
	
	</table>

	</body>
</html>