<?php include 'controllers/ManagerController.php' ?>
<?php
$manager=getAllManager();

?>

<html><br><br><a href="AdminDashboard.php" class="btn-link">GO BACK TO ADMIN DASHBOARD</a>	
	<head>
	<title>Message MANAGER</title>
	
	
<script src="js/jsValidation.js"></script>

<link rel="stylesheet" href="Style/myStyle.css">
	
	
	</head>
	<body>
	

	

	<h1 id="p1">MESSAGE MANAGER</h1>
	<fieldset>
			<form action="" onsubmit="return validate3()" method="post">
			 <table><table align="left" >
 
<tr><b>Manager Information</tr>	

	
<tr><td id="p2"><b>NO.</td><td id="p2"><b>NAME</td>
<td id="p2"><b>USERNAME</td>
</tr>
<?php
$i=1;
foreach($manager as $m){
 
echo "<tr>";
							echo "<td>$i</td>";echo "<td>".$m["Name"]."</td>";
					        echo "<td>".$m["Username"]."</td>";
							echo "</tr>";
						$i++;
}

?>
<tr>
					<td><b>Username:</td>
					<td><input type="text" id="username" name="username"placeholder="Manager Username" value="<?php echo $uname;?>"></td>
					<td><span id="err_uname"><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><b>Message:</td>
					<td>
						<textarea name="message" id="message" placeholder="WRITE YOUR MESSAGE HERE"><?php echo $message;?></textarea></td>
						<td><span id="err_message"><?php echo $err_message;?></span></td></td>
					
				</tr>
				<tr>
					<td><input type="submit" name="sendmessage"value="SEND MESSAGE"></td><br><br><br>
					
				</tr>
				
			</form>	
			 
		</fieldset>	
	<a href="ManagerReply.php"class="btn-link">VIEW MANAGER REPLIES</a>
	</body>
</html>