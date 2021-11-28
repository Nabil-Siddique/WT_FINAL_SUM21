<?php
include 'models/db_config.php';

$fname="";
$errorfname="";

$tf="";
$errortf="";

$tt="";
$errortt=""; 


$rating="";
$errorrating="";
$err=false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["fname"])){
            $errorfname="Name Required";
            $err = true;
        }
        else if(strlen($_POST["fname"]) <=2){
            $errorfname="Name Must be greater than 2";
            $err = true;
        }
        else{
            $fname=$_POST["fname"];
        }

        if(empty($_POST["tf"])){
            $errortf="Place Required";
            $err=true;
        }    
        else{
            $tf=$_POST["tf"];

        if(empty($_POST["tt"])){
            $errortt="Place Name Required";
            $err=true;
        }    
        else{
            $tt=$_POST["tt"];
        }
        if (!isset($_POST["rating"])){
            
                $errorrating="Please select rating,";
                    $err=true;
        }
        else{
            $rating=$_POST["rating"];
        }
        if(!$err){
          echo "Feedback submitted successfully. Thanks for your feedback"; 
        }
}
        
        
?>

<html>
<title>Feedback</title>
<head>
</head>
<fieldset><legend align="center"><h1>Rating</h1></legend>
<form action="" method="post">
<form border>
    <fieldset>
    <table align = "center">
                    <tr>
                        <td>BUS Name: </td>
                        <td><input type="text" name="fname" value="<?php echo $fname;?>" placeholder="Bus Name"></td>
                        <td><span><?php echo $errorfname;?></span></td>
                        
                    </tr>
                    <tr>
                        <td>Travelled From: </td>
                        <td><input type="text" name="tf" value="<?php echo $tf;?>" placeholder="From"></td>
                        <td><span><?php echo $errortf;?></span></td>
                        
                    </tr>
                    <tr>
                        <td>Travelled TO </td>
                        <td><input type="text" name="tt" value="<?php echo $tt;?>" placeholder="To"></td>
                        <td><span><?php echo $errortt;?></span></td>
                        
                    </tr>
                    
                    <tr>
                        <td>Feedback:  </td>
                        <td>
                            <textarea name="feedback"><?php echo $feedback;?></textarea>
                        </td>
                        <td><span><?php echo $errorfeedback;?></span></td>
                    </tr>
                    
                    
                    <tr>
                        <td>Rating: </td>
                        <td><input type="radio" value="1" <?php if($rating == "1") echo "checked";?> name="rating"> 1 <input <?php if($rating == "1") echo "checked";?> name="rating"  value="1" type="radio"> 2 <input type="radio" id="male" value="3" <?php if($rating == "3") echo "checked";?> name="rating"> 3 <input type="radio" id="male" value="4" <?php if($rating == "4") echo "checked";?> name="rating"> 4 <input type="radio" id="male" value="5" <?php if($rating == "5") echo "checked";?> name="rating"> 5</td>
                        <td><span><?php echo $errorrating;?></span></td>
                    </tr>
                    
                    <tr>
        <td colspan="3" align="center">
            <input type="submit" name="submit" value="Submit">
        </td>
    </tr>
                            
</table>
    </fieldset>
    </form>
    </fieldset>
    
    </body>
</html>