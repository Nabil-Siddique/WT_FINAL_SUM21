<?php 
include 'controllers/ServiceController.php';?>
<?php 


$id= $_GET["id"];
$servicer=getServiceForReport($id);

?>

<html><head><title>GENERATE REPORT</title> 


<link rel="stylesheet" href="style/myStyle.css">


	
	</head>
	<html><br><br><a href="AdminDashboard.php">GO BACK TO ADMIN DASHBOARD</a>	
	<body><div class="img-container"><img  width="100px" height="100px" src="style/images.jpg"></div>
	<div class="name"><h3>TICKET MANAGEMENT SYSTEM OFFICIAL CUSTOMER SERVICE REPORT</h3></div>
	
	
<fieldset>
<form> <table><table>

<p>TICKET MANAGEMENT SYSTEM is a company founded in 2012,with one goal in mind which is to make lives easier.As 
a technology first company, we develop tech-driven solutions for the everyday challenges of Bangladeshi people. 
Our on-demand service platform provides all the customer care must haves which are
a digital marketplace, speedy logistical support and a customer support call center.
We empower our people by solving and simplifying their daily needs problem and let them enjoy life. </p>

<p>The following report mentions the services requested, and their request status, which maybe pending,accepted or rejected.
After successful acceptance of your services you will be able to enjoy your service within the next 24hours. However,if
your services are rejected,then unfortunately you will have to apply again or if your services are on pending status, then you will have to wait 
for atleast 48hours.</p>

<h3>Below are your results:</h3>
	
<tr><td>No.</td>
<td>SERVICE 1</td>
<td>SERVICE 2</td>
<td>SERVICE 3</td>
<td>REQUEST</td>

</tr>

<?php
$i=1;
foreach($servicer as $sr){
 
echo "<tr>";
		                 	echo "<td>$i</td>";
							echo "<td>".$sr["Service1"]."</td>";
							echo "<td>".$sr["Service2"]."</td>";
							echo "<td>".$sr["Service3"]."</td>";
							echo "<td>".$sr["Request"]."</td>";
						     echo "</tr>";
				        $i++;
				echo "</tr>";		
}
?>
</table></form></fieldset>


<h5>Report Created By:</h5>
<div class="sign"><img  width="120px" height="50px" src="style/download.png"></div>

<p><b>Admin</p>







<p align="center"><button onclick="window.print()" >Download Report</button></p>
</body></html>

