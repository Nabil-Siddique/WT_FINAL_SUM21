<?php

require_once 'models/control.php' ;	

    $fname="";
	$err_fname="";

	$lname="";
	$err_lname="";
	
	$email="";
	$err_email="";
	
	 $feedback="";
	 $err_feedback="";

	 $hasError=false;
	 
	 
	 
	 function validateEmail($email)
	{
		$pos_at = strpos($email,"@");
		$pos_dot = strpos($email,".",$pos_at+1);
		if($pos_at < $pos_dot)
			{
			return true;
			}
			return false;
	}
	 
	  
	 
	 if (isset($_POST["feedback"])){
		
			if (empty($_POST["fname"])){
				$err_fname="First Name Required";
				$hasError=true;
			}
			else{
				$fname=htmlspecialchars($_POST["fname"]);
			}
			if (empty($_POST["lname"])){
				$err_lname="Last Name Required";
				$hasError=true;
			}
			else{
				$lname=htmlspecialchars($_POST["lname"]);
			}
           
			if (empty($_POST["email"])){
				$err_email="Email Required";
				$hasError=true;
			 }
			elseif(!validateEmail($_POST["email"]))
			{
				$err_email="Not a valid email";
				$hasError=true;
			}
			else
			{
				$email=htmlspecialchars($_POST["email"]);
			}
			
			If (empty($_POST["feedback"])){
				$err_feedback="Feedback Required";
				$hasError=true;
			 }
			else{
				$feedback=htmlspecialchars($_POST["feedback"]);
			 }

			if(!$hasError)
		   {
			  
			  insertFeedback($fname,$lname,$email,$feedback);
			  //header("Location:homepage.php");
			    echo "Feedback submitted successfully. Thanks for your feedback"; 

		   }
		   
		          

	 }

	 function insertFeedback($fname,$lname,$email,$feedback) 
		{
        $query ="INSERT INTO feedback VALUES (NULL,'$fname','$lname','$email','$feedback')";
		execute($query);
		}

     
     
?>