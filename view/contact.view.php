<div class="banner-navegacion">
	<img class="banner-img-navegacion" src="img/cabeza.png">
	<div class="contenedor-navegacion">
        <div class="container-contacto">
      		<h2 class="banner-titulo-navegacion">Contactanos...</h2>
      		<p class="banner-txt-navegacion">+52 1 962 334 03 80</p>
        </div>
	</div>
</div>

<div class="body_contact">

<div class="container-contacto">
    <h3 class="contacto">CONTACTANOS</h3>
    
  <div class="contenedor-form-info">
    <form class="form-contacto" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <h3 class="form-contacto-titulo">Envianos un mensaje</h3>
	      <input type="text" name="nombre" placeholder="Nombre:" value="<?php echo $nombre; ?>">

        <?php if(!empty($error_name)): ?>
        <div class="error_contact">
          <p><?php echo $error_name; ?></p>
        </div>
        <?php endif; ?>

      	<input type="text" name="correo" placeholder="Correo:" value="<?php echo $correo; ?>">

        <?php if(!empty($error_mail)): ?>
        <div class="error_contact">
          <p><?php echo $error_mail; ?></p>
        </div>
        <?php endif; ?>

        <?php if(!empty($error_mail_invalid)): ?>
        <div class="error_contact">
          <p><?php echo $error_mail_invalid; ?></p>
        </div>
        <?php endif; ?>

        <input type="text" name="telefono" placeholder="Télefono:" value="<?php echo $telefono; ?>">

        <?php if(!empty($error_phone)): ?>
        <div class="error_contact">
          <p><?php echo $error_phone; ?></p>
        </div>
        <?php endif; ?>

      	<textarea class="form-contacto-textarea" name="texto" placeholder="Escribe un mensaje:"><?php echo $mensaje; ?></textarea>

        <?php if(!empty($error_message)): ?>
        <div class="error_contact">
          <p><?php echo $error_message; ?></p>
        </div>
        <?php endif; ?>

      	<input type="submit" name="btn-contacto" value="Enviar correo">
    </form>
    
    <div class="info__contacto">
        <p class="info__contacto-titulo">Información de contacto</p>
        <p class="info__contacto-txt info__contacto-information">Esta es la información necesaria para ponerte en contacto con nosotros y resolver todas tus dudas.</p>
        <p class="info__contacto-txt"><span class="icon-whatsapp"></span>962 334 03 80</p>
        <p class="info__contacto-txt espacio-letras"><span class="icon-envelope"></span>contact@insidewebmx.com</p>
        <p class="info__contacto-txt"><span class="icon-location"></span>Cacahoatan, Chiapas, México</p>
        <div class="info__contacto-redes">
          <a class="info__contacto-redes-link" target="_blank" href="https://www.facebook.com/InsideWeb-102704511274930/"><span class="icon-facebook"></span></a>

          <a class="info__contacto-redes-link" target="_blank" href="https://www.linkedin.com/in/joseph-morales-diaz-3410351aa"><span class="icon-linkedin"></span></a>

          <a class="info__contacto-redes-link" target="_blank" href="https://twitter.com/onlineweb4"><span class="icon-twitter"></span></a>

          <a class="info__contacto-redes-link" target="_blank" href="https://www.instagram.com/insideweb.official/"><span class="icon-instagram"></span></a>
        </div>
    </div>
  </div>
</div>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d481.65721091017167!2d-92.14670392138582!3d15.033856641544443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858e0add7e127ae3%3A0x5fd88adbfe92705f!2sCacahoat%C3%A1n%2C%20Chis.!5e0!3m2!1ses!2smx!4v1592762465529!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>