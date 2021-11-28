<?php
    require_once "controllers/busController.php" ;
?>

<html>

      <head>
      <title>Add Buses</title>
          <style>
          .adduser-div
                {
                    
                border:1px solid black;
                margin:auto;
                width:30%;
                margin-top:13%;
                
                }
          
           </style>
      <head>
      
         <body>
         <div class="adduser-div">
      <fieldset>
        <legend align="center"><h1>Add Buses</h1></legend>
         
            <form action="" method="post" onsubmit="return validateBus()">
               <table align="center">
                       <tr>
                            <td><span><b>Bus Name:</b></span></td>
                            <td><input type="text" id="bname" name="bname" value="<?php echo $bname;?>" size="" placeholder="bus Name"><br>
                            <span id="err_bname"><?php echo $err_bname;?></span></td>
                        </tr>
                        
                         <tr>
                            <td><span><b>Departure Station:</b></span></td>
                            <td><input type="text" id="dstation" name="dstation" value="<?php echo $dstation;?>" size="" placeholder="Departure Station"><br>
                            <span id="err_dstation"><?php echo $err_dstation;?></span></td>
                        </tr>
                        <tr>
                            <td><span><b>Arrival Station:</b></span></td>
                            <td><input type="text" id="astation" name="astation" value="<?php echo $astation;?>" size="" placeholder="Arrival Station"><br>
                            <span id="err_astation"><?php echo $err_astation;?></span></td>
                        </tr>
                        <tr>
                            <td><span><b>Via Station:</b></span></td>
                            <td><input type="text" id="vstation" name="vstation" value="<?php echo $vstation;?>" size="" placeholder="Via Station"><br>
                            <span id="err_vstation"><?php echo $err_vstation;?></span></td>
                        </tr>
                         <tr>
                            <td><span><b>Departure Time:</b></span></td>
                            <td><input type="text" id="dtime" name="dtime" value="<?php echo $dtime;?>" size="" placeholder="Departure Time"><br>
                            <span id="err_dtime"><?php echo $err_dtime;?></span></td>
                        </tr>
                       <tr>
                            <td><span><b>Arrival Time:</b></span></td>
                            <td><input type="text" id="atime" name="atime" value="<?php echo $atime;?>" size="" placeholder="Arrival Time"><br>
                            <span id="err_atime"><?php echo $err_atime;?></span></td>
                        </tr>
                       
                       
                
                     <tr>
                               <td><span><b>Rent:</b></span></td>
                               <td><input type="text" size="" id="rent" name="rent" value="<?php echo $rent;?>" placeholder="Rent"><br>
                                <span id="err_rent"><?php echo $err_rent;?></span></td>
                    </tr>   
                    

                    
                       
                        
                        <tr>
                             <td><input type="submit" name="bus" value="Add Buses"></td>
                            <td><a style="text-decoration:none" href="allBus.php">See buses &nbsp</a> </td> 

                        </tr>    
                            
                           
                </table>
             </form>
             <div>
         </fieldset>

         

         </body>
         <script src="JS/addbusValidation.js"></script> 
</html>