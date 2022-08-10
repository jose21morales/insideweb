<?php

function dataForm($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = addslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST['btn-contacto'])) {

      $nombre=trim($_POST['nombre']);
      $correo=trim($_POST['correo']);
      $telefono=trim($_POST['telefono']);
      $mensaje=trim($_POST['texto']);

      $error_name = '';
      $error_mail = '';
      $error_mail_invalid = '';
      $error_phone = '';
      $error_message = '';

      if(!empty($nombre)) {
          $nombre = dataForm($nombre);
          $nombre = dataForm($nombre);
          $nombre = dataForm($nombre);
          $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
      } else {
          $error_name = 'Por favor introduce tu nombre';
      }

      if(!empty($correo)) {
         $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

         if(filter_var($correo, FILTER_SANITIZE_EMAIL)){
           $correo = filter_var($correo, FILTER_VALIDATE_EMAIL);
         } else {
           $error_mail_invalid = 'Por favor introduce un correo valido';
         }
      } else {
           $error_mail = 'Por favor introduce un correo';
      }

      if(!empty($telefono)) {
          $telefono = dataForm($telefono);
          $telefono = dataForm($telefono);
          $telefono = dataForm($telefono);
          $telefono = filter_var($telefono, FILTER_SANITIZE_STRING);
      } else {
          $error_phone = 'Por favor introduce tu número de télefono';
      }

      if(!empty($mensaje)) {
          $mensaje = dataForm($mensaje);
          $mensaje = dataForm($mensaje);
          $mensaje = dataForm($mensaje);
          $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
      } else {
          $error_message = 'Por favor ingresa un mensaje';
      }

      if(empty($error_name) && empty($error_mail) && empty($error_mail_invalid)
        && empty($error_phone) && empty($error_message)) {

      $destinatario="jose20.jmmorales@gmail.com";
      $asunto="Enviado desde la página de Contactanos";
      $headers = 'From: contact@insidewebmx.com' . "\r\n" .
      'Reply-To: contact@insidewebmx.com' . "\r\n" .
      'Content-type:text/plain; charset=utf-8' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

      $contenido="De: $nombre \n";
      $contenido.="Correo: $correo\n";
      $contenido.="Tèlefono: $telefono\n";
      $contenido.="Mensaje: $mensaje";
      
      if(mail($destinatario, $asunto, $contenido,$headers)) {
          header("Location: view/sended_mail.php");
       } else {
     $msg = 'Error, mensaje no enviado';
      }
    }
} else {
      $nombre='';
      $correo='';
      $telefono='';
      $mensaje='';
}

?>