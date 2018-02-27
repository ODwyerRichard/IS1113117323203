<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECIEPT</title>
        
        <link rel="stylesheet" href="ebus.css" type="text/css" >
        
        
    </head>
    <body>
        <h2 id="reciept-h">Your Reciept</h2> 
        
        
        <div id="cost">
        <?php
        // Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
        </div>
        
        
    </body>
</html>