<?php
/*	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$err=false;*/
	

	include 'controllers/ManagerController.php'	
?>

<html>
	<head>
	<title>VERIFY REGISTERED MANAGER</title>
<script src="js/jsValidation.js"></script> 
	<link rel="stylesheet" href="style/myStyle.css">

	</head>
	<body>
	<h1 id="p1">VERIFY REGISTERED MANAGER</h1>
	
	
	
		<fieldset>
			<form action="" onsubmit="return validate2()" method="post"><h2><?phpecho $err_db;?></h2> 
			 <table><table align="center" >
				<tr>
					<td><b>Name:</td>
					<td><input type="text" id="name" name="name" value="<?php echo $name;?>"></td>
					<td><span id="err_name"><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td><b>Username:</td>
					<td><input type="text" id="username" name="username" value="<?php echo $uname;?>"></td>
					<td><span id="err_uname"><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="verify" value="VERIFY"></td>
				</tr>

				</table></table>
			</form>	
		</fieldset>		
		<a href="AdminDashboard.php" class="btn-link">GO BACK TO ADMIN DASHBOARD</a>
		</body>
	
</html>