<?php
	include 'controllers/mng_control.php';
	$id = $_GET["id"];
	$c = getRefund($id);
	
?>

<html>
<link rel="stylesheet" href="style/refund.css">
	<body>
	<div class="bg">
	<a target="" href="Manager.php"><button  class="button2" >Manager Home</button></a>
		<h1 align="center">Send Refund</h1>
		<form action="" method="POST">
			<table >
				<tr>
					<td>
					<input type="hidden" value="<?php echo $id?>" name="id">	
					</td>
					<td>Bus Name</td>
					<td>Ticket Number</td>
					<td>Departure Time</td>
					<td>Reason</td>
					<td>Refund Request Acccepted</td>
					<td>Pending</td>
					<td>Refund Request Cancel</td>
				</tr>
				<tr>
					<td>
					<input type="hidden" value="<?php echo $id?>" name="id">	
					</td>
					<td><?php echo $c["Bus_Name"];?></td>
					<td><?php echo $c["Ticket_number"];?></td>
					<td><?php echo $c["From_Time"];?></td>
					<td><?php echo $c["Reason"];?></td>
					<td>
						<input type="submit" name="sendrefund" value="Refund Request Acccepted" class="button1">
					</td>
					<td>
						<input type="submit" name="onpending" value="Pending" class="button">
					</td>
					<td>
						<input type="submit" name="norefund" value="Refund Request Cancel"class="button3">
						
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>