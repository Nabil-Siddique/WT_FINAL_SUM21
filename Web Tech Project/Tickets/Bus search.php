<?php
$bustype="";
$errorbus="";
$departure="";
$errordep="";
$arrival="";
$errorarr="";
$noseat="";
$errorno="";
$bus=[];
$errorbust="";
$err=false;
$depttime = array("Before 06:00 AM","06:00 AM - 12:00 PM","12:00 PM - 06:00 PM","After 06:00 PM");
$bustype1 = array("AC","Non AC");
$seat = array("1","2","3","4");

function busExist($buss){
		global $bus;
		foreach($bus as $b){
			if($b == $buss){
				return true;
			}
		}
		return false;
	}

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if (!isset($_POST["bustype"])){
			
				$errorbus="Select type";
					$err = true;
		}
		else{
			$bustype=$_POST["bustype"];
		}
		if (!isset($_POST["departure"])){
			
				$errordep="Select Departure Time";
					$err = true;
		}
		else{
			$departure=$_POST["departure"];
		}
		
		if (!isset($_POST["arrival"])){
			
				$errorarr="Select Arrival Time";
					$err = true;
		}
		else{
			$arrival=$_POST["arrival"];
		}
		if (!isset($_POST["noseat"])){
			
				$errorno="Select Number of seat";
					$err = true;
		}
		else{
			$arrival=$_POST["arrival"];
		}
		
		if (!isset($_POST["bus"])){
			
				$errorbust="Select Desire Type";
					$err = true;
		}
		else{
			$bus=$_POST["bus"];
		}
		
		
		
		if(!$err){
			echo $_POST["bustype"]."<br>";
			echo $_POST["departure"]."<br>";
			echo $_POST["arrival"]."<br>";
			echo $_POST["noseat"]."<br>";
			$arr = $_POST["bus"];
			
			foreach($arr as $e){
				echo "$e <br>";
			}
		}
}


	
?>

<html>
	<body><title>Bus Search</title>
	<fieldset><legend align="center"><h1>Bus Search</h1></legend>
	<a href="..\HomePage.php">Go Back To Home</a>
	<form action="" method="post">
	<form border>
	<fieldset>
	<table align = "center">
	<tr>
		<td>
			<p align="center">Departure</p>
			<input type="submit" value="< Prev. Day">
			<input type="submit" value="Next Day>">
		</td>
		<td>
		</td>
		<td>
			<p align="center">Return (Optional)</p>
			<input type="submit" value="< Prev. Day">
			<input type="submit" value="Next Day>">
		</td>
	</tr>
	<tr>
		<td>
		Bus Type
		</td>
		<td>
		<select name="bustype">
		<option disabled selected>Bus Type</option>
			<?php
									foreach($bustype1 as $pf){
										if($bustype1 == $pf)
											echo "<option selected>$pf</option>";
										else
											echo "<option>$pf</option>";
									}
								?>
		</select>

		</td>
		<td><span><?php echo $errorbus;?></span></td>
	</tr>
	<tr>
		<td>
		Departure Time
		</td>
		<td>
		<select name="departure">
		    <option disabled selected>Departure Time</option>
			<?php
									foreach($depttime as $qf){
										if($depttime == $qf)
											echo "<option selected>$qf</option>";
										else
											echo "<option>$qf</option>";
									}
								?>
		</select>
		
		</td>
		<td><span><?php echo $errordep;?></span></td>
	</tr>
	<tr>
		<td>
		Arrival Time
		</td>
		<td>
		<select name="arrival">
			<option disabled selected>Arrival Time</option>
			<?php
									foreach($depttime as $qf){
										if($depttime == $qf)
											echo "<option selected>$qf</option>";
										else
											echo "<option>$qf</option>";
									}
								?>
		</select>
		
		</td>
		<td><span><?php echo $errorarr;?></span></td>
	</tr>
	<tr>
		<td>
		No. Of Seat
		</td>
		<td>
		<select name="noseat">
			<option disabled selected>No. Of Seat</option>
			<?php
									foreach($seat as $rf){
										if($seat == $rf)
											echo "<option selected>$rf</option>";
										else
											echo "<option>$rf</option>";
									}
								?>
		</select>
		
		</td>
		<td><span><?php echo $errorno;?></span></td>
	</tr>
	<tr>
		<td>
		Your Desire Buses
		</td>
		<td>
							<input type="checkbox" value="Hanif" <?php if(busExist("Movies")) echo "checked";?>  name="bus[]"> Hanif
							<input type="checkbox" value="National" <?php if(busExist("Music")) echo "checked";?> name="bus[]"> National<br>
							<input type="checkbox" value="ENA" <?php if(busExist("Sports")) echo "checked";?> name="bus[]"> ENA
							<input type="checkbox" value="Greenline" <?php if(busExist("Games")) echo "checked";?> name="bus[]"> Greenline
						</td>
		<td><span><?php echo $errorbust;?></span></td>
	</tr>
	<tr>
		<td colspan="3" align="center">
			<input type="submit" value="Search">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
		
		</td>
	</tr>
	</table>
	</fieldset>
	</form>
	</fieldset>
	</body>
</html> 