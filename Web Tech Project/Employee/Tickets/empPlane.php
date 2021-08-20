


<html>
	<body><title>Plane</title>
	<fieldset><legend align="center"><h1>Plane</h1></legend>
		<a href="..\Employee.php">Go Back</a>
	<form action="" method="post">
	<form border>
	<fieldset>
	<table align = "center">
	
	<tr>
		<td>
		Plane Number
		</td>
		<td>
			<input type="text" placeholder="Plane Number">
		</td>
	</tr>
	<tr>
		<td>
		Departure Time
		</td>
		<td>
		<select>
		    <option disabled selected>Departure Time</option>
			<option>Before 06:00 AM</option>
			<option>06:00 AM - 12:00 PM</option>
			<option>12:00 PM - 06:00 PM</option>
			<option>After 06:00 PM</option>
		</select>
		
		</td>
		<td>
			<input type="text" placeholder="Specific Time">
		</td>
	</tr>
	<tr>
		<td>
		Arrival Time
		</td>
		<td>
		<select>
			<option disabled selected>Arrival Time</option>
			<option>Before 06:00 AM</option>
			<option>06:00 AM - 12:00 PM</option>
			<option>12:00 PM - 06:00 PM</option>
			<option>After 06:00 PM</option>
		</select>
		
		</td>
		<td>
			<input type="text" placeholder="Specific Time">
		</td>
	</tr>

	<tr>
		<td>
		Name Of Plane
		</td>
		<td>
		
					<input type="checkbox" value="Airbus A350 XWB">Airbus A350 XWB<br>
					<input type="checkbox" value="Antonov An-148/An-158	">Antonov An-148/An-158	<br>
							
		</td>
		<td>
					<input type="checkbox" value="Boeing 737">Boeing 737<br>
					<input type="checkbox" value="Boeing 747(P262)">Boeing 747<br>
					
		</td>
	</tr>
	
	<tr>
		<td>
		Help-Line Phone Number:
		</td>
		<td>
			<input type="text" placeholder="Phone Number">
		</td>
	</tr>
	
	<tr>
		<td colspan="3" align="center">
			<input type="submit" value="Available +">
			<input type="submit" value="Not Available -">
		</td>
	</tr>
	</table>
	</fieldset>
	</form>
	</fieldset>
	</body>
</html> 