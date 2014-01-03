<?php


    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    $client = new SoapClient("$root/cagelovers/src/ext/ws/ask.wsdl");
    
    echo "dani-----------";
   
    
    
    $client->__setLocation("http://peopleask.ooz.ie/soap");
    //$client->__soapCall("GetQuestionAbout","Nicolas Cage","",$resp);
  
    //echo $resp;
    //$request = array('query' => 'Nicolas Cage');
    
    
    //$resp = $client->GetQuestionsAbout($request);
    //$resp = $client->__soapCall("GetQuestionsAbout",$request);
    
    //print_r($client->__getFunctions());
    

    
?>
