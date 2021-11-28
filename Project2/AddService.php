<?php

	include 'controllers/mng_control.php';
	
?>

<html>
<link rel="stylesheet" href="style/addservice.css">
	<body>
	<script src="js\registerService.js"></script>
	<div class="bg">
	<h1 align="center">Register Service</h1>
	<a target="" href="Manager.php"><button  class="button2" >Manager Home</button></a>
	<body>
	<h1><?php echo $db_err;?></h1>
		<form action="" onsubmit="return validate2()" method="POST">
			<table align="center">
				<tr>
					<td>
						<input type="text" id="service1"name="service1" value="<?php echo $s1;?>" placeholder="Service"><span id="err_s1"><?php echo $err_s1;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" id="service2" name="service2" value="<?php echo $s2;?>" placeholder="Service"><span id="err_s2"><?php echo $err_s2;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" id="service3" name="service3" value="<?php echo $s3;?>" placeholder="Service"><span id="err_s3"><?php echo $err_s3;?></span>
					</td>
				</tr>
				
				<tr>
					<td align="center">
						<input type="submit" name="addService" value="Register Services" class="button">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>