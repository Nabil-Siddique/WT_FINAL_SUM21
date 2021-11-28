<?php 
include 'controllers/ManagerController.php';
$manager=getAllManagerMessage();

?>

<html><head>

	
<title>MESSAGE REPLIES</title></head><body><h2 id="p1">REPLIES FROM MANAGER</h2>


<fieldset>
<form>
	<link rel="stylesheet" href="style/myStyle.css">

 <table><table align="center" >
				
<tr><td id="p2"><b>No.</td>
<td id="p2"><b>FROM </td>
<td id="p2"><b> MESSAGE</td>

</tr>
<?php
$i=1;
foreach($manager as $m){
 
echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$m["Froms"]."</td>";
							echo "<td>".$m["Message"]."</td>";
							
						echo "</tr>";
						$i++;


}

?>
</table></form></fieldset>
<a href="AdminDashboard.php"class="btn-link">GO BACK TO ADMIN DASHBOARD</a>

</body>
<a href="MessageManager.php"class="btn-link">GO BACK TO MESSAGE MANAGER</a>
</html>