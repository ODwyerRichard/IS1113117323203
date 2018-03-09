<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <link rel="stylesheet" href="ebus.css" type="text/css" >
    </head>
    
    <body>
        
        
      
        
            <h4 id="header">Select a Product</h4>
            
            <br/>
            
           <div class="center">
           
            <form method="POST" action="Ebus2.php">
              
              
              
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              <br/>
              <br/>
              
              <label for="cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
              </label>
              
              <br/>
              <br/>
              <br/>
              
              <label for="aws">
                <input type="radio" id="amazon" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Service @ $300
              </label>
              
              <br/>
              <br/>
              <br/>
              
              <label for="gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
            
              
              <br/>
              
              <br/>
              <br/>
              
              
              
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
              </label>
              
              
              
              <br/>
              
              <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="vat">
                Vat @ 10%
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
              </label>
              
              <br/>
              
              
              
              <label for="total">
                Total
                <input type="text" id="total"  name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
              
           
           
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
            
            
            </div>
            
            <img id="gmail-pic" src="Gmail2.jpg" alt="Gmail Picture">
            
            <img id="salesforce-pic" src="salesforce.png" alt="Salesforce Picture">
            
            <img id="AWS-pic" src="amazon.png" alt="Amazon Picture">
            
            <img id="cloud9-pic" src="cloud9.png" alt="Cloud9 Picture">
    
    </body>
</html>