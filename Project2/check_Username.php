<?php
	include 'controllers/ManagerController.php'
?>
<?php
	
	$uname = $_GET["uname"];
	$user = checkUsername($uname);
	
	if($user){
		echo "invalid";
	}
	else echo "valid";
?>