<?php
	include 'controllers/mng_control.php';
	$offer = getallOff(); 
	
?>
<html>


<link rel="stylesheet" href="style/specialoffers.css">
	<body>
	<div class="bg">
	<script src="js/offer.js"></script>
	<h1 align="center">Special Offer</h1>
	<p align="center"><input type="text" onkeyup="search(this)" placeholder="Search For Offer..." ></p>
	<div id="offers"> </div>
	
	<a target="" href="Manager.php"><button  class="button2" >Manager Home</button></a>
	<table align="center">
		<tr>
			<td>ID</td>
			<td>Offer Name</td>
			<td>Offer Percentage</td>
			<td>Coupon Code</td>
			<td>Starting Date</td>
			<td>Ending Date</td>
			<td>Update Offer</td>
			<td>Delete Offer</td>
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
							echo '<td><a href="UpdateOffer.php?id='.$c['ID'].'"><button class="button1">Update</button></a></td>';
							echo '<td><a href="DeleteOffer.php?id='.$c['ID'].'"><button class="button3">Delete</button></a></td>';
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
	
	</table>
	
	<p align="center"><a target="" href="AddOffer.php"><button class="button">Add New Offer</button></a></p>
	<form action="" method="POST">
	<p align="center"><input type="submit" name="generateOffer" value="Generate Offer" class="button3"></p>
	</form>
	
	</body>
</html>