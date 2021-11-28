<?php
	include 'controllers/ManagerController.php';
	
$id= $_GET["id"];
$m = getManager($id);  
?>

<html><title>UPDATE MANADER</title>
<link rel="stylesheet" href="style/myStyle.css">


<fieldset><h2 id="p1">UPDATE MANAGER </h2>

	<body>
	
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>
					<input type="hidden"   name="id" value="<?php echo $id?>"></td></tr>
					<tr><td><b>NAME: <input type="text" name="name" value="<?php echo $m["Name"];?>" placeholder="Name"></td></tr>
					<tr><td><b>EMAIL:    <input type="text" name="email" value="<?php echo $m["Email"];?>" placeholder="Email"></td></tr>
				<tr>	<td><b>ADDRESS:  <input type="text" name="address" value="<?php echo $m["Address"];?>" placeholder="Address"></td></tr>
					<tr><td><b>SALARY:   <input type="text" name="salary" value="<?php echo $m["Salary"];?>" placeholder="Salary"></td></tr>
						
						

				<tr>
					<td align="center">
						<input type="submit" name="updateManager" value="Update Manager">
					</td>
				</tr>
			</table>
		</form></fieldset>
				<a href="All_Manager.php">GO BACK TO ALL MANAGER DETAILS</a>
	</body>
</html>