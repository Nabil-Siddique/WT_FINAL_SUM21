<?php
session_start();
	include 'models/control.php';
	$pass="";
	$err_pass="";
	$email="";
	$err_email="";
	$error=true;
if(isset($_POST["ForgetPassword"]))
	{
		if(empty($_POST["email"]))
		{
			$err_email="Email required";
			$error=true;
		}
		else
		{
			$email=$_POST["email"];
		}
		if(empty($_POST["password"]))
		{
			$err_pass="Password Required";
			$error= true;
		}
		else if(strlen($_POST["password"]) <=6)
		{
			$err_pass="Password Must be greater than 6 digit";
			$error= true;
		}
		else if((!strpos($_POST["password"],"#")))
		{
			$err_pass="Password Should have # special charecter";
			$error= true;
		}
		else
		{
			$pass=$_POST["password"];
		}
		if(!empty($_POST["email"])&&!empty($_POST["password"]))
		{ 
			$rs=update($_POST["email"],$_POST["password"]);
			
			
			if($rs==true)
			{
				header("Location: logIn.php");
			}
			
			
			$db_err = $rs;
			
			
		}
	}
	
	function update($s1,$s2)
	{
		$query = "Update user set Password='$s2' WHERE Email ='$s1' ";
		
	return execute($query);
	
	}
	
	

?>