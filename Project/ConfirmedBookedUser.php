<?php
	include 'controllers/mng_control.php';
	$id = $_GET["id"];
	$c = getBook($id);
	
?>

<html>
<link rel="stylesheet" href="style/ConfirmedBookedUser.css">
	<body>
	<div class="bg">
	<h1><?php echo $db_err;?></h1>
		<a target="" href="Manager.php" class="button2">Manager Home</a>
		<h1 align="center">Ticket Confirmation</h1>
		<form action="" method="POST">
			<table align="center">
				<tr>
				
					<td>
					<input type="hidden" value="<?php echo $id?>" name="id">	
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="confirms" value="Confirm Booking"class="button1">
						<input type="submit" name="pending" value="Pending"class="button">
						<input type="submit" name="noconfirm" value="Confirmation Cancel" class="button3">
						
					</td>
				</tr>
			</table>
		</form>
		</div>
	</body>
</html>