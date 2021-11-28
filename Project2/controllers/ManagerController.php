<?php

session_start();
include 'models/control.php';
//date_default_timezone_set('Asia/Dhaka');
//$datetoday = date("Y-m-d");
    $err_db = "";
	$name="";
	$err_name="";
	$salary="";
	$err_salary="";
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$pass="";
	$err_pass="";
	$address="";
	$err_address="";
	$gender="";
	$err_gender="";
	$DOB="";
	$err_DOB="";
	$err=false;
	$err_message="";
	$message="";
	$pass="";
	$err_pass="";
$hasError=false;
	
	if(isset($_POST["add_manager"])){
		
		if(empty($_POST["name"])){
			$err_name="Name Required.";
			$err=true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required.";
			$err = true;
		}
		else if(strlen($_POST["username"])<=2){
			$err_uname="Your USERNAME MUST be greater than 2 letters.";
			$err = true;
		}
		else if(strpos($_POST["username"]," ")){
				$err_uname="You CANNOT have any space.";
		}
		else{
			$uname=$_POST["username"];
		}
		
		if(empty($_POST["email"])){
			$err_email="Email Required.";
			$err=true;
		}
		else{
			$email=$_POST["email"];
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required.";
			$err=true;
		}
		else{
			$pass=$_POST["pass"];
		}
		
		if(empty($_POST["address"])){
			$err_address="Address Required.";
			$err=true;
		}
		else{
			$address=$_POST["address"];
		}
		if(empty($_POST["dateOfBirth"])){
			$err_DOB="Date of Birth Required.";
			$err=true;
		}
		else{
			$DOB=$_POST["dateOfBirth"];
		}
		if(!isset($_POST["gender"])){
			$err_gender="Please select your GENDER";
			$err = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(empty($_POST["salary"])){
			$err_salary="Salary Required. ";
			$err=true;
		}
		else{
			$salary=$_POST["salary"];
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required. ";
			$err=true;
		}
		else{
			$pass=$_POST["pass"];
		}
		
		if(!$err){
			$rs = insertManager($name,$uname,$email,$pass,$address,$DOB,$salary,$gender);
			
			if($rs === true){
				
				
				
			$cookie_name = "addmanager";
			
			setcookie($cookie_name,$uname,time()+180);
			
			
			//rest of it in all manager.php		
			// echo "added  ".$_COOKIE[$cookie_name];
			
			header("Location: All_Manager.php");
			}
			//echo $rs;
			$err_db = $rs;
	}
	}
	
	else if (isset($_POST["verify"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError=true;
		}else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError=true;
		}else{
			$uname=$_POST["username"];
		}
		
		if(!$hasError){

			if(authenticateManager($uname)){
								
			   
				header("Location: AdminDashboard.php");
			}
			//$err_db = "Username Invalid";
			echo "INVALID USERNAME";
		}
	}
	
	
	
	
	
	else if(isset($_POST["sendmessage"])){
		
		if(empty($_POST["username"])){
			$err_uname="Username Required.";
			$err = true;
		}
		else{
			$uname=$_POST["username"];
		}
		if(empty($_POST["message"])){
			$err_message="PLEASE WRITE YOUR MESSAGE TO SEND. ";
			$err=true;
		}
		else{
			$message=$_POST["message"];
		}
		
		if(!$err){
			
			if(authenticateManager($uname)){
				$rs = insertManagerMessage($uname,$message);
				if($rs === true){
					
					
			$_SESSION["loggeduser"] = $_POST["username"];
			 echo "MESSAGE SENT SUCCESSFULLY TO :  ".$_SESSION["loggeduser"];                           //session used here in sending message.
			}
			
			}
			else{echo "UNSUCCESSFUL!!!<br>INVALID USERNAME.";}
			
					
			
	}
	}
	
	else if (isset($_POST["updateManager"]))
	{
		
		$rs = updateManager($_POST["name"],$_POST["email"],$_POST["address"],$_POST["salary"],$_POST["id"]);
		if($rs == true){
			
			//$_SESSION["updatemanager"] = $_POST["username"];
			
			
	       
			header("Location: All_Manager.php");
		}
		$db_err = $rs;
	}
	else if(isset($_POST["delete"]))
	{
		$rs = deleteManager($_POST["id"]);
		
		if($rs == true)
		{
			header("Location: All_Manager.php");
		}
		$db_err = $rs;
	}
	

	
	
	
	
	
	function insertManager($name,$uname,$email,$pass,$address,$DOB,$salary,$gender){
		//Global $datetoday;
		$query  = "insert into user values (NULL,'$name','$uname','$email','$pass',NULL,'$address',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'8/15/2021','Manager','$DOB','$salary','$gender')";
		return execute($query);	
	}
	function insertManagerMessage($uname,$message){
		$query  = "insert into message_manager values (NULL,'$uname','$message','Admin')";
		return execute($query);	
	}
	
	function getAllManagerMessage(){
		$query = "select Froms,Message from message_manager WHERE Toreceive='Admin'";
		$rs = get($query);
		return $rs;
	}
	

	function authenticateManager($uname){
		$query ="select * from user where Username='$uname' AND Type='Manager'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;

	}
	function getAllManager(){
		$query = "select * from user where Type='Manager'";
		$rs = get($query);
		return $rs;
	}
	function getManager($id){
		$query= "select Name,Email,Address,Salary from user where ID=$id";
		$rs = get($query);
	return $rs[0];
	}
	function updateManager($name,$email,$address,$salary,$id){
		$query= "update user set Name='$name',Email='$email',Address='$address',Salary=$salary where ID=$id";
		return execute($query);
	}
	function deleteManager($id)
	{
		$query= "DELETE FROM user WHERE ID='$id'";
		return execute($query);
	}
	
	
	
	function checkUsername($uname){ //for ajax
		$query = "select name from user where Username='$uname' AND Type='Manager'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		else return false;
	}
	
	
	function search($key){
		$query = "select id,name from user where Username like '%$key%' AND Type='Manager'";
		$rs = get($query);
		return $rs;
	}
	
	
?>