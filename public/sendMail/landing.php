<?php

$email    = isset($_POST['email'])   ?  $_POST['email']   : null ;
$sendto   = isset($_POST['sendto'])  ?  $_POST['sendto']  : null ;
$object   = isset($_POST['object'])  ?  $_POST['object']  : null ;

if($email != null && $sendto != null && $object != null ) {
	$header = "From: ".$email." \n";

	// $content =  "Email : "    . "\n" . $email    . "\n" . "\n";
    $content =  $email;
	mail($sendto, $object, $content, $header);
}
