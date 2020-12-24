<?php

$email    = isset($_POST['email'])   ?  $_POST['email']   : null ;
$sendto   = isset($_POST['sendto'])  ?  $_POST['sendto']  : null ;
$object   = isset($_POST['object'])  ?  $_POST['object']  : null ;
$goto     = isset($_POST['goto'])    ?  $_POST['goto']    : null ;

if($email != null && $sendto != null && $object != null && $goto != null ) {
	$header = "From: ".$email." \n";

	$content =  "Email : "    . "\n" . $email    . "\n" . "\n";

	mail($sendto, $object, $content, $header);
}

header('Location: ' .$goto);