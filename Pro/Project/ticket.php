<?php
	

session_start();

?>

<html>
<style>
p{
	text-align:justify;
	
	margin: 230px 20px 10px 5px;
	
}
</style>
<Body background="style/corner-strip-simple-graphics-1920x1080.jpg">
<p>
	<table align = "center">
	
	<th>
	<h1 style="color:white">
	<?php echo "Name: " ?>
	<?php echo $_SESSION["name1"]."<br>"; ?>	
	<?php echo "From: " ?>
	<?php echo $_SESSION["from1"]."<br>"; ?>	
	<?php echo "To: " ?>
	<?php echo $_SESSION["to1"]."<br>"; ?>
	<?php echo "Date: " ?>
	<?php echo $_SESSION["day1"].""; ?>
	<?php echo $_SESSION["month1"]."<br>"; ?>
	<?php echo "Phone Number: " ?>
	<?php echo $_SESSION["num1"]."<br>"; ?>
	<?php echo "Departure Time: " ?>
	<?php echo $_SESSION["departure1"]."<br>"; ?>
	<?php echo "Number of Seat: " ?>
	<?php echo $_COOKIE["noseat1"]."<br>"; ?>
	<?php echo "Plane Name: " ?>
	<?php echo $_COOKIE["plane1"]."<br>"; ?>
	<?php echo "Total Fare: " ?>
	<?php echo $_SESSION["fare1"]*$_COOKIE["noseat1"].""; ?>
	<?php echo " Taka Only " ?>
	<h2 style="background-color:grey;">	<fieldset><a target="" href="payment.php">  Go to payment  </a></fieldset></h2>
	</h1>
	</th>
	</p>
</table>
	</body>
	</html>
	
	
	
		
		
		