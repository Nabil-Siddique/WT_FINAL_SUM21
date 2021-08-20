<?php
$name="";
$errorname="";
$num="";
$err_num="";
$launchtype="";
$errorlaunch="";
$departure="";
$errordep="";
$arrival="";
$errorarr="";
$noseat="";
$errorno="";
$launch=[];
$errorlauncht="";
$err=false;
$depttime = array("Before 06:00 AM","06:00 AM - 12:00 PM","12:00 PM - 06:00 PM","After 06:00 PM");
$launchtype1 = array("1st Class","2nd Class");
$seat = array("1","2","3","4","5","6");

function launchExist($launchh){
		global $launch;
		foreach($launch as $l){
			if($l == $launchh){
				return true;
			}
		}
		return false;
	}

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(empty($_POST["name"])){
			$errorname="Name Required";
			$err = true;
		}
		else if(strlen($_POST["name"]) <=2){
			$errorname="Name Must be greater than 2";
			$err = true;
		}
		else{
			$name=$_POST["name"];
		}
	if (!isset($_POST["launchtype"])){
			
				$errorlaunch="Select type";
					$err = true;
		}
		else{
			$launchtype=$_POST["launchtype"];
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
			$arrival=$_POST["noseat"];
		}
		
		if (!isset($_POST["launch"])){
			
				$errorlauncht="Select Desire Type";
					$err = true;
		}
		else{
			$launch=$_POST["launch"];
		}
		
			if(!is_numeric($_POST["num"]))
			{
				$err_num="Number should be numeric <br>";
				$err = true;
			}
			else if(strlen($_POST["num"]) <=10){
			$err_num="Name Must be greater or equal to 10";
			$err = true;
		}
			else {$num=$_POST["num"];
			}
		
		
		
		if(!$err){
			echo "Name: ".htmlspecialchars($_POST["name"])."<br>";
			echo "Launch Type: ".htmlspecialchars($_POST["launchtype"])."<br>";
			echo "Departure Time: ".htmlspecialchars($_POST["departure"])."<br>";
			echo "Arrival Time: ".htmlspecialchars($_POST["arrival"])."<br>";
			echo "Number of Seat: ".htmlspecialchars($_POST["noseat"])."<br>";
			echo "Phone Number: ".htmlspecialchars($_POST["num"])."<br>";
			$arr = $_POST["launch"];
			
			foreach($arr as $e){
				echo "Your Desired Launch: ";
				echo "$e <br>";
			}
		}
}


	
?>



<html>
	<body><title>Launch Search</title>
	<fieldset><legend align="center"><h1>Launch Search</h1></legend>
	<a href="..\HomePage.php">Go Back To Home</a>
	<form action="" method="post">
	<form border>
	<fieldset>
	<table align = "center">
	
	<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $errorname;?></span></td>
						
					</tr>
	
	<tr>
		<td>
		Launch Type
		</td>
		<td>
		<select name="launchtype">
		<option disabled selected>Launch Type</option>
			<?php
									foreach($launchtype1 as $pf){
										if($launchtype1 == $pf)
											echo "<option selected>$pf</option>";
										else
											echo "<option>$pf</option>";
									}
								?>
		</select>

		</td>
		<td><span><?php echo $errorlaunch;?></span></td>
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
					<td><span>Phone</span></td>
					<td><input type="text" name="num" value="<?php echo $num;?>" placeholder = "Number" size="10"> </td><td><span><?php echo $err_num;?></span></td>
				</tr>
	<tr>
		<td>
		Your Desire Launch
		</td>
		<td>
							<input type="checkbox" value="Sundarban" <?php if(launchExist("Movies")) echo "checked";?>  name="launch[]"> Sundorban
							<input type="checkbox" value="Surma" <?php if(launchExist("Music")) echo "checked";?> name="launch[]"> Surma<br>
							<input type="checkbox" value="MV Tasrif" <?php if(launchExist("Sports")) echo "checked";?> name="launch[]"> MV Tasrif
							<input type="checkbox" value="Lepcha" <?php if(launchExist("Games")) echo "checked";?> name="launch[]"> Lepcha
						</td>
		<td><span><?php echo $errorlauncht;?></span></td>
	</tr>
	<tr>
		<td colspan="3" align="center">
			<input type="submit" value="Search">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
		<a href="..\Payment\Launch payment.php">Search</a>
		</td>
	</tr>
	</table>
	</fieldset>
	
	</form>
	</fieldset>
	</body>
</html> 