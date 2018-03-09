<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECIEPT</title>
        
        <!--formats window-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--specify character encoding-->
         <meta charset="UTF-8">
        
        <!--csss link-->
        <link rel="stylesheet" href="ebus.css" type="text/css" >
        
        
    </head>
    <body>
        <h2 id="reciept-h">Your Reciept</h2> 
        
      
        
         <?php
            // set session variables
            $_SESSION["user_name"] = $_POST["user_name"];
            $_SESSION["user_email"] = $_POST["user_email"];
            ?>
        
        
        <!--Page content-->
       
        <div id="name_r">
        <?php
        // Echo session variables that were set on previous page
        echo "Customer Name: " . $_SESSION["user_name"] . ".";
        ?>
        </div>
        
        
        
        <br/>
        
        
        <div id="email_r">
        <?php
        echo "Customer Email Address: " . $_SESSION["user_email"] . ".";
        ?>
        </div>
        
        
        
        <br/>
        
        
        <div id="cost">
        <?php
        // Echo session variables that were set on previous page
        echo "Your Total is " . $_SESSION["total"] . ".";
        ?>
        </div>
        
        <!--page content-->
        <div id="thanks">
            <p>thank you for  shopping with Richards Cloud Store!</p>
        </div>
        
       
        
        
    </body>
</html>