<?php
include 'phpvalid.php';
?>




<html>
<title>Plane Search</title>
<head>
<script>
var haserror=false;
function get(id){
	return document.getElementById(id);
}
function validate(){
				
				refresh();
				if(get("name").value ==""){
					haserror = true;
					get("errorname").innerHTML = "*Name Req";
				}
				if(get("from").selectedIndex==0){
					haserror=true;
					get("errorfrom").innerHTML = "*Loc Req";
				}
				if(get("to").selectedIndex==0){
					haserror=true;
					get("errorto").innerHTML = "*Loc Req";
				}
				if(get("fare").selectedIndex==0){
					haserror=true;
					get("errorfare").innerHTML = "*Fare Req";
				}
				if(get("num").value ==""){
					haserror = true;
					get("errornum").innerHTML = "*Number Req";
				}
				if(get("departure").selectedIndex==0){
					haserror=true;
					get("errordep").innerHTML = "*Departure Req";
				}
				if(get("noseat").selectedIndex==0){
					haserror=true;
					get("errorno").innerHTML = "*Seat Req";
				}
				if(get("plane").selectedIndex==0){
					haserror=true;
					get("errorplane").innerHTML = "*Select Plane";
				}
				
	return !haserror;
}
function refresh(){
				haserror=false;
				get("errorname").innerHTML="";
				get("errorto").innerHTML="";
				get("errorfrom").innerHTML="";
				get("errorfare").innerHTML="";
				get("errornum").innerHTML="";
				get("errordep").innerHTML="";
				get("errorno").innerHTML="";
				get("errorplane").innerHTML="";
}
</script>
</head>


	
	<Body background="GettyImages-185298837.jpg">
	
	
	<fieldset><legend align="center"><h1>Plane Search</h1></legend>
	
	<h3 align="Left"><a target="" href="aboutus.php"> About us </a></h3>
	<h3 align= "Left"><a target="" href="service_info.php"> Service Info</a></h3>
	<a href="HomePage.php">Go Back To Home</a>
	<form action="" onsubmit="return validate()" method="post">
	<form border>
	<fieldset>
	<table align = "center">
	<tr>
						<td>Name: </td>
						<td><input type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span id="errorname"><?php echo $errorname;?></span></td>
						
					</tr>
					
					
	<tr>
		<td>
		From
		</td>
		<td>
		<select id="from" name="from">
		<option disabled selected>From</option>
			<?php
									foreach($fromarr as $qf){
										if($fromarr == $qf)
											echo "<option selected>$qf</option>";
										else
											echo "<option>$qf</option>";
									}
								?>
		</select>
		
		</td>
		<td><span id="errorfrom" ><?php echo $errorfrom;?></span></td>
	</tr>				
		

<tr>
		<td>
		To
		</td>
		<td>
		<select id="to" name="to">
		<option disabled selected>To</option>
			<?php
									foreach($fromarr as $qf){
										if($fromarr == $qf)
											echo "<option selected>$qf</option>";
										else
											echo "<option>$qf</option>";
									}
								?>
		</select>
		
		</td>
		<td><span id="errorto"><?php echo $errorto;?></span></td>
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
	
		<td>
		Fare
		</td>
		<td>
		<select id="fare" name="fare">
		<option disabled selected>Fare</option>
			<?php
									foreach($farearr as $pf){
										if($farearr == $pf)
											echo "<option selected>$pf</option>";
										else
											echo "<option>$pf</option>";
									}
								?>
		</select>

		</td>
		<td><span id="errorfare"><?php echo $errorfare;?></span></td>
		<td><span><?php echo "*Business Class=2500 taka & Premium Class=2700 taka";?></span></td>
	</tr>
	
	
	<tr>
					<td><span>Phone</span></td>
					<td><input type="text" id="num" name="num" value="<?php echo $num;?>" placeholder = "Number" size="10"> </td><td><span id="errornum"><?php echo $err_num;?></span></td>
				</tr>
				
				
				
	<tr>
		<td>
		Departure Time
		</td>
		<td>
		<select id="departure" name="departure">
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
		<td><span id="errordep"><?php echo $errordep;?></span></td>
	</tr>
	
	
	
	<tr>
		<td>
		No. Of Seat
		</td>
		<td>
		<select id="noseat" name="noseat">
			<option disabled selected>No. Of Seat</option>
			<?php
										for($i=1;$i<=6;$i++)
										{
											echo "<option>$i</option>";
										}
									?>
		</select>
		
		</td>
		<td><span id="errorno"><?php echo $errorno;?></span></td>
	</tr>
	
	
	
	
	<tr>
		<td>
		Your Desire Plane
		</td>
		<td>
		<select id="plane" name="plane">
		<option disabled selected>Plane</option>
			<?php
									foreach($planes as $qf){
										if($planes == $qf)
											echo "<option selected>$qf</option>";
										else
											echo "<option>$qf</option>";
									}
								?>
		</select>
						</td>
		<td><span id="errorplane"><?php echo $errorplanee;?></span></td>
	</tr>
	
	
	
	
	<tr>
		<td colspan="3" align="center">
			<input type="submit" name="submit" value="Submit">
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
<?php
		function insertUser($name,$from,$to,$day,$month,$fare,$num,$departure,$noseat,$plane){
        $query = "insert into plane_ticket values ('$name','$from','$to','$day','$month','$fare','$num','$departure','$noseat','$plane',NULL)";
        return execute($query);
    }
	
	
	
	?>