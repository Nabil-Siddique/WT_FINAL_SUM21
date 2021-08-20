<?php
	$db_server="localhost";
	$db_uname="root";
	$db_pass="";
	$db_name="project webtech";
	
	function execute($query){ // responsible for running insert,update,delete
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		if($conn){
			mysqli_query($conn,$query);
		}
	}
	function get($query){ //responsible for running select
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$data = array();
		if($conn){
			$result = mysqli_query($conn,$query);
			while($row = mysqli_fetch_assoc($result)){
				$data[] = $row;
			}
			
		}
		return $data;
	}

?>