<?php

$firstname = isset($_POST['firstname'])  ?  $_POST['firstname'] : null ;
$lastname  = isset($_POST['lastname'])   ?  $_POST['lastname']  : null ;
$email     = isset($_POST['email'])      ?  $_POST['email']     : null ;
$phone     = isset($_POST['phone'])      ?  $_POST['phone']     : null ;
$sendto    = isset($_POST['sendto'])     ?  $_POST['sendto']    : null ;
$object    = isset($_POST['object'])     ?  $_POST['object']    : null ;

if($firstname != null && $lastname != null && $email != null && $phone != null && $sendto != null && $object != null ) {
	$header = "From: ".$object." \n";

	$content =  "Firstname : " . "\n" . $firstname . "\n" . "\n".
				"Lastname : "  . "\n" . $lastname  . "\n" . "\n".
				"Email : "     . "\n" . $email     . "\n" . "\n".
				"Phone : "     . "\n" . $phone     . "\n" . "\n";

	mail($sendto, $object, $content, $header);
}