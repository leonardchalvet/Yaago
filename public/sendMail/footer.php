<?php

$email    = isset($_POST['email'])   ?  $_POST['email']   : null ;
$sendto   = isset($_POST['sendto'])  ?  $_POST['sendto']  : null ;
$goto     = isset($_POST['goto'])    ?  $_POST['goto']    : null ;

if($email != null && $sendto != null && $goto != null ) {
	$header = "From: ".$email." \n";

	$content =  "Email : "    . "\n" . $email    . "\n" . "\n";

	mail($sendto, 'CONTACT - FOOTER', $content, $header);
}

header('Location: ' .$goto);