<?php
	include 'controllers/mng_control.php';
	$manager = getallMng(); 
	
?>
<html>
<link rel="stylesheet" href="style/registerservice.css">
	<body>
	<div class="bg">
	<h1 align="center">Register Service</h1>
	<a target="" href="Manager.php"><button  class="button2" >Manager Home</button></a>
	<table align="center" >
	<tr>
		<td>ID</td>
		<td>Service 1</td>
		<td>Service 2</td>
		<td>Service 3</td>
		<td>Status</td>
		<td>Update</td>
		<td>Delete</td>
	</tr>
		
		<tbody>
				<?php
				$i=1;
					foreach($manager as $c)
					{
						echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$c["Service1"]."</td>";
							echo "<td>".$c["Service2"]."</td>";
							echo "<td>".$c["Service3"]."</td>";
							echo "<td>".$c["Request"]."</td>";
							echo '<td><a href="UpdateService.php?id='.$c['ID'].'"><button class="button1">Update</button></a></td>';
							echo '<td><a href="DeleteService.php?id='.$c['ID'].'"><button class="button3">Delete</button></a></td>';
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
	
	</table>
	<p align="center"><a target="" href="AddService.php"><button  class="button">Register Service</button></a></p>
	</div>
	</body>
</html>