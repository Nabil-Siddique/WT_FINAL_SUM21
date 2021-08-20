<?php

require_once "controllers/busController.php" ;
$id = $_GET["id"];
$bus = getbuses($id) ;
?>

<html>
      <head>
	  <title>Remove Bus</title>
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
        <legend align="center"><h1>Remove Bus</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			         
			   <tr>
			         <td><input type="hidden" name="id" value="<?php echo $bus["id"];?>"></td> 
					 </tr>
					    
                     <tr>
				           <td><span><b>bname:<b></span></td>
					       <td><input type="text" name="bname" value="<?php echo $bus["bname"];?>" placeholder="Bus Name"><br>
						    <span><?php echo $err_bname;?></span></td>
			          </tr>

				        
					   
				        
					    <tr>
				             <td><input type="submit" name="remove_bus" value="Remove Bus"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		  </fieldset>
		 </body>
		 
</html>