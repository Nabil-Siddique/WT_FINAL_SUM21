<?php
include 'models/control.php';
	  
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
	  
	     <Body background="style/50-Beautiful-and-Minimalist-Presentation-Backgrounds-03.jpg">
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
						xhttp.open("GET","searchplane.php?key="+key,true);
						xhttp.send();
				 }
		  </script>
		 </body>
</html>