<html>
	<body>
	<fieldset><legend align="center"><h1>ADD EMPLOYEE</h1></legend>
	<a href="..\HomePage.php">Go Back To Home</a>	
	<form>
		<table align="center" >
			<tr>
				<td>
					Photo:
				</td>
				<td>
					<img src="Photo.PNG">
				</td>
				<td>
					<a href="">Upload Photo</a>
				</td>
			</tr>
			<tr>
				<td>
					Name:
				</td>
				<td>
					<input type="text" placeholder="Name">
				</td>
			</tr>
			<tr>
				<td>
					Employee ID:
				</td>
				<td>
					<input type="text" placeholder="Employee ID">
				</td>
			</tr>
			<tr>
				<td>
					Email:
				</td>
				<td>
					<input type="text" placeholder="Email">
				</td>
			</tr>
			<tr>
				<td>
					Phone:
				</td>
				<td>
					<input type="text" placeholder="Phone">
				</td>
			</tr>
			<tr>
				<td>
					Date Of Birth:
				</td>
				<td>
					<select>
						<option selected disabled>Day</option>
						<?php
							for($i=1;$i<=31;$i++)
							{
								echo "<option>$i</option>";
							}
						?>
					</select>
					<select>
						<option selected disabled>Month</option>
						<option>JAN</option>
						<option>FEB</option>
						<option>MAR</option>
						<option>APR</option>
						<option>MAY</option>
						<option>JUNE</option>
						<option>JULY</option>
						<option>AUG</option>
						<option>SEP</option>
						<option>OCT</option>
						<option>NOV</option>
						<option>DEC</option>
					</select>
					<select>
						<option selected disabled>Year</option>
						<?php
							for($i=1980;$i<=2021;$i++)
							{
								echo "<option>$i</option>";
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Gender:
				</td>
				<td>
				<input type="radio" value="Male" <?php if($gender = "Male") echo "checked";?> name="gender"> Male <input <?php if($gender = "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female
				</td>
			</tr>	
			<tr>
				<td>
					Blood Group:
				</td>
				<td>
					<select>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>O+</option>
						<option>O-</option>
						<option>AB+</option>
						<option>AB-</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Salary:
				</td>
				<td>
					<input type="text" placeholder="Salary">
				</td>
			</tr>
			<tr>
				<td>
					Password:
				</td>
				<td>
					<input type="password" placeholder="Password">
				</td>
			</tr>
			<tr>
				<td colspan ="3">
					<input type="submit" value="Add Employee">
					<input type="submit" value="Update Employee">
					<input type="submit" value="Delete Employee">
				</td>
				
			</tr>
		</table>
	</form>
	</fieldset>
	</body>
</html>