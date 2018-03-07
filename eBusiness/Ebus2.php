<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
        <link rel="stylesheet" href="ebus.css" type="text/css" >
   
    </head>
    
    
    <body>
        
        
        
        
        <h2 id="header2">Please enter your payment details</h2>
        
        
            <form action="eBus3.php" method="POST">

                    
                    <div id="pin">
                    <label for="user_pin">Pin:</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    
                    
                    <label for="user_name">Name</label>
            <input type="name" id="user_name" name="user_name" placeholder="Name" maxlength="35"/>
            
            <br/>
            
            <label for="user_email">Email Address</label>
            <input type="email" id="user_email" name="user_email" placeholder="Joeblogs@example.com" maxlength="40"
            </div>


                <div id="proceed">
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                </div>
           
            </form>
            
            <div id="validate">
            <br/>
            <button onClick="validateDetails()">Validate</button>
            </div>
            
            
            <?php
            // set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
       
        </div>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </body>
</html>