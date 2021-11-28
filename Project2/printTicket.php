<?php
	

session_start();

?>

<html>
<style>
p{
	text-align:justify;
	
	margin: 10px 20px 10px 5px;
	
}
</style>
<body>
	<table align="center">
   <tr>
       <td><h1><a  style="text-decoration:none" href="homepage.php" target="_self" >Home &nbsp</a><h1></td>

   </tr>
    </table>
<p>
	<table align = "center">

	
	<th>
	<h1 style="color:black">
	
	<?php echo "Name: " ?>
	<?php echo $_COOKIE["name1"]."<br>"; ?>

	<?php echo "Departure Station: " ?>
	<?php echo $_COOKIE["from1"]."<br>"; ?>

	<?php echo "Departure Station: " ?>
	<?php echo $_COOKIE["to1"]."<br>"; ?>

	<?php echo "Seat Number: " ?>
	<?php echo $_COOKIE["sn1"]."<br>"; ?>

	</h1>
	</th>
	</p>
</table>
	</body>

	</html>
	
	
	
		