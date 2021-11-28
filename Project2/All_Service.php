<?php 
include 'controllers/ServiceController.php';
$service=getAllService();
?>

<html><html><br><br><a href="AdminDashboard.php" class="btn-link">GO BACK TO ADMIN DASHBOARD</a>	


	<link rel="stylesheet" href="style/myStyle.css">




<head><title>ALL SERVICE</title></head><body><h2 id="p1">ALL SERVICE INFORMATION</h2><fieldset>
<form> <table><table align="center" >
				
<tr><td id="p2"><b>NO.</td>
<td id="p2"><b>SERVICE 1</td>
<td id="p2"><b>SERVICE 2</td>
<td id="p2"><b>SERVICE 3</td>
<td id="p2"><b>REQUEST</td>

</tr>

<?php
$i=1;
foreach($service as $s){
 
echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$s["Service1"]."</td>";
							echo "<td>".$s["Service2"]."</td>";
							echo "<td>".$s["Service3"]."</td>";
							echo "<td>".$s["Request"]."</td>";
						
							echo '<td><a href="UpdateServiceStatus.php?id='.$s['ID'].'">Update</a></td>';
							echo '<td><a href="ReportGenerate.php?id='.$s['ID'].'">Generate Report & Download</a></td>';
							
							
						echo "</tr>";
						$i++;


}

?>

</table></form></fieldset>
</body></html>