<?php
	include 'controllers/mng_control.php';
	$id = $_GET["id"];
	$c = getMng($id);
	
?>

<html>
<link rel="stylesheet" href="style/updateservice.css">
	<body>
	<script src="js\registerService.js"></script>
	<div class="bg">
	<h1 align="center">Update Service</h1>
	<a target="" href="Manager.php"><button  class="button2" >Manager Home</button></a>
	<body>
	<h1><?php echo $db_err;?></h1>
		<form action="" onsubmit="return validate2()" method="POST">
			<table align="center">
				<tr>
					<td>
					<input type="hidden" value="<?php echo $id?>" name="id">
						<input type="text" id="service1" name="service1" value="<?php echo $c["Service1"];?>" placeholder="Service"><span id="err_s1"><?php echo $err_s1;?>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" id="service2" name="service2" value="<?php echo $c["Service2"];?>" placeholder="Service"><span id="err_s2"><?php echo $err_s2;?><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" id="service3" name="service3" value="<?php echo $c["Service3"];?>" placeholder="Service"><span id="err_s3"><?php echo $err_s3;?><br>
						
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="updateServices" value="Update Service" class="button">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>