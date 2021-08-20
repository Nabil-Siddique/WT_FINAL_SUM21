<?php
$name="";
$errorname="";
$num="";
$err_num="";
$traintype="";
$errortrain="";
$departure="";
$errordep="";
$arrival="";
$errorarr="";
$noseat="";
$errorno="";
$train=[];
$errortrainn="";
$err=false;
$depttime = array("Before 06:00 AM","06:00 AM - 12:00 PM","12:00 PM - 06:00 PM","After 06:00 PM");
$traintype1 = array("AC","Non AC");
$seat = array("1","2","3","4");
$seatt="";
$errorseatt="";
function trainExist($trainn){
		global $train;
		foreach($train as $l){
			if($l == $trainn){
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
	if (!isset($_POST["traintype"])){
			
				$errortrain="Select type";
					$err = true;
		}
		else{
			$traintype=$_POST["traintype"];
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
			$noseat=$_POST["noseat"];
		}
		
		if (!isset($_POST["seatt"])){
			
				$errorseatt="Select Seat Type";
					$err = true;
		}
		else{
			$seatt=$_POST["seatt"];
		}
		
		if (!isset($_POST["train"])){
			
				$errortrainn="Select Desire Type";
					$err = true;
		}
		else{
			$train=$_POST["train"];
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
			echo "Train Type: ".htmlspecialchars($_POST["traintype"])."<br>";
			echo "Departure Time: ".htmlspecialchars($_POST["departure"])."<br>";
			echo "Arrival Time: ".htmlspecialchars($_POST["arrival"])."<br>";
			echo "Number of Seat: ".htmlspecialchars($_POST["noseat"])."<br>";
			echo "Seat Type : ".htmlspecialchars($_POST["seatt"])."<br>";
			echo "Phone Number: ".htmlspecialchars($_POST["num"])."<br>";
			$arr = $_POST["train"];
			
			foreach($arr as $e){
				echo "Your Desired Train: ";
				echo "$e <br>";
			}
		}
}


	
?>



<html>
	<body><title>Train Search</title>
	<fieldset><legend align="center"><h1>Train Search</h1></legend>
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
		Train Type
		</td>
		<td>
		<select name="traintype">
		<option disabled selected>Train Type</option>
			<?php
									foreach($traintype1 as $pf){
										if($traintype1 == $pf)
											echo "<option selected>$pf</option>";
										else
											echo "<option>$pf</option>";
									}
								?>
		</select>

		</td>
		<td><span><?php echo $errortrain;?></span></td>
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
						<td>Seat Type: </td>
						<td><input type="radio" value="Cabin" <?php if($seatt == "Cabin") echo "checked";?> name="seatt"> Cabin <input <?php if($seatt == "Chair Coach") echo "checked";?> name="seatt"  value="Chair Coach" type="radio"> Chair Coach</td>
						<td><span><?php echo $errorseatt;?></span></td>
					</tr>
					<tr>
					<td><span>Phone</span></td>
					<td><input type="text" name="num" value="<?php echo $num;?>" placeholder = "Number" size="10"> </td><td><span><?php echo $err_num;?></span></td>
				</tr>
	<tr>
		<td>
		Your desired Train
		</td>
		<td>
							<input type="checkbox" value="Sagordari" <?php if(trainExist("Sagordari")) echo "checked";?>  name="train[]"> Sagordari
							<input type="checkbox" value="Modhumoti" <?php if(trainExist("Modhumoti")) echo "checked";?> name="train[]"> Modhumoti<br>
							<input type="checkbox" value="Silkcity" <?php if(trainExist("Silkcity")) echo "checked";?> name="train[]"> Silkcity
							<input type="checkbox" value="Bonolota" <?php if(trainExist("Bonolota")) echo "checked";?> name="train[]"> Bonolota
						</td>
		<td><span><?php echo $errortrainn;?></span></td>
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