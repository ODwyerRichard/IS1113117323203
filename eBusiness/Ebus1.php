<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    <link rel="stylesheet" href="ebus.css" type="text/css" >


    </head>
    
    <body>
        
        <ul>
          <li><a href= "homepage.html" class="active">Home</a></li>
          <li><a href="cv_page1.html">Curriculum Vitae</a></li>
          <li><a href="Interests.html">Interests</a></li>
          <li><a href="Cloud-Homepage.html">Cloud Services</a></li>
        </ul> 
        
        
        
            <h2 id="select-h">Select a Product</h2>
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
              
              
              
              
              
              
              <div id="radio-b">
               <input type="radio" id="salesforce" name="product" onClick="disablebtnProceed()"/>
               Salesforce - $100<br/>
                
              <br/>
              <br/>
              
               <input type="radio" id="Cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud9 - $300<br/>
              
              
              <br/>
               <br/>
              
                <input type="radio" id="aws" name="product" checked onClick="disablebtnProceed()"/>
                Amazon Web Services (AWS) - $300<br/>
              
              <br/>
               <br/>
              
                <input type="radio" id="Gmail" name="product" onClick="disablebtnProceed()"/>
                 Gmail - $400<br/>
                 </div>
             
              
              <div><img id="salesforce-pic" src="salesforce.png" alt="Salesforce Picture"></div>
              
              <div><img id="cloud9-pic" src="cloud9.png" alt="Cloud9 Picture"></div>
              
              <div><img id="AWS-pic" src="amazon.png" alt="Amazon Picture"></div>
              
              <div><img id="gmail-pic" src="Gmail2.jpg" alt="Gmail Picture"></div>
              
              
              
              <br/>
              <br/>
              
             
              
             
             
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
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
            
    
    </body>
</html>