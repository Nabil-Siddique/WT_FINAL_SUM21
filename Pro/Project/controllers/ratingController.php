<?php
include 'models/control.php';

$fname="";
$errorfname="";

$rating="";
$errorrating="";
$err=false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["fname"])){
            $errorfname="Name Required";
            $err = true;
        }
        else if(strlen($_POST["fname"]) <=2){
            $errorfname="Name Must be greater than 2";
            $err = true;
        }
        else{
            $fname=$_POST["fname"];
        }
       
        if (!isset($_POST["rating"])){
            
                $errorrating="Please select rating,";
                    $err=true;
        }
        else{
            $rating=$_POST["rating"];
        }
        if(!$err){
          echo "Thanks for your feedback"; 
        }
}

 function insertRating($fname,$rating) 
		{
        $query ="INSERT INTO rating VALUES (NULL,'$fname','$rating')";
			execute($query);
		}

?>