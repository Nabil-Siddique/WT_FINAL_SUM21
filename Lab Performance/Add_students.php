<?php
session_start();
	include 'controllers/std_control.php';
	
?>

<html>
	<body>
	<h1>Welcome <?php echo $_SESSION["loggeduser"];?></h1>
	<h1><?php echo $db_err;?></h1>
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>
						<input type="text" name="sname" value="<?php echo $sname;?>" placeholder="Student Name"><span><?php echo $err_sname;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="dob" value="<?php echo $dob;?>" placeholder="Student Date Of Birth"><span><?php echo $err_dob;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="credit" value="<?php echo $credit;?>" placeholder="Student Credit"><span><?php echo $err_crdt;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="cgpa" value="<?php echo $cgpa;?>" placeholder="Student CGPA"><span><?php echo $err_cgpa;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="dept_id" value="<?php echo $dept_id;?>" placeholder="Student Department Id"><span><?php echo $err_dept_id;?></span>
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="addstudent" value="Add Student">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>