<?php

	include 'controllers/mng_control.php';
	
?>

<html>
<link rel="stylesheet" href="style/addoffer.css">
	<body>
	<script src="js\addOffer.js"></script>
	<div class="bg">
	<h1 align="center">Add Offer</h1>
	<a target="" href="Manager.php"><button  class="button2" >Manager Home</button></a>
	<h1><?php echo $db_err;?></h1>
		<form action="" onsubmit="return validate()" method="POST">
			<table align="center">
				<tr>
					<td>
						<input type="text" id="offername" name="offername" value="<?php echo $OffName;?>" placeholder="Offer Name"><span id="err_OffName"><?php echo $err_OffName;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" id="percentage" name="percentage" value="<?php echo $OffPercen;?>" placeholder="Percentage"><span id="err_OffPercen"><?php echo $err_OffPercen;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" id="coupon" name="coupon" value="<?php echo $CoCode;?>" placeholder="Coupon"><span id="err_CoCode"><?php echo $err_CoCode;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="date" id="sdate" name="sdate" value="<?php echo $SDate;?>" placeholder="Starting Date"><span id="err_SDate"><?php echo $err_SDate;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="date" id="edate" name="edate" value="<?php echo $EDate;?>" placeholder="Ending Date"><span id="err_EDate"><?php echo $err_EDate;?></span>
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="addOffer" value="Add New Offer" class="button">
						
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>