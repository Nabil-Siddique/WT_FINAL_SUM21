<?php

	include 'controllers/forget.php';

?>
<htmL>
<link rel="stylesheet" href="style/logins.css">
	<body>
	<script src="js\forgetpass.js"></script>
	<div class="bg">
	<h1><p align="center">Forget Password</p></h1>
	
		<form action="" onsubmit="return validate()" method="POST">
		<table align="center" id="rcorners2">
			
			<tr>
			
				<td>
					<input type="text" id="email" name="email" value="<?php echo $email;?>" placeholder="Email"><span id="err_email"><?php echo $err_email; ?></span>
				</td>
			</tr>
			<tr>
			
				<td>
				<input type="text" id="password" name="password" value="<?php echo $pass;?>" placeholder="New Password"><span id="err_pass"><?php echo $err_pass; ?></span>
				</td>
			</tr>
			<tr>
				<td align="center">
				
				<input type="submit" name="ForgetPassword" value="Change Password" class="button2">
				</td>
			</tr>
		</table>
		</form>	
	</div>
	</body>
</html>