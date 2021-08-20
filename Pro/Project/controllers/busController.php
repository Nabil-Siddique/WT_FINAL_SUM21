<?php

require_once 'models/control.php';
     $bname="";
	 $err_bname="";

     $dstation="";
	 $err_dstation="";

	 $astation="";
	 $err_astation="";

	 $vstation="";
	 $err_vstation="";

	 $dtime="";
	 $err_dtime="";

	 $atime="";
	 $err_atime="";
	 
	 $rent="";
	 $err_rent="";
	 
	 $hasError=false;
	 
	 
	 
	 
	  
	 
	 if (isset($_POST["bus"])){
		
			if (empty($_POST["bname"])){
				$err_bname="Bus name required";
				$hasError=true;
			}
			else{
				$bname=htmlspecialchars($_POST["bname"]);
			}
			If (empty($_POST["dstation"])){
				$err_dstation="Departure Station required";
				$hasError=true;
			}
			else{
				$dstation=htmlspecialchars($_POST["dstation"]);
			}
            If (empty($_POST["astation"])){
				$err_astation="Arrival Station required";
				$hasError=true;
			}
			else{
				$astation=htmlspecialchars($_POST["astation"]);
			}
			If (empty($_POST["vstation"])){
				$err_vstation="Via Station required";
				$hasError=true;
			}
			else{
				$vstation=htmlspecialchars($_POST["vstation"]);
			}

			If (empty($_POST["dtime"])){
				$err_dtime="Departure Time required";
				$hasError=true;
			}
			else{
				$dtime=htmlspecialchars($_POST["dtime"]);
			}
			If (empty($_POST["atime"])){
				$err_atime="Arrival Time required";
				$hasError=true;
			}
			else{
				$atime=htmlspecialchars($_POST["atime"]);
			}
			
			 if(empty($_POST["rent"]))
		    {
			 $err_rent="Number Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["rent"]))
		   {
			 $err_number="Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $rent=htmlspecialchars($_POST["rent"]);
		    }
			
		   if(!$hasError)
		   {
					   insertBus($bname,$dstation,$astation,$vstation,$dtime,$atime,$rent);

		   }
            

	 }
	 
	

     //Insert
     function insertBus($bname,$dstation,$astation,$vstation,$dtime,$atime,$rent)
     {
        $query = "INSERT INTO bus VALUES (NULL,'$bname','$dstation','$astation','$vstation','$dtime','$atime','$rent')" ;
        return execute($query) ;
        //header("Location: allbus.php");



       
     }
  
     
     

   //Delete
   if(isset($_POST["remove_bus"]))
	{
		deleteBus($_POST["id"]); 
	} 
    function deletebus($id)
	{
		$query = "DELETE FROM bus WHERE id=$id;";
		echo $query;
		execute($query);
		header("Location: allbus.php");
	} 

	//Update  
	if(isset($_POST["update_bus"])){
		editBus($_POST["id"],$_POST["bname"],$_POST["dstation"],$_POST["astation"],$_POST["vstation"],$_POST["dtime"],$_POST["atime"],$_POST["rent"]);
	}
	function editBus($id,$bname,$dstation,$astation,$vstation,$dtime,$atime,$rent){
		$query = "update bus set bname = '$bname', dstation ='$dstation', astation ='$astation',vstation ='$vstation',rent ='$rent'  where id = $id";
		echo $query ;
		execute($query);
		header("Location: allBus.php");
	} 

    //View
    function getBuses($id)
    {
        $query = "select * from bus where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
    function getAllbuses()
    {
        $query = "select * from bus" ;
        $result = get($query) ;
        return $result ;
    }
   
    ///Ajax
	function checkdstationValidity($dstation){
		$query = "select * from bus where dstation='$dstation'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
	function checkastationlValidity($astation){
		$query = "select * from bus where astation='$astation'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
    
	 ////Search
	 function searchBus($key)
	 {
		 $query = "select id,dstation,astation from bus where dstation like '%$key%'";
		 $result = get($query) ;
		 return $result ; 
	 }

?>