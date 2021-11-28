<?php
session_start();
date_default_timezone_set('Asia/Dhaka');
	$s1="";
	$err_s1="";
	$s2="";
	$err_s2="";
	$s3="";
	$err_s3="";
	$email="";
	$OffName="";
	$err_OffName="";
	$OffPercen="";
	$err_OffPercen="";
	$CoCode="";
	$err_CoCode="";
	$SDate="";
	$err_SDate="";
	$EDate="";
	$err_EDate="";
	$TicNumber="";
	$err_TicNumber="";
	$TicDate="";
	$err_TicDate="";
	$err_messages="";
	$message="";
	$mn=$_SESSION["Name"];
	$datetoday = date("Y-m-d");
	$db="";
	$error=true;
	include 'models/control.php';
	if(!isset($_SESSION["Name"]))
	{
		header("Location: logIn.php");
	}
	if(isset($_POST["logout1"]))
	{
			session_destroy();
			
			header("Location: logIn.php");
			
			
	}
	if(isset($_POST["addService"]))
	{
		
		if(empty($_POST["service1"]))
		{
			$err_s1="Service Required";
			$error=false;
		}
		else
		{
			$s1=$_POST["service1"];
		}
		if(empty($_POST["service2"]))
		{
			$err_s2="Service Required";
			$error=false;
		}
		else
		{
			$s2=$_POST["service2"];
		}
		if(empty($_POST["service3"]))
		{
			$err_s3="Service Required";
			$error=false;
		}
		else
		{
			$s3=$_POST["service3"];
		}
		if(!empty($_POST["service1"]&&!empty($_POST["service2"])&&!empty($_POST["service3"])))
		{
			Global $datetoday;
			$rs=insertService($_POST["service1"],$_POST["service2"],$_POST["service3"],$datetoday);
			if($rs == true)
			{
			header("Location: RegisterService.php");
			}
			$db_err = $rs;
		}
	}
	else if(isset($_POST["updateServices"]))
	{
		
		if(empty($_POST["service1"]))
		{
			$err_s1="Service Required";
			$error=false;
		}
		else
		{
			$s1=$_POST["service1"];
		}
		if(empty($_POST["service2"]))
		{
			$err_s2="Service Required";
			$error=false;
		}
		else
		{
			$s2=$_POST["service2"];
		}
		if(empty($_POST["service3"]))
		{
			$err_s3="Service Required";
			$error=false;
		}
		else
		{
			$s3=$_POST["service3"];
		}
		if(!empty($_POST["service1"])&&!empty($_POST["service2"])&&!empty($_POST["service3"]))
		{
			$rs = updatemng($_POST["id"],$_POST["service1"],$_POST["service2"],$_POST["service3"],$datetoday);
			if($rs == true)
			{
			header("Location: RegisterService.php");
			}
			$db_err = $rs;
		}
		
	}
	else if(isset($_POST["delete"]))
	{
		$rs = deleteMng($_POST["id"]);
		
			header("Location: RegisterService.php");
		$db_err = $rs;
	}
	else if(isset($_POST["no"]))
	{
			header("Location: RegisterService.php");
	}
	else if(isset($_POST["noconfirm"]))
	{
		$rs = updatebook($_POST["id"],'Booking Cancel',$datetoday);
			header("Location: BookedUserInfo.php");
	}
	else if(isset($_POST["confirms"]))
	{
			$rs = updatebook($_POST["id"],'Confirmed Booking',$datetoday);
			
			header("Location: BookedUserInfo.php");
			
			
	}
	else if(isset($_POST["pending"]))
	{
			$rs = updatebook($_POST["id"],'Pending',$datetoday);
			
			header("Location: BookedUserInfo.php");
			
			
	}
	else if(isset($_POST["addOffer"]))
	{
		
		if(empty($_POST["offername"]))
		{
			$err_OffName="Offer Name Required";
			$error=false;
		}
		else
		{
			$OffName=$_POST["offername"];
		}
		if(empty($_POST["percentage"]))
		{
			$err_OffPercen="Offer Percentage Required";
			$error=false;
		}
		else if(!is_numeric($_POST["percentage"]))
		{
			$err_OffPercen="Only Number Allowed";
			$error=false;
		}
		else
		{
			$OffPercen=$_POST["percentage"];
		}
		if(empty($_POST["coupon"]))
		{
			$err_CoCode="Coupon Required";
			$error=false;
		}
		else
		{
			$CoCode=$_POST["coupon"];
		}
		if(empty($_POST["sdate"]))
		{
			$err_SDate="Starting Date Required";
			$error=false;
		}
		else
		{
			$SDate=$_POST["sdate"];
		}
		if(empty($_POST["edate"]))
		{
			$err_EDate="Ending Date Required";
			$error=false;
		}
		else
		{
			$EDate=$_POST["sdate"];
		}
		if(!empty($_POST["offername"])&&!empty($_POST["percentage"])&&!empty($_POST["coupon"])&&!empty($_POST["sdate"])&&!empty($_POST["edate"]))
		{
			$rs=insertOffer($_POST["offername"],$_POST["percentage"],$_POST["coupon"],$_POST["sdate"],$_POST["edate"],$datetoday);
			if($rs == true)
			{
			header("Location: SpecialOffer.php");
			}
			$db_err = $rs;
		}
	}
	else if(isset($_POST["updateOffer"]))
	{
		
		if(empty($_POST["offername"]))
		{
			$err_OffName="Offer Name Required";
			$error=false;
		}
		else
		{
			$OffName=$_POST["offername"];
		}
		if(empty($_POST["percentage"]))
		{
			$err_OffPercen="Offer Percentage Required";
			$error=false;
		}
		else
		{
			$OffPercen=$_POST["percentage"];
		}
		if(empty($_POST["coupon"]))
		{
			$err_CoCode="Coupon Required";
			$error=false;
		}
		else
		{
			$CoCode=$_POST["coupon"];
		}
		if(empty($_POST["sdate"]))
		{
			$err_SDate="Starting Date Required";
			$error=false;
		}
		else
		{
			$SDate=$_POST["sdate"];
		}
		if(empty($_POST["edate"]))
		{
			$err_EDate="Ending Date Required";
			$error=false;
		}
		else
		{
			$EDate=$_POST["sdate"];
		}
		if(!empty($_POST["offername"]&&!empty($_POST["percentage"])&&!empty($_POST["coupon"])&&!empty($_POST["sdate"])&&!empty($_POST["edate"])))
		{
			$rs = updateOff($_POST["id"],$_POST["offername"],$_POST["percentage"],$_POST["coupon"],$_POST["sdate"],$_POST["edate"],$datetoday);
			if($rs == true)
			{
			header("Location: SpecialOffer.php");
			}
			$db_err = $rs;
		}
	}
	else if(isset($_POST["deleteoff"]))
	{
		$rs = deleteOff($_POST["id"]);
		if($rs == true)
			{
			header("Location: SpecialOffer.php");
			}
		$db_err = $rs;
	}
	else if(isset($_POST["nooff"]))
	{
			header("Location: SpecialOffer.php");
	}
	else if(isset($_POST["sendtic"]))
	{
		
		if(empty($_POST["ticnumber"]))
		{
			$err_TicNumber="Ticket Number Required";
			$error=false;
		}
		else
		{
			$TicNumber=$_POST["ticnumber"];
		}
		if(empty($_POST["ticdate"]))
		{
			$err_TicDate="Ticket Date Required";
			$error=false;
		}
		else
		{
			$TicDate=$_POST["ticdate"];
		}
		if(!empty($_POST["ticnumber"])&&!empty($_POST["ticdate"]))
		{
			$rs = updateTic($_POST["id"],$_POST["ticnumber"],$_POST["ticdate"]);
			if($rs == true)
			{
			header("Location: SendTicket.php");
			}
			$db_err = $rs;
		}
		
	}
	else if(isset($_POST["sendrefund"]))
	{
			$rs = updateRefund($_POST["id"],'Request Accepted');
			
			header("Location: RefundRqst.php");
			
			
	}
	else if(isset($_POST["onpending"]))
	{
			$rs = updateRefund($_POST["id"],'On Process');
			
			header("Location: RefundRqst.php");
			
			
	}
	else if(isset($_POST["norefund"]))
	{
			$rs = updateRefund($_POST["id"],'Request Canceled');
			
			header("Location: RefundRqst.php");
			
			
	}
	else if(isset($_POST["generateOffer"]))
	{
		
		
		$characters = 'ABCDE FGHIJKL MNOPQRS TUVWX YZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < 10; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		
		$OffName=$randomString;
		
		$characters1 = '012345';
		$charactersLength1 = strlen($characters1);
		$randomString1 = '';
		for ($i = 0; $i < 2; $i++) {
			$randomString1 .= $characters1[rand(0, $charactersLength1 - 1)];
		}
		$OffPercen=$randomString1+1;	
		
		$characters2 = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength2 = strlen($characters2);
		$randomString2 = '';
		for ($i = 0; $i < 5; $i++) {
			$randomString2 .= $characters2[rand(0, $charactersLength2 - 1)];
		}
		$coupon=$randomString2;
		
		$characters3 = '123456789';
		$charactersLength3 = strlen($characters3);
		$randomString3 = '';
		for ($i = 0; $i < 1; $i++) {
			$randomString3 .= $characters3[rand(0, $charactersLength3 - 1)];
		}
		$end=$randomString3;
		
		
		$dateend = date("m")+$end;
		$dateends = date("Y-m-$dateend");
		$rs=insertOffer($OffName,$OffPercen,$randomString2,$datetoday,$dateends,$datetoday);	
			
	}
	else if(isset($_POST["sendmessage"]))
	{
		if(empty($_POST["message"]))
		{
				
				
				$err_messages="PLEASE WRITE YOUR MESSAGE TO SEND ";
				$error=false;
		}
		else{
				$message=$_POST["message"];
			}
			
		if(!empty($_POST["message"])){
				
				$rs = insertManagerMessage($_SESSION["Name"],$message);
				if($rs === true)
				{		
					$db= "MESSAGE SENT SUCCESSFULLY "; 
				}
				else
				{
					$db= "UNSUCCESSFUL!!!<br>INVALID USERNAME";
				}
					
		}
	}
	
	
	
	function insertManagerMessage($uname,$message){
		$query  = "insert into message_manager values (NULL,'Admin','$message','$uname')";
		return execute($query);	
	}
	function insertService($s1,$s2,$s3,$datetoday)
	{
		$query = "insert into service values (NULL,'$s1','$s2','$s3','Pending','$datetoday')";
		 return execute($query);
	}
	function insertOffer($OffName,$Percentage,$CoCode,$SDate,$EDate,$datetoday)
	{
		$query = "insert into offer values (NULL,'$OffName','$Percentage','$CoCode','$SDate','$EDate','$datetoday')";
		 return execute($query);
	}
	
	function getallMng()
	{
		$query = "select * from service";
		$rs = get($query);
		return $rs;
	}
	function getallMngtoday()
	{
		Global $datetoday;
		$query = "select * from service where Date='$datetoday'";
		$rs = get($query);
		return $rs;
	}
	function getallOff()
	{
		$query = "select * from offer";
		$rs = get($query);
		return $rs;
	}
	function getallOfftoday()
	{
		Global $datetoday;
		$query = "select * from offer ";
		$rs = get($query);
		return $rs;
	}
	function getallBooking()
	{
		$query = "select * from user where Type='User' AND Bus_Name IS NOT NULL";
		$rs = get($query);
		return $rs;
	}
	function getallMassege()
	{
		Global $mn;
		$msg= $mn;
		$query = "select * from message_manager where Toreceive='$msg' OR Froms='$msg'";
		$rs = get($query);
		return $rs;
	}
	
	function getallBookingToday()
	{
		Global $datetoday;
		$query = "select * from user where Date='$datetoday'";
		$rs = get($query);
		return $rs;
	}
	function getallTik()
	{
		$query = "select * from user where 	Booking='Confirmed Booking' AND Ticket_number=''";
		$rs = get($query);
		return $rs;
	}
	function getallRefund()
	{
		$query = "select * from user where 	Booking='Confirmed Booking' AND Refund='Request' OR Booking='Confirmed Booking' AND Refund='On Process'";
		$rs = get($query);
		return $rs;
	}
	
	function getMng($id)
	{
		$query= "select Service1,Service2,Service3 from service where ID=$id";
		$rs = get($query);
	return $rs[0];
	}
	function getTic($id)
	{
		$query= "select * from user where ID=$id";
		$rs = get($query);
	return $rs[0];
	}
	
	function getBook($id)
	{
		$query= "select * from user where ID=$id";
		$rs = get($query);
	return $rs[0];
	}
	function getRefund($id)
	{
		$query= "select * from user where ID=$id";
		$rs = get($query);
	return $rs[0];
	}
	
	function getOff($id)
	{
		$query= "select * from offer where ID=$id";
		$rs = get($query);
	return $rs[0];
	}
	
	function updatemng($id,$s1,$s2,$s3,$datetoday)
	{
		$query= "update service set Service1='$s1',Service2='$s2',Service3='$s3',Date='$datetoday' where ID=$id";
		return execute($query);
	}
	function updateTic($id,$TicNumber,$TicDate)
	{
		$query= "update user set Ticket_number='$TicNumber',Ticket_Date='$TicDate' where ID=$id";
		return execute($query);
	}
	
	function updateOff($id,$OffName,$Percentage,$CoCode,$SDate,$EDate,$datetoday)
	{
		$query= "update offer set Offer_Name='$OffName',Offer_Percentage='$Percentage',Coupon_Code='$CoCode',Staring_Date='$SDate',Ending_Date='$EDate',Date='$datetoday' where ID=$id";
		return execute($query);
	}
	function updatebook($id,$con,$datetoday)
	{
		$query= "update user set Booking='$con',Date='$datetoday' where ID=$id";
		return execute($query);
	}
	function updateRefund($id,$con)
	{
		$query= "update user set Refund='$con' where ID=$id";
		return execute($query);
	}
	function deleteMng($id)
	{
		$query= "DELETE FROM service WHERE ID=$id";
		return execute($query);
	}
	function deleteOff($id)
	{
		$query= "DELETE FROM offer WHERE ID=$id";
		return execute($query);
	}
	
	
	
	
	
	function search($key){
		$query = "select ID,Offer_Name from offer where Offer_Name like '%$key%'";
		$rs = get($query);
		return $rs;
	}
	
	
	function userserch($key){
		$query = "select * from user where Username like '%$key%' AND Type='User'";
		$rs = get($query);
		return $rs;
	}
?>