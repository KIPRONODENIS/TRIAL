<?php
namespace trial;

class sendmessage {

public static function sendmessage($phone){

	$nexmo=app('Nexmo\client');
	$nexmo->message()->send([
      'to'=>"+254".int($phone),


      'from'=>"+254799012907",

      'message'=>'Hello world.',

	]);
}



}