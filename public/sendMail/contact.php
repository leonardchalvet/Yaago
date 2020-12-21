<?php

$firstname = isset($_POST['firstname'])  ?  $_POST['firstname'] : null ;
$lastname  = isset($_POST['lastname'])   ?  $_POST['lastname']  : null ;
$email     = isset($_POST['email'])      ?  $_POST['email']     : null ;
$message   = isset($_POST['message'])    ?  $_POST['message']   : null ;
$sendto    = isset($_POST['sendto'])     ?  $_POST['sendto']    : null ;

if($firstname != null && $lastname != null && $email != null && $message != null && $sendto != null ) {
	$header = "From: ".$email." \n";

	$content =  "Firstname : " . "\n" . $firstname . "\n" . "\n".
				"Lastname : "  . "\n" . $lastname  . "\n" . "\n".
				"Email : "     . "\n" . $email     . "\n" . "\n".
				"Message : "   . "\n" . $message   . "\n" . "\n";

	mail($sendto, 'CONTACT', $content, $header);
}