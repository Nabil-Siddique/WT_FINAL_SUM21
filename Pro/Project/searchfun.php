<?php
include 'models/control.php';
	   function search($key)
     {
         $query = "select Transport_name,Transport_id,Fare,departure_time from plane_list where Transport_name like '%$key%'";
         $result = get($query) ;
         return $result ; 
     }
?>