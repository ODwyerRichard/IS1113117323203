/* global $ */

function calcSub(){

var argSubTotal;

if(document.getElementByID('salesforce').checked){
    argSubTotal = 100;
}
else{
    argSubTotal = 300;
}

display(argSubTotal);
}

function display(parm1){
    
    document.getElementByID("subtotal").value = parm1;
    document.getElementByID("Total").value = parm1;
    
    enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}