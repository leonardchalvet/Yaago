<?php
require_once '../vendor/autoload.php';

$firstname = isset($_POST['firstname'])  ?  $_POST['firstname'] : null ;
$lastname  = isset($_POST['lastname'])   ?  $_POST['lastname']  : null ;
$email     = isset($_POST['email'])      ?  $_POST['email']     : null ;
$phone     = isset($_POST['phone'])      ?  $_POST['phone']     : null ;
$sendto    = isset($_POST['sendto'])     ?  $_POST['sendto']    : null ;
$object    = isset($_POST['object'])     ?  $_POST['object']    : null ;

if($firstname != null && $lastname != null && $email != null && $phone != null && $sendto != null && $object != null ) {
	/*
	$header = "From: ".$object." \n";
	$content =  "Firstname : " . "\n" . $firstname . "\n" . "\n".
				"Lastname : "  . "\n" . $lastname  . "\n" . "\n".
				"Email : "     . "\n" . $email     . "\n" . "\n".
				"Phone : "     . "\n" . $phone     . "\n" . "\n";
	mail($sendto, $object, $content, $header);
	*/
	
	$ac = new ActiveCampaign("https://infine.api-us1.com", "7a7919c41e38f8b803424bcf45b7262855f74bca27ec9be62e232ad2d3784ffe5877264a");
	$contact = array(
		"email"              => $email,
		"first_name"         => $firstname,
		"last_name"          => $lastname,
		"tags"      => "livre-blanc"
	);

	$contact_sync = $ac->api("contact/sync", $contact);

}