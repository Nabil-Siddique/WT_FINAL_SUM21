<?php


include 'models/control.php';

    $err_db = "";
	$service1="";
	$err_service1="";
	$service2="";
	$err_service2="";
	$service3="";
	$err_service3="";
	$request="";
	$err_request="";
	
	
	$err=false;
	
 if (isset($_POST["updateServiceStatus"]))
	{
		
		$rs = updateServiceStatus($_POST["request"],$_POST["id"]);
		if($rs == true){
			
           
			 
			 
			 
			// header("Location: All_Service.php");
		}
		$db_err = $rs;
	}
	else if (isset($_POST["backToInfo"])){
		header("Location: All_Service.php");

	}
	
	
	
	
	
	function getAllFeedback(){
		$query = "select * from user where Type='User'";
		$rs = get($query);
		return $rs;
	}

	function getAllService(){
		$query = "select * from service";
		$rs = get($query);
		return $rs;
	}
	function getServiceForReport($id){
		$query= "select * from service where ID=$id";
		$rs = get($query);
		return $rs;
	}
	
	function getService($id){
		$query= "select Request from service where ID=$id";
		$rs = get($query);
	return $rs[0];
	}
	function updateServiceStatus($request,$id){
		$query= "update service set Request='$request' where ID=$id";
		return execute($query);
	}
?>