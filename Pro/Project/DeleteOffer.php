<?php
	include 'controllers/mng_control.php';
	$id = $_GET["id"];
	$c = getOff($id);
	
?>

<html>
<link rel="stylesheet" href="style/DeleteOffer.css">
	<body>
	<div class="bg">
	<h1><?php echo $db_err;?></h1>
		<a target="" href="Manager.php" class="button2">Manager Home</a>
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>
					<input type="hidden" value="<?php echo $id?>" name="id">
					<p>Do you want to Delete this Offer?</p>
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="deleteoff" value="Delete"class="button3">
						<input type="submit" name="nooff" value="No"class="button1">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>