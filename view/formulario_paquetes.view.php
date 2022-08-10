<div class="paquetes__banner-navegacion">
  <img class="paquetes__banner-img-navegacion" src="img/cabeza.png">
  <div class="paquetes__contenedor-navegacion">
        <div class="paquetes__container-contacto container">
          <h2 class="paquetes__banner-titulo-navegacion">Contactanos...</h2>
          <p class="paquetes__banner-txt-navegacion">+52 1 962 334 03 80</p>
        </div>
  </div>
</div>

<div class="container-blog__view">
    <h3 class="paquetes">Por favor introduce tus datos para que podamos
    ponernos en contacto contigo</h3>

    <form class="form-paquetes" action="" method="POST">
        <h3 class="form-paquetes-titulo">Introduce tus datos</h3>

<div class="form-paquetes--flex">

<div class="form-paquetes--column">
  <label class="label" for="nombre">Nombre:</label>
	<input type="text" name="nombre" placeholder="Escribe tu nombre..." value="<?php echo $nombre; ?>">

        <?php if($error_name != ''): ?>
        <div class="error">
          <p><?php echo $error_name; ?></p>
        </div>
        <?php endif; ?>
</div>

<div class="form-paquetes--column">
  <label class="label" for="servicio">Servicios:</label><br>

  <select type="text" name="servicio">

    <?php

    $servicio = array('Diseño web','Diseño web movil','Desarrollo web','Marketing Digital','CMS','SEO');

    echo "<option>Selecciona tu servicio...</option>";

    for ($i=0; $i < count($servicio) ; $i++) {
      echo "<option>" . $servicio[$i] . "</option>";
    }

    ?>

  </select>

        <?php if($error_servicio != ''): ?>
        <div class="error">
          <p><?php echo $error_servicio; ?></p>
        </div>
        <?php endif; ?>
</div>

<div class="form-paquetes--column">
  <label class="label" for="pago">Método de pago:</label><br>
  <select name="metodo-pago">
    <option>Paypal</option>
  </select>

        <?php if($error_pago != ''): ?>
        <div class="error">
          <p><?php echo $error_pago; ?></p>
        </div>
        <?php endif; ?>  
</div>

<div class="form-paquetes--column">
  <label class="label" for="correo">Correo:</label>
	<input type="text" name="correo" placeholder="Escribe tu correo..." value="<?php echo $correo; ?>">

        <?php if($error_mail != ''): ?>
        <div class="error">
          <p><?php echo $error_mail; ?></p>
        </div>
        <?php endif; ?>

        <?php if($error_mail_invalid != ''): ?>
        <div class="error">
          <p><?php echo $error_mail_invalid; ?></p>
        </div>
        <?php endif; ?>  
</div>

<div class="form-paquetes--column">
  <label class="label" for="telefono">Télefono:</label>
	<input type="text" name="telefono" placeholder="Télefono..." value="<?php echo $telefono; ?>">

        <?php if($error_phone != ''): ?>
        <div class="error">
          <p><?php echo $error_phone; ?></p>
        </div>
        <?php endif; ?>
</div>

<div class="form-paquetes--column">
  <label class="label" for="texto">Mensaje:</label>
	<textarea name="texto" placeholder="Escriba un mensaje..."><?php echo $mensaje; ?></textarea>

        <?php if($error_message != ''): ?>
        <div class="error">
          <p><?php echo $error_message; ?></p>
        </div>
        <?php endif; ?>

       <?php if(!empty($msg)): ?>
        <div class="msg">
          <p><?php echo $msg; ?></p>
        </div>
        <?php endif; ?>

       <?php if(!empty($error_send)): ?>
        <div class="error">
          <p><?php echo $error_send; ?></p>
        </div>
        <?php endif; ?>
</div>
</div>

	<input type="submit" name="btn-pagos" value="Enviar mensaje">
    </form>
</div>