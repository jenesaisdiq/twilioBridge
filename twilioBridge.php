<?php
    
    $coreID = '53ff67066667574854462467';
    

    //$parsedMsg = preg_split("/[\s,]+/",$_REQUEST['Body']);
    $message = $_REQUEST['Body'];
 
    // if the sender is known, then greet them by name
    // otherwise, consider them just another monkey
    /*$pos = strpos($parsedMsg[0], '@');
    if($pos !== false) {      //first term was the email
        $email = $parsedMsg[0];
        if(count($parsedMsg) > 1){
          $photo = $parsedMsg[1];   
        }
        $noEmailFlag = 0;
    } else if (strpos($parsedMsg[1], '@') !== false){
        $email = $parsedMsg[1];
        $photo = $parsedMsg[0];
        $noEmailFlag = 0;
    }
    else {
        $noEmailFlag = 1;
    }*/

    /*$fp = fopen("data.txt", "a"); 
    fwrite($fp, ($_REQUEST['From']. " said " . $message . "\r\n")); 
    //fwrite($fp, "\n";
    fclose($fp); */
    
     
    //$photo = '3';   //hardcoded for testing

    
    $fields = array(
        'access_token'  => 'da30fea964c5ec5004f2fae056100fa924887b46',
        'args'          => $message,
    );


    
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

    //if ($noEmailFlag == 0) {
        $response = http_post_fields("https://api.spark.io/v1/devices/".$coreID."/message", $fields);
        echo "<Response>";
        echo "<Sms>Look up!</Sms>";
        echo "</Response>";
    //}
    /*else if ($noEmailFlag == 1) {
        echo "<Response>";
        echo "<Sms>I'm sorry, I didn't catch your email... would you please send your message again, including your email?  Your photos want to see you, too!</Sms>";
        echo "</Response>";

    }*/
    
?>