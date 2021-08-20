<?php
	include 'controllers/mng_control.php';
?>
<?php
	
	$key = $_GET["key"];
	$booked = userserch($key);
	
	
	if(count($booked) > 0){
		foreach($booked as $c){
			
			
						echo "<p align='center'>";
							
							echo "<Span>"."User Name:  "."</Span>";
							echo "<td>".$c["Name"]."</td>";
							echo "<Span>"." Booking Status: "."</Span>";
							echo "<td>".$c["Booking"]."</td>";
							echo '<td><a href="ConfirmedBookedUser.php?id='.$c['ID'].'"><button class="button">Confirm Booking</button></a></td>';
						echo "</p><br>";
						
			
			
		}}
	
?>
