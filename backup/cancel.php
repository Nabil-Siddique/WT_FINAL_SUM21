<?php
include 'db_config.php';

$fname="";
$errorfname="";
$exp="";
$errorexp="";
$tid="";
$errortid="";
$err=false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["fname"])){
			$errorfname="fName Required";
			$err = true;
		}
		else if(strlen($_POST["fname"]) <=2){
			$errorfname="Name Must be greater than 2";
			$err = true;
		}
		else{
			$fname=$_POST["fname"];
		}
		if(empty($_POST["exp"])){
			$errorexp="Feedback Required";
			$err=true;
		}	
		else{
			$exp=$_POST["exp"];
		}
		if(empty($_POST["tid"])){
			$errortid="Ticket ID Required";
			$err=true;
		}	
		else{
			$tid=$_POST["tid"];
		}
		
		if(!$err){
			$rh=insertUserc($fname,$tid,$exp);
		  echo "Feedback submitted successfully. Thanks for your feedback"; 
		}
}
		
		
?>
<html>
<title>Refund</title>
<head>
</head>
<Body background="c518b29edc8842ab800a3f5cda4f4b8f.jpg">
<fieldset><legend align="center"><h1>Refund</h1></legend>
<form action="" method="post">
<form border>
	<fieldset>
	<table align = "center">
	<tr>
						<td>Name: </td>
						<td><input type="text" name="fname" value="<?php echo $fname;?>" placeholder="Name"></td>
						<td><span><?php echo $errorfname;?></span></td>
						
					</tr>
					
					<tr>
						<td>Explanation:  </td>
						<td>
							<textarea name="exp"><?php echo $exp;?></textarea>
						</td>
						<td><span><?php echo $errorexp;?></span></td>
					</tr>
					
					
	<tr>
						<td>Ticket ID: </td>
						<td><input type="text" name="tid" value="<?php echo $tid;?>" placeholder="Ticket ID"></td>
						<td><span><?php echo $errortid;?></span></td>
						
					</tr>
					
					<tr>
		<td colspan="3" align="center">
			<input type="submit" name="submit" value="Submit">
		</td>
	</tr>
							
</table>
	</fieldset>
	</form>
	</fieldset>
	
	</body>
</html> 
<?php
		function insertUserc($fname,$tid,$exp){
        $query = "insert into refund_request values ('$fname','$tid','$exp')";
        return execute($query);
    }
	
	
	
	?>			