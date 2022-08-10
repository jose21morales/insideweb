<?php

  function dataForm($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if (isset($_POST['btn-pagos'])) {

      $paq = $_GET['paq'];
      $servicio = $_GET['serv'];

      $nombre=dataForm($_POST['nombre']);
      $servicio=dataForm($_POST['servicio']);
      $pago=dataForm($_POST['metodo-pago']);  
      $correo=dataForm($_POST['correo']);
      $telefono=dataForm($_POST['telefono']);
      $mensaje=dataForm($_POST['texto']);

      $error_name = '';
      $error_servicio = '';
      $error_pago = '';
      $error_mail = '';
      $error_mail_invalid = '';
      $error_phone = '';
      $error_message = '';
      $error_send = '';

      if(!empty($nombre)) {
          $nombre = htmlentities($nombre);
          $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
      } else {
          $error_name = 'Por favor introduce tu nombre';
      }

      if($servicio != 'Selecciona tu servicio...') {
          $servicio = htmlentities($servicio);
          $servicio = filter_var($servicio, FILTER_SANITIZE_STRING);
      } else {
          $error_servicio = 'Por favor introduce un servicio';
      }

      if($pago == 'Paypal') {
          $pago = htmlentities($pago);
          $pago = filter_var($pago, FILTER_SANITIZE_STRING);
      } else {
          $error_pago = 'Por favor introduce tu metodo de pago';
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
          $telefono = htmlentities($telefono);
          $telefono = filter_var($telefono, FILTER_SANITIZE_STRING);
      } else {
          $error_phone = 'Por favor introduce tu número de télefono';
      }

      if(!empty($mensaje)) {
          $mensaje = htmlentities($mensaje);
          $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
      } else {
          $error_message = 'Por favor ingresa un mensaje';
      }

      if(empty($error_name) && empty($error_servicio) && empty($error_pago) && empty($error_mail) && empty($error_mail_invalid) && empty($error_phone) && empty($error_message)) {

      $destinatario="jose20.jmmorales@gmail.com";
      $asunto="Enviado desde la pàgina servicios/pagos";
      $headers = 'From: contact@insidewebmx.com' . "\r\n" .
      'Reply-To: contact@insidewebmx.com' . "\r\n" .
      'Content-type:text/plain; charset=utf-8' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

      $contenido="Paquete/Servicio: $paq $servicio \n";
      $contenido.="De: $nombre \n";
      $contenido.="Servicio: $servicio \n";
      $contenido.="Metodo de pago: $pago \n";
      $contenido.="Correo: $correo\n";
      $contenido.="Tèlefono: $telefono\n";
      $contenido.="Mensaje: $mensaje";
			
      if(mail($destinatario, $asunto, $contenido,$headers)) {
          header('Location: ../view/sended_mail.php');
       } else {
    	   $error_send = 'Error, mensaje no enviado, por favor intente de nuevo más tarde';
        }
      }
  } else {
    $nombre="";
    $servicio="";
    $pago = "";
    $correo = "";
    $telefono = "";
    $mensaje = "";

    $error_name = '';
    $error_servicio = '';
    $error_pago = '';
    $error_mail = '';
    $error_mail_invalid = '';
    $error_phone = '';
    $error_message = '';
  }
?>
