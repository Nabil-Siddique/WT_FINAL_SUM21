<?php
	require_once "controllers/feedbackController.php" ;
?>


<html>
	<link rel="stylesheet" href="styles/mystyle.css">
	<body class="f1">
	
      <head>
	  <title>Send Your feedback</title>
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
	<div class="login-div">
		<fieldset>
		<legend align="center"><h1>Account Registration</h1></legend>
	<form action="" onsubmit="return validateFeedback()" method="post">
			<table align="center"> 
			<h2 align="center">Send Your feedback</h2>	
				<tr>
					<td><span><b>First Name:<b></span></td>
					<td>:<input type="text" id="fname" name="fname" value="<?php echo $fname;?>" placeholder="First Name">
					<span id="err_fname"> </span> <span><?php echo $err_fname;?></span> </td>
				</tr>
				<tr>
					<td><span><b>Last Name:</b></span></td>
					<td>:<input type="text" name="lname" id="lname" value="<?php echo $lname;?>" placeholder="Last Name">
					<span id="err_lname"></span> <span><?php echo $err_lname;?></span> </td>
				</tr>
				
				<tr>
					<td><span><b>Email:</b></span></td>
					<td><input type="text" value="<?php echo $email;?>" name="email" id="email" placeholder="Mail Address">
					<span id="err_email"></span> <span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Feedback:</b></span></td>
					<td>:<input type="text" name="feedback" id="feedback" value="<?php echo $feedback;?>" placeholder="Send feedback">
					<span id="err_feedback"></span> <span><?php echo $err_feedback;?></span> </td>
				</tr>
				<tr>
					<td><input type="submit" name="feedback" value="Feedback"></td>
					<td><center><a style="text-decoration:none" href="homepage.php" target="">HOME</a></center></td>
				</tr>
			</table>
	</form>	
	</fieldset>
	</div>
	</body>
	<body>
	<script src="JS/feedbackValidation.js"></script>
 </html>