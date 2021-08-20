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
	<body><title>Launch Ticket</title>
	<fieldset><legend align="center"><h1>Launch Ticket</h1></legend>
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
	<tr>
		<td>
			Any Medical Issue
		</td>
		<td>
			<input type="radio" value="Yes" <?php if($medical = "Yes") echo "checked";?> name="medical"> Yes <input <?php if($medical = "No") echo "checked";?> name="medical"  value="No" type="radio"> No
		</td>
		
	</tr>			
	<tr>
		<td colspan="2" align="center">
			<input type="submit" value="Search Launchs">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		<a href="..\Search\Launch search.php">Search Launchs</a>
		</td>
	</tr>
	</table>	
	</fieldset>
	</form>
	</fieldset>
	</body>
</html> 