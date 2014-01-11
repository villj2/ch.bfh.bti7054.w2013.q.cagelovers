$('document').ready(function() {
    
    console.log("doc loaded, ready to cage the world");
    
    addListeners();
    
    showAlerts();
});

function addListeners(){
    
    $('#bt-make-order').bind('click', function(e) {
        
        e.preventDefault();
        
        if(($('#payment-type-1').is(':checked'))){
            var creditcardName = $('#payment-input-name').val();
            var creditcardNr = $('#payment-input-nr').val();
            
            if(($('#shipment-type-1').is(':checked')))
            {
                location.href = "/cagelovers/checkout/payment.php?creditcard=true&name=" + creditcardName + "&nr=" + creditcardNr+"&express=true";
            }
            else if(($('#shipment-type-2').is(':checked')))
            {
                location.href = "/cagelovers/checkout/payment.php?creditcard=true&name=" + creditcardName + "&nr=" + creditcardNr+"&apost=true"
            }
            else if(($('#shipment-type-3').is(':checked')))
            {
                location.href = "/cagelovers/checkout/payment.php?creditcard=true&name=" + creditcardName + "&nr=" + creditcardNr+"&bpost=true"
            }            
            
        }
        else if(($('#payment-type-2').is(':checked')))
        {
            if(($('#shipment-type-1').is(':checked')))
            {
                location.href = "/cagelovers/checkout/payment.php?bill=true&express=true";
            }
            else if(($('#shipment-type-2').is(':checked')))
            {
                 location.href = "/cagelovers/checkout/payment.php?bill=true&apost=true";
            }
            else if(($('#shipment-type-3').is(':checked')))
            {
                 location.href = "/cagelovers/checkout/payment.php?bill=true&bpost=true";
            }
        }
        else if(($('#payment-type-3').is(':checked')))
        {
            
            if(($('#shipment-type-1').is(':checked')))
            {
                location.href = "/cagelovers/checkout/payment.php?envelope=true&express=true";
            }
            else if(($('#shipment-type-2').is(':checked')))
            {
                 location.href = "/cagelovers/checkout/payment.php?envelope=true&apost=true";
            }
            else if(($('#shipment-type-3').is(':checked')))
            {
                 location.href = "/cagelovers/checkout/payment.php?envelope=true&bpost=true";
            }            
        }
        

        
    });
    
    $('#bt-logout').bind('click', function(e) {
       
       e.preventDefault();
       
       $.ajax({ url: '/cagelovers/profile/index.php',
         data: {logout: 'true'},
         type: 'post',
         success: function(output) {
                      //console.log(output);
                      
                      location.href = "/cagelovers/";
                  }
           });
        
    });
}

function showAlerts() {
    
    if($('.alert-info').length > 0) {
        alert($('.alert-info').text());
    }
}