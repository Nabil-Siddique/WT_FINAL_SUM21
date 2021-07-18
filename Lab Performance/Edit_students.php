<?php
	include 'controllers/std_control.php';
	$id = $_GET["id"];
	$c = getStd($id);
	
?>

<html>
	<body>
	<h1><?php echo $db_err;?></h1>
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>
					<input type="hidden" value="<?php echo $id?>" name="id">
						<input type="text" name="sname" value="<?php echo $c["Name"];?>" placeholder="Student name"><span><?php echo $err_sname;?><br>
						<input type="text" name="dob" value="<?php echo $c["DOB"];?>" placeholder="Student Date of birth"><span><?php echo $err_dob;?><br>
						<input type="text" name="credit" value="<?php echo $c["Credit"];?>" placeholder="Student Credit"><span><?php echo $err_crdt;?><br>
						<input type="text" name="cgpa" value="<?php echo $c["CGPA"];?>" placeholder="Student Cgpa"><span><?php echo $err_cgpa;?><br>
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="editstudents" value="Edit Students">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>