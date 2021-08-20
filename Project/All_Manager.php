<?php 
include 'controllers/ManagerController.php';
$manager=getAllManager();

?>

<html><head>

<title>ALL MANAGER</title></head><body><h2 id="p1">ALL REGISTERED MANAGER DETAILS</h2><fieldset>
<form>
	<link rel="stylesheet" href="style/myStyle.css">




 <table><table align="center" >
				
<tr><td id="p2"><b>NO.</td>
<td id="p2"><b>NAME</td>
<td id="p2"><b>USERNAME</td>
<td id="p2"><b>EMAIL</td>
<td id="p2"><b>ADDRESS</td>
<td id="p2"><b>DATE OF BIRTH</td>
<td id="p2"><b>SALARY</td><td id="p2"><b>GENDER</td>
</tr>
<?php
$i=1;
foreach($manager as $m){
 
echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$m["Name"]."</td>";
							echo "<td>".$m["Username"]."</td>";
							echo "<td>".$m["Email"]."</td>";
							echo "<td>".$m["Address"]."</td>";
							echo "<td>".$m["DateOfBirth"]."</td>";
							echo "<td>".$m["Salary"]."</td>";
							echo "<td>".$m["Gender"]."</td>";
							echo '<td><a href="UpdateManager.php?id='.$m['ID'].'">Update</a></td>';
							echo '<td><a href="Delete_Manager.php?id='.$m['ID'].'">Delete</a></td>';
						echo "</tr>";
						$i++;


}

?>
</table></form></fieldset>
<a href="AdminDashboard.php"class="btn-link">GO BACK TO ADMIN DASHBOARD</a>

</body>

</html>