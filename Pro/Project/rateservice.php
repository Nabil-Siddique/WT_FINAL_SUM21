<?php
    require_once "controllers/ratingController.php" ;
?>

<html>
<title>Feedback</title>

<fieldset><legend align="center"><h1>Feedback</h1></legend>
<form action="" method="post">
<form border>
    <fieldset>
    <table align = "center">
    <tr>
                        <td>Name: </td>
                        <td><input type="text" name="fname" value="<?php echo $fname;?>" placeholder="Enter Your Name"></td>
                        <td><span><?php echo $errorfname;?></span></td>
                        
                    </tr>
                    
                
                    
                    <tr>
                        <td>Rating: </td>
                        <td><input type="radio" value="1" <?php if($rating == "1") echo "checked";?> name="rating"> 1 <input <?php if($rating == "1") echo "checked";?> name="rating"  value="1" type="radio"> 2 <input type="radio" id="male" value="3" <?php if($rating == "3") echo "checked";?> name="rating"> 3 <input type="radio" id="male" value="4" <?php if($rating == "4") echo "checked";?> name="rating"> 4 <input type="radio" id="male" value="5" <?php if($rating == "5") echo "checked";?> name="rating"> 5</td>
                        <td><span><?php echo $errorrating;?></span></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" align="center">
                        <input type="submit" name="submit" value="Submit">
                        <td><center><a style="text-decoration:none" href="homepage.php" target="">HOME</a></center></td>
        </td>
    </tr>
                            
</table>
    </fieldset>
    </form>
    </fieldset>
    
    </body>
</html>