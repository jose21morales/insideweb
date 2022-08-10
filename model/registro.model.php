<?php

class Registro {
	private $errors;

	public function __construct() {
	    $this->errors = [];
	}

	public function insertRegistro() {
		require_once("conexion.php");
        $conexion = Conectar::conexion();

		if (isset($_POST['btn-registro']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

			$name = htmlentities(addslashes($_POST['name']), ENT_QUOTES);
			$sex = strtolower($_POST['sex']);
			$user = htmlentities(addslashes($_POST['user']), ENT_QUOTES);
			$mail_register = htmlentities(addslashes($_POST['mail']), ENT_QUOTES);
			$password = htmlentities(addslashes($_POST['password']), ENT_QUOTES);
			$password2 = htmlentities(addslashes($_POST['password2']), ENT_QUOTES);
			$pass_cifrado = password_hash($password, PASSWORD_DEFAULT, ['cost'=>15]);


			$ip = $_SERVER['REMOTE_ADDR'];

			if (isset($send_ads)) {
				$send_ads = $_POST['send_ads'];
				$send_ads = 1;
			} else {
				$send_ads = 0;
			}

			// Definir variables man and woman

			$isMan = '';
			$isWoman = '';

			if ($sex == 'h') {
				$isMan = 'avatar-m.jpg';
			} else if ($sex == 'm') {
				$isWoman = 'avatar-w.png';
			}

			$man_or_woman = $isMan . $isWoman;

			$random = uniqid();
			$verify_mail = 0;

			if (empty($name)) {
				$this->errors['name'] = 'Por favor escribe tu nombre';
			}
			if (empty($sex)) {
				$this->errors['sex'] = 'Por favor selecciona tu sexo';
			}
			if (empty($user)) {
				$this->errors['user'] = 'Por favor escriba un usuario';
			} else {

				$sql = "SELECT user FROM users WHERE user = :user";
				$statements = $conexion->prepare($sql);
				$statements->bindValue(":user", $user);
				$statements->execute();

				$row_count = $statements->rowCount();

				if ($row_count != 0) {
					$this->errors['user_exist'] = 'El usuario ya existe, intente con otro';
				}				
			}
			if (empty($mail_register)) {
				$this->errors['mail'] = 'Por favor escribe tu dirección de correo eléctronico';
			} else {

				$sql = "SELECT mail FROM users WHERE mail = :mail";
				$statements = $conexion->prepare($sql);
				$statements->bindValue(":mail", $mail_register);
				$statements->execute();

				$row_count = $statements->rowCount();

				if ($row_count != 0) {
					$this->errors['mail_exist'] = 'El correo ya existe en nuestra base de datos';
				}
			}
			if (empty($password)) {
				$this->errors['password'] = 'Por favor escribe una contraseña';
			}
			if (empty($password2)) {
				$this->errors['password2'] = 'Por favor confirma tu contraseña';
			}
			if (strlen($password) > 0 && strlen($password) < 8) {
				$this->errors['password_characters'] = 'La contraseña debe tener un minimo de 8 caracteres.';
			} elseif ($password != $password2) {
				$this->errors['password_confirm'] = 'Las contraseñas no coinciden';
			}
			/*if (!isset($_POST['privacy_policy'])) {
				$this->errors['privacy_policy'] = 'Por favor lea y acepte nuestras politicas de privacidad';
			}*/
			if (empty($this->errors)) {

				$sql = "INSERT INTO users (avatar, name, sex, user, mail, password, code, verify_mail, send_ads, ip) VALUES (:avatar, :name, :sex, :user, :mail, :password, :code, :verify_mail, :send_ads, :ip)";
				$statements = $conexion->prepare($sql);
				$statements->bindValue(":avatar", $man_or_woman);
				$statements->bindValue(":name", $name);
				$statements->bindValue(":sex", $sex);
				$statements->bindValue(":user", $user);
				$statements->bindValue(":mail", $mail_register);
				$statements->bindValue(":password", $pass_cifrado);
				$statements->bindValue(":code", $random);
				$statements->bindValue(":verify_mail", $verify_mail);
				$statements->bindValue(":send_ads", $send_ads);
				$statements->bindValue(":ip", $ip);
				$statements->execute();

		$server_smtp = 'smtp.hostinger.com';
		$server_imap = 'imap.hostinger.com';
		$email_account = 'contact@insidewebmx.com';
		$email_password = 'Linkinpark1';

		require '../phpmailer/PHPMailerAutoload.php';

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
				$mail->addAddress($mail_register);

				$mail->isHTML(true);
				$mail->CharSet = 'UTF-8';
				$mail->Subject='Confirma tu dirección de correo | InsideWEB';
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

									<h3 class="cover_title" style="font-size:28px;margin-bottom:3px;">Hola '.ucwords($name).'</h3>
									<p class="cover_txt" style="font-size:18px;">Te damos la bienvenida a nuestra plataforma web.</p>
								</div>
								</td>
							  </tr>

							  <tr>
							  	<td style="padding:20px;background-color:rgb(100,60,100);">
									<p class="content_txt">Gracias por registrarte en nuestra plataforma, ahora para disfrutar de nuestros servicios debes confirmar tu dirección de correo eléctronico.</p><br>

									<p class="content_txt">Copia y pega el siguiente código para confirmar tu correo eléctronico.</p>

									<p class="code" style="font-size:18px;"><b>Código: ' . $random . '</b></p>
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

				header('Refresh:2;URL=confirm_mail.controller.php');
				$this->errors['msg'] = "¡Gracias por registrarte!";

					if (!empty($server_imap)) {
						// Add the message to the IMAP.Sent mailbox
						$mail_string = $mail->getSentMIMEMessage();
						$imap_stream = imap_open("{".$server_imap."}", $email_account, $email_password);
						imap_append($imap_stream, "{".$server_imap."}INBOX.Sent", $mail_string);
					}
				}
			}
		}
		return $this->errors;
	}
}

?>