<?php
    

session_start();

?>

<html>
<table align="center">
   <tr>
       <td><h1><a  style="text-decoration:none" href="homepage.php" target="_self" >Home &nbsp</a><h1></td>

       <td> <h1><a  style="text-decoration:none" href="paymentway.php" target="_self" >Payment Home &nbsp</a><h1></td>
        <td> <h1><a  style="text-decoration:none" href="ticketBus.php" target="_self" >Download Ticket &nbsp</a><h1></td>
   </tr>
    </table>

<style>
p{
    text-align:justify;
    
    margin:10px 20px 10px 5px;
    
}
</style>
<body>
<p>
    <table align = "center">
    
    <th>
    <h2 style="color:black">
    <?php echo "Name: " ?>
    <?php echo $_SESSION["name1"]."<br>"; ?>   
    <?php echo "Phone Number: " ?>
    <?php echo $_SESSION["code1"]; ?> 
    <?php echo $_SESSION["number1"]."<br>"; ?>
    <?php echo "DATE: " ?>
    <?php echo $_SESSION["day1"]."/"; ?>
    <?php echo $_SESSION["month1"]."/"; ?>
    <?php echo $_SESSION["year1"]."<br>"; ?>
    <?php echo "Card Number: " ?>
    <?php echo $_SESSION["card1"]."<br>"; ?>
    
    </h2>
    </th>
    </p>
</table>
    </body>
    </html>
    
    
    
        
        
        