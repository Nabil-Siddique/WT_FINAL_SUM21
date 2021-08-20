<?php
	include 'controllers/mng_control.php';
	$manager = getallMngtoday(); 
	$booking=getallBookingToday();
	$offer = getallOfftoday();
	
?>
<html>
<link rel="stylesheet" href="style/GenerateReport.css">
	<body>
	<div class="bg"><div class="header">
	<a target="" href="Manager.php" class="button2">Manager Home</a>
	<h1 align="center">Report</h1>
	<p align="center">Todays Report For all Services,User Status and for exclusive offers</p>

	<table align="center" >
		<tr>	
			<td><h3>Service</h3></td>
		</tr>
		<tr>
			<td>ID</td>
			<td >Service 1</td>
			<td >Service 2</td>
			<td>Service 3</td>
			<td >Request</td>
			<td>Date</td>
		</tr>
		<tbody>
				<?php
				$i=1;
					foreach($manager as $c)
					{
						echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$c["Service1"]."</td>";
							echo "<td>".$c["Service2"]."</td>";
							echo "<td>".$c["Service3"]."</td>";
							echo "<td>".$c["Request"]."</td>";
							echo "<td>".$c["Date"]."</td>";
						echo "</tr>";
						$i++;
					}
				?>
		</tbody>
		<tr>
			<td>
			<br>
			<br>
			<br>
			</td>
		</tr>
	</table>
	<table>
		<tr>	
			<td><h3>Users Status</h3></td>
		</tr>
		<tr>
			<td >ID</td>
			<td >User Name</td>
			<td>User Email</td>
			<td >User Phone Number</td>
			<td >User Bus Selection</td>
			<td >Departure From</td>
			<td >Departure Time</td>
			<td>Arrival To</td>
			<td >Arrival Time</td>
			<td>Booking Status</td>
			<td>Refund</td>
			
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
							echo "<td>".$c["Refund"]."</td>";
						echo "</tr>";
						$i++;
					}
				?>
		</tbody>
		<tr>
			<td>
			<br>
			<br>
			<br>
			</td>
		</tr>
		</table>
		<table>
		<tr>	
			<td><h3>Exclusive Offers</h3></td>
		</tr>
		<tr>
			<td>ID</td>
			<td>Offer Name</td>
			<td>Offer Percentage</td>
			<td>Coupon Code</td>
			<td>Starting Date</td>
			<td>Ending Date</td>
			
		</tr>
		<tbody>
				<?php
				$i=1;
					foreach($offer as $c)
					{
						echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$c["Offer_Name"]."</td>";
							echo "<td>".$c["Offer_Percentage"]."</td>";
							echo "<td>".$c["Coupon_Code"]."</td>";
							echo "<td>".$c["Staring_Date"]."</td>";
							echo "<td>".$c["Ending_Date"]."</td>";
							
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
	</table>

	<p align="center"><button onclick="window.print()" class="button1">Download Report</button></p>
	</div>
	</body>
</html>