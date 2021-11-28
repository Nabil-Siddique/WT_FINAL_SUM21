<?php

	include 'controllers/signup.php';
	

?>
<htmL>
<link rel="stylesheet" href="style/signup.css">
	<body>
	<script src="js\signup.js"></script>
	<div class="bg">
	<h1><p align="center">Sign Up</p></h1>
	<p align="center"><span><?php echo $db;?></span></p>
		<form action="" onsubmit="return validate()" method="POST">
		
		<table align="center" id="rcorners2">
			
			<tr>
				<td>Name:</td>
				<td>
					<input type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="Name"><span id="err_name"><?php echo $err_name; ?></span>
				</td>
			</tr>
			<tr>
			<td>User Name:</td>
				<td>
					<input type="text" id="username" name="username" value="<?php echo $uname;?>" placeholder="User Name"><span id="err_uname"><?php echo $err_uname; ?></span>
				</td>
			</tr>
			<tr>
			<td>Email:</td>
				<td>
					<input type="text" id="email" name="email" value="<?php echo $email;?>" placeholder="Email"><span id="err_email"><?php echo $err_email; ?></span>
				</td>
			</tr>
			<tr>
			<td>Password:</td>
				<td>
				<input type="password" id="password" name="password" value="<?php echo $pass;?>" placeholder="Password"><span id="err_pass"><?php echo $err_pass; ?></span>
				</td>
			</tr>
			<tr>
			<td>Confirm Password:</td>
				<td>
				<input type="password" id="cpassword" name="cpassword" value="<?php echo $cpass;?>" placeholder="Confirm Password"><span id="err_cpass"><?php echo $err_cpass; ?></span>
				</td>
			</tr>
			<tr>
			<td>Phone:</td>
				<td>
					<input type="text" id="phone" name="phone" value="<?php echo $phone;?>" placeholder="Phone Number"><span id="err_phone"><?php echo $err_phone; ?></span>
				</td>
			</tr>
			<tr>
			<td>Address:</td>
				<td>
					<input type="text" id="address" name="address" value="<?php echo $address;?>" placeholder="Address"><span id="err_address"><?php echo $err_address; ?></span>
				</td>
			</tr>
			<tr>
			<td>Date Of Birth:</td>
				<td>
					<input type="date" id="DOB" name="DOB" value="<?php echo $DOB;?>" placeholder="Date Of Birth"><span id="err_DOB"><?php echo $err_DOB; ?></span>
				</td>
			</tr>
			<tr>	
			<td>Gender:</td>
				<td><input type="radio" id="male" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  id="female" value="Female" type="radio"> Female
					<span id="err_gender"><?php echo $err_gender;?></span></td>
			</tr>
			
		</table>
		<p align="center"><input type="submit" name="signUp" value="Sign Up" class="button2"></p>
		</form>	
	</div>
	</body>
</html>