
<?php
      session_start();
      require_once "controllers/busController.php" ;
	$buses = getAllbuses() ;
?>
<html>
  



	<link rel="stylesheet" href="styles/mystyle.css">
	<style>
	body {
  		background-image: url('style/bus.jpg');
  		background-repeat: no-repeat;
  		background-attachment: fixed;
  		background-size: cover;
}
	</style>
		   
        <body class="h1">
        	
		    <center><h1 class="h1">HOMEPAGE</h1><center>
			<?php 
				echo "<b> WELLCOME</b> ";
				echo " ";
				echo $_SESSION["Name"]; 
			?>

			<table></table>


		    <h1>
			<tr> 
			<td><a href="logIn.php" class="btn-link">Log Out</a></td>
			<td><a href="rateservice.php" class="btn-link">Service Rating</a></td>
			<td><a href="feedback.php" class="btn-link">Feedback</a></td>
			<td><a href="allBus.php" class="btn-link">View Buses</a></td>

			</h1>
			 </tr>
			</table>
			<table align = "center">
		<tr>
			  <td> 
				From
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
		<tr>
			  <td> 
				To
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
	
	
				<tr>
					<td align="center">
						<input type="submit" name="availablebus" class="btn-link2" value="Search Bus">
					</td>
				</tr>
	</table>
	
			
	           
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
						xhttp.open("GET","SearchForbus.php?key="+key,true);
						xhttp.send();
				 }
		  </script>	   
        </body>

</html>
