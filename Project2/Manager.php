<?php

	include 'controllers/mng_control.php';
	
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/manager.css">
	<body>
	<div class="bg"><div class="header">
  <h1>Welcome Manager <?php echo $_SESSION["Name"]; ?></h1>
  <form action="" " method="POST">
  <p align="right"><input type="submit" name="logout1" value="Log Out" class="button1" align="center"></p>
  </form>
</div>
	<table align="center">
		<tr>
			<td><a target="" href="RegisterService.php"><button  class="button">Register Service</button></a>	</td>
			<td><a target="" href="BookedUserInfo.php"><button  class="button">Booking User</button></a>	</td>
			<td><a target="" href="SpecialOffer.php"><button  class="button">Create Offer</button></a>	</td>
			<td><a target="" href="SendTicket.php"><button  class="button">Send Tickets</button></a>	</td>
			<td><a target="" href="RefundRqst.php"><button  class="button">Refund Request</button></a>	</td>
			<td><a target="" href="GenerateReport.php"><button  class="button">Generate Report</button></a>	</td>
			<td><a target="" href="Massege.php"><button  class="button">Massege</button></a>	</td>
		</tr>
		
	
	
	</table>
	</div>
	</body>
</html>