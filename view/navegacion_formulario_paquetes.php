<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="description" content="Si tienes una mediana empresa o micro empresa y quieres aumentar tus ventas por internet llegando a más personas esta es tu oportunidad en Online-Web desarrollamos tu proyecto.">
  <meta name="keywords" content="desarrollo web en cacahoatan, diseño web en cacahoatan, desarrollo web, diseño web, desarrollo de paginas web, diseño web movil, responsive design, maquetacion web, paginas web, cms, marketing digital, seo, php, sql, js, html, css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>InsideWEB</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
  <link rel="stylesheet" type="text/css" href="../css/formulario_paquetes.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
  <link rel="stylesheet" type="text/css" href="../css/perfil.css">
  <link rel="stylesheet" type="text/css" href="../css/forget_password.css">
  <link rel="shortcut icon" type="image/png" href="../img/favicon.png" />
</head>
<body>
    
    <!-- Load Facebook SDK for JavaScript -->
     <!-- <div id="fb-root"></div>-->
      <script>/*
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk')); */</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="102704511274930"
  theme_color="#0084ff"
  logged_in_greeting="Hola! ¿Còmo puedo ayudarte?"
  logged_out_greeting="Hola! ¿Còmo puedo ayudarte?">
      </div>

    <div class="header-fijo">
    <div class="header">
      <h1 class="header-logo">ONLINE-WEB</h1>

        <div class="header-contenido container">
          <p class="header-location"><span class="icon-location"></span>Cacahoatan, Chiapas, México</p>
          <p class="header-phone"><span class="icon-phone"></span>962 334 03 80</p>
        </div>
    </div>
    
   <div class="contenedor-div" id="contenedor-div">

    <div class="contenedor-div--flex container">

    <div class="contenedor-div--flex-1">
      <div class="logo-container">
        <img class="logo-insideweb" id="logo" src="../img/insideweb_logo.png">
        <p class="logo-letter">Inside</p><p class="logo-letter2">WEB</p>
      </div>

      <!--<img class="logo-white" src="../img/online-logo.png">-->
      <!--<img class="logo" src="img/online.png">-->
    </div>

<div class="contenedor-div--flex-2">

		<span class="icon-bars" id="btnMenu"></span>
		<div class="nav" id="nav">
		 <ul class="menu" id="menu">

      <?php
      session_start();


      if (isset($_SESSION['user'])):
      
      $users = new User();
      $user = $users->getUser($_SESSION['user']);

      foreach($user as $user) {

      ?>

       <li class="perfil__item" id="perfil__item">

        <?php if(!empty($user['avatar'])) { ?>

        <img class="menu__link-img" src="../img/<?php echo $user['avatar']; ?>">

        <?php } elseif(empty($user['avatar']) && $user['sex'] == 'h') { ?>

          <img class="menu__link-img" src="../img/avatar-m.jpg">

        <?php } elseif(empty($user['avatar']) && $user['sex'] == 'm') { ?>

        <img class="menu__link-img" src="../img/avatar-w.png">

        <?php } } ?>

        <ul class="menu2" id="menu2">
          <li class="menu__item2"><a class="menu__link2" id="menu__link2-perfil" href="../controller/perfil.controller.php?id=<?php echo $user['id']; ?>&avatar=<?php echo $user['avatar']; ?>&name=<?php echo $user['name']; ?>&sex=<?php echo $user['sex']; ?>&user=<?php echo $user['user']; ?>&mail=<?php echo $user['mail']; ?>"><span class="icon-user"></span> Perfil</a></li>

          <li class="menu__item2"><a class="menu__link2" id="menu__link2-close" href="../model/close_session.php"><span class="icon-power-off"></span> Cerrar sesión</a></li>
        </ul>
        
        </li>

        


       
       <?php endif; ?>
			 
       <li class="menu__item"><a class="menu__link" id="menu__link-about" href="../index.php?action=about"><span class="icon-user"></span> Acerca de..</a></li>

       <li class="menu__item"><a class="menu__link" id="menu__link-blog" href="../index.php?action=blog"><span class="icon-social-blogger"></span> Blog</a></li>
       
       <li class="menu__item"><a class="menu__link" id="menu__link-portafolio" href="../index.php?action=projects"><span class="icon-folder-open"></span> Proyectos</a></li>
       
       <li class="menu__item"><a class="menu__link" id="menu__link-contact" href="../index.php?action=contact"><span class="icon-phone"></span> Contacto</a></li>
       
       <li class="menu__item"><a class="menu__link" id="menu__link-home" href="../index.php"><span class="icon-home"></span> Inicio</a></li>
		 </ul>
		</div>

</div>

</div>

	 </div>
  </div>