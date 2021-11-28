<?php
session_start();
include 'models/control.php';
$name=$_SESSION["Name"];
$errorname="";
$from="";
$errorfrom="";
$to="";
$errorto="";
 $errorDescription="";
$day="";
$err_day="";
$month="";
$err_month="";
$fare="";
$errorfare="";
$num="";
$err_num="";
$departure="";
$errordep="";
$noseat="";
$errorno="";
$plane="";
$errorplanee="";
$err=false;
$fromarr=array("Rajshahi","Dhaka","Sylhet","Rangpur","Coxs Bazar");
$depttime = array("Before 06:00 AM","06:00 AM - 12:00 PM","12:00 PM - 06:00 PM","After 06:00 PM");
$planetype1 = array("Business Class","Premium Class");
$planes = array("Novo","US Bangla","Bangladesh Biman");

$farearr=array("2500","2700");



if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	
		if (!isset($_POST["from"])){
			
				$errorfrom="Select Departure Time";
					$err = true;
		}
		else{
			$from=$_POST["from"];
		}
		
		if (!isset($_POST["to"])){
			
				$errorto="Select Departure Time";
					$err = true;
		}
	//	else if(strcmp($from, $to) !== 0){ //note that strcmp is case sensitive
    //$errorDescription="From and to location can not be the same";
    //$err = true;
//
		else{
			$to=$_POST["to"];
		}
		
		
		if (!isset($_POST["day"])){
			
				$err_day="Please select a DAY,";
					$err = true;
		}
		else{
			$day=$_POST["day"];
		}
		if (!isset($_POST["month"])){
			$err_month="MONTH";
				$err = true;
		}
		else{
			$month=$_POST["month"];
		}
	
		
	if (!isset($_POST["fare"])){
			
				$errorfare="Select fare";
					$err = true;
		}
		else{
			$fare=$_POST["fare"];
		}
		
		
		if(!is_numeric($_POST["num"]))
			{
				$err_num="Number should be numeric <br>";
				$err = true;
			}
			else if(strlen($_POST["num"]) <=10){
			$err_num="Number Must be greater or equal to 10";
			$err = true;
		}
			else {$num=$_POST["num"];
			}
		
		
		if (!isset($_POST["departure"])){
			
				$errordep="Select Departure Time";
					$err = true;
		}
		else{
			$departure=$_POST["departure"];
		}
		
		 
		if (!isset($_POST["noseat"])){
			
				$errorno="Select Number of seat";
					$err = true;
		}
		else{
			$noseat=$_POST["noseat"];
		}
		
		if (!isset($_POST["plane"])){
			
				$errorplanee="Select Desire Type";
					$err = true;
		}
		else{
			$plane=$_POST["plane"];
		}
		
		
		if(!$err){
			
			 $rs = updateuser($name,$from,$to,$day,$month,$fare,$num,$departure,$noseat,$plane);
           
				$_SESSION["name1"]= $name;
				$_SESSION["from1"]= $from;
				$_SESSION["to1"]= $to;
				$_SESSION["day1"]= $day;
				$_SESSION["month1"]= $month;
				$_SESSION["fare1"]= $fare;
				$_SESSION["num1"]= $num;
				$_SESSION["departure1"]= $departure;
				setcookie("noseat1",$noseat,time()+3600);
				setcookie("plane1",$plane,time()+3600);
                  header("Location: ticket.php");
            }
           
        }
		
		




	
?>