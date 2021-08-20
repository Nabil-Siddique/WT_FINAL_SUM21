<?php
    

session_start();

?>

<html>
<style>
p{
    text-align:justify;
    
    margin: 230px 20px 10px 5px;
    
}
</style>
<Body background="Style/busadd.jpg">
<p>
    <table align = "center">
    
    <th>
    <h1 style="color:black">
    <?php echo "Name: " ?>
    <?php echo $_SESSION["name1"]."<br>"; ?>  
 <?php echo "Phone Number: " ?>
    <?php echo $_SESSION["code1"].""; ?> 
 <?php echo $_SESSION["number1"]."<br>"; ?>	
 <?php echo "Card Info: " ?>
    <?php echo $_SESSION["card1"]."<br>"; ?> 
	<?php echo "Paid: " ?>
	<?php echo $_SESSION["fare1"]*$_COOKIE["noseat1"].""; ?>
	<?php echo " Taka Only " ?>
    
    </h1>
    </th>
    </p>
</table>
    </body>
    </html>
    
    
    
        
        
        