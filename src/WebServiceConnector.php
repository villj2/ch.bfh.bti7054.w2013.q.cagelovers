<?php


    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    $client = new SoapClient("$root/cagelovers/src/ext/ws/ask.wsdl");
    
   
    
    $client->__setLocation("http://peopleask.ooz.ie/soap");
    //$client->__soapCall("GetQuestionAbout","Nicolas Cage","",$resp);
  
    //echo $resp;
    //$request = array('query' => 'Nicolas Cage');
    
    
    $result = $client->GetQuestionsAbout(array('query'=>'Nicolas Cage'));
    
    $array = $result->GetQuestionsAboutResponse->GetQuestionsAboutSoapOut;
    print_r($array);
    
    foreach ($result->Questions as  &$Val) {
        echo $Val;
    
}
    
    //echo "1\n".$result."2\n";
    //print_r($request);  
    //print_r($result);
    //print_r($result->GetQuestionsAboutResponse);
   // $array = $result->GetQuestionsAboutResponse->GetQuestionsAbout;
    //$resp = $client->__soapCall("GetQuestionsAbout",$request);
    
    //print_r($array);
    
    //$client = new SoapClient("http://footballpool.dataaccess.eu/data/info.wso?wsdl");
    
    
    //$result = $client->TopGoalScorers(array('iTopN' => 5));
	  // Note that $array contains the result of the traversed object structure
	/*  $array = $result->TopGoalScorersResult->tTopGoalScorer;
	 
	  print "
	    <table border='2'>
	      <tr>
	        <th>Rank</th>
	        <th>Name</th>
	        <th>Goals</th>
	      </tr>
	  ";
	   
	  foreach($array as $k=>$v){
	    print "
	      <tr>
	        <td align='right'>" . ($k+1) . "</td>
	          <td>" . $v->sName . "</td>
	          <td align='right'>" . $v->iGoals . "</td>
	        </tr>";
	  }
         * */
         
    
?>
