<?php
	include 'controllers/mng_control.php';
	$admin = getallMassege(); 
	
	
?>
<html>
<link rel="stylesheet" href="style/massege.css">
	<body>
	<script src="js\massege.js"></script>
	<div class="bg">
	<h1 align="center">Masseges</h1>
	<a target="" href="Manager.php"><button  class="button2" >Manager Home</button></a><br>
	<form action="" onsubmit="return validate3()" method="POST">
	<table>
		<tr>
			<td><span>User</span></td>
			<td><span>Massege</span></td>
		</tr>
		<tbody>
				<?php
				
					foreach($admin as $c )
					{
						echo "<tr>";
							echo "<td>".$c["Froms"]."</td>";
							echo "<td>".$c["Message"]."</td>";
						echo "</tr>";
						
					}
					
				?>
		</tbody>
		
	</table>
	<p align="center"><textarea  rows="8" cols="80"name="message" id="message" placeholder="WRITE YOUR MESSAGE HERE"><?php echo $message;?></textarea><br><span id="err_messages"><?php echo $err_messages;?></span></p>
	<p align="center"><?php echo $db;?></p>
	<p align="center"><input  type="submit" name="sendmessage"value="SEND MESSAGE" class="button"></p>
	
	</form>
	</div>
	</body>
</html>