<?php
	include 'controllers/mng_control.php';
	$id = $_GET["id"];
	$c = getTic($id);
	
?>

<html>
<link rel="stylesheet" href="style/tickets.css">
	<body>
	<div class="bg">
	<h1 align="center">Send Ticket</h1>
	<a target="" href="Manager.php"><button  class="button2" >Manager Home</button></a>
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>
					<input type="hidden" value="<?php echo $id?>" name="id">
						<input type="text" name="ticnumber" value="<?php echo $c["Ticket_number"];?>" placeholder="Ticket Number"><span><?php echo $err_TicNumber;?><br>
						<input type="date" name="ticdate" value="<?php echo $c["Ticket_Date"];?>" ><span><?php echo $err_TicDate;?><br>			
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="sendtic" value="Send Ticket" class="button">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>