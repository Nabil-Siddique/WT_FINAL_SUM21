<?php
	include 'controllers/ManagerController.php';
	$id = $_GET["id"];
	$c = getManager($id);
	
?>

<html><title>DELETE MANAGER</title>
<link rel="stylesheet" href="style/myStyle.css">

	<body><h2 id="p1">DELETE MANAGER</h3>
	<fieldset>
	<h1><?php echo $db_err;?></h1>
		<form action=""  method="POST">
			<table align="center">
				<tr>
					<td>
					<input type="hidden" value="<?php echo $id?>" name="id">
					<b>NAME:<input type="text" name="name" value="<?php echo $c["Name"];?>" placeholder="Category name">
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="delete" value="Delete Manager Details">
					</td>
				</tr>
			</table>
		</form></fieldset>
			<a href="All_Manager.php">GO BACK TO ALL MANAGER DETAILS</a>
	</body>
</html>