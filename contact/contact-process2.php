<?php
$address = "info@minay.az";
if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$error = false;
$fields = array( 'name', 'email', 'message','phone' );

foreach ( $fields as $field ) {
	if ( empty($_POST[$field]) || trim($_POST[$field]) == '' )
		$error = true;
}

if ( !$error ) {

	$name = stripslashes($_POST['name']);
	$email = trim($_POST['email']);	
	$message = stripslashes($_POST['message']);
	$phone = trim($_POST['phone']);

	$e_subject = 'Mesajınız var ' . $name . '.';
	



	$e_body = "Siznən əlaqə saxladılar: $name" . PHP_EOL . PHP_EOL;
	$e_reply = "E-mail: $email" . PHP_EOL . PHP_EOL;
	$e_content = "Mesaj:\r\n$message \r\n Tel: $phone" . PHP_EOL;
	

	$msg = wordwrap( $e_body . $e_reply , 70 );

	$headers = "Kimdən: $email" . PHP_EOL;
	$headers .= "Cavabla: $email" . PHP_EOL;
	$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
	$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

	if(mail($address, $msg, $headers, $e_content  )) {

		// Email göndərildi...
	
		echo 'Success';

	} else {

		echo 'ERROR!';

	}

}

?>