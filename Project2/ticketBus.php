<?php
include 'controllers/ticketControllerBus.php';
?>




<html>
<head>

</head>


	
	<body>
	
	
	<fieldset><legend align="center"><h1>Insert Info for downloading ticket</h1></legend>
	
	
	<form action="" onsubmit="return validate()" method="post">
	<form border>
	<fieldset>
	<table align = "center">
				<tr>
						<td>Name: </td>
						<td><input type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span id="err_name"><?php echo $err_name;?></span></td>
						
				</tr>

				<tr>
						<td>From: </td>
						<td><input type="text" id="from" name="from" value="<?php echo $from;?>" placeholder="From"></td>
						<td><span id="err_from"><?php echo $err_from;?></span></td>
						
				</tr>

				<tr>
						<td>To: </td>
						<td><input type="text" id="to" name="to" value="<?php echo $to;?>" placeholder="To"></td>
						<td><span id="err_to"><?php echo $err_to;?></span></td>
						
				</tr>

				<tr>
						<td>Seat Number: </td>
						<td><input type="text" id="sn" name="sn" value="<?php echo $sn;?>" placeholder="ex:a1,b1"></td>
						<td><span id="err_sn"><?php echo $err_sn;?></span></td>
						
				</tr>
					
					

	
	
	
	<tr>
		<td colspan="3" align="center">
			<input type="submit" name="submit" value="Submit">
		</td>
	</tr>
	
		
	
	<tr>
		<td colspan="3" align="center">
	
		</td>
	</tr>
	</table>
	</fieldset>
	</form>
	</fieldset>
	
	</body>
	<script src="JS/ticketValidation.js"></script>

</html> 

	
	
