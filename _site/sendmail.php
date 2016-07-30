<?php
if (isset($_POST['name'])) {
$myemail = 'hi@moritzpfeiffer.xyz';
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['text']);

$to = $myemail;
$email_subject = "Neue Webseiten-Anfrage von: $name";
$email_body = "Name: $name\n".
"Email: $email\n".
"Nachricht: $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email";
$mail = mail($to,$email_subject,$email_body,$headers);
if($mail){
	$change = array('status' => 'success', 'text' => 'Thank you for using our mail form');
	echo json_encode($change);
}else{
	$change = array('status' => 'error', 'text' => 'An error occurred');
	echo json_encode($change);
}
}
else{
	$change = array('status' => 'error', 'text' => 'An error occurred');
	echo json_encode($change);
}?>
