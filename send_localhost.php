<?php

require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->SMTPDebug = 2;
$mail->isSMTP();
$mail->Host='smtp.hostinger.com';
$mail->Port=465;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Username='contact@insidewebmx.com';
$mail->Password='Linkinpark1';

$mail->setFrom('contact@insidewebmx.com', 'InsideWEB');
$mail->addAddress('contact@insidewebmx.com');
$mail->addReplyTo('contact@insidewebmx.com');

$mail->isHTML(true);
$mail->Subject='Sended from hosting';
$mail->Body='<h1 align=center>Nombre: José Rodrigo<br>Email: jose20.jmmorales@gmail.com<br>Mensaje: This is a test message</h1>';

if (!$mail->send()) {
	echo "we have an error, try again later please";
}
else
{
	echo "Thank you for contact us, wait our answer";
}

?>