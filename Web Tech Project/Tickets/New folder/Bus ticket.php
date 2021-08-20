<?php
$fromcity="";
$err_fromcity="";
$tocity="";
$err_tocity="";

$day="";
$err_day="";
$month="";
$err_month="";


$day1="";
$month1="";


$err=false;


if($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_POST["fromcity"])){
			$err_fromcity="Please choose departure city.";
			$err = true;
		}
		else{
			$fromcity=$_POST["fromcity"];
		}

if(empty($_POST["tocity"])){
			$err_tocity="Please choose destination city.";
			$err = true;
		}
		else{
			$tocity=$_POST["tocity"];
		}
		if (!isset($_POST["day"])){
			
				$err_day="Please select a DAY,";
					$err = true;
		}
		else{
			$day=$_POST["day"];
		}
		if (!isset($_POST["month"])){
			$err_month="MONTH";
				$err = true;
		}
		else{
			$month=$_POST["month"];
		}
		
	if(!$err){
			echo "From: ".htmlspecialchars($_POST["fromcity"])."<br>";
		    echo "To: ".htmlspecialchars($_POST["tocity"])."<br>";
			echo "Day of Journey: ".htmlspecialchars($_POST["day"])."<br>";
			echo "Month of Journey: ".htmlspecialchars($_POST["month"])."<br>";
			
			
			echo "Day of Return: ".htmlspecialchars($_POST["day1"])."<br>";
			echo "Month of Return: ".htmlspecialchars($_POST["month1"])."<br>";
			
			
		}

}


?>


<html>
	<body><title>Bus Ticket</title>
	<fieldset><legend align="center"><h1>Bus Ticket</h1></legend>
	<a href="..\HomePage.php">Go Back To Home</a>
	<form action="" method="post">
	<form border>
	<fieldset>
	<table align = "center">
	<tr>
		<td>
		From
		</td>
		<td>
		<input type="text" placeholder="Enter City" name="fromcity" value="<?php echo $fromcity;?>"></td><td><span><?php echo $err_fromcity;?></span>

		</td>
	</tr>
	<tr>
		<td>
		To
		</td>
		<td>
		<input type="text" placeholder="Enter City" name="tocity" value="<?php echo $tocity;?>"></td><td><span><?php echo $err_tocity;?></span>
		
		</td>
	</tr>
		<tr>
				<td>Date of Journey</td>
					<td>
						<select name="day">
							<option selected disabled>Day</option>
									<?php
										for($i=1;$i<=31;$i++)
										{
											echo "<option>$i</option>";
										}
									?>
						</select>
						<select name="month">
							<option selected disabled>Month</option>
									<?php
										$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
										for($j=0;$j<count($mon);$j++)
										{
											echo "<option>$mon[$j]</option>";
										}
									?>
						</select>
						
					</td>
					<td><?php echo "$err_day"."  "."$err_month".""?></td>
				</tr>
	<tr>
				<td>Date of Return<br>(optional)</td>
					<td>
						<select name="day1">
							<option selected disabled>Day</option>
									<?php
										for($i1=1;$i1<=31;$i1++)
										{
											echo "<option>$i1</option>";
										}
									?>
						</select>
						<select name="month1">
						<option selected disabled>Month</option>
									<?php
										$mon1= array("January","February","March","April","May","June","July","August","September","October","November","December");
										for($j1=0;$j1<count($mon);$j1++)
										{
											echo "<option>$mon[$j1]</option>";
										}
									?>
						</select>
						
					</td>
					
	</tr>
	<tr><?php
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
		<td>
			Any Medical Issue
		</td>
		<td>
			<input type="radio" value="Yes" <?php if($medical = "Yes") echo "checked";?> name="medical"> Yes <input <?php if($medical = "No") echo "checked";?> name="medical"  value="No" type="radio"> No
		</td>
		
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" value="Search Buses">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		
		</td>
	</tr>
	</table>
	</fieldset>
	</form>
	</fieldset>
	</body>
</html> 