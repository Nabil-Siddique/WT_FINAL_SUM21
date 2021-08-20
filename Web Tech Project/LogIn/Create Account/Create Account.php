<html>
	<body>
	<fieldset><legend><h1>Create Account</h1></legend>
	<form border>
	<table align = "Center">
	<tr>
		<td>
		First Name:
		</td>
		<td>
			<input type="text" Placeholder="First Name">
		</td>
	</tr>
	<tr>
		<td>
		Last Name:
		</td>
		<td>
			<input type="text" Placeholder="Last Name">
		</td>
	</tr>
	<tr>
		<td>
			Username:
		</td>
		<td>
			<input type="text" Placeholder="Username">
		</td>
	</tr>
	<tr>
		<td>
			Gender:
		</td>
		<td><input type="radio" value="Male" <?php if($gender = "Male") echo "checked";?> name="gender"> Male <input <?php if($gender = "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
	</tr>
	<tr>
		<td>
		Email:
		</td>
		<td>
			<input type="text" Placeholder="Email">
		</td>
	</tr>
	<tr>
		<td>
		Phone:
		</td>
		<td>
			<input type="text" Placeholder="Phone">
		</td>
	</tr>
	<tr>
		<td>
		Address:
		</td>
		<td>
			<input type="text" Placeholder="Address">
		</td>
	</tr>
	<tr>
		<td>
		Password:
		</td>
		<td>
			<input type="password" Placeholder="Password">
		</td>
	</tr>
	<tr>
		<td>
		Confirm Password:
		</td>
		<td>
			<input type="password" Placeholder="Confirm Password">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<a href="../../HomePage.php">
			<fieldset>Create Account</fieldset>
			</a>
		</td>
	</tr>
	
	</table>	
	<form>
	</fieldset>
	</body>

</html>