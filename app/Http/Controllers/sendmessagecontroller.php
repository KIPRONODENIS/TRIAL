<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;

use trial\sendmessage;

use AfricasTalkingGateway\AfricasTalkingGateway;

class sendmessagecontroller extends Controller
{
   public function send(){

   	    
    // Be sure to include the file you've just downloaded
    
    // Specify your authentication credentials
    $username   = "bora";
    $apikey     = "f2b5fc5ff341a6f414033de0df8e845780856946a1e4ad3384180dfa5734ce29";
 
// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)
$recipients = "+254705671707";

// And of course we want our recipients to know what we really do
$message    = "I'm a lumberjack and its ok, I sleep all night and I work all day";

// Create a new instance of the gateway class
$gateway    = new AfricasTalkingGateway($username, $apikey);

// Any gateway error will be captured by the custom Exception class below, 
// so wrap the call in a try-catch block
try 
{

    $results = $gateway->sendMessage($recipients, $message);
            
    foreach( $results as $result ) {
    
        // status is either "Success" or "error message"
        echo " Number: " .$result->number;
        echo " Status: " .$result->status;
        echo " MessageId: " .$result->messageId;
        echo " Cost: "   .$result->cost."\n";
    
    }

}
catch ( AfricasTalkingGatewayException $e )
{

    echo "Encountered an error while sending: ".$e->getMessage();

}


   }
}
