<?php


    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    $client = new SoapClient("$root/cagelovers/src/ext/ws/QuoteOfTheDay.wsdl");
    
   
    
    $client->__setLocation("http://www.swanandmokashi.com/HomePage/WebServices/QuoteOfTheDay.asmx");
    //$client->__soapCall("GetQuestionAbout","Nicolas Cage","",$resp);
  
    //echo $resp;
    //$request = array('query' => 'Nicolas Cage');
    
    
    $result = $client->GetQuote();
    
    $array = $result->GetQuoteResult;
    //print_r($array);
    
    //var_dump($array);

    print "<div>" . $array->QuoteOfTheDay  . "</div>
          <div>" . $array->Author. "</div>";
         
    
?>
