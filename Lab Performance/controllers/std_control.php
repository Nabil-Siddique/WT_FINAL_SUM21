<?php

	$sname="";
	$err_sname="";
	$dob="";
	$err_dob="";
	$credit="";
	$err_crdt="";
	$cgpa="";
	$err_cgpa="";
	$dept_id="";
	$err_dept_id="";
	$error=true;
	include 'controllers/control.php';
	if(isset($_POST["addstudent"]))
	{
		$rs=insertCategory($_POST["sname"],$_POST["dob"],$_POST["credit"],$_POST["cgpa"],$_POST["dept_id"]);
		if(empty($_POST["sname"]))
		{
			$err_sname="Name Required";
			$error=false;
		}
		else
		{
			$sname=$_POST["sname"];
		}
		if(empty($_POST["dob"]))
		{
			$err_dob="Date Required";
			$error=false;
		}
		else
		{
			$dob=$_POST["dob"];
		}
		if(empty($_POST["credit"]))
		{
			$err_crdt="Credit Required";
			$error=false;
		}
		else
		{
			$credit=$_POST["credit"];
		}
		if(empty($_POST["cgpa"]))
		{
			$err_cgpa="CGPA Required";
			$error=false;
		}
		else
		{
			$cgpa=$_POST["cgpa"];
		}
		if(empty($_POST["dept_id"]))
		{
			$err_dept_id="ID Required";
			$error=false;
		}
		else
		{
			$dept_id=$_POST["dept_id"];
		}
		if(!empty($_POST["sname"])&&!empty($_POST["dob"])&&!empty($_POST["credit"])&&!empty($_POST["cgpa"]))
		{
			if($rs == true)
			{
			header("Location: Allstudents.php");
			}
			$db_err = $rs;
		}
	}
	else if(isset($_POST["editstudents"]))
	{
		$rs = updatestd($_POST["id"],$_POST["sname"],$_POST["dob"],$_POST["credit"],$_POST["cgpa"]);
		if($_POST["sname"]=="")
		{
			$err_sname="Name Required";
			$error=false;
		}
		else
		{
			$sname=$_POST["sname"];
		}
		if($_POST["dob"]=="")
		{
			$err_dob="Date Required";
			$error=false;
		}
		else
		{
			$dob=$_POST["dob"];
		}
		if($_POST["credit"]=="")
		{
			$err_crdt="Credit Required";
			$error=false;
		}
		else
		{
			$credit=$_POST["credit"];
		}
		if($_POST["cgpa"]=="")
		{
			$err_cgpa="CGPA Required";
			$error=false;
		}
		else
		{
			$cgpa=$_POST["cgpa"];
		}
		if(!empty($_POST["sname"])&&!empty($_POST["dob"])&&!empty($_POST["credit"])&&!empty($_POST["cgpa"]))
		{
			if($rs == true)
			{
			header("Location: Allstudents.php");
			}
			$db_err = $rs;
		}
		
	}
	else if(isset($_POST["delete"]))
	{
		$rs = deletestd($_POST["id"]);
		if($_POST["sname"]=="")
		{
			$err_sname="Name Required";
			$error=false;
		}
		else
		{
			$sname=$_POST["sname"];
		}
		if($rs === true)
		{
			header("Location: Allstudents.php");
		}
		$db_err = $rs;
	}
	
	function insertCategory($name,$dob,$credit,$cgpa,$deptid)
	{
		$query = "insert into st values (NULL,'$name','$dob','$credit','$cgpa','$deptid')";
		 return execute($query);
	}
	
	function getallStd()
	{
		$query = "select * from st";
		$rs = get($query);
		return $rs;
	}
	function getStd($id)
	{
		$query= "select Name,DOB,Credit,CGPA from st where id=$id";
		$rs = get($query);
	return $rs[0];
	}
	function updatestd($id,$name,$dob,$credit,$cgpa)
	{
		$query= "update st set Name='$name',DOB='$dob',Credit='$credit',CGPA='$cgpa' where id=$id";
		return execute($query);
	}
	function deletestd($id)
	{
		$query= "DELETE FROM st WHERE id=$id";
		return execute($query);
	}
?>