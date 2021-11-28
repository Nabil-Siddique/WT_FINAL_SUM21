<?php
require_once 'models/control.php' ;	

	
	$seats=[];
	$err_seats="";
	
	$hasError=false;
	
	
	function seatExist($hobby){
		global $seats;
		foreach($seats as $h){

			if($h == $hobby){
				return true;
			}
		}
		return false;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		
		if(!isset($_POST["seats"])){
			$err_seats="Please Choose Your Seat";
			$hasError = true;
		}
		else{
			$seats = $_POST["seats"];
		}
		
		if(!$hasError){
		
			insertBooking($seats);

			$arr = $_POST["seats"];
			echo "Your Seat Number= ";
			foreach($arr as $e){
				echo "$e,";
			}
		}
		
		
	}
	//Insert
     function insertBooking($seats)
     {
        $query = "INSERT INTO bookings VALUES (NULL,'$seats')" ;
        
         execute($query) ;

     }
  
 
   //Delete
   if(isset($_POST["cancel_booking"]))
	{
		deleteBooking($_POST["id"]); 
	} 
    function deleteBooking($id)
	{
		$query = "DELETE FROM bookings WHERE id=$id;";
		echo $query;
		execute($query);
	} 

?>