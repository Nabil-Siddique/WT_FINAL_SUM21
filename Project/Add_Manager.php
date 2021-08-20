<?php
	include 'controllers/ManagerController.php'
?>

<html>
	<head>
	<title>ADD MANAGER</title>
	
<link rel="stylesheet" href="style/myStyle.css">
<script src="Controller/jsValidation.js"></script> 
	
	
	</head>
	<body>

	<h1 id="p1">ADD MANAGER</h1>
	
	
	
	
	
		<fieldset>
			<form action="" onsubmit="return validate()" method="post">
			 <table><table align="center" >
			<h2><?phpecho $rs;?></h2> 
				<tr>
					<td><b>Name:</td>
					<td><input type="text" id="name" name="name" placeholder="Name"value="<?php echo $name;?>"></td>
					<td><span id="err_name"><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td><b>Username:</td>
					<td><input type="text" id="username" name="username"placeholder="Username" value="<?php echo $uname;?>"></td>
					<td><span id="err_uname"><?php echo $err_uname;?></span></td>
				</tr><tr>
				
					<td><b>Email:</td>
					<td><input type="text" id="email" name="email"placeholder="Email" value="<?php echo $email;?>"></td>
					<td><span id="err_email"><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><b>Password:</td>
					<td><input type="text" id="pass" name="pass"placeholder="Password" value="<?php echo $pass;?>"></td>
					<td><span id="err_pass"><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><b>Address:</td>
					<td><input type="text" id="address" name="address"placeholder="Address" value="<?php echo $address;?>"></td>
					<td><span id="err_address"><?php echo $err_address;?></span></td>
				</tr>
				<tr>
					<td><b>Date Of Birth:</td>
					<td><input type="date" id="DOB" name="dateOfBirth" placeholder="dd/mm/yy"value="<?php echo $DOB;?>"></td>
					<td><span id="err_DOB"><?php echo $err_DOB;?></span></td>
				</tr>
					<td><b>Salary:</td>
					<td><input type="text" id="salary" name="salary" placeholder="Salary" value="<?php echo $salary;?>"></td>
					<td><span id="err_salary"><?php echo $err_salary;?></span></td>
				</tr>
				<tr>
					<td><b>Gender: </td>
					<td><input type="radio" id="male" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  id="female" value="Female" type="radio"> Female</td>
					<td><span id="err_gender"><?php echo $err_gender;?></span></td>
				</tr>
				
				<tr>
					<td align="center" colspan="2"><input type="submit" name="add_manager"value="ADD MANAGER"></td><br><br><br>
				</tr>
				</table>
			</form>	
			
		</fieldset>		
		<a href="AdminDashboard.php" class="btn-link">GO BACK TO ADMIN DASHBOARD</a>
	</body>
	
</html>