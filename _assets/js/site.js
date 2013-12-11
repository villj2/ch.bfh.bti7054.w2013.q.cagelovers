$('document').ready(function() {
    
    console.log("doc loaded, ready to cage the world");
    
    addListeners();
});

function addListeners(){
    
    $('#bt-make-order').bind('click', function(e) {
        
        e.preventDefault();
        
        if(($('#payment-type-1').is(':checked'))){
            var creditcardName = $('#payment-input-name').val();
            var creditcardNr = $('#payment-input-nr').val();
            
            location.href = "/cagelovers/checkout/payment.php?creditcard=true&name=" + creditcardName + "&nr=" + creditcardNr;
        }
        else if(($('#payment-type-2').is(':checked')))
        {
            location.href = "/cagelovers/checkout/payment.php?bill=true";
        }
        else if(($('#payment-type-3').is(':checked')))
        {
            location.href = "/cagelovers/checkout/payment.php?envelope=true";
        }
        
    });
}
