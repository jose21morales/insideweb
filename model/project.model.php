<?php

	    if(isset($_POST['btn-pro'])) {

		$nombre=$_POST['nombre'];
		$correo=$_POST['correo'];
		$mensaje=$_POST['area_comentario'];

      $errores = '';

      if(!empty($nombre)) {
          $nombre = addslashes($nombre);
          $nombre = stripslashes($nombre);
          $nombre = htmlentities($nombre);
          $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
      } else {
          $errores .= 'Por favor introduce tu nombre<br>';
      }

      if(!empty($correo)) {
         $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

         if(filter_var($correo, FILTER_SANITIZE_EMAIL)){
           $correo = filter_var($correo, FILTER_VALIDATE_EMAIL);
         } else {
           $errores .= 'Por favor introduce un correo valido<br>';
         }
      } else {
           $errores .= 'Por favor introduce un correo<br>';
      }

      if(!empty($mensaje)) {
          $mensaje = addslashes($mensaje);
          $mensaje = stripslashes($mensaje);
          $mensaje = htmlentities($mensaje);
          $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
      } else {
          $errores .= 'Por favor ingresa un mensaje';
      }

      if(empty($errores)) {

	$destinatario="jose20.jmmorales@gmail.com";
	$asunto="Enviado desde Online-Web";
	$headers = 'From: webmaster@example.com' . "\r\n" .
    	'Reply-To: webmaster@example.com' . "\r\n" .
    	'X-Mailer: PHP/' . phpversion();

	$contenido="De: $nombre \n";
	$contenido.="Correo: $correo\n";
	$contenido.="Mensaje: $mensaje";

	if(mail($destinatario, $asunto, $contenido,$headers)) {
          $msg = 'Mensaje enviado';
        } else {
          $msg = 'Error, mensaje no enviado';
        }
      }
    }

?>