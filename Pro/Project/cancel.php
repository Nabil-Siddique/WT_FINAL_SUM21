<?php

session_start();
include 'models/control.php';

$fname=$_SESSION["Name"];
$errorfname="";
$exp="";
$errorexp="";
$tid="";
$errortid="";
$err=false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
		if(empty($_POST["exp"])){
			$errorexp="Feedback Required";
			$err=true;
		}	
		else{
			$exp=$_POST["exp"];
		}
		
		if(!$err){
			$rh=insertUserc($_SESSION["Name"],$_POST["exp"]);
		  echo "Refund Request Sent. Stay tuned for further update"; 
		}
}
		
		
?>
<html>
<title>Refund</title>
<head>
<style>
 p{
	 background-color:red;
	 margin:10px 830px 300px 810px;
 }
 </style>
</head>
<Body background="style/c518b29edc8842ab800a3f5cda4f4b8f.jpg">
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
		<td colspan="3" align="center">
			<input type="submit" name="submit" value="Submit">
		</td>
	</tr>
	
							
</table>
	</fieldset>
	</form>
	</fieldset>
	<p> *Refund after 48 hours is not acceptable </p>
	</body>
</html> 
<?php
		function insertUserc($fname,$exp){
			
        $query = "update user set Refund='Request',Reason='$exp' where Username='$fname'";
        return execute($query);
    }
	
	
	
	?>			