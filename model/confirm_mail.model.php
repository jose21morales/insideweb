<?php

class Verify_mail {
	private $msg;

	public function __construct() {
		$this->msg = [];
	}

	public function getVerify() {
		require("conexion.php");
		$conexion = Conectar::conexion();

		$server_smtp = 'smtp.hostinger.com';
		$server_imap = 'imap.hostinger.com';
		$email_account = 'contact@insidewebmx.com';
		$email_password = 'Linkinpark1';

		require '../phpmailer/PHPMailerAutoload.php';


		if (isset($_POST['btn-confirm']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
		$code = htmlentities(addslashes($_POST['code']), ENT_QUOTES);

			if (empty($code)) {
				$this->msg['code_empty'] = 'Campo vacio';
			} else {

		        $sql = "SELECT name, mail, code FROM users WHERE code = :code";
		        $statements = $conexion->prepare($sql);
		        $statements->bindValue(":code", $code);
		        $statements->execute();

		        $row_count = $statements->rowCount();
		        $row = $statements->fetch(PDO::FETCH_ASSOC);

		        if ($row_count != 0) {

			        $sql = "UPDATE users SET verify_mail = 1 WHERE code = :code";
			        $statements = $conexion->prepare($sql);
			        $statements->bindValue(":code", $code);
			        $statements->execute();

				$mail = new PHPMailer;
				$mail->isSMTP();
				$mail->SMTPDebug = 0;

				$mail->Host=$server_smtp;
				$mail->Port=465;#587
				$mail->SMTPAuth=true;
				$mail->SMTPSecure='ssl';#tls
				$mail->Username=$email_account;
				$mail->Password=$email_password;

				$mail->setFrom($email_account, 'InsideWEB');
				#$mail->addReplyTo($email_account, "");
				$mail->addAddress($row['mail']);

				$mail->isHTML(true);
				$mail->CharSet = 'UTF-8';
				$mail->Subject='Correo confirmado exitosamente | InsideWEB';
				$mail->Body='				<!DOCTYPE html>
				<html lang="en">
				<head>
				  	<meta charset="utf-8">
				  	<meta http-equiv="Content-Type" content="text/html">
					<meta name="viewport" content="width=device-width,initial-scale=1">
					<meta name="x-apple-disable-message-reformatting">
					<title></title>
				<style>
								* {
									margin:0;
									padding:0;
								}
								/* LOGOTIPO */

								.logo-letter2 {
								  font-size: 28px;
								  color: #fff;
								}

								/* FIN DE LOGOTIPO */
								h3, p {
									font-family: Arial;
								}
								.content_txt, footer {
									color:rgb(230,230,230);
								}
								.content_txt {
									line-height:30px;
								}
								.button_p {
									margin-top:20px;
								}
								.button_link {
									padding:;
									border-radius:;
									background:;
									color:;
									text-decoration:;
								}
								.button_link:hover {
									background:rgb(0,70,255);
								}
								.cover_title,.cover_txt {
									text-align:center;
								}
							</style>
				</head>
				<body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
					<div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:rgb(100,100,100);">

					<table role="presentation" style="width:100%;border:none;border-spacing:0;">
					  <tr>
						<td align="center" style="padding:0;">
						  <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#fff;margin-bottom: 10px;">
							<tr>
							  <td style="padding:10px 0px 0px 0px;text-align:center;font-size:24px;font-weight:bold;">
								<div class="container_bg" style="background-image: linear-gradient(to right top,rgb(100,150,230) 50%,rgb(80,130,190) 50%);height: 230px;padding: 20px;box-sizing: border-box;">

								    <div class="logo-container" style="display: flex;margin-bottom: 2px;">
			   							<img class="logo-insideweb" id="logo" src="https://www.insidewebmx.com/img/insideweb_logo.png" style="width: 58px;height: 30px;margin-right: 3px;padding-top: 3px;object-fit: cover;">
			   							<p class="logo-letter" style="font-weight: bold;font-size: 28px;color: #fff;margin-top:0;">Inside</p>
			   							<p class="logo-letter2" style="font-size: 28px;color: #fff;margin-top:0;">WEB</p>
			      					</div>

									<h3 class="cover_title" style="font-size:28px;margin-bottom:3px;">Bienvenido ' . ucwords($row['name']) . '</h3>
									<p class="cover_txt" style="font-size:18px;">Haz confirmado tu correo con éxito</p>
								</div>
								</td>
							  </tr>

							  <tr>
							  	<td style="padding:20px;background-color:rgb(100,60,100);">
									<p class="content_txt">Gracias por registrarte en nuestra plataforma ahora podras disfrutar de todos nuestros servicios y formar parte de nuestra comunidad.</p>
							  	</td>
							  </tr>

							  <tr>
							  	<td style="padding:20px;text-align:center;font-size:14px;background-color:#404040;">
									<footer>
										<p class="footer">&copy; 2022 InsideWeb | Todos los derechos reservados</p>
									</footer>
							  	</td>
							  </tr>
				</table>

				</td>
				</tr>
				</table>
			   </div>
			</body>
			</html>
';

				if (!$mail->send()) {
					echo "Error: " . $mail->ErrorInfo;
				}
				else
				{
			    header('Refresh:2;URL=../');
			    $this->msg['code_correct'] = '¡Tu correo ha sido confirmado con éxito!';

					if (!empty($server_imap)) {
						// Add the message to the IMAP.Sent mailbox
						$mail_string = $mail->getSentMIMEMessage();
						$imap_stream = imap_open("{".$server_imap."}", $email_account, $email_password);
						imap_append($imap_stream, "{".$server_imap."}INBOX.Sent", $mail_string);
					}
				}

		        } else {
			        $this->msg['code_error'] = 'El código es incorrecto';
		        }
			}
		}

		return $this->msg;
	}
}

?>