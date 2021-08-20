<?php
	include 'controllers/mng_control.php';
?>
<?php
	
	$key = $_GET["key"];
	$products = search($key);
	
	
	if(count($products) > 0){
		foreach($products as $p){
			echo '<p align="center">'.$p['Offer_Name'].'<a href="UpdateOffer.php?id='.$p['ID'].'"><button class="button1">Update</button></a></p><br>';
			
			
			
		}}
	
?>