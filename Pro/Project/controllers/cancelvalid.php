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