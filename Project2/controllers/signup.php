<?php
session_start();
	include 'models/control.php';
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$cpass="";
	$err_cpass="";
	$name="";
	$err_name="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$gender="";
	$err_gender="";
	$DOB="";
	$err_DOB="";
	$db="";
	$account="created";
	$error=true;
if(isset($_POST["signUp"]))
	{
		if(empty($_POST["name"]))
		{
			$err_name="Name Required";
			$error=false;
		}
		else if(is_numeric($_POST["name"]))
		{
			$err_name="Numeric value is not allowed.";
			$error=true;
		}
		else if(strlen($_POST["name"])<3)
		{
			$err_name="Name Must Be More Than 2 Digit";
			$error=false;
		}
		else
		{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"]))
		{
			$err_uname="Username Required";
			$error=false;
		}
		else if(is_numeric($_POST["username"]))
		{
			$err_uname="Numeric value is not allowed.";
			$error=true;
		}
		else if(strlen($_POST["username"])<5)
		{
			$err_uname="Username Must Be More Than 5 Digit";
			$error=false;
		}
		else
		{
			$uname=$_POST["username"];
		}
		if(empty($_POST["email"]))
		{
			$err_email="Email required";
			$error=true;
		}
		else if(is_numeric($_POST["email"]))
		{
			$err_email="Numeric value is not allowed.";
			$error=true;
		}
		else if(!strpos($_POST["email"],"@")OR !strpos($_POST["email"],"."))
		{
			
			$err_email="Email should contain '@' and '.'";
			$error= true;		
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
		else{
			$pass = $_POST["password"];
		}
		if(empty($_POST["cpassword"]))
		{
			$err_cpass="Retype your Password";
			$error= true;
		}
		else if(strlen($_POST["cpassword"]) <=6)
		{
			
			$error= true;
		}
		else if($_POST["cpassword"]!=$_POST["password"]){
			$err_cpass="Password Do not Match.Please try again!!";
			$error= true;
		}
		else {
			$cpass = $_POST["cpassword"];
		}
		if(empty($_POST["phone"]))
		{
			$err_phone="Phone Required";
			$error= true;
		}
		else if(strlen($_POST["phone"]) >=12)
		{
			$err_phone="Phone Number Must be 11 digit";
			$error= true;
		}
		else if(!is_numeric($_POST["phone"]))
		{
			$err_phone="Phone Number Must Be Number";
			$error= true;
		}
		else
		{
			$phone=$_POST["phone"];
		}
		if(empty($_POST["address"]))
		{
			$err_address="Address is required";
			$error= true;
		}
		else{
			$address = $_POST["address"];
		}
		if(empty($_POST["DOB"]))
		{
			$err_DOB="Date Of Birth required";
			$error= true;
		}
		else{
			$DOB = $_POST["DOB"];
		}
		if(!isset($_POST["gender"]))
		{
			$err_gender="Please select your GENDER";
			$error= true;
		}
		else
		{
			$gender = $_POST["gender"];
		}
		if($_POST["name"]!=""&&$_POST["username"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["phone"]!=""&&$_POST["phone"]!=""&&isset($_POST["gender"]))
		{
			
			
			$rs = insertuser($_POST["name"],$_POST["username"],$_POST["email"],$_POST["password"],$_POST["phone"],$_POST["address"],$_POST["DOB"],$_POST["gender"]);
			if($rs === true)
			{
				setcookie($account,"Account Created",time()+10);
			header("Location:logIn.php");
			}
			
			$db = $rs;
		}
		
		
	}
	
	function insertuser($name,$username,$email,$pass,$phone,$address,$DOB,$gender)
	{
		
		$query  = "insert into user values(NULL,'$name','$username','$email','$pass','$phone','$address',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'User','$DOB',NULL,'$gender')";
		return execute($query);
	}
?>