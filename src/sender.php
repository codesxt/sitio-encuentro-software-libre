<?php
/*
 **************************************
 *									  *
 * Config here                        *
 *									  *
 **************************************
 */

$to = 'bcastro@ucm.cl';
$siteName = "ENCUENTRO LINUX UCM 2015";

/*
 *************************************************************
 *									                         *
 *      Don't Change below code, if you don't know php.      *
 *									                         *
 *************************************************************
 */

$name = $_POST['fname'];
$mail = $_POST['email'];
$subject = $_POST['subj'];
$message = $_POST['mssg'];

if (isset($name) && isset($mail) && isset($message)) {


	$mailSub = '[Contact] [' . $siteName . '] '.$subject;

	$body = 'Nombre del asistente: ' . $name . "\n\n";
	$body .= 'Correo: ' . $mail . "\n\n";
	$body .= 'Institución: ' . $subject . "\n\n";
	$body .= 'Otros: ' . $message;

	$header = 'From: ' . $mail . "\r\n";
	$header .= 'Reply-To:  ' . $mail . "\r\n";
	$header .= 'X-Mailer: PHP/' . phpversion();

	echo mail($to, $mailSub, $body, $header);
}else{
	echo '0';
}
?>
