<?php
include 'db_config.php';
	   function searchBus($key)
     {
         $query = "select Transport_name,Transport_id,Fare,departure_time from plane_list where Transport_name like '%$key%'";
         $result = get($query) ;
         return $result ; 
     }
?>

<html>
      <head>
	  <title>Search Bus</title>
	      <style>
		  .r-div
				{
					
				border:1px solid black;
				margin:auto;
				width:30%;
				margin-top:13%;
				
				}
		  
	       </style>
	  <head>
	  
	     <body>
		 <div class="r-div">
		 <fieldset>
        <legend align="center"><h1>Search Plane</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			             <!---->
					   <tr>
					       <td> 
					       	search plane
					       </td> 
					       <td> 
						   		<div id="">
								   <input style="width: 100%; height: 24px;" type="text" id="search_text"  
								   onkeyup="suggest(this)" placeholder="search...">
								   <p id="suggestion">

								   </p>	
								</div>  
						   </td>
			          </tr>
							
					       
				</table>
             </form>
			 <div>
		  </fieldset>
		  <script>
	             function suggest(control)
				 {
					var key = control.value;
						
						var xhttp = new XMLHttpRequest();
						if(key=="")
						{
							document.getElementById("suggestion").innerHTML = "" ;
							return;								
						}
						xhttp.onreadystatechange=function(){
							if(this.readyState == 4 && this.status == 200){
								document.getElementById("suggestion").innerHTML = this.responseText ;
							}
						};
						xhttp.open("GET","searchresult.php?key="+key,true);
						xhttp.send();
				 }
		  </script>
		 </body>
</html>