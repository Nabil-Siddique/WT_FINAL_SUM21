<?php
session_start();
	include 'models/control.php';
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$account="created";
	$error=true;
	if(isset($_POST["login"]))
	{
		if(empty($_POST["username"]))
		{
			$err_uname="Username Required";
			$error=false;
		}
		else
		{
			$uname=$_POST["username"];
		}
		if(empty($_POST["password"]))
		{
			$err_pass="Password Required";
			$error=false;
		}
		else
		{
			$pass=$_POST["password"];
		}
		if(!empty($_POST["username"])&&!empty($_POST["password"]))
		{
			
			$rs=verify($_POST["username"],$_POST["password"]);
			
			if($rs==null)
			{
				$db_err = "Invalid Username or Password";
			}
			else
			{
				$c=getinfo($_POST["username"]);
				if($rs == true)
				{$_SESSION["Name"]=$_POST["username"];
					if($c["Type"]=="Manager")
					{
						header("Location: Manager.php");
					}
					else if($c["Type"]=="User")
					{
						header("Location: HomePage.php");
					}
					else if($c["Type"]=="Admin")
					{
						header("Location: AdminDashboard.php");
					}
				
				}
				else
				{
				$db_err = "Invalid Username or Password";
				
				}
			}
		}
	}
	
	function verify($s1,$s2)
	{
		$query = "SELECT * FROM user WHERE Username = '$s1' AND Password = '$s2' ";
		
		 return get($query);
	}
	
	function getinfo($s1)
	{
		$query= "SELECT * FROM user WHERE Username='$s1'";
		$rs = get($query);
	return $rs[0];
	}
	

?>