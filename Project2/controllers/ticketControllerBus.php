<?php
session_start();

$name="";
$err_name="";

$from="";
$err_from="";

$to="";
$err_to="";

$sn="";
$err_sn="";




if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(empty($_POST["name"])){
			$err_name="Enter your Name";
			$err = true;
		}
		
		else{
			$name=$_POST["name"];
		}

		if(empty($_POST["from"])){
			$err_from="Enter Your departure Location";
			$err = true;
		}
		
		else{
			$from=$_POST["from"];
		}
		if(empty($_POST["to"])){
			$err_to="Name Required";
			$err = true;
		}
		
		else{
			$to=$_POST["to"];
		}
		if(empty($_POST["sn"])){
			$err_sn="Name Required";
			$err = true;
		}
		
		else{
			$sn=$_POST["sn"];
		}
		
		
		
		if(!$err){
	
				setcookie("name1",$name,time()+600);
				setcookie("from1",$from,time()+600);
				setcookie("to1",$to,time()+600);
				setcookie("sn1",$sn,time()+600);


                  header("Location: printTicket.php");
            }
           
        }
		
		




	
?>