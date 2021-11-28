<?php

	include 'controllers/loged.php';
	
?>
<htmL>
<link rel="stylesheet" href="style/logins.css">
	<body>
	<script src="js\login.js"></script>
	<div class="bg">
	<p align="center">
	<?php  
	if(!isset($_COOKIE[$account]))
	{
		echo " ";
	}
	else
	{
		echo $_COOKIE[$account];
	} 
	?></p>
	<h1><p align="center">Log In</p></h1>
		<form action="" onsubmit="return validate()" method="POST">
		<table align="center" id="rcorners2">
			<tr>
				<td align="center">
					<span><?php echo $db_err;?></span>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" id="username" name="username" value="<?php echo $uname;?>" placeholder="User Name"><span id="err_uname"><?php echo $err_uname; ?></span>
				</td>
			</tr>
			<tr>
				<td>
				<input type="password" id="password" name="password" value="<?php echo $pass;?>" placeholder="Password"><span id="err_pass"><?php echo $err_pass; ?></span>
				</td>
			</tr>
			<tr>
				<td align="center">
				
				<input type="submit" name="login" value="Log In" class="button2">
				<a target=""href="SignUp.php" class="button3">Sign Up</a><br>
				<a target=""href="ForgetPassword.php">Forget Password</a>
				</td>
			</tr>
		</table>
		</form>	
	</div>
	</body>
</html>