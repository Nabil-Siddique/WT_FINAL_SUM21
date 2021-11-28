<style>
    .S {
        font-size:20px;
        transition:0.5s all ease;
    }
    .S:hover{
        color:green;

    }   
</style>

<?php
	require_once "controllers/busController.php" ;
	$key = $_GET["key"];
    $buses = searchBus($key) ;
    foreach($buses as $bus)
    {
        
          echo '<a class="S" style="text-decoration:none;" href="updateBus.php?id='.$bus["id"].'">
          '.$bus["dstation"].''.$bus["astation"].'</a><br/>';
    }
?>  